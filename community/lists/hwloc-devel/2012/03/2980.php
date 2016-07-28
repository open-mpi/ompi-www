<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:37:03 2012" -->
<!-- isoreceived="20120322223703" -->
<!-- sent="Thu, 22 Mar 2012 23:36:56 +0100" -->
<!-- isosent="20120322223656" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="4F6BA988.9070803_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuaZUrN2UMy2oW8jBE=jzofEx+bjvCTPDq3ydGWHkBmM=4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 18:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/03/2012 23:33, Daniel Ibanez a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I've run this test  before (didnt keep the results but can run it again).
</span><br>
<span class="quotelev1">&gt; I got debug output and compared it with the output from a hwloc test
</span><br>
<span class="quotelev1">&gt; executable
</span><br>
<span class="quotelev1">&gt; and I noticed that my program did not show any PU objects were discovered.
</span><br>
<span class="quotelev1">&gt; In my program the first discovered topology is just a Machine object,
</span><br>
<span class="quotelev1">&gt; but in the hwloc program its a Machine object and 64 PU objects.
</span><br>
<span class="quotelev1">&gt; something went wrong in PU detection...
</span><br>
<p>If I am reading your output correctly, all PUs are created by
<br>
setup_pu_level() depending on the return value of
<br>
hwloc_fallback_nbprocessors() defined in src/topology.c. Any chance you
<br>
add some printf there to understand what's going on?
<br>
hwloc_fallback_nbprocessors() would likely return 64 when things work
<br>
and 0 otherwise here.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2981.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
