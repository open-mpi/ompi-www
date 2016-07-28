<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 09:32:16 2016" -->
<!-- isoreceived="20160406133216" -->
<!-- sent="Wed, 6 Apr 2016 22:32:15 +0900" -->
<!-- isosent="20160406133215" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CAAkFZ5v8nOwb-rRFK18S2OKZaitu16Z4TsaHxz+i5uC7d6JMng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87lh4qzzr4.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-06 09:32:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>fwiw, on v1.10, we likely use the number of cycles / cpu freq.
<br>
<p>see opal_sys_timer_get_cycles in
<br>
<a href="https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h">https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h</a>
<br>
<p>I cannot remember whether this is a monotonic timer.
<br>
(e.g. MPI_Wtime() invoked on a given cpu is always lower or equal to
<br>
MPI_Wtime() invoked later and on *any* cpu)
<br>
that could be the reason why we moved to clock_gettime() in master.
<br>
<p>George,
<br>
do you have a more precise recollection ?
<br>
shall we backport the us of clock_gettime() into v1.10 ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, April 6, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you talking about different source?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On further investigation it looks so -- the development source does
</span><br>
<span class="quotelev1">&gt; feature clock_gettime, but the release doesn't.  Back to LD_PRELOAD...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28897.php">http://www.open-mpi.org/community/lists/users/2016/04/28897.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28897.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
