<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 07:40:27 2010" -->
<!-- isoreceived="20101026114027" -->
<!-- sent="Tue, 26 Oct 2010 07:40:22 -0400" -->
<!-- isosent="20101026114022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="943FE11C-A76D-4552-B567-660B7FB50FE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1010261247490.1631_at_jeaugeys" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 07:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8626.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8626.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 26, 2010, at 6:55 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; This problem may be a detail, but it bugs me a lot, so I'd like to have it fixed.
</span><br>
<p>Fair enough.  :-)
<br>
<p><span class="quotelev1">&gt; Here is a patch that changes the path setting algorithm to &quot;last component wins&quot; instead of &quot;first component wins&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is as wrong as was the original code, except that it is consistent with the way autogen.pl generates static-components.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If nobody objects, I'll commit it tomorrow.
</span><br>
<p>I don't think this is the right way to fix it.  Sorry!  :-(  I say this because it worked somewhat by luck before, and now it's broken.  If we put in another &quot;it'll work because of a side effect of an unintentional characteristic of the build system&quot; hack, it'll just likely break again someday if/when we change the build system.
<br>
<p>I'd prefer a more robust solution that won't break as a side-effect of the build system.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8626.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>In reply to:</strong> <a href="8626.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8628.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
