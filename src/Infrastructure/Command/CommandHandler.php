<?php

namespace M3commerce\Core\Infrastructure\Command;


interface CommandHandler
{
    public function handle(Command $command): void;
}
