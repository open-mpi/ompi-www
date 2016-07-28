<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:57:50 2011" -->
<!-- isoreceived="20111214165750" -->
<!-- sent="Wed, 14 Dec 2011 11:57:45 -0500" -->
<!-- isosent="20111214165745" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="C5375413-65CF-4053-B4FC-D2193682D3B7_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE8C8EC.2080408_at_hmg.inpg.fr" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Patrick
<br>
<p><span class="quotelev1">&gt;From my mere MPI and Fortran-90 user point of view,
</span><br>
I think that the solution offered by the MPI standard [at least up to MPI-2]
<br>
to address the problem of non-contiguous memory layouts is to use MPI user-defined types,
<br>
as I pointed out in my previous email.
<br>
I like this solution because it is portable and doesn't require the allocation of 
<br>
temporary arrays, and the additional programming effort is not that big.
<br>
<p>As far as I know, MPI doesn't parse or comply with the Fortran-90 
<br>
array-section notation and syntax.  All buffers in the MPI calls are pointers/addresses to the
<br>
first element on the buffer, which will  be tracked according to the number of elements passed
<br>
to the MPI call, and according to the MPI type passed to the MPI routine [which should be
<br>
a user-defined type, if you need to implement a fancy memory layout].
<br>
<p>That MPI doesn't understand Fortran-90 array-sections doesn't surprise me so much.
<br>
I think Lapack doesn't do it either, and many other legitimate Fortran libraries don't 
<br>
'understand' array-sections either.
<br>
FFTW, for instance, goes a long way do define its own mechanism to 
<br>
specify fancy memory layouts independently of the Fortran-90 array-section notation.
<br>
Amongst the libraries with Fortran interfaces that I've used, MPI probably provides the most
<br>
flexible and complete mechanism to describe memory layout, through user-defined types.
<br>
In your case I think the work required to declare a MPI_TYPE_VECTOR to handle your
<br>
table 'tab' is not really big or complicated.
<br>
<p>As two other list subscribers mentioned, and you already tried, 
<br>
the Intel compiler seems to offer an extension
<br>
to deal with this, and shortcut the use of MPI user-defined types.
<br>
This Intel compiler extension apparently uses under the hood the same idea of a 
<br>
temporary array that you used programatically in one of the 'bide' program versions 
<br>
that you sent in your original message.
<br>
The temporary array is used to ship data to/from contiguous/non-contiguous memory before/after the MPI call is invoked.
<br>
I presume this Intel compiler extension would work with libraries other than MPI,
<br>
whenever the library doesn't understand the Fortran-90 array-section notation.
<br>
I never used this extension, though.
<br>
For one thing, this solution may not be portable to other compilers.
<br>
Another aspect to consider is how much 'under the hood memory allocation' this solution 
<br>
would require if the array you pass to MPI_BCAST is really big, 
<br>
and how much this may impact performance.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Dec 14, 2011, at 11:03 AM, Patrick Begou wrote:
<br>
<p><span class="quotelev1">&gt; Thanks all for your anwers. yes, I understand well that it is a non contiguous memory access problem as the MPI_BCAST should wait for a pointer on a valid memory  zone. But I'm surprised that with the MPI module usage Fortran does not hide this discontinuity in a contiguous temporary copy of the array. I've spent some time to build openMPI with g++/gcc/ifort (to create the right mpi module) and ran some additional tests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default OpenMPI is openmpi-1.2.8-17.4.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # module load openmpi
</span><br>
<span class="quotelev1">&gt; # mpif90 ess.F90 &amp;&amp; mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt;            0           1           2           3           0           1           2           3           0           1           2           3           0           1           2           3
</span><br>
<span class="quotelev1">&gt; # module unload openmpi
</span><br>
<span class="quotelev1">&gt; The result is Ok but sometime it hangs (when I require are a lot of processes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With OpenMPI 1.4.4 and gfortran from gcc-fortran-4.5-19.1.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # module load openmpi-1.4.4-gcc-gfortran
</span><br>
<span class="quotelev1">&gt; # mpif90 ess.F90 &amp;&amp; mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt;            0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1
</span><br>
<span class="quotelev1">&gt; # module unload openmpi-1.4.4-gcc-gfortran
</span><br>
<span class="quotelev1">&gt; Node 0 only update the global array with it's subarray. (i only print node 0 result)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With OpenMPI 1.4.4 and ifort 10.1.018 (yes, it's quite old, I have the latest one but it isn't installed!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # module load openmpi-1.4.4-gcc-intel
</span><br>
<span class="quotelev1">&gt; # mpif90 ess.F90 &amp;&amp; mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt; ess.F90(15): (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt;            0          -1          -1          -1           0          -1
</span><br>
<span class="quotelev1">&gt;           -1          -1           0          -1          -1          -1
</span><br>
<span class="quotelev1">&gt;            0          -1          -1          -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # mpif90 -check arg_temp_created ess.F90 &amp;&amp; mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt; gives a lot of messages like:
</span><br>
<span class="quotelev1">&gt; forrtl: warning (402): fort: (1): In call to MPI_BCAST1DI4, an array temporary was created for argument #1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So a temporary array is created for each call. So where is the problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About the fortran compiler, I'm using similar behavior (non contiguous subarrays) in MPI_sendrecv calls and all is working fine: I ran some intensive tests from 1 to 128 processes on my quad-core workstation. This Fortran solution was easier than creating user defined data types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you reproduce this behavior with the test case ? What are your OpenMPI and Gfortran/ifort versions ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PROGRAM bide
</span><br>
<span class="quotelev1">&gt; USE mpi
</span><br>
<span class="quotelev1">&gt;    IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;    INTEGER :: nbcpus
</span><br>
<span class="quotelev1">&gt;    INTEGER :: my_rank
</span><br>
<span class="quotelev1">&gt;    INTEGER :: ierr,i,buf
</span><br>
<span class="quotelev1">&gt;    INTEGER, ALLOCATABLE:: tab(:,:)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CALL MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;     CALL MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
</span><br>
<span class="quotelev1">&gt;     CALL MPI_COMM_SIZE(MPI_COMM_WORLD,nbcpus,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ALLOCATE (tab(0:nbcpus-1,4))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     tab(:,:)=-1
</span><br>
<span class="quotelev1">&gt;     tab(my_rank,:)=my_rank
</span><br>
<span class="quotelev1">&gt;     DO i=0,nbcpus-1
</span><br>
<span class="quotelev1">&gt;        CALL MPI_BCAST(tab(i,:),4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;     ENDDO
</span><br>
<span class="quotelev1">&gt;     IF (my_rank .EQ. 0) print*,tab
</span><br>
<span class="quotelev1">&gt;     CALL MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END PROGRAM bide
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- =============================================================== | Equipe M.O.S.T. | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a> | | Patrick BEGOU | ------------ | | LEGI | mailto:Patrick.Begou_at_[hidden] | | BP 53 X | Tel 04 76 82 51 35 | | 38041 GRENOBLE CEDEX | Fax 04 76 82 52 71 | ===============================================================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17960.php">Gustavo Correa: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17958.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
