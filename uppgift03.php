<?php
$t = date("H");

if ($t < "9") {
  echo "Have a good morning!";
} elseif ($t < "12") {
  echo "Have a good day!";
} elseif ($t < "15") {
  echo "Have a good night!";
} elseif ($t < "18") {
  echo "Eyy warrup fool";
} elseif ($t < "20") {
  echo "Koosi";
} else {
  echo "shaskom";
}