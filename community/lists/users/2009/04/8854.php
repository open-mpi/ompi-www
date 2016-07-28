<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 19:06:33 2009" -->
<!-- isoreceived="20090409230633" -->
<!-- sent="Thu, 9 Apr 2009 16:06:01 -0700" -->
<!-- isosent="20090409230601" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49DE7F59.1010004_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DE6E33.9070600_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 19:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>In reply to:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; I'm no expert, but I think it's something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) If the messages are short, they're sent over to the receiver.  If the 
</span><br>
<span class="quotelev1">&gt; receiver does not expect them (no MPI_Irecv posted), it buffers them up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) If the messages are long, only a little bit is sent over to the 
</span><br>
<span class="quotelev1">&gt; receiver.  The receiver will take in that little bit, but until an 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv is posted it will not signal the sender that any more can be sent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these messages being sent over TCP between nodes?  How long are they?
</span><br>
<p>Each message is 2500 bytes. In this particular case, there are 8 
<br>
processes on one host and 8 more processes on another host. So, on the 
<br>
same host the communication will be shared memory, and between hosts 
<br>
it will be TCP.
<br>
<p>&nbsp;From your description, I'm guessing that either...
<br>
one process is falling behind the rest for whatever reason, and that 
<br>
it's buffering up received messages that haven't been handled by an 
<br>
MPI_Irecv.
<br>
<p>or...
<br>
one process is falling behind and the other processes that have 
<br>
messages to send to it are being queued up in a transmit buffer.
<br>
<p>Can statistics about the number of buffered messages (either tx or rx) 
<br>
be collected and reported by Open MPI? I suppose it would have to be a 
<br>
snapshot in time triggered either programatically or by a special kill 
<br>
signal, like SIGHUP or SIGUSR1.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>In reply to:</strong> <a href="8852.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
