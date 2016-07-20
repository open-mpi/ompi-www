<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 08:16:49 2012" -->
<!-- isoreceived="20120906121649" -->
<!-- sent="Thu, 06 Sep 2012 14:16:42 +0200" -->
<!-- isosent="20120906121642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="5048942A.5010402_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUX1yAZwMr54pqVh_fzDBk=N71wLG1LJ-2LA1cAn-RNWrg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 08:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2012 12:19, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; I did't find any strange number in /proc/meminfo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noted that the program fails exactly
</span><br>
<span class="quotelev1">&gt; every 65479 hwloc_set_area_membind. So It sounds like some kernel
</span><br>
<span class="quotelev1">&gt; limit. You can check that also just one thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe never has not noted them  because usually we bind a large amount
</span><br>
<span class="quotelev1">&gt; of contiguos memory few times, instead of small and non contiguos
</span><br>
<span class="quotelev1">&gt; pieces of memory many and many times.. :(
</span><br>
<p>If you have root access, try (as root)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;watch -n 1 grep numa_policy /proc/slabinfo
<br>
Put a sleep(10) in your program when set_area_membind() fails, and don't
<br>
let your program exit before you can read the content of /proc/slabinfo.
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 06/09/2012 10:44, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Error from HWLOC mbind: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;     &gt; Ok. mbind is not really supposed to allocate much memory, but it
</span><br>
<span class="quotelev1">&gt;     still
</span><br>
<span class="quotelev2">&gt;     &gt; does allocate some, to record the policy
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; //        hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev1">&gt;     HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; //           res = hwloc_set_area_membind_nodeset(topology,
</span><br>
<span class="quotelev1">&gt;     &amp;array[i], PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev1">&gt;     HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;              res = hwloc_set_area_membind(topology, &amp;array[i],
</span><br>
<span class="quotelev1">&gt;     PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev2">&gt;     &gt; and I'm afraid that calling set_area_membind for each page might
</span><br>
<span class="quotelev1">&gt;     be too
</span><br>
<span class="quotelev2">&gt;     &gt; dense: the kernel is probably allocating a memory policy record
</span><br>
<span class="quotelev1">&gt;     for each
</span><br>
<span class="quotelev2">&gt;     &gt; page, not being able to merge adjacent equal policies.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's supposed to merge VMA with same policies (from what I
</span><br>
<span class="quotelev1">&gt;     understand in
</span><br>
<span class="quotelev1">&gt;     the code), but I don't know if that actually works.
</span><br>
<span class="quotelev1">&gt;     Maybe Gabriele found a kernel bug :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0701.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
