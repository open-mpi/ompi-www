<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 10:05:22 2012" -->
<!-- isoreceived="20120905140522" -->
<!-- sent="Wed, 5 Sep 2012 16:05:18 +0200" -->
<!-- isosent="20120905140518" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUXhqrYqSgi2ctchuwyLY6d1ii11cuO7+fHL68Xwa83qLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50475AA9.5090300_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 10:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Downscaling the matrix size, binding works well, but the memory available
<br>
is enought also using more big matrix, so I'm a bit confused.
<br>
<p>Using the same big matrix size without binding the code works well, so how
<br>
I can explain this behaviour?
<br>
<p>Maybe hwloc_set_area_membind_nodeset introduces other extra allocation that
<br>
are resilient after the call?
<br>
<p><p><p>2012/9/5 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  An internal malloc failed then. That would explain why your malloc failed
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt; It looks like you malloc'ed too much memory in your program?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 05/09/2012 15:56, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An update:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  placing strerror(errno) after hwloc_set_area_membind_nodeset  gives:
</span><br>
<span class="quotelev1">&gt; &quot;Cannot allocate memory&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/5 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've noted that hwloc_set_area_membind_nodeset return -1 but errno is
</span><br>
<span class="quotelev2">&gt;&gt; not equal to EXDEV or ENOSYS. I supposed that these two case was the two
</span><br>
<span class="quotelev2">&gt;&gt; unique possibly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From the hwloc documentation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -1 with errno set to ENOSYS if the action is not supported
</span><br>
<span class="quotelev2">&gt;&gt; -1 with errno set to EXDEV if the binding cannot be enforced
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Any other binding failure reason? The memory available is enought.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/9/5 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello Gabriele,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only limit that I would think of is the available physical memory on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each NUMA node (numactl -H will tell you how much of each NUMA node memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is still available).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malloc usually only fails (it returns NULL?) when there no *virtual*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory anymore, that's different. If you don't allocate tons of terabytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of virtual memory, this shouldn't happen easily.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 05/09/2012 14:27, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Dear Hwloc users and developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm using hwloc 1.4.1 on a multithreaded program in a Linux platform,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where each thread bind many non contiguos pieces of a big matrix using in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very intensive way hwloc_set_area_membind_nodeset function:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  hwloc_set_area_membind_nodeset(topology, punt+offset, len, nodeset,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Binding seems works well, since the returned code from function is 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for every calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  The problems is that after binding, a simple little new malloc fails,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without any apparent reason.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Disabling memory binding, the allocations works well.  Is there any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; knows problem if  hwloc_set_area_membind_nodeset is used intensively?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Is there some operating system limit for memory pages binding?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC specialist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722&lt;%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HPC specialist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722&lt;%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0686.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0686.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0688.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
