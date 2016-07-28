<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 12:38:23 2011" -->
<!-- isoreceived="20111212173823" -->
<!-- sent="Mon, 12 Dec 2011 12:38:18 -0500" -->
<!-- isosent="20111212173818" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="033B11CC-FFC4-4545-BD15-6829B1FDB2D2_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE61F5A.8070809_at_hmg.inpg.fr" -->
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
<strong>Date:</strong> 2011-12-12 12:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17937.php">Gustavo Correa: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>In reply to:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Patrick
<br>
<p>I think tab(i,:) is not contiguous in memory, but has a stride of nbcpus.
<br>
Since the MPI type you are passing is just the barebones MPI_INTEGER,
<br>
MPI_BCAST expects the four integers to be contiguous in memory, I guess.
<br>
The MPI calls don't have any idea of the Fortran90 memory layout,
<br>
and the tab(i,:) that you pass to MPI_BCAST means only the address for the *first*
<br>
MPI_INTEGER to be broadcast (sent and received). 
<br>
<p>My impression is that you could either:
<br>
1) Declare your table transposed, i.e, tab(4,nbcpus-1), 
<br>
and make a few adjustments in the code
<br>
to adapt to this change, which would make tab(:,i) contiguous in memory.
<br>
or
<br>
2) Keep your current declaration of 'tab', but declare an MPI_TYPE_VECTOR with 
<br>
the appropriate stride (nbcpus) and use it in your MPI_BCAST call.
<br>
<p>For MPI user defined types see Ch. 3 of &quot;MPI, The Complete Reference, Vol.1, The MPI Core, 2nd Ed.&quot; by M. Snir et. al.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Dec 12, 2011, at 10:35 AM, Patrick Begou wrote:
<br>
<p><span class="quotelev1">&gt; I've got a strange problem with Fortran90 and MPI_BCAST call on a large application. I've isolated the problem in this short program samples.
</span><br>
<span class="quotelev1">&gt; With fortran we can use subarrays in functions calls. Example, with passing a subarray to the &quot;change&quot; procedure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MODULE mymod
</span><br>
<span class="quotelev1">&gt; IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt; CONTAINS
</span><br>
<span class="quotelev1">&gt;   SUBROUTINE change(tab,i)
</span><br>
<span class="quotelev1">&gt;     IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;     INTEGER, INTENT(INOUT),DIMENSION(:)::tab
</span><br>
<span class="quotelev1">&gt;     INTEGER, INTENT(IN) :: i
</span><br>
<span class="quotelev1">&gt;     tab(:)=i
</span><br>
<span class="quotelev1">&gt;   END SUBROUTINE change
</span><br>
<span class="quotelev1">&gt; END MODULE mymod
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PROGRAM toto
</span><br>
<span class="quotelev1">&gt;   USE mymod
</span><br>
<span class="quotelev1">&gt;   IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;   INTEGER, PARAMETER::nx=6, ny=4
</span><br>
<span class="quotelev1">&gt;   INTEGER, DIMENSION(nx,ny):: tab
</span><br>
<span class="quotelev1">&gt;   INTEGER::i
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   tab=-1
</span><br>
<span class="quotelev1">&gt;   DO i=1,nx
</span><br>
<span class="quotelev1">&gt;     CALL change(tab(i,:),i)
</span><br>
<span class="quotelev1">&gt;   ENDDO
</span><br>
<span class="quotelev1">&gt;   PRINT*,tab
</span><br>
<span class="quotelev1">&gt; END PROGRAM toto
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But If I use subarrays with MPI_BCAST() like in this example:
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
<span class="quotelev1">&gt; It doesn't work! With openMPI 1.2.8 (OpenSuse 11.4 X86_64) I have random segfault: it works sometime, with few cpus (2, 4, 8...) and does'nt work sometime with a larger number of cpus (32, 48, 64...). With OpenMPI 1.4.4 (build from sources) it hangs (most of the array tab remains at the -1 initialization value). 
</span><br>
<span class="quotelev1">&gt; Such procedure calls are allowed with fortran90 so I do not understand why they fail here. I have to use a buffer array (called tabl in the following program) to solve the problem.
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
<span class="quotelev1">&gt;    INTEGER::tab1(4)
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
<span class="quotelev1">&gt;     tab=-1
</span><br>
<span class="quotelev1">&gt;     tab1=-1
</span><br>
<span class="quotelev1">&gt;     DO i=0,nbcpus-1
</span><br>
<span class="quotelev1">&gt;        IF(my_rank.EQ.i) tab1=my_rank
</span><br>
<span class="quotelev1">&gt;        CALL MPI_BCAST(tab1,4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;        tab(i,:)=tab1
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
<span class="quotelev1">&gt; Any idea about this behavior ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         | 
</span><br>
<span class="quotelev1">&gt; <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>
</span><br>
<span class="quotelev1">&gt;           |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           |       ------------               |
</span><br>
<span class="quotelev1">&gt; |  LEGI                    | 
</span><br>
<span class="quotelev1">&gt; mailto:Patrick.Begou_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  |
</span><br>
<span class="quotelev1">&gt; |  BP 53 X                 | Tel 04 76 82 51 35               |
</span><br>
<span class="quotelev1">&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
</span><br>
<span class="quotelev1">&gt; ===============================================================
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17937.php">Gustavo Correa: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>In reply to:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
