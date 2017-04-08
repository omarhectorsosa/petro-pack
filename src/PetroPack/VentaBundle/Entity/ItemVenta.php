<?php

namespace PetroPack\VentaBundle\Entity;

/**
 * ItemVenta
 */
class ItemVenta
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $venta_id;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var int
     */
    private $producto_id;

    /**
     * @var float
     */
    private $precio_final;

    /**
     * @var int
     */
    private $descuento;

    /**
     * @var \DateTime
     */
    private $create_at;

    /**
     * @var \DateTime
     */
    private $update_at;


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
     * Set ventaId
     *
     * @param integer $ventaId
     *
     * @return ItemVenta
     */
    public function setVentaId($ventaId)
    {
        $this->venta_id = $ventaId;

        return $this;
    }

    /**
     * Get ventaId
     *
     * @return int
     */
    public function getVentaId()
    {
        return $this->venta_id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return ItemVenta
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set productoId
     *
     * @param integer $productoId
     *
     * @return ItemVenta
     */
    public function setProductoId($productoId)
    {
        $this->producto_id = $productoId;

        return $this;
    }

    /**
     * Get productoId
     *
     * @return int
     */
    public function getProductoId()
    {
        return $this->producto_id;
    }

    /**
     * Set precioFinal
     *
     * @param float $precioFinal
     *
     * @return ItemVenta
     */
    public function setPrecioFinal($precioFinal)
    {
        $this->precio_final = $precioFinal;

        return $this;
    }

    /**
     * Get precioFinal
     *
     * @return float
     */
    public function getPrecioFinal()
    {
        return $this->precio_final;
    }

    /**
     * Set descuento
     *
     * @param integer $descuento
     *
     * @return ItemVenta
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
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return ItemVenta
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return ItemVenta
     */
    public function setUpdateAt($updateAt)
    {
        $this->update_at = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }
}

