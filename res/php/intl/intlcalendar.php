<?php

/** @phpstub */
class IntlCalendar
{
    const DOW_FRIDAY = 6;
    const DOW_MONDAY = 2;
    const DOW_SATURDAY = 7;
    const DOW_SUNDAY = 1;
    const DOW_THURSDAY = 5;
    const DOW_TUESDAY = 3;
    const DOW_TYPE_WEEKDAY = 0;
    const DOW_TYPE_WEEKEND = 1;
    const DOW_TYPE_WEEKEND_CEASE = 3;
    const DOW_TYPE_WEEKEND_OFFSET = 2;
    const DOW_WEDNESDAY = 4;
    const FIELD_AM_PM = 9;
    const FIELD_DATE = 5;
    const FIELD_DAY_OF_MONTH = 5;
    const FIELD_DAY_OF_WEEK = 7;
    const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
    const FIELD_DAY_OF_YEAR = 6;
    const FIELD_DOW_LOCAL = 18;
    const FIELD_DST_OFFSET = 16;
    const FIELD_ERA = 0;
    const FIELD_EXTENDED_YEAR = 19;
    const FIELD_FIELD_COUNT = NULL;
    const FIELD_FIELD_COUNT  = 23;
    const FIELD_HOUR = 10;
    const FIELD_HOUR_OF_DAY = 11;
    const FIELD_IS_LEAP_MONTH = 22;
    const FIELD_JULIAN_DAY = 20;
    const FIELD_MILLISECOND = 14;
    const FIELD_MILLISECONDS_IN_DAY = 21;
    const FIELD_MINUTE = 12;
    const FIELD_MONTH = 2;
    const FIELD_SECOND = 13;
    const FIELD_WEEK_OF_MONTH = 4;
    const FIELD_WEEK_OF_YEAR = 3;
    const FIELD_YEAR = 1;
    const FIELD_YEAR_WOY = 17;
    const FIELD_ZONE_OFFSET = 15;
    const WALLTIME_FIRST = 1;
    const WALLTIME_LAST = 0;
    const WALLTIME_NEXT_VALID = 2;

    /**
     * Private constructor for disallowing instantiation
     */
    public function __construct()
    {
    }

    /**
     * Add a (signed) amount of time to a field
     *
     * @param int $field
     * @param int $amount
     * @param IntlCalendar $cal
     * @param int $field
     * @param int $amount
     *
     * @return bool Returns true on success.
     */
    public function add($field, $amount, $cal, $field, $amount)
    {
    }

    /**
     * Whether this objectʼs time is after that of the passed object
     *
     * @param IntlCalendar $other
     * @param IntlCalendar $cal
     * @param IntlCalendar $other
     *
     * @return bool Returns true if this objectʼs current time is after that of the
     *              argumentʼs time. Returns false otherwise.
     *              Also returns false on failure. You can use  or
     *              to detect error conditions.
     */
    public function after($other, $cal, $other)
    {
    }

    /**
     * Whether this objectʼs time is before that of the passed object
     *
     * @param IntlCalendar $other
     * @param IntlCalendar $cal
     * @param IntlCalendar $other
     *
     * @return bool Returns true if this objectʼs current time is before that of the
     *              argumentʼs time. Returns false otherwise.
     *              Also returns false on failure. You can use  or
     *              to detect error conditions.
     */
    public function before($other, $cal, $other)
    {
    }

    /**
     * Clear a field or all fields
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return bool Returns true on success. Failure can only occur is
     *              invalid arguments are provided.
     */
    public function clear($field = false, $cal, $field = false)
    {
    }

    /**
     * Create a new IntlCalendar
     *
     * @param mixed $timeZone
     * @param string $locale
     * @param mixed $timeZone
     * @param string $locale
     *
     * @return IntlCalendar The created ``IntlCalendar`` instance or null on
     *                      failure.
     */
    public function createInstance($timeZone = NULL, $locale = '', $timeZone = NULL, $locale = '')
    {
    }

