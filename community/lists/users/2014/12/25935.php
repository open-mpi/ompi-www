<?
$subject_val = "Re: [OMPI users] open mpi and MLX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 10:24:51 2014" -->
<!-- isoreceived="20141209152451" -->
<!-- sent="Tue, 9 Dec 2014 07:24:48 -0800" -->
<!-- isosent="20141209152448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi and MLX" -->
<!-- id="30BD0A49-CC70-4471-8FA3-0EF18B9AD97C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9119B351DC3E914DB262CE51CCDF87CA095F049D_at_CRSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi and MLX<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 10:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<li><strong>In reply to:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daniel
<br>
<p>Yeah, this is a known problem traced to updating ofed to 3.12 - see this thread:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Dec 9, 2014, at 7:16 AM, Faraj, Daniel A &lt;daniel.a.faraj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a trouble running simple benchmarks like osu bidirectional bandwidth tests with recent OMPI (&gt; version 1.8.1)over MLX. &lt;&gt;
</span><br>
<span class="quotelev1">&gt; All versions including 1.8.1 seem to work.
</span><br>
<span class="quotelev1">&gt; The issue is that FDR will hang frequently and will complain about physical memory available for user run is very low.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The bug starts in v1.8.2.
</span><br>
<span class="quotelev1">&gt; I searched the src code for differences, but no luck.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I get the message below and hangs&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:              sb-cn16
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     24576 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            65457 MiB
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Daniel Faraj
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25934.php">http://www.open-mpi.org/community/lists/users/2014/12/25934.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/12/25934.php">http://www.open-mpi.org/community/lists/users/2014/12/25934.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25936.php">Eric Chamberland: "[OMPI users] Oversubscribing in 1.8.3 vs 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<li><strong>In reply to:</strong> <a href="25934.php">Faraj, Daniel A: "[OMPI users] open mpi and MLX"</a>
<!-- nextthread="start" -->
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
