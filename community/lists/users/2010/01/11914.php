<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 14:24:02 2010" -->
<!-- isoreceived="20100128192402" -->
<!-- sent="Thu, 28 Jan 2010 13:23:56 -0600" -->
<!-- isosent="20100128192356" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses" -->
<!-- id="876512661001281123h71eb2ba2jbb21e77da80501fc_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 14:23:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11915.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Maybe in reply to:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;On Jan 28, 2010, at 10:57 AM, Laurence Marks wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; I am trying to find out if there is any way to create an error-handler
</span><br>
<span class="quotelev2">&gt;&gt; or something else that will trap an error exit from the run-time
</span><br>
<span class="quotelev2">&gt;&gt; library due to a fortran I/O error, or possibly some openmpi calls or
</span><br>
<span class="quotelev2">&gt;&gt; options that will do the same thing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me expand a little. I am working with a very larger fortran 90
</span><br>
<span class="quotelev2">&gt;&gt; code written by many people that uses mpi. While some of the
</span><br>
<span class="quotelev2">&gt;&gt; read/write statements have an ERR= in them, not all do and it is a big
</span><br>
<span class="quotelev2">&gt;&gt; job to add this to everyone (and not miss some). With some flavors of
</span><br>
<span class="quotelev2">&gt;&gt; mpi (openmpi is one) if one process encounters an I/O error that
</span><br>
<span class="quotelev2">&gt;&gt; process will crash, and the other ones can hang because no
</span><br>
<span class="quotelev2">&gt;&gt; termination/abort signal is sent to them ? this seems to be
</span><br>
<span class="quotelev2">&gt;&gt; implementation dependent.
</span><br>
<p><span class="quotelev1">&gt; That's odd.  What version of Open MPI are you using?
</span><br>
<p>1.4.1 (I did not compile it myself.)
<br>
<p><span class="quotelev1">&gt; If one process dies prematurely in Open MPI (i.e., before MPI_Finalize), all the others &gt; should be automatically killed.
</span><br>
<p>This does not seem to be happening. Part of the problem may be (and I
<br>
am out of my depth here) that the fortran rtl library (ifort) does not
<br>
appear to be dying prematurely, at least there is no signal that I can
<br>
catch (I'm not a good c programmer).
<br>
<p>I posted to the Intel ifort site as well, and the response I got (see
<br>
link below) is that &quot;There is a feature request in to add this
<br>
functionality, but it is not currently on the list for
<br>
implementation.&quot;
<br>
<p><a href="http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr">http://software.intel.com/en-us/forums/showthread.php?t=71571&amp;o=d&amp;s=lr</a>
<br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<p>-
<br>
Laurence Marks
<br>
Department of Materials Science and Engineering
<br>
MSE Rm 2036 Cook Hall
<br>
2220 N Campus Drive
<br>
Northwestern University
<br>
Evanston, IL 60208, USA
<br>
Tel: (847) 491-3996 Fax: (847) 491-7820
<br>
Web: www.numis.northwestern.edu
<br>
Chair, Commission on Electron Crystallography of IUCR
<br>
www.numis.northwestern.edu/
<br>
Electron crystallography is the branch of science that uses electron
<br>
scattering and imaging to study the structure of matter.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11915.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Maybe in reply to:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
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
