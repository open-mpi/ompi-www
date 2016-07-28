<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 19:40:55 2010" -->
<!-- isoreceived="20101216004055" -->
<!-- sent="Wed, 15 Dec 2010 19:40:47 -0500" -->
<!-- isosent="20101216004047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="47376C68-1526-4DA3-B31C-0ECF114D6299_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7154D0EC-4111-45E5-8F67-AD4DE32B439A_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 19:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>Previous message:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2010, at 3:24 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I am not using the TCP BTL, only OPENIB one. Does this change the number of sockets in use per node, please ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the openib btl opens sockets for connection purposes, so the count is likely the same. An IB person can confirm that...
</span><br>
<p>Nope -- the openib BTL uses the daemon-based communication mechanism.  So it should only use the TCP ports that are already open.
<br>
<p>Does this problem *always* happen, or does it only happen once in a great while?
<br>
<p>I've seen a similar problem with the TCP BTL every once in a great while -- where a random, errant (non-Open MPI) process connects to a socket that Open MPI is listening on (regardless of whether it's the TCP BTL or TCP OOB).  This causes badness in Open MPI because we don't verify the connector properly, and more importantly, don't handle it nicely when the connector is not Open MPI.  I've seen this happen with network malware scanners, for example -- they try to connect to large swaths of TCP ports and sometimes unluckily hit an open Open MPI TCP port.
<br>
<p>We have a fix for this coming in a future version of the TCP BTL; looks like we should also harden this up for the TCP OOB as well...
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>Previous message:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
