<?php

namespace App\Presenters;

use App\Model\Author;
use App\Model\Article;
use \Nette\Application\UI\Form;

class MainPresenter extends BasePresenter
{
    
    const
    FORM_MSG_REQUIRED = 'Tohle pole je povinné.',
    FORM_MSG_VALID_EMAIL = 'Vyplnte prosim platny email';
    
    /**
     * @inject
     * @var \Kdyby\Doctrine\EntityManager
     */
    public $EntityManager;
    
    /**instance noveho zaznamu**/
    private $newRecord;
    
    
    public function renderDefault()
    {
        //just for test
	//$dao = $this->EntityManager->getRepository(Author::getClassName());
        //return;
    }
        
        
/**
 * Vrátí formulář pro pridani autora.
 * @return Form formulář author
 */
protected function createComponentNewAuthorForm()
{
    $form = new Form  ;
    $form->addText('authorName', 'Autor:')
        ->setType('text')
        ->setDefaultValue('')
        ->setRequired(self::FORM_MSG_REQUIRED)
        ->addRule(Form::FILLED, self::FORM_MSG_REQUIRED);
    $form->addText('authorEmail', 'Email:')
        ->setType('text')
        ->setDefaultValue('')
        ->setRequired(self::FORM_MSG_REQUIRED)
        ->addRule(Form::EMAIL, self::FORM_MSG_VALID_EMAIL);
    $form->addText('bookName', 'Kniha:')
        ->setType('text')
        ->setDefaultValue('')
        ->setRequired(self::FORM_MSG_REQUIRED)
        ->addRule(Form::FILLED, self::FORM_MSG_REQUIRED);
    $form->addSubmit('addUser', 'Pridej autora');
    $form->onSuccess[] = [$this, 'authorFormSucceeded'];
    return $form;
}

public function authorFormSucceeded($form, $values)
{
    $author = new Author();
    $author->setName($values->authorName);
    $author->setEmail($values->authorEmail);
    
    $this->EntityManager->persist($author);
    $this->EntityManager->flush();
    
    $article = new Article();
    $article->setName($values->bookName);
    $article->setAuthor($author);
    $this->EntityManager->persist($article);
    
    $articles = new \Doctrine\Common\Collections\ArrayCollection();
    $articles->add($article);
    
    $author->setArticles($articles);
    $this->EntityManager->persist($author);
    $this->EntityManager->flush();
}

}
