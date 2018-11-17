<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Dispositivo;

class JSONController extends Controller
{
    public function parseFile(){
    	$path = storage_path() . "/json/entities.json";
    	$json = json_decode(file_get_contents($path), true);

    	$clientes = array();

    	foreach($json as $clienteArr){
    		$cliente = new Cliente;
    		foreach($clienteArr as $key=>$value){
    			if($key == 'dispositivos'){
    				foreach($value as $keyDisp=>$valueDisp){
    					$dispositivo = new Dispositivo;
    					foreach($valueDisp as $keyAtrDisp=>$valueAtrDisp){
    						$dispositivo->$keyAtrDisp = $valueAtrDisp;
    					}
    					$cliente->addDispositivo($dispositivo);
    				}
    			} else {
    				$cliente->$key = $value;
    			}
    		}
    		array_push($clientes, $cliente);
    	}

    	return view('welcome',compact('clientes'));
    }
}
