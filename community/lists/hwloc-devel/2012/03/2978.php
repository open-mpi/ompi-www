<?
$subject_val = "Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:29:22 2012" -->
<!-- isoreceived="20120322222922" -->
<!-- sent="Thu, 22 Mar 2012 23:29:15 +0100" -->
<!-- isosent="20120322222915" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI" -->
<!-- id="4F6BA7BB.6070005_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADcFuaaSkx-KCSSZkoSsqU5MrmPDJzbeo-HkQAKJ5_mOaziksQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd:  BGQ empty topology with MPI<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 18:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2976.php">Daniel Ibanez: "[hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/03/2012 23:07, Daniel Ibanez a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspected this might be the reason, so I called &quot;nm&quot;
</span><br>
<span class="quotelev1">&gt; with the static versions of the libraries their compiler wrappers
</span><br>
<span class="quotelev1">&gt; link against and I could not find the term &quot;hwloc&quot; in the output.
</span><br>
<span class="quotelev1">&gt; Is this a valid test?
</span><br>
<p>If your hwloc is still compiled with debug enabled, you can rebuild/run
<br>
your MPI program with it. You should get the huge verbose output on
<br>
stderr as long as you call hwloc_topology_init() and load(). If you
<br>
don't get anything, some other hwloc is used instead of yours.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2977.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2976.php">Daniel Ibanez: "[hwloc-devel] Fwd:  BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2979.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
