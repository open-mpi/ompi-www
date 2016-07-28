<?
$subject_val = "Re: [OMPI users] UDP like messaging with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 12:07:49 2011" -->
<!-- isoreceived="20111121170749" -->
<!-- sent="Mon, 21 Nov 2011 12:07:43 -0500" -->
<!-- isosent="20111121170743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDP like messaging with MPI" -->
<!-- id="76A7647D-72D7-4F31-975B-1F184AB74D02_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1321717627.38571.androidMobile_at_web121716.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDP like messaging with MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 12:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17803.php">John R. Cary: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>Previous message:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Reply:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI defines only reliable communications -- it's not quite the same thing as UDP.  
<br>
<p>Hence, if you send something, it is guaranteed to be able to be received.  UDP may drop packets whenever it feels like it (e.g., when it is out of resources).
<br>
<p>Most MPI implementations will do some form of buffering of unexpected receives.  So if process A sends message X to process B, if B hasn't posted a matching receive for message X yet, B will likely silently accept the message under the covers and buffer it (or at least buffer part of it).  Hence, when you finally post the matching X receive in B, whatever of X was already received will already be there, but B may need to send a clear-to-send to A to get the rest of the message.
<br>
<p>Specifically: if X is &quot;short&quot;, A may eagerly send the whole message to B.  If X is &quot;long&quot;, A may only send the first part of B and wait for a CTS before sending the rest of it.
<br>
<p>MPI implementations typically do this in order to conserve buffer space -- i.e., if A sends a 10MB message, there's no point in buffering it at B until the matching receive is made and the message can be received directly into the destination 10MB buffer that B has made available.  If B accepted the 10MB X early, it would cost an additional 10MB to buffer it.  Ick.
<br>
<p>Alternatively, what I think Lukas was trying to suggest was that you can post non-blocking receives and simply test for completion later.  This allows MPI to receive straight into the target buffer without intermediate copies or additional buffers.  Then you can just check to see when the receive(s) is(are) done.
<br>
<p><p>On Nov 19, 2011, at 10:47 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; I know about tn&#196;&#177;s funct&#196;&#177;ons, they special requirements like the mpi_irecv call should be made in every process. My processes should not look for messages or implicitly receive them. But messages shuddering go into their msg queues and retrieved when needed. Just like udp communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17803.php">John R. Cary: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>Previous message:</strong> <a href="17801.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>Reply:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
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
