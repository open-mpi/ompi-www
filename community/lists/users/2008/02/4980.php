<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 08:39:08 2008" -->
<!-- isoreceived="20080205133908" -->
<!-- sent="Tue, 5 Feb 2008 15:29:21 +0200" -->
<!-- isosent="20080205132921" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080205132921.GC10354_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF8884FA95.69A6F1C8-ON852573E6.0047184A-852573E6.004824BC_at_us.ibm.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 08:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 05, 2008 at 08:07:59AM -0500, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; There is no misunderstanding of the MPI standard or the definition of
</span><br>
<span class="quotelev1">&gt; blocking in the bug3 example.  Both bug 3 and the example I provided are
</span><br>
<span class="quotelev1">&gt; valid MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you say, blocking means the send buffer can be reused when the MPI_Send
</span><br>
<span class="quotelev1">&gt; returns.  This is exactly what bug3 is count on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI is a reliable protocol which means that once MPI_Send returns, the
</span><br>
<span class="quotelev1">&gt; application can assume the message will be delivered once a matching recv
</span><br>
<span class="quotelev1">&gt; is posted.  There are only two ways I can think of for MPI to keep that
</span><br>
<span class="quotelev1">&gt; guarantee.
</span><br>
<span class="quotelev1">&gt; 1) Before return from MPI_Send, copy the envelop and data to some buffer
</span><br>
<span class="quotelev1">&gt; that will be preserved until the MPI_Recv gets posted
</span><br>
<span class="quotelev1">&gt; 2) delay the return from MPI_Send until the MPI_Recv is posted and then
</span><br>
<span class="quotelev1">&gt; move data from the intact send buffer to the posted receive buffer. Return
</span><br>
<span class="quotelev1">&gt; from MPI_Send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The requirement in the standard is that if libmpi takes option 1, the
</span><br>
<span class="quotelev1">&gt; return from MPI_Send cannot occur unless there is certainty the buffer
</span><br>
<span class="quotelev1">&gt; space exists. Libmpi cannot throw the message over the wall and fail the
</span><br>
<span class="quotelev1">&gt; job if it cannit be buffered.
</span><br>
As I said Open MPI has flow control on transport layer to prevent messages
<br>
from been dropped by network. This mechanism should allow program like
<br>
yours to work, but bug3 is another story because it generate huge
<br>
amount of unexpected messages and Open MPI has no mechanism to prevent
<br>
unexpected messages to blow memory consumption. Your point is that
<br>
according to MPI spec this is not a valid behaviour. I am not going to
<br>
argue with that especially as you can get desired behaviour by setting
<br>
eager limit to zero.
<br>
<p><span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 02/05/2008 02:28:27 AM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 04, 2008 at 04:23:13PM -0500, Sacerdoti, Federico wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bug3 is a test-case derived from a real, scalable application (desmond
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for molecular dynamics) that several experienced MPI developers have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; worked on. Note the MPI_Send calls of processes N&gt;0 are *blocking*; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi silently sends them in the background and overwhelms process 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; due to lack of flow control.
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send is *blocking* in MPI sense of the word i.e when MPI_Send returns
</span><br>
<span class="quotelev2">&gt; &gt; send buffer can be reused. MPI spec section 3.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;          Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4981.php">Josh Hursey: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4979.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
