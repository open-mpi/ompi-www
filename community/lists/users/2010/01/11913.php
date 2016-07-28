<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 14:00:17 2010" -->
<!-- isoreceived="20100128190017" -->
<!-- sent="Thu, 28 Jan 2010 14:00:12 -0500" -->
<!-- isosent="20100128190012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses" -->
<!-- id="A53D0BD1-95A6-4AAC-A607-818CCA6F97E3_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="876512661001280757u1d25cb2clc3b53a12cff90d43_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 14:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Maybe reply:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2010, at 10:57 AM, Laurence Marks wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to find out if there is any way to create an error-handler
</span><br>
<span class="quotelev1">&gt; or something else that will trap an error exit from the run-time
</span><br>
<span class="quotelev1">&gt; library due to a fortran I/O error, or possibly some openmpi calls or
</span><br>
<span class="quotelev1">&gt; options that will do the same thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me expand a little. I am working with a very larger fortran 90
</span><br>
<span class="quotelev1">&gt; code written by many people that uses mpi. While some of the
</span><br>
<span class="quotelev1">&gt; read/write statements have an ERR= in them, not all do and it is a big
</span><br>
<span class="quotelev1">&gt; job to add this to everyone (and not miss some). With some flavors of
</span><br>
<span class="quotelev1">&gt; mpi (openmpi is one) if one process encounters an I/O error that
</span><br>
<span class="quotelev1">&gt; process will crash, and the other ones can hang because no
</span><br>
<span class="quotelev1">&gt; termination/abort signal is sent to them &#150; this seems to be
</span><br>
<span class="quotelev1">&gt; implementation dependent.
</span><br>
<p>That's odd.  What version of Open MPI are you using?
<br>
<p>If one process dies prematurely in Open MPI (i.e., before MPI_Finalize), all the others should be automatically killed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11909.php">Laurence Marks: "[OMPI users] Trapping fortran I/O errors leaving zombie mpi processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Maybe reply:</strong> <a href="11914.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
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
