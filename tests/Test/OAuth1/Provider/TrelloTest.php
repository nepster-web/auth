<?php
/**
 * SocialConnect project
 * @author: Andreas Heigl https://github.com/heiglandreas <andreas@heigl.org>
 */

namespace Test\OAuth1\Provider;

use Psr\Http\Message\ResponseInterface;

class TrelloTest extends AbstractProviderTestCase
{
    /**
     * @return string
     */
    protected function getProviderClassName()
    {
        return \SocialConnect\OAuth1\Provider\Trello::class;
    }

    /**
     * {@inheritDoc}
     */
    protected function getTestResponseForGetIdentity(): ResponseInterface
    {
        return $this->createResponse(
            json_encode([
                'id' => 12345,
            ])
        );
    }
}
