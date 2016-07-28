<?
$subject_val = "Re: [OMPI users] programming qsn??";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 21:05:09 2009" -->
<!-- isoreceived="20090814010509" -->
<!-- sent="Fri, 14 Aug 2009 06:05:05 +0500" -->
<!-- isosent="20090814010505" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] programming qsn??" -->
<!-- id="428810f20908131805x3e5631e4t2cc45b3b7dcc675c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A847866.50709_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] programming qsn??<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-13 21:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10356.php">Jeff Squyres: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 14, 2009 at 1:32 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  amjad ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am parallelizing a CFD 2D code in FORTRAN+OPENMPI. Suppose that the grid
</span><br>
<span class="quotelev1">&gt; (all triangles) is partitioned among 8 processes using METIS. Each process
</span><br>
<span class="quotelev1">&gt; has different number of neighboring processes. Suppose each process has n
</span><br>
<span class="quotelev1">&gt; elements/faces whose data it needs to sends to corresponding neighboring
</span><br>
<span class="quotelev1">&gt; processes, and it has m number of elements/faces on which it needs to get
</span><br>
<span class="quotelev1">&gt; data from corresponding neighboring processes. Values of n and m are
</span><br>
<span class="quotelev1">&gt; different for each process. Another aim is to hide the communication behind
</span><br>
<span class="quotelev1">&gt; computation. For this I do the following for each process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO j = 1 to n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_ISEND (send_data, num, type, dest(j), tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; ireq(j), ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO k = 1 to m
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_RECV(recv_data, num, type, source(k), tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; status, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This solves my problem. But it gives memory leakage; Ram gets filled after
</span><br>
<span class="quotelev1">&gt; few thousands of iteration. What is the solution/remedy? How should I tackle
</span><br>
<span class="quotelev1">&gt; this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In another CFD code I removed this problem of memory-filling by following
</span><br>
<span class="quotelev1">&gt; (in that code n=m) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO j = 1 to n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_ISEND (send_data, num, type, dest(j), tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; ireq(j), ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_WAITALL(n,ireq,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO k = 1 to n
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_RECV(recv_data, num, type, source(k), tag, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; status, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this is not working in current code; and the previous code was not
</span><br>
<span class="quotelev1">&gt; giving correct results with large number of processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how literally to read the code you sent.  Maybe your actual
</span><br>
<span class="quotelev1">&gt; code &quot;does the right thing&quot;, but just to confirm I think the correct code
</span><br>
<span class="quotelev1">&gt; should look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO J=1, N
</span><br>
<span class="quotelev1">&gt;    CALL MPI_ISEND(...)
</span><br>
<span class="quotelev1">&gt; END DO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DO K=1, M
</span><br>
<span class="quotelev1">&gt;    CALL MPI_RECV(...)
</span><br>
<span class="quotelev1">&gt; END DO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_WAITALL(...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, you start all non-blocking sends.  Then you perform receives.
</span><br>
<span class="quotelev1">&gt; Then you complete the sends.  More commonly, one would post all receives
</span><br>
<span class="quotelev1">&gt; first using non-blocking calls (MPI_IRECV), then perform all sends
</span><br>
<span class="quotelev1">&gt; (MPI_SEND), then complete the receives with MPI_WAITALL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet another option is to post non-blocking receives, then non-blocking
</span><br>
<span class="quotelev1">&gt; sends, then complete all sends and receives with a WAITALL call that has M+N
</span><br>
<span class="quotelev1">&gt; requests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if you already knew all this and I'm just overreacting to the
</span><br>
<span class="quotelev1">&gt; simplified code you sent out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No its OK; your sayings are really fine.
<br>
<p>Please tell me that if have multiple such ISEND-RECV squrntially for sending
<br>
receiving data then DO we need to declare separate status(MPI_STATUS_SIZE)
<br>
with for example status1, status2, ....; or a single declaration of it will
<br>
work for all??
<br>
<p>Regards,
<br>
Amjad Ali.
<br>
<p><span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Previous message:</strong> <a href="10356.php">Jeff Squyres: "Re: [OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10355.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
<li><strong>Reply:</strong> <a href="10358.php">Eugene Loh: "Re: [OMPI users] programming qsn??"</a>
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
