<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 22:43:51 2010" -->
<!-- isoreceived="20100824024351" -->
<!-- sent="Mon, 23 Aug 2010 22:43:43 -0400" -->
<!-- isosent="20100824024343" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?" -->
<!-- id="OFFA28161F.E922B288-ON85257789.000D4AF1-85257789.000EFE55_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="276291.50350.qm_at_web50802.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 22:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14097.php">Paul Kapinos: "[OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>Previous message:</strong> <a href="14095.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14093.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14115.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Network saturation could produce arbitrary long delays the total data load 
<br>
we are talking about is really small.  It is the responsibility of an MPI 
<br>
library to do one of the following:
<br>
<p>1) Use a reliable message protocol for each message (e.g. Infiniband RC or 
<br>
TCP/IP)
<br>
2) detect lost packets and retransmit them if the protocol is un-reliable 
<br>
(E.G. Infiniband UD or UDP/IP)
<br>
<p>It is the responsibility of an MPI library to manage any MPI or system 
<br>
buffers to prevent over run. That is why I mention that 1/2 MB messages 
<br>
would use rendezvous protocol.  The send side would push a descriptor 
<br>
(called an envelop) to the receive side. The receive side would push back 
<br>
an OK_to_send once a matching receive was posted.  The 1/2 MB message data 
<br>
would not begin to flow across the network until the receive buffer was 
<br>
known. 
<br>
<p>It is also the responsibility of an MPI library to detect when MPI level 
<br>
messages have become undeliverable and fail the job.
<br>
<p>Bugs are always a possibility but unless there is something very unusual 
<br>
about the cluster and interconnect or this is an unstable version of MPI, 
<br>
it seems very unlikely this use of MPI_Bcast with so few tasks and only a 
<br>
1/2 MB message would trip on one.  80 tasks is a very small number in 
<br>
modern parallel computing.  Thousands of tasks involved in an MPI 
<br>
collective has become pretty standard.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/23/2010 09:39:29 PM:
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have had a similar load related problem with Bcast.  I don't know 
</span><br>
<span class="quotelev1">&gt; what caused it though.  With this one, what about the possibility of
</span><br>
<span class="quotelev1">&gt; a buffer overrun or network saturation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14097.php">Paul Kapinos: "[OMPI users] is there a way to bring to light _all_ configure options in a ready installation?"</a>
<li><strong>Previous message:</strong> <a href="14095.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14093.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14109.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14115.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
