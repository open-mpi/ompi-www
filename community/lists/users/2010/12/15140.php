<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 12:14:30 2010" -->
<!-- isoreceived="20101215171430" -->
<!-- sent="Wed, 15 Dec 2010 18:14:24 +0100" -->
<!-- isosent="20101215171424" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="C4177A92-E3F4-4ADC-9EF4-F050A687D01A_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="370CD81A-9870-4B31-AA46-A5CD6BB88E59_at_open-mpi.org" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 12:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15139.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15139.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Ralph,
<br>
<p>&nbsp;&nbsp;Thanks for taking time to help me.
<br>
<p>Le 15 d&#233;c. 10 &#224; 16:27, Ralph Castain a &#233;crit :
<br>
<p><span class="quotelev1">&gt; It would appear that there is something trying to talk to a socket  
</span><br>
<span class="quotelev1">&gt; opened by one of your daemons. At a guess, I would bet the problem  
</span><br>
<span class="quotelev1">&gt; is that a prior job left a daemon alive that is talking on the same  
</span><br>
<span class="quotelev1">&gt; socket.
</span><br>
<p>gg= At first glance, this could be possible, although I got no evidence
<br>
about it when looking for ghost processes of mine on the relevant nodes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you by chance using static ports for the job?
</span><br>
<p>gg= How could I know that ?
<br>
Is there an easy way to workaround these static ports ?
<br>
Would it prevent the jobs to collide ghost jobs/processes as suggested  
<br>
below, please ?
<br>
I did not spot any info about static ports inside of ompi_info  
<br>
output ... ;-)
<br>
<p><span class="quotelev1">&gt; Did you run another job just before this one that might have left a  
</span><br>
<span class="quotelev1">&gt; daemon somewhere?
</span><br>
<p>gg= Again, it could be possible that with my many jobs crashing over  
<br>
the cluster,
<br>
PBS was unable to clean up the nodes in time before restarting a new  
<br>
one.
<br>
But I have no evidence.
<br>
<p>&nbsp;&nbsp;The exact full error message was like this:
<br>
[r36i3n15:18992] [[1468,0],254]-[[1468,0],14]  
<br>
mca_oob_tcp_peer_recv_connect_ack: received unexpected process  
<br>
identifier [[1468,1],1643]
<br>
<p>&nbsp;&nbsp;From some debug info I got, process 1468 seems to relate to node  
<br>
rank 0 (r33i0n0),
<br>
while process 1643 seems to originates from node r36i0n14.
<br>
<p>&nbsp;&nbsp;But, indeed, none of r33i0n0, r36i0n14 or r36i3n15 exhibits any  
<br>
process like 1468 or 1643,
<br>
while process 18992 is indeed the master one on r36i3n15.
<br>
<p>&nbsp;&nbsp;Thanks,   Best,    G.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2010, at 1:05 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with OpenMPI 1.4.3 on an SGI Altix cluster with 4096 cores,  
</span><br>
<span class="quotelev2">&gt;&gt; I got
</span><br>
<span class="quotelev2">&gt;&gt; this error message, right at startup :
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_recv_connect_ack: received unexpected process  
</span><br>
<span class="quotelev2">&gt;&gt; identifier [[13816,0],209]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the whole job is going to spin for an undefined period, without  
</span><br>
<span class="quotelev2">&gt;&gt; crashing/aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What could be the culprit please ?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a workaround ?
</span><br>
<span class="quotelev2">&gt;&gt; Which parameter is to be tuned ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any help,    Best,    G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15139.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15139.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
