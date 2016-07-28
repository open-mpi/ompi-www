<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 12:45:41 2010" -->
<!-- isoreceived="20101215174541" -->
<!-- sent="Wed, 15 Dec 2010 10:45:32 -0700" -->
<!-- isosent="20101215174532" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="018D48E0-B54A-4005-82AB-87816FD22457_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4177A92-E3F4-4ADC-9EF4-F050A687D01A_at_cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 12:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15140.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15140.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2010, at 10:14 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks for taking time to help me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 15 d&#233;c. 10 &#224; 16:27, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would appear that there is something trying to talk to a socket opened by one of your daemons. At a guess, I would bet the problem is that a prior job left a daemon alive that is talking on the same socket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gg= At first glance, this could be possible, although I got no evidence
</span><br>
<span class="quotelev1">&gt; about it when looking for ghost processes of mine on the relevant nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you by chance using static ports for the job?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gg= How could I know that ?
</span><br>
<span class="quotelev1">&gt; Is there an easy way to workaround these static ports ? 
</span><br>
<span class="quotelev1">&gt; Would it prevent the jobs to collide ghost jobs/processes as suggested below, please ?
</span><br>
<span class="quotelev1">&gt; I did not spot any info about static ports inside of ompi_info output ... ;-)
</span><br>
<p>It wouldn't happen by default - you would have had to tell us to use static ports by specifying an OOB port range. If you didn't do that (and remember, it could be in a default mca param file!), then the ports are dynamically assigned.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Did you run another job just before this one that might have left a daemon somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gg= Again, it could be possible that with my many jobs crashing over the cluster,
</span><br>
<span class="quotelev1">&gt; PBS was unable to clean up the nodes in time before restarting a new one.
</span><br>
<span class="quotelev1">&gt; But I have no evidence.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The exact full error message was like this:
</span><br>
<span class="quotelev1">&gt; [r36i3n15:18992] [[1468,0],254]-[[1468,0],14] mca_oob_tcp_peer_recv_connect_ack: received unexpected process identifier [[1468,1],1643]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From some debug info I got, process 1468 seems to relate to node rank 0 (r33i0n0),
</span><br>
<span class="quotelev1">&gt; while process 1643 seems to originates from node r36i0n14.
</span><br>
<p>The &quot;1468,1&quot; is an arbitrary identifier for the overall job. The &quot;1643&quot; indicates that it is an MPI process (rank=1643) within that job that provided the bad identifier.
<br>
<p>The &quot;1468,0&quot; identifiers in the early part of the message indicate that the error occurred on a port being used by two ORTE daemons for communication. Somehow, an MPI process (rank=1643) injected a message into that link.
<br>
<p>It looks like all the messages are flowing within a single job (all three processes mentioned in the error have the same identifier). Only possibility I can think of is that somehow you are reusing ports - is it possible your system doesn't have enough ports to support all the procs?
<br>
<p>I confess I'm a little at a loss  - never seen this problem before, and we run on very large clusters.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  But, indeed, none of r33i0n0, r36i0n14 or r36i3n15 exhibits any process like 1468 or 1643,
</span><br>
<span class="quotelev1">&gt; while process 18992 is indeed the master one on r36i3n15.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks,   Best,    G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2010, at 1:05 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bonjour,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running with OpenMPI 1.4.3 on an SGI Altix cluster with 4096 cores, I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this error message, right at startup :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_peer_recv_connect_ack: received unexpected process identifier [[13816,0],209]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the whole job is going to spin for an undefined period, without crashing/aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What could be the culprit please ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a workaround ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which parameter is to be tuned ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for any help,    Best,    G.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15140.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15140.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15142.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
