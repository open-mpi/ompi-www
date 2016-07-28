<?
$subject_val = "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 15:14:02 2012" -->
<!-- isoreceived="20120807191402" -->
<!-- sent="Tue, 7 Aug 2012 15:13:56 -0400" -->
<!-- isosent="20120807191356" -->
<!-- name="Paul Romano" -->
<!-- email="paul.k.romano_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface" -->
<!-- id="CAFwt5fCWUuaZ_6RLL-zWtBbQi=WdAJt=VfXPXOyr0XLxhQkJuw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1338F881-63AF-4854-960D-D763C070F367_at_cisco.com" -->
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
<strong>From:</strong> Paul Romano (<em>paul.k.romano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 15:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19904.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your response Jeff. My offset is of kind MPI_OFFSET_KIND which
<br>
leads me to believe it is the derived type that is causing the compilation
<br>
error. I'm also able to successfully compile and run the same code using
<br>
MPICH2. Out of curiousity, how is it that some of the more standard MPI
<br>
routines in the F90 interface such as MPI_SEND are able to accept derived
<br>
types for buffers whereas parallel I/O routines are not?
<br>
<p>On Tue, Aug 7, 2012 at 3:01 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A common misunderstanding with this subroutine is that offset must be an
</span><br>
<span class="quotelev1">&gt; INTEGER(KIND=MPI_OFFSET_KIND).  OMPI 1.6's F90 interface (and earlier
</span><br>
<span class="quotelev1">&gt; versions) won't work with derived datatypes as the buffer, either.  OMPI
</span><br>
<span class="quotelev1">&gt; 1.7 has a wholly-reimplemented &quot;mpi&quot; module that allows derived datatypes
</span><br>
<span class="quotelev1">&gt; as the buffer when used with non-gfortran compilers (e.g., fort).  It also
</span><br>
<span class="quotelev1">&gt; has the the &quot;mpi_f08&quot; MPI-3 module, which offers many nice things beyond
</span><br>
<span class="quotelev1">&gt; the &quot;mpi&quot; module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's pseudocode for the prototype of the MPI_FILE_READ_AT subroutine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; subroutine MPI_FILE_READ_AT(fh, offset, buf, count, datatype, &amp;
</span><br>
<span class="quotelev1">&gt;         status, ierr)
</span><br>
<span class="quotelev1">&gt;   include 'mpif-config.h'
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: fh
</span><br>
<span class="quotelev1">&gt;   integer(kind=MPI_OFFSET_KIND), intent(in) :: offset
</span><br>
<span class="quotelev1">&gt;   &lt;type&gt;, intent(out) :: buf
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: datatype
</span><br>
<span class="quotelev1">&gt;   integer, dimension(MPI_STATUS_SIZE), intent(out) :: status
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_FILE_READ_AT
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your offset parameter is a regular INTEGER, then the compiler fails
</span><br>
<span class="quotelev1">&gt; with a non-helpful error.  Meaning: the error message is *correct*, but not
</span><br>
<span class="quotelev1">&gt; exceedingly helpful.  :-)  It's basically trying to tell you &quot;I couldn't
</span><br>
<span class="quotelev1">&gt; find a version of MPI_FILE_READ_AT that matches the parameters you passed.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2012, at 4:09 PM, Paul Romano wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I try to use parallel I/O routines like MPI_File_write_at or
</span><br>
<span class="quotelev1">&gt; MPI_File_read_at with the buffer argument being a derived datatype, I am
</span><br>
<span class="quotelev1">&gt; unable to compile and just get an error of the nature:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_FILE_READ_AT(fh, offset, buffer, count, datatype, status, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;        1
</span><br>
<span class="quotelev2">&gt; &gt;     Error: There is no specific subroutine for the generic
</span><br>
<span class="quotelev1">&gt; 'mpi_file_read_at' at (1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using Open MPI 1.6 compiled with --with-mpi-f90-size=medium. I've
</span><br>
<span class="quotelev1">&gt; also tried both gfortran and ifort, and both give the same compilation
</span><br>
<span class="quotelev1">&gt; error. Has anyone else seen this behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Paul
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19904.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>In reply to:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19905.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
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
