<?
$subject_val = "Re: [hwloc-devel] want 1.0rc4?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 22:03:01 2010" -->
<!-- isoreceived="20100504020301" -->
<!-- sent="Tue, 04 May 2010 11:57:46 +1000" -->
<!-- isosent="20100504015746" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] want 1.0rc4?" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4C8_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E5D1C055-6FB5-45CC-81BD-53C33686AA76_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] want 1.0rc4?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 21:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0953.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2040)"</a>
<li><strong>In reply to:</strong> <a href="0943.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/05/10 09:57, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 1.0rc4 is up.
</span><br>
<p>Running coccicheck on 1.0rc4 flags up this construct, I presume
<br>
as an ambiguous construction:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!topology-&gt;flags &amp; HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM) {
<br>
<p>That's at line 1518 of src/topology.c in hwloc_discover(). The
<br>
check file simply says:
<br>
<p>// !x&amp;y combines boolean negation with bitwise and
<br>
<p><p>It's also flagged some unchecked malloc()'s in various bits:
<br>
<p><p>line 41 of src/misc.c in hwloc_snprintf():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = malloc(size);
<br>
<p><p>line 321 of src/topology-linux.c in hwloc_linux_get_proc_tids():
<br>
<p>&nbsp;&nbsp;&nbsp;tids = malloc(max_tids*sizeof(pid_t));
<br>
<p><p>line 328 of src/topology-linux.c in hwloc_linux_get_proc_tids():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tids = realloc(tids, max_tids*sizeof(pid_t));
<br>
<p><p>line 1561 of src/topology.c in hwloc_discover():
<br>
<p>&nbsp;&nbsp;&nbsp;objs = malloc(n_objs * sizeof(objs[0]));
<br>
<p><p>Hope these are helpful!
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Previous message:</strong> <a href="0953.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2040)"</a>
<li><strong>In reply to:</strong> <a href="0943.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0955.php">Jeff Squyres: "Re: [hwloc-devel] want 1.0rc4?"</a>
<li><strong>Reply:</strong> <a href="0956.php">Brice Goglin: "Re: [hwloc-devel] want 1.0rc4?"</a>
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
