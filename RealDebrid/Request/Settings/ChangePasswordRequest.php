<?php

namespace RealDebrid\Request\Settings;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * POST /settings/changePassword
 *
 * Send the verification email to change the password
 * @package RealDebrid\Request\Settings
 * @author Valentin GOT
 */
class ChangePasswordRequest extends AbstractRequest {

    /**
     * Send the verification email to change the password
     *
     * @param Token $token Access token
     */
    public function __construct(Token $token) {
        parent::__construct();

        $this->setToken($token);
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "settings/changePassword";
    }
}