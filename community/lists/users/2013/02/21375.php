<?
$subject_val = "Re: [OMPI users] Simple MPI hello world hangs over IB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 13:50:32 2013" -->
<!-- isoreceived="20130211185032" -->
<!-- sent="Mon, 11 Feb 2013 18:50:28 +0000" -->
<!-- isosent="20130211185028" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple MPI hello world hangs over IB" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CF42AB_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130204155501.GV5904_at_vt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple MPI hello world hangs over IB<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 13:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Previous message:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2013, at 10:55 AM, Bharath Ramesh &lt;bramesh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to debug an issue which is really weird. I have
</span><br>
<span class="quotelev1">&gt; simple MPI hello world application (attached) that hangs when I
</span><br>
<span class="quotelev1">&gt; try to run on our cluster using 256 nodes with 16 cores on each
</span><br>
<span class="quotelev1">&gt; node. The cluster uses QDR IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to run the test over ethernet by excluding openib from
</span><br>
<span class="quotelev1">&gt; the btl. However, what is weird is that for the same set of nodes
</span><br>
<span class="quotelev1">&gt; xhpl completes without any error using 256 nodes and 16 cores. I
</span><br>
<span class="quotelev1">&gt; have tried running the Pallas MPI Benchmark and it also behaves
</span><br>
<span class="quotelev1">&gt; similarly to hello world and ends up hanging when I run it using
</span><br>
<span class="quotelev1">&gt; 256 nodes.
</span><br>
<p>Sorry for the delay; I was on travel all last week and fell behind.
<br>
<p>I'm not sure I can parse your scenario description.  Are you saying:
<br>
<p>- hello world over IB hangs at 256*16 procs
<br>
- hello world over TCP works at 256*16 procs
<br>
- xhpl over TCP works at 256*16 procs
<br>
- IMB over ?TCP|IB? hangs at 256*16 procs
<br>
<p><span class="quotelev1">&gt; When I attach gdb to the MPI processes and look at the backtrace
</span><br>
<span class="quotelev1">&gt; I see that close ~1000 of the MPI processes are stuck in MPI_Send
</span><br>
<span class="quotelev1">&gt; while the others are waiting in MPI_Finalize. I have checked to
</span><br>
<span class="quotelev1">&gt; make sure that the ulimit setting for locked memory is unlimited.
</span><br>
<span class="quotelev1">&gt; The number of open files per process is 131072. The default MPI
</span><br>
<span class="quotelev1">&gt; stack provided is openmpi-1.6.1 on the system. I compiled
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.3 in my home directory and the behavior remains to be
</span><br>
<span class="quotelev1">&gt; the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate any help in debugging this issue.
</span><br>
<p>Can you try the 1.6.4rc?  <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bharath
</span><br>
<span class="quotelev1">&gt; &lt;hello_world_mpi.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Previous message:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
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
