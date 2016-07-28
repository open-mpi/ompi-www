<?
$subject_val = "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 18 09:49:19 2010" -->
<!-- isoreceived="20101218144919" -->
<!-- sent="Sat, 18 Dec 2010 07:49:12 -0700" -->
<!-- isosent="20101218144912" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)" -->
<!-- id="1292683752.14868.12.camel_at_localhost.localdomain" -->
<!-- inreplyto="Prayer.1.3.3.1012181215140.17642_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)<br>
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-18 09:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8796.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nick Maclaren,
<br>
<p>Yes, this is a hard problem.  It is not endemic to OpenMPI, however.
<br>
This hints at the distributed memory/process/thread issues either
<br>
through the various OSs or alternately external to them in many solution
<br>
spaces.  
<br>
<p>Jeff Squyers statement that &quot;flexible dynamic processing is not
<br>
something many people would ask for&quot; is troubling.  Do pthreads provide
<br>
such a great solution strategy to these problems?
<br>
<p>In other words, if we were to offer a true &quot;flexible dynamic
<br>
processing&quot; (which I personally would advocate), would they (the
<br>
developers and users) come?
<br>
<p>K.A. Lloyd
<br>
<p>On Sat, 2010-12-18 at 12:15 +0000, N.M. Maclaren wrote:
<br>
<span class="quotelev1">&gt; On Dec 17 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not an unknown problem -- as George and Ralph were trying to say, it 
</span><br>
<span class="quotelev2">&gt; &gt; was a design decision on our part.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sadly, flexible dynamic processing is not something that many people ask 
</span><br>
<span class="quotelev2">&gt; &gt; for. We have invested time in it over the year to get it working and have 
</span><br>
<span class="quotelev2">&gt; &gt; a baseline functionality level. Beyond that, we unfortunately simply 
</span><br>
<span class="quotelev2">&gt; &gt; haven't had enough requests to justify spending time to do stuff like you 
</span><br>
<span class="quotelev2">&gt; &gt; suggest (e.g., allow abnormal termination of MPI-disconnected processes 
</span><br>
<span class="quotelev2">&gt; &gt; to not also take down previously-connected processes). :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And my responses (which were probably confusing) were some hint as to WHY
</span><br>
<span class="quotelev1">&gt; it is a hard problem.  I have a lot of experience at this level for a very
</span><br>
<span class="quotelev1">&gt; wide range of systems, and it's something that I would hate to have to
</span><br>
<span class="quotelev1">&gt; implement even for a single system - let alone for the range of systems
</span><br>
<span class="quotelev1">&gt; that OpenMPI supports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could tell you some horror stories of processes owned by one user taking
</span><br>
<span class="quotelev1">&gt; down ones owned by OTHER users, because the controlling terminal had been
</span><br>
<span class="quotelev1">&gt; reused.  And, upon investigation, it wasn't even possible to identify a
</span><br>
<span class="quotelev1">&gt; bug in any of the programs or operating system - it was merely a &quot;gotcha&quot;
</span><br>
<span class="quotelev1">&gt; that had sneaked through the cracks in the specifications and bitten me
</span><br>
<span class="quotelev1">&gt; in a painful place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is what I teach about it in my course (in full):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     You can add groups of processes dynamically \break
</span><br>
<span class="quotelev1">&gt;     {\cyan MPI-2} is probably the best way to do this \break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     \bully My recommendation is don't even {\magenta think} of it \break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This was a nightmare area in {\cyan PVM} \break
</span><br>
<span class="quotelev1">&gt;     The potential system problems are unbelievable \break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     And that is even if you are your own {\sky administrator} \break
</span><br>
<span class="quotelev1">&gt;     If you aren't, you may get strangled for using this \break
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<li><strong>In reply to:</strong> <a href="8793.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when child crashes/terminates	(without finalizing)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8795.php">Jeff Squyres: "Re: [OMPI devel] Parent terminates when child	crashes/terminates	(without finalizing)"</a>
<li><strong>Reply:</strong> <a href="8796.php">N.M. Maclaren: "Re: [OMPI devel] Parent terminates when	child	crashes/terminates	(without finalizing)"</a>
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
