<?
$subject_val = "Re: [hwloc-devel] Warnings in hwloc-1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 09:41:27 2012" -->
<!-- isoreceived="20120331134127" -->
<!-- sent="Sat, 31 Mar 2012 08:41:17 -0500" -->
<!-- isosent="20120331134117" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Warnings in hwloc-1.4.1" -->
<!-- id="4F77097D.1020300_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F76A8B9.2020602_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Warnings in hwloc-1.4.1<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 09:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3008.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4425)"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>In reply to:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/31/2012 01:48 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 31/03/2012 04:06, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The hwloc code seems to shadow some previously defined variables.
</span><br>
<span class="quotelev2">&gt;&gt; These warnings show up when configured with CFLAGS=-Wshadow with gcc.
</span><br>
<span class="quotelev2">&gt;&gt; Here's a patch to fix these warnings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/9656">https://trac.mcs.anl.gov/projects/mpich2/changeset/9656</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I even get more of these in utils/ because of the &quot;index&quot; gcc builtin.
</span><br>
<span class="quotelev1">&gt; We should remember to test this cflags periodically.
</span><br>
<p>Ah, sorry.  We usually throw away the utils/ directory (among other 
<br>
things) in our copy in MPICH2, to get the embedded build working correctly.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3008.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4425)"</a>
<li><strong>Previous message:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>In reply to:</strong> <a href="3006.php">Brice Goglin: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
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
