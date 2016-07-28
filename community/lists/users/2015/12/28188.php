<?
$subject_val = "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 11:42:56 2015" -->
<!-- isoreceived="20151218164256" -->
<!-- sent="Fri, 18 Dec 2015 16:42:47 +0000" -->
<!-- isosent="20151218164247" -->
<!-- name="GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA" -->
<!-- email="daniel.garmann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1" -->
<!-- id="4641861431110A4D99D995E4B7CC6B4511BCBD74_at_52ZHTX-D02-01A.area52.afnoapps.usaf.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4641861431110A4D99D995E4B7CC6B4511BB4F3F_at_52ZHTX-D02-01A.area52.afnoapps.usaf.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1<br>
<strong>From:</strong> GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA (<em>daniel.garmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-18 11:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28189.php">Ralph Castain: "[OMPI users] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="28187.php">Ralph Castain: "Re: [OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>In reply to:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,

Thanks for the confirmation and patch.  Do you expect the fix to be implemented in OpenMPI 1.10.2?

Thanks,
Dan

________________________________________
From: users [users-bounces_at_[hidden]] on behalf of GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA [daniel.garmann_at_[hidden]]
Sent: Tuesday, December 08, 2015 12:56 PM
To: users_at_[hidden]
Subject: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1

Hello all,

I've noticed a change in behavior with subarray datatypes in OpenMPI 1.10.1 where the lower bounds and extents are different than previous versions.  This leads to incorrect displacements when using the subarrays with MPI-IO.  I've attached a sample code for 2 processors the shows the issue.  When run on 2 processors, the program will decompose a 10x10 array of real(8) elements into two subarrays, dimensioned 5x10 each.  It then serially writes a file with two full arrays, x and y, with values between 1.0 and 10.0, that will then be read in via MPI-IO with the unique subarrays created on each processor, where rank 0 gets all x &lt;= 5.0, and rank 1 gets all x &gt; 5.0.

--- OpenMPI version 1.10.0 gives the correct behavior with the following output:

FULL ARRAY SIZE: 10 10

RANK = 0
   SUBARRAY DIMENSIONS :  5, 10
   SUBARRAY INDICES    :  0,  0
   LOWER BOUND : 0
   EXTENT      : 800
   X-VALUES :   1.0  2.0  3.0  4.0  5.0
   Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0

RANK = 1
   SUBARRAY DIMENSIONS :  5, 10
   SUBARRAY INDICES    :  5,  0
   LOWER BOUND : 0
   EXTENT      : 800
   X-VALUES :   6.0  7.0  8.0  9.0 10.0
   Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0


--- OpenMPI version 1.10.1 results in the following, where you will notice different lower bounds and extents resulting in the wrong y-values on rank 0:

RANK = 0
   SUBARRAY DIMENSIONS :  5, 10
   SUBARRAY INDICES    :  0,  0
   LOWER BOUND : 0
   EXTENT      : 760
   X-VALUES :   1.0  2.0  3.0  4.0  5.0
   Y-VALUES :   6.0  1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0

RANK = 1
   SUBARRAY DIMENSIONS :  5, 10
   SUBARRAY INDICES    :  5,  0
   LOWER BOUND : 40
   EXTENT      : 760
   X-VALUES :   6.0  7.0  8.0  9.0 10.0
   Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0


Is this a bug with OpenMPI 1.10.1 or am I assuming something incorrectly in my program?  I realize it would be best to read all the data through one call to MPI_FILE_READ_ALL; however, this sample program is a very simple example of a much more complex program that cannot buffer the I/O so easily, so I am compelled to stick with successive reads of the subarray datatypes.

Any help is greatly appreciated!

Best regards,
Dan Garmann



PROGRAM test_extent

   IMPLICIT NONE

   INCLUDE 'mpif.h'

   INTEGER, PARAMETER :: num_dims = 2
   INTEGER :: ierr, num_procs, i, j, n, myrank, subarray_type, subsize, arrsize, fid
   INTEGER, DIMENSION(num_dims) :: arrdim, subdim, subind
   INTEGER(KIND=MPI_ADDRESS_KIND) :: lower_bound, extent
   REAL(KIND=8), DIMENSION(10,10) :: x, y
   REAL(KIND=8), DIMENSION( 5,10) :: xsub, ysub

   CALL MPI_INIT( ierr )
   CALL MPI_COMM_RANK( mpi_comm_world, myrank, ierr )
   CALL MPI_COMM_SIZE( mpi_comm_world, num_procs, ierr )

   arrdim = (/ 10, 10 /)    ! Full array dimensions
   subdim = (/  5, 10 /)  ! Sub-array dimensions
   subind = (/ myrank*5, 0 /) ! Sub-array stating index in full array (base 0)
   arrsize = PRODUCT(arrdim) ! number of elements in full array
   subsize = PRODUCT(subdim) ! number of elements in sub-array

   CALL MPI_TYPE_CREATE_SUBARRAY( num_dims, arrdim, subdim, subind, &amp;
   &amp;                              MPI_ORDER_FORTRAN, MPI_REAL8, subarray_type, ierr )
   CALL MPI_TYPE_COMMIT ( subarray_type, ierr )
   CALL MPI_TYPE_GET_EXTENT( subarray_type, lower_bound, extent, ierr )

   ! Write temporary file for testing MPI-IO
   IF (myrank == 0) THEN
      DO j = 1, 10
         DO i = 1, 10
            x(i,j) = REAL(i,KIND=8)
            y(i,j) = REAL(j,KIND=8)
         END DO
      END DO
      OPEN(UNIT=1,FILE='io_test.dat',FORM='UNFORMATTED',ACCESS='STREAM',ACTION='WRITE',STATUS='REPLACE')
      WRITE(1) x, y
      CLOSE(1)
   END IF

   ! Open test file and read using MPI-IO with the sub-array datatype
   CALL MPI_FILE_OPEN( mpi_comm_world, 'io_test.dat', MPI_MODE_RDONLY, MPI_INFO_NULL, fid, ierr )
   CALL MPI_FILE_SET_VIEW( fid, 0_MPI_OFFSET_KIND, MPI_REAL8, subarray_type, 'NATIVE', MPI_INFO_NULL, ierr )
   CALL MPI_FILE_READ_ALL( fid, xsub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
   CALL MPI_FILE_READ_ALL( fid, ysub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
   CALL MPI_FILE_CLOSE( fid, ierr )

   ! Write output to screen
   IF (myrank == 0) WRITE(*,'(A,I0,1X,I0)') 'FULL ARRAY SIZE: ', arrdim
   DO n = 0, num_procs-1
      IF (myrank == n) THEN
         WRITE(*,'(/A,I0)') 'RANK = ', myrank
         WRITE(*,'(3X,A,I2,&quot;, &quot;,I2)') 'SUBARRAY DIMENSIONS : ', subdim
         WRITE(*,'(3X,A,I2,&quot;, &quot;,I2)') 'SUBARRAY INDICES    : ', subind
         WRITE(*,'(2(3X,A,I0))') 'LOWER BOUND : ', lower_bound
         WRITE(*,'(3X,A,I0)') 'EXTENT      : ', extent
         WRITE(*,'(3X,A, 5F5.1)') 'X-VALUES : ', xsub(:,1)
         WRITE(*,'(3X,A,10F5.1)') 'Y-VALUES : ', ysub(1,:)
      END IF
      CALL MPI_BARRIER( mpi_comm_world, ierr )
   END DO
   CALL MPI_FINALIZE( ierr )
   STOP

END PROGRAM test_extent

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28189.php">Ralph Castain: "[OMPI users] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="28187.php">Ralph Castain: "Re: [OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>In reply to:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
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
