<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:19:32 2016" -->
<!-- isoreceived="20160509141932" -->
<!-- sent="Mon, 9 May 2016 14:19:29 +0000" -->
<!-- isosent="20160509141929" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="13232E56-80AC-478D-AF75-DCF0D70A30DB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALb_wBQhHa3EwJONAjxXxqTELbAoj1hJWPW3Kvv8cmMdx4AfXg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 10:19:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2016, at 8:23 AM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have another question. I thought MPI_Test is a local call, meaning it doesn't send/receive message. Am I misunderstanding something? Thanks again.
</span><br>
<p><span class="quotelev1">&gt;From the user's perspective, MPI_TEST is a local call, in that it checks to see if an MPI_Request has completed.  It is also defined to return &quot;immediately&quot;, which most MPI implementations -- Open MPI included -- interpret to mean &quot;return in a short, finite time.&quot;
</span><br>
<p>In Open MPI's case, MPI_TEST (and friends) run through the internal progression engine. I.e., it checks the status of ongoing MPI_Requests and sees if it can advance them in a non-blocking manner.  For example, a socket may have [partially] drained since the last time through the progression engine, and therefore we can write new bytes down that socket without blocking.
<br>
<p>In your case, if you MPI_ISEND a very large message, and it uses the TCP BTL as the transport, it'll likely try to send the first fragment of that message to the peer.  When the peer ACKs that first fragment, that gives the sender permission to send the remaining fragments (i.e., the receiver is ready for the entire message).  Hence, each time through the progression engine, the sender will write as many bytes as possible down the socket to that peer until the entire message has been written.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
