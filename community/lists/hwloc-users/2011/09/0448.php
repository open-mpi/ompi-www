<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:50:07 2011" -->
<!-- isoreceived="20110912135007" -->
<!-- sent="Mon, 12 Sep 2011 15:50:03 +0200" -->
<!-- isosent="20110912135003" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="CAJNPZUXz4tiEW+ptpn=zYgYy+jCq6J44yJbBLSQP_+NwzsM2zg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6DFB60.1030201_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-12 09:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok Brice,
<br>
<p>thanks very much for your explanations. But I don't understand why a process
<br>
inherits core bound of his threads according to your example:
<br>
<p><span class="quotelev1">&gt;It worked because you never mixed it with single thread binding. If you
</span><br>
bind process X to &gt;coreA and then thread Y of process X to coreB, what you
<br>
should now see with get_cpubind is &gt;that process X is now bound to cores
<br>
A+B, thread Y to B, and all other threads to A.
<br>
<p><p><p><p>2011/9/12 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Le 12/09/2011 14:17, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Mm, and why? In a hybrid code ( MPI + OpenMP), my idea is to bind a
</span><br>
<span class="quotelev2">&gt; &gt; single MPI process in  one core, and his threads in other cores.
</span><br>
<span class="quotelev2">&gt; &gt; Otherwise I have all threads that runs on a single core.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usual way to do that is to first bind the entire process to all
</span><br>
<span class="quotelev1">&gt; cores available to all its thread and then bind each thread to a single
</span><br>
<span class="quotelev1">&gt; core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, if doing Open MPI + OpenMP with one process per socket
</span><br>
<span class="quotelev1">&gt; * you pass --bind-to-socket on the mpirun/mpiexec command-line
</span><br>
<span class="quotelev1">&gt; * when the MPI process starts, the OpenMP runtime calls something like
</span><br>
<span class="quotelev1">&gt; get_cpubind to find out how many cores were given to it
</span><br>
<span class="quotelev1">&gt; * it creates the exact same number of OpenMP threads and bind one of
</span><br>
<span class="quotelev1">&gt; them on each core
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Samuel Thibault: "Re: [hwloc-users] Process and thread binding"</a>
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
