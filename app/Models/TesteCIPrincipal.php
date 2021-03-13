<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class TesteCIPrincipal extends Model
{
    private $Nome;

    function __construct($pNome)
    {
        if($this->ValidaNome($pNome))
        {
            $this->setNome($pNome);
        }
        else
        {
            throw new UploadException("Erro teste");
        }
    }


    
    /* #region  Get e Set */
    public function getNome()
    {
        return $this->Nome;
    }

    private function setNome($pNome)
    {
        $this->Nome = $pNome;
    }

    public function getIdade()
    {
        return $this->Idade;
    }

    private function setIdade($pIdade)
    {
        $this->Idade = $pIdade;
    }
    /* #endregion */


    public function TrocarNome($pNome)
    {
        if($this->ValidaNome($pNome))
        {
            $this->setNome($pNome);
        }
        else
        {
            throw new UploadException("Erro teste");
        }
    }

    public function ColocarIdade($pIdade)
    {
        if($this->ValidarIdade($pIdade))
        {
            $this->setIdade($pIdade);
            return true;
        }
        else
        {
            throw new UploadException("Erro teste");
        }
    }

    private function ValidaNome($pNome)
    {
        if($pNome == null || $pNome == "")
        {
            return false;
        } 
        else 
        {
            return true;
        }
    }

    private function ValidarIdade($pIdade)
    {
        if($pIdade == null)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}
