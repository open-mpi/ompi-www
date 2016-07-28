<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 08:30:35 2011" -->
<!-- isoreceived="20110912123035" -->
<!-- sent="Mon, 12 Sep 2011 14:30:24 +0200" -->
<!-- isosent="20110912123024" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="4E6DFB60.1030201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUW1cy83dNo=J2w3a7sBQ3dmC8yo7VNNX4GET2=O_5UOrw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-12 08:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2011 14:17, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Mm, and why? In a hybrid code ( MPI + OpenMP), my idea is to bind a
</span><br>
<span class="quotelev1">&gt; single MPI process in  one core, and his threads in other cores.
</span><br>
<span class="quotelev1">&gt; Otherwise I have all threads that runs on a single core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The usual way to do that is to first bind the entire process to all
<br>
cores available to all its thread and then bind each thread to a single
<br>
core.
<br>
<p>For instance, if doing Open MPI + OpenMP with one process per socket
<br>
* you pass --bind-to-socket on the mpirun/mpiexec command-line
<br>
* when the MPI process starts, the OpenMP runtime calls something like
<br>
get_cpubind to find out how many cores were given to it
<br>
* it creates the exact same number of OpenMP threads and bind one of
<br>
them on each core
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0448.php">Gabriele Fatigati: "Re: [hwloc-users] Process and thread binding"</a>
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
