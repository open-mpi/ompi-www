<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 29 07:33:52 2011" -->
<!-- isoreceived="20110729113352" -->
<!-- sent="Fri, 29 Jul 2011 13:33:47 +0200" -->
<!-- isosent="20110729113347" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUX9sQJn=CdOpzpMnaHQ3kYbS6woyw5JhB_Gvj8KMcnveA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110729112710.GM3091_at_const" -->
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
<strong>Date:</strong> 2011-07-29 07:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry,
<br>
<p>I forgot to tell you these code block is inside a parallel OpenMP region.
<br>
This is the complete code:
<br>
<p>#pragma omp parallel num_threads(6)
<br>
{
<br>
int tid = omp_get_thread_num();
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_bitmap_singlify(set);
<br>
<p>hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>hwloc_bitmap_free(set);
<br>
<p>}
<br>
<p>and other code block is:
<br>
<p>#pragma omp parallel num_threads(6)
<br>
{
<br>
int tid = omp_get_thread_num();
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_bitmap_singlify(set);
<br>
<p>hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
<br>
<p>hwloc_bitmap_free(set);
<br>
<p>}
<br>
<p><p>The goal is physically bind threads as near as possible, one thread per
<br>
core. Since core ids reported on  hwloc-hello.c are not consecutive and not
<br>
exclusive, I suppose is better and more sure to use PU id. Or not?
<br>
<p><p><p>2011/7/29 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Fri 29 Jul 2011 13:24:17 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; yhanks for yout quick reply!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But i have a litte doubt. in a non SMT machine, Is it better use this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, tid);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; or:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_bitmap_singlify(set);
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_cpubind(topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; because work in the same way( i suppose).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They'll both work about the same way on SMT too, since in the end it'll
</span><br>
<span class="quotelev1">&gt; pick up only one thread. Whether you want to assign threads to cores or
</span><br>
<span class="quotelev1">&gt; threads then depends on your application: do you want to let its threads
</span><br>
<span class="quotelev1">&gt; share a core or not.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0339.php">Brice Goglin: "Re: [hwloc-users] Thread core affinity"</a>
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
