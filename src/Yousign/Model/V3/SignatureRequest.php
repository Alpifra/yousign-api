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
 * SignatureRequest handles signature request data
 *
 * @property string $id
 * @property string $status
 * @property string $name
 * @property string $delivery_mode
 * @property \DateTime $created_at
 * @property bool $ordered_signers
 * @property string $timezone
 * @property string $email_custom_note
 * @property \DateTime $expiration_date
 * @property string $source
 * @property SignerCollection $signers
 * @property ApproverCollection $approvers
 * @property DocumentCollection $documents
 * @property SenderCollection $sender
 * @property string $external_id
 * @property string $branding_id
 * @property string $custom_experience_id
 * @property bool $signers_allowed_to_decline
 * @property string $workspace_id
 * @property Notification $email_notification
 */
class SignatureRequest extends AbstractModel
{
    public const OTHER_REASON = 'other';
    public const REASONS = ['contractualization_aborted', 'errors_in_document', self::OTHER_REASON];

    public string $version = YousignClient::API_VERSION_3;
}
