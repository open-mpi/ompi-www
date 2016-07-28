<?
$subject_val = "Re: [OMPI users] MPI Processes and Auto Vectorization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 07:32:09 2009" -->
<!-- isoreceived="20091201123209" -->
<!-- sent="Tue, 01 Dec 2009 04:31:57 -0800" -->
<!-- isosent="20091201123157" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Processes and Auto Vectorization" -->
<!-- id="4B150CBD.7090706_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="428810f20911302216i448625d1y66fc8eb5bc1fb6a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Processes and Auto Vectorization<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 07:31:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11303.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11298.php">amjad ali: "[OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
amjad ali wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Suppose we run a parallel MPI code with 64 processes on a cluster, say 
</span><br>
<span class="quotelev1">&gt; of 16 nodes. The cluster nodes has multicore CPU say 4 cores on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now all the 64 cores on the cluster running a process. Program is SPMD, 
</span><br>
<span class="quotelev1">&gt; means all processes has the same workload.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now if we had done auto-vectorization while compiling the code (for 
</span><br>
<span class="quotelev1">&gt; example with Intel compilers); Will there be any benefit 
</span><br>
<span class="quotelev1">&gt; (efficiency/scalability improvement) of having code with the 
</span><br>
<span class="quotelev1">&gt; auto-vectorization? Or we will get the same performance as without 
</span><br>
<span class="quotelev1">&gt; Auto-vectorization in this example case?
</span><br>
<span class="quotelev1">&gt; MEANS THAT if we do not have free cpu cores in a PC or cluster (all 
</span><br>
<span class="quotelev1">&gt; cores are running MPI processes), still the auto-vertorization is 
</span><br>
<span class="quotelev1">&gt; beneficial? Or it is beneficial only if we have some free cpu cores 
</span><br>
<span class="quotelev1">&gt; locally?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can we really get benefit in performance improvement with 
</span><br>
<span class="quotelev1">&gt; Auto-Vectorization?
</span><br>
<p>Auto-vectorization should give similar performance benefit under MPI as 
<br>
it does in a single process.  That's about all that can be said when you 
<br>
say nothing about the nature of your application.  This assumes that 
<br>
your MPI domain decomposition, which may not be highly vectorizable, 
<br>
doesn't take up too large a fraction of elapsed time.  By the same 
<br>
token, auto-vectorization techniques aren't specific to MPI 
<br>
applications, so an in-depth treatment isn't topical here.
<br>
I'll just mention that we are well into the era of 3 levels of 
<br>
programming parallelization:  vectorization, threaded parallel (e.g. 
<br>
OpenMP), and process parallel (e.g. MPI).
<br>
For an application which I work on, 8 nodes with auto-vectorization give 
<br>
about the performance of 12 nodes without, so compilers without 
<br>
auto-vectorization capability for such applications fell by the wayside 
<br>
a decade ago.  This application gains significant benefit from cache 
<br>
blocking, so vectorization has more opportunity to gain than for 
<br>
applications which have less memory locality.
<br>
I have not seen an application which was effectively vectorized which 
<br>
also gained from HyperThreading, but the gain for vectorization should 
<br>
be significantly greater than could be gained from HyperThreading. It's 
<br>
also common that vectorization gains more on lower clock speed/cheaper 
<br>
CPU models (of the same architecture), enabling lower cost of purchase 
<br>
or power consumption, but that's true of all forms of parallelization.
<br>
Some applications can be vectorized effectively by any of the popular 
<br>
auto-vectorizing compilers, including recent gnu compilers, while others 
<br>
show much more gain with certain compilers, such as Intel, PGI, or Open64.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11303.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11298.php">amjad ali: "[OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11305.php">amjad ali: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
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
