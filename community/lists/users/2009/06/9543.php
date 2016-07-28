<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 11:46:56 2009" -->
<!-- isoreceived="20090604154656" -->
<!-- sent="Thu, 4 Jun 2009 11:46:48 -0400" -->
<!-- isosent="20090604154648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="D2D86507-A890-4463-A2EB-2C0B65A8F949_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090604102750.8d51b4b3.nludban_at_osc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving MPI messages of unknown size<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 11:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
<li><strong>Previous message:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few points in addition to what has already been said:
<br>
<p>1. You can always post a receive for size N when the actual message is  
<br>
&lt;=N.  You can use this fact to pre-post a receive with size N, where N  
<br>
is large enough for the header and a medium-sized message.  If you  
<br>
have a short message, it'll fit entirely within N and you're good.   
<br>
If  the message size is greater than N, you can still send the first  
<br>
&quot;eager&quot; part of the message with the header, and then send a second  
<br>
message with the remaining (size-N) after that.  So for short/medium  
<br>
messages, you'll still accomplish the transfer in 1 network message,  
<br>
but long messages will effectively require 2.  And for long messages,  
<br>
you're already taking a long time to transmit the message, so adding  
<br>
the overhead of a 2nd MPI message is negligible compared to the  
<br>
overall time.
<br>
<p>Note that this is pretty much what most MPI's do under the covers,  
<br>
anyway (including Open MPI).
<br>
<p>2. There is a dormant-but-will-be-resurrected proposal in front of the  
<br>
MPI-3 Forum right now to do exactly what you want: &quot;MPI receive and  
<br>
allocate a buffer big enough for however big the incoming message  
<br>
is.&quot;  But even if that proposal passes, it'll likely be a while before  
<br>
it shows up in MPI implementations.  :-\
<br>
<p><p>On Jun 4, 2009, at 10:27 AM, Neil Ludban wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Date: Thu, 4 Jun 2009 11:14:16 +1000
</span><br>
<span class="quotelev2">&gt; &gt; From: Lars Andersson &lt;larsand_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] Receiving MPI messages of unknown size
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When using blocking message passing, I have simply solved the  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev2">&gt; &gt; by first sending a small, fixed size header containing the size of
</span><br>
<span class="quotelev2">&gt; &gt; rest of the data, sent in the following mpi message. When using
</span><br>
<span class="quotelev2">&gt; &gt; non-blocking message passing, this doesn't seem to be such a good
</span><br>
<span class="quotelev2">&gt; &gt; idea, since we cant post the main data transfer until we have  
</span><br>
<span class="quotelev1">&gt; received
</span><br>
<span class="quotelev2">&gt; &gt; the message header... It seems to take away most of the advantages  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt; non-blocking io in the first place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If enough messages are small enough, a medium sized message with
</span><br>
<span class="quotelev1">&gt; fixed header and variable data eliminates most of the second message
</span><br>
<span class="quotelev1">&gt; overhead.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9544.php">DEVEL Michel: "[OMPI users] What flags for configure for a single machine installation ?"</a>
<li><strong>Previous message:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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
