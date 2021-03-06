<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: GetActiveKeyboard"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: GetActiveKeyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_SetEnabled.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_SetActiveKeyboard.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_GetActiveKeyboard">Function: GetActiveKeyboard</h4></div></div></div><p>
      Returns the internal name of the currently active keyboard.
    </p><p>
      This does not reflect whether or not KeymanWeb is currently enabled or if the focus is in a
      KeymanWeb-managed control.  If no keyboard is currently active, GetActiveKeyboard returns an
      empty string.
    </p><p>
      Parameters:
      <code class="code">
        none
      </code>
    </p><p>
      Return Value:
      <code class="code">
        String, internal name of currently active keyboard
      </code>
    </p><p>
      Version Introduced:
      <code class="code">
        1.0
      </code>
    </p><p>
      See Also:
      <code class="code">
        GetKeyboards, SetActiveKeyboard, SetDefaultKeyboardForControl
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_SetEnabled.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_SetActiveKeyboard.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: SetEnabled </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: SetActiveKeyboard</td></tr></table></div>
