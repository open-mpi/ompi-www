<?
$subject_val = "[OMPI users] MPI Persistent Communication Question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 04:03:06 2010" -->
<!-- isoreceived="20100628080306" -->
<!-- sent="Mon, 28 Jun 2010 04:03:01 -0400" -->
<!-- isosent="20100628080301" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Persistent Communication Question" -->
<!-- id="AANLkTimsQQ8oR5bYmGv274oR-2l-onnRjhrFrEU98Pur_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Persistent Communication Question<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 04:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I observed MPI_ISEND &amp; IRECV  performing little better than persistenent
<br>
communication; although I was hoping/desiring the opposite case??
<br>
<p>What is the be the best way of using MPI persistent communication in an
<br>
iterative/repetative kind of code about calling MPI_Free(); Should we call
<br>
MPI_Free() in every iteration or
<br>
only once when all the iterations/repetitions are performed?
<br>
Means which one is the best out of following two:
<br>
<p>(1)
<br>
Call this subroutines 1000 times
<br>
=============================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV_Init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send_Init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Startall()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Free()
<br>
=============================
<br>
<p>(2)
<br>
Call this subroutines 1000 times
<br>
===========================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV_Init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Send_Init()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Startall()
<br>
==========================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Free()  --------- call it only once at the end.
<br>
<p><p>Thanks in advance.
<br>
best regards
<br>
AA
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Previous message:</strong> <a href="13421.php">Reuti: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
<li><strong>Reply:</strong> <a href="13423.php">Jeff Squyres: "Re: [OMPI users] MPI Persistent Communication Question"</a>
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
