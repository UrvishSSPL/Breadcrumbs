<?php
/*
 * Copyright 2008 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\Breadcrumbs;

use Naucon\Utility\IteratorInterface;
use Naucon\Utility\IteratorAwareInterface;

/**
 * Breadcrumbs Interface
 *
 * @package     Breadcrumbs
 * @author      Sven Sanzenbacher
 */
interface BreadcrumbsInterface extends IteratorAwareInterface
{
    /**
     * add breadcrumb
     *
     * @param       string      $title      breadcrumb title
     * @param       string      $url        optional breadcrumb url
     * @return      BreadcrumbsInterface
     */
    public function add($title, $url = null);

    /**
     * clear breadcrumb
     *
     * @return    void
     */
    public function clear();

    /**
     * @return    IteratorInterface
     */
    public function getReverseIterator();
}