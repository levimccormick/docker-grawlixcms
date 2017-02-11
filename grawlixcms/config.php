<?php
if($_ENV['LOCAL'] == 'True'){
  // These are local values for running in Docker.
  $setup['db_host'] = $_ENV['DB_SERVER'];
  $setup['db_user'] = $_ENV['DB_USER'];
  $setup['db_pswd'] = $_ENV['DB_PASS'];
  $setup['db_name'] = $_ENV['DB_NAME'];
}else{
  // Put your live site values here.
  $setup['db_host'] = '';
  $setup['db_user'] = '';
  $setup['db_pswd'] = '';
  $setup['db_name'] = '';
}
