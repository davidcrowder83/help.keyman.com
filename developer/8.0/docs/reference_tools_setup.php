<?php
  require_once('includes/template.php');

  head([
    'title' => "Setup Bootstrapper"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Setup Bootstrapper</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_tools.php">Prev</a> </td><th width="60%" align="center">Tools</th><td width="20%" align="right"> <a accesskey="n" href="reference_tools_wix.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_tools_setup">Setup Bootstrapper</h3></div></div></div><p>
    The Keyman Desktop installation bootstrapper is a self-extracting executable file that contains a Windows Installer technology MSI file, and optionally keyboards.
    The bootstrapper is used whenever a package installer is created.
  </p><p>
   The bootstrapper:
  </p><div class="orderedlist"><ol type="1"><li>Checks the system before starting the installation to ensure that all prerequisites are met, and optionally downloads and installs the prerequisites.</li><li>Optionally checks online for an updated version of Keyman Desktop before installing.</li><li>Starts the Keyman Desktop Windows Installer MSI package.</li><li>Installs any keyboards included.</li><li>Starts Keyman Desktop after the install completes.</li></ol></div><h4><a name="id671481"></a>Command Line Options</h4><p>The following command line parameters are supported in the bootstrapper:</p><table><tbody><tr><td>-c</td><td>Continue setup after Windows restarts (this parameter is not normally required)</td></tr><tr><td>-s</td><td>Run a silent installation</td></tr><tr><td>-o</td><td>Do not check online for updates or prerequisites (useful with -s)</td></tr><tr><td>-x &lt;extractpath&gt;</td><td>Extract all the files from the self-extracting executable to the path extractpath and exit the bootstrapper.</td></tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_tools.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_tools.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_tools_wix.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Tools </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Windows Installer XML (WiX)</td></tr></table></div>
