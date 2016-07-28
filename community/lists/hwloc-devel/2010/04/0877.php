<?
$subject_val = "Re: [hwloc-devel] Embedding: is it worth it?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 14:51:12 2010" -->
<!-- isoreceived="20100402185112" -->
<!-- sent="Fri, 2 Apr 2010 14:51:06 -0400" -->
<!-- isosent="20100402185106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Embedding: is it worth it?" -->
<!-- id="54A7A5DD-9FB4-44DB-A6E3-38D12417531A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100402182531.GB4884_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Embedding: is it worth it?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 14:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1902)"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2010, at 2:25 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; But to use an external PLPA/libltdl/whatever, OMPI's configure would just call their configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not 100% sure what RedHat etc. do, but in Debian the policy wouldn't
</span><br>
<span class="quotelev1">&gt; be to do this, but to just link against the existing installed library,
</span><br>
<span class="quotelev1">&gt; i.e. use the installed hwloc.pc file only, _not_ run its configure
</span><br>
<span class="quotelev1">&gt; script.  I believe that's what RedHat etc. mean.
</span><br>
<p>Yes.
<br>
<p>To be clear, if OMPI is to use the internal/embedded copy, it would just call the $path_to_hwloc/configure.  If OMPI is to use the external/system copy, it would just link against it (there's obviously no configure to call).
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
<li><strong>Next message:</strong> <a href="0878.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1902)"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>In reply to:</strong> <a href="0876.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Reply:</strong> <a href="0883.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
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