    /**
     * Compare time of two IntlCalendar objects for equality
     *
     * @param IntlCalendar $other
     * @param IntlCalendar $cal
     * @param IntlCalendar $other
     *
     * @return bool Returns true if the current time of both this and the passed in
     *              ``IntlCalendar`` object are the same, or false
     *              otherwise. The value false can also be returned on failure. This can only
     *              happen if bad arguments are passed in. In any case, the two cases can be
     *              distinguished by calling .
     */
    public function equals($other, $cal, $other)
    {
    }

    /**
     * Calculate difference between given time and this objectʼs time
     *
     * @param float $when
     * @param int $field
     * @param IntlCalendar $cal
     * @param float $when
     * @param int $field
     *
     * @return int Returns a (signed) difference of time in the unit associated with the
     *             specified field.
     */
    public function fieldDifference($when, $field, $cal, $when, $field)
    {
    }

    /**
     * Create an IntlCalendar from a DateTime object or string
     *
     * @param mixed $dateTime
     * @param mixed $dateTime
     *
     * @return IntlCalendar The created ``IntlCalendar`` object or null in case of
     *                      failure. If a ``string`` is passed, any exception that occurs
     *                      inside the ``DateTime`` constructor is propagated.
     */
    public function fromDateTime($dateTime, $dateTime)
    {
    }

    /**
     * Get the value for a field
     *
     * @param int $field
     * @param IntlCalendar> $cal
     * @param int $field
     *
     * @return int An integer with the value of the time field.
     */
    public function get($field, $cal, $field)
    {
    }

    /**
     * The maximum value for a field, considering the objectʼs current time
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing the maximum value in the units associated
     *             with the given .
     */
    public function getActualMaximum($field, $cal, $field)
    {
    }

    /**
     * The minimum value for a field, considering the objectʼs current time
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing the minimum value in the fieldʼs
     *             unit.
     */
    public function getActualMinimum($field, $cal, $field)
    {
    }

    /**
     * Get array of locales for which there is data
     *
     * @return array An ``array`` of ``string``s, one for which locale.
     */
    public function getAvailableLocales()
    {
    }

    /**
     * Tell whether a day is a weekday, weekend or a day that has a transition between the two
     *
     * @param int $dayOfWeek
     * @param IntlCalendar $cal
     * @param int $dayOfWeek
     *
     * @return int Returns one of the constants
     *             ,
     *             ,
     *             or
     *             .
     */
    public function getDayOfWeekType($dayOfWeek, $cal, $dayOfWeek)
    {
    }

    /**
     * Get last error code on the object
     *
     * @param IntlCalendar $calendar
     *
     * @return int An ICU error code indicating either success, failure or a warning.
     */
    public function getErrorCode($calendar)
    {
    }

    /**
     * Get last error message on the object
     *
     * @param IntlCalendar $calendar
     *
     * @return string The error message associated with last error that occurred in a function call
     *                on this object, or a string indicating the non-existance of an error.
     */
    public function getErrorMessage($calendar)
    {
    }

    /**
     * Get the first day of the week for the calendarʼs locale
     *
     * @param IntlCalendar $cal
     *
     * @return int One of the constants ,
     *             , …,
     *             .
     */
    public function getFirstDayOfWeek($cal)
    {
    }

    /**
     * Get the largest local minimum value for a field
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing a field value, in the fieldʼs
     *             unit,.
     */
    public function getGreatestMinimum($field, $cal, $field)
    {
    }

    /**
     * Get set of locale keyword values
     *
     * @param string $key
     * @param string $locale
     * @param boolean $commonlyUsed
     * @param string $key
     * @param string $locale
     * @param boolean $commonlyUsed
     *
     * @return Iterator An iterator that yields strings with the locale keyword
     *                  values.
     */
    public function getKeywordValuesForLocale($key, $locale, $commonlyUsed, $key, $locale, $commonlyUsed)
    {
    }

    /**
     * Get the smallest local maximum for a field
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing a field value in the fieldʼs
     *             unit.
     */
    public function getLeastMaximum($field, $cal, $field)
    {
    }

