<?php

namespace RealDebrid\Exception;

/**
 * PermissionDenied
 *
 * Permission denied (account locked or not premium). HTTP Status Code: 403
 * @package RealDebrid\Exception
 * @author Valentin GOT
 */
class PermissionDeniedException extends \Exception {
    protected $message = 'Permission denied (account locked, not premium)';
}