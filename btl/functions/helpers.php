<?php
if (session_status() === PHP_SESSION_NONE) session_start();

function base_url(): string {
  $base = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME'])), '/');
  return $base === '/' ? '' : $base;
}

function flash_success($msg){ $_SESSION['flash_success']=$msg; }
function flash_error($msg){ $_SESSION['flash_error']=$msg; }
