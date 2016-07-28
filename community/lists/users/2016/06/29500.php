<?
$subject_val = "Re: [OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 04:07:58 2016" -->
<!-- isoreceived="20160622080758" -->
<!-- sent="Wed, 22 Jun 2016 10:07:36 +0200" -->
<!-- isosent="20160622080736" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="CAGKz=uK_WX0kZrdDshSDVEnf8sE9XwdSi_enKLKYHeBb37RxGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="bcf61209-b7e5-8e4b-04b0-06e8cb0b2f93_at_rist.or.jp" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 04:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29499.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29499.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linux should not put more than one thread on a core if there are free
<br>
cores.  Depending on cache/bandwidth needs, it may or may not be better to
<br>
colocate on the same socket.
<br>
<p>KMP_AFFINITY will pin the OpenMP threads.  This is often important for MKL
<br>
performance.  See <a href="https://software.intel.com/en-us/node/522691">https://software.intel.com/en-us/node/522691</a> for details.
<br>
<p>Jeff
<br>
<p>On Wed, Jun 22, 2016 at 9:47 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Remi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind this is still suboptimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you run 2 tasks per node, there is a risks threads from different ranks
</span><br>
<span class="quotelev1">&gt; end up bound to the same core, which means time sharing and a drop in
</span><br>
<span class="quotelev1">&gt; performance.
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
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/22/2016 4:45 PM, remi marchal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; R&#195;&#169;mi
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
<span class="quotelev1">&gt; Le 22 juin 2016 &#195;&#160; 09:34, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the same environment, can you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is likely Open MPI allows only one core, and in this case, i suspect
</span><br>
<span class="quotelev1">&gt; MKL refuses to do some time sharing and hence transparently reduce the
</span><br>
<span class="quotelev1">&gt; number of threads to 1.
</span><br>
<span class="quotelev1">&gt; /* unless it *does* time sharing, and you observed 4 threads with the
</span><br>
<span class="quotelev1">&gt; performance of one */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will tell Open MPI *not* to bind on one core, and that should help a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note this is suboptimal, you should really ask mpirun to allocate 4 cores
</span><br>
<span class="quotelev1">&gt; per task, but i cannot remember the correct command line for that
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/22/2016 4:17 PM, remi marchal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today, I faced a strange problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am compiling a quantum chemistry software (CASTEP-16) using intel16, mkl
</span><br>
<span class="quotelev1">&gt; threaded libraries and openmpi-18.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The compilation works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I ask for MKL_NUM_THREAD=4 and call the program in serial mode
</span><br>
<span class="quotelev1">&gt; (without mpirun), it works perfectly and use 4 threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I start the program with mpirun, even with 1 mpi process,
</span><br>
<span class="quotelev1">&gt; the program ran but only with 1 thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I never add such kind of trouble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have an explanation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; R&#195;&#169;mi
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29497.php">http://www.open-mpi.org/community/lists/users/2016/06/29497.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29498.php">http://www.open-mpi.org/community/lists/users/2016/06/29498.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29499.php">http://www.open-mpi.org/community/lists/users/2016/06/29499.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29499.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29499.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29501.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
