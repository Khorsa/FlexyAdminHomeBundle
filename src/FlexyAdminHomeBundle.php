<?php
namespace flexycms\FlexyAdminHomeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FlexyAdminHomeBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }
}