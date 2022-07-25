<?php

namespace M3commerce\Core\ValueObject;

class MimeType implements \JsonSerializable
{
    const CHARSET_ASCII = 'US-ASCII';
    const CHARSET_UTF8 = 'UTF-8';

    private function __construct(
        private string $type,
        private string $subtype,
        private string $charset = self::CHARSET_UTF8,
    ) {}

    public function fromString(string $mime): self
    {
        $withCharset = @explode(';', $mime);
        $charset = $withCharset[1] ?? self::CHARSET_UTF8;
        $mimeArray = @explode('/', $withCharset[0]);
        // TODO...
    }

    private function guardValidMimeString(string $mime): void
    {
        // TODO...
    }

    public function isText(): bool
    {
        return 'text' === $this->type;
    }

    public function jsonSerialize(): array
    {
        return [
            'mime' => $this->__toString(),
            'type' => $this->type,
            'subtype' => $this->subtype,
            'charset' => $this->charset,
        ];
    }

    public function __toString(): string
    {
        // text/plain;charset=UTF-8
        return ("$this->type/$this->subtype;$this->charset");
    }
}
