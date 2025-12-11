<?php

declare(strict_types=1);

/*
 * This file is part of the Yousign package.
 *
 * Copyright (c) landrok at github.com/landrok
 *
 * For the full copyright and license information, please see
 * <https://github.com/landrok/yousign-api/blob/master/LICENSE>.
 */

namespace Yousign\Model\V3;

use Yousign\Model\AbstractModel;
use Yousign\YousignClient;

/**
 * Document handles document data
 *
 * @property string $id
 * @property string $filename
 * @property string $nature
 * @property string $content_type
 * @property string $sha256
 * @property bool $is_protected
 * @property bool $is_signed
 * @property \DateTime $created_at
 * @property int $total_pages
 * @property bool $is_locked
 * @property DocumentInitials $initials
 * @property int $total_anchors
 */
class Document extends AbstractModel
{
    public string $version = YousignClient::API_VERSION_3;
}
