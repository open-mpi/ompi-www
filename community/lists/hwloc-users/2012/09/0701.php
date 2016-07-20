<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 06:19:51 2012" -->
<!-- isoreceived="20120906101951" -->
<!-- sent="Thu, 6 Sep 2012 12:19:46 +0200" -->
<!-- isosent="20120906101946" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUX1yAZwMr54pqVh_fzDBk=N71wLG1LJ-2LA1cAn-RNWrg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="504866BE.5030901_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-06 06:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did't find any strange number in /proc/meminfo.
<br>
<p>I've noted that the program fails exactly
<br>
every 65479 hwloc_set_area_membind. So It sounds like some kernel limit.
<br>
You can check that also just one thread.
<br>
<p>Maybe never has not noted them  because usually we bind a large amount of
<br>
contiguos memory few times, instead of small and non contiguos pieces of
<br>
memory many and many times.. :(
<br>
<p>2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Le 06/09/2012 10:44, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Error from HWLOC mbind: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt; &gt; Ok. mbind is not really supposed to allocate much memory, but it still
</span><br>
<span class="quotelev2">&gt; &gt; does allocate some, to record the policy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; //        hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_PU,
</span><br>
<span class="quotelev1">&gt; tid);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; //           res = hwloc_set_area_membind_nodeset(topology, &amp;array[i],
</span><br>
<span class="quotelev1">&gt; PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              res = hwloc_set_area_membind(topology, &amp;array[i],
</span><br>
<span class="quotelev1">&gt; PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev2">&gt; &gt; and I'm afraid that calling set_area_membind for each page might be too
</span><br>
<span class="quotelev2">&gt; &gt; dense: the kernel is probably allocating a memory policy record for each
</span><br>
<span class="quotelev2">&gt; &gt; page, not being able to merge adjacent equal policies.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's supposed to merge VMA with same policies (from what I understand in
</span><br>
<span class="quotelev1">&gt; the code), but I don't know if that actually works.
</span><br>
<span class="quotelev1">&gt; Maybe Gabriele found a kernel bug :)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
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
