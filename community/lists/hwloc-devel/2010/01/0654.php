<?
$subject_val = "Re: [hwloc-devel] random api questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 10:52:26 2010" -->
<!-- isoreceived="20100130155226" -->
<!-- sent="Sat, 30 Jan 2010 16:52:20 +0100" -->
<!-- isosent="20100130155220" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] random api questions" -->
<!-- id="20100130155220.GP4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B64536A.6070206_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] random api questions<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 10:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sat 30 Jan 2010 16:42:34 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Do we want a #define HWLOC_API_VERSION to help people support both the
</span><br>
<span class="quotelev1">&gt; 0.9 and the 1.0 APIs at runtime ?
</span><br>
<p>At build time you mean?
<br>
<p><span class="quotelev1">&gt; What's the difference between obj-&gt;cpuset and the other obj-&gt;*cpuset ?
</span><br>
<span class="quotelev1">&gt; Some documentation is missing there,
</span><br>
<p>Is the documentation on the right of the fields not sufficient?
<br>
<p><span class="quotelev1">&gt; and os_index should probably move outside of the list of *cpuset
</span><br>
<span class="quotelev1">&gt; fields.
</span><br>
<p>I guess with your memory changes we have already broken ABI
<br>
compatibility anyway (I don't think we did before).  We need to bump the
<br>
soname accordingly.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0653.php">Brice Goglin: "[hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0655.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
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
