<?
$subject_val = "[OMPI users] sun compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 19 16:03:34 2010" -->
<!-- isoreceived="20101119210334" -->
<!-- sent="Fri, 19 Nov 2010 15:03:27 -0600" -->
<!-- isosent="20101119210327" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="[OMPI users] sun compilers" -->
<!-- id="AANLkTik4rAFB6ghRuKrmCvCF1pZATc5HxkTBCBP4KeNF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] sun compilers<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-19 16:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>Previous message:</strong> <a href="14839.php">Hicham Mouline: "[OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>Reply:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
is there a searchable archive of this mailing list?
<br>
<p>I am helping someone use Openmpi with Sun's compilers that came with
<br>
SolarisStudio. I used the --showme  with mpif90 and got this
<br>
<p>gfortran -I/opt/openmpi/include -pthread -I/opt/openmpi/lib ring_f90.f90
<br>
-L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
<br>
-Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>that line compiles fine and so does the mpif90 command but when I replace
<br>
gfortran with sunf90 or the absoulute path to my solaris studio compilers I
<br>
get this
<br>
<p>$ f90 -I/opt/openmpi/include -pthread -I/opt/openmpi/lib ring_f90.f90
<br>
-L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl
<br>
-Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
f90: Warning: Option -pthread passed to ld, if ld is invoked, ignored
<br>
otherwise
<br>
f90: Warning: Option -Wl,--export-dynamic passed to ld, if ld is invoked,
<br>
ignored otherwise
<br>
<p>&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&quot;ring_f90.f90&quot;, Line = 10, Column = 7: ERROR: &quot;MPI&quot; is specified as the
<br>
module name on a USE statement, but the compiler cannot find it.
<br>
<p>&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&quot;ring_f90.f90&quot;, Line = 17, Column = 22: ERROR: IMPLICIT NONE is specified in
<br>
the local scope, therefore an explicit type must be specified for data
<br>
object &quot;MPI_COMM_WORLD&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;ring_f90.f90&quot;, Line = 34, Column = 32: ERROR: IMPLICIT NONE is specified in
<br>
the local scope, therefore an explicit type must be specified for data
<br>
object &quot;MPI_INTEGER&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&quot;ring_f90.f90&quot;, Line = 46, Column = 9: ERROR: IMPLICIT NONE is specified in
<br>
the local scope, therefore an explicit type must be specified for data
<br>
object &quot;MPI_STATUS_IGNORE&quot;.
<br>
<p>f90comp: 73 SOURCE LINES
<br>
f90comp: 4 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
<p>and the file contains this (from cat ring_f90.f90 ):
<br>
<p>!
<br>
! Copyright (c) 2004-2006 The Trustees of Indiana University and Indiana
<br>
!                         University Research and Technology
<br>
!                         Corporation.  All rights reserved.
<br>
! Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
<br>
!
<br>
! Simple ring test program
<br>
!
<br>
program ring
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;integer :: rank, size, tag, next, from, message, ierr
<br>
<p>! Start up MPI
<br>
<p>&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
<br>
<p>! Calculate the rank of the next process in the ring.  Use the modulus
<br>
! operator so that the last process &quot;wraps around&quot; to rank zero.
<br>
<p>&nbsp;&nbsp;tag = 201
<br>
&nbsp;&nbsp;next = mod((rank + 1), size)
<br>
&nbsp;&nbsp;from = mod((rank + size - 1), size)
<br>
<p>! If we are the &quot;master&quot; process (i.e., MPI_COMM_WORLD rank 0), put
<br>
! the number of times to go around the ring in the message.
<br>
<p>&nbsp;&nbsp;if (rank .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message = 10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Process 0 sending ', message, ' to ', next, ' tag ', tag, '
<br>
(', size, ' processes in ring)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Process 0 sent to ', next
<br>
&nbsp;&nbsp;endif
<br>
<p>! Pass the message around the ring.  The exit mechanism works as
<br>
! follows: the message (a positive integer) is passed around the ring.
<br>
! Each time it passes rank 0, it is decremented.  When each processes
<br>
! receives a message containing a 0 value, it passes the message on to
<br>
! the next process and then quits.  By passing the 0 message first,
<br>
! every process gets the 0 message and can quit normally.
<br>
<p>10 call MPI_RECV(message, 1, MPI_INTEGER, from, tag, MPI_COMM_WORLD, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE, ierr)
<br>
<p>&nbsp;&nbsp;if (rank .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message = message - 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Process 0 decremented value:', message
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
<br>
<p>&nbsp;&nbsp;if (message .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Process ', rank, ' exiting'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto 20
<br>
&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;goto 10
<br>
<p>! The last process does one extra send to process 0, which needs to be
<br>
! received before the program can exit
<br>
<p>&nbsp;20 if (rank .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV(message, 1, MPI_INTEGER, from, tag, MPI_COMM_WORLD, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE, ierr)
<br>
&nbsp;&nbsp;endif
<br>
<p>! All done
<br>
<p>&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end program
<br>
<p><p>Now, i must warn you, I don't know FORTRAN but I am supporting someone who
<br>
does. I have them CC
<br>
<p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>Previous message:</strong> <a href="14839.php">Hicham Mouline: "[OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<li><strong>Reply:</strong> <a href="14841.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
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
