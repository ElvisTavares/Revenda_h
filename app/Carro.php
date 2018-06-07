<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
  public function marca(){
      return $this->belongsTo('App\Marca');

  }

  protected $fillable = ['modelo', 'marca_id', 'ano', 'combustivel',
                        'preco', 'cor', 'foto','destaque'];


    public function getModeloAttribute($value) {
        return strtoupper($value);
    }


  public function getCombustivelAttribute($value){
      if ($value == "A"){
          $nome = "Alcool";
      }elseif($value == "D"){
          $nome = "Diesel";
      }elseif ($value == "F"){
          $nome = "Flex";
      }elseif($value == "G"){
          $nome = "Gasolina";
      }

      return $nome;
  }
    public function setCombustivelAttribute($value)
    {
        if ($value=="Álcool") {
            $sigla = "A";
        } else if ($value == "Diesel") {
            $sigla = "D";
        } else if ($value == "Flex") {
            $sigla = "F";
        } else if ($value == "Gasolina") {
            $sigla = "G";
        }

        $this->attributes['combustivel'] = $sigla;
    }


    public static function combust() {
        return ['Álcool', 'Diesel', 'Gasolina', 'Flex'];
    }

    // retira a máscara com "." e "," antes da inserção
    public function setPrecoAttribute($value) {
        $novo1 = str_replace('.', '', $value);    // retira o ponto
        $novo2 = str_replace(',', '.', $novo1);   // substitui a , por .
        $this->attributes['preco'] = $novo2;
    }




}
