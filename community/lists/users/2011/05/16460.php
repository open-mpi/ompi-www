<?
$subject_val = "Re: [OMPI users] SpMV Benchmarks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 11:42:18 2011" -->
<!-- isoreceived="20110506154218" -->
<!-- sent="Fri, 06 May 2011 09:42:11 -0600" -->
<!-- isosent="20110506154211" -->
<!-- name="Paul Monday (Parallel Scientific)" -->
<!-- email="paul.monday_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SpMV Benchmarks" -->
<!-- id="4DC416D3.7000204_at_parsci.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BANLkTinKQ-C8XsPS=wZcYP7ExLq3d369aA_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Monday (Parallel Scientific) (<em>paul.monday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 11:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16456.php">Jed Brown: "Re: [OMPI users] SpMV Benchmarks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jed, sounds like the log_summary should be sufficient for my 
<br>
needs!
<br>
<p>I appreciate your help :)
<br>
<p>Have a great weekend!
<br>
<p>Paul Monday
<br>
<p>On 5/6/11 3:38 AM, Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Thu, May 5, 2011 at 23:15, Paul Monday (Parallel Scientific) 
</span><br>
<span class="quotelev1">&gt; &lt;paul.monday_at_[hidden] &lt;mailto:paul.monday_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi, I'm hoping someone can help me locate a SpMV benchmark that
</span><br>
<span class="quotelev1">&gt;     runs w/ Open MPI so I can benchmark how my systems are interacting
</span><br>
<span class="quotelev1">&gt;     with the network as I add nodes / cores to the pool of systems.  I
</span><br>
<span class="quotelev1">&gt;     can find SpMV benchmarks for single processor / OpenMP all over,
</span><br>
<span class="quotelev1">&gt;     but these networked ones are proving harder to come by.  I located
</span><br>
<span class="quotelev1">&gt;     Lis (<a href="http://www.ssisc.org/lis/">http://www.ssisc.org/lis/</a>) but it seems more of a solver then
</span><br>
<span class="quotelev1">&gt;     a benchmarking program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would suggest using PETSc. It is a solvers library rather than a 
</span><br>
<span class="quotelev1">&gt; contrived benchmark suite, but the examples give you access to many 
</span><br>
<span class="quotelev1">&gt; different matrices and you can use many different formats without 
</span><br>
<span class="quotelev1">&gt; changing the code. If you run with -log_summary, you will get a useful 
</span><br>
<span class="quotelev1">&gt; table showing the performance of different operations 
</span><br>
<span class="quotelev1">&gt; (time/balance/communication/reductions/flops/etc). Also note that SpMV 
</span><br>
<span class="quotelev1">&gt; is usually not an end in its own right, usually it is part of a 
</span><br>
<span class="quotelev1">&gt; preconditioned Krylov iteration, so the performance of all the pieces 
</span><br>
<span class="quotelev1">&gt; matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are concerned with absolute performance then you should 
</span><br>
<span class="quotelev1">&gt; consider using petsc-dev since it tends to have better memory 
</span><br>
<span class="quotelev1">&gt; performance due to software prefetch. This is important for good reuse 
</span><br>
<span class="quotelev1">&gt; of high-level caches since otherwise the matrix entries flush out the 
</span><br>
<span class="quotelev1">&gt; useful stuff. It usually makes between a 20 and 30% improvement, a bit 
</span><br>
<span class="quotelev1">&gt; more for some symmetric and triangular kernels. Many of the sparse 
</span><br>
<span class="quotelev1">&gt; matrix kernels did not have software prefetch as of the 3.1 release. 
</span><br>
<span class="quotelev1">&gt; Remember:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The easiest way to make software scalable is to make it sequentially 
</span><br>
<span class="quotelev1">&gt; inefficient.&quot; (Gropp, 1999)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16461.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16459.php">Tim Prince: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16456.php">Jed Brown: "Re: [OMPI users] SpMV Benchmarks"</a>
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
