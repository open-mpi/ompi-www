<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 13:28:15 2011" -->
<!-- isoreceived="20111212182815" -->
<!-- sent="Mon, 12 Dec 2011 10:28:05 -0800" -->
<!-- isosent="20111212182805" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4EE647B5.9000106_at_atmos.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="033B11CC-FFC4-4545-BD15-6829B1FDB2D2_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-12-12 13:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17937.php">Gustavo Correa: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What FORTRAN compiler are you using? This should not really be an issue 
<br>
with the MPI implementation, but with the FORTRAN. This is legitimate 
<br>
usage in FORTRAN 90 and the compiler should deal with it. I do similar 
<br>
things using ifort and it creates temporary arrays when necessary and it 
<br>
all works.
<br>
<p>On 12/12/11 09:38, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Patrick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think tab(i,:) is not contiguous in memory, but has a stride of nbcpus.
</span><br>
<span class="quotelev1">&gt; Since the MPI type you are passing is just the barebones MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt; MPI_BCAST expects the four integers to be contiguous in memory, I guess.
</span><br>
<span class="quotelev1">&gt; The MPI calls don't have any idea of the Fortran90 memory layout,
</span><br>
<span class="quotelev1">&gt; and the tab(i,:) that you pass to MPI_BCAST means only the address for the *first*
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER to be broadcast (sent and received).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My impression is that you could either:
</span><br>
<span class="quotelev1">&gt; 1) Declare your table transposed, i.e, tab(4,nbcpus-1),
</span><br>
<span class="quotelev1">&gt; and make a few adjustments in the code
</span><br>
<span class="quotelev1">&gt; to adapt to this change, which would make tab(:,i) contiguous in memory.
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 2) Keep your current declaration of 'tab', but declare an MPI_TYPE_VECTOR with
</span><br>
<span class="quotelev1">&gt; the appropriate stride (nbcpus) and use it in your MPI_BCAST call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For MPI user defined types see Ch. 3 of &quot;MPI, The Complete Reference, Vol.1, The MPI Core, 2nd Ed.&quot; by M. Snir et. al.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2011, at 10:35 AM, Patrick Begou wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; I've got a strange problem with Fortran90 and MPI_BCAST call on a large application. I've isolated the problem in this short program samples.
</span><br>
<span class="quotelev2">&gt;&gt; With fortran we can use subarrays in functions calls. Example, with passing a subarray to the &quot;change&quot; procedure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MODULE mymod
</span><br>
<span class="quotelev2">&gt;&gt; IMPLICIT NONE
</span><br>
<span class="quotelev2">&gt;&gt; CONTAINS
</span><br>
<span class="quotelev2">&gt;&gt;    SUBROUTINE change(tab,i)
</span><br>
<span class="quotelev2">&gt;&gt;      IMPLICIT NONE
</span><br>
<span class="quotelev2">&gt;&gt;      INTEGER, INTENT(INOUT),DIMENSION(:)::tab
</span><br>
<span class="quotelev2">&gt;&gt;      INTEGER, INTENT(IN) :: i
</span><br>
<span class="quotelev2">&gt;&gt;      tab(:)=i
</span><br>
<span class="quotelev2">&gt;&gt;    END SUBROUTINE change
</span><br>
<span class="quotelev2">&gt;&gt; END MODULE mymod
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PROGRAM toto
</span><br>
<span class="quotelev2">&gt;&gt;    USE mymod
</span><br>
<span class="quotelev2">&gt;&gt;    IMPLICIT NONE
</span><br>
<span class="quotelev2">&gt;&gt;    INTEGER, PARAMETER::nx=6, ny=4
</span><br>
<span class="quotelev2">&gt;&gt;    INTEGER, DIMENSION(nx,ny):: tab
</span><br>
<span class="quotelev2">&gt;&gt;    INTEGER::i
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    tab=-1
</span><br>
<span class="quotelev2">&gt;&gt;    DO i=1,nx
</span><br>
<span class="quotelev2">&gt;&gt;      CALL change(tab(i,:),i)
</span><br>
<span class="quotelev2">&gt;&gt;    ENDDO
</span><br>
<span class="quotelev2">&gt;&gt;    PRINT*,tab
</span><br>
<span class="quotelev2">&gt;&gt; END PROGRAM toto
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But If I use subarrays with MPI_BCAST() like in this example:
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
<span class="quotelev2">&gt;&gt; It doesn't work! With openMPI 1.2.8 (OpenSuse 11.4 X86_64) I have random segfault: it works sometime, with few cpus (2, 4, 8...) and does'nt work sometime with a larger number of cpus (32, 48, 64...). With OpenMPI 1.4.4 (build from sources) it hangs (most of the array tab remains at the -1 initialization value).
</span><br>
<span class="quotelev2">&gt;&gt; Such procedure calls are allowed with fortran90 so I do not understand why they fail here. I have to use a buffer array (called tabl in the following program) to solve the problem.
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
<span class="quotelev2">&gt;&gt;     INTEGER::tab1(4)
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
<span class="quotelev2">&gt;&gt;      tab=-1
</span><br>
<span class="quotelev2">&gt;&gt;      tab1=-1
</span><br>
<span class="quotelev2">&gt;&gt;      DO i=0,nbcpus-1
</span><br>
<span class="quotelev2">&gt;&gt;         IF(my_rank.EQ.i) tab1=my_rank
</span><br>
<span class="quotelev2">&gt;&gt;         CALL MPI_BCAST(tab1,4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         tab(i,:)=tab1
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
<span class="quotelev2">&gt;&gt; Any idea about this behavior ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ===============================================================
</span><br>
<span class="quotelev2">&gt;&gt; |  Equipe M.O.S.T.         |
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>
</span><br>
<span class="quotelev2">&gt;&gt;            |
</span><br>
<span class="quotelev2">&gt;&gt; |  Patrick BEGOU           |       ------------               |
</span><br>
<span class="quotelev2">&gt;&gt; |  LEGI                    |
</span><br>
<span class="quotelev2">&gt;&gt; mailto:Patrick.Begou_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   |
</span><br>
<span class="quotelev2">&gt;&gt; |  BP 53 X                 | Tel 04 76 82 51 35               |
</span><br>
<span class="quotelev2">&gt;&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
</span><br>
<span class="quotelev2">&gt;&gt; ===============================================================
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17939.php">V. Ram: "[OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17937.php">Gustavo Correa: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17940.php">Edmund Sumbar: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17955.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
