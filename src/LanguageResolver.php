<?php

namespace SetBased\Abc\LanguageResolver;

/**
 * Interface for classes for resolving the language in which a response must be drafted.
 */
interface LanguageResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the language in which the response must be drafted.
   *
   * @return int
   */
  public function getLanId(): int;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
