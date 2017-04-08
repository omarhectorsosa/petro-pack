<?php

namespace PetroPack\ProductoBundle\Entity;

/**
 * DescuentoProducto
 */
class DescuentoProducto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $producto_id;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var int
     */
    private $descuento;

    /**
     * @var \DateTime
     */
    private $fecha_incial;

    /**
     * @var \DateTime
     */
    private $fecha_final;

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
     * Set productoId
     *
     * @param integer $productoId
     *
     * @return DescuentoProducto
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DescuentoProducto
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
     * Set descuento
     *
     * @param integer $descuento
     *
     * @return DescuentoProducto
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
     * Set fechaIncial
     *
     * @param \DateTime $fechaIncial
     *
     * @return DescuentoProducto
     */
    public function setFechaIncial($fechaIncial)
    {
        $this->fecha_incial = $fechaIncial;

        return $this;
    }

    /**
     * Get fechaIncial
     *
     * @return \DateTime
     */
    public function getFechaIncial()
    {
        return $this->fecha_incial;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     *
     * @return DescuentoProducto
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fecha_final = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime
     */
    public function getFechaFinal()
    {
        return $this->fecha_final;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return DescuentoProducto
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
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

