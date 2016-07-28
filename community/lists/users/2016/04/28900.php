<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 10:15:48 2016" -->
<!-- isoreceived="20160406141548" -->
<!-- sent="Wed, 06 Apr 2016 15:15:46 +0100" -->
<!-- isosent="20160406141546" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="87d1q2zuul.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAAkFZ5v8nOwb-rRFK18S2OKZaitu16Z4TsaHxz+i5uC7d6JMng_at_mail.gmail.com" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-06 10:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, on v1.10, we likely use the number of cycles / cpu freq.
</span><br>
<p>That would be a horribly broken means of timing.  gettimeofday is
<br>
actually called under mpi_wtime, as ompi_info claims.
<br>
<p><span class="quotelev1">&gt; see opal_sys_timer_get_cycles in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h">https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot remember whether this is a monotonic timer.
</span><br>
<span class="quotelev1">&gt; (e.g. MPI_Wtime() invoked on a given cpu is always lower or equal to
</span><br>
<span class="quotelev1">&gt; MPI_Wtime() invoked later and on *any* cpu)
</span><br>
<p>That's global, not monotonic.  MPI_Wtime(1) says it isn't necessarily
<br>
global in OMPI, but it has to be monotonic as I understand it.
<br>
<p><span class="quotelev1">&gt; that could be the reason why we moved to clock_gettime() in master.
</span><br>
<p>The reason to use clock_gettime is higher precision.  (I looked into
<br>
this after numbers from a test didn't make much sense.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28899.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28898.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
