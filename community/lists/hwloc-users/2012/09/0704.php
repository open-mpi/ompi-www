<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 12:54:34 2012" -->
<!-- isoreceived="20120906165434" -->
<!-- sent="Thu, 06 Sep 2012 18:54:27 +0200" -->
<!-- isosent="20120906165427" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="5048D543.8070404_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUWwDoDUDRNkmmY1N57SmXtm=XeMffZCgRfup4kGwr5miQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-06 12:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2012 14:51, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the initial grep is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; numa_policy        65671  65952     24  144    1 : tunables  120   60
</span><br>
<span class="quotelev1">&gt;    8 : slabdata    458    458      0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When set_membind fails is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; numa_policy          482   1152     24  144    1 : tunables  120   60
</span><br>
<span class="quotelev1">&gt;    8 : slabdata      8      8    288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does it means?
</span><br>
<p>The first number is the number of active objects. That means 65000
<br>
mempolicy objects were in use on the first line.
<br>
(I wonder if you swapped the lines, I expected higher numbers at the end
<br>
of the run)
<br>
<p>Anyway, having 65000 mempolicies in use is a lot. And that would somehow
<br>
correspond to the number of set_area_membind that succeeed before one
<br>
fails. So the kernel might indeed fail to merge those.
<br>
<p>That said, these objects are small (24bytes here if I am reading things
<br>
correctly), so we're talking about 1,6MB only here. So there's still
<br>
something else eating all the memory. /proc/meminfo (MemFree) and
<br>
numactl -H should again help.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 06/09/2012 12:19, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     I did't find any strange number in /proc/meminfo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I've noted that the program fails exactly
</span><br>
<span class="quotelev2">&gt;&gt;     every 65479 hwloc_set_area_membind. So It sounds like some kernel
</span><br>
<span class="quotelev2">&gt;&gt;     limit. You can check that also just one thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Maybe never has not noted them  because usually we bind a large
</span><br>
<span class="quotelev2">&gt;&gt;     amount of contiguos memory few times, instead of small and non
</span><br>
<span class="quotelev2">&gt;&gt;     contiguos pieces of memory many and many times.. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you have root access, try (as root)
</span><br>
<span class="quotelev1">&gt;         watch -n 1 grep numa_policy /proc/slabinfo
</span><br>
<span class="quotelev1">&gt;     Put a sleep(10) in your program when set_area_membind() fails, and
</span><br>
<span class="quotelev1">&gt;     don't let your program exit before you can read the content of
</span><br>
<span class="quotelev1">&gt;     /proc/slabinfo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 06/09/2012 10:44, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Error from HWLOC mbind: Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Ok. mbind is not really supposed to allocate much memory,
</span><br>
<span class="quotelev2">&gt;&gt;         but it still
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; does allocate some, to record the policy
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; //        hwloc_obj_t obj =
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev2">&gt;&gt;         HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;         hwloc_set_cpubind(topology, cpuset,
</span><br>
<span class="quotelev2">&gt;&gt;         HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; //           res =
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc_set_area_membind_nodeset(topology, &amp;array[i],
</span><br>
<span class="quotelev2">&gt;&gt;         PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev2">&gt;&gt;         HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;              res = hwloc_set_area_membind(topology,
</span><br>
<span class="quotelev2">&gt;&gt;         &amp;array[i], PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev2">&gt;&gt;         HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; and I'm afraid that calling set_area_membind for each page
</span><br>
<span class="quotelev2">&gt;&gt;         might be too
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; dense: the kernel is probably allocating a memory policy
</span><br>
<span class="quotelev2">&gt;&gt;         record for each
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; page, not being able to merge adjacent equal policies.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         It's supposed to merge VMA with same policies (from what I
</span><br>
<span class="quotelev2">&gt;&gt;         understand in
</span><br>
<span class="quotelev2">&gt;&gt;         the code), but I don't know if that actually works.
</span><br>
<span class="quotelev2">&gt;&gt;         Maybe Gabriele found a kernel bug :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     HPC specialist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:  
</span><br>
<span class="quotelev2">&gt;&gt;     +39 051 6171722 &lt;tel:%2B39%20051%206171722&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0703.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
