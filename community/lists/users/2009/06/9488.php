<?
$subject_val = "Re: [OMPI users] Performance testing software?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:28:02 2009" -->
<!-- isoreceived="20090601192802" -->
<!-- sent="Mon, 01 Jun 2009 12:27:48 -0700" -->
<!-- isosent="20090601192748" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance testing software?" -->
<!-- id="4A242BB4.4090902_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A22DEC2.1040901_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance testing software?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 15:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HPL can &quot;stress test&quot; the MPI, but it is typically relatively 
<br>
insensitive to MPI performance.  The usual use produces a measure of the 
<br>
peak floating-point performance of the system.
<br>
<p>A broader set of system performance measurements are found in the HPCC 
<br>
(HPC Challenge) tests, which include HPL.  Many of these tests, however, 
<br>
still don't really focus on MPI performance.
<br>
<p>Tests that focus on MPI performance include the OSU tests.  
<br>
<a href="http://mvapich.cse.ohio-state.edu/benchmarks/">http://mvapich.cse.ohio-state.edu/benchmarks/</a>  There are also Intel MPI 
<br>
Benchmarks (formerly Pallas).
<br>
<p>The NAS Parallel Benchmarks offer more &quot;application-level&quot; tests.
<br>
<p>Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; The famous one is HPL, the Top500 benchmark:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/benchmark/hpl/">http://www.netlib.org/benchmark/hpl/</a>
</span><br>
<span class="quotelev1">&gt; It takes some effort to configure and run it. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtcreekmore_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am wondering if there is some stress testing software for OpenMPI I 
</span><br>
<span class="quotelev2">&gt;&gt; can use to run on a cluster to give me an idea of the performance 
</span><br>
<span class="quotelev2">&gt;&gt; level of the system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>Previous message:</strong> <a href="9487.php">Jeff Squyres: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
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
