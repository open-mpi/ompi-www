<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 13:04:25 2011" -->
<!-- isoreceived="20111214180425" -->
<!-- sent="Wed, 14 Dec 2011 10:04:15 -0800" -->
<!-- isosent="20111214180415" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4EE8E51F.3090906_at_atmos.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5375413-65CF-4053-B4FC-D2193682D3B7_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 13:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, sub array passing is part of the F90 standard (at least 
<br>
according to every document I can find), and not an Intel extension. So 
<br>
if it doesn't work you should complain to the compiler company. One of 
<br>
the reasons for using it is that the compiler should be optimized for 
<br>
whatever method they chose to use. As there are multiple options in the 
<br>
F90 standard for how arrays get passed, it is not really a good idea to 
<br>
circumvent the official method. Using user defined data types is great 
<br>
as long as the compiler chooses to do a simple pointer pass, however if 
<br>
they use the copy in/out option you will be making much larger temporary 
<br>
arrays than if you just pass the correct subarray. Anyway, this is not 
<br>
really an MPI issue as much as an F90 bug in your compiler.
<br>
<p>On 12/14/11 08:57, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From my mere MPI and Fortran-90 user point of view,
</span><br>
<span class="quotelev1">&gt; I think that the solution offered by the MPI standard [at least up to MPI-2]
</span><br>
<span class="quotelev1">&gt; to address the problem of non-contiguous memory layouts is to use MPI user-defined types,
</span><br>
<span class="quotelev1">&gt; as I pointed out in my previous email.
</span><br>
<span class="quotelev1">&gt; I like this solution because it is portable and doesn't require the allocation of
</span><br>
<span class="quotelev1">&gt; temporary arrays, and the additional programming effort is not that big.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I know, MPI doesn't parse or comply with the Fortran-90
</span><br>
<span class="quotelev1">&gt; array-section notation and syntax.  All buffers in the MPI calls are pointers/addresses to the
</span><br>
<span class="quotelev1">&gt; first element on the buffer, which will  be tracked according to the number of elements passed
</span><br>
<span class="quotelev1">&gt; to the MPI call, and according to the MPI type passed to the MPI routine [which should be
</span><br>
<span class="quotelev1">&gt; a user-defined type, if you need to implement a fancy memory layout].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That MPI doesn't understand Fortran-90 array-sections doesn't surprise me so much.
</span><br>
<span class="quotelev1">&gt; I think Lapack doesn't do it either, and many other legitimate Fortran libraries don't
</span><br>
<span class="quotelev1">&gt; 'understand' array-sections either.
</span><br>
<span class="quotelev1">&gt; FFTW, for instance, goes a long way do define its own mechanism to
</span><br>
<span class="quotelev1">&gt; specify fancy memory layouts independently of the Fortran-90 array-section notation.
</span><br>
<span class="quotelev1">&gt; Amongst the libraries with Fortran interfaces that I've used, MPI probably provides the most
</span><br>
<span class="quotelev1">&gt; flexible and complete mechanism to describe memory layout, through user-defined types.
</span><br>
<span class="quotelev1">&gt; In your case I think the work required to declare a MPI_TYPE_VECTOR to handle your
</span><br>
<span class="quotelev1">&gt; table 'tab' is not really big or complicated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As two other list subscribers mentioned, and you already tried,
</span><br>
<span class="quotelev1">&gt; the Intel compiler seems to offer an extension
</span><br>
<span class="quotelev1">&gt; to deal with this, and shortcut the use of MPI user-defined types.
</span><br>
<span class="quotelev1">&gt; This Intel compiler extension apparently uses under the hood the same idea of a
</span><br>
<span class="quotelev1">&gt; temporary array that you used programatically in one of the 'bide' program versions
</span><br>
<span class="quotelev1">&gt; that you sent in your original message.
</span><br>
<span class="quotelev1">&gt; The temporary array is used to ship data to/from contiguous/non-contiguous memory before/after the MPI call is invoked.
</span><br>
<span class="quotelev1">&gt; I presume this Intel compiler extension would work with libraries other than MPI,
</span><br>
<span class="quotelev1">&gt; whenever the library doesn't understand the Fortran-90 array-section notation.
</span><br>
<span class="quotelev1">&gt; I never used this extension, though.
</span><br>
<span class="quotelev1">&gt; For one thing, this solution may not be portable to other compilers.
</span><br>
<span class="quotelev1">&gt; Another aspect to consider is how much 'under the hood memory allocation' this solution
</span><br>
<span class="quotelev1">&gt; would require if the array you pass to MPI_BCAST is really big,
</span><br>
<span class="quotelev1">&gt; and how much this may impact performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 11:03 AM, Patrick Begou wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Thanks all for your anwers. yes, I understand well that it is a non contiguous memory access problem as the MPI_BCAST should wait for a pointer on a valid memory  zone. But I'm surprised that with the MPI module usage Fortran does not hide this discontinuity in a contiguous temporary copy of the array. I've spent some time to build openMPI with g++/gcc/ifort (to create the right mpi module) and ran some additional tests:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Default OpenMPI is openmpi-1.2.8-17.4.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # module load openmpi
</span><br>
<span class="quotelev2">&gt;&gt; # mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;             0           1           2           3           0           1           2           3           0           1           2           3           0           1           2           3
</span><br>
<span class="quotelev2">&gt;&gt; # module unload openmpi
</span><br>
<span class="quotelev2">&gt;&gt; The result is Ok but sometime it hangs (when I require are a lot of processes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With OpenMPI 1.4.4 and gfortran from gcc-fortran-4.5-19.1.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # module load openmpi-1.4.4-gcc-gfortran
</span><br>
<span class="quotelev2">&gt;&gt; # mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;             0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1           0          -1          -1          -1
</span><br>
<span class="quotelev2">&gt;&gt; # module unload openmpi-1.4.4-gcc-gfortran
</span><br>
<span class="quotelev2">&gt;&gt; Node 0 only update the global array with it's subarray. (i only print node 0 result)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With OpenMPI 1.4.4 and ifort 10.1.018 (yes, it's quite old, I have the latest one but it isn't installed!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # module load openmpi-1.4.4-gcc-intel
</span><br>
<span class="quotelev2">&gt;&gt; # mpif90 ess.F90&amp;&amp;  mpirun -np 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; ess.F90(15): (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev2">&gt;&gt;             0          -1          -1          -1           0          -1
</span><br>
<span class="quotelev2">&gt;&gt;            -1          -1           0          -1          -1          -1
</span><br>
<span class="quotelev2">&gt;&gt;             0          -1          -1          -1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # mpif90 -check arg_temp_created ess.F90&amp;&amp;  mpirun -np 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; gives a lot of messages like:
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: warning (402): fort: (1): In call to MPI_BCAST1DI4, an array temporary was created for argument #1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So a temporary array is created for each call. So where is the problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About the fortran compiler, I'm using similar behavior (non contiguous subarrays) in MPI_sendrecv calls and all is working fine: I ran some intensive tests from 1 to 128 processes on my quad-core workstation. This Fortran solution was easier than creating user defined data types.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you reproduce this behavior with the test case ? What are your OpenMPI and Gfortran/ifort versions ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PROGRAM bide
</span><br>
<span class="quotelev2">&gt;&gt; USE mpi
</span><br>
<span class="quotelev2">&gt;&gt;     IMPLICIT NONE
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: nbcpus
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: my_rank
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER :: ierr,i,buf
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER, ALLOCATABLE:: tab(:,:)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      CALL MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      CALL MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      CALL MPI_COMM_SIZE(MPI_COMM_WORLD,nbcpus,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      ALLOCATE (tab(0:nbcpus-1,4))
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      tab(:,:)=-1
</span><br>
<span class="quotelev2">&gt;&gt;      tab(my_rank,:)=my_rank
</span><br>
<span class="quotelev2">&gt;&gt;      DO i=0,nbcpus-1
</span><br>
<span class="quotelev2">&gt;&gt;         CALL MPI_BCAST(tab(i,:),4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      ENDDO
</span><br>
<span class="quotelev2">&gt;&gt;      IF (my_rank .EQ. 0) print*,tab
</span><br>
<span class="quotelev2">&gt;&gt;      CALL MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; END PROGRAM bide
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- =============================================================== | Equipe M.O.S.T. | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a> | | Patrick BEGOU | ------------ | | LEGI | mailto:Patrick.Begou_at_[hidden] | | BP 53 X | Tel 04 76 82 51 35 | | 38041 GRENOBLE CEDEX | Fax 04 76 82 52 71 | ===============================================================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;      
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
<li><strong>Next message:</strong> <a href="17965.php">Fernanda Oliveira: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17959.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
