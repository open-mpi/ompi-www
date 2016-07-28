<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 03:43:26 2012" -->
<!-- isoreceived="20120907074326" -->
<!-- sent="Fri, 7 Sep 2012 09:43:20 +0200" -->
<!-- isosent="20120907074320" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUXrfsgaTUkrLOtYCvZ_F1Z0gv2wwCe+XYyn2BdqUM7rCQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5048D543.8070404_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-07 03:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Good,  you found the kernel limit that exceed.
<br>
<p>proc/memfinfo reports as MemFree     47834588 kB
<br>
<p>numactl -H:
<br>
<p>available: 2 nodes (0-1)
<br>
node 0 size: 24194 MB
<br>
node 0 free: 22702 MB
<br>
node 1 size: 24240 MB
<br>
node 1 free: 23997 MB
<br>
node distances:
<br>
node   0   1
<br>
&nbsp;&nbsp;0:  10  21
<br>
&nbsp;&nbsp;1:  21  10
<br>
<p><p><p>Are you able to reproduce the error using my attached code?
<br>
<p>Another question. I'm trying the same code in another system, but hwloc
<br>
gives: &quot;Function not implemented&quot;.
<br>
<p>Maybe because there isn't installed numa-devel package? Numa non devel
<br>
package il alreay installed.
<br>
<p>Thanks.
<br>
<p><p><p>2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Le 06/09/2012 14:51, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  the initial grep is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  numa_policy        65671  65952     24  144    1 : tunables  120   60
</span><br>
<span class="quotelev1">&gt;  8 : slabdata    458    458      0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When set_membind fails is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  numa_policy          482   1152     24  144    1 : tunables  120   60
</span><br>
<span class="quotelev1">&gt;  8 : slabdata      8      8    288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What does it means?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first number is the number of active objects. That means 65000
</span><br>
<span class="quotelev1">&gt; mempolicy objects were in use on the first line.
</span><br>
<span class="quotelev1">&gt; (I wonder if you swapped the lines, I expected higher numbers at the end
</span><br>
<span class="quotelev1">&gt; of the run)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, having 65000 mempolicies in use is a lot. And that would somehow
</span><br>
<span class="quotelev1">&gt; correspond to the number of set_area_membind that succeeed before one
</span><br>
<span class="quotelev1">&gt; fails. So the kernel might indeed fail to merge those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, these objects are small (24bytes here if I am reading things
</span><br>
<span class="quotelev1">&gt; correctly), so we're talking about 1,6MB only here. So there's still
</span><br>
<span class="quotelev1">&gt; something else eating all the memory. /proc/meminfo (MemFree) and numactl
</span><br>
<span class="quotelev1">&gt; -H should again help.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Le 06/09/2012 12:19, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did't find any strange number in /proc/meminfo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've noted that the program fails exactly
</span><br>
<span class="quotelev2">&gt;&gt; every 65479 hwloc_set_area_membind. So It sounds like some kernel limit.
</span><br>
<span class="quotelev2">&gt;&gt; You can check that also just one thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Maybe never has not noted them  because usually we bind a large amount
</span><br>
<span class="quotelev2">&gt;&gt; of contiguos memory few times, instead of small and non contiguos pieces of
</span><br>
<span class="quotelev2">&gt;&gt; memory many and many times.. :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If you have root access, try (as root)
</span><br>
<span class="quotelev2">&gt;&gt;     watch -n 1 grep numa_policy /proc/slabinfo
</span><br>
<span class="quotelev2">&gt;&gt; Put a sleep(10) in your program when set_area_membind() fails, and don't
</span><br>
<span class="quotelev2">&gt;&gt; let your program exit before you can read the content of /proc/slabinfo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  2012/9/6 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 06/09/2012 10:44, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Gabriele Fatigati, le Thu 06 Sep 2012 10:12:38 +0200, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mbind hwloc_linux_set_area_membind()  fails:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Error from HWLOC mbind: Cannot allocate memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ok. mbind is not really supposed to allocate much memory, but it still
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; does allocate some, to record the policy
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; //        hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_OBJ_NODE, tid);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         hwloc_obj_t obj = hwloc_get_obj_by_type(topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_OBJ_PU, tid);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         hwloc_cpuset_t cpuset = hwloc_bitmap_dup(obj-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         hwloc_bitmap_singlify(cpuset);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         hwloc_set_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         for( i = chunk*tid; i &lt; len; i+=PAGE_SIZE) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; //           res = hwloc_set_area_membind_nodeset(topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;array[i], PAGE_SIZE, obj-&gt;nodeset, HWLOC_MEMBIND_BIND,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;              res = hwloc_set_area_membind(topology, &amp;array[i],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PAGE_SIZE, cpuset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and I'm afraid that calling set_area_membind for each page might be too
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; dense: the kernel is probably allocating a memory policy record for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; page, not being able to merge adjacent equal policies.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It's supposed to merge VMA with same policies (from what I understand in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the code), but I don't know if that actually works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe Gabriele found a kernel bug :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0704.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0706.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
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
