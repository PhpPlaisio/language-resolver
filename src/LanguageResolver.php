<?php
declare(strict_types=1);

namespace Plaisio\LanguageResolver;

/**
 * Interface resolving the language in which a response must be drafted.
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
