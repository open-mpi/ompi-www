<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 14:11:31 2015" -->
<!-- isoreceived="20150928181131" -->
<!-- sent="Mon, 28 Sep 2015 11:58:32 -0600" -->
<!-- isosent="20150928175832" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="20150928175832.GB2128_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyaJ1yU1O7apq6V7CHXTkFgPLyqKsAB-G8HSeBJvXq6zzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 13:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27724.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to add that you may want to play with the value and see
<br>
what works for your applications. Most applications should be using
<br>
malloc or similar functions to allocate large memory regions in the heap
<br>
and not on the stack.
<br>
<p>-Nathan
<br>
<p>On Mon, Sep 28, 2015 at 08:01:09PM +0300, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hello Grigory,
</span><br>
<span class="quotelev1">&gt;    We observed ~10% performance degradation with heap size set to unlimited
</span><br>
<span class="quotelev1">&gt;    for CFD applications.
</span><br>
<span class="quotelev1">&gt;    You can measure your application performance with default and unlimited
</span><br>
<span class="quotelev1">&gt;    &quot;limits&quot; and select the best setting.
</span><br>
<span class="quotelev1">&gt;    Kind Regards.
</span><br>
<span class="quotelev1">&gt;    M
</span><br>
<span class="quotelev1">&gt;    On Mon, Sep 28, 2015 at 7:36 PM, Grigory Shamov
</span><br>
<span class="quotelev1">&gt;    &lt;Grigory.Shamov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      We have built OpenMPI (1.8.8., 1.10.0) against Mellanox OFED 2.4 and
</span><br>
<span class="quotelev1">&gt;      corresponding MXM. When it runs now, it gives the following warning, per
</span><br>
<span class="quotelev1">&gt;      process:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [1443457390.911053] [myhist:5891 :0]         mxm.c:185  MXM  WARN  The
</span><br>
<span class="quotelev1">&gt;      'ulimit -s' on the system is set to 'unlimited'. This may have negative
</span><br>
<span class="quotelev1">&gt;      performance implications. Please set the heap size to the default value
</span><br>
<span class="quotelev1">&gt;      (10240)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      We have ulimits for heap (as well as most of the other limits) set
</span><br>
<span class="quotelev1">&gt;      unlimited because of applications that might possibly need a lot of RAM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The question is if we should do as MXM wants, or ignore it? Has anyone
</span><br>
<span class="quotelev1">&gt;      an
</span><br>
<span class="quotelev1">&gt;      experience running recent OpenMPI with MXM enabled, and what kind of
</span><br>
<span class="quotelev1">&gt;      ulimits do you have? Any suggestions/comments appreciated, thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Grigory Shamov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt;      University of Manitoba
</span><br>
<span class="quotelev1">&gt;      E2-588 EITC Building,
</span><br>
<span class="quotelev1">&gt;      (204) 474-9625
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/09/27697.php">http://www.open-mpi.org/community/lists/users/2015/09/27697.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Kind Regards,
</span><br>
<span class="quotelev1">&gt;    M.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27698.php">http://www.open-mpi.org/community/lists/users/2015/09/27698.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27700/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27699.php">Sven Schumacher: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27698.php">Mike Dubman: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27701.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27724.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
