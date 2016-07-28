<?
$subject_val = "Re: [OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 03:47:54 2016" -->
<!-- isoreceived="20160622074754" -->
<!-- sent="Wed, 22 Jun 2016 16:47:51 +0900" -->
<!-- isosent="20160622074751" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="bcf61209-b7e5-8e4b-04b0-06e8cb0b2f93_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F038CDD7-E0E7-43D9-B036-9D7FF96EC2FD_at_univ-rennes1.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 03:47:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29498.php">remi marchal: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29498.php">remi marchal: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Remi,
<br>
<p><p>Keep in mind this is still suboptimal.
<br>
<p>if you run 2 tasks per node, there is a risks threads from different 
<br>
ranks end up bound to the same core, which means time sharing and a drop 
<br>
in performance.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/22/2016 4:45 PM, remi marchal wrote:
<br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpirun --bind-to-none solve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R&#233;mi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 22 juin 2016 &#224; 09:34, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Remi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the same environment, can you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is likely Open MPI allows only one core, and in this case, i 
</span><br>
<span class="quotelev2">&gt;&gt; suspect MKL refuses to do some time sharing and hence transparently 
</span><br>
<span class="quotelev2">&gt;&gt; reduce the number of threads to 1.
</span><br>
<span class="quotelev2">&gt;&gt; /* unless it *does* time sharing, and you observed 4 threads with the 
</span><br>
<span class="quotelev2">&gt;&gt; performance of one */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; will tell Open MPI *not* to bind on one core, and that should help a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; note this is suboptimal, you should really ask mpirun to allocate 4 
</span><br>
<span class="quotelev2">&gt;&gt; cores per task, but i cannot remember the correct command line for that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/22/2016 4:17 PM, remi marchal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear openmpi users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today, I faced a strange problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am compiling a quantum chemistry software (CASTEP-16) using 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel16, mkl threaded libraries and openmpi-18.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compilation works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I ask for MKL_NUM_THREAD=4 and call the program in serial mode 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (without mpirun), it works perfectly and use 4 threads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I start the program with mpirun, even with 1 mpi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, the program ran but only with 1 thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I never add such kind of trouble.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have an explanation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; R&#233;mi
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29498.php">http://www.open-mpi.org/community/lists/users/2016/06/29498.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29498.php">remi marchal: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29498.php">remi marchal: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
