<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 08:59:55 2006" -->
<!-- isoreceived="20060301135955" -->
<!-- sent="Wed, 1 Mar 2006 08:59:23 -0500" -->
<!-- isosent="20060301135923" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1" -->
<!-- id="788137C1-8E65-4B18-9CDD-5E486AF58421_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3175E96-2ED2-40E3-994B-E1A869E8EFC6_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-03-01 08:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2006, at 7:00 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I run in the same kind of troubles few days ago with a f90 code.
</span><br>
<span class="quotelev1">&gt; After banging my head against all solid objects around my office, I
</span><br>
<span class="quotelev1">&gt; switched to vim (it doesn't make sense yet ...). And suddenly I saw
</span><br>
<span class="quotelev1">&gt; the light !!! F90 inherit from F77 one of it's most &quot;ancient&quot;
</span><br>
<span class="quotelev1">&gt; feature. The limit on the number of chars one can put on a line of
</span><br>
<span class="quotelev1">&gt; code, and this limit is a 79 by default (and don't forget the first 7
</span><br>
<span class="quotelev1">&gt; chars that have a special meaning).
</span><br>
<p>I'm sorry I don't understand what you are saying.  Are you saying  
<br>
that when using &quot;free source form&quot; Fortran 90 code that the default  
<br>
line length of 132 characters is ignored when compiling MPI function  
<br>
calls?  I know for a fact this is not true in general and very much  
<br>
doubt that this is the case here.
<br>
<p>More likely is a missing interface for MPI_Comm_Spawn in OpenMPI 1.0.1
<br>
<p>In case you're not aware of the difference between &quot;fixed source  
<br>
form&quot; and &quot;free source form&quot; Fortran 90 code (1) &quot;fixed source form&quot;  
<br>
source code has the extension .f with most compilers and has to meet  
<br>
the requirements of Fortran 77, that is 80 line length, source code  
<br>
starts at position 7, the continuation is anything in column 6 except  
<br>
0, officially a comment marker is C or * in column 1 or ! anywhere  
<br>
except column 6, (2)  &quot;free source form&quot; source code has the  
<br>
extension .f90 with most compilers, line length is 132 characters,  
<br>
source code can start in any position, the continuation character is  
<br>
a trailing &amp;, the comment marker is !.  Also &quot;fixed source form&quot;  
<br>
ignores spaces except in character strings, i.e. SIN(X) and S I N  
<br>
( X ) are the same.
<br>
<p><span class="quotelev1">&gt; Most of the compilers have
</span><br>
<span class="quotelev1">&gt; special flags to remove this limit but they are not enabled by  
</span><br>
<span class="quotelev1">&gt; default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if I copy and paste your code in my vim ... everything after
</span><br>
<span class="quotelev1">&gt; &quot;universe_size-1&quot; is over the limit. Rewrite the line as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL,
</span><br>
<span class="quotelev1">&gt; universe_size-1, &amp;
</span><br>
<span class="quotelev1">&gt;                           MPI_INFO_NULL, 0, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; slavecomm, &amp;
</span><br>
<span class="quotelev1">&gt;                           MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and everything should work just fine.
</span><br>
<p>Just as a test I did this, no effect.  The error remains.
<br>
<p>Michael
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Use vim and the force will be with you. You have a similar
</span><br>
<span class="quotelev1">&gt; problem down in the MPI_RECV call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2006, at 6:13 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using OpenMPI 1.0.1 compiled with g95 on OS X (same problem on Debian
</span><br>
<span class="quotelev2">&gt;&gt; Linux with g95, I have not tested other compilers yet)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 spawn.f90 -o spawn
</span><br>
<span class="quotelev2">&gt;&gt; In file spawn.f90:35
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;                                                            1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Generic subroutine 'mpi_comm_spawn' at (1) is not consistent
</span><br>
<span class="quotelev2">&gt;&gt; with a specific subroutine interface
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [spawn] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't see the problem with the following, all the arguments match
</span><br>
<span class="quotelev2">&gt;&gt; the info presented in the book &quot;Using MPI-2&quot; page 236:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the entire test program follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt;    USE MPI
</span><br>
<span class="quotelev2">&gt;&gt;    implicit none
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: ierr,size,rank,slavecomm
</span><br>
<span class="quotelev2">&gt;&gt;    integer  (kind=MPI_ADDRESS_KIND) :: universe_size
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt;    logical :: flag
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: ans
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: k
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if ( size /= 1 ) then
</span><br>
<span class="quotelev2">&gt;&gt;      if ( rank == 0 ) then
</span><br>
<span class="quotelev2">&gt;&gt;        write(*,*) 'Only one master process permitted'
</span><br>
<span class="quotelev2">&gt;&gt;        write(*,*) 'Terminating all but root process'
</span><br>
<span class="quotelev2">&gt;&gt;      else
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;        stop
</span><br>
<span class="quotelev2">&gt;&gt;      end if
</span><br>
<span class="quotelev2">&gt;&gt;    end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE,
</span><br>
<span class="quotelev2">&gt;&gt; universe_size, flag,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    if ( .not. flag ) then
</span><br>
<span class="quotelev2">&gt;&gt;      write(*,*) 'This MPI does not support UNIVERSE_SIZE.'
</span><br>
<span class="quotelev2">&gt;&gt;      write(*,*) 'How many processes total?'
</span><br>
<span class="quotelev2">&gt;&gt;      read(*,*) universe_size
</span><br>
<span class="quotelev2">&gt;&gt;    else if ( universe_size &lt; 2 ) then
</span><br>
<span class="quotelev2">&gt;&gt;      write(*,*) 'How many processes total?'
</span><br>
<span class="quotelev2">&gt;&gt;      read(*,*) universe_size
</span><br>
<span class="quotelev2">&gt;&gt;    end if
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL, 0, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    do k = 1, universe_size-1
</span><br>
<span class="quotelev2">&gt;&gt;      write(*,*) 'master receiving'
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_RECV( ans, 1, MPI_INTEGER, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt;&gt; slavecomm, status, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;      write(*,*) 'answer=',ans,' from alpha',k
</span><br>
<span class="quotelev2">&gt;&gt;    end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_COMM_FREE(slavecomm,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
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
