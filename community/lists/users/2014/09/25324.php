<?
$subject_val = "Re: [OMPI users] Multiple threads for an mpi process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 10:49:05 2014" -->
<!-- isoreceived="20140912144905" -->
<!-- sent="Fri, 12 Sep 2014 09:48:55 -0500" -->
<!-- isosent="20140912144855" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple threads for an mpi process" -->
<!-- id="541307D7.4030704_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="541301B7.3070502_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple threads for an mpi process<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 10:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25325.php">Siegmar Gross: "[OMPI users] more info on SIGSEGV for Java and openmpi-1.9a1r32716 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/12/2014 9:22 AM, JR Cary wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/12/14, 7:27 AM, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/12/2014 6:14 AM, JR Cary wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This must be a very old topic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to run mpi with one process per node, e.g., using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cpus-per-rank=1.  Then I want to use openmp inside of that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But other times I will run with a rank on each physical core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Inside my code I would like to detect which situation I am in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an openmpi api call to determine that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; omp_get_num_threads() should work.  Unless you want to choose a 
</span><br>
<span class="quotelev2">&gt;&gt; different non-parallel algorithm for this case, a single thread omp 
</span><br>
<span class="quotelev2">&gt;&gt; parallel region works fine.
</span><br>
<span class="quotelev2">&gt;&gt; You should soon encounter cases where you want intermediate choices, 
</span><br>
<span class="quotelev2">&gt;&gt; such as 1 rank per CPU package and 1 thread per core, even if you 
</span><br>
<span class="quotelev2">&gt;&gt; stay away from platforms with more than 12 cores per CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may not understand, so I will try to ask in more detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suppose I am running on a four-core processor (and my code likes one 
</span><br>
<span class="quotelev1">&gt; thread per core).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case 1 I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpiexec -np 2 myexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I want to know that each mpi process should use 2 threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If instead I did
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpiexec -np 4 myexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to know that each mpi process should use one thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will omp_get_num_threads() should return a different value for those 
</span><br>
<span class="quotelev1">&gt; two cases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps I am not invoking mpiexec correctly.
</span><br>
<span class="quotelev1">&gt; I use MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_FUNNELED, 
</span><br>
<span class="quotelev1">&gt; &amp;threadSupport), and regardless
</span><br>
<span class="quotelev1">&gt; of what how I invoke mpiexec (-n 1, -n 2, -n 4), I see 2 openmp processes
</span><br>
<span class="quotelev1">&gt; and 1 openmp threads (have not called omp_set_num_threads).
</span><br>
<span class="quotelev1">&gt; When I run serial, I see 8 openmp processes and 1 openmp threads.
</span><br>
<span class="quotelev1">&gt; So I must be missing an arg to mpiexec?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a 4-core haswell with hyperthreading to get 8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sorry, I assumed you were setting OMP_NUM_THREADS for your runs.  If you 
<br>
don't do that, each instance of OpenMP will try to run 8 threads, where 
<br>
you probably want just 1 thread per core.  I turn off hyperthreading in 
<br>
BIOS on my machines, as I never run anything which would benefit from it.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25324/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25325.php">Siegmar Gross: "[OMPI users] more info on SIGSEGV for Java and openmpi-1.9a1r32716 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
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
