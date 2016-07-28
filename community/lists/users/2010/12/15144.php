<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 15:11:47 2010" -->
<!-- isoreceived="20101215201147" -->
<!-- sent="Wed, 15 Dec 2010 21:11:41 +0100" -->
<!-- isosent="20101215201141" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="4D0920FD.5080603_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="686E6431-7C07-4950-AC0B-B60814DBBCA7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-15 15:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15145.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "[OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>&nbsp;&nbsp;I am not using the TCP BTL, only OPENIB one. Does this change the 
<br>
number of sockets in use per node, please ?
<br>
<p>But I suspect the ORTE daemons are communicating only through TCP 
<br>
anyway, right ?
<br>
<p>&nbsp;&nbsp;Also, is there anybody in the OpenMPI team using an SGI Altix cluster 
<br>
with a high number of nodes
<br>
(1k nodes, ie 8k cores) that I could ask him (her) about the right setup ?
<br>
<p>&nbsp;&nbsp;Thanks,   Best,    G.
<br>
<p><p><p>Le 15/12/2010 21:03, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 15, 2010, at 12:30 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bonsoir Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 15/12/2010 18:45, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like all the messages are flowing within a single job (all three processes mentioned in the error have the same identifier). Only possibility I can think of is that somehow you are reusing ports - is it possible your system doesn't have enough ports to support all the procs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Seems there is on every worker node a range of almost 30k ports available:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh r33i0n0 cat /proc/sys/net/ipv4/ip_local_port_range
</span><br>
<span class="quotelev2">&gt;&gt; 32768    61000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is AFAIK the only way I can get info about this.
</span><br>
<span class="quotelev2">&gt;&gt; Are these 30k ports this enough ?
</span><br>
<span class="quotelev1">&gt; Depends on how many nodes there are in your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question is : is OpenMPI opening ports from every node towards every other node ?
</span><br>
<span class="quotelev2">&gt;&gt; In such a case I could figure out why it is going to to lacking ports when
</span><br>
<span class="quotelev2">&gt;&gt; I increase the number of nodes.
</span><br>
<span class="quotelev1">&gt; Yes - in two ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. each ORTE daemon opens a port to every other daemon in the system. Thus, you need at least M ports if your job is running across M nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. each MPI process will open a direct port to any other MPI process that it communicates with. So if you have N processes on a node, and they only communicate to the 8 nearest neighbor nodes (each of which have N processes), and you are using the TCP btl, then you will consume an additional 8*N*N sockets on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But: is there a possibility (mca param ?) to prevent OpenMPI to open so many ports ?
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, apart from rank 0 node, every MPI process will need to communicate with ONLY
</span><br>
<span class="quotelev2">&gt;&gt; the 8 (nearest) neighbour nodes. So, there should be a switch somewhere telling OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; to open a port ONLY when needed, but I did not find it among ompi_info stuff ;-)
</span><br>
<span class="quotelev1">&gt; It always only opens a port when something tries to communicate - we never open ports in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which one is it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,   Best,   G.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15145.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "[OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
