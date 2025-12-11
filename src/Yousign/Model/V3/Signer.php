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
 * Signer handles signer data
 *
 * @property string $id
 * @property string $status
 * @property string $signature_level
 * @property string|null $signature_authentication_mode
 * @property string $signature_link
 * @property \DateTime $signature_link_expiration_date
 * @property string $signature_image_preview
 * @property string $delivery_mode
 * @property string $identification_attestation_id
 * @property bool $pre_identity_verification_required
 */
class Signer extends AbstractModel
{
    public string $version = YousignClient::API_VERSION_3;
}
