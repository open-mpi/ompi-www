<?
$subject_val = "Re: [hwloc-users] hwloc on systems with more than 64 cpus?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 01:14:12 2010" -->
<!-- isoreceived="20100519051412" -->
<!-- sent="Wed, 19 May 2010 07:14:06 +0200" -->
<!-- isosent="20100519051406" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc on systems with more than 64 cpus?" -->
<!-- id="4BF3739E.9020001_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201005171741.37621.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc on systems with more than 64 cpus?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 01:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; taskset format is same on 32bits architecture on a 64bits architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have system with 128 CPUs, but according to man page it's
</span><br>
<span class="quotelev1">&gt; 0x80000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the source code as well.  See str_to_cpuset function. It 
</span><br>
<span class="quotelev1">&gt; supports cpuset hex mask of any length.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand your point to use hwloc-bind. However, I still believe that 
</span><br>
<span class="quotelev1">&gt; supporting taskset would be a useful feature and very easy to implement (you 
</span><br>
<span class="quotelev1">&gt; basically just convert physical CPU # into hex). taskset is currently THE 
</span><br>
<span class="quotelev1">&gt; user-space program to set CPU affinity.  I understand that it's probably too 
</span><br>
<span class="quotelev1">&gt; late for this release. But perhaps you can consider it for the next release. 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thanks, I've added this to a new TODO entry, we'll see what happens :)
<br>
If you submit a hwloc patch adding the internal conversion routines and
<br>
--taskset to some tools, that would help, of course :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>Previous message:</strong> <a href="0081.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<li><strong>In reply to:</strong> <a href="0078.php">Jirka Hladky: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Brice Goglin: "Re: [hwloc-users] hwloc on systems with more than 64 cpus?"</a>
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
