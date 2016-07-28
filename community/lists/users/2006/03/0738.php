<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 11:18:48 2006" -->
<!-- isoreceived="20060301161848" -->
<!-- sent="Wed, 01 Mar 2006 17:08:42 +0100" -->
<!-- isosent="20060301160842" -->
<!-- name="Benoit Semelin" -->
<!-- email="benoit.semelin_at_[hidden]" -->
<!-- subject="[OMPI users] mpif90 problem." -->
<!-- id="4405C70A.4080002_at_obspm.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Benoit Semelin (<em>benoit.semelin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 11:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Reply:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have open-mpi installed with gcc and gfortran.
<br>
<p>When I use &quot;USE MPI&quot; and compile the lines :
<br>
<p>call MPI_BCAST(ncoll,1,MPI_INTEGER,master,MPI_COMM_WORLD,mpi_err)
<br>
call MPI_BCAST(boundary_cond,8,MPI_CHARACTER,master,MPI_COMM_WORLD,mpi_err)
<br>
<p>The first lines compiles, for the second I get this:
<br>
<p>call MPI_BCAST(boundary_cond,8,MPI_CHARACTER,master,MPI_COMM_WORLD,mpi_err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Generic subroutine 'mpi_bcast' at (1) is not an intrinsic subroutine
<br>
<p><p>If I use include 'mpif.h', it compiles just fine.
<br>
<p>The problem appears only when I am trying to send MPI_CHARACTER 
<br>
variables types...
<br>
<p>Any ideas?
<br>
<p><p>Second topic:
<br>
I am using 3 processors
<br>
I am calling a series of MPI_SCATTER which work when I send messages of 
<br>
5 ko to the other processors, fails at the second scatter if I sent 
<br>
messages of ~10 ko, and fails at the first scatter for bigger messages. 
<br>
The message is:
<br>
<p>2 processes killed (possibly by Open MPI)
<br>
<p>Could this be a problem of maximum allowed message size? Or of buffering 
<br>
space?
<br>
<p>Benoit Semelin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>Reply:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
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
