<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 08:44:49 2007" -->
<!-- isoreceived="20070918124449" -->
<!-- sent="Tue, 18 Sep 2007 08:44:44 -0400" -->
<!-- isosent="20070918124444" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_file_set_view" -->
<!-- id="0BCA945F-FF2D-420F-A94F-C854DDA7BDB6_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EA71BAF0-6A71-43EF-9C2A-34F8DBCE77F8_at_cisco.com" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 08:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2007, at 7:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Are you using the MPI F90 bindings perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, the issue could be that the prototype for MPI_FILE_SET_VIEW is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; interface MPI_File_set_view
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine MPI_File_set_view(fh, disp, etype, filetype, datarep, &amp;
</span><br>
<span class="quotelev1">&gt;          info, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-config.h'
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: fh
</span><br>
<span class="quotelev1">&gt;    integer(kind=MPI_OFFSET_KIND), intent(in) :: disp
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: etype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: filetype
</span><br>
<span class="quotelev1">&gt;    character(len=*), intent(in) :: datarep
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: info
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_File_set_view
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and you might need a variable to be explicitly typed &quot;integer
</span><br>
<span class="quotelev1">&gt; (kind=MPI_OFFSET_KIND)&quot; -...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2007, at 12:40 PM, Andrus, Mr. Brian (Contractor) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have run into something that I don't quite understand. I have
</span><br>
<span class="quotelev2">&gt;&gt; some code that is meant to open a file for reading, but at compile
</span><br>
<span class="quotelev2">&gt;&gt; time I get &quot;Could not resolve generic procedure mpi_file_set_view&quot;
</span><br>
<p>Jeff is precisely correct.  In Fortran 90 if you get a message of  
<br>
this type from the compiler it means that the variable types don't  
<br>
line up between subroutine/function and the calling code.  The only  
<br>
promotion in Fortran 90 is inline, i.e. x = i * y.  Fortran 90 is a  
<br>
strongly typed language if you use interfaces.  Unfortunately I have  
<br>
yet to see a Fortran 90 compiler that gives a obvious error message  
<br>
pointing to the specific error for these interfacing errors.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4034.php">Jeff Squyres: "Re: [OMPI users] mpi_file_set_view"</a>
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
