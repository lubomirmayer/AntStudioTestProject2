<?php
// source: C:\xampp\htdocs\PhpProject2\app/config/config.neon 
// source: C:\xampp\htdocs\PhpProject2\app/config/config.local.neon 

class Container_b46f974dc1 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'IteratorAggregate' => [1 => ['console.helperSet', 'routing.router']],
			'Traversable' => [1 => ['console.helperSet', 'routing.router']],
			'Symfony\Component\Console\Helper\HelperSet' => [1 => ['console.helperSet']],
			'Symfony\Component\Console\Application' => [1 => ['console.application']],
			'Kdyby\Console\Application' => [1 => ['console.application']],
			'Nette\Object' => [['console.router'], ['74_App_Model_AuthorManager']],
			'Nette\Application\IRouter' => [['console.router', 'console.originalRouter'], ['routing.router']],
			'Kdyby\Console\CliRouter' => [['console.router']],
			'Kdyby\Events\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Doctrine\Common\EventManager' => [1 => ['events.manager'], 0 => ['doctrine.default.evm']],
			'Kdyby\Events\LazyEventManager' => [1 => ['events.manager']],
			'Doctrine\Common\Annotations\Reader' => [['annotations.reflectionReader'], ['annotations.reader']],
			'Doctrine\Common\Annotations\AnnotationReader' => [['annotations.reflectionReader']],
			'Doctrine\Common\Cache\Cache' => [
				[
					'annotations.cache.annotations',
					'doctrine.cache.default.metadata',
					'doctrine.cache.default.query',
					'doctrine.cache.default.ormResult',
					'doctrine.cache.default.hydration',
					'doctrine.cache.default.dbalResult',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver' => [
				[
					'doctrine.default.metadataDriver',
					'doctrine.default.driver.App.annotationsImpl',
					'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl',
				],
			],
			'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.default.metadataDriver']],
			'Doctrine\ORM\Repository\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Kdyby\Doctrine\RepositoryFactory' => [['doctrine.default.repositoryFactory']],
			'Doctrine\ORM\Configuration' => [['doctrine.default.ormConfiguration']],
			'Doctrine\DBAL\Configuration' => [
				[
					'doctrine.default.ormConfiguration',
					'doctrine.default.dbalConfiguration',
				],
			],
			'Kdyby\Doctrine\Configuration' => [['doctrine.default.ormConfiguration']],
			'Kdyby\Events\NamespacedEventManager' => [['doctrine.default.evm']],
			'Doctrine\ORM\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\Common\Persistence\ObjectManager' => [1 => ['doctrine.default.entityManager']],
			'Doctrine\ORM\EntityManagerInterface' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Persistence\QueryExecutor' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Persistence\Queryable' => [1 => ['doctrine.default.entityManager']],
			'Kdyby\Doctrine\EntityManager' => [1 => ['doctrine.default.entityManager']],
			'Tracy\IBarPanel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Logging\SQLLogger' => [['doctrine.default.diagnosticsPanel']],
			'Kdyby\Doctrine\Diagnostics\Panel' => [['doctrine.default.diagnosticsPanel']],
			'Doctrine\DBAL\Connection' => [1 => ['doctrine.default.connection']],
			'Doctrine\DBAL\Driver\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\Connection' => [1 => ['doctrine.default.connection']],
			'Kdyby\Doctrine\DI\IRepositoryFactory' => [['doctrine.repositoryFactory.default.defaultRepositoryFactory']],
			'Doctrine\ORM\Tools\SchemaValidator' => [1 => ['doctrine.default.schemaValidator']],
			'Doctrine\ORM\Tools\SchemaTool' => [1 => ['doctrine.default.schemaTool']],
			'Kdyby\Doctrine\Tools\CacheCleaner' => [1 => ['doctrine.default.cacheCleaner']],
			'Doctrine\DBAL\Schema\AbstractSchemaManager' => [1 => ['doctrine.default.schemaManager']],
			'Symfony\Component\Console\Helper\Helper' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Symfony\Component\Console\Helper\HelperInterface' => [1 => ['doctrine.helper.entityManager', 'doctrine.helper.connection']],
			'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper' => [1 => ['doctrine.helper.entityManager']],
			'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper' => [1 => ['doctrine.helper.connection']],
			'Kdyby\Doctrine\Console\OrmDelegateCommand' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'doctrine.cli.13',
					'doctrine.cli.14',
					'doctrine.cli.15',
					'doctrine.cli.16',
				],
			],
			'Symfony\Component\Console\Command\Command' => [
				1 => [
					'doctrine.cli.0',
					'doctrine.cli.1',
					'doctrine.cli.2',
					'doctrine.cli.3',
					'doctrine.cli.4',
					'doctrine.cli.5',
					'doctrine.cli.6',
					'doctrine.cli.7',
					'doctrine.cli.8',
					'doctrine.cli.9',
					'doctrine.cli.10',
					'doctrine.cli.11',
					'doctrine.cli.12',
					'doctrine.cli.13',
					'doctrine.cli.14',
					'doctrine.cli.15',
					'doctrine.cli.16',
				],
			],
			'Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand' => [1 => ['doctrine.cli.0']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand' => [1 => ['doctrine.cli.1']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand' => [1 => ['doctrine.cli.2']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand' => [1 => ['doctrine.cli.3']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand' => [1 => ['doctrine.cli.4']],
			'Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand' => [1 => ['doctrine.cli.5']],
			'Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand' => [1 => ['doctrine.cli.6']],
			'Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand' => [1 => ['doctrine.cli.7']],
			'Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand' => [1 => ['doctrine.cli.8']],
			'Kdyby\Doctrine\Console\DbalDelegateCommand' => [1 => ['doctrine.cli.9', 'doctrine.cli.12']],
			'Kdyby\Doctrine\Console\Proxy\ImportCommand' => [1 => ['doctrine.cli.9']],
			'Kdyby\Doctrine\Console\Proxy\InfoCommand' => [1 => ['doctrine.cli.10']],
			'Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand' => [1 => ['doctrine.cli.11']],
			'Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand' => [1 => ['doctrine.cli.12']],
			'Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand' => [1 => ['doctrine.cli.13']],
			'Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand' => [1 => ['doctrine.cli.14']],
			'Kdyby\Doctrine\Console\Proxy\SchemaDropCommand' => [1 => ['doctrine.cli.15']],
			'Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand' => [1 => ['doctrine.cli.16']],
			'Doctrine\Common\Persistence\AbstractManagerRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ConnectionRegistry' => [1 => ['doctrine.registry']],
			'Doctrine\Common\Persistence\ManagerRegistry' => [1 => ['doctrine.registry']],
			'Kdyby\Doctrine\Registry' => [1 => ['doctrine.registry']],
			'App\Forms\FormFactory' => [1 => ['71_App_Forms_FormFactory']],
			'App\Forms\SignInFormFactory' => [1 => ['72_App_Forms_SignInFormFactory']],
			'App\Forms\SignUpFormFactory' => [1 => ['73_App_Forms_SignUpFormFactory']],
			'App\Model\AuthorManager' => [1 => ['74_App_Model_AuthorManager']],
			'Nette\Security\IAuthenticator' => [1 => ['75_App_Model_UserManager']],
			'App\Model\UserManager' => [1 => ['75_App_Model_UserManager']],
			'App\Presenters\BasePresenter' => [
				1 => ['application.1', 'application.3', 'application.4', 'application.5'],
			],
			'Nette\Application\UI\Presenter' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
				],
			],
			'ArrayAccess' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'routing.router',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.3']],
			'App\Presenters\MainPresenter' => [1 => ['application.4']],
			'App\Presenters\SignPresenter' => [1 => ['application.5']],
			'KdybyModule\CliPresenter' => [1 => ['application.6']],
			'NetteModule\ErrorPresenter' => [1 => ['application.7']],
			'NetteModule\MicroPresenter' => [1 => ['application.8']],
			'Nette\Utils\ArrayList' => [1 => ['routing.router']],
			'Countable' => [1 => ['routing.router']],
			'Nette\Application\Routers\RouteList' => [1 => ['routing.router']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'71_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'72_App_Forms_SignInFormFactory' => 'App\Forms\SignInFormFactory',
			'73_App_Forms_SignUpFormFactory' => 'App\Forms\SignUpFormFactory',
			'74_App_Model_AuthorManager' => 'App\Model\AuthorManager',
			'75_App_Model_UserManager' => 'App\Model\UserManager',
			'annotations.cache.annotations' => 'Doctrine\Common\Cache\Cache',
			'annotations.reader' => 'Doctrine\Common\Annotations\Reader',
			'annotations.reflectionReader' => 'Doctrine\Common\Annotations\AnnotationReader',
			'application.1' => 'App\Presenters\Error4xxPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\MainPresenter',
			'application.5' => 'App\Presenters\SignPresenter',
			'application.6' => 'KdybyModule\CliPresenter',
			'application.7' => 'NetteModule\ErrorPresenter',
			'application.8' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'console.application' => 'Kdyby\Console\Application',
			'console.helperSet' => 'Symfony\Component\Console\Helper\HelperSet',
			'console.originalRouter' => 'Nette\Application\IRouter',
			'console.router' => 'Kdyby\Console\CliRouter',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'doctrine.cache.default.dbalResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.hydration' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.metadata' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.ormResult' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cache.default.query' => 'Doctrine\Common\Cache\Cache',
			'doctrine.cli.0' => 'Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand',
			'doctrine.cli.1' => 'Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand',
			'doctrine.cli.10' => 'Kdyby\Doctrine\Console\Proxy\InfoCommand',
			'doctrine.cli.11' => 'Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand',
			'doctrine.cli.12' => 'Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand',
			'doctrine.cli.13' => 'Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand',
			'doctrine.cli.14' => 'Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand',
			'doctrine.cli.15' => 'Kdyby\Doctrine\Console\Proxy\SchemaDropCommand',
			'doctrine.cli.16' => 'Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand',
			'doctrine.cli.2' => 'Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand',
			'doctrine.cli.3' => 'Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand',
			'doctrine.cli.4' => 'Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand',
			'doctrine.cli.5' => 'Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand',
			'doctrine.cli.6' => 'Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand',
			'doctrine.cli.7' => 'Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand',
			'doctrine.cli.8' => 'Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand',
			'doctrine.cli.9' => 'Kdyby\Doctrine\Console\Proxy\ImportCommand',
			'doctrine.default.cacheCleaner' => 'Kdyby\Doctrine\Tools\CacheCleaner',
			'doctrine.default.connection' => 'Kdyby\Doctrine\Connection',
			'doctrine.default.dbalConfiguration' => 'Doctrine\DBAL\Configuration',
			'doctrine.default.diagnosticsPanel' => 'Kdyby\Doctrine\Diagnostics\Panel',
			'doctrine.default.driver.App.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.driver.Kdyby_Doctrine.annotationsImpl' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriver',
			'doctrine.default.entityManager' => 'Kdyby\Doctrine\EntityManager',
			'doctrine.default.evm' => 'Kdyby\Events\NamespacedEventManager',
			'doctrine.default.metadataDriver' => 'Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain',
			'doctrine.default.ormConfiguration' => 'Kdyby\Doctrine\Configuration',
			'doctrine.default.repositoryFactory' => 'Kdyby\Doctrine\RepositoryFactory',
			'doctrine.default.schemaManager' => 'Doctrine\DBAL\Schema\AbstractSchemaManager',
			'doctrine.default.schemaTool' => 'Doctrine\ORM\Tools\SchemaTool',
			'doctrine.default.schemaValidator' => 'Doctrine\ORM\Tools\SchemaValidator',
			'doctrine.helper.connection' => 'Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper',
			'doctrine.helper.entityManager' => 'Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper',
			'doctrine.registry' => 'Kdyby\Doctrine\Registry',
			'doctrine.repositoryFactory.default.defaultRepositoryFactory' => 'Kdyby\Doctrine\EntityRepository',
			'events.manager' => 'Kdyby\Events\LazyEventManager',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'routing.router' => 'Nette\Application\Routers\RouteList',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'application.1' => true,
				'application.2' => true,
				'application.3' => true,
				'application.4' => true,
				'application.5' => true,
				'application.6' => true,
				'application.7' => true,
				'application.8' => true,
				'doctrine.cli.0' => false,
				'doctrine.cli.1' => false,
				'doctrine.cli.10' => false,
				'doctrine.cli.11' => false,
				'doctrine.cli.12' => false,
				'doctrine.cli.13' => false,
				'doctrine.cli.14' => false,
				'doctrine.cli.15' => false,
				'doctrine.cli.16' => false,
				'doctrine.cli.2' => false,
				'doctrine.cli.3' => false,
				'doctrine.cli.4' => false,
				'doctrine.cli.5' => false,
				'doctrine.cli.6' => false,
				'doctrine.cli.7' => false,
				'doctrine.cli.8' => false,
				'doctrine.cli.9' => false,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\Error4xxPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\MainPresenter',
				'application.5' => 'App\Presenters\SignPresenter',
				'application.6' => 'KdybyModule\CliPresenter',
				'application.7' => 'NetteModule\ErrorPresenter',
				'application.8' => 'NetteModule\MicroPresenter',
			],
			'kdyby.console.command' => [
				'doctrine.cli.0' => true,
				'doctrine.cli.1' => true,
				'doctrine.cli.10' => true,
				'doctrine.cli.11' => true,
				'doctrine.cli.12' => true,
				'doctrine.cli.13' => true,
				'doctrine.cli.14' => true,
				'doctrine.cli.15' => true,
				'doctrine.cli.16' => true,
				'doctrine.cli.2' => true,
				'doctrine.cli.3' => true,
				'doctrine.cli.4' => true,
				'doctrine.cli.5' => true,
				'doctrine.cli.6' => true,
				'doctrine.cli.7' => true,
				'doctrine.cli.8' => true,
				'doctrine.cli.9' => true,
			],
			'doctrine.connection' => ['doctrine.default.connection' => true],
			'kdyby.doctrine.connection' => ['doctrine.default.connection' => true],
			'doctrine.entityManager' => ['doctrine.default.entityManager' => true],
			'kdyby.doctrine.entityManager' => ['doctrine.default.entityManager' => true],
			'kdyby.console.helper' => [
				'doctrine.helper.connection' => 'db',
				'doctrine.helper.entityManager' => 'em',
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'doctrine.cacheCleaner' => 'doctrine.default.cacheCleaner',
			'doctrine.schemaManager' => 'doctrine.default.schemaManager',
			'doctrine.schemaTool' => 'doctrine.default.schemaTool',
			'doctrine.schemaValidator' => 'doctrine.default.schemaValidator',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => 'C:\xampp\htdocs\PhpProject2\app',
			'wwwDir' => 'C:\xampp\htdocs\PhpProject2\www',
			'debugMode' => false,
			'productionMode' => true,
			'consoleMode' => true,
			'tempDir' => 'C:\xampp\htdocs\PhpProject2\app/../temp',
			'doctrine.debug' => false,
			'doctrine' => [
				'orm' => ['defaultEntityManager' => 'default'],
				'dbal' => ['defaultConnection' => 'default'],
			],
		];
	}


	public function createService__71_App_Forms_FormFactory(): App\Forms\FormFactory
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	public function createService__72_App_Forms_SignInFormFactory(): App\Forms\SignInFormFactory
	{
		$service = new App\Forms\SignInFormFactory($this->getService('71_App_Forms_FormFactory'),
			$this->getService('security.user'));
		return $service;
	}


	public function createService__73_App_Forms_SignUpFormFactory(): App\Forms\SignUpFormFactory
	{
		$service = new App\Forms\SignUpFormFactory($this->getService('71_App_Forms_FormFactory'),
			$this->getService('75_App_Model_UserManager'));
		return $service;
	}


	public function createService__74_App_Model_AuthorManager(): App\Model\AuthorManager
	{
		$service = new App\Model\AuthorManager;
		return $service;
	}


	public function createService__75_App_Model_UserManager(): App\Model\UserManager
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	public function createServiceAnnotations__cache__annotations(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Annotations',
			false);
		$service->setNamespace('Kdyby_annotations.cache.annotations_cab1707e');
		return $service;
	}


	public function createServiceAnnotations__reader(): Doctrine\Common\Annotations\Reader
	{
		$service = new Doctrine\Common\Annotations\CachedReader($this->getService('annotations.reflectionReader'),
			$this->getService('annotations.cache.annotations'), false);
		return $service;
	}


	public function createServiceAnnotations__reflectionReader(): Doctrine\Common\Annotations\AnnotationReader
	{
		$service = new Doctrine\Common\Annotations\AnnotationReader;
		$service->addGlobalIgnoredName('persistent');
		$service->addGlobalIgnoredName('serializationVersion');
		return $service;
	}


	public function createServiceApplication__1(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\Error4xxPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	public function createServiceApplication__2(): App\Presenters\ErrorPresenter
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\HomepagePresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	public function createServiceApplication__4(): App\Presenters\MainPresenter
	{
		$service = new App\Presenters\MainPresenter($this->getService('74_App_Model_AuthorManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\MainPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\MainPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	public function createServiceApplication__5(): App\Presenters\SignPresenter
	{
		$service = new App\Presenters\SignPresenter($this->getService('72_App_Forms_SignInFormFactory'),
			$this->getService('73_App_Forms_SignUpFormFactory'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['App\Presenters\SignPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['App\Presenters\SignPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	public function createServiceApplication__6(): KdybyModule\CliPresenter
	{
		$service = new KdybyModule\CliPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectConsole($this->getService('console.application'), $this->getService('application.application'));
		$service->invalidLinkMode = 1;
		$service->onShutdown = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onAnchor = $this->getService('events.manager')->createEvent(['KdybyModule\CliPresenter', 'onAnchor'],
			$service->onAnchor, null, false);
		return $service;
	}


	public function createServiceApplication__7(): NetteModule\ErrorPresenter
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	public function createServiceApplication__8(): NetteModule\MicroPresenter
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$self = $this; $service->onError[] = function ($app, $e) use ($self) {
			$app->errorPresenter = false;
			$app->onShutdown[] = function () { exit(254); };
		};
		$service->onStartup = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onStartup'],
			$service->onStartup, null, false);
		$service->onShutdown = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onShutdown'],
			$service->onShutdown, null, false);
		$service->onRequest = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onRequest'],
			$service->onRequest, null, false);
		$service->onPresenter = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onPresenter'],
			$service->onPresenter, null, false);
		$service->onResponse = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onResponse'],
			$service->onResponse, null, false);
		$service->onError = $this->getService('events.manager')->createEvent(['Nette\Application\Application', 'onError'],
			$service->onError, null, false);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		if (method_exists($service, 'setMapping')) { $service->setMapping(['Kdyby' => 'KdybyModule\*\*Presenter']); } elseif (property_exists($service, 'mapping')) { $service->mapping['Kdyby'] = 'KdybyModule\*\*Presenter'; };
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\IJournal
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\PhpProject2\app/../temp/cache/journal.s3db');
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\IStorage
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\PhpProject2\app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	public function createServiceConsole__application(): Kdyby\Console\Application
	{
		$service = new Kdyby\Console\Application('Nette Framework', 'unknown');
		$service->setHelperSet($this->getService('console.helperSet'));
		$service->injectServiceLocator($this);
		$service->add($this->getService('doctrine.cli.0'));
		$service->add($this->getService('doctrine.cli.1'));
		$service->add($this->getService('doctrine.cli.2'));
		$service->add($this->getService('doctrine.cli.3'));
		$service->add($this->getService('doctrine.cli.4'));
		$service->add($this->getService('doctrine.cli.5'));
		$service->add($this->getService('doctrine.cli.6'));
		$service->add($this->getService('doctrine.cli.7'));
		$service->add($this->getService('doctrine.cli.8'));
		$service->add($this->getService('doctrine.cli.9'));
		$service->add($this->getService('doctrine.cli.10'));
		$service->add($this->getService('doctrine.cli.11'));
		$service->add($this->getService('doctrine.cli.12'));
		$service->add($this->getService('doctrine.cli.13'));
		$service->add($this->getService('doctrine.cli.14'));
		$service->add($this->getService('doctrine.cli.15'));
		$service->add($this->getService('doctrine.cli.16'));
		return $service;
	}


	public function createServiceConsole__helperSet(): Symfony\Component\Console\Helper\HelperSet
	{
		$service = new Symfony\Component\Console\Helper\HelperSet;
		$service->set(new Symfony\Component\Console\Helper\ProcessHelper);
		$service->set(new Symfony\Component\Console\Helper\DescriptorHelper);
		$service->set(new Symfony\Component\Console\Helper\FormatterHelper);
		$service->set(new Symfony\Component\Console\Helper\QuestionHelper);
		$service->set(new Symfony\Component\Console\Helper\DebugFormatterHelper);
		$service->set(new Kdyby\Console\Helpers\PresenterHelper($this->getService('application.application')));
		$service->set(new Kdyby\Console\ContainerHelper($this), 'dic');
		$service->set($this->getService('doctrine.helper.entityManager'), 'em');
		$service->set($this->getService('doctrine.helper.connection'), 'db');
		return $service;
	}


	public function createServiceConsole__originalRouter(): Nette\Application\IRouter
	{
		$service = App\RouterFactory::createRouter();
		return $service;
	}


	public function createServiceConsole__router(): Kdyby\Console\CliRouter
	{
		$service = new Kdyby\Console\CliRouter($this);
		return $service;
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', null, null,
			['lazy' => true]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		$service->onConnect = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onConnect'],
			$service->onConnect, null, false);
		$service->onQuery = $this->getService('events.manager')->createEvent(['Nette\Database\Connection', 'onQuery'],
			$service->onQuery, null, false);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Context
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	public function createServiceDoctrine__cache__default__dbalResult(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.dbalResult',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.dbalResult_cab1707e');
		return $service;
	}


	public function createServiceDoctrine__cache__default__hydration(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.hydration',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.hydration_cab1707e');
		return $service;
	}


	public function createServiceDoctrine__cache__default__metadata(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.metadata',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.metadata_cab1707e');
		return $service;
	}


	public function createServiceDoctrine__cache__default__ormResult(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.ormResult',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.ormResult_cab1707e');
		return $service;
	}


	public function createServiceDoctrine__cache__default__query(): Doctrine\Common\Cache\Cache
	{
		$service = new Kdyby\DoctrineCache\Cache($this->getService('cache.storage'), 'Doctrine.Default.query',
			false);
		$service->setNamespace('Kdyby_doctrine.cache.default.query_cab1707e');
		return $service;
	}


	public function createServiceDoctrine__cli__0(): Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearCollectionRegionCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__1(): Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearEntityRegionCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__10(): Kdyby\Doctrine\Console\Proxy\InfoCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\InfoCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__11(): Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\MappingDescribeCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__12(): Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ReservedWordsCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__13(): Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaCreateCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__14(): Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaUpdateCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__15(): Kdyby\Doctrine\Console\Proxy\SchemaDropCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\SchemaDropCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__16(): Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ValidateSchemaCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__2(): Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearMetadataCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__3(): Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearQueryCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__4(): Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearQueryRegionCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__5(): Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\CacheClearResultCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__6(): Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ConvertMappingCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__7(): Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\GenerateEntitiesCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__8(): Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\GenerateProxiesCommand;
		return $service;
	}


	public function createServiceDoctrine__cli__9(): Kdyby\Doctrine\Console\Proxy\ImportCommand
	{
		$service = new Kdyby\Doctrine\Console\Proxy\ImportCommand;
		return $service;
	}


	public function createServiceDoctrine__default__cacheCleaner(): Kdyby\Doctrine\Tools\CacheCleaner
	{
		$service = new Kdyby\Doctrine\Tools\CacheCleaner($this->getService('doctrine.default.entityManager'));
		$service->addCacheStorage($this->getService('annotations.cache.annotations'));
		return $service;
	}


	public function createServiceDoctrine__default__connection(): Kdyby\Doctrine\Connection
	{
		$service = Kdyby\Doctrine\Connection::create([
			'dbname' => 'Doctrine-translations',
			'host' => 'localhost',
			'port' => null,
			'user' => 'user',
			'password' => 'password',
			'charset' => 'UTF8',
			'driver' => 'pdo_mysql',
			'driverClass' => null,
			'options' => null,
			'path' => null,
			'memory' => null,
			'unix_socket' => null,
			'platformService' => null,
			'defaultTableOptions' => [],
			'schemaFilter' => null,
			'debug' => false,
		], $this->getService('doctrine.default.dbalConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\Connection) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.connection\', value returned by factory is not Kdyby\Doctrine\Connection type.');
		}
		$service->setSchemaTypes([]);
		$service->setDbalTypes([]);
		$panel = $this->getService('doctrine.default.diagnosticsPanel')->bindConnection($service);
		return $service;
	}


	public function createServiceDoctrine__default__dbalConfiguration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.dbalResult'));
		$service->setSQLLogger(new Doctrine\DBAL\Logging\LoggerChain);
		$service->setFilterSchemaAssetsExpression(null);
		return $service;
	}


	public function createServiceDoctrine__default__diagnosticsPanel(): Kdyby\Doctrine\Diagnostics\Panel
	{
		$service = new Kdyby\Doctrine\Diagnostics\Panel;
		return $service;
	}


	public function createServiceDoctrine__default__driver__App__annotationsImpl(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver(['C:\xampp\htdocs\PhpProject2\app'],
			$this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	public function createServiceDoctrine__default__driver__Kdyby_Doctrine__annotationsImpl(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriver
	{
		$service = new Kdyby\Doctrine\Mapping\AnnotationDriver([
			'C:\xampp\htdocs\PhpProject2\vendor\kdyby\doctrine\src\Kdyby\Doctrine\DI/../Entities',
		], $this->getService('annotations.reader'), $this->getService('doctrine.cache.default.metadata'));
		return $service;
	}


	public function createServiceDoctrine__default__entityManager(): Kdyby\Doctrine\EntityManager
	{
		$service = Kdyby\Doctrine\EntityManager::create($this->getService('doctrine.default.connection'),
			$this->getService('doctrine.default.ormConfiguration'), $this->getService('doctrine.default.evm'));
		if (!$service instanceof Kdyby\Doctrine\EntityManager) {
			throw new Nette\UnexpectedValueException('Unable to create service \'doctrine.default.entityManager\', value returned by factory is not Kdyby\Doctrine\EntityManager type.');
		}
		$this->getService('doctrine.default.diagnosticsPanel')->bindEntityManager($service);
		return $service;
	}


	public function createServiceDoctrine__default__evm(): Kdyby\Events\NamespacedEventManager
	{
		$service = new Kdyby\Events\NamespacedEventManager('Doctrine\ORM\Events::', $this->getService('events.manager'));
		$service->dispatchGlobalEvents = true;
		return $service;
	}


	public function createServiceDoctrine__default__metadataDriver(): Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.default.driver.App.annotationsImpl'),
			'App');
		$service->addDriver($this->getService('doctrine.default.driver.Kdyby_Doctrine.annotationsImpl'),
			'Kdyby\Doctrine');
		return $service;
	}


	public function createServiceDoctrine__default__ormConfiguration(): Kdyby\Doctrine\Configuration
	{
		$service = new Kdyby\Doctrine\Configuration;
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.default.metadata'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.default.query'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.default.ormResult'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.default.hydration'));
		$service->setMetadataDriverImpl($this->getService('doctrine.default.metadataDriver'));
		$service->setClassMetadataFactoryName('Kdyby\Doctrine\Mapping\ClassMetadataFactory');
		$service->setDefaultRepositoryClassName('Kdyby\Doctrine\EntityRepository');
		$service->setQueryBuilderClassName('Kdyby\Doctrine\QueryBuilder');
		$service->setRepositoryFactory($this->getService('doctrine.default.repositoryFactory'));
		$service->setProxyDir('C:\xampp\htdocs\PhpProject2\app/../temp/proxies');
		$service->setProxyNamespace('Kdyby\GeneratedProxy');
		$service->setAutoGenerateProxyClasses(0);
		$service->setEntityNamespaces([]);
		$service->setCustomHydrationModes([]);
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setDefaultQueryHints([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setQuoteStrategy(new Doctrine\ORM\Mapping\DefaultQuoteStrategy);
		$service->setEntityListenerResolver(new Kdyby\Doctrine\Mapping\EntityListenerResolver($this));
		return $service;
	}


	public function createServiceDoctrine__default__repositoryFactory(): Kdyby\Doctrine\RepositoryFactory
	{
		$service = new Kdyby\Doctrine\RepositoryFactory($this);
		$service->setServiceIdsMap([], 'doctrine.repositoryFactory.default.defaultRepositoryFactory');
		return $service;
	}


	public function createServiceDoctrine__default__schemaManager(): Doctrine\DBAL\Schema\AbstractSchemaManager
	{
		$service = $this->getService('doctrine.default.connection')->getSchemaManager();
		return $service;
	}


	public function createServiceDoctrine__default__schemaTool(): Doctrine\ORM\Tools\SchemaTool
	{
		$service = new Doctrine\ORM\Tools\SchemaTool($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__default__schemaValidator(): Doctrine\ORM\Tools\SchemaValidator
	{
		$service = new Doctrine\ORM\Tools\SchemaValidator($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__helper__connection(): Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper
	{
		$service = new Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($this->getService('doctrine.default.connection'));
		return $service;
	}


	public function createServiceDoctrine__helper__entityManager(): Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper
	{
		$service = new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($this->getService('doctrine.default.entityManager'));
		return $service;
	}


	public function createServiceDoctrine__registry(): Kdyby\Doctrine\Registry
	{
		$service = new Kdyby\Doctrine\Registry(['default' => 'doctrine.default.connection'],
			['default' => 'doctrine.default.entityManager'], 'default', 'default',
			$this);
		return $service;
	}


	public function createServiceDoctrine__repositoryFactory__default__defaultRepositoryFactory(): Kdyby\Doctrine\DI\IRepositoryFactory
	{
		return new class ($this) implements Kdyby\Doctrine\DI\IRepositoryFactory {
			private $container;


			public function __construct(Container_b46f974dc1 $container)
			{
				$this->container = $container;
			}


			public function create(Doctrine\ORM\EntityManagerInterface $entityManager, Doctrine\ORM\Mapping\ClassMetadata $classMetadata): Kdyby\Doctrine\EntityRepository
			{
				$service = new Kdyby\Doctrine\EntityRepository($entityManager, $classMetadata);
				return $service;
			}
		};
	}


	public function createServiceEvents__manager(): Kdyby\Events\LazyEventManager
	{
		$service = new Kdyby\Events\LazyEventManager([], $this);
		return $service;
	}


	public function createServiceHttp__context(): Nette\Http\Context
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		return $service;
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\ILatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\ILatteFactory {
			private $container;


			public function __construct(Container_b46f974dc1 $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('C:\xampp\htdocs\PhpProject2\app/../temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				$service->onCompile = $this->container->getService('events.manager')->createEvent(['Latte\Engine', 'onCompile'],
					$service->onCompile, null, false);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\ITemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), null);
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\IMailer
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	public function createServiceRouting__router(): Nette\Application\Routers\RouteList
	{
		$service = new Nette\Application\Routers\RouteList;
		$service->offsetSet(null, $this->getService('console.router'));
		$service->offsetSet(null, $this->getService('console.originalRouter'));
		return $service;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('75_App_Model_UserManager'));
		$service->onLoggedIn = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedIn'],
			$service->onLoggedIn, null, false);
		$service->onLoggedOut = $this->getService('events.manager')->createEvent(['Nette\Security\User', 'onLoggedOut'],
			$service->onLoggedOut, null, false);
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\IUserStorage
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		$service = Tracy\Debugger::getBar();
		return $service;
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		$service = Tracy\Debugger::getBlueScreen();
		return $service;
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		$service = Tracy\Debugger::getLogger();
		return $service;
	}


	public function initialize()
	{
		Kdyby\Doctrine\Proxy\ProxyAutoloader::create('C:\xampp\htdocs\PhpProject2\app/../temp/proxies', 'Kdyby\GeneratedProxy')->register();Doctrine\Common\Annotations\AnnotationRegistry::registerLoader("class_exists");
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));;
		$this->getService('events.manager')->createEvent(['Nette\DI\Container', 'onInitialize'])->dispatch($this);

		Kdyby\Doctrine\Diagnostics\Panel::registerBluescreen($this);
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\PhpProject2\vendor\kdyby\doctrine\src\Kdyby\Doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\PhpProject2\vendor\doctrine';
		Tracy\Debugger::getBlueScreen()->collapsePaths[] = 'C:\xampp\htdocs\PhpProject2\app/../temp/proxies';
	}
}
