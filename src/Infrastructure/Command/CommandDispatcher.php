<?php

namespace M3commerce\Core\Infrastructure\Command;

interface CommandDispatcher
{
    public function dispatch(Command $command): void;
}
