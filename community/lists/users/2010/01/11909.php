<?
$subject_val = "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 10:57:56 2010" -->
<!-- isoreceived="20100128155756" -->
<!-- sent="Thu, 28 Jan 2010 09:57:45 -0600" -->
<!-- isosent="20100128155745" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes" -->
<!-- id="876512661001280757u1d25cb2clc3b53a12cff90d43_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Trapping fortran I/O errors leaving zombie mpi processes<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 10:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Previous message:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Reply:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to find out if there is any way to create an error-handler
<br>
or something else that will trap an error exit from the run-time
<br>
library due to a fortran I/O error, or possibly some openmpi calls or
<br>
options that will do the same thing.
<br>
<p>Let me expand a little. I am working with a very larger fortran 90
<br>
code written by many people that uses mpi. While some of the
<br>
read/write statements have an ERR= in them, not all do and it is a big
<br>
job to add this to everyone (and not miss some). With some flavors of
<br>
mpi (openmpi is one) if one process encounters an I/O error that
<br>
process will crash, and the other ones can hang because no
<br>
termination/abort signal is sent to them &#226;&#128;&#147; this seems to be
<br>
implementation dependent.
<br>
<p>I have added some c/icc signal handlers and while these work and can
<br>
be used to send an mpi_abort signal, none of them catch a fortran I/O
<br>
error.
<br>
<p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11910.php">Justin Watson: "[OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>Previous message:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Reply:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
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
