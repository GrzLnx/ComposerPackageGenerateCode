<?php

namespace GrzLnxDevelopment;

class GenerateCode
{

    public int $size = 0;

    public function __construct( int $size )
    {

        if( gettype( $size ) === 'integer' ) $this->size = $size;

    }

    public function get(): string
    {

        $code = '';

        while( strlen( $code ) < $this->size ) {

            $code .= rand( 0, 9 );

        }

        return $code;

    }

}