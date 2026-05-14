<?php
if (file_exists(__DIR__ . "/define.local.php")) {
  include __DIR__ . "/define.local.php";
} else {
  define("DBhost", getenv("DB_HOST") ?: "localhost");
  define("DBuser", getenv("DB_USER") ?: "");
  define("DBpass", getenv("DB_PASS") ?: "");
  define("DBname", getenv("DB_NAME") ?: "");
}

