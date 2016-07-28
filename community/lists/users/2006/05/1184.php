<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 23:50:06 2006" -->
<!-- isoreceived="20060502035006" -->
<!-- sent="Mon, 1 May 2006 23:50:03 -0400" -->
<!-- isosent="20060502035003" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Intercomm_Merge -- Fortran" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7A7960_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Intercomm_Merge -- Fortran" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 23:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Previous message:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1168.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're absolutely right -- this is another logical type that we missed.
<br>
<p>This has now been fixed on both the trunk and the v1.1 branch; should be
<br>
in tomorrow's snapshots.
<br>
<p>Thanks!
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, April 30, 2006 12:17 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_Intercomm_Merge -- Fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_Merge( intercomm, high, newintracomm, ier )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None of the books I have state the variable type of the second  
</span><br>
<span class="quotelev1">&gt; argument for MPI_Intercomm_Merge for Fortran.  Class notes I have  
</span><br>
<span class="quotelev1">&gt; from David Cronk state it is a Logical.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In C it is an &quot;int&quot; with values of true and false.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at OpenMPI 1.1a4r9780 (&amp; openmpi-1.2a1r9780)  I find the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./ompi/mpi/f77/intercomm_merge_f.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_GENERATE_F77_BINDINGS (PMPI_INTERCOMM_MERGE,
</span><br>
<span class="quotelev1">&gt;                             pmpi_intercomm_merge,
</span><br>
<span class="quotelev1">&gt;                             pmpi_intercomm_merge_,
</span><br>
<span class="quotelev1">&gt;                             pmpi_intercomm_merge__,
</span><br>
<span class="quotelev1">&gt;                             pmpi_intercomm_merge_f,
</span><br>
<span class="quotelev1">&gt;                             (MPI_Fint *intercomm, 
</span><br>
<span class="quotelev1">&gt; MPI_Flogical *high,  
</span><br>
<span class="quotelev1">&gt; MPI_Fint *newintercomm, MPI_Fint *ierr),
</span><br>
<span class="quotelev1">&gt;                             (intercomm, high, newintercomm, ierr) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      *ierr = MPI_Intercomm_merge (c_intercomm, OMPI_LOGICAL_2_INT 
</span><br>
<span class="quotelev1">&gt; (*high),
</span><br>
<span class="quotelev1">&gt;                                   &amp;c_newcomm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This implies to me that in Fortran the second argument should be a  
</span><br>
<span class="quotelev1">&gt; logical which makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in ./ompi/mpi/f90/mpi-f90-interfaces.h, I find:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; interface MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Intercomm_merge(intercomm, high, newintercomm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: intercomm
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: high
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: newintercomm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end interface MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; which I suspect is wrong or at least incomplete with regards to the  
</span><br>
<span class="quotelev1">&gt; second argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In which case the problem is also in ./ompi/mpi/f90/scripts/mpi-f90- 
</span><br>
<span class="quotelev1">&gt; interfaces.h.sh
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; subroutine ${procedure}(intercomm, high, newintercomm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: intercomm
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: high
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: newintercomm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine ${procedure}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; start MPI_Intercomm_merge small
</span><br>
<span class="quotelev1">&gt; output_162 MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; end MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps. MPI_Comm_get_attr is fixed in both these versions.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Previous message:</strong> <a href="1183.php">Brignone, Sergio: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1168.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
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
