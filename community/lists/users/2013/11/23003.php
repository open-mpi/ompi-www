<?
$subject_val = "Re: [OMPI users] calling a parallel solver from sequential code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 11:20:22 2013" -->
<!-- isoreceived="20131118162022" -->
<!-- sent="Mon, 18 Nov 2013 09:20:17 -0700" -->
<!-- isosent="20131118162017" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calling a parallel solver from sequential code" -->
<!-- id="528A3E41.4050300_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="528A1F84.10705_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] calling a parallel solver from sequential code<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 11:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Previous message:</strong> <a href="23002.php">Florian Bruckner: "[OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>In reply to:</strong> <a href="23002.php">Florian Bruckner: "[OMPI users] calling a parallel solver from sequential code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Reply:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Florian,
<br>
<p>There's two ways.  You can make your whole app MPI-based, but only have 
<br>
the master process do any of the sequential work, while the others spin 
<br>
until the parallel part.  That's the easiest, but you then have MPI 
<br>
everywhere in your app.  The other way is to have the MPI processes 
<br>
exist totally outside your main sequential process. This keeps you 
<br>
isolated from the MPI, but it's a lot more work.
<br>
<p>I've done the MPI on the outside with the MUMPS linear solver.  You need 
<br>
to spin up the MPI process group separately, so your sequential process 
<br>
isn't doing any work while they're running.  You also need to send data 
<br>
to the MPI processes, which I used Boost's Shared-Memory library for (if 
<br>
you can't use C++ in your project this won't work for you at all).  You 
<br>
also have to keep the MPI processes and the main process synchronised 
<br>
and you need your main process to surrender it's core while the MPI 
<br>
solve is going on, so you end up with a bunch of Sleep or sched_yield 
<br>
calls so that everything plays nicely.  The whole thing takes a *lot* of 
<br>
tweaking to get right. Honestly, it's a total pig and I'd recommend 
<br>
against this path (we don't use it anymore in our software).
<br>
<p>If you just need a good parallel, direct linear solver (I'm making an 
<br>
assumption here) to run in one memory space, go grab SuperLU-MT from here:
<br>
<p><a href="http://crd-legacy.lbl.gov/~xiaoye/SuperLU/#superlu_mt">http://crd-legacy.lbl.gov/~xiaoye/SuperLU/#superlu_mt</a>
<br>
<p>or use the LiS solver package from here if you want an iterative solver:
<br>
<p><a href="http://www.ssisc.org/lis/">http://www.ssisc.org/lis/</a>
<br>
<p>Both of these can handle very large problems in shared-memory and have 
<br>
good scale-up.
<br>
<p>Damien
<br>
<p><p>On 18/11/2013 7:09 AM, Florian Bruckner wrote:
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how can i call an MPI parallelized solver routine from a sequential 
</span><br>
<span class="quotelev1">&gt; code. The sequential code is already existing and the structure looks 
</span><br>
<span class="quotelev1">&gt; like to following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    do {
</span><br>
<span class="quotelev1">&gt;          x = rand();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          sequential_code(); // this sequential code should only be 
</span><br>
<span class="quotelev1">&gt; executed on the master node
</span><br>
<span class="quotelev1">&gt;          if (x == 2345) MPIsolve(); // this should be run in parallel
</span><br>
<span class="quotelev1">&gt;    } while(x == 1234);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm wondering how the call MPI-parallelized solver routine can be 
</span><br>
<span class="quotelev1">&gt; called without parallelizing the whole existing sequential code. at a 
</span><br>
<span class="quotelev1">&gt; certain point of the code-path of the sequential code, the parallel 
</span><br>
<span class="quotelev1">&gt; execution should be started, but how can this be achived.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when starting the application with mpirun there must be some code 
</span><br>
<span class="quotelev1">&gt; running on each node. and the same code-path needs to be followed by 
</span><br>
<span class="quotelev1">&gt; each process. But this would mean that exactly the same sequential 
</span><br>
<span class="quotelev1">&gt; code needs to be executed on each node!?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what am i missing?
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt; Florian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23004.php">Christoffer Hamberg: "Re: [OMPI users] MPI Java bindings compile errors and missing datatype"</a>
<li><strong>Previous message:</strong> <a href="23002.php">Florian Bruckner: "[OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>In reply to:</strong> <a href="23002.php">Florian Bruckner: "[OMPI users] calling a parallel solver from sequential code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Reply:</strong> <a href="23005.php">Florian Bruckner: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
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
