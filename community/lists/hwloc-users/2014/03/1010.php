<?
$subject_val = "Re: [hwloc-users] distributing across cores with hwloc-distrib";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 11:32:44 2014" -->
<!-- isoreceived="20140330153244" -->
<!-- sent="Sun, 30 Mar 2014 17:32:38 +0200" -->
<!-- isosent="20140330153238" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] distributing across cores with hwloc-distrib" -->
<!-- id="53383916.10604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140330150813.GA24754_at_brio.tcreech.com" -->
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
<strong>Date:</strong> 2014-03-30 11:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't worry, binding multithreaded processes is not a corner case. I was
<br>
rather talking about the general &quot;distributing less processes than there
<br>
are object and returning cpusets as large as possible&quot;.
<br>
<p>The attached patch should help. Please let me know.
<br>
<p>Brice
<br>
<p><p>Le 30/03/2014 17:08, Tim Creech a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;   First, my apologies if this email starts a new thread. For some reason I
</span><br>
<span class="quotelev1">&gt; never received your response through Mailman and can only see it through the
</span><br>
<span class="quotelev1">&gt; web archive interface. I'm constructing this reponse without things like
</span><br>
<span class="quotelev1">&gt; &quot;In-Reply-To&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your very helpful response. I'll use your explanation of the
</span><br>
<span class="quotelev1">&gt; algorithm and try to understand the implementation. I was indeed expecting
</span><br>
<span class="quotelev1">&gt; expecting hwloc-distrib to help me to bind multithreaded processes, although I
</span><br>
<span class="quotelev1">&gt; certainly can understand that this is considered a corner case. Could you
</span><br>
<span class="quotelev1">&gt; please consider fixing this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the main corner case of hwloc-distrib. It can return objects
</span><br>
<span class="quotelev2">&gt;&gt; only, not groups of objects. The distrib algorithms is:
</span><br>
<span class="quotelev2">&gt;&gt; 1) start at the root, where there are M children, and you have to
</span><br>
<span class="quotelev2">&gt;&gt; distribute N processes
</span><br>
<span class="quotelev2">&gt;&gt; 2) if there are no children, or if N is 1, return the entire object
</span><br>
<span class="quotelev2">&gt;&gt; 3) split N into Ni (N = sum of Ni) into M pieces based on each children
</span><br>
<span class="quotelev2">&gt;&gt; weight (the number of PUs under each)
</span><br>
<span class="quotelev2">&gt;&gt;    If N&gt;=M, all Ni can be &gt; 0, all children will get some process
</span><br>
<span class="quotelev2">&gt;&gt;    if N&lt;M, you can't split N into M integer pieces, some Ni will be 0,
</span><br>
<span class="quotelev2">&gt;&gt; these objects won't get any process
</span><br>
<span class="quotelev2">&gt;&gt; 4) go back to (2) recurse in each children object with Ni instead of N
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your case is step 3 with N=2 and M=4. It basically means that we
</span><br>
<span class="quotelev2">&gt;&gt; distribute across cores without &quot;assembling group of cores if needed&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In your case, when you bind to 2 cores of 4 PUs each, your task only
</span><br>
<span class="quotelev2">&gt;&gt; uses one PU in the end, 1 core and 3 PU are ignored as well. They *may*
</span><br>
<span class="quotelev2">&gt;&gt; be used, but the operating system scheduler is free to ignore them. So
</span><br>
<span class="quotelev2">&gt;&gt; binding to 2 cores or binding to 1 core or binding to 1 PU is almost
</span><br>
<span class="quotelev2">&gt;&gt; equivalent. At least the latter is included in the former. And most
</span><br>
<span class="quotelev2">&gt;&gt; people pass --single to get a single PU anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The case where it's not equivalent is when you bind multithreaded
</span><br>
<span class="quotelev2">&gt;&gt; processes. If you have 8 threads, it's better to use 2 cores than 1
</span><br>
<span class="quotelev2">&gt;&gt; single one. If this case matters to you, I will look into fixing this
</span><br>
<span class="quotelev2">&gt;&gt; corner case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 30/03/2014 07:56, Tim Creech a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I would like to use hwloc_distrib for a project, but I'm having some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trouble understanding how it distributes. Specifically, it seems to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avoid distributing multiple processes across cores, and I'm not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an example, consider the actual output of:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x0000000f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x000000f0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm expecting hwloc-distrib to tell me how to distribute 2 processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across the 16 PUs (4 cores by 4 PUs), but the answer only involves 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PUs, leaving the other 8 unused. If there were more cores on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine, then potentially the vast majority of them would be unused.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words, I might expect the output to use all of the PUs across
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores, for example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ hwloc-distrib -i &quot;4 4&quot; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x000000ff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x0000ff00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why does hwloc-distrib leave PUs unused? I'm using hwloc-1.9. Any help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in understanding where I'm going wrong is greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1010/distrib.patch">distrib.patch</a>
</ul>
<!-- attachment="distrib.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Previous message:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1009.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>Reply:</strong> <a href="1011.php">Tim Creech: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
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
