<?
$subject_val = "Re: [OMPI users] sun compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 19 17:02:19 2010" -->
<!-- isoreceived="20101119220219" -->
<!-- sent="Fri, 19 Nov 2010 17:02:09 -0500" -->
<!-- isosent="20101119220209" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sun compilers" -->
<!-- id="4CE6F3E1.9080103_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE6EFB0.1070104_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] sun compilers<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-19 17:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14843.php">Gilbert Grosdidier: "[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Previous message:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>In reply to:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PS - As the program doesn't really have any
<br>
essential Fortran 90 feature, it may be worth to try to replace:
<br>
<p>use mpi
<br>
<p>by
<br>
<p>#include &quot;mpif.h&quot;
<br>
<p>Gus Correa
<br>
<p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Nehemiah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI mailing list searchable archive:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Several Fortran 90 compilers reject any module that was compiled
</span><br>
<span class="quotelev1">&gt; with a different compiler (even when they can find it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One possibility is to build OpenMPI again with SunStudio.
</span><br>
<span class="quotelev1">&gt; Another is to compile the program with gfortran, or much better,
</span><br>
<span class="quotelev1">&gt; with the corresponding OpenMPI wrapper mpif90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; is there a searchable archive of this mailing list?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am helping someone use Openmpi with Sun's compilers that came with 
</span><br>
<span class="quotelev2">&gt;&gt; SolarisStudio. I used the --showme  with mpif90 and got this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/opt/openmpi/include -pthread -I/opt/openmpi/lib 
</span><br>
<span class="quotelev2">&gt;&gt; ring_f90.f90 -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte 
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that line compiles fine and so does the mpif90 command but when I 
</span><br>
<span class="quotelev2">&gt;&gt; replace gfortran with sunf90 or the absoulute path to my solaris 
</span><br>
<span class="quotelev2">&gt;&gt; studio compilers I get this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ f90 -I/opt/openmpi/include -pthread -I/opt/openmpi/lib ring_f90.f90 
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal 
</span><br>
<span class="quotelev2">&gt;&gt; -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -pthread passed to ld, if ld is invoked, ignored 
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -Wl,--export-dynamic passed to ld, if ld is 
</span><br>
<span class="quotelev2">&gt;&gt; invoked, ignored otherwise
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   use mpi
</span><br>
<span class="quotelev2">&gt;&gt;       ^  &quot;ring_f90.f90&quot;, Line = 10, Column = 7: ERROR: &quot;MPI&quot; is 
</span><br>
<span class="quotelev2">&gt;&gt; specified as the module name on a USE statement, but the compiler 
</span><br>
<span class="quotelev2">&gt;&gt; cannot find it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                      ^                          &quot;ring_f90.f90&quot;, Line = 
</span><br>
<span class="quotelev2">&gt;&gt; 17, Column = 22: ERROR: IMPLICIT NONE is specified in the local scope, 
</span><br>
<span class="quotelev2">&gt;&gt; therefore an explicit type must be specified for data object 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI_COMM_WORLD&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt;&gt; ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                                
</span><br>
<span class="quotelev2">&gt;&gt; ^                                            &quot;ring_f90.f90&quot;, Line = 
</span><br>
<span class="quotelev2">&gt;&gt; 34, Column = 32: ERROR: IMPLICIT NONE is specified in the local scope, 
</span><br>
<span class="quotelev2">&gt;&gt; therefore an explicit type must be specified for data object 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI_INTEGER&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;         ^                       &quot;ring_f90.f90&quot;, Line = 46, Column = 9: 
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: IMPLICIT NONE is specified in the local scope, therefore an 
</span><br>
<span class="quotelev2">&gt;&gt; explicit type must be specified for data object &quot;MPI_STATUS_IGNORE&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; f90comp: 73 SOURCE LINES
</span><br>
<span class="quotelev2">&gt;&gt; f90comp: 4 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the file contains this (from cat ring_f90.f90 ):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; ! Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev2">&gt;&gt; !                         University Research and Technology
</span><br>
<span class="quotelev2">&gt;&gt; !                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; ! Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; ! Simple ring test program
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; program ring
</span><br>
<span class="quotelev2">&gt;&gt;   use mpi
</span><br>
<span class="quotelev2">&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   integer :: rank, size, tag, next, from, message, ierr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! Start up MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! Calculate the rank of the next process in the ring.  Use the modulus
</span><br>
<span class="quotelev2">&gt;&gt; ! operator so that the last process &quot;wraps around&quot; to rank zero.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   tag = 201
</span><br>
<span class="quotelev2">&gt;&gt;   next = mod((rank + 1), size)
</span><br>
<span class="quotelev2">&gt;&gt;   from = mod((rank + size - 1), size)
</span><br>
<span class="quotelev2">&gt;&gt;      ! If we are the &quot;master&quot; process (i.e., MPI_COMM_WORLD rank 0), put
</span><br>
<span class="quotelev2">&gt;&gt; ! the number of times to go around the ring in the message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;      message = 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      print *, 'Process 0 sending ', message, ' to ', next, ' tag ', 
</span><br>
<span class="quotelev2">&gt;&gt; tag, ' (', size, ' processes in ring)'
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt;&gt; ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      print *, 'Process 0 sent to ', next
</span><br>
<span class="quotelev2">&gt;&gt;   endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! Pass the message around the ring.  The exit mechanism works as
</span><br>
<span class="quotelev2">&gt;&gt; ! follows: the message (a positive integer) is passed around the ring.
</span><br>
<span class="quotelev2">&gt;&gt; ! Each time it passes rank 0, it is decremented.  When each processes
</span><br>
<span class="quotelev2">&gt;&gt; ! receives a message containing a 0 value, it passes the message on to
</span><br>
<span class="quotelev2">&gt;&gt; ! the next process and then quits.  By passing the 0 message first,
</span><br>
<span class="quotelev2">&gt;&gt; ! every process gets the 0 message and can quit normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 10 call MPI_RECV(message, 1, MPI_INTEGER, from, tag, MPI_COMM_WORLD, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if (rank .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;      message = message - 1
</span><br>
<span class="quotelev2">&gt;&gt;      print *, 'Process 0 decremented value:', message
</span><br>
<span class="quotelev2">&gt;&gt;   endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;        if (message .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;      print *, 'Process ', rank, ' exiting'
</span><br>
<span class="quotelev2">&gt;&gt;      goto 20
</span><br>
<span class="quotelev2">&gt;&gt;   endif
</span><br>
<span class="quotelev2">&gt;&gt;   goto 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! The last process does one extra send to process 0, which needs to be
</span><br>
<span class="quotelev2">&gt;&gt; ! received before the program can exit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  20 if (rank .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_RECV(message, 1, MPI_INTEGER, from, tag, MPI_COMM_WORLD, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;           MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! All done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, i must warn you, I don't know FORTRAN but I am supporting someone 
</span><br>
<span class="quotelev2">&gt;&gt; who does. I have them CC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="14843.php">Gilbert Grosdidier: "[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Previous message:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>In reply to:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<!-- nextthread="start" -->
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
