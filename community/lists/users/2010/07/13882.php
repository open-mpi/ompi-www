<?
$subject_val = "[OMPI users] Fortran MPI Struct with Allocatable Array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 30 16:02:48 2010" -->
<!-- isoreceived="20100730200248" -->
<!-- sent="Fri, 30 Jul 2010 16:02:43 -0400" -->
<!-- isosent="20100730200243" -->
<!-- name="Jeremy Roberts" -->
<!-- email="j.alyn.roberts_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran MPI Struct with Allocatable Array" -->
<!-- id="AANLkTinUa9+ANmKGBbsWpbT+f52w5uFXcHKKFkx-7AuD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Fortran MPI Struct with Allocatable Array<br>
<strong>From:</strong> Jeremy Roberts (<em>j.alyn.roberts_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-30 16:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to parallelize a Fortran code with rather complicated derived
<br>
types full of pointer arrays.  When I build the MPI type for sending, all
<br>
the static components are sent, but the pointer arrays are not (and retain
<br>
initial values).  I imagine this has to do with memory addresses when
<br>
creating the MPI struct, but I have no idea how to fix it.
<br>
<p>I've included a simple code illustrating my issue below.  Any suggestions?
<br>
<p>Thanks,
<br>
Jeremy
<br>
<p>program mpi_struct_example
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! declarations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type :: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real, pointer :: array(:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end type small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type(small) :: lala
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: stat, counts(1), types(1), ierr, iam, n=0, MPI_SMALL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (kind=MPI_ADDRESS_KIND) :: displs(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! initialize MPI and get my rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK( MPI_COMM_WORLD, iam, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate( lala%array(n) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lala%array = 2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! build block counts, displacements, and oldtypes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counts     = (/n/)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displs     = (/0/)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;types      = (/MPI_REAL/)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! make and commit new type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_CREATE_STRUCT( 1, counts, displs, types, MPI_SMALL, ierr
<br>
)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_COMMIT( MPI_SMALL, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (iam .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! reset the value of the array
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lala%array  = 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND( lala, 1, MPI_SMALL, 1, 1, MPI_COMM_WORLD,
<br>
ierr)       ! this doesn't work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!call MPI_SEND( lala%array, n, MPI_REAL, 1, 1, MPI_COMM_WORLD,
<br>
ierr) ! this does work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (*,*) &quot;iam &quot;,iam,&quot; and lala%array(1)  = &quot;, lala%array(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV( lala, 1, MPI_SMALL, 0, 1, MPI_COMM_WORLD, stat,
<br>
ierr )       ! this doesn't work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!call MPI_RECV( lala%array, n, MPI_REAL, 0, 1, MPI_COMM_WORLD,
<br>
stat, ierr ) ! this does work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (*,*) &quot;iam &quot;,iam,&quot; and lala%array(1)  = &quot;, lala%array(1),
<br>
&quot; ( should be 1.0)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end program mpi_struct_example
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13883.php">LB: "Re: [OMPI users] undefined reference to `mp_barrier_'"</a>
<li><strong>Previous message:</strong> <a href="13881.php">Allen Barnett: "[OMPI users] OpenIB Error in ibv_create_srq"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
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
