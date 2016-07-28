<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 12:28:05 2016" -->
<!-- isoreceived="20160407162805" -->
<!-- sent="Thu, 07 Apr 2016 17:28:03 +0100" -->
<!-- isosent="20160407162803" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="87inztwfho.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="5705A79E.5040108_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-04-07 12:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; clock_gettime() has a higher precision than gettimeofday(), though it
</span><br>
<span class="quotelev1">&gt; likely has
</span><br>
<span class="quotelev1">&gt; a lower precision and higher overhead than opal_sys_timer_get_cycles()
</span><br>
<p>Do you mean OMPI actually uses cycles for timing somewhere?  The
<br>
precision of that would be irrelevant, when it's typically only accurate
<br>
to within a factor of two or three.
<br>
<p><span class="quotelev1">&gt; my point was, and iirc, opal_sys_timer_get_cycles() on linux is local
</span><br>
<span class="quotelev1">&gt; to a given core,
</span><br>
<span class="quotelev1">&gt; and hence not suitable for MPI since a task might migrate from one
</span><br>
<span class="quotelev1">&gt; core to an other,
</span><br>
<span class="quotelev1">&gt; or it might be multithreaded with threads running on different cores.
</span><br>
<p>Is the documentation wrong to say wtime isn't (meant to be) global,
<br>
then?  Timing is obviously another reason to bind cores, given the usual
<br>
distributed system problems even at the smallest relevant scale.
<br>
<p>Anyhow, the lesson seems to be that you shouldn't use mpi_wtime if you
<br>
need decent precision or realistic mpi_wtick across implementations.
<br>
<p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/6/2016 11:15 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dave,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, on v1.10, we likely use the number of cycles / cpu freq.
</span><br>
<span class="quotelev2">&gt;&gt; That would be a horribly broken means of timing.  gettimeofday is
</span><br>
<span class="quotelev2">&gt;&gt; actually called under mpi_wtime, as ompi_info claims.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see opal_sys_timer_get_cycles in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h">https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot remember whether this is a monotonic timer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g. MPI_Wtime() invoked on a given cpu is always lower or equal to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Wtime() invoked later and on *any* cpu)
</span><br>
<span class="quotelev2">&gt;&gt; That's global, not monotonic.  MPI_Wtime(1) says it isn't necessarily
</span><br>
<span class="quotelev2">&gt;&gt; global in OMPI, but it has to be monotonic as I understand it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that could be the reason why we moved to clock_gettime() in master.
</span><br>
<span class="quotelev2">&gt;&gt; The reason to use clock_gettime is higher precision.  (I looked into
</span><br>
<span class="quotelev2">&gt;&gt; this after numbers from a test didn't make much sense.)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28903.php">david.froger.ml_at_[hidden]: "[OMPI users] Wrong values when reading file with MPI IO"</a>
<li><strong>Previous message:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28901.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28906.php">Jeff Hammond: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
