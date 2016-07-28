<?
$subject_val = "Re: [OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 08:48:55 2016" -->
<!-- isoreceived="20160622124855" -->
<!-- sent="Wed, 22 Jun 2016 05:48:50 -0700" -->
<!-- isosent="20160622124850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="06DD0FE3-EACA-43B6-9E44-F745CDF7DD32_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5u2dscABV7jqgzmdkTkVGXKXPkorQsw9DFoOSH1LNcY9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mkl threaded works in serail but not in parallel<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 08:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29508.php">Dave Love: "[OMPI users] 2.0 documentation"</a>
<li><strong>Previous message:</strong> <a href="29506.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>In reply to:</strong> <a href="29505.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure - for example, if you intend to run 4 threads, then &#226;&#128;&#148;map-by core:pe=4 (assuming you are running OMPI 1.10 or higher) will bind each process to 4 cores in a disjoint pattern (i.e., no sharing).
<br>
<p><p><span class="quotelev1">&gt; On Jun 22, 2016, at 3:37 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my point is the way I (almost) always use it is
</span><br>
<span class="quotelev1">&gt; export KMP_AFFINITY=compact,granularity=fine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the trick is I rely on OpenMPI and/or the batch manager to pin MPI tasks on disjoint core sets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that is obviously not the case with
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but that can be achieved with the appropriate mpirun options
</span><br>
<span class="quotelev1">&gt; (and I am sure Ralph will post it shortly, and it might already be in the FAQ)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 22, 2016, Jeff Hammond &lt;jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  KMP_AFFINITY is essential for performance. One just needs to set it to something that distributes the threads properly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not setting KMP_AFFINITY means no affinity and thus inheriting from process affinity mask.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday, June 22, 2016, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; my bad, I was assuming KMP_AFFINITY was used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so let me put it this way :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do *not* use KMP_AFFINITY with mpirun -bind-to none, otherwise, you will very likely end up doing time sharing ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/22/2016 5:07 PM, Jeff Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Linux should not put more than one thread on a core if there are free cores.  Depending on cache/bandwidth needs, it may or may not be better to colocate on the same socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; KMP_AFFINITY will pin the OpenMP threads.  This is often important for MKL performance.  See  &lt;<a href="https://software.intel.com/en-us/node/522691">https://software.intel.com/en-us/node/522691</a>&gt;<a href="https://software.intel.com/en-us/node/522691">https://software.intel.com/en-us/node/522691</a> &lt;<a href="https://software.intel.com/en-us/node/522691">https://software.intel.com/en-us/node/522691</a>&gt; for details.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 22, 2016 at 9:47 AM, Gilles Gouaillardet &lt; &lt;&gt;gilles_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Remi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind this is still suboptimal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if you run 2 tasks per node, there is a risks threads from different ranks end up bound to the same core, which means time sharing and a drop in performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 6/22/2016 4:45 PM, remi marchal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpirun --bind-to-none solve the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R&#195;&#169;mi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 22 juin 2016 &#195;&#160; 09:34, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;&gt;&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Remi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the same environment, can you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is likely Open MPI allows only one core, and in this case, i suspect MKL refuses to do some time sharing and hence transparently reduce the number of threads to 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* unless it *does* time sharing, and you observed 4 threads with the performance of one */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will tell Open MPI *not* to bind on one core, and that should help a bit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note this is suboptimal, you should really ask mpirun to allocate 4 cores per task, but i cannot remember the correct command line for that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 6/22/2016 4:17 PM, remi marchal wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Today, I faced a strange problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am compiling a quantum chemistry software (CASTEP-16) using intel16, mkl threaded libraries and openmpi-18.1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The compilation works fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I ask for MKL_NUM_THREAD=4 and call the program in serial mode (without mpirun), it works perfectly and use 4 threads.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, when I start the program with mpirun, even with 1 mpi process, the program ran but only with 1 thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I never add such kind of trouble.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anyone have an explanation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; R&#195;&#169;mi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29498.php">http://www.open-mpi.org/community/lists/users/2016/06/29498.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29498.php">http://www.open-mpi.org/community/lists/users/2016/06/29498.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29499.php">http://www.open-mpi.org/community/lists/users/2016/06/29499.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29499.php">http://www.open-mpi.org/community/lists/users/2016/06/29499.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29500.php">http://www.open-mpi.org/community/lists/users/2016/06/29500.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29500.php">http://www.open-mpi.org/community/lists/users/2016/06/29500.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a> &lt;<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29505.php">http://www.open-mpi.org/community/lists/users/2016/06/29505.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29505.php">http://www.open-mpi.org/community/lists/users/2016/06/29505.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29507/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29508.php">Dave Love: "[OMPI users] 2.0 documentation"</a>
<li><strong>Previous message:</strong> <a href="29506.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>In reply to:</strong> <a href="29505.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
