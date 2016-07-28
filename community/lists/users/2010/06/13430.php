<?
$subject_val = "Re: [OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 17:06:34 2010" -->
<!-- isoreceived="20100628210634" -->
<!-- sent="Mon, 28 Jun 2010 17:06:29 -0400" -->
<!-- isosent="20100628210629" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Persistent Communication Question" -->
<!-- id="AANLkTinls8gUyzGkYEfPKYN_eKDw6lhjPUQpancykqzA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C28F91F.4050604_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 17:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear E. Loh.
<br>
**
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another is whether you can overlap communications and computation.  This
</span><br>
<span class="quotelev1">&gt; does not require persistent channels, but only nonblocking communications
</span><br>
<span class="quotelev1">&gt; (MPI_Isend/MPI_Irecv).  Again, there are no MPI guarantees here, so you may
</span><br>
<span class="quotelev1">&gt; have to break your computation up and insert MPI_Test calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to get the basic functionality working first and then run
</span><br>
<span class="quotelev1">&gt; performance experiments to decide whether these really are areas that
</span><br>
<span class="quotelev1">&gt; warrant such optimizations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>*         CALL MPI_STARTALL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work that could be done with local data
<br>
---------------- (A)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_WAITALL( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work using the received data  --------------- (B)*
<br>
<p>In the above I have broken up the computation. In (A) I perform the work
<br>
that could be done with local data. When the recevied data is must for
<br>
remaining computations I put WAITALL  to ensure that data data from the
<br>
neighbouring processes has received. I am fine with MPI_IRECV and ISEND,
<br>
i.e.,
<br>
<p>*         CALL MPI_IRECV()
<br>
**         CALL MPI_ISEND()*
<br>
*          -------perform work that could be done with local data
<br>
---------------- (A)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_WAITALL( )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work using the received data  --------------- (B)*
<br>
<p><p>But I am doubtful whether I am getting computation-communication overlap to
<br>
save time.or I am getting the the same performance as could be obtained by,
<br>
<p>*         CALL MPI_IRECV()
<br>
**         CALL MPI_ISEND()*
<br>
*         CALL MPI_WAITALL( )*
<br>
*          -------perform work that could be done with local data
<br>
---------------- (A)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-------perform work using the received data  --------------- (B)*
<br>
<p>In this case (equivalent to blocking communication), I observed that only
<br>
around 5% more time it takes.
<br>
<p>And the SECOND desire is to use Persistent communication for even better
<br>
speedup.
<br>
<p><p>best regards,
<br>
AA.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13431.php">amjad ali: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>In reply to:</strong> <a href="13429.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13432.php">Eugene Loh: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
