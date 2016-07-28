<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 04:29:26 2009" -->
<!-- isoreceived="20090905082926" -->
<!-- sent="Sat, 5 Sep 2009 11:29:21 +0300" -->
<!-- isosent="20090905082921" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="404A45BE-6A14-4BB2-BFA8-DE4B5A9466AF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0909041328180.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 04:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2009, at 2:34 PM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; hg -R &quot;$srcdir&quot; tip | head -1 | grep &quot;^changeset:&quot; | cut -d: -f3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Good catch; I changed it slightly from this to:
<br>
<p>hg -v -R &quot;$srcdir&quot; tip | grep ^changeset: | head -n 1 | cut -d: -f3
<br>
<p>I put this on the trunk since I couldn't push to your bb tree; you  
<br>
should get it in the next pull.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>Previous message:</strong> <a href="6786.php">Jeff Squyres: "Re: [OMPI devel] suffix flag problems"</a>
<li><strong>In reply to:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
