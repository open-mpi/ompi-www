<?
$subject_val = "Re: [hwloc-devel] Warnings in hwloc-1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 02:48:33 2012" -->
<!-- isoreceived="20120331064833" -->
<!-- sent="Sat, 31 Mar 2012 08:48:25 +0200" -->
<!-- isosent="20120331064825" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Warnings in hwloc-1.4.1" -->
<!-- id="4F76A8B9.2020602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F7666B7.4010502_at_mcs.anl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 02:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Previous message:</strong> <a href="3005.php">Pavan Balaji: "[hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>In reply to:</strong> <a href="3005.php">Pavan Balaji: "[hwloc-devel] Warnings in hwloc-1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Reply:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/03/2012 04:06, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hwloc code seems to shadow some previously defined variables. 
</span><br>
<span class="quotelev1">&gt; These warnings show up when configured with CFLAGS=-Wshadow with gcc. 
</span><br>
<span class="quotelev1">&gt; Here's a patch to fix these warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/9656">https://trac.mcs.anl.gov/projects/mpich2/changeset/9656</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I even get more of these in utils/ because of the &quot;index&quot; gcc builtin.
<br>
We should remember to test this cflags periodically.
<br>
Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Previous message:</strong> <a href="3005.php">Pavan Balaji: "[hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>In reply to:</strong> <a href="3005.php">Pavan Balaji: "[hwloc-devel] Warnings in hwloc-1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
<li><strong>Reply:</strong> <a href="3007.php">Pavan Balaji: "Re: [hwloc-devel] Warnings in hwloc-1.4.1"</a>
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
