<?php

namespace PetroPack\ProductoBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $presentacion;

    /**
     * @var float
     */
    private $precio_unidad;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var string
     */
    private $cod_producto;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set presentacion
     *
     * @param string $presentacion
     *
     * @return Producto
     */
    public function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get presentacion
     *
     * @return string
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set precioUnidad
     *
     * @param float $precioUnidad
     *
     * @return Producto
     */
    public function setPrecioUnidad($precioUnidad)
    {
        $this->precio_unidad = $precioUnidad;

        return $this;
    }

    /**
     * Get precioUnidad
     *
     * @return float
     */
    public function getPrecioUnidad()
    {
        return $this->precio_unidad;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Producto
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Producto
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
     * Set codProducto
     *
     * @param string $codProducto
     *
     * @return Producto
     */
    public function setCodProducto($codProducto)
    {
        $this->cod_producto = $codProducto;

        return $this;
    }

    /**
     * Get codProducto
     *
     * @return string
     */
    public function getCodProducto()
    {
        return $this->cod_producto;
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

