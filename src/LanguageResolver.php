<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\LanguageResolver;

/**
 * Interface for classes for resolving the language in which a response must be drafted.
 */
interface LanguageResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the code of the language in which the response must be drafted.
   *
   * @return string
   */
  public function getLanguageCode();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
