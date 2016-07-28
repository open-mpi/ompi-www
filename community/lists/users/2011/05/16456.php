<?
$subject_val = "Re: [OMPI users] SpMV Benchmarks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 05:38:45 2011" -->
<!-- isoreceived="20110506093845" -->
<!-- sent="Fri, 6 May 2011 11:38:39 +0200" -->
<!-- isosent="20110506093839" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SpMV Benchmarks" -->
<!-- id="BANLkTinKQ-C8XsPS=wZcYP7ExLq3d369aA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2FB2EDFF-39E6-4036-AB2B-9711B9322C41_at_parsci.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SpMV Benchmarks<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 05:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>Reply:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 5, 2011 at 23:15, Paul Monday (Parallel Scientific) &lt;
<br>
paul.monday_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm hoping someone can help me locate a SpMV benchmark that runs w/
</span><br>
<span class="quotelev1">&gt; Open MPI so I can benchmark how my systems are interacting with the network
</span><br>
<span class="quotelev1">&gt; as I add nodes / cores to the pool of systems.  I can find SpMV benchmarks
</span><br>
<span class="quotelev1">&gt; for single processor / OpenMP all over, but these networked ones are proving
</span><br>
<span class="quotelev1">&gt; harder to come by.  I located Lis (<a href="http://www.ssisc.org/lis/">http://www.ssisc.org/lis/</a>) but it seems
</span><br>
<span class="quotelev1">&gt; more of a solver then a benchmarking program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I would suggest using PETSc. It is a solvers library rather than a contrived
<br>
benchmark suite, but the examples give you access to many different matrices
<br>
and you can use many different formats without changing the code. If you run
<br>
with -log_summary, you will get a useful table showing the performance of
<br>
different operations (time/balance/communication/reductions/flops/etc). Also
<br>
note that SpMV is usually not an end in its own right, usually it is part of
<br>
a preconditioned Krylov iteration, so the performance of all the pieces
<br>
matter.
<br>
<p>If you are concerned with absolute performance then you should consider
<br>
using petsc-dev since it tends to have better memory performance due to
<br>
software prefetch. This is important for good reuse of high-level caches
<br>
since otherwise the matrix entries flush out the useful stuff. It usually
<br>
makes between a 20 and 30% improvement, a bit more for some symmetric and
<br>
triangular kernels. Many of the sparse matrix kernels did not have software
<br>
prefetch as of the 3.1 release. Remember:
<br>
<p>&quot;The easiest way to make software scalable is to make it sequentially
<br>
inefficient.&quot; (Gropp, 1999)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16457.php">hi: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>Reply:</strong> <a href="16460.php">Paul Monday (Parallel Scientific): "Re: [OMPI users] SpMV Benchmarks"</a>
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
