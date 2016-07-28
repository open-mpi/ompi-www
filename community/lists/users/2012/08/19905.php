<?
$subject_val = "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 15:24:42 2012" -->
<!-- isoreceived="20120807192442" -->
<!-- sent="Tue, 7 Aug 2012 15:24:26 -0400" -->
<!-- isosent="20120807192426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface" -->
<!-- id="D99111CC-B1B0-47E6-B14C-13D2C880B406_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFwt5fCWUuaZ_6RLL-zWtBbQi=WdAJt=VfXPXOyr0XLxhQkJuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 15:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19904.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 7, 2012, at 3:13 PM, Paul Romano wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your response Jeff. My offset is of kind MPI_OFFSET_KIND which leads me to believe it is the derived type that is causing the compilation error. I'm also able to successfully compile and run the same code using MPICH2.
</span><br>
<p>That's because MPICH2 doesn't include an F90 interface for MPI_FILE_READ_AT, so it falls back to the F77-style matching (meaning: no parameter checking at all :-( ).
<br>
<p>Alternatively, you could compile OMPI with f90-size set to &quot;small&quot;, and then MPI_FILE_READ_AT won't be prototyped, and you should be ok.
<br>
<p><span class="quotelev1">&gt; Out of curiousity, how is it that some of the more standard MPI routines in the F90 interface such as MPI_SEND are able to accept derived types for buffers whereas parallel I/O routines are not?
</span><br>
<p>They aren't.  You should run into the same issues with MPI_SEND as you do with MPI_FILE_READ AT...
<br>
<p>FWIW, you might want to try OMPI's trunk tarball from last night with icc/icpc/ifort, and try the new &quot;mpi&quot; module.  *All* MPI subroutines are prototyped in the &quot;mpi&quot; module (including those with choice buffers -- we did some magic to make that work).  There's no more trivial/small/medium/large size &quot;mpi&quot; module.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a>
<br>
<p>Note that gfortran doesn't yet support the magic we need (although they're working on it), so if you use gfortran, you get essentially the same &quot;mpi&quot; module that is in OMPI 1.6.
<br>
<p>If you're feeling adventurous, use the new mpi_f08 module.  The Big Difference is that MPI handles have unique types (not INTEGER).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type(MPI_Comm) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI_COMM_WORLD
<br>
<p>But you can interchange the new handle types with legacy MPI code by accessing the MPI_VAL member; it's the same old INTEGER handle that you're used to.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type(MPI_Comm) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: old_style_comm_handle
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;old_style_comm_handle = comm%MPI_VAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm%MPI_VAL = old_style_comm_handle
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Previous message:</strong> <a href="19904.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
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
