<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 09:39:24 2005" -->
<!-- isoreceived="20051021143924" -->
<!-- sent="Fri, 21 Oct 2005 18:39:12 +0400 (MSD)" -->
<!-- isosent="20051021143912" -->
<!-- name="Konstantin Karganov" -->
<!-- email="kostik_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="Pine.LNX.4.44.0510211823060.16976-100000_at_ispserv.ispras.ru" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1129903694.16079.23.camel_at_doolie.osl.iu.edu" -->
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
<strong>From:</strong> Konstantin Karganov (<em>kostik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 09:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0219.php">Charles Williams: "[O-MPI users] Questions about mpif90/g95"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; My points here were that for at least some debuggers, a
</span><br>
<span class="quotelev1">&gt; naming scheme is all they need, and we should be able to accommodate
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
Yes, it seems that some advanced &quot;renaming scheme&quot; will fit most of needs.
<br>
(I mean if it allows to customize not only debugger name &amp; path, but also 
<br>
cmd-line options and smth alike)
<br>
<p><span class="quotelev1">&gt; Are you calling us a low-quality implementation?  ;-)
</span><br>
No, I mean that there is always a way to improve tool, and this way can't 
<br>
be completed - makin one step will show the next one :)
<br>
<p><span class="quotelev1">&gt; Understood.  However, our startup philosophy is quite different than
</span><br>
<span class="quotelev1">&gt; MPICH's; having a compiled executable as the starter has many more
</span><br>
<span class="quotelev1">&gt; benefits than problems (IMHO).  You have concretely identified a problem
</span><br>
<span class="quotelev1">&gt; -- that there is no flexibility in different debugger bootstrap
</span><br>
<span class="quotelev1">&gt; mechanisms -- and a) I agree, b) I think we can fix it easily,
</span><br>
Fine!
<br>
<p><span class="quotelev1">&gt; and c) I would prefer not to revert to scripts as the only solution.
</span><br>
Surely, scripts will lose all orte benefits, such as using MCA and GPR.
<br>
<p><span class="quotelev1">&gt; We don't currently support sending arbitrary signals (it certainly can
</span><br>
<span class="quotelev1">&gt; be done -- at least in some environments -- we just haven't had a need
</span><br>
<span class="quotelev1">&gt; for that yet)
</span><br>
It turned out that gdb doesn't interrupt the inferior execution by getting 
<br>
SIGINT not from control TTY, so we skip the signal issues at this time.
<br>
<p><span class="quotelev1">&gt; IMHO, it would be nice if ORTE could handle &quot;launch
</span><br>
<span class="quotelev1">&gt; this job alongside that other job&quot; bookkeeping for you, so that you
</span><br>
<span class="quotelev1">&gt; don't need to specify all the location/process placement stuff.
</span><br>
Yes, that is exactly what I mean.
<br>
<p><span class="quotelev2">&gt; &gt;  It is planned to support only MPI 1.2 for the first release.
</span><br>
<span class="quotelev1">&gt; Let us know when you're interested; there's a lot of unanswered
</span><br>
<span class="quotelev1">&gt; questions in that arena.
</span><br>
There are enough problems even with MPI 1.2 programs, lets challenge them 
<br>
one-by-one.
<br>
<p><span class="quotelev1">&gt; Essentially, yes.  We also need to set an MCA param that gets propagated
</span><br>
<span class="quotelev1">&gt; out to all the MPI processes telling them to block in MPI_INIT until the
</span><br>
<span class="quotelev1">&gt; debugger attaches and changes a value (see
</span><br>
<span class="quotelev1">&gt; ompi/debuggers/ompi_totalview.c -- it's called at the very end of
</span><br>
<span class="quotelev1">&gt; MPI_INIT, in ompi/runtime/ompi_mpi_init.c).
</span><br>
Surely, I forgot the debugging mode switches.
<br>
<p><span class="quotelev1">&gt; Our general rule of implementation in Open MPI is &quot;if we ever want to
</span><br>
<span class="quotelev1">&gt; implement something multiple different ways, make it a framework and
</span><br>
<span class="quotelev1">&gt; write components).
</span><br>
That is a good way, and the only one to make an extensible software.
<br>
Supposed you don't forget the complete documentation for all interfaces :)
<br>
<p><pre>
-- 
Best regards,
Konstantin.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0219.php">Charles Williams: "[O-MPI users] Questions about mpif90/g95"</a>
<li><strong>Previous message:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0217.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
