<?
$subject_val = "Re: [hwloc-users] Process and thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 08:17:24 2011" -->
<!-- isoreceived="20110912121724" -->
<!-- sent="Mon, 12 Sep 2011 14:17:20 +0200" -->
<!-- isosent="20110912121720" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Process and thread binding" -->
<!-- id="CAJNPZUW1cy83dNo=J2w3a7sBQ3dmC8yo7VNNX4GET2=O_5UOrw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6DF727.7040505_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-12 08:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok,
<br>
<p><span class="quotelev1">&gt;A process is a container that contains one or several threads. The binding
</span><br>
is where &gt;something can run. It's normal that &quot;where a process can run&quot; is
<br>
&quot;where any of its &gt;threads can run&quot;, which means it's the logical OR of
<br>
their binding.
<br>
<p><p>Ok, now it's clear.
<br>
<p>I'm using hwloc_get_last_cpu_location(), not get_cpubind(), sorry..
<br>
<p>Well, the first thing to understand is what you're trying to do here. In the
<br>
vast majority of cases, binding a thread outside of the binding of the
<br>
corresponding process looks like buggy programming.
<br>
<p><p>Mm, and why? In a hybrid code ( MPI + OpenMP), my idea is to bind a single
<br>
MPI process in  one core, and his threads in other cores. Otherwise I have
<br>
all threads that runs on a single core..
<br>
<p><p>2011/9/12 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; Le 12/09/2011 13:58, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  but in the manual is not written that get_cpubind() returns the logical
</span><br>
<span class="quotelev1">&gt; OR of the binding of all threads... I ever understand that returns the
</span><br>
<span class="quotelev1">&gt; bind of the calloer, where the caller can be process or thread..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A process is a container that contains one or several threads. The binding
</span><br>
<span class="quotelev1">&gt; is where something can run. It's normal that &quot;where a process can run&quot; is
</span><br>
<span class="quotelev1">&gt; &quot;where any of its threads can run&quot;, which means it's the logical OR of their
</span><br>
<span class="quotelev1">&gt; binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm mixing bind of process and threads, and I've noted that if the
</span><br>
<span class="quotelev1">&gt; process and thread are on the same NUMA node, works well, also on different
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If the NUMA node of process is different of NUMA node of threads, there
</span><br>
<span class="quotelev1">&gt; is a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, the first thing to understand is what you're trying to do here. In
</span><br>
<span class="quotelev1">&gt; the vast majority of cases, binding a thread outside of the binding of the
</span><br>
<span class="quotelev1">&gt; corresponding process looks like buggy programming.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Previous message:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>In reply to:</strong> <a href="0445.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
<li><strong>Reply:</strong> <a href="0447.php">Brice Goglin: "Re: [hwloc-users] Process and thread binding"</a>
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
