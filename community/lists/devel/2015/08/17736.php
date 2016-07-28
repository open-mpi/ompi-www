<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:40:31 2015" -->
<!-- isoreceived="20150812194031" -->
<!-- sent="Wed, 12 Aug 2015 19:40:18 +0000" -->
<!-- isosent="20150812194018" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="50F09652-9D43-4294-856E-1E78447228BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBhdP=nxAjdyAFsh2+1fNJKjQMLdNzJn73YjdWPPFrqrg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 15:40:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2015, at 2:35 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just built the 1.8.8 tarball, and the issue is still there,
</span><br>
<span class="quotelev1">&gt; compare the sizes of the osx-64 vs. linux-64 builds:
</span><br>
<span class="quotelev1">&gt; <a href="https://anaconda.org/mpi4py/openmpi/files?sort=uploaded">https://anaconda.org/mpi4py/openmpi/files?sort=uploaded</a>
</span><br>
<p>Thanks for keeping us honest!
<br>
<p>In this case, however, we're unlikely to fix this issue.  The &quot;export CFLAGS&quot; is there for a reason, and this is a low priority to fix.  I.e., there's no technical *problem* -- it's just that we're now passing -g down to VampirTrace, and the resulting libraries are a little larger.  VT is going away in the Very Near Future, so this issue will solve itself then.
<br>
<p>I wish I had infinite time to go fix all the little things like this that bug me, but there's other higher-priority stuff I need to be working on.  Sorry.  :-(
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
<li><strong>Next message:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
