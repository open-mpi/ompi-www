<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 09:44:58 2012" -->
<!-- isoreceived="20120905134458" -->
<!-- sent="Wed, 5 Sep 2012 15:44:53 +0200" -->
<!-- isosent="20120905134453" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUWoHXe+cqkoakoRgwCkU1ghAfWm0CtXoNYML+c1hK1qOA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50474E62.2040200_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-05 09:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've noted that hwloc_set_area_membind_nodeset return -1 but errno is not
<br>
equal to EXDEV or ENOSYS. I supposed that these two case was the two unique
<br>
possibly.
<br>
<p><span class="quotelev1">&gt;From the hwloc documentation:
</span><br>
<p>-1 with errno set to ENOSYS if the action is not supported
<br>
-1 with errno set to EXDEV if the binding cannot be enforced
<br>
<p><p>Any other binding failure reason? The memory available is enought.
<br>
<p>2012/9/5 Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Hello Gabriele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only limit that I would think of is the available physical memory on
</span><br>
<span class="quotelev1">&gt; each NUMA node (numactl -H will tell you how much of each NUMA node memory
</span><br>
<span class="quotelev1">&gt; is still available).
</span><br>
<span class="quotelev1">&gt; malloc usually only fails (it returns NULL?) when there no *virtual*
</span><br>
<span class="quotelev1">&gt; memory anymore, that's different. If you don't allocate tons of terabytes
</span><br>
<span class="quotelev1">&gt; of virtual memory, this shouldn't happen easily.
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
<span class="quotelev1">&gt; Le 05/09/2012 14:27, Gabriele Fatigati a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Hwloc users and developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm using hwloc 1.4.1 on a multithreaded program in a Linux platform,
</span><br>
<span class="quotelev1">&gt; where each thread bind many non contiguos pieces of a big matrix using in a
</span><br>
<span class="quotelev1">&gt; very intensive way hwloc_set_area_membind_nodeset function:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc_set_area_membind_nodeset(topology, punt+offset, len, nodeset,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Binding seems works well, since the returned code from function is 0 for
</span><br>
<span class="quotelev1">&gt; every calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The problems is that after binding, a simple little new malloc fails,
</span><br>
<span class="quotelev1">&gt; without any apparent reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Disabling memory binding, the allocations works well.  Is there any
</span><br>
<span class="quotelev1">&gt; knows problem if  hwloc_set_area_membind_nodeset is used intensively?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there some operating system limit for memory pages binding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks in advance.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0683/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0682.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0684.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0685.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
