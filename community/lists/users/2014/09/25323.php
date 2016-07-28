<?
$subject_val = "Re: [OMPI users] Multiple threads for an mpi process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 10:36:19 2014" -->
<!-- isoreceived="20140912143619" -->
<!-- sent="Fri, 12 Sep 2014 07:35:33 -0700" -->
<!-- isosent="20140912143533" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple threads for an mpi process" -->
<!-- id="57968234-9208-4FB3-8C0E-B381237F09F4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 10:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, the info is there. There is an envar OMPI_COMM_WORLD_LOCAL_SIZE which tells you how many procs are on this node. If you tell your proc how many cores (or hwthreads) to use, it would be a simple division to get what you want.
<br>
<p>You could also detect the number of cores or hwthreads via a call to hwloc, but I don't know if you want to link that deep and MPI doesn't have a function for that purpose. Could be that OpenMP provides a call for that purpose?
<br>
<p><p>On Sep 12, 2014, at 7:22 AM, JR Cary &lt;cary_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; omp_get_num_threads() should work.  Unless you want to choose a different non-parallel algorithm for this case, a single thread omp parallel region works fine.
</span><br>
<span class="quotelev2">&gt;&gt; You should soon encounter cases where you want intermediate choices, such as 1 rank per CPU package and 1 thread per core, even if you stay away from platforms with more than 12 cores per CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I may not understand, so I will try to ask in more detail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose I am running on a four-core processor (and my code likes one thread per core).
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
<span class="quotelev1">&gt; Will omp_get_num_threads() should return a different value for those two cases?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps I am not invoking mpiexec correctly. 
</span><br>
<span class="quotelev1">&gt; I use MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_FUNNELED, &amp;threadSupport), and regardless
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx.....
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25322.php">http://www.open-mpi.org/community/lists/users/2014/09/25322.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>In reply to:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
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
