<?
$subject_val = "[OMPI users] programming qsn??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 15:21:40 2009" -->
<!-- isoreceived="20090813192140" -->
<!-- sent="Fri, 14 Aug 2009 00:21:25 +0500" -->
<!-- isosent="20090813192125" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] programming qsn??" -->
<!-- id="428810f20908131221o48dc6d2cx858b35539aef2ba0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] programming qsn??<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 15:21:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10354.php">Kritiraj Sajadah: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10352.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all,
<br>
<p><p><p>I am parallelizing a CFD 2D code in FORTRAN+OPENMPI. Suppose that the grid
<br>
(all triangles) is partitioned among 8 processes using METIS. Each process
<br>
has different number of neighboring processes. Suppose each process has n
<br>
elements/faces whose data it needs to sends to corresponding neighboring
<br>
processes, and it has m number of elements/faces on which it needs to get
<br>
data from corresponding neighboring processes. Values of n and m are
<br>
different for each process. Another aim is to hide the communication behind
<br>
computation. For this I do the following for each process:
<br>
<p><p><p>DO j = 1 to n
<br>
<p>CALL MPI_ISEND (send_data, num, type, dest(j), tag, MPI_COMM_WORLD, ireq(j),
<br>
ierr)
<br>
<p>ENDDO
<br>
<p><p><p>DO k = 1 to m
<br>
<p>CALL MPI_RECV(recv_data, num, type, source(k), tag, MPI_COMM_WORLD, status,
<br>
ierr)
<br>
<p>ENDDO
<br>
<p><p><p>&nbsp;This solves my problem. But it gives memory leakage; Ram gets filled after
<br>
few thousands of iteration. What is the solution/remedy? How should I tackle
<br>
this?
<br>
<p><p><p>In another CFD code I removed this problem of memory-filling by following
<br>
(in that code n=m) :
<br>
<p><p><p>DO j = 1 to n
<br>
<p>CALL MPI_ISEND (send_data, num, type, dest(j), tag, MPI_COMM_WORLD, ireq(j),
<br>
ierr)
<br>
<p>ENDDO
<br>
<p><p><p>CALL MPI_WAITALL(n,ireq,status,ierr)
<br>
<p><p><p>DO k = 1 to n
<br>
<p>CALL MPI_RECV(recv_data, num, type, source(k), tag, MPI_COMM_WORLD, status,
<br>
ierr)
<br>
<p>ENDDO
<br>
<p><p><p>But this is not working in current code; and the previous code was not
<br>
giving correct results with large number of processes.
<br>
<p><p><p>Please suggest solution.
<br>
<p><p><p>THANKS A LOT FOR YOUR KIND ATTENTION.
<br>
<p><p><p>With best regards,
<br>
<p>Amjad Ali.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10354.php">Kritiraj Sajadah: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10352.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
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
