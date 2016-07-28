<?
$subject_val = "Re: [OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 04:24:24 2016" -->
<!-- isoreceived="20160622082424" -->
<!-- sent="Wed, 22 Jun 2016 17:24:12 +0900" -->
<!-- isosent="20160622082412" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="370ebc81-8130-2d3f-f834-1f4bebcd86ee_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=uK_WX0kZrdDshSDVEnf8sE9XwdSi_enKLKYHeBb37RxGg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-22 04:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29502.php">RYAN RAY: "[OMPI users] OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29503.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29503.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my bad, I was assuming KMP_AFFINITY was used
<br>
<p><p>so let me put it this way :
<br>
<p>do *not* use KMP_AFFINITY with mpirun -bind-to none, otherwise, you will 
<br>
very likely end up doing time sharing ...
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/22/2016 5:07 PM, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; Linux should not put more than one thread on a core if there are free 
</span><br>
<span class="quotelev1">&gt; cores.  Depending on cache/bandwidth needs, it may or may not be 
</span><br>
<span class="quotelev1">&gt; better to colocate on the same socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; KMP_AFFINITY will pin the OpenMP threads.  This is often important for 
</span><br>
<span class="quotelev1">&gt; MKL performance.  See <a href="https://software.intel.com/en-us/node/522691">https://software.intel.com/en-us/node/522691</a> for 
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2016 at 9:47 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Remi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Keep in mind this is still suboptimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if you run 2 tasks per node, there is a risks threads from
</span><br>
<span class="quotelev1">&gt;     different ranks end up bound to the same core, which means time
</span><br>
<span class="quotelev1">&gt;     sharing and a drop in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 6/22/2016 4:45 PM, remi marchal wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Dear Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The mpirun --bind-to-none solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks a lot,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     R&#233;mi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Le 22 juin 2016 &#224; 09:34, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:gilles_at_[hidden]&gt;&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Remi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     in the same environment, can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun -np 1 grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     it is likely Open MPI allows only one core, and in this case, i
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     suspect MKL refuses to do some time sharing and hence
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     transparently reduce the number of threads to 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* unless it *does* time sharing, and you observed 4 threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     with the performance of one */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --bind-to none ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     will tell Open MPI *not* to bind on one core, and that should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     help a bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     note this is suboptimal, you should really ask mpirun to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     allocate 4 cores per task, but i cannot remember the correct
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     command line for that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 6/22/2016 4:17 PM, remi marchal wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Dear openmpi users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Today, I faced a strange problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I am compiling a quantum chemistry software (CASTEP-16) using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     intel16, mkl threaded libraries and openmpi-18.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The compilation works fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     When I ask for MKL_NUM_THREAD=4 and call the program in serial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mode (without mpirun), it works perfectly and use 4 threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     However, when I start the program with mpirun, even with 1 mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     process, the program ran but only with 1 thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I never add such kind of trouble.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Does anyone have an explanation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     R&#233;mi
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
<span class="quotelev4">&gt;&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29498.php">http://www.open-mpi.org/community/lists/users/2016/06/29498.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29499.php">http://www.open-mpi.org/community/lists/users/2016/06/29499.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29500.php">http://www.open-mpi.org/community/lists/users/2016/06/29500.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29502.php">RYAN RAY: "[OMPI users] OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29500.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29503.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29503.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
