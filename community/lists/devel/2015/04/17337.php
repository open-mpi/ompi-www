<?
$subject_val = "[OMPI devel] Minor error in distscript.csh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 01:06:32 2015" -->
<!-- isoreceived="20150423050632" -->
<!-- sent="Wed, 22 Apr 2015 22:06:03 -0700" -->
<!-- isosent="20150423050603" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Minor error in distscript.csh" -->
<!-- id="CAAvDA16qvQK9For7B1B4wG46CaCGDr0fVSZHdvdShAGyUq24Xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Minor error in distscript.csh<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 01:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17336.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Reply:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running &quot;make dist&quot; (several times) today, I noticed the following:
<br>
<p>&nbsp;- WARNING: Got bad config.guess from ftp.gnu.org (non-existent or empty)
<br>
&nbsp;- WARNING: using included versions for both config.sub and config.guess
<br>
<p>Nevermind for the moment that the wget is NOT from ftp.gnu.org any longer.
<br>
The part that worried me is the &quot;non-existent or empty&quot; claim.
<br>
<p>A quick look shows that logic in distscript.csh uses the non-portable &quot;-s&quot;
<br>
operator[1].
<br>
One should be using &quot;-z&quot; instead of &quot;! -s&quot;:
<br>
<p>--- a/config/distscript.csh
<br>
+++ b/config/distscript.csh
<br>
@@ -108,14 +108,14 @@ chmod +x config.guess config.sub
<br>
&nbsp;# unreleased software...
<br>
<p>&nbsp;set happy=0
<br>
-if (! -f config.guess || ! -s config.guess) then
<br>
+if (! -f config.guess || -z config.guess) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; - WARNING: Got bad config.guess from ftp.gnu.org (non-existent
<br>
or empty)&quot;
<br>
&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./config.guess &gt;&amp; /dev/null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($status != 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; - WARNING: Got bad config.guess from ftp.gnu.org (not
<br>
executable)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
-        if (! -f config.sub || ! -s config.sub) then
<br>
+        if (! -f config.sub || -z config.sub) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot; - WARNING: Got bad config.sub from ftp.gnu.org
<br>
(non-existent or empty)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./config.sub `./config.guess` &gt;&amp; /dev/null
<br>
<p><p>-Paul
<br>
<p>[1] Two key excerpts from &quot;man 1 tcsh&quot;:
<br>
<p>&nbsp;Throughout  this  manual,  features  of  tcsh  not found in most csh(1)
<br>
&nbsp;implementations (specifically, the 4.4BSD csh) are labeled with  `(+)',
<br>
<p><p><p>&nbsp;File inquiry operators
<br>
&nbsp;&nbsp;[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;z   Zero size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s   Non-zero size (+)
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17338.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17336.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Reply:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
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
