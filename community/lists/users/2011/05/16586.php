<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 23:23:20 2011" -->
<!-- isoreceived="20110520032320" -->
<!-- sent="Thu, 19 May 2011 20:24:25 -0700" -->
<!-- isosent="20110520032425" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="1305861865.4284.104.camel_at_cedar.reachone.com" -->
<!-- inreplyto="EEFB638F-72F1-4208-8EA2-4F25F610C47B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with MPI-IO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 23:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Previous message:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for looking at my problem.  Sounds like you did reproduce my
<br>
problem.  I have added some comments below
<br>
<p>On Thu, 2011-05-19 at 22:30 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Props for that testio script.  I think you win the award for &quot;most easy to reproduce test case.&quot;  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice that some of the lines went over 72 columns, so I renamed the file x.f90 and changed all the comments from &quot;c&quot; to &quot;!&quot; and joined the two &amp;-split lines.  The error about implicit type for lenr went away, but then when I enabled better type checking by using &quot;use mpi&quot; instead of &quot;include 'mpif.h'&quot;, I got the following:
</span><br>
<p>What fortran compiler did you use?
<br>
<p>In the original script my Intel compile used the -132 option, 
<br>
allowing up to that many columns per line.  I still think in
<br>
F77 fortran much of the time, and use 'c' for comments out
<br>
of habit.  The change to '!' doesn't make any difference.
<br>
<p><p><span class="quotelev1">&gt; x.f90:99.77:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
</span><br>
<span class="quotelev1">&gt;                                                                            1  
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic 'mpi_type_indexed' at (1)
</span><br>
<p>Hmmm, very strange, since I am looking right at the MPI standard
<br>
documents with that routine documented.  I too get this compile failure
<br>
when I switch to 'use mpi'.  Could that be a problem with the Open MPI
<br>
fortran libraries???
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at our mpi F90 module and see the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; interface MPI_Type_indexed
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Type_indexed(count, array_of_blocklengths, array_of_displacements, oldtype, newtype, ierr)
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: array_of_blocklengths
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: array_of_displacements
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: oldtype
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: newtype
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Type_indexed
</span><br>
<span class="quotelev1">&gt; end interface
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't quite grok the syntax of the &quot;allocatable&quot; type ijdisp, so that might be the problem here...?
</span><br>
<p>Just a standard F90 'allocatable' statement.  I've written thousands
<br>
just like it.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless, I'm not entirely sure if the problem is the &gt;72 character lines, but then when that is gone, I'm not sure how the allocatable stuff fits in...  (I'm not enough of a Fortran programmer to know)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Anyone else out that who can comment????
<br>
<p><p>T. Rosmond
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 10, 2011, at 7:14 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would appreciate someone with experience with MPI-IO look at the
</span><br>
<span class="quotelev2">&gt; &gt; simple fortran program gzipped and attached to this note.  It is
</span><br>
<span class="quotelev2">&gt; &gt; imbedded in a script so that all that is necessary to run it is do:
</span><br>
<span class="quotelev2">&gt; &gt; 'testio' from the command line.  The program generates a small 2-D input
</span><br>
<span class="quotelev2">&gt; &gt; array, sets up an MPI-IO environment, and write a 2-D output array
</span><br>
<span class="quotelev2">&gt; &gt; twice, with the only difference being the displacement arrays used to
</span><br>
<span class="quotelev2">&gt; &gt; construct the indexed datatype.  For the first write, simple
</span><br>
<span class="quotelev2">&gt; &gt; monotonically increasing displacements are used, for the second the
</span><br>
<span class="quotelev2">&gt; &gt; displacements are 'shuffled' in one dimension.  They are printed during
</span><br>
<span class="quotelev2">&gt; &gt; the run.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For the first case the file is written properly, but for the second the
</span><br>
<span class="quotelev2">&gt; &gt; program hangs on MPI_FILE_WRITE_AT_ALL and must be aborted manually.
</span><br>
<span class="quotelev2">&gt; &gt; Although the program is compiled as an mpi program, I am running on a
</span><br>
<span class="quotelev2">&gt; &gt; single processor, which makes the problem more puzzling.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The program should be relatively self-explanatory, but if more
</span><br>
<span class="quotelev2">&gt; &gt; information is needed, please ask.  I am on an 8 core Xeon based Dell
</span><br>
<span class="quotelev2">&gt; &gt; workstation running Scientific Linux 5.5, Intel fortran 12.0.3, and
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.5.3.  I have also attached output from 'ompi_info'.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;testio.gz&gt;&lt;info_ompi.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Previous message:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
