<?php

namespace RealDebrid\Request\Torrents;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * PUT /torrents/addTorrent
 *
 * Add a torrent file to download
 * @package RealDebrid\Request\Torrents
 * @author Valentin GOT
 */
class AddTorrentRequest extends AbstractRequest {

    /**
     * Add a torrent file to download
     *
     * The files must be selected with the selectFiles method to start the torrent
     * @param string $path Path to the torrent file
     * @param Token $token Access token
     */
    public function __construct(Token $token, $path) {
        parent::__construct();

        $this->setToken($token);
        $this->setFilePath($path);
    }

    public function getRequestType() {
        return RequestType::PUT;
    }

    public function getUri() {
        return "torrents/addTorrent";
    }
}