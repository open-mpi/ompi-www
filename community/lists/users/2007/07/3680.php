<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 10:43:51 2007" -->
<!-- isoreceived="20070716144351" -->
<!-- sent="Mon, 16 Jul 2007 08:43:19 -0600" -->
<!-- isosent="20070716144319" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] end-to-end data reliability" -->
<!-- id="F5AD0359-FD37-4D9B-AE21-0BB3BB447FF0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d2bbffd00707152105g37ffebd7x9b4c0203c4d6bee6_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 10:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Brian Barrett: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3678.php">Isaac Huang: "[OMPI users] end-to-end data reliability"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2007, at 10:05 PM, Isaac Huang wrote:
<br>
<p><span class="quotelev1">&gt; Hello, I read from the FAQ that current Open MPI releases don't
</span><br>
<span class="quotelev1">&gt; support end-to-end data reliability. But I still have some confusing
</span><br>
<span class="quotelev1">&gt; that can't be solved by googling or reading the FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I read from &quot;MPI - The Complete Reference&quot; that &quot;MPI provides the
</span><br>
<span class="quotelev1">&gt; user with reliable message transmission. A message sent is always
</span><br>
<span class="quotelev1">&gt; received correctly, and the user does not need to check for
</span><br>
<span class="quotelev1">&gt; transmission errors, timeouts, or other error conditions.&quot; But the
</span><br>
<span class="quotelev1">&gt; standard is sort of vague about what exactly this &quot;reliable message
</span><br>
<span class="quotelev1">&gt; transmission&quot; is. Does it at least require reliable delivery? Or, does
</span><br>
<span class="quotelev1">&gt; Open MPI notice and re-transmit lost data?
</span><br>
<p>Yes, the MPI standard guarantees message is reliably delivered in  
<br>
order.  MPI implementations have taken this to mean that if the  
<br>
transport is &quot;reliable&quot;, then the MPI doesn't have to do anything  
<br>
special.  So we assume that TCP delivers data into our headers  
<br>
properly and same for shared memory, Myrinet, and InfiniBand (the RC  
<br>
protocol, anyway).  We also assume that any data sent arrives on the  
<br>
other side.
<br>
<p>We have an experimental point-to-point engine, DR, that provides  
<br>
reliable transportation even for networks that have corruption and/or  
<br>
packet loss.  The engine isn't available in a stable release, as it  
<br>
is still in the experimental phase.  Checksums and timers are used to  
<br>
detect message corruption and recover.  This allows us to play with  
<br>
non-reliable network protocols such as UDP or InfiniBand's UD protocol.
<br>
<p>In truth, however, the reliability guaranteed by the transports  
<br>
currently in use by Open MPI are more than enough to meet the needs  
<br>
of almost all users.  Most of the supported networks have some type  
<br>
of error detection or correction that provides protection only  
<br>
slightly statistically worse than what we could provide within Open  
<br>
MPI, but at a much lower cost.
<br>
<p><span class="quotelev1">&gt; 2. When a data corruption happens (in message data), is the data in
</span><br>
<span class="quotelev1">&gt; the message envelop still reliable? Or, does Open MPI or the MPI
</span><br>
<span class="quotelev1">&gt; standard guarantee data integrity of message envelops? I'm
</span><br>
<span class="quotelev1">&gt; particularly interested in MPI_TAG which I use to encode things.
</span><br>
<p>In my opinion, any guarantee that applies to the message applies to  
<br>
the meta-data (tag, source, length) as well.  The DR component will  
<br>
provide the same level of protection to the headers as it does to the  
<br>
payload.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Brian Barrett: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3678.php">Isaac Huang: "[OMPI users] end-to-end data reliability"</a>
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
