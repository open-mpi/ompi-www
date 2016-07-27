<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 12:25:32 2009" -->
<!-- isoreceived="20091112172532" -->
<!-- sent="Thu, 12 Nov 2009 18:25:27 +0100" -->
<!-- isosent="20091112172527" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="20091112172527.GK4729_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AFC423E.7030309_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 12:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 12 Nov 2009 18:13:34 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * PLPA-like API is prefixed with hwloc_plpa_ and all functions get a new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc_topology_t parameter. The problematic ones are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + int hwloc_plpa_sched_getaffinity(pid_t pid, hwloc_cpuset_t cpuset);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  I'm a little confused.  If we don't provide a drop-in PLPA
</span><br>
<span class="quotelev2">&gt; &gt; replacement API implementation, what's the point of implementing a
</span><br>
<span class="quotelev2">&gt; &gt; PLPA-like API?  PLPA users will still need to modify their code --
</span><br>
<span class="quotelev2">&gt; &gt; shouldn't we be pointing them to the more-powerful hwloc API instead?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's certainly some desirable PLPA API features that could be
</span><br>
<span class="quotelev2">&gt; &gt; imported to the HWLOC API -- but I would think that if people want to
</span><br>
<span class="quotelev2">&gt; &gt; keep using the PLPA API, they can.  It just won't [ever] be updated. 
</span><br>
<span class="quotelev2">&gt; &gt; The existing (and future) hwloc API is the migration path forward --
</span><br>
<span class="quotelev2">&gt; &gt; I'm not convinced that providing a new API that's halfway between PLPA
</span><br>
<span class="quotelev2">&gt; &gt; and hwloc is worthwhile...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed, let's just remove this and tell people to use hwloc_[sg]et_*cpubind.
</span><br>
<p>What do you mean by &quot;this&quot;?  The whole plpa.h or just
<br>
hwloc_plpa_sched_getaffinity?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
