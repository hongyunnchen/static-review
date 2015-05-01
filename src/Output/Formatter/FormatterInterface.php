<?php

/*
 * This file is part of MainThread\StaticReview.
 *
 * Copyright (c) 2014-2015 Samuel Parkinson <sam.james.parkinson@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://github.com/sjparkinson/static-review/blob/master/LICENSE
 */

namespace MainThread\StaticReview\Output\Formatter;

/**
 * Formatter interface.
 *
 * @author Samuel Parkinson <sam.james.parkinson@gmail.com>
 */
interface FormatterInterface
{
    /**
     * Gets the printer.
     */
    public function getPrinter();

    /**
     * Gets the results collector.
     *
     * @return ResultsCollector
     */
    public function getResultsCollector();
}
