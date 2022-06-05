<?php

namespace ContainerWGheMBP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaaa6c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5e00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ed47 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getConnection', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getMetadataFactory', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getExpressionBuilder', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'beginTransaction', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getCache', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'transactional', array('func' => $func), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'commit', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->commit();
    }

    public function rollback()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'rollback', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'createQuery', array('dql' => $dql), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'createQueryBuilder', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'flush', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'clear', array('entityName' => $entityName), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'close', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->close();
    }

    public function persist($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'persist', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'remove', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'refresh', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'detach', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'merge', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'contains', array('entity' => $entity), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getEventManager', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getConfiguration', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'isOpen', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getUnitOfWork', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getProxyFactory', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'getFilters', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'isFiltersStateClean', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'hasFilters', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return $this->valueHolderaaa6c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb5e00 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaaa6c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaaa6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaaa6c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__get', ['name' => $name], $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        if (isset(self::$publicProperties7ed47[$name])) {
            return $this->valueHolderaaa6c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaa6c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaaa6c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaa6c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaaa6c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__isset', array('name' => $name), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaa6c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaaa6c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__unset', array('name' => $name), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaa6c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaaa6c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__clone', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        $this->valueHolderaaa6c = clone $this->valueHolderaaa6c;
    }

    public function __sleep()
    {
        $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, '__sleep', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;

        return array('valueHolderaaa6c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5e00 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5e00;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5e00 && ($this->initializerb5e00->__invoke($valueHolderaaa6c, $this, 'initializeProxy', array(), $this->initializerb5e00) || 1) && $this->valueHolderaaa6c = $valueHolderaaa6c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaaa6c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaaa6c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
