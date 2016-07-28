<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 07:42:17 2011" -->
<!-- isoreceived="20110729114217" -->
<!-- sent="Fri, 29 Jul 2011 13:42:11 +0200" -->
<!-- isosent="20110729114211" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="4E329C93.1020305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUX9sQJn=CdOpzpMnaHQ3kYbS6woyw5JhB_Gvj8KMcnveA_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-29 07:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think both codes are equivalent and correct on this machine.
<br>
hwloc_get_obj_by_type() returns logically-index ojects, that what's you
<br>
want for consecutive binding. There's one hyperthread/PU per Core on
<br>
your machine. So binding on core #3 is equivalent to binding on PU #3
<br>
(they should have the same cpusets here). No physical index is ever
<br>
involved in this code.
<br>
<p>If you ever want to support SMT machines as well:
<br>
* if you still want one process per core, use the code with HWLOC_OBJ_CORE
<br>
* if you want one process per hyperthread, use the code with HWLOC_OBJ_PU
<br>
<p>Brice
<br>
<p><p><p>Le 29/07/2011 13:33, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Sorry, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I forgot to tell you these code block is inside a parallel OpenMP
</span><br>
<span class="quotelev1">&gt; region. This is the complete code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #pragma omp parallel num_threads(6)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int tid = omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and other code block is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #pragma omp parallel num_threads(6)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int tid = omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The goal is physically bind threads as near as possible, one thread
</span><br>
<span class="quotelev1">&gt; per core. Since core ids reported on  hwloc-hello.c are not
</span><br>
<span class="quotelev1">&gt; consecutive and not exclusive, I suppose is better and more sure to
</span><br>
<span class="quotelev1">&gt; use PU id. Or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/7/29 Samuel Thibault &lt;samuel.thibault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:samuel.thibault_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gabriele Fatigati, le Fri 29 Jul 2011 13:24:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; yhanks for yout quick reply!
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; But i have a litte doubt. in a non SMT machine, Is it better use
</span><br>
<span class="quotelev1">&gt;     this:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_CORE, tid);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; or:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU,
</span><br>
<span class="quotelev1">&gt;     tid);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; because work in the same way( i suppose).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     They'll both work about the same way on SMT too, since in the end
</span><br>
<span class="quotelev1">&gt;     it'll
</span><br>
<span class="quotelev1">&gt;     pick up only one thread. Whether you want to assign threads to
</span><br>
<span class="quotelev1">&gt;     cores or
</span><br>
<span class="quotelev1">&gt;     threads then depends on your application: do you want to let its
</span><br>
<span class="quotelev1">&gt;     threads
</span><br>
<span class="quotelev1">&gt;     share a core or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Samuel
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
