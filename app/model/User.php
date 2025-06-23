<?php

class User extends TRecord
{
    const TABLENAME  = 'users';
    const PRIMARYKEY = 'user_id';
    const IDPOLICY   =  'max'; // ou 'serial' si usas AUTO_INCREMENT

    // puedes añadir validaciones, relaciones, etc. más adelante
}
?>
