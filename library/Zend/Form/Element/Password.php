<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @copyright  Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Zend\Form\Element;

use Zend\Form\Element;
use Zend\Form\ElementPrepareAwareInterface;
use Zend\Form\FormInterface;

/**
 * @copyright  Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Password extends Element implements ElementPrepareAwareInterface
{
    /**
     * Seed attributes
     *
     * @var array
     */
    protected $attributes = array(
        'type' => 'password',
    );

    /**
     * Remove the password before rendering if the form fails in order to avoid any security issue
     *
     * @param  FormInterface $form
     * @return mixed
     */
    public function prepareElement(FormInterface $form)
    {
        $this->setValue('');
    }
}
