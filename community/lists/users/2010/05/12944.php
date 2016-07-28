<?
$subject_val = "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 16:21:21 2010" -->
<!-- isoreceived="20100506202121" -->
<!-- sent="Thu, 06 May 2010 13:22:30 -0700" -->
<!-- isosent="20100506202230" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)" -->
<!-- id="4BE32506.402_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="u2q9d13e50c1005061235i78e81327ib1343938c4481a2c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 16:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, to minimize ambiguity, it may make sense to distinguish 
<br>
explicitly between two buffers:  the send buffer (specified in the 
<br>
MPI_Send or MPI_Bsend call) and the attached buffer (specified in some 
<br>
MPI_Buffer_attach call).
<br>
<p>Jovana Knezevic wrote:
<br>
<p><span class="quotelev1">&gt;On the other hand,  a slight confusion when Buffered send is concerned remains:
</span><br>
<span class="quotelev1">&gt;In my understanding, MPI_SEND (standard, blocking) does not return
</span><br>
<span class="quotelev1">&gt;until the send operation it invoked has completed. Completion can mean
</span><br>
<span class="quotelev1">&gt;the message was copied into an MPI internal buffer, or it can mean the
</span><br>
<span class="quotelev1">&gt;sending and receiving processes synchronized on the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPI_Send will return when it is safe to reuse the send buffer.  No 
<br>
guarantees about anything having to do with the receiver.
<br>
<p><span class="quotelev1">&gt;So, if we
</span><br>
<span class="quotelev1">&gt;decide to use buffered send (Bsend, so blocking), and we say &quot;I want
</span><br>
<span class="quotelev1">&gt;to allocate a large enough buffer, I want my data to be copied into
</span><br>
<span class="quotelev1">&gt;the buffer then, because I do not want anyone else to decide if I am
</span><br>
<span class="quotelev1">&gt;going to syncronize completely my sends and receives on the message -
</span><br>
<span class="quotelev1">&gt;I know what I'm doing :-)!&quot; then as soon as the data is copied to the
</span><br>
<span class="quotelev1">&gt;buffer, the call returns and the buffer can be reused.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
MPI_Bsend will return when it is safe to reuse the send buffer.  The 
<br>
message data might simply have been copied to the local attached buffer.
<br>
<p><span class="quotelev1">&gt;Is the difference in comparison to Ibsend that with Ibsend the data
</span><br>
<span class="quotelev1">&gt;doesn't even have to be copied to the buffer when the call returns,
</span><br>
<span class="quotelev1">&gt;
</span><br>
right.
<br>
<p><span class="quotelev1">&gt;or
</span><br>
<span class="quotelev1">&gt;something like that? Because otherwise, I still do not see the
</span><br>
<span class="quotelev1">&gt;difference: data copied into buffer-&gt; call returns! Why wouldn't I
</span><br>
<span class="quotelev1">&gt;reuse my message-buffer then?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12945.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
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
