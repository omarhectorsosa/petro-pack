<?php

namespace Proxies\__CG__\PetroPack\VentaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Venta extends \PetroPack\VentaBundle\Entity\Venta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'id', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'cliente_id', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'fecha_venta', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'deuda', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'importe', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'total', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'descuento', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'pago'];
        }

        return ['__isInitialized__', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'id', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'cliente_id', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'fecha_venta', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'deuda', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'importe', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'total', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'descuento', '' . "\0" . 'PetroPack\\VentaBundle\\Entity\\Venta' . "\0" . 'pago'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Venta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienteId($clienteId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienteId', [$clienteId]);

        return parent::setClienteId($clienteId);
    }

    /**
     * {@inheritDoc}
     */
    public function getClienteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienteId', []);

        return parent::getClienteId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaVenta($fechaVenta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaVenta', [$fechaVenta]);

        return parent::setFechaVenta($fechaVenta);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaVenta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaVenta', []);

        return parent::getFechaVenta();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeuda($deuda)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeuda', [$deuda]);

        return parent::setDeuda($deuda);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeuda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeuda', []);

        return parent::getDeuda();
    }

    /**
     * {@inheritDoc}
     */
    public function setImporte($importe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImporte', [$importe]);

        return parent::setImporte($importe);
    }

    /**
     * {@inheritDoc}
     */
    public function getImporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImporte', []);

        return parent::getImporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', [$total]);

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescuento($descuento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescuento', [$descuento]);

        return parent::setDescuento($descuento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescuento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescuento', []);

        return parent::getDescuento();
    }

    /**
     * {@inheritDoc}
     */
    public function setPago($pago)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPago', [$pago]);

        return parent::setPago($pago);
    }

    /**
     * {@inheritDoc}
     */
    public function getPago()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPago', []);

        return parent::getPago();
    }

}
