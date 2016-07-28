<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 17:53:20 2009" -->
<!-- isoreceived="20090409215320" -->
<!-- sent="Thu, 09 Apr 2009 14:52:51 -0700" -->
<!-- isosent="20090409215251" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49DE6E33.9070600_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49DE63E9.3090404_at_bcgsc.ca" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 17:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Previous message:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; When running my Open MPI application, I'm seeing three processors that 
</span><br>
<span class="quotelev1">&gt; are using five times as much memory as the others when they should all 
</span><br>
<span class="quotelev1">&gt; use the same amount of memory. To start the debugging process, I would 
</span><br>
<span class="quotelev1">&gt; like to know if it's my application or the Open MPI library that's 
</span><br>
<span class="quotelev1">&gt; using the additional memory. Does anyone have any tips on calculating 
</span><br>
<span class="quotelev1">&gt; the amount of memory that Open MPI is using at a given moment in time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Open MPI application makes significant use of MPI_Irecv and 
</span><br>
<span class="quotelev1">&gt; MPI_Send. Every process has exactly one MPI_Irecv request active at 
</span><br>
<span class="quotelev1">&gt; any time. When it receives a message, it handles it, possibly 
</span><br>
<span class="quotelev1">&gt; transmits a response packet using MPI_Send, and starts a new MPI_Irecv 
</span><br>
<span class="quotelev1">&gt; request. What happens if one process is slow and lags behind? Will the 
</span><br>
<span class="quotelev1">&gt; messages be buffered at the sender or the receiver? Will the messages 
</span><br>
<span class="quotelev1">&gt; be buffered at the Open MPI level or at the OS level, say in a TCP 
</span><br>
<span class="quotelev1">&gt; transmit buffer or receive buffer?
</span><br>
<p>I'm no expert, but I think it's something like this:
<br>
<p>1) If the messages are short, they're sent over to the receiver.  If the 
<br>
receiver does not expect them (no MPI_Irecv posted), it buffers them up.
<br>
<p>2) If the messages are long, only a little bit is sent over to the 
<br>
receiver.  The receiver will take in that little bit, but until an 
<br>
MPI_Irecv is posted it will not signal the sender that any more can be sent.
<br>
<p>Are these messages being sent over TCP between nodes?  How long are they?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Previous message:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8854.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8855.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
