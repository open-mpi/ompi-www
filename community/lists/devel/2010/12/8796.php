<?
$subject_val = "Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 11:06:49 2010" -->
<!-- isoreceived="20101218160649" -->
<!-- sent="18 Dec 2010 16:06:44 +0000" -->
<!-- isosent="20101218160644" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)" -->
<!-- id="Prayer.1.3.3.1012181606440.29986_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1292683752.14868.12.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 11:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18 2010, Ken Lloyd wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, this is a hard problem.  It is not endemic to OpenMPI, however.
</span><br>
<span class="quotelev1">&gt;This hints at the distributed memory/process/thread issues either
</span><br>
<span class="quotelev1">&gt;through the various OSs or alternately external to them in many solution
</span><br>
<span class="quotelev1">&gt;spaces.  
</span><br>
<p>Absolutely.  I hope that I never implied anything different.  I found
<br>
it hard enough to write a reliable nohup that would spawn a process
<br>
that would outlast the termination of its caller!  I had to add a new
<br>
hack for every new version of Unix and that I used it under.
<br>
<p>Luckily, I didn't need it to work under the batch schedulers or MPI,
<br>
so I could ignore those issues.  My problems THERE were the converse:
<br>
cleaning up all of the child processes without killing too many
<br>
extraneous processes.
<br>
<p><span class="quotelev1">&gt;Jeff Squyers statement that &quot;flexible dynamic processing is not
</span><br>
<span class="quotelev1">&gt;something many people would ask for&quot; is troubling.  Do pthreads provide
</span><br>
<span class="quotelev1">&gt;such a great solution strategy to these problems?
</span><br>
<p>Clearly a rhetorical question - but, for anyone who don't know: no way,
<br>
Jose :-(  There isn't even a reliable kill that doesn't rely on a handshake
<br>
with the child.
<br>
<p><span class="quotelev1">&gt;In other words, if we were to offer a true &quot;flexible dynamic
</span><br>
<span class="quotelev1">&gt;processing&quot; (which I personally would advocate), would they (the
</span><br>
<span class="quotelev1">&gt;developers and users) come?
</span><br>
<p>Jeff says not.  That may be because there is little requirement, it may
<br>
be because the people who have tried have got their fingers burnt, or it
<br>
may be because they have consulted some cynical old sod like me who told
<br>
them it was just asking for trouble.
<br>
<p>I would have major problems just SPECIFYING it.  MPI 2.2 is fine as far
<br>
as it goes, but an implementation would have to decide what to do about
<br>
all of the inheritable state, from file descriptors through signal handling
<br>
through shared memory segments through 'capabilities' through ....  No
<br>
matter what decision is taken, it will be wrong for some people.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8797.php">William George: "[OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8794.php">Ken Lloyd: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
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
