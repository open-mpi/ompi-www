<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 07:38:17 2011" -->
<!-- isoreceived="20110912113817" -->
<!-- sent="Mon, 12 Sep 2011 13:38:05 +0200" -->
<!-- isosent="20110912113805" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="4E6DEF1D.6030500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUWcasYSoGW7QwkhR5eNRaz--wtsP0XFUdpCP+hR_NUOyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Process and thread binding<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 07:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 13:29, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Birce,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm so  confused..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm binding MPI processes with set_cpu_bind and it works well. The
</span><br>
<span class="quotelev1">&gt; problem is when I  try to bind process and threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seem that thread process influence bind of main thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And from hwloc manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bind *current process* or thread on cpus given in bitmap set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why you are saying tha process bind is not possible? I'm using it and
</span><br>
<span class="quotelev1">&gt; it work well!
</span><br>
<p>It worked because you never mixed it with single thread binding. If you
<br>
bind process X to coreA and then thread Y of process X to coreB, what
<br>
you should now see with get_cpubind is that process X is now bound to
<br>
cores A+B, thread Y to B, and all other threads to A.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
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
