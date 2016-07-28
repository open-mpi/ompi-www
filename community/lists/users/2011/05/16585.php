<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 22:30:26 2011" -->
<!-- isoreceived="20110520023026" -->
<!-- sent="Thu, 19 May 2011 22:30:03 -0400" -->
<!-- isosent="20110520023003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="EEFB638F-72F1-4208-8EA2-4F25F610C47B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1305069286.4359.57.camel_at_cedar.reachone.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 22:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Props for that testio script.  I think you win the award for &quot;most easy to reproduce test case.&quot;  :-)
<br>
<p>I notice that some of the lines went over 72 columns, so I renamed the file x.f90 and changed all the comments from &quot;c&quot; to &quot;!&quot; and joined the two &amp;-split lines.  The error about implicit type for lenr went away, but then when I enabled better type checking by using &quot;use mpi&quot; instead of &quot;include 'mpif.h'&quot;, I got the following:
<br>
<p>x.f90:99.77:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  
<br>
Error: There is no specific subroutine for the generic 'mpi_type_indexed' at (1)
<br>
<p>I looked at our mpi F90 module and see the following:
<br>
<p>interface MPI_Type_indexed
<br>
subroutine MPI_Type_indexed(count, array_of_blocklengths, array_of_displacements, oldtype, newtype, ierr)
<br>
&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;integer, dimension(*), intent(in) :: array_of_blocklengths
<br>
&nbsp;&nbsp;integer, dimension(*), intent(in) :: array_of_displacements
<br>
&nbsp;&nbsp;integer, intent(in) :: oldtype
<br>
&nbsp;&nbsp;integer, intent(out) :: newtype
<br>
&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Type_indexed
<br>
end interface
<br>
<p>I don't quite grok the syntax of the &quot;allocatable&quot; type ijdisp, so that might be the problem here...?
<br>
<p>Regardless, I'm not entirely sure if the problem is the &gt;72 character lines, but then when that is gone, I'm not sure how the allocatable stuff fits in...  (I'm not enough of a Fortran programmer to know)
<br>
<p><p><p><p>On May 10, 2011, at 7:14 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I would appreciate someone with experience with MPI-IO look at the
</span><br>
<span class="quotelev1">&gt; simple fortran program gzipped and attached to this note.  It is
</span><br>
<span class="quotelev1">&gt; imbedded in a script so that all that is necessary to run it is do:
</span><br>
<span class="quotelev1">&gt; 'testio' from the command line.  The program generates a small 2-D input
</span><br>
<span class="quotelev1">&gt; array, sets up an MPI-IO environment, and write a 2-D output array
</span><br>
<span class="quotelev1">&gt; twice, with the only difference being the displacement arrays used to
</span><br>
<span class="quotelev1">&gt; construct the indexed datatype.  For the first write, simple
</span><br>
<span class="quotelev1">&gt; monotonically increasing displacements are used, for the second the
</span><br>
<span class="quotelev1">&gt; displacements are 'shuffled' in one dimension.  They are printed during
</span><br>
<span class="quotelev1">&gt; the run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the first case the file is written properly, but for the second the
</span><br>
<span class="quotelev1">&gt; program hangs on MPI_FILE_WRITE_AT_ALL and must be aborted manually.
</span><br>
<span class="quotelev1">&gt; Although the program is compiled as an mpi program, I am running on a
</span><br>
<span class="quotelev1">&gt; single processor, which makes the problem more puzzling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program should be relatively self-explanatory, but if more
</span><br>
<span class="quotelev1">&gt; information is needed, please ask.  I am on an 8 core Xeon based Dell
</span><br>
<span class="quotelev1">&gt; workstation running Scientific Linux 5.5, Intel fortran 12.0.3, and
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.5.3.  I have also attached output from 'ompi_info'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;testio.gz&gt;&lt;info_ompi.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
