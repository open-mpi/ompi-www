<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 08:12:34 2011" -->
<!-- isoreceived="20110912121234" -->
<!-- sent="Mon, 12 Sep 2011 14:12:23 +0200" -->
<!-- isosent="20110912121223" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="4E6DF727.7040505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUURgAxSYs+2gamKVgkeyMgtd67ezqo9ZT0fovsppJN6=g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-12 08:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 13:58, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but in the manual is not written that get_cpubind() returns the
</span><br>
<span class="quotelev1">&gt; logical OR of the binding of all threads... I ever understand that
</span><br>
<span class="quotelev1">&gt; returns the bind of the calloer, where the caller can be process or
</span><br>
<span class="quotelev1">&gt; thread..
</span><br>
<p>A process is a container that contains one or several threads. The
<br>
binding is where something can run. It's normal that &quot;where a process
<br>
can run&quot; is &quot;where any of its threads can run&quot;, which means it's the
<br>
logical OR of their binding.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm mixing bind of process and threads, and I've noted that if the
</span><br>
<span class="quotelev1">&gt; process and thread are on the same NUMA node, works well, also on
</span><br>
<span class="quotelev1">&gt; different cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the NUMA node of process is different of NUMA node of threads,
</span><br>
<span class="quotelev1">&gt; there is a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, the first thing to understand is what you're trying to do here. In
<br>
the vast majority of cases, binding a thread outside of the binding of
<br>
the corresponding process looks like buggy programming.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0445/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
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
