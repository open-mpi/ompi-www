<?
$subject_val = "[OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 10:33:29 2011" -->
<!-- isoreceived="20111212153329" -->
<!-- sent="Mon, 12 Dec 2011 16:35:54 +0100" -->
<!-- isosent="20111212153554" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4EE61F5A.8070809_at_hmg.inpg.fr" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] MPI_BCAST and fortran subarrays<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 10:35:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got a strange problem with Fortran90 and MPI_BCAST call on a large 
<br>
application. I've isolated the problem in this short program samples.
<br>
With fortran we can use subarrays in functions calls. Example, with passing a 
<br>
subarray to the &quot;change&quot; procedure:
<br>
<p>MODULE mymod
<br>
IMPLICIT NONE
<br>
CONTAINS
<br>
&nbsp;&nbsp;&nbsp;SUBROUTINE change(tab,i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMPLICIT NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, INTENT(INOUT),DIMENSION(:)::tab
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, INTENT(IN) :: i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab(:)=i
<br>
&nbsp;&nbsp;&nbsp;END SUBROUTINE change
<br>
END MODULE mymod
<br>
<p>PROGRAM toto
<br>
&nbsp;&nbsp;&nbsp;USE mymod
<br>
&nbsp;&nbsp;&nbsp;IMPLICIT NONE
<br>
&nbsp;&nbsp;&nbsp;INTEGER, PARAMETER::nx=6, ny=4
<br>
&nbsp;&nbsp;&nbsp;INTEGER, DIMENSION(nx,ny):: tab
<br>
&nbsp;&nbsp;&nbsp;INTEGER::i
<br>
<p>&nbsp;&nbsp;&nbsp;tab=-1
<br>
&nbsp;&nbsp;&nbsp;DO i=1,nx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL change(tab(i,:),i)
<br>
&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;PRINT*,tab
<br>
END PROGRAM toto
<br>
<p>But If I use subarrays with MPI_BCAST() like in this example:
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
<p>It doesn't work! With openMPI 1.2.8 (OpenSuse 11.4 X86_64) I have random 
<br>
segfault: it works sometime, with few cpus (2, 4, 8...) and does'nt work 
<br>
sometime with a larger number of cpus (32, 48, 64...). With OpenMPI 1.4.4 (build 
<br>
from sources) it hangs (most of the array tab remains at the -1 initialization 
<br>
value).
<br>
Such procedure calls are allowed with fortran90 so I do not understand why they 
<br>
fail here. I have to use a buffer array (called tabl in the following program) 
<br>
to solve the problem.
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
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER::tab1(4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(MPI_COMM_WORLD,my_rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(MPI_COMM_WORLD,nbcpus,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALLOCATE (tab(0:nbcpus-1,4))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab=-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab1=-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DO i=0,nbcpus-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF(my_rank.EQ.i) tab1=my_rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_BCAST(tab1,4,MPI_INTEGER,i,MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tab(i,:)=tab1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (my_rank .EQ. 0) print*,tab
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FINALIZE(ierr)
<br>
<p>END PROGRAM bide
<br>
<p>Any idea about this behavior ?
<br>
<p>Patrick
<br>
<p><pre>
-- 
===============================================================
|  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
|  Patrick BEGOU           |       ------------               |
|  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
|  BP 53 X                 | Tel 04 76 82 51 35               |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
===============================================================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Reply:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
