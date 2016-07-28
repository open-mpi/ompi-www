<?
$subject_val = "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 01:04:15 2015" -->
<!-- isoreceived="20151209060415" -->
<!-- sent="Wed, 9 Dec 2015 15:04:07 +0900" -->
<!-- isosent="20151209060407" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1" -->
<!-- id="5667C457.50908_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 01:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28188.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>your program works fine with mpich, and this is very likely an OpenMPI bug
<br>
<p>here is an intermediate patch that solves your problem, but i still have 
<br>
to fully test
<br>
<p>Best regards,
<br>
<p>Gilles
<br>
<p>On 12/9/2015 2:56 AM, GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noticed a change in behavior with subarray datatypes in OpenMPI 1.10.1 where the lower bounds and extents are different than previous versions.  This leads to incorrect displacements when using the subarrays with MPI-IO.  I've attached a sample code for 2 processors the shows the issue.  When run on 2 processors, the program will decompose a 10x10 array of real(8) elements into two subarrays, dimensioned 5x10 each.  It then serially writes a file with two full arrays, x and y, with values between 1.0 and 10.0, that will then be read in via MPI-IO with the unique subarrays created on each processor, where rank 0 gets all x &lt;= 5.0, and rank 1 gets all x &gt; 5.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- OpenMPI version 1.10.0 gives the correct behavior with the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FULL ARRAY SIZE: 10 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANK = 0
</span><br>
<span class="quotelev1">&gt;     SUBARRAY DIMENSIONS :  5, 10
</span><br>
<span class="quotelev1">&gt;     SUBARRAY INDICES    :  0,  0
</span><br>
<span class="quotelev1">&gt;     LOWER BOUND : 0
</span><br>
<span class="quotelev1">&gt;     EXTENT      : 800
</span><br>
<span class="quotelev1">&gt;     X-VALUES :   1.0  2.0  3.0  4.0  5.0
</span><br>
<span class="quotelev1">&gt;     Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANK = 1
</span><br>
<span class="quotelev1">&gt;     SUBARRAY DIMENSIONS :  5, 10
</span><br>
<span class="quotelev1">&gt;     SUBARRAY INDICES    :  5,  0
</span><br>
<span class="quotelev1">&gt;     LOWER BOUND : 0
</span><br>
<span class="quotelev1">&gt;     EXTENT      : 800
</span><br>
<span class="quotelev1">&gt;     X-VALUES :   6.0  7.0  8.0  9.0 10.0
</span><br>
<span class="quotelev1">&gt;     Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- OpenMPI version 1.10.1 results in the following, where you will notice different lower bounds and extents resulting in the wrong y-values on rank 0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANK = 0
</span><br>
<span class="quotelev1">&gt;     SUBARRAY DIMENSIONS :  5, 10
</span><br>
<span class="quotelev1">&gt;     SUBARRAY INDICES    :  0,  0
</span><br>
<span class="quotelev1">&gt;     LOWER BOUND : 0
</span><br>
<span class="quotelev1">&gt;     EXTENT      : 760
</span><br>
<span class="quotelev1">&gt;     X-VALUES :   1.0  2.0  3.0  4.0  5.0
</span><br>
<span class="quotelev1">&gt;     Y-VALUES :   6.0  1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANK = 1
</span><br>
<span class="quotelev1">&gt;     SUBARRAY DIMENSIONS :  5, 10
</span><br>
<span class="quotelev1">&gt;     SUBARRAY INDICES    :  5,  0
</span><br>
<span class="quotelev1">&gt;     LOWER BOUND : 40
</span><br>
<span class="quotelev1">&gt;     EXTENT      : 760
</span><br>
<span class="quotelev1">&gt;     X-VALUES :   6.0  7.0  8.0  9.0 10.0
</span><br>
<span class="quotelev1">&gt;     Y-VALUES :   1.0  2.0  3.0  4.0  5.0  6.0  7.0  8.0  9.0 10.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a bug with OpenMPI 1.10.1 or am I assuming something incorrectly in my program?  I realize it would be best to read all the data through one call to MPI_FILE_READ_ALL; however, this sample program is a very simple example of a much more complex program that cannot buffer the I/O so easily, so I am compelled to stick with successive reads of the subarray datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Dan Garmann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PROGRAM test_extent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     INTEGER, PARAMETER :: num_dims = 2
</span><br>
<span class="quotelev1">&gt;     INTEGER :: ierr, num_procs, i, j, n, myrank, subarray_type, subsize, arrsize, fid
</span><br>
<span class="quotelev1">&gt;     INTEGER, DIMENSION(num_dims) :: arrdim, subdim, subind
</span><br>
<span class="quotelev1">&gt;     INTEGER(KIND=MPI_ADDRESS_KIND) :: lower_bound, extent
</span><br>
<span class="quotelev1">&gt;     REAL(KIND=8), DIMENSION(10,10) :: x, y
</span><br>
<span class="quotelev1">&gt;     REAL(KIND=8), DIMENSION( 5,10) :: xsub, ysub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CALL MPI_INIT( ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_COMM_RANK( mpi_comm_world, myrank, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_COMM_SIZE( mpi_comm_world, num_procs, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     arrdim = (/ 10, 10 /)    ! Full array dimensions
</span><br>
<span class="quotelev1">&gt;     subdim = (/  5, 10 /)  ! Sub-array dimensions
</span><br>
<span class="quotelev1">&gt;     subind = (/ myrank*5, 0 /) ! Sub-array stating index in full array (base 0)
</span><br>
<span class="quotelev1">&gt;     arrsize = PRODUCT(arrdim) ! number of elements in full array
</span><br>
<span class="quotelev1">&gt;     subsize = PRODUCT(subdim) ! number of elements in sub-array
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CALL MPI_TYPE_CREATE_SUBARRAY( num_dims, arrdim, subdim, subind, &amp;
</span><br>
<span class="quotelev1">&gt;     &amp;                              MPI_ORDER_FORTRAN, MPI_REAL8, subarray_type, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_TYPE_COMMIT ( subarray_type, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_TYPE_GET_EXTENT( subarray_type, lower_bound, extent, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ! Write temporary file for testing MPI-IO
</span><br>
<span class="quotelev1">&gt;     IF (myrank == 0) THEN
</span><br>
<span class="quotelev1">&gt;        DO j = 1, 10
</span><br>
<span class="quotelev1">&gt;           DO i = 1, 10
</span><br>
<span class="quotelev1">&gt;              x(i,j) = REAL(i,KIND=8)
</span><br>
<span class="quotelev1">&gt;              y(i,j) = REAL(j,KIND=8)
</span><br>
<span class="quotelev1">&gt;           END DO
</span><br>
<span class="quotelev1">&gt;        END DO
</span><br>
<span class="quotelev1">&gt;        OPEN(UNIT=1,FILE='io_test.dat',FORM='UNFORMATTED',ACCESS='STREAM',ACTION='WRITE',STATUS='REPLACE')
</span><br>
<span class="quotelev1">&gt;        WRITE(1) x, y
</span><br>
<span class="quotelev1">&gt;        CLOSE(1)
</span><br>
<span class="quotelev1">&gt;     END IF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ! Open test file and read using MPI-IO with the sub-array datatype
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FILE_OPEN( mpi_comm_world, 'io_test.dat', MPI_MODE_RDONLY, MPI_INFO_NULL, fid, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FILE_SET_VIEW( fid, 0_MPI_OFFSET_KIND, MPI_REAL8, subarray_type, 'NATIVE', MPI_INFO_NULL, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FILE_READ_ALL( fid, xsub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FILE_READ_ALL( fid, ysub, subsize, MPI_REAL8, MPI_STATUS_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FILE_CLOSE( fid, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ! Write output to screen
</span><br>
<span class="quotelev1">&gt;     IF (myrank == 0) WRITE(*,'(A,I0,1X,I0)') 'FULL ARRAY SIZE: ', arrdim
</span><br>
<span class="quotelev1">&gt;     DO n = 0, num_procs-1
</span><br>
<span class="quotelev1">&gt;        IF (myrank == n) THEN
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(/A,I0)') 'RANK = ', myrank
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(3X,A,I2,&quot;, &quot;,I2)') 'SUBARRAY DIMENSIONS : ', subdim
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(3X,A,I2,&quot;, &quot;,I2)') 'SUBARRAY INDICES    : ', subind
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(2(3X,A,I0))') 'LOWER BOUND : ', lower_bound
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(3X,A,I0)') 'EXTENT      : ', extent
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(3X,A, 5F5.1)') 'X-VALUES : ', xsub(:,1)
</span><br>
<span class="quotelev1">&gt;           WRITE(*,'(3X,A,10F5.1)') 'Y-VALUES : ', ysub(1,:)
</span><br>
<span class="quotelev1">&gt;        END IF
</span><br>
<span class="quotelev1">&gt;        CALL MPI_BARRIER( mpi_comm_world, ierr )
</span><br>
<span class="quotelev1">&gt;     END DO
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FINALIZE( ierr )
</span><br>
<span class="quotelev1">&gt;     STOP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; END PROGRAM test_extent
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28142.php">http://www.open-mpi.org/community/lists/users/2015/12/28142.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28143/create_subarray.diff">create_subarray.diff</a>
</ul>
<!-- attachment="create_subarray.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28144.php">Paul Kapinos: "[OMPI users] OMPIO correctnes issues"</a>
<li><strong>Previous message:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28188.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
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
