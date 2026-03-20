<?php

namespace App\Exception;

class FileUploadFailedException extends \RuntimeException
{
    public function __construct(string $fileName = '')
    {
        $message = $fileName
            ? sprintf('Upload fallito: il file "%s" non è presente su storage.', $fileName)
            : 'Upload fallito: il file non è presente su storage.';

        parent::__construct($message);
    }
}
