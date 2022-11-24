<?php

namespace Enchant;

class Messenger {
  public static function embedCode($code) {
    return <<<END
      <script>var enchant = enchant || []</script>
      <script src="//platform.enchant.com" data-enchant-messenger-id="{$code}" async></script>
    END;
  }
}

?>
