<?
$subject_val = "[OMPI devel] OMPI tool CLI improvements";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 12:53:26 2012" -->
<!-- isoreceived="20120229175326" -->
<!-- sent="Wed, 29 Feb 2012 12:53:22 -0500" -->
<!-- isosent="20120229175322" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI tool CLI improvements" -->
<!-- id="6ACEE78D-F573-4D6D-AA61-C5692B2D9D13_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] OMPI tool CLI improvements<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 12:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>Previous message:</strong> <a href="10641.php">Gunter, David O: "Re: [OMPI devel] typo in a copyright message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I mentioned this on the call yesterday; here's some more details.
<br>
<p>There have been two improvements to OMPI's tools' CLI behavior recently.  These are targeted at 1.7 and beyond, not 1.5/1.6.
<br>
<p>1. Ralph committed a change to the general CLI parser such that if an CLI option is expecting an integer argument, if the argument isn't actually an integer, the tool will error.  For example, if a user mistakenly types this (notice the missing np value):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np --host foo a.out
<br>
<p>Previously, they would have seen a confusing error about how the executable &quot;foo&quot; could not be found.  Now they'll see this:
<br>
<p>----------------------------------------------------------------------------
<br>
Open MPI has detected that a parameter given to a command line
<br>
option does not match the expected format:
<br>
<p>&nbsp;&nbsp;Option: np
<br>
&nbsp;&nbsp;Param:  --host
<br>
<p>This is frequently caused by omitting to provide the parameter
<br>
to an option that requires one. Please check the command line and try again.
<br>
----------------------------------------------------------------------------
<br>
<p>2. I just committed a patch which did several things:
<br>
<p>- fixed some bugs where &quot;unknown&quot; tokens were allowed on the command line (which should really only be used for ortertun).
<br>
- if an unknown token is encountered, print a short error to stderr and quit with a nonzero exit status
<br>
- if we don't find the right number of parameters to an option, print a short error to stderr and quit with a nonzero exit status
<br>
- when --help is given, print the help message to stdout (not stderr) and quit with a zero exit status
<br>
- added --showme:help option to the wrapper compilers
<br>
- updated docs in opal/util/cmd_line.h
<br>
- other small/miscellaneous CLI parsing bugs in various tools
<br>
<p>I won't bore you with what we did before.  :-)  Here's some examples of what the new behavior looks like:
<br>
<p>-----
<br>
% ompi_info --bogus
<br>
ompi_info: Error: unknown option &quot;--bogus&quot;
<br>
Type 'ompi_info --help' for usage.
<br>
% ompi_info --param bogus
<br>
ompi_info: Error: option &quot;--param&quot; did not have enough parameters (2)
<br>
Type 'ompi_info --help' for usage.
<br>
%
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10643.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5.5rc2 missing a Mellanox PCI vendor ID"</a>
<li><strong>Previous message:</strong> <a href="10641.php">Gunter, David O: "Re: [OMPI devel] typo in a copyright message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
