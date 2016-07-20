<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 09:06:48 2012" -->
<!-- isoreceived="20120905130648" -->
<!-- sent="Wed, 05 Sep 2012 15:06:42 +0200" -->
<!-- isosent="20120905130642" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="50474E62.2040200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUWXUc+zOtp9TaxQZYHLK2o79K4AG7XS1ohQw=fCGPCMHg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-05 09:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0681.php">Gabriele Fatigati: "[hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0681.php">Gabriele Fatigati: "[hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gabriele,
<br>
<p>The only limit that I would think of is the available physical memory on
<br>
each NUMA node (numactl -H will tell you how much of each NUMA node
<br>
memory is still available).
<br>
malloc usually only fails (it returns NULL?) when there no *virtual*
<br>
memory anymore, that's different. If you don't allocate tons of
<br>
terabytes of virtual memory, this shouldn't happen easily.
<br>
<p>Brice
<br>
<p><p><p><p>Le 05/09/2012 14:27, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear Hwloc users and developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using hwloc 1.4.1 on a multithreaded program in a Linux platform,
</span><br>
<span class="quotelev1">&gt; where each thread bind many non contiguos pieces of a big matrix using
</span><br>
<span class="quotelev1">&gt; in a very intensive way hwloc_set_area_membind_nodeset function:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, punt+offset, len, nodeset,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_MIGRATE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Binding seems works well, since the returned code from function is 0
</span><br>
<span class="quotelev1">&gt; for every calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problems is that after binding, a simple little new malloc fails,
</span><br>
<span class="quotelev1">&gt; without any apparent reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disabling memory binding, the allocations works well.  Is there any
</span><br>
<span class="quotelev1">&gt; knows problem if  hwloc_set_area_membind_nodeset is used intensively?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some operating system limit for memory pages binding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0681.php">Gabriele Fatigati: "[hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0681.php">Gabriele Fatigati: "[hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0683.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
