<?
$subject_val = "[OMPI devel] Broken flex-required error message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 14:15:42 2015" -->
<!-- isoreceived="20150422181542" -->
<!-- sent="Wed, 22 Apr 2015 11:15:19 -0700" -->
<!-- isosent="20150422181519" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Broken flex-required error message" -->
<!-- id="CAAvDA17xzJz7gUKcA5k4zZBaeA+74EiCDzbBFvZYcSgiRmD_WQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Broken flex-required error message<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 14:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When building from a git clone of master I encountered the following:
<br>
<p>checking for flex... no
<br>
checking for lex... no
<br>
configure: WARNING: *** Could not find GNU Flex on your system.
<br>
configure: WARNING: *** GNU Flex required for developer builds of Open MPI.
<br>
configure: WARNING: *** Other versions of Lex are not supported.
<br>
configure: WARNING: *** YOU DO NOT NEED FLEX FOR DISTRIBUTION TARBALLS!
<br>
configure: WARNING: *** If you absolutely cannot install GNU Flex on this
<br>
system
<br>
configure: WARNING: *** consider using a distribution tarball, or generate
<br>
the
<br>
configure: WARNING: *** following files on another system (using Flex) and
<br>
configure: WARNING: *** copy them here:
<br>
configure: error: Cannot continue
<br>
<p><p>I do not disagree with the requirement for flex.
<br>
However, there are multiple problems with that output.
<br>
<p>1) The &quot;following files&quot; list is EMPTY.
<br>
If there is no way to output the list, then the last 4 WARNING lines are
<br>
pointless.
<br>
<p>2) A minor grammar point: &quot;Flex required&quot; should be &quot;Flex is required&quot;
<br>
<p>3) It is NOT known as &quot;GNU Flex&quot;.
<br>
Quoting from <a href="https://www.gnu.org/software/flex/flex.html">https://www.gnu.org/software/flex/flex.html</a>
<br>
&nbsp;&nbsp;&nbsp;Flex is a free (but non-GNU) implementation of the original Unix *lex*
<br>
&nbsp;program.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Reply:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
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
