<?
$subject_val = "[OMPI users] fortran and MPI_Barrier, not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 06:55:16 2009" -->
<!-- isoreceived="20091114115516" -->
<!-- sent="Sat, 14 Nov 2009 11:53:53 +0000 (WET)" -->
<!-- isosent="20091114115353" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="[OMPI users] fortran and MPI_Barrier, not working?" -->
<!-- id="alpine.DEB.2.00.0911141134580.10965_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] fortran and MPI_Barrier, not working?<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-14 06:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11193.php">amjad ali: "[OMPI users] Array Declaration different approaches"</a>
<li><strong>Previous message:</strong> <a href="11191.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Reply:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi
<br>
<p>&nbsp;&nbsp;I'm testing this in a debian box, openmpi 1.3-2, compiled with gcc suite 
<br>
(all from packages). After compiling and running the code I'm baffled with 
<br>
the output, it seems MPI_Barrier is not working. Maybe it is such a basic 
<br>
error I'm doing that I can't figure it out... See the code below, the 
<br>
output it gives (one of because it's a bit erratic) and what I would 
<br>
expect as output. Any help would be aprecciated...
<br>
<p>&nbsp;&nbsp;Code was compiled with
<br>
<p>&nbsp;&nbsp;mpif90 -O0 -g -fbounds-check -Wall test_mpi.f90 -o test_mpi
<br>
<p>&nbsp;&nbsp;- &gt; code - cut here ----------------------
<br>
<p>program testmpi
<br>
<p>&nbsp;&nbsp;&nbsp;use iso_fortran_env
<br>
<p>&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;integer, parameter :: ni=16,nj=16,nk=16
<br>
<p>&nbsp;&nbsp;&nbsp;integer, parameter :: stdout=output_unit, stderr=error_unit, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdin=input_unit
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: istep,  idest, idx, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr, my_rank, world, nprocs
<br>
<p>&nbsp;&nbsp;&nbsp;! &gt; CODE STARTS ----------------------------------------------- *
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Init(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;world = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;call MPI_comm_rank(world, my_rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_comm_size(world, nprocs, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Barrier(world, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;do istep=1, nprocs
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;idest=ieor(my_rank, istep)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(my_rank.eq.0) print '(&quot;*&quot;,/)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call flush(stdout)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(world, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do idx=0,nprocs-1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(idx.eq.my_rank .and. idest.lt.nprocs)then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print '(&quot;ISTEP&quot;,I2,&quot; IDX&quot;,I2,&quot; my_rank &quot;,I5,&quot; idest &quot;,I5)', &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;istep, idx, my_rank, idest
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call flush(stdout)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(world, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(world, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p>&nbsp;&nbsp;&nbsp;call MPI_Barrier(world, ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierr)
<br>
<p><p>end program testmpi
<br>
<p>&nbsp;&nbsp;- &lt; code - cut here ----------------------
<br>
<p>&nbsp;&nbsp;- &gt; output - cut here ----------------------
<br>
<p>*
<br>
<p>ISTEP 1 IDX 1 my_rank     1 idest     0
<br>
ISTEP 2 IDX 1 my_rank     1 idest     3
<br>
ISTEP 1 IDX 2 my_rank     2 idest     3
<br>
ISTEP 2 IDX 2 my_rank     2 idest     0
<br>
ISTEP 1 IDX 3 my_rank     3 idest     2
<br>
ISTEP 1 IDX 0 my_rank     0 idest     1
<br>
*
<br>
<p>ISTEP 2 IDX 0 my_rank     0 idest     2
<br>
ISTEP 2 IDX 3 my_rank     3 idest     1
<br>
ISTEP 3 IDX 3 my_rank     3 idest     0
<br>
ISTEP 3 IDX 1 my_rank     1 idest     2
<br>
ISTEP 3 IDX 2 my_rank     2 idest     1
<br>
*
<br>
<p>ISTEP 3 IDX 0 my_rank     0 idest     3
<br>
*
<br>
<p>&nbsp;&nbsp;- &lt; output - cut here ----------------------
<br>
<p><p><p>&nbsp;&nbsp;- &gt; expected output - cut here ----------------------
<br>
<p>*
<br>
<p>ISTEP 1 IDX 0 my_rank     0 idest     1
<br>
ISTEP 1 IDX 1 my_rank     1 idest     0
<br>
ISTEP 1 IDX 2 my_rank     2 idest     3
<br>
ISTEP 1 IDX 3 my_rank     3 idest     2
<br>
<p>*
<br>
<p>ISTEP 2 IDX 0 my_rank     0 idest     2
<br>
ISTEP 2 IDX 1 my_rank     1 idest     3
<br>
ISTEP 2 IDX 2 my_rank     2 idest     0
<br>
ISTEP 2 IDX 3 my_rank     3 idest     1
<br>
<p>*
<br>
<p>ISTEP 3 IDX 0 my_rank     0 idest     3
<br>
ISTEP 3 IDX 1 my_rank     1 idest     2
<br>
ISTEP 3 IDX 2 my_rank     2 idest     1
<br>
ISTEP 3 IDX 3 my_rank     3 idest     0
<br>
<p>&nbsp;&nbsp;- &lt; expected output - cut here ----------------------
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD candidate @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;Keep them Flying! Ajude a/help Aero F&#233;nix!
<br>
<p>&nbsp;&nbsp;<a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11193.php">amjad ali: "[OMPI users] Array Declaration different approaches"</a>
<li><strong>Previous message:</strong> <a href="11191.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Reply:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
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
