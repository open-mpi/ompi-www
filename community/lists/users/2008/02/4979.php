<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 08:08:02 2008" -->
<!-- isoreceived="20080205130802" -->
<!-- sent="Tue, 5 Feb 2008 08:07:59 -0500" -->
<!-- isosent="20080205130759" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF8884FA95.69A6F1C8-ON852573E6.0047184A-852573E6.004824BC_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080205072827.GA10354_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 08:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb
<br>
<p>There is no misunderstanding of the MPI standard or the definition of
<br>
blocking in the bug3 example.  Both bug 3 and the example I provided are
<br>
valid MPI.
<br>
<p>As you say, blocking means the send buffer can be reused when the MPI_Send
<br>
returns.  This is exactly what bug3 is count on.
<br>
<p>MPI is a reliable protocol which means that once MPI_Send returns, the
<br>
application can assume the message will be delivered once a matching recv
<br>
is posted.  There are only two ways I can think of for MPI to keep that
<br>
guarantee.
<br>
1) Before return from MPI_Send, copy the envelop and data to some buffer
<br>
that will be preserved until the MPI_Recv gets posted
<br>
2) delay the return from MPI_Send until the MPI_Recv is posted and then
<br>
move data from the intact send buffer to the posted receive buffer. Return
<br>
from MPI_Send
<br>
<p>The requirement in the standard is that if libmpi takes option 1, the
<br>
return from MPI_Send cannot occur unless there is certainty the buffer
<br>
space exists. Libmpi cannot throw the message over the wall and fail the
<br>
job if it cannit be buffered.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/05/2008 02:28:27 AM:
<br>
<p><span class="quotelev1">&gt; On Mon, Feb 04, 2008 at 04:23:13PM -0500, Sacerdoti, Federico wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Bug3 is a test-case derived from a real, scalable application (desmond
</span><br>
<span class="quotelev2">&gt; &gt; for molecular dynamics) that several experienced MPI developers have
</span><br>
<span class="quotelev2">&gt; &gt; worked on. Note the MPI_Send calls of processes N&gt;0 are *blocking*; the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi silently sends them in the background and overwhelms process 0
</span><br>
<span class="quotelev2">&gt; &gt; due to lack of flow control.
</span><br>
<span class="quotelev1">&gt; MPI_Send is *blocking* in MPI sense of the word i.e when MPI_Send returns
</span><br>
<span class="quotelev1">&gt; send buffer can be reused. MPI spec section 3.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;          Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4978.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4980.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
