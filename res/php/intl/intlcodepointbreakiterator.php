<?php

/** @phpstub */
class IntlCodePointBreakIterator extends \IntlBreakIterator implements \Traversable
{
    const DONE = -1;
    const LINE_HARD = 100;
    const LINE_HARD_LIMIT = 200;
    const LINE_SOFT = 0;
    const LINE_SOFT_LIMIT = 100;
    const SENTENCE_SEP = 100;
    const SENTENCE_SEP_LIMIT = 200;
    const SENTENCE_TERM = 0;
    const SENTENCE_TERM_LIMIT = 100;
    const WORD_IDEO = 400;
    const WORD_IDEO_LIMIT = 500;
    const WORD_KANA = 300;
    const WORD_KANA_LIMIT = 400;
    const WORD_LETTER = 200;
    const WORD_LETTER_LIMIT = 300;
    const WORD_NONE = 0;
    const WORD_NONE_LIMIT = 100;
    const WORD_NUMBER = 100;
    const WORD_NUMBER_LIMIT = 200;

    /**
     * Get last code point passed over after advancing or receding the iterator
     *
     * @return ReturnType 
     */
    public function getLastCodePoint()
    {
    }
}