    /**
     * Get the locale associated with the object
     *
     * @param int $localeType
     * @param IntlCalendar $cal
     * @param int $localeType
     *
     * @return string A locale string.
     */
    public function getLocale($localeType, $cal, $localeType)
    {
    }

    /**
     * Get the global maximum value for a field
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing a field value in the fieldʼs
     *             unit.
     */
    public function getMaximum($field, $cal, $field)
    {
    }

    /**
     * Get minimal number of days the first week in a year or month can have
     *
     * @param IntlCalendar $cal
     *
     * @return int An ``int`` representing a number of days.
     */
    public function getMinimalDaysInFirstWeek($cal)
    {
    }

    /**
     * Get the global minimum value for a field
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return int An ``int`` representing a value for the given
     *             field in the fieldʼs unit.
     */
    public function getMinimum($field, $cal, $field)
    {
    }

    /**
     * Get number representing the current time
     *
     * @return float A ``float`` representing a number of milliseconds since the epoch,
     *               not counting leap seconds.
     */
    public function getNow()
    {
    }

    /**
     * Get behavior for handling repeating wall time
     *
     * @param IntlCalendar $cal
     *
     * @return int One of the constants  or
     *             .
     */
    public function getRepeatedWallTimeOption($cal)
    {
    }

    /**
     * Get behavior for handling skipped wall time
     *
     * @param IntlCalendar $cal
     *
     * @return int One of the constants ,
     *             or
     *             .
     */
    public function getSkippedWallTimeOption($cal)
    {
    }

    /**
     * Get time currently represented by the object
     *
     * @param IntlCalendar $cal
     *
     * @return float A ``float`` representing the number of milliseconds elapsed since the
     *               reference time (1 Jan 1970 00:00:00 UTC).
     */
    public function getTime($cal)
    {
    }

    /**
     * Get the objectʼs timezone
     *
     * @param IntlCalendar $cal
     *
     * @return IntlTimeZone An ``IntlTimeZone`` object corresponding to the one used
     *                      internally in this object.
     */
    public function getTimeZone($cal)
    {
    }

    /**
     * Get the calendar type
     *
     * @param IntlCalendar $cal
     *
     * @return string A ``string`` representing the calendar type, such as
     *                , , etc.
     */
    public function getType($cal)
    {
    }

    /**
     * Get time of the day at which weekend begins or ends
     *
     * @param string $dayOfWeek
     * @param IntlCalendar $cal
     * @param string $dayOfWeek
     *
     * @return int The number of milliseconds into the day at which the weekend begins or
     *             ends.
     */
    public function getWeekendTransition($dayOfWeek, $cal, $dayOfWeek)
    {
    }

    /**
     * Whether the objectʼs time is in Daylight Savings Time
     *
     * @param IntlCalendar $cal
     *
     * @return bool Returns true if the date is in Daylight Savings Time, false otherwise.
     *              The value false may also be returned on failure, for instance after
     *              specifying invalid field values on non-lenient mode; use  or query
     *              to disambiguate.
     */
    public function inDaylightTime($cal)
    {
    }

    /**
     * Whether another calendar is equal but for a different time
     *
     * @param IntlCalendar $other
     * @param IntlCalendar $cal
     * @param IntlCalendar $other
     *
     * @return bool Assuming there are no argument errors, returns true iif the calendars are
     *              equivalent except possibly for their set time.
     */
    public function isEquivalentTo($other, $cal, $other)
    {
    }

    /**
     * Whether date/time interpretation is in lenient mode
     *
     * @param IntlCalendar $cal
     *
     * @return bool A ``bool`` representing whether the calendar is set to lenient mode.
     */
    public function isLenient($cal)
    {
    }

    /**
     * Whether a field is set
     *
     * @param int $field
     * @param IntlCalendar $cal
     * @param int $field
     *
     * @return bool Assuming there are no argument errors, returns true iif the field is set.
     */
    public function isSet($field, $cal, $field)
    {
    }

    /**
     * Whether a certain date/time is in the weekend
     *
     * @param float $date
     * @param IntlCalendar $cal
     * @param float $date
     *
     * @return bool A ``bool`` indicating whether the given or this objectʼs time occurs
     *              in a weekend.
     */
    public function isWeekend($date = false, $cal, $date = false)
    {
    }

