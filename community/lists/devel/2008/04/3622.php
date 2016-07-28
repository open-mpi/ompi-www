<?
$subject_val = "Re: [OMPI devel] Ssh tunnelling broken in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 11:59:20 2008" -->
<!-- isoreceived="20080402155920" -->
<!-- sent="Wed, 2 Apr 2008 10:59:14 -0500" -->
<!-- isosent="20080402155914" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ssh tunnelling broken in trunk?" -->
<!-- id="200804021059.14095.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200804021022.52417.jon_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ssh tunnelling broken in trunk?<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 11:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3623.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I regressed my tree and it looks like it happened between 17590:17917
<br>
<p>On Wednesday 02 April 2008 10:22:52 am Jon Mason wrote:
<br>
<span class="quotelev1">&gt; I am noticing that ssh seems to be broken on trunk (and my cpc branch, as
</span><br>
<span class="quotelev1">&gt; it is based on trunk).  When I try to use xterm and gdb to debug, I only
</span><br>
<span class="quotelev1">&gt; successfully get 1 xterm.  I have tried this on 2 different setups.  I can
</span><br>
<span class="quotelev1">&gt; successfully get the xterm's on the 1.2 svn branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running the following command:
</span><br>
<span class="quotelev1">&gt; mpirun --n 2 --host vic12,vic20 -mca btl tcp,self -d xterm -e
</span><br>
<span class="quotelev1">&gt; gdb /usr/mpi/gcc/openmpi-1.2-svn/tests/IMB-3.0/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone else seeing this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3623.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>In reply to:</strong> <a href="3621.php">Jon Mason: "[OMPI devel] Ssh tunnelling broken in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
<li><strong>Reply:</strong> <a href="3624.php">Jeff Squyres: "Re: [OMPI devel] Ssh tunnelling broken in trunk?"</a>
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
