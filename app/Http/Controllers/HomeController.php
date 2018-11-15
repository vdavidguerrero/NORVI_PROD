<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;
use App\Loan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function solicitud_personal(){
        dd("llegue");
    }

    public function calculadora(){

        return view('home/calculadora');

    }

    public function calcular(){

      request()->flash();
     //  $passData['cuota'] =
        dd($this->calcularCuota($valores = request()->validate(
            [
                'monto' => ['required','min:3','numeric'],
                'plazo' => ['required'],
                'interes' => ['required'],
                'gastosDeCierre' => [''],
                'tipo' => ['required','min:3'],
            ])));

       return view('home/calculadora',$passData);
    }


    public function calcularCuota($datosPrestamos)
    {
        $contador = 0;
        $datosPrestamos['interes'] /= 100;

        if( $datosPrestamos['gastosDeCierre'] != 0)
            $datosPrestamos['monto'] = $datosPrestamos['monto'] + (($datosPrestamos['gastosDeCierre']/100)* $datosPrestamos['monto']);

        if( $datosPrestamos['tipo'] == "amortizado")
        {
            $N = $datosPrestamos['plazo'] * 1;
            $I = ($datosPrestamos['interes'])/1;
            $v = pow((1+$I),$N);
            $t = ($I*$v)/($v-1);
            $result['cuota']= $datosPrestamos['monto']*$t;
            return $this->amortizar($result,$datosPrestamos);

        }
        else if ($datosPrestamos['tipo'] == "interesSolamente"){
            $result['cuota']=  $datosPrestamos['monto'] * $datosPrestamos['interes'];
            return $this->amortizar($result,$datosPrestamos);
        }


        else if ($datosPrestamos['tipo'] == "interesFijo"){
            $result['cuota']=  (($datosPrestamos['interes']*$datosPrestamos['monto']*$datosPrestamos['plazo'])+$datosPrestamos['monto'])/$datosPrestamos['plazo'];
            return $this->amortizar($result,$datosPrestamos);

        }

        else if ($datosPrestamos['tipo'] == "inversion"){
            $result['cuota']= ($datosPrestamos['interes']*$datosPrestamos['monto']*$datosPrestamos['plazo'])+$datosPrestamos['monto'];
            return $this->amortizar($result,$datosPrestamos);
        }

    }

    public function amortizar($result, $datosPrestamos, $contador =0){


        while($datosPrestamos['plazo']>$contador){

            $result['#'][$contador] = $contador+1;
            $result['interes'][$contador] = $datosPrestamos['monto']*$datosPrestamos['interes'];
            $result['capital'][$contador] = $result['cuota']- $result['interes'][$contador];
            $result['balance'][$contador] =  $datosPrestamos['monto'] - $result['capital'][$contador];
            $datosPrestamos['monto'] = $datosPrestamos['monto'] - $result['capital'][$contador];
            $contador +=1;
        }
        return $result;
    }


}
