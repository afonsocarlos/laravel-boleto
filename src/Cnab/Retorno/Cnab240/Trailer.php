<?php

namespace Eduardokum\LaravelBoleto\Cnab\Retorno\Cnab240;

use Eduardokum\LaravelBoleto\MagicTrait;
use Eduardokum\LaravelBoleto\Contracts\Cnab\Retorno\Cnab240\Trailer as TrailerContract;

class Trailer implements TrailerContract
{
    use MagicTrait;

    /**
     * @var int
     */
    protected $numeroLote;

    /**
     * @var int
     */
    protected $tipoRegistro;

    /**
     * @var int
     */
    protected $qtdLotesArquivo;

    /**
     * @var int
     */
    protected $qtdRegistroArquivo;

    /**
     * @return mixed
     */
    public function getTipoRegistro()
    {
        return $this->tipoRegistro;
    }

    /**
     * @param mixed $numeroLote
     *
     * @return $this
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroLoteRemessa()
    {
        return $this->numeroLote;
    }

    /**
     * @param mixed $qtdLotesArquivo
     *
     * @return $this
     */
    public function setQtdLotesArquivo($qtdLotesArquivo)
    {
        $this->qtdLotesArquivo = $qtdLotesArquivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdLotesArquivo()
    {
        return $this->qtdLotesArquivo;
    }

    /**
     * @param mixed $qtdRegistroArquivo
     *
     * @return $this
     */
    public function setQtdRegistroArquivo($qtdRegistroArquivo)
    {
        $this->qtdRegistroArquivo = $qtdRegistroArquivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtdRegistroArquivo()
    {
        return $this->qtdRegistroArquivo;
    }

    /**
     * @param mixed $tipoRegistro
     *
     * @return $this
     */
    public function setTipoRegistro($tipoRegistro)
    {
        $this->tipoRegistro = $tipoRegistro;

        return $this;
    }
}
