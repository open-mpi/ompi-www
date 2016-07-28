<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 08:53:48 2010" -->
<!-- isoreceived="20100218135348" -->
<!-- sent="Thu, 18 Feb 2010 08:53:42 -0500" -->
<!-- isosent="20100218135342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="B7051649-2153-447C-88D3-C1C5FB453AD9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100218065343.GA10922_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 08:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7457.php">Jeff Squyres: "[OMPI devel] RFC: pkg-config(1) files for OMPI"</a>
<li><strong>Previous message:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2010, at 1:53 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; You could probably create fake empty libopen-rte and libopen-pal stub
</span><br>
<span class="quotelev1">&gt; libraries with 0:0:0 purely for the sake of allowing such an a.out to
</span><br>
<span class="quotelev1">&gt; still work (on systems with versioned sonames[1]).  Since this doesn't
</span><br>
<span class="quotelev1">&gt; actually use any of the APIs from those libraries, there is no problem
</span><br>
<span class="quotelev1">&gt; here, and your 1.5 libmpi will pull in the 1:0:0 versions of the other
</span><br>
<span class="quotelev1">&gt; two libraries.
</span><br>
<p>You get 10 &quot;evil genius&quot; points for a nifty-yet-icky solution.  :-)
<br>
<p>I don't really want to continue carrying forward empty libraries just to maintain ABI.  I'm (mostly) ok with breaking ABI at a major series change (i.e., 1.5.0).
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
<li><strong>Next message:</strong> <a href="7457.php">Jeff Squyres: "[OMPI devel] RFC: pkg-config(1) files for OMPI"</a>
<li><strong>Previous message:</strong> <a href="7455.php">Nadia Derbey: "Re: [OMPI devel] PATCH: remove trailing colon at the end of	thegenerated	LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="7454.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
