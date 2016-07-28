<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 19:02:12 2006" -->
<!-- isoreceived="20060301000212" -->
<!-- sent="Tue, 28 Feb 2006 19:00:42 -0500" -->
<!-- isosent="20060301000042" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1" -->
<!-- id="F3175E96-2ED2-40E3-994B-E1A869E8EFC6_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="960889E7-D174-403C-8B6B-1DEF77D7028B_at_nrl.navy.mil" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 19:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run in the same kind of troubles few days ago with a f90 code.  
<br>
After banging my head against all solid objects around my office, I  
<br>
switched to vim (it doesn't make sense yet ...). And suddenly I saw  
<br>
the light !!! F90 inherit from F77 one of it's most &quot;ancient&quot;  
<br>
feature. The limit on the number of chars one can put on a line of  
<br>
code, and this limit is a 79 by default (and don't forget the first 7  
<br>
chars that have a special meaning). Most of the compilers have  
<br>
special flags to remove this limit but they are not enabled by default.
<br>
<p>Now, if I copy and paste your code in my vim ... everything after  
<br>
&quot;universe_size-1&quot; is over the limit. Rewrite the line as
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL,  
<br>
universe_size-1, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_WORLD, slavecomm, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRCODES_IGNORE, ierr )
<br>
<p>and everything should work just fine.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: Use vim and the force will be with you. You have a similar  
<br>
problem down in the MPI_RECV call.
<br>
<p>On Feb 28, 2006, at 6:13 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Using OpenMPI 1.0.1 compiled with g95 on OS X (same problem on Debian
</span><br>
<span class="quotelev1">&gt; Linux with g95, I have not tested other compilers yet)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 spawn.f90 -o spawn
</span><br>
<span class="quotelev1">&gt; In file spawn.f90:35
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;                                                            1
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_comm_spawn' at (1) is not consistent
</span><br>
<span class="quotelev1">&gt; with a specific subroutine interface
</span><br>
<span class="quotelev1">&gt; make: *** [spawn] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't see the problem with the following, all the arguments match
</span><br>
<span class="quotelev1">&gt; the info presented in the book &quot;Using MPI-2&quot; page 236:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev1">&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the entire test program follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt;    USE MPI
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;    integer :: ierr,size,rank,slavecomm
</span><br>
<span class="quotelev1">&gt;    integer  (kind=MPI_ADDRESS_KIND) :: universe_size
</span><br>
<span class="quotelev1">&gt;    integer :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;    logical :: flag
</span><br>
<span class="quotelev1">&gt;    integer :: ans
</span><br>
<span class="quotelev1">&gt;    integer :: k
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if ( size /= 1 ) then
</span><br>
<span class="quotelev1">&gt;      if ( rank == 0 ) then
</span><br>
<span class="quotelev1">&gt;        write(*,*) 'Only one master process permitted'
</span><br>
<span class="quotelev1">&gt;        write(*,*) 'Terminating all but root process'
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;        stop
</span><br>
<span class="quotelev1">&gt;      end if
</span><br>
<span class="quotelev1">&gt;    end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE,
</span><br>
<span class="quotelev1">&gt; universe_size, flag,ierr)
</span><br>
<span class="quotelev1">&gt;    if ( .not. flag ) then
</span><br>
<span class="quotelev1">&gt;      write(*,*) 'This MPI does not support UNIVERSE_SIZE.'
</span><br>
<span class="quotelev1">&gt;      write(*,*) 'How many processes total?'
</span><br>
<span class="quotelev1">&gt;      read(*,*) universe_size
</span><br>
<span class="quotelev1">&gt;    else if ( universe_size &lt; 2 ) then
</span><br>
<span class="quotelev1">&gt;      write(*,*) 'How many processes total?'
</span><br>
<span class="quotelev1">&gt;      read(*,*) universe_size
</span><br>
<span class="quotelev1">&gt;    end if
</span><br>
<span class="quotelev1">&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev1">&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    do k = 1, universe_size-1
</span><br>
<span class="quotelev1">&gt;      write(*,*) 'master receiving'
</span><br>
<span class="quotelev1">&gt;      call MPI_RECV( ans, 1, MPI_INTEGER, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt; slavecomm, status, ierr )
</span><br>
<span class="quotelev1">&gt;      write(*,*) 'answer=',ans,' from alpha',k
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_COMM_FREE(slavecomm,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Durga Choudhury: "[OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0735.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
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
