<?
$subject_val = "Re: [hwloc-users] distributing across cores with hwloc-distrib";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 03:29:11 2014" -->
<!-- isoreceived="20140330072911" -->
<!-- sent="Sun, 30 Mar 2014 09:28:58 +0200" -->
<!-- isosent="20140330072858" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] distributing across cores with hwloc-distrib" -->
<!-- id="5337C7BA.90908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140330055638.GA40152_at_brio.tcreech.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] distributing across cores with hwloc-distrib<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 03:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>This is the main corner case of hwloc-distrib. It can return objects
<br>
only, not groups of objects. The distrib algorithms is:
<br>
1) start at the root, where there are M children, and you have to
<br>
distribute N processes
<br>
2) if there are no children, or if N is 1, return the entire object
<br>
3) split N into Ni (N = sum of Ni) into M pieces based on each children
<br>
weight (the number of PUs under each)
<br>
&nbsp;&nbsp;&nbsp;If N&gt;=M, all Ni can be &gt; 0, all children will get some process
<br>
&nbsp;&nbsp;&nbsp;if N&lt;M, you can't split N into M integer pieces, some Ni will be 0,
<br>
these objects won't get any process
<br>
4) go back to (2) recurse in each children object with Ni instead of N
<br>
<p>Your case is step 3 with N=2 and M=4. It basically means that we
<br>
distribute across cores without &quot;assembling group of cores if needed&quot;.
<br>
<p>In your case, when you bind to 2 cores of 4 PUs each, your task only
<br>
uses one PU in the end, 1 core and 3 PU are ignored as well. They *may*
<br>
be used, but the operating system scheduler is free to ignore them. So
<br>
binding to 2 cores or binding to 1 core or binding to 1 PU is almost
<br>
equivalent. At least the latter is included in the former. And most
<br>
people pass --single to get a single PU anyway.
<br>
<p>The case where it's not equivalent is when you bind multithreaded
<br>
processes. If you have 8 threads, it's better to use 2 cores than 1
<br>
single one. If this case matters to you, I will look into fixing this
<br>
corner case.
<br>
<p>Brice
<br>
<p><p><p><p>Le 30/03/2014 07:56, Tim Creech a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;   I would like to use hwloc_distrib for a project, but I'm having some
</span><br>
<span class="quotelev1">&gt; trouble understanding how it distributes. Specifically, it seems to
</span><br>
<span class="quotelev1">&gt; avoid distributing multiple processes across cores, and I'm not sure
</span><br>
<span class="quotelev1">&gt; why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an example, consider the actual output of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev1">&gt; 0x0000000f
</span><br>
<span class="quotelev1">&gt; 0x000000f0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm expecting hwloc-distrib to tell me how to distribute 2 processes
</span><br>
<span class="quotelev1">&gt; across the 16 PUs (4 cores by 4 PUs), but the answer only involves 8
</span><br>
<span class="quotelev1">&gt; PUs, leaving the other 8 unused. If there were more cores on the
</span><br>
<span class="quotelev1">&gt; machine, then potentially the vast majority of them would be unused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, I might expect the output to use all of the PUs across
</span><br>
<span class="quotelev1">&gt; cores, for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev1">&gt; 0x000000ff
</span><br>
<span class="quotelev1">&gt; 0x0000ff00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does hwloc-distrib leave PUs unused? I'm using hwloc-1.9. Any help
</span><br>
<span class="quotelev1">&gt; in understanding where I'm going wrong is greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1007.php">Tim Creech: "[hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
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
