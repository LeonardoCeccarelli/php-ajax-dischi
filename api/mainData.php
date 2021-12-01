<?php

require_once "../data/songData.php";

header("Content-Type: application/json");

echo json_encode($songList);
