<?
$subject_val = "Re: [OMPI users] MPI_Recv operation time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 10:12:32 2012" -->
<!-- isoreceived="20121105151232" -->
<!-- sent="Mon, 05 Nov 2012 07:12:26 -0800" -->
<!-- isosent="20121105151226" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv operation time" -->
<!-- id="5097D759.6050406_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFAp2dJqPeXTnFrhAXLVGVX=7uTjZRoJPC-WKNnG=iaPrs7Azw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv operation time<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 10:12:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Previous message:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>In reply to:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/5/2012 1:07 AM, huydanlin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    My objective is I want to calculate the time perform by MPI_Send &amp; 
</span><br>
<span class="quotelev1">&gt; MPI_Recv . In case MPI_Send, i can put the timer before the MPI_Send 
</span><br>
<span class="quotelev1">&gt; and after its. like this &quot;
</span><br>
<span class="quotelev1">&gt; t1=MPI_Wtime(),
</span><br>
<span class="quotelev1">&gt; MPI_Send....
</span><br>
<span class="quotelev1">&gt; t2= MPI_Wtime
</span><br>
<span class="quotelev1">&gt; tsend= t2 -t1; it mean when the message go to the system buffer, the 
</span><br>
<span class="quotelev1">&gt; control return to the sending process.
</span><br>
It means that the message is out of the user's send buffer.  The time 
<br>
could include a rendezvous with the receiving process.  Depending on 
<br>
what mechanism is used, a send (e.g., of a long message) might not be 
<br>
able to complete until most of the message is already in the receiver's 
<br>
buffer.
<br>
<span class="quotelev1">&gt; So I can measure the MPI_Send.
</span><br>
<span class="quotelev1">&gt;    But my problem in MPI_Recv. If i do like MPI_Send( put the timer 
</span><br>
<span class="quotelev1">&gt; before and after MPI_Recv) I think it wrong. Because we dont know 
</span><br>
<span class="quotelev1">&gt; exactly when the message reach the system buffer in receiving side.
</span><br>
<span class="quotelev1">&gt;     So how can we measure the MPI_Recv operation time( time when the 
</span><br>
<span class="quotelev1">&gt; message is copied from the system buffer to the receive buffer) ?
</span><br>
You cannot if you're instrumenting the user's MPI program.  If you want 
<br>
to time the various phases of how the message was passed, you would have 
<br>
to introduce timers into the underlying MPI implementation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20640.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<li><strong>Previous message:</strong> <a href="20638.php">Ralph Castain: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>In reply to:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
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
