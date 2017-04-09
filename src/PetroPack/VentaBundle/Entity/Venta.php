<?php

namespace PetroPack\VentaBundle\Entity;

/**
 * Venta
 */
class Venta
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cliente_id;

    /**
     * @var \DateTime
     */
    private $fecha_venta;

    /**
     * @var float
     */
    private $deuda;

    /**
     * @var float
     */
    private $importe;

    /**
     * @var int
     */
    private $total;

    /**
     * @var int
     */
    private $descuento;

    /**
     * @var float
     */
    private $pago;
    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clienteId
     *
     * @param integer $clienteId
     *
     * @return Venta
     */
    public function setClienteId($clienteId)
    {
        $this->cliente_id = $clienteId;

        return $this;
    }

    /**
     * Get clienteId
     *
     * @return int
     */
    public function getClienteId()
    {
        return $this->cliente_id;
    }

    /**
     * Set fechaVenta
     *
     * @param \DateTime $fechaVenta
     *
     * @return Venta
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fecha_venta = $fechaVenta;

        return $this;
    }

    /**
     * Get fechaVenta
     *
     * @return \DateTime
     */
    public function getFechaVenta()
    {
        return $this->fecha_venta;
    }

    /**
     * Set deuda
     *
     * @param float $deuda
     *
     * @return Venta
     */
    public function setDeuda($deuda)
    {
        $this->deuda = $deuda;

        return $this;
    }

    /**
     * Get deuda
     *
     * @return float
     */
    public function getDeuda()
    {
        return $this->deuda;
    }

    /**
     * Set importe
     *
     * @param float $importe
     *
     * @return Venta
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Venta
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     *
     * @return Venta
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return int
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set pago
     *
     * @param float $pago
     *
     * @return Venta
     */
    public function setPago($pago)
    {
        $this->pago = $pago;

        return $this;
    }

    /**
     * Get pago
     *
     * @return float
     */
    public function getPago()
    {
        return $this->pago;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return DescuentoProducto
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}

