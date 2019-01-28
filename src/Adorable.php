<?php

namespace Faker\Provider;

class Adorable extends Base
{
    /**
     * Generate unique adorable.io avatar link.
     *
     * @param string|null $id Unique avatar identifier. If not provided, it will be generated automatically.
     * @param int $size Size of an avatar in pixels.
     * @param bool $pngSuffix If ".png" suffix should be included in the url. Does not change anything.
     *
     * @return string
     */
    public function adorableAvatar(string $id = null, int $size = 300, bool $pngSuffix = false): string
    {
        $id = $id ?? $this->adorableAvatarId();

        return "https://api.adorable.io/avatars/$size/$id" . ($pngSuffix ? '.png' : '');
    }

    /**
     * Generate adorable.io avatar ID.
     *
     * @param int $length Length of avatar ID. Any value more than 20 should be good.
     *
     * @return string
     */
    public function adorableAvatarId(int $length = 32): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}