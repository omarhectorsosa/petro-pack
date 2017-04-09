<?php

namespace PetroPack\ProductoBundle\Entity;

/**
 * ImagenProducto
 */
class ImagenProducto
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
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $path;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $orden;


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
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * Set productoId
     *
     * @param integer $productoId
     *
     * @return ImagenProducto
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ImagenProducto
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
     * Set url
     *
     * @param string $url
     *
     * @return ImagenProducto
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return ImagenProducto
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return ImagenProducto
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return ImagenProducto
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
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

