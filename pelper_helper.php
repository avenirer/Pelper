<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Pelper (Programmer helper) is a CodeIgniter helper that I use to expedite
 * programming tasks
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2015, Adrian Voicu (avenir.ro@gmail.com http://avenir.ro)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	Adrian Voicu
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://avenir.ro
 * @email   avenir.ro@gmail.com
 */

if ( ! function_exists('dd'))
{
    /**
     * dd (dump and die)
     *
     * Outputs the variable and die()
     *
     * @param	mixed
     * @return	string
     */
    function dd($var)
    {
        if(is_array($var) || is_object($var))
        {
            echo '<pre>';
            print_r($var);
            echo '</pre>';
        }
        else
        {
            var_dump($var);
        }
        die();
    }
}
