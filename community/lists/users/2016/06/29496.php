<?
$subject_val = "Re: [OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 03:26:28 2016" -->
<!-- isoreceived="20160622072628" -->
<!-- sent="Wed, 22 Jun 2016 09:25:58 +0200" -->
<!-- isosent="20160622072558" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="CAGKz=u+6H36fOFjddKiz=iVJQb+p35GJVUVOx5fwfLtmMJaeZg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="81671C5B-FE02-4B33-BA70-08E238828FD1_at_univ-rennes1.fr" -->
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
<strong>Date:</strong> 2016-06-22 03:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you know for sure that MKL is only using one thread or do you merely see
<br>
that the performance is consistent with it using one thread?
<br>
<p>If MPI does process pinning, it is possible for all OpenMP threads to run
<br>
on one core, which means one will observe no speedup from threads (and
<br>
potentially a slowdown due to oversubscription).  I do not know the option
<br>
to disable this with Open-MPI, but I assume either you can find it in the
<br>
docs or one of the Open-MPI experts will provide it.
<br>
<p>I have observed this issue with MVAPICH2 and Pthread applications in the
<br>
past (it has been fixed both in MVAPICH2 and the relevant applications),
<br>
but not in Open-MPI with OpenMP, although I am not a heavy user of Open-MPI.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Wed, Jun 22, 2016 at 9:17 AM, remi marchal &lt;remi.marchal_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users,
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29495.php">http://www.open-mpi.org/community/lists/users/2016/06/29495.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29496/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
