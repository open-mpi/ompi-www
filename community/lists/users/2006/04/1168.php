<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 30 12:16:53 2006" -->
<!-- isoreceived="20060430161653" -->
<!-- sent="Sun, 30 Apr 2006 12:16:37 -0400" -->
<!-- isosent="20060430161637" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Intercomm_Merge -- Fortran" -->
<!-- id="D7C9BB68-40F0-4A6B-8EC0-B291F7050606_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-30 12:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1184.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Intercomm_Merge( intercomm, high, newintracomm, ier )
<br>
<p>None of the books I have state the variable type of the second  
<br>
argument for MPI_Intercomm_Merge for Fortran.  Class notes I have  
<br>
from David Cronk state it is a Logical.
<br>
<p>In C it is an &quot;int&quot; with values of true and false.
<br>
<p>Looking at OpenMPI 1.1a4r9780 (&amp; openmpi-1.2a1r9780)  I find the  
<br>
following:
<br>
<p>./ompi/mpi/f77/intercomm_merge_f.c:
<br>
<p>OMPI_GENERATE_F77_BINDINGS (PMPI_INTERCOMM_MERGE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_intercomm_merge,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_intercomm_merge_,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_intercomm_merge__,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_intercomm_merge_f,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(MPI_Fint *intercomm, MPI_Flogical *high,  
<br>
MPI_Fint *newintercomm, MPI_Fint *ierr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(intercomm, high, newintercomm, ierr) )
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*ierr = MPI_Intercomm_merge (c_intercomm, OMPI_LOGICAL_2_INT 
<br>
(*high),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;c_newcomm);
<br>
<p>This implies to me that in Fortran the second argument should be a  
<br>
logical which makes sense.
<br>
<p><p>But in ./ompi/mpi/f90/mpi-f90-interfaces.h, I find:
<br>
-------------
<br>
interface MPI_Intercomm_merge
<br>
<p>subroutine MPI_Intercomm_merge(intercomm, high, newintercomm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: intercomm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: high
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: newintercomm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Intercomm_merge
<br>
<p>end interface MPI_Intercomm_merge
<br>
-------------
<br>
which I suspect is wrong or at least incomplete with regards to the  
<br>
second argument.
<br>
<p>In which case the problem is also in ./ompi/mpi/f90/scripts/mpi-f90- 
<br>
interfaces.h.sh
<br>
----------
<br>
subroutine ${procedure}(intercomm, high, newintercomm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: intercomm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: high
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: newintercomm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine ${procedure}
<br>
<p>EOF
<br>
}
<br>
<p>start MPI_Intercomm_merge small
<br>
output_162 MPI_Intercomm_merge
<br>
end MPI_Intercomm_merge
<br>
-------------
<br>
<p>Michael
<br>
<p>ps. MPI_Comm_get_attr is fixed in both these versions.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1184.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
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
