<?
$subject_val = "Re: [OMPI users] send partial vector from all to all + ALLGATHERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 10:33:17 2014" -->
<!-- isoreceived="20141223153317" -->
<!-- sent="Tue, 23 Dec 2014 16:33:17 +0100" -->
<!-- isosent="20141223153317" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send partial vector from all to all + ALLGATHERV" -->
<!-- id="CAG8o1y4ceFTZLDkoZHV27dGV+AyCqkM1CW2ytv3SmWoApLmKaw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y6EKMyGBKcJT2c2oye79CCE45WFWC+EWScAwumSKgLztQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send partial vector from all to all + ALLGATHERV<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-23 10:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26061.php">Diego Avesani: "[OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>In reply to:</strong> <a href="26061.php">Diego Avesani: "[OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
I get it.
<br>
<p>CALL
<br>
MPI_ALLGATHERV(sendbuf(MPI%MCstart:MPI%MCend),MPI%nmc,MPI_INTEGER,MCrank,MCncGlobal,MCdisplay,MPI_INTEGER,COMM_CART,MPI%iErr)
<br>
<p>I have to use :
<br>
<p>displs
<br>
[in] integer array (of length group size). Entry i specifies the
<br>
displacement (relative to recvbuf ) at which to place the incoming data
<br>
from process i
<br>
recvtype and
<br>
[in] data type of receive buffer elements (handle)
<br>
<p>The most important thing is that the counting starts from 0.
<br>
<p>Really Really thanks
<br>
<p><p>Diego
<br>
<p><p>On 23 December 2014 at 16:19, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I my program, I have created a vector and each processor assigns a value
</span><br>
<span class="quotelev1">&gt; to a part of it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *do i=MPI%start,MPI%end*
</span><br>
<span class="quotelev1">&gt; *        sendbuf(i)=MPI%rank*
</span><br>
<span class="quotelev1">&gt; * enddo*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *MPI%start *and* MPI%end* define the starting and ending positions in the
</span><br>
<span class="quotelev1">&gt; vector.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I would like that each processor knows all the value in the vector. I
</span><br>
<span class="quotelev1">&gt; think that the best solution could be to use MPI_ALLGATHERV:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL
</span><br>
<span class="quotelev1">&gt; MPI_ALLGATHERV(sendbuf(MPI%start:MPI%end),MPI%nmc,MPI_INTEGER,MCrank,display,MPI_INTEGER,COMM_CART,MPI%iErr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be wrong? Do you have some suggestions for debugging? Have I
</span><br>
<span class="quotelev1">&gt; correctly understood ALLGATHERV?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26063.php">Gary Jackson: "[OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Previous message:</strong> <a href="26061.php">Diego Avesani: "[OMPI users] send partial vector from all to all + ALLGATHERV"</a>
<li><strong>In reply to:</strong> <a href="26061.php">Diego Avesani: "[OMPI users] send partial vector from all to all + ALLGATHERV"</a>
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
