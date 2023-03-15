<?php
namespace Agi4648\Logger;

interface ILogger{
    public function logEntry(string $line): void;


}