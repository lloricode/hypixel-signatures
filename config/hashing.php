<?php
/**
 * Copyright (c) 2020 Max Korlaar
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *  Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 *
 *  Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions, a visible attribution to the original author(s)
 *   of the software available to the public, and the following disclaimer
 *   in the documentation and/or other materials provided with the distribution.
 *
 *  Neither the name of the copyright holder nor the names of its
 *   contributors may be used to endorse or promote products derived from
 *   this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

    return [

        /*
        |--------------------------------------------------------------------------
        | Default Hash Driver
        |--------------------------------------------------------------------------
        |
        | This option controls the default hash driver that will be used to hash
        | passwords for your application. By default, the bcrypt algorithm is
        | used; however, you remain free to modify this option if you wish.
        |
        | Supported: "bcrypt", "argon", "argon2id"
        |
        */

        'driver' => 'bcrypt',

        /*
        |--------------------------------------------------------------------------
        | Bcrypt Options
        |--------------------------------------------------------------------------
        |
        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Bcrypt algorithm. This will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */

        'bcrypt' => [
            'rounds' => env('BCRYPT_ROUNDS', 10),
        ],

        /*
        |--------------------------------------------------------------------------
        | Argon Options
        |--------------------------------------------------------------------------
        |
        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Argon algorithm. These will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */

        'argon' => [
            'memory'  => 1024,
            'threads' => 2,
            'time'    => 2,
        ],

    ];
