<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 14:30:47 2010" -->
<!-- isoreceived="20101215193047" -->
<!-- sent="Wed, 15 Dec 2010 20:30:39 +0100" -->
<!-- isosent="20101215193039" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="4D09175F.5040102_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="018D48E0-B54A-4005-82AB-87816FD22457_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-15 14:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonsoir Ralph,
<br>
<p>Le 15/12/2010 18:45, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; It looks like all the messages are flowing within a single job (all 
</span><br>
<span class="quotelev1">&gt; three processes mentioned in the error have the same identifier). Only 
</span><br>
<span class="quotelev1">&gt; possibility I can think of is that somehow you are reusing ports - is 
</span><br>
<span class="quotelev1">&gt; it possible your system doesn't have enough ports to support all the 
</span><br>
<span class="quotelev1">&gt; procs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;&nbsp;Seems there is on every worker node a range of almost 30k ports available:
<br>
<span class="quotelev1"> &gt; ssh r33i0n0 cat /proc/sys/net/ipv4/ip_local_port_range
</span><br>
32768    61000
<br>
<p>&nbsp;&nbsp;This is AFAIK the only way I can get info about this.
<br>
Are these 30k ports this enough ?
<br>
<p>&nbsp;&nbsp;Question is : is OpenMPI opening ports from every node towards every 
<br>
other node ?
<br>
In such a case I could figure out why it is going to to lacking ports when
<br>
I increase the number of nodes.
<br>
<p>&nbsp;&nbsp;But: is there a possibility (mca param ?) to prevent OpenMPI to open 
<br>
so many ports ?
<br>
Indeed, apart from rank 0 node, every MPI process will need to 
<br>
communicate with ONLY
<br>
the 8 (nearest) neighbour nodes. So, there should be a switch somewhere 
<br>
telling OpenMPI
<br>
to open a port ONLY when needed, but I did not find it among ompi_info 
<br>
stuff ;-)
<br>
Which one is it ?
<br>
<p>&nbsp;&nbsp;Thanks,   Best,   G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15141.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15143.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