    /**
     * Add value to field without carrying into more significant fields
     *
     * @param int $field
     * @param mixed $amountOrUpOrDown
     * @param IntlCalendar $cal
     * @param int $field
     * @param mixed $amountOrUpOrDown
     *
     * @return bool Returns true on success or false on failure.
     */
    public function roll($field, $amountOrUpOrDown, $cal, $field, $amountOrUpOrDown)
    {
    }

    /**
     * Set a time field or several common fields at once
     *
     * @param int $field
     * @param int $value
     * @param int $year
     * @param int $month
     * @param int $dayOfMonth
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @param IntlCalendar $cal
     * @param int $field
     * @param int $value
     * @param IntlCalendar $cal
     * @param int $year
     * @param int $month
     * @param int $dayOfMonth
     * @param int $hour
     * @param int $minute
     * @param int $second
     *
     * @return bool Returns true on success and false on failure.
     */
    public function set($field, $value, $year, $month, $dayOfMonth = false, $hour = false, $minute = false, $second = false, $cal, $field, $value, $cal, $year, $month, $dayOfMonth = false, $hour = false, $minute = false, $second = false)
    {
    }

    /**
     * Set the day on which the week is deemed to start
     *
     * @param int $dayOfWeek
     * @param IntlCalendar $cal
     * @param int $dayOfWeek
     *
     * @return bool Returns true on success. Failure can only happen due to invalid parameters.
     */
    public function setFirstDayOfWeek($dayOfWeek, $cal, $dayOfWeek)
    {
    }

    /**
     * Set whether date/time interpretation is to be lenient
     *
     * @param string $isLenient
     * @param IntlCalendar $cal
     * @param string $isLenient
     *
     * @return ReturnType Returns true on success. Failure can only happen due to invalid parameters.
     */
    public function setLenient($isLenient, $cal, $isLenient)
    {
    }

    /**
     * Set minimal number of days the first week in a year or month can have
     *
     * @param int $minimalDays
     * @param IntlCalendar $cal
     * @param int $minimalDays
     *
     * @return bool true on success, false on failure.
     */
    public function setMinimalDaysInFirstWeek($minimalDays, $cal, $minimalDays)
    {
    }

    /**
     * Set behavior for handling repeating wall times at negative timezone offset transitions
     *
     * @param int $wallTimeOption
     * @param IntlCalendar $cal
     * @param int $wallTimeOption
     *
     * @return bool Returns true on success. Failure can only happen due to invalid parameters.
     */
    public function setRepeatedWallTimeOption($wallTimeOption, $cal, $wallTimeOption)
    {
    }

    /**
     * Set behavior for handling skipped wall times at positive timezone offset transitions
     *
     * @param int $wallTimeOption
     * @param IntlCalendar $cal
     * @param int $wallTimeOption
     *
     * @return bool Returns true on success. Failure can only happen due to invalid parameters.
     */
    public function setSkippedWallTimeOption($wallTimeOption, $cal, $wallTimeOption)
    {
    }

    /**
     * Set the calendar time in milliseconds since the epoch
     *
     * @param float $date
     * @param IntlCalendar $cal
     * @param float $date
     *
     * @return bool Returns true on success and false on failure.
     */
    public function setTime($date, $cal, $date)
    {
    }

    /**
     * Set the timezone used by this calendar
     *
     * @param mixed $timeZone
     * @param IntlCalendar $cal
     * @param mixed $timeZone
     *
     * @return bool Returns true on success and false on failure.
     */
    public function setTimeZone($timeZone, $cal, $timeZone)
    {
    }

    /**
     * Convert an IntlCalendar into a DateTime object
     *
     * @param IntlCalendar $cal
     *
     * @return DateTime A ``DateTime`` object with the same timezone as this
     *                  object (though using PHPʼs database instead of ICUʼs) and the same time,
     *                  except for the smaller precision (second precision instead of millisecond).
     *                  Returns false on failure.
     */
    public function toDateTime($cal)
    {
    }
}