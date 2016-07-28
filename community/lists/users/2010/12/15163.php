<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 03:29:56 2010" -->
<!-- isoreceived="20101216082956" -->
<!-- sent="Thu, 16 Dec 2010 09:29:50 +0100" -->
<!-- isosent="20101216082950" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="4D09CDFE.6060800_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47376C68-1526-4DA3-B31C-0ECF114D6299_at_cisco.com" -->
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
<strong>Date:</strong> 2010-12-16 03:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Jeff,
<br>
<p>Le 16/12/2010 01:40, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 15, 2010, at 3:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not using the TCP BTL, only OPENIB one. Does this change the number of sockets in use per node, please ?
</span><br>
<span class="quotelev2">&gt;&gt; I believe the openib btl opens sockets for connection purposes, so the count is likely the same. An IB person can confirm that...
</span><br>
<span class="quotelev1">&gt; Nope -- the openib BTL uses the daemon-based communication mechanism.  So it should only use the TCP ports that are already open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this problem *always* happen, or does it only happen once in a great while?
</span><br>
gg= No, this problem happens rather often, almost every other time.
<br>
Seems to happen more often as the number of cores increases.
<br>
<p><span class="quotelev1">&gt; I've seen a similar problem with the TCP BTL every once in a great while -- where a random, errant (non-Open MPI) process connects to a socket that Open MPI is listening on (regardless of whether it's the TCP BTL or TCP OOB).  This causes badness in Open MPI because we don't verify the connector properly, and more importantly, don't handle it nicely when the connector is not Open MPI.  I've seen this happen with network malware scanners, for example -- they try to connect to large swaths of TCP ports and sometimes unluckily hit an open Open MPI TCP port.
</span><br>
gg= Is there a way with the *current* code, to direct OpenMPI to use a 
<br>
restricted range of TCP ports,
<br>
that I can choose at launch time ?
<br>
Or, conversely, which routine should I patch in my private OpenMPI 
<br>
install to aim at the same result ?
<br>
<p>&nbsp;&nbsp;Usually, on the cluster I use, workers are not shared with any other 
<br>
tasks ... ;;-((
<br>
<p>&nbsp;&nbsp;Thanks,   Best,    G.
<br>
<p><span class="quotelev1">&gt; We have a fix for this coming in a future version of the TCP BTL; looks like we should also harden this up for the TCP OOB as well...
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15162.php">Doug Reeder: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>In reply to:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Reply:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
