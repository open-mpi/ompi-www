<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 20:19:44 2016" -->
<!-- isoreceived="20160407001944" -->
<!-- sent="Thu, 7 Apr 2016 09:19:42 +0900" -->
<!-- isosent="20160407001942" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="5705A79E.5040108_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="87d1q2zuul.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-06 20:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>i checked again, and yes, v1.10 uses gettimeofday() in MPI_Wtime() on linux.
<br>
<p>native timers are only used in aix and solaris
<br>
<p>$ grep -R OPAL_TIMER_USEC_NATIVE opal/mca/timer
<br>
opal/mca/timer/aix/timer_aix.h:#define OPAL_TIMER_USEC_NATIVE 1
<br>
opal/mca/timer/altix/timer_altix.h:#define OPAL_TIMER_USEC_NATIVE 0
<br>
opal/mca/timer/base/timer_base_null.h:#define OPAL_TIMER_USEC_NATIVE 0
<br>
opal/mca/timer/catamount/timer_catamount.h:#define OPAL_TIMER_USEC_NATIVE 0
<br>
opal/mca/timer/darwin/timer_darwin.h:#define OPAL_TIMER_USEC_NATIVE 0
<br>
opal/mca/timer/linux/timer_linux.h:#define OPAL_TIMER_USEC_NATIVE 0
<br>
opal/mca/timer/solaris/timer_solaris.h:#define OPAL_TIMER_USEC_NATIVE 1
<br>
<p>clock_gettime() has a higher precision than gettimeofday(), though it 
<br>
likely has
<br>
a lower precision and higher overhead than opal_sys_timer_get_cycles()
<br>
my point was, and iirc, opal_sys_timer_get_cycles() on linux is local to 
<br>
a given core,
<br>
and hence not suitable for MPI since a task might migrate from one core 
<br>
to an other,
<br>
or it might be multithreaded with threads running on different cores.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/6/2016 11:15 PM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fwiw, on v1.10, we likely use the number of cycles / cpu freq.
</span><br>
<span class="quotelev1">&gt; That would be a horribly broken means of timing.  gettimeofday is
</span><br>
<span class="quotelev1">&gt; actually called under mpi_wtime, as ompi_info claims.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; see opal_sys_timer_get_cycles in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h">https://github.com/open-mpi/ompi-release/blob/v1.10/opal/include/opal/sys/amd64/timer.h</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot remember whether this is a monotonic timer.
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. MPI_Wtime() invoked on a given cpu is always lower or equal to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wtime() invoked later and on *any* cpu)
</span><br>
<span class="quotelev1">&gt; That's global, not monotonic.  MPI_Wtime(1) says it isn't necessarily
</span><br>
<span class="quotelev1">&gt; global in OMPI, but it has to be monotonic as I understand it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that could be the reason why we moved to clock_gettime() in master.
</span><br>
<span class="quotelev1">&gt; The reason to use clock_gettime is higher precision.  (I looked into
</span><br>
<span class="quotelev1">&gt; this after numbers from a test didn't make much sense.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28900.php">http://www.open-mpi.org/community/lists/users/2016/04/28900.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28900.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28902.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
