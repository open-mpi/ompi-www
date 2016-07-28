<?
$subject_val = "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 15:01:49 2012" -->
<!-- isoreceived="20120807190149" -->
<!-- sent="Tue, 7 Aug 2012 15:01:44 -0400" -->
<!-- isosent="20120807190144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface" -->
<!-- id="1338F881-63AF-4854-960D-D763C070F367_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFwt5fDn1MzZ0vavbx6Nf3Ut1FkLucs8ua-GQSLwu9r+86t2Qg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-08-07 15:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A common misunderstanding with this subroutine is that offset must be an INTEGER(KIND=MPI_OFFSET_KIND).  OMPI 1.6's F90 interface (and earlier versions) won't work with derived datatypes as the buffer, either.  OMPI 1.7 has a wholly-reimplemented &quot;mpi&quot; module that allows derived datatypes as the buffer when used with non-gfortran compilers (e.g., fort).  It also has the the &quot;mpi_f08&quot; MPI-3 module, which offers many nice things beyond the &quot;mpi&quot; module.
<br>
<p>Here's pseudocode for the prototype of the MPI_FILE_READ_AT subroutine:
<br>
<p>-----
<br>
subroutine MPI_FILE_READ_AT(fh, offset, buf, count, datatype, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, ierr)
<br>
&nbsp;&nbsp;include 'mpif-config.h'
<br>
&nbsp;&nbsp;integer, intent(in) :: fh
<br>
&nbsp;&nbsp;integer(kind=MPI_OFFSET_KIND), intent(in) :: offset
<br>
&nbsp;&nbsp;&lt;type&gt;, intent(out) :: buf
<br>
&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;integer, intent(in) :: datatype
<br>
&nbsp;&nbsp;integer, dimension(MPI_STATUS_SIZE), intent(out) :: status
<br>
&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_FILE_READ_AT
<br>
-----
<br>
<p>If your offset parameter is a regular INTEGER, then the compiler fails with a non-helpful error.  Meaning: the error message is *correct*, but not exceedingly helpful.  :-)  It's basically trying to tell you &quot;I couldn't find a version of MPI_FILE_READ_AT that matches the parameters you passed.&quot;
<br>
<p><p><p>On Aug 6, 2012, at 4:09 PM, Paul Romano wrote:
<br>
<p><span class="quotelev1">&gt; When I try to use parallel I/O routines like MPI_File_write_at or MPI_File_read_at with the buffer argument being a derived datatype, I am unable to compile and just get an error of the nature:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_FILE_READ_AT(fh, offset, buffer, count, datatype, status, ierr)
</span><br>
<span class="quotelev1">&gt;                                                                                1                      
</span><br>
<span class="quotelev1">&gt;     Error: There is no specific subroutine for the generic 'mpi_file_read_at' at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.6 compiled with --with-mpi-f90-size=medium. I've also tried both gfortran and ifort, and both give the same compilation error. Has anyone else seen this behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19901.php">Rob Latham: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>In reply to:</strong> <a href="19896.php">Paul Romano: "[OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Reply:</strong> <a href="19903.php">Paul Romano: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
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
