<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 07:29:54 2011" -->
<!-- isoreceived="20110912112954" -->
<!-- sent="Mon, 12 Sep 2011 13:29:49 +0200" -->
<!-- isosent="20110912112949" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="CAJNPZUWcasYSoGW7QwkhR5eNRaz--wtsP0XFUdpCP+hR_NUOyA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6DEA62.6090101_at_inria.fr" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 07:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Birce,
<br>
<p>I'm so  confused..
<br>
<p>I'm binding MPI processes with set_cpu_bind and it works well. The problem
<br>
is when I  try to bind process and threads.
<br>
<p>It seem that thread process influence bind of main thread.
<br>
<p>And from hwloc manual:
<br>
<p><p>hwloc_set_cpubind()
<br>
<p>Bind *current process* or thread on cpus given in bitmap set.
<br>
<p>Why you are saying tha process bind is not possible? I'm using it and it
<br>
work well!
<br>
<p><p>2011/9/12 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Le 12/09/2011 12:52, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Dear hwloc users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm binding process in a NUMA node and also associated OpenMP threads.
</span><br>
<span class="quotelev2">&gt; &gt; I've noted that, if I bind  execution  of all on different cores in
</span><br>
<span class="quotelev2">&gt; &gt; the same NUMA node , it works well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I bind process in NUMA node 0 for example, and thread on NUMA node
</span><br>
<span class="quotelev2">&gt; &gt; 1, the process is bound on NUMA node 1, and not 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why this? Thread binding influence bind of main process?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gabriele,
</span><br>
<span class="quotelev1">&gt; At least on Linux, you cannot bind a process. When you ask hwloc to bind
</span><br>
<span class="quotelev1">&gt; a process, it just binds all threads contained in this process. When you
</span><br>
<span class="quotelev1">&gt; do get_cpubind on a process, it returns the logical OR of the binding of
</span><br>
<span class="quotelev1">&gt; all threads.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
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
