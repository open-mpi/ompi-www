<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 06:16:12 2011" -->
<!-- isoreceived="20110801101612" -->
<!-- sent="Mon, 1 Aug 2011 12:16:06 +0200" -->
<!-- isosent="20110801101606" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUX208gQOM=j8EA9DRgH+sWHr_HxiZr6fEKobgpDrPX1Bg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110729120634.GO3091_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 06:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>reading a hwloc-v1.2-a4 manual, on page 15, i look an example with 4-socket
<br>
2-core machine with hyperthreading.
<br>
<p>Core id's are not exclusive as said before. PU's id are exclusive but not
<br>
physically sequential (I suppose)
<br>
<p>PU P#0 is in socket P#0 on Core P#0. PU P#1 is in another socket! (core
<br>
P#0). So, are not physically near. I aspect that with Hyperthreading, and 2
<br>
hardware threads each core, PU P#0 and PU P#1 are on the same core. If is it
<br>
not true, using in a OMP PARALLEL region with 2 software threads:
<br>
<p>$ pragma omp paralle num_threads(2)
<br>
<p>tid= omp_get_thread_num();
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_bitmap_singlify(set);
<br>
<p>hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p><p><p>i would bind thread 0 on PU P#0 and thread 1 on PU P#1, supposing are
<br>
physically near. But i thinks it not works..
<br>
<p><p><p><p><p><p>2011/7/29 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Fri 29 Jul 2011 13:34:29 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I forgot to tell you these code block is inside a parallel OpenMP region.
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev2">&gt; &gt; is the complete code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #pragma omp parallel num_threads(6)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int tid = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and other code block is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #pragma omp parallel num_threads(6)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int tid = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so it depends whether you want to put your OpenMP threads on
</span><br>
<span class="quotelev1">&gt; separate cores (then the first code which distributes among cores), or
</span><br>
<span class="quotelev1">&gt; if you're ok with letting them share a core (then the first code which
</span><br>
<span class="quotelev1">&gt; distributes among threads).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe try and run lstopo --top to see the result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
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
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0342.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
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
