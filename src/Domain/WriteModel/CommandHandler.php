<?php

interface CommandHandler
{
    public function handle( \M3commerce\Core\Infrastructure\Command\Command $command): void;
}
