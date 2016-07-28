<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 07:58:32 2011" -->
<!-- isoreceived="20110912115832" -->
<!-- sent="Mon, 12 Sep 2011 13:58:28 +0200" -->
<!-- isosent="20110912115828" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="CAJNPZUURgAxSYs+2gamKVgkeyMgtd67ezqo9ZT0fovsppJN6=g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6DEF1D.6030500_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-12 07:58:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>but in the manual is not written that get_cpubind() returns the logical OR
<br>
of the binding of all threads... I ever understand that returns the bind of
<br>
the calloer, where the caller can be process or thread..
<br>
<p>I'm mixing bind of process and threads, and I've noted that if the process
<br>
and thread are on the same NUMA node, works well, also on different cores.
<br>
<p>If the NUMA node of process is different of NUMA node of threads, there is a
<br>
problem.
<br>
<p><p><p>2011/9/12 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 12/09/2011 13:29, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Birce,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm so  confused..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm binding MPI processes with set_cpu_bind and it works well. The
</span><br>
<span class="quotelev1">&gt; problem is when I  try to bind process and threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It seem that thread process influence bind of main thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  And from hwloc manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_set_cpubind()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Bind *current process* or thread on cpus given in bitmap set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Why you are saying tha process bind is not possible? I'm using it and it
</span><br>
<span class="quotelev1">&gt; work well!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It worked because you never mixed it with single thread binding. If you
</span><br>
<span class="quotelev1">&gt; bind process X to coreA and then thread Y of process X to coreB, what you
</span><br>
<span class="quotelev1">&gt; should now see with get_cpubind is that process X is now bound to cores A+B,
</span><br>
<span class="quotelev1">&gt; thread Y to B, and all other threads to A.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0443.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
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
