<?
$subject_val = "Re: [OMPI users] shared memory (sm) module not working properly?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 17:48:44 2010" -->
<!-- isoreceived="20100115224844" -->
<!-- sent="Fri, 15 Jan 2010 15:48:18 -0700" -->
<!-- isosent="20100115224818" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory (sm) module not working properly?" -->
<!-- id="dcf611bd1001151448q8a48e5ctcea9fa30f2641911_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="dcf611bd1001151447t4ecfeeccgb460fb6f68de8ab9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory (sm) module not working properly?<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 17:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I forgot to give more details on what versions I am using:
<br>
<p>OpenMPI 1.4
<br>
Ubuntu 9.10, kernel 2.6.31-16-generic #53-Ubuntu
<br>
gcc (Ubuntu 4.4.1-4ubuntu8) 4.4.1
<br>
<p><p><p>On Fri, Jan 15, 2010 at 15:47, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running a job on a 4 quadcore AMD Opteron. This machine has 16 cores,
</span><br>
<span class="quotelev1">&gt; which I can verify by looking at /proc/cpuinfo. However, when I run a job
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 -mca btl self,sm job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[56972,2],0]) is on host: rust
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[56972,1],0]) is on host: rust
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By adding the tcp btl I can run the job. I don't understand why openmpi
</span><br>
<span class="quotelev1">&gt; claims that a pair of processes can not reach each other, all processor
</span><br>
<span class="quotelev1">&gt; cores should have access to all memory after all. Do I need to set some
</span><br>
<span class="quotelev1">&gt; other btl limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
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
