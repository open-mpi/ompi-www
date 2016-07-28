<?
$subject_val = "Re: [OMPI users] fortran and MPI_Barrier, not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 14 17:09:13 2009" -->
<!-- isoreceived="20091114220913" -->
<!-- sent="Sat, 14 Nov 2009 17:09:04 -0500" -->
<!-- isosent="20091114220904" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran and MPI_Barrier, not working?" -->
<!-- id="4AFF2A80.8080101_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0911141134580.10965_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran and MPI_Barrier, not working?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-14 17:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11196.php">Ralph Castain: "Re: [OMPI users] get the process Id of mpirun"</a>
<li><strong>Previous message:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
<li><strong>In reply to:</strong> <a href="11192.php">Ricardo Reis: "[OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Reply:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alberto,
<br>
digo, Alvaro,
<br>
digo, Fernando,
<br>
digo, Ricardo Reis ...
<br>
<p>Salve, oh pa'!
<br>
<p>I think MPI doesn't ensure that the output will come ordered
<br>
according to process rank, as in your expected output list.
<br>
Even MPI_Barrier doesn't sync the output, I suppose.
<br>
It syncs only the communication among the processes,
<br>
but you actually have no communication on your code!
<br>
(Other than the barrier itself, of course.)
<br>
<p>You have a different stdout buffer for each process,
<br>
and the processes probably compete for access
<br>
to the (single) output file,
<br>
when they hit &quot;call flush&quot;, I would guess.
<br>
The Linux scheduler may set the game here,
<br>
and tell who's in first, in second, in third, etc.
<br>
But I'm not knowledgeable on these things,
<br>
I am just wildly guessing.
<br>
<p>Note that both lists you sent have exactly the same lines,
<br>
though in different order.
<br>
I think this is telling that there is nothing wrong
<br>
with MPI_Barrier or with your code.
<br>
A shuffled output order is to be expected, no more no less.
<br>
And the order will probably vary from run to run, right?
<br>
<p>Also, on your outer loop istep runs from 1 to 4,
<br>
and process rank zero prints an asterisk at each outer loop iteration.
<br>
Hence, I think four asterisks, not three, should be expected, right?
<br>
Four asterisks is what I see on your first list (the shuffled one),
<br>
not on the ordered one.
<br>
<p>Now, the question is how to produce the
<br>
ordered output you want.
<br>
<p>One way would be to send everything to process 0,
<br>
and let it order the messages, `a la mode de &quot;hello_world&quot;,
<br>
but this would be kind of cheating.
<br>
Maybe there is a solution with MPI-IO,
<br>
to concatenate the output file they way you want first,
<br>
then flush it.
<br>
<p>**
<br>
<p>Arre lo'gica bina'ria impiedosa!
<br>
<p>&quot;Onde pode acolher-se um fraco humano,
<br>
Onde tera' segura a curta vida,
<br>
Que na~o se arme e se indigne o Ce'u sereno
<br>
contra um bicho da terra ta~o pequeno?&quot;
<br>
<p>Me diga?
<br>
<p>Abrac,o
<br>
Gus
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
1
<br>
Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I'm testing this in a debian box, openmpi 1.3-2, compiled with gcc 
</span><br>
<span class="quotelev1">&gt; suite (all from packages). After compiling and running the code I'm 
</span><br>
<span class="quotelev1">&gt; baffled with the output, it seems MPI_Barrier is not working. Maybe it 
</span><br>
<span class="quotelev1">&gt; is such a basic error I'm doing that I can't figure it out... See the 
</span><br>
<span class="quotelev1">&gt; code below, the output it gives (one of because it's a bit erratic) and 
</span><br>
<span class="quotelev1">&gt; what I would expect as output. Any help would be aprecciated...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Code was compiled with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpif90 -O0 -g -fbounds-check -Wall test_mpi.f90 -o test_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &gt; code - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program testmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use iso_fortran_env
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer, parameter :: ni=16,nj=16,nk=16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer, parameter :: stdout=output_unit, stderr=error_unit, &amp;
</span><br>
<span class="quotelev1">&gt;        stdin=input_unit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer :: istep,  idest, idx, &amp;
</span><br>
<span class="quotelev1">&gt;        ierr, my_rank, world, nprocs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ! &gt; CODE STARTS ----------------------------------------------- *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   world = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;   call MPI_comm_rank(world, my_rank, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_comm_size(world, nprocs, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   do istep=1, nprocs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      idest=ieor(my_rank, istep)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if(my_rank.eq.0) print '(&quot;*&quot;,/)'
</span><br>
<span class="quotelev1">&gt;      call flush(stdout)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      do idx=0,nprocs-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if(idx.eq.my_rank .and. idest.lt.nprocs)then
</span><br>
<span class="quotelev1">&gt;            print '(&quot;ISTEP&quot;,I2,&quot; IDX&quot;,I2,&quot; my_rank &quot;,I5,&quot; idest &quot;,I5)', &amp;
</span><br>
<span class="quotelev1">&gt;                istep, idx, my_rank, idest
</span><br>
<span class="quotelev1">&gt;            call flush(stdout)
</span><br>
<span class="quotelev1">&gt;         endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         call MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program testmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &lt; code - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &gt; output - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 1 my_rank     1 idest     0
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 1 my_rank     1 idest     3
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 2 my_rank     2 idest     3
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 2 my_rank     2 idest     0
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 3 my_rank     3 idest     2
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 0 my_rank     0 idest     1
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 0 my_rank     0 idest     2
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 3 my_rank     3 idest     1
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 3 my_rank     3 idest     0
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 1 my_rank     1 idest     2
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 2 my_rank     2 idest     1
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 0 my_rank     0 idest     3
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &lt; output - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &gt; expected output - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 0 my_rank     0 idest     1
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 1 my_rank     1 idest     0
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 2 my_rank     2 idest     3
</span><br>
<span class="quotelev1">&gt; ISTEP 1 IDX 3 my_rank     3 idest     2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 0 my_rank     0 idest     2
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 1 my_rank     1 idest     3
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 2 my_rank     2 idest     0
</span><br>
<span class="quotelev1">&gt; ISTEP 2 IDX 3 my_rank     3 idest     1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 0 my_rank     0 idest     3
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 1 my_rank     1 idest     2
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 2 my_rank     2 idest     1
</span><br>
<span class="quotelev1">&gt; ISTEP 3 IDX 3 my_rank     3 idest     0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - &lt; expected output - cut here ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11196.php">Ralph Castain: "Re: [OMPI users] get the process Id of mpirun"</a>
<li><strong>Previous message:</strong> <a href="11194.php">Kritiraj Sajadah: "[OMPI users] get the process Id of mpirun"</a>
<li><strong>In reply to:</strong> <a href="11192.php">Ricardo Reis: "[OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<li><strong>Reply:</strong> <a href="11200.php">Ricardo Reis: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
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
