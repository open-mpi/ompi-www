<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 19:55:36 2007" -->
<!-- isoreceived="20070917235536" -->
<!-- sent="Mon, 17 Sep 2007 19:55:28 -0400" -->
<!-- isosent="20070917235528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_file_set_view" -->
<!-- id="EA71BAF0-6A71-43EF-9C2A-34F8DBCE77F8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD456ADB_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-17 19:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4033.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using the MPI F90 bindings perchance?
<br>
<p>If so, the issue could be that the prototype for MPI_FILE_SET_VIEW is:
<br>
<p>interface MPI_File_set_view
<br>
<p>subroutine MPI_File_set_view(fh, disp, etype, filetype, datarep, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-config.h'
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: fh
<br>
&nbsp;&nbsp;&nbsp;integer(kind=MPI_OFFSET_KIND), intent(in) :: disp
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: etype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: filetype
<br>
&nbsp;&nbsp;&nbsp;character(len=*), intent(in) :: datarep
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: info
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_File_set_view
<br>
<p>end interface
<br>
<p>and you might need a variable to be explicitly typed &quot;integer 
<br>
(kind=MPI_OFFSET_KIND)&quot; -- perhaps there's no promotion from an  
<br>
integer constant to that type...?  I'm not enough of a fortran expert  
<br>
to know.
<br>
<p><p>On Sep 17, 2007, at 12:40 PM, Andrus, Mr. Brian (Contractor) wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a newbie at much of mpi application and try to provide support  
</span><br>
<span class="quotelev1">&gt; for various users in the hpc community.
</span><br>
<span class="quotelev1">&gt; I have run into something that I don't quite understand. I have  
</span><br>
<span class="quotelev1">&gt; some code that is meant to open a file for reading, but at compile  
</span><br>
<span class="quotelev1">&gt; time I get &quot;Could not resolve generic procedure mpi_file_set_view&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.2-1 compiled with Torque and the PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The oddity is that when I change the line from:
</span><br>
<span class="quotelev1">&gt;         call MPI_FILE_SET_VIEW(fh, 0, MPI_REAL4, MPI_REAL4,  
</span><br>
<span class="quotelev1">&gt; 'native', MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev1">&gt; To:
</span><br>
<span class="quotelev1">&gt;         call MPI_FILE_SET_VIEW(fh, empty, MPI_REAL4, MPI_REAL4,  
</span><br>
<span class="quotelev1">&gt; 'native', MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It compiles fine. I don't understand why I get an error when  
</span><br>
<span class="quotelev1">&gt; passing a literal integer rather than using a variable for a  
</span><br>
<span class="quotelev1">&gt; placeholder for the displacement argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any feedback or information to help me learn is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Andrus perotsystems
</span><br>
<span class="quotelev1">&gt; Site Manager | Sr. Computer Scientist
</span><br>
<span class="quotelev1">&gt; Naval Research Lab
</span><br>
<span class="quotelev1">&gt; 7 Grace Hopper Ave, Monterey, CA  93943
</span><br>
<span class="quotelev1">&gt; Phone (831) 656-4839 | Fax (831) 656-4866
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4035.php">Reuti: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>Previous message:</strong> <a href="4033.php">Josh Hursey: "Re: [OMPI users] another mpirun + xgrid question"</a>
<li><strong>In reply to:</strong> <a href="4029.php">Andrus, Mr. Brian (Contractor): "[OMPI users] mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="4036.php">Michael: "Re: [OMPI users] mpi_file_set_view"</a>
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
