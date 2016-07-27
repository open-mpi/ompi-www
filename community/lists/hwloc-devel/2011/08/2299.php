<?
$subject_val = "Re: [hwloc-devel] [RFC] I/O objects in level";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 06:14:35 2011" -->
<!-- isoreceived="20110822101435" -->
<!-- sent="Mon, 22 Aug 2011 12:14:30 +0200" -->
<!-- isosent="20110822101430" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [RFC] I/O objects in level" -->
<!-- id="20110822101430.GA6004_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="222523228.2052070.1314004711964.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [RFC] I/O objects in level<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-22 06:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2300.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3640)"</a>
<li><strong>Previous message:</strong> <a href="2298.php">Brice Goglin: "[hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Maybe in reply to:</strong> <a href="2298.php">Brice Goglin: "[hwloc-devel] [RFC] I/O objects in level"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 22 Aug 2011 11:18:31 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; * Several internal functions need special care for this new special depths
</span><br>
<p>You mean the switches that the patch adds? I does not look a problem to
<br>
me.
<br>
<p><span class="quotelev1">&gt; * The bridge levels contains objects that may be parent/child of each other
</span><br>
<p>That should not be a problem, as long as existing applications (which
<br>
shouldn't be using negative levels anyway) do not reach them
<br>
unexpectedly.
<br>
<p>So I'd be rather for the change.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2300.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3640)"</a>
<li><strong>Previous message:</strong> <a href="2298.php">Brice Goglin: "[hwloc-devel] [RFC] I/O objects in level"</a>
<li><strong>Maybe in reply to:</strong> <a href="2298.php">Brice Goglin: "[hwloc-devel] [RFC] I/O objects in level"</a>
<!-- nextthread="start" -->
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
