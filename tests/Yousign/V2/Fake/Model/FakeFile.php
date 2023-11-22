<?php

declare(strict_types=1);

/*
 * This file is part of the YousignApi package.
 *
 * Copyright (c) landrok at github.com/landrok
 *
 * For the full copyright and license information, please see
 * <https://github.com/landrok/yousign-api/blob/master/LICENSE>.
 */

namespace YousignTest\V2\Fake\Model;

use Yousign\Model\AbstractModel;
use Yousign\Model\AbstractModelCollection;
use Yousign\Model\V2\Factory;
use YousignTest\AbstractFakeModel;

class FakeFile extends AbstractFakeModel
{
    public static function getProperties(): array
    {
        return [
            "id" => "/files/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
            "name" => "The best name for my file.pdf",
            "type" => "signable",
            "contentType" => "application/pdf",
            "description" => null,
            "createdAt" => "2018-12-01T11:36:20+01:00",
            "updatedAt" => "2018-12-01T11:36:20+01:00",
            "sha256" => "bb57ae2b2ca6ad0133a699350d1a6f6c8cdfde3cf872cf526585d306e4675cc2",
            "metadata" => [],
            "workspace" => "/workspaces/XXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
            "creator" => null,
            "protected" => false,
            "position" => 0,
            "parent" => null
        ];
    }

    public static function getModel(): AbstractModel
    {
        return Factory::createUser(static::getProperties());
    }

    public static function getCollection(): AbstractModelCollection
    {
        return Factory::createUserCollection(static::getProperties());
    }
}