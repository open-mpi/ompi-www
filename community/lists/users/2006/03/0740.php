<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 12:30:55 2006" -->
<!-- isoreceived="20060301173055" -->
<!-- sent="Wed, 1 Mar 2006 12:30:27 -0500" -->
<!-- isosent="20060301173027" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?" -->
<!-- id="505DC0CF-07D8-4824-A64B-47D60DE184F6_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44019DD2-5774-4167-867C-9C94B3DF7B75_at_cs.utk.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>michael.kluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 12:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2006, at 9:56 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Now I look into this problem more and your right it's a missing
</span><br>
<span class="quotelev1">&gt; interface. Somehow, it didn't get compiled.
</span><br>
<p>&nbsp;From &quot;openmpi-1.0.1/ompi/mpi/f90/mpi-f90-interfaces.h&quot; the interface  
<br>
says:
<br>
<p>subroutine MPI_Comm_spawn(command, argv, maxprocs, info, root, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm, intercomm, array_of_errcodes, ierr)
<br>
&nbsp;&nbsp;&nbsp;use mpi_kinds
<br>
&nbsp;&nbsp;&nbsp;character(len=*), intent(in) :: command
<br>
&nbsp;&nbsp;&nbsp;character(len=*), dimension(*), intent(in) :: argv
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: maxprocs
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: info
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: intercomm
<br>
&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(out) :: array_of_errcodes
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Comm_spawn
<br>
<p>My call is (mostly from the Using MPI-2 book):
<br>
&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,  
<br>
MPI_INFO_NULL, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
<br>
<p>looking at &quot;mpif.h&quot; included by mpi_kinds.f90:
<br>
<p>double complex  MPI_ARGV_NULL
<br>
integer MPI_INFO_NULL
<br>
integer MPI_COMM_WORLD
<br>
double complex MPI_ERRCODES_IGNORE
<br>
<p>What I don't understand how the &quot;double complex&quot; MPI_ARGV_NULL could  
<br>
work with the &quot;character(len=*), dimension(*), intent(in) :: argv&quot;  
<br>
interface or how the &quot;double complex&quot; MPI_ERRCODES_IGNORE could work  
<br>
with the &quot;integer, dimension(*), intent(out) :: array_of_errcodes&quot;  
<br>
interface.
<br>
<p>I have the following for my variables:
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: ierr,slavecomm
<br>
&nbsp;&nbsp;&nbsp;integer  (kind=MPI_ADDRESS_KIND) :: universe_size
<br>
<p>My usage of  MPI_ADDRESS_KIND and MPI_Comm_spawn is based on pages  
<br>
236 and 244 of &quot;Using MPI-2&quot;
<br>
<p>I'd to resolve the specific error involving the f90 interfaces so I  
<br>
can continue to &quot;USE MPI&quot; in order to check my interface errors  
<br>
quickly as I move forward on my project.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Reply:</strong> <a href="0780.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
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
