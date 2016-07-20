<?
$subject_val = "Re: [hwloc-users] Multiple thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 11:21:57 2011" -->
<!-- isoreceived="20110802152157" -->
<!-- sent="Tue, 2 Aug 2011 17:21:52 +0200" -->
<!-- isosent="20110802152152" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Multiple thread binding" -->
<!-- id="CAJNPZUWv0PC+HMufsBpffspVkZgA99rJzymW7A0aKBQvsNvkNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUUcH9+W_W63etSngjfEGtsb=_6Qo-J+tpAch4KR3pezYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Multiple thread binding<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 11:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok,
<br>
<p>and in this way are equivalent?
<br>
<p>#pragma omp parallel num_threads(1)
<br>
{
<br>
hwloc_obj_t core = hwloc_get_obj_by_type(*topology, HWLOC_OBJ_PU, 0);
<br>
hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
<br>
hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD |
<br>
HWLOC_CPUBIND_STRICT);
<br>
hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD |
<br>
HWLOC_CPUBIND_NOMEMBIND);
<br>
}
<br>
<p>2011/8/2 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Mm, i'm not sure. Suppose this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $pragma omp parallel num_thread(1)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD |
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_STRICT |   HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is equivalent to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $pragma omp parallel num_thread(1)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_STRICT);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You said HWLOC_CPUBIND_STRICT bind process and memory. Why also the memory?
</span><br>
<span class="quotelev1">&gt; It should strictly design which CPU will assigned to a process/thread, or
</span><br>
<span class="quotelev1">&gt; does more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/8/2 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gabriele Fatigati, le Tue 02 Aug 2011 16:23:12 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD |
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_CPUBIND_STRICT
</span><br>
<span class="quotelev3">&gt;&gt; &gt; |   HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; is it possible do multiple call to hwloc_set_cpubind passing each flag
</span><br>
<span class="quotelev2">&gt;&gt; per
</span><br>
<span class="quotelev3">&gt;&gt; &gt; time?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_STRICT);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; or only the last have effect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Err, it will simply do the three operations, i.e. first bind the current
</span><br>
<span class="quotelev2">&gt;&gt; thread and memory, then strictly bind the whole process and memory, and
</span><br>
<span class="quotelev2">&gt;&gt; eventually bind the process but not memory (but it will still bound
</span><br>
<span class="quotelev2">&gt;&gt; since it was by the second call).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>In reply to:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
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
