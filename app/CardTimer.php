<?php

namespace App;

use phpDocumentor\Reflection\Types\Boolean;

enum CardTimer: string
{
   case addSpacing = 'add-spacing';
   case removeSpacing = 'remove-spacing';

   public function label():string {
        return match($this) {
            self::addSpacing => 'add',
            self::removeSpacing => 'remove'
        };
   }
}