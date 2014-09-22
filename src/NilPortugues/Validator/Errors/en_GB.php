<?php

return [
    //Generic
    'Generic::isRequired'           => 'The :attribute field is required.',
    'Generic::isNotNull'            => 'The :attribute must be a non null value.',
    //Float
    'Float::__construct'            => 'The :attribute must be a float.',
    'Float::isNotZero'              => 'The :attribute may not be greater than :max.',
    'Float::isPositive'             => 'The :attribute may not be greater than :max.',
    'Float::isNegative'             => 'The :attribute must be less than :max.',
    'Float::isBetween'              => 'The :attribute must be between :min and :max.',
    'Float::isOdd'                  => 'The :attribute must be divisible by :size.',
    'Float::isEven'                 => 'The :attribute must be divisible by :size.',
    'Float::isMultiple'             => 'The :attribute must be multiple of :size.',
    //Integer
    'Integer::__construct'          => 'The :attribute must be an integer.',
    'Integer::isNotZero'            => 'The :attribute may not be greater than :max.',
    'Integer::isPositive'           => 'The :attribute may not be greater than :max.',
    'Integer::isNegative'           => 'The :attribute must be less than :max.',
    'Integer::isBetween'            => 'The :attribute must be between :min and :max.',
    'Integer::isOdd'                => 'The :attribute must be divisible by :size.',
    'Integer::isEven'               => 'The :attribute must be divisible by :size.',
    'Integer::isMultiple'           => 'The :attribute must be multiple of :size.',
    //String
    'String::__construct'           => 'The :attribute must be a string.',
    'String::isAlphanumeric'        => 'The :attribute may only contain letters and numbers.',
    'String::isAlpha'               => 'The :attribute may only contain letters.',
    'String::isBetween'             => 'The :attribute must be between :min and :max characters.',
    'String::isCharset'             => 'The :attribute charset is not valid.',
    'String::isAllConsonants'       => '',
    'String::contains'              => 'The :attribute was not found.',
    'String::isControlCharacters'   => '',
    'String::isDigit'               => 'The :attribute must be :digits digits.',
    'String::endsWith'              => '',
    'String::equals'                => 'The :attribute and :other must match.',
    'String::in'                    => 'The selected :attribute is invalid.',
    'String::hasGraphicalCharsOnly' => '',
    'String::hasLength'             => 'The :attribute must be :size characters.',
    'String::isLowercase'           => '',
    'String::notEmpty'              => '',
    'String::noWhitespace'          => '',
    'String::hasPrintableCharsOnly' => '',
    'String::isPunctuation'         => '',
    'String::matchesRegex'          => 'The :attribute format is invalid.',
    'String::isSlug'                => '',
    'String::isSpace'               => '',
    'String::startsWith'            => '',
    'String::isUppercase'           => '',
    'String::isVersion'             => '',
    'String::isVowel'               => '',
    'String::isHexDigit'            => '',
    'String::hasLowercase'          => '',
    'String::hasUppercase'          => '',
    'String::hasNumeric'            => '',
    'String::hasSpecialCharacters'  => '',
    'String::isEmail'               => 'The :attribute must be a valid email address.',
    //Object
    'Object::__construct'           => 'The :attribute is not a valid object.',
    'Object::isInstanceOf'          => 'The :attribute is not an instance of :object.',
    'Object::hasProperty'           => 'The :attribute property :property is not valid.',
    'Object::hasMethod'             => 'The :attribute method :method is not valid.',
    'Object::hasParentClass'        => 'The :attribute has no parent class :object.',
    'Object::isChildOf'             => 'The :attribute is not child of class :object.',
    'Object::inheritsFrom'          => 'The :attribute does not inherit from class :object.',
    'Object::hasInterface'          => 'The :attribute does not implement interface :object.',
    //DateTime
    'DateTime::__construct'         => 'The :attribute is not a valid date.',
    'DateTime::isAfter'             => 'The :attribute date must be a after :date.',
    'DateTime::isBefore'            => 'The :attribute date must be a before :date.',
    'DateTime::isBetween'           => 'The :attribute date must be between :min and :max.',
    'DateTime::isWeekend'           => 'The :attribute date is not a weekend day.',
    'DateTime::isWeekday'           => 'The :attribute date is not a weekday.',
    'DateTime::isMonday'            => 'The :attribute date is not Monday.',
    'DateTime::isTuesday'           => 'The :attribute date is not Tuesday.',
    'DateTime::isWednesday'         => 'The :attribute date is not Wednesday.',
    'DateTime::isThursday'          => 'The :attribute date is not Thursday.',
    'DateTime::isFriday'            => 'The :attribute date is not Friday.',
    'DateTime::isSaturday'          => 'The :attribute date is not Saturday.',
    'DateTime::isSunday'            => 'The :attribute date is not Sunday.',
    'DateTime::isToday'             => 'The :attribute date is not today.',
    'DateTime::isYesterday'         => 'The :attribute date is not yesterday.',
    'DateTime::isTomorrow'          => 'The :attribute date is not tomorrow.',
    'DateTime::isLeapYear'          => 'The :attribute must be a valid leap year.',
    'DateTime::isMorning'           => 'The :attribute is not morning.',
    'DateTime::isAftenoon'          => 'The :attribute is not afternoon.',
    'DateTime::isEvening'           => 'The :attribute is not evening.',
    'DateTime::isNight'             => 'The :attribute is not night.',
    //Collection
    'Collection::__construct'       => 'The :attribute must be an array.',
    'Collection::each'              => '',
    'Collection::hasKeyFormat'      => 'The :attribute array key format is not valid.',
    'Collection::endsWith'          => 'The :attribute array does not end as expected.',
    'Collection::contains'          => 'The :attribute was not found.',
    'Collection::hasKey'            => 'The :attribute array has no :key.',
    'Collection::length'            => 'The :attribute must contain :size items.',
    'Collection::isNotEmpty'        => 'The :attribute must have at least 1 item.',
    'Collection::startsWith'        => 'The :attribute array does not start as expected.',
];
