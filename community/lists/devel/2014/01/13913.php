<?
$subject_val = "Re: [OMPI devel] 1.7.4 fortran status?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 18:27:16 2014" -->
<!-- isoreceived="20140124232716" -->
<!-- sent="Fri, 24 Jan 2014 23:27:14 +0000" -->
<!-- isosent="20140124232714" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 fortran status?" -->
<!-- id="814326E9-B963-47E7-8A8A-6225C0DBAA1D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16RTo+To7+KH91DgjbOios2x9k0Ytim6Mogds7ss1yGow_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 fortran status?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 18:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>In reply to:</strong> <a href="13895.php">Paul Hargrove: "[OMPI devel] 1.7.4 fortran status?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Reply:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 24, 2014, at 1:18 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My understanding is that for (at least) pathscale and open64 compilers we have a regression because 1.7.3 automatically rejected the f08 bindings, but the current 1.7.4rc tarball fails while building usempif08 unless *manually* disabled at configure time.  Is that accurate?
</span><br>
<p>I just committed a change on the trunk to configure that should disqualify the older pathscale and open64 compilers from compiling the mpi_f08 module (like we did in 1.7.3 and earlier).
<br>
<p>I trivially extended one Fortran configure test to check for BIND(C, name=&quot;foo&quot;) where strlen(foo)&gt;32.  That should make the older pathscale fail the test, and therefore we avoid the internal compiler error.
<br>
<p>I did *not* change the OMPI C symbol names to be &lt;= 32 characters.
<br>
<p>It ain't perfect, but hopefully that'll do it!
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
<li><strong>Next message:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Previous message:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>In reply to:</strong> <a href="13895.php">Paul Hargrove: "[OMPI devel] 1.7.4 fortran status?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
<li><strong>Reply:</strong> <a href="13914.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 fortran status?"</a>
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
