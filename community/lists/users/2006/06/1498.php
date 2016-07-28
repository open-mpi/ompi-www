<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 13:26:46 2006" -->
<!-- isoreceived="20060629172646" -->
<!-- sent="Thu, 29 Jun 2006 13:26:51 -0400" -->
<!-- isosent="20060629172651" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C51_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 13:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Maybe in reply to:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- sometimes we just get overwhelmed
<br>
with all the incoming mail.  :-(
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Tony Ladd
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, June 17, 2006 9:47 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mca_btl_tcp_frag_send: writev failed 
</span><br>
<span class="quotelev1">&gt; with errno=110
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting the following error with openmpi-1.1b1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_send: writev failed with errno=110
</span><br>
<p>Can you try this with the final released version of 1.1, just to see if
<br>
the problem still exists?
<br>
<p>110 = ETIMEDOUT, which seems like a strange error to get here, because
<br>
the TCP connection should have already been made.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 1) This does not ever happen with other MPI's I have tried 
</span><br>
<span class="quotelev1">&gt; like MPICH and
</span><br>
<span class="quotelev1">&gt; LAM
</span><br>
<span class="quotelev1">&gt; 2) It only seems to happen with large numbers of cpus, 32 and 
</span><br>
<span class="quotelev1">&gt; occasionally
</span><br>
<span class="quotelev1">&gt; 16, and with larger messages sizes. In this case it ws 128K.
</span><br>
<span class="quotelev1">&gt; 3) It only seems to happen with dual cpus on each node.
</span><br>
<span class="quotelev1">&gt; 4) My configuration is default with (in openmpi-mca-params.conf): 
</span><br>
<span class="quotelev1">&gt; pls_rsh_agent = rsh 
</span><br>
<span class="quotelev1">&gt; btl = tcp,self 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include = eth1 
</span><br>
<span class="quotelev1">&gt; I also set --mca btl_tcp_eager_limit 131072 when running the 
</span><br>
<span class="quotelev1">&gt; program, though
</span><br>
<span class="quotelev1">&gt; leaving this out does not eliminate the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My program is a communication test; it sends bidirectional 
</span><br>
<span class="quotelev1">&gt; point to point
</span><br>
<span class="quotelev1">&gt; messages among N cpus. In one test it exchanges messages 
</span><br>
<span class="quotelev1">&gt; between pairs of
</span><br>
<span class="quotelev1">&gt; cpus, in another it reads from the node on its left and sends 
</span><br>
<span class="quotelev1">&gt; to the node on
</span><br>
<span class="quotelev1">&gt; its right (a kind of ring), and in a third it uses MPI_ALL_REDUCE.
</span><br>
<p>Can you share your code and give a recipe for replicating the problem?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Finally: the tcp driver in openmpi seems not nearly as good 
</span><br>
<span class="quotelev1">&gt; as the one in
</span><br>
<span class="quotelev1">&gt; LAM. I got higher throughput with far fewer dropouts with LAM.
</span><br>
<p>This is unfortunately a known issue.  The reason for it is that all the
<br>
current Open MPI members concentrate mainly on high-speed networks such
<br>
as InfiniBand, shared memory, and Myrinet.  TCP *works*, and so far that
<br>
has been &quot;good enough,&quot; but we're all aware that it still needs to be
<br>
optimized.
<br>
<p>The issue is actually not the protocols that we're using over TCP.
<br>
We're pretty sure that it has to do with how Open MPI's file descriptor
<br>
progression engine works (disclaimer: we haven't spent a lot of time
<br>
trying to categorize this since we've been focusing on the high speed
<br>
networks, but we're pretty sure that this is the Big issue).  
<br>
<p>Internally, we use the software package &quot;libevent&quot; as an engine for fd
<br>
and signal progress, but there are some cases that seem to be somewhat
<br>
inefficient.  We use this progression engine (as opposed to, say, a
<br>
dedicated socket state machine in the TCP BTL itself) because we need to
<br>
make progress on both the MPI TCP communications and the underlying
<br>
run-time environment (ORTE) TCP communications.  Hence, we needed a
<br>
central &quot;engine&quot; that can handle both.
<br>
<p>This is an area that we would love to get some outside help -- it's not
<br>
so much a network issues, but more likely a systems issue.  None of us
<br>
currently have engineering resources to spend time on this; is there
<br>
anyone out there in the open source community that could help?  If so,
<br>
we can provide more details on where we think the bottlenecks are, etc.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1497.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpirun and ncurses"</a>
<li><strong>Maybe in reply to:</strong> <a href="1443.php">Tony Ladd: "[OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Tony Ladd: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
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
