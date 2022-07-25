<?php

namespace M3commerce\Core\Domain\WriteModel\Content;

use Doctrine\ORM\Mapping as ORM;
use M3commerce\Core\ValueObject\Locale;
use M3commerce\Core\ValueObject\MimeType;

class Content
{
    #[ORM\Id]
    #[ORM\Column( type: "ulid", unique: true )]
    private ContentId $contentId;

    #[ORM\Column(type: "string", length: 5)]
    private Locale $locale;

    #[ORM\Column(type: "string", length: 255)]
    private MimeType $mimeType;

    #[ORM\Column(type: "text")]
    private ?string $content;

    #[ORM\Column(type: "text")]
    private ?string $path;

    public function getContentId(): ContentId
    {
        return $this->contentId;
    }
}
