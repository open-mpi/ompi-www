<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 14:59:43 2008" -->
<!-- isoreceived="20080915185943" -->
<!-- sent="Mon, 15 Sep 2008 20:59:39 +0200" -->
<!-- isosent="20080915185939" -->
<!-- name="Enrico Barausse" -->
<!-- email="enrico.barausse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="845f51b10809151159t8ecdfddvd5b6e203fccbfa52_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Enrico Barausse (<em>enrico.barausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 14:59:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Maybe in reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; But
</span><br>
<span class="quotelev1">&gt; a missing ierr can be a common cause for a segv in Fortran -- we
</span><br>
<span class="quotelev1">&gt; typically don't assign to ierr until after the MPI_Send completes, so
</span><br>
<span class="quotelev1">&gt; it *could* explain the behavior you're seeing...?
</span><br>
<p>that was indeed the problem, I'm an idiot (sorry...). I thought there
<br>
was an explicit interface somewhere in the libraries that would signal
<br>
a missing argument as a syntax error, so I did not check as carefully
<br>
as I should have...
<br>
<p>thanks to everybody for helping, hope the next time I'll have
<br>
something less stupid to ask...
<br>
<p>Enrico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Maybe in reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
