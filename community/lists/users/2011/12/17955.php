<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:01:57 2011" -->
<!-- isoreceived="20111214160157" -->
<!-- sent="Wed, 14 Dec 2011 17:03:56 +0100" -->
<!-- isosent="20111214160356" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4EE8C8EC.2080408_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4EE647B5.9000106_at_atmos.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_BCAST and fortran subarrays<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all for your anwers. yes, I understand well that it is a non contiguous 
<br>
memory access problem as the MPI_BCAST should wait for a pointer on a valid 
<br>
memory  zone. But I'm surprised that with the MPI module usage Fortran does not 
<br>
hide this discontinuity in a contiguous temporary copy of the array. I've spent 
<br>
some time to build openMPI with g++/gcc/ifort (to create the right mpi module) 
<br>
and ran some additional tests:
<br>
<p><p>Default OpenMPI is openmpi-1.2.8-17.4.x86_64
<br>
<p># module load openmpi
<br>
# mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           1           2           3           0           1           2           3           0           1           2           3           0           1           2           3
<br>
# module unload openmpi
<br>
The result is Ok but sometime it hangs (when I require are a lot of processes)
<br>
<p>With OpenMPI 1.4.4 and gfortran from gcc-fortran-4.5-19.1.x86_64
<br>
<p># module load openmpi-1.4.4-gcc-gfortran
<br>
# mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1
<br>
# module unload openmpi-1.4.4-gcc-gfortran
<br>
Node 0 only update the global array with it's subarray. (i only print node 0 result)
<br>
<p><p>With OpenMPI 1.4.4 and ifort 10.1.018 (yes, it's quite old, I have the latest one but it isn't installed!)
<br>
<p># module load openmpi-1.4.4-gcc-intel
<br>
# mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
<br>
ess.F90(15): (col. 5) remark: LOOP WAS VECTORIZED.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0          -1          -1          -1           0          -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-1          -1           0          -1          -1          -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0          -1          -1          -1
<br>
<p># mpif90 -check arg_temp_created ess.F90&amp;&amp;  mpirun -np 4 ./a.out
<br>
gives a lot of messages like:
<br>
forrtl: warning (402): fort: (1): In call to MPI_BCAST1DI4, an array temporary was created for argument #1
<br>
<p>So a temporary array is created for each call. So where is the problem ?
<br>
<p>About the fortran compiler, I'm using similar behavior (non contiguous subarrays) in MPI_sendrecv calls and all is working fine: I ran some intensive tests from 1 to 128 processes on my quad-core workstation. This Fortran solution was easier than creating user defined data types.
<br>
<p>Can you reproduce this behavior with the test case ? What are your OpenMPI and Gfortran/ifort versions ?
<br>
<p>Thanks again
<br>
<p>Patrick
<br>
<p>The test code:
<br>
<p>PROGRAM bide
<br>
USE mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;IMPLICIT NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: nbcpus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: my_rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: ierr,i,buf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, ALLOCATABLE:: tab(:,:)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(MPI_COMM_WORLD,nbcpus,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALLOCATE (tab(0:nbcpus-1,4))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab(:,:)=-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab(my_rank,:)=my_rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO i=0,nbcpus-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_BCAST(tab(i,:),4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (my_rank .EQ. 0) print*,tab
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FINALIZE(ierr)
<br>
<p>END PROGRAM bide
<br>
<p>-- =============================================================== | Equipe 
<br>
M.O.S.T. | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a> | | Patrick BEGOU | ------------ | | LEGI | 
<br>
mailto:Patrick.Begou_at_[hidden] | | BP 53 X | Tel 04 76 82 51 35 | | 38041 
<br>
GRENOBLE CEDEX | Fax 04 76 82 52 71 | 
<br>
===============================================================
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17956.php">Dmitry N. Mikushin: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17954.php">Rolf vandeVaart: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>In reply to:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
