<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 09:51:05 2011" -->
<!-- isoreceived="20110804135105" -->
<!-- sent="Thu, 4 Aug 2011 15:51:00 +0200" -->
<!-- isosent="20110804135100" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUUKnTvyaYtZL5Gzzej5Yh4tX=3qfuDS_EPx-8RR6W35Dw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804095537.GE4985_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 09:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>how the topology gave by lstopo is built? In particolar, how the logical
<br>
index P# are initialized?
<br>
<p>2011/8/4 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati, le Mon 01 Aug 2011 12:32:44 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; So, are not physically near. I aspect that with Hyperthreading, and 2
</span><br>
<span class="quotelev1">&gt; hardware
</span><br>
<span class="quotelev2">&gt; &gt; threads each core, PU P#0 and PU P#1 are on the same core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since these are P#0 and 1, they may not be indeed (physical indexes).
</span><br>
<span class="quotelev1">&gt; That's the whole problem of the indexes provided by operating systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortunately,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If is it not true,
</span><br>
<span class="quotelev2">&gt; &gt; using in a OMP PARALLEL region with 2 software threads:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ pragma omp paralle num_threads(2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tid= omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i would bind thread 0 on PU P#0 and thread 1 on PU P#1, supposing are
</span><br>
<span class="quotelev2">&gt; &gt; physically near.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, because hwloc functions do not use physical, but logical indexes,
</span><br>
<span class="quotelev1">&gt; which it computes according to the topology. Use lstopo --top to check
</span><br>
<span class="quotelev1">&gt; the actual binding being used.
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
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
