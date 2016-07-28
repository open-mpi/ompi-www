<?
$subject_val = "Re: [OMPI users] Multiple threads for an mpi process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 10:22:49 2014" -->
<!-- isoreceived="20140912142249" -->
<!-- sent="Fri, 12 Sep 2014 08:22:47 -0600" -->
<!-- isosent="20140912142247" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple threads for an mpi process" -->
<!-- id="541301B7.3070502_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5412F4B1.2060709_at_aol.com" -->
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
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 10:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/12/14, 7:27 AM, Tim Prince wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/12/2014 6:14 AM, JR Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This must be a very old topic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to run mpi with one process per node, e.g., using
</span><br>
<span class="quotelev2">&gt;&gt; -cpus-per-rank=1.  Then I want to use openmp inside of that.
</span><br>
<span class="quotelev2">&gt;&gt; But other times I will run with a rank on each physical core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inside my code I would like to detect which situation I am in.
</span><br>
<span class="quotelev2">&gt;&gt; Is there an openmpi api call to determine that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; omp_get_num_threads() should work.  Unless you want to choose a 
</span><br>
<span class="quotelev1">&gt; different non-parallel algorithm for this case, a single thread omp 
</span><br>
<span class="quotelev1">&gt; parallel region works fine.
</span><br>
<span class="quotelev1">&gt; You should soon encounter cases where you want intermediate choices, 
</span><br>
<span class="quotelev1">&gt; such as 1 rank per CPU package and 1 thread per core, even if you stay 
</span><br>
<span class="quotelev1">&gt; away from platforms with more than 12 cores per CPU.
</span><br>
<p>I may not understand, so I will try to ask in more detail.
<br>
<p>Suppose I am running on a four-core processor (and my code likes one 
<br>
thread per core).
<br>
<p>In case 1 I do
<br>
<p>&nbsp;&nbsp;&nbsp;mpiexec -np 2 myexec
<br>
<p>and I want to know that each mpi process should use 2 threads.
<br>
<p>If instead I did
<br>
<p>&nbsp;&nbsp;&nbsp;mpiexec -np 4 myexec
<br>
<p>I want to know that each mpi process should use one thread.
<br>
<p>Will omp_get_num_threads() should return a different value for those two 
<br>
cases?
<br>
<p>Perhaps I am not invoking mpiexec correctly.
<br>
I use MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_FUNNELED, 
<br>
&amp;threadSupport), and regardless
<br>
of what how I invoke mpiexec (-n 1, -n 2, -n 4), I see 2 openmp processes
<br>
and 1 openmp threads (have not called omp_set_num_threads).
<br>
When I run serial, I see 8 openmp processes and 1 openmp threads.
<br>
So I must be missing an arg to mpiexec?
<br>
<p>This is a 4-core haswell with hyperthreading to get 8.
<br>
<p><p><p>Thx.....
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25323.php">Ralph Castain: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
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
