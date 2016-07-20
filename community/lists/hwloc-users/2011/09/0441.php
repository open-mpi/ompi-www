<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 07:18:04 2011" -->
<!-- isoreceived="20110912111804" -->
<!-- sent="Mon, 12 Sep 2011 13:17:54 +0200" -->
<!-- isosent="20110912111754" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="4E6DEA62.6090101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUVMz0CiZrjWOmOTHpDw-OSAaYkaRSYJ3joT_HQwioSrDQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-12 07:17:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Gabriele Fatigati: "[hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0440.php">Gabriele Fatigati: "[hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 12:52, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear hwloc users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm binding process in a NUMA node and also associated OpenMP threads.
</span><br>
<span class="quotelev1">&gt; I've noted that, if I bind  execution  of all on different cores in
</span><br>
<span class="quotelev1">&gt; the same NUMA node , it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I bind process in NUMA node 0 for example, and thread on NUMA node
</span><br>
<span class="quotelev1">&gt; 1, the process is bound on NUMA node 1, and not 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why this? Thread binding influence bind of main process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello Gabriele,
<br>
At least on Linux, you cannot bind a process. When you ask hwloc to bind
<br>
a process, it just binds all threads contained in this process. When you
<br>
do get_cpubind on a process, it returns the logical OR of the binding of
<br>
all threads.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Gabriele Fatigati: "[hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0440.php">Gabriele Fatigati: "[hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0442.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
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
