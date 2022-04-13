<?php

    namespace App\WebService;

    class ViaCEP {

        /**
        * Método responsável por consultar um CEP no ViaCEP
        * @param string $cep
        * @return array 
        */

        public static function consultarCEP($cep)
        {

            // INICIA O cURL
            $cURL = curl_init();

            // CONFIGURAÇÕES DO cURL
            curl_setopt_array($cURL, [

                CURLOPT_URL => "https://viacep.com.br/ws/$cep/json/",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET"

            ]);

            // RESPONSE
            $response = curl_exec($cURL);

            // FECHAR A CONEXÃO ABERTA
            curl_close($cURL);

            // CONVERTER O JSON PARA ARRAY
            $array = json_decode($response, true);

            // RETORNAR O CONTEÚDO EM ARRAY
            return isset($array["cep"]) ? $array : null;

        }

    }

?>