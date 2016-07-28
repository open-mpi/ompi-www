<?
$subject_val = "Re: [OMPI devel] connect management for multirail (Open-)MX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 14:45:15 2009" -->
<!-- isoreceived="20090617184515" -->
<!-- sent="Wed, 17 Jun 2009 14:45:06 -0400" -->
<!-- isosent="20090617184506" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] connect management for multirail (Open-)MX" -->
<!-- id="62B2C263-8240-46C7-A1FA-BC25AE49F92A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A391643.70505_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] connect management for multirail (Open-)MX<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-17 14:45:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, in Open MPI the connections are usually created on demand. As far  
<br>
as I know there are few devices that do not abide to this &quot;law&quot;, but  
<br>
MX is not one of them.
<br>
<p>To be more precise on how the connections are established, if we say  
<br>
that each node has two rails and we're doing a ping-pong, the first  
<br>
message from p0 to p1 will connect the first NIC, and the second  
<br>
message the second NIC (here I made the assumption that both network  
<br>
are similar). Moreover in MX, the connection is not symmetric, so your  
<br>
(1) and (2) might happens simultaneously.
<br>
<p>Does the code contain an MPI_Barrier ? If yes, this might be why you  
<br>
see the sequence (1), (2), (3) and (4) ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 17, 2009, at 12:13 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the answer. So if I understand correctly, the connection
</span><br>
<span class="quotelev1">&gt; order is decided dynamically depending on when each peer has some
</span><br>
<span class="quotelev1">&gt; messages to send and how the upper level load-balances them. There
</span><br>
<span class="quotelev1">&gt; shouldn't be anything preventing (1) and (2) from happening at the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; time then. And I wonder why I always see 1,2,3,4 with MX (using IMB)  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; not with Open-MX...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The connection mechanism in the MX BTL suffers from a big problem on
</span><br>
<span class="quotelev2">&gt;&gt; multi-rail (if all NICS are identical). If the rails are connected
</span><br>
<span class="quotelev2">&gt;&gt; using the same mapper, they will have identical ID. Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; these ID are supposed to be unique in order to guarantee the
</span><br>
<span class="quotelev2">&gt;&gt; connection ordering (0 to 0, 1 to 1 and so on based on the mapper's
</span><br>
<span class="quotelev2">&gt;&gt; MAC). However, the outcome I saw in the past in this case is not a
</span><br>
<span class="quotelev2">&gt;&gt; deadlock but a poorly distribution of the data over the two NICS: one
</span><br>
<span class="quotelev2">&gt;&gt; will be over-loaded while the other will not be used at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no answer from a peer when we connect the MX BTLs. If the
</span><br>
<span class="quotelev2">&gt;&gt; steps are the ones you described in your email, then I guess both of
</span><br>
<span class="quotelev2">&gt;&gt; the peers try to connect to the other simultaneously. Now, when you
</span><br>
<span class="quotelev2">&gt;&gt; have multiple rails, we treat them at the upper level as independent
</span><br>
<span class="quotelev2">&gt;&gt; devices, and we will try to load balance the messages over all of
</span><br>
<span class="quotelev2">&gt;&gt; them. The step (3) seems to indicate that another message (MPI) has
</span><br>
<span class="quotelev2">&gt;&gt; been sent, and because of the load balancing scheme we try to connect
</span><br>
<span class="quotelev2">&gt;&gt; the second device (rail in this context). In MX this works because we
</span><br>
<span class="quotelev2">&gt;&gt; use the blocking function (mx_connect).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 17, 2009, at 08:23 , Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am debugging some sort of deadlock when doing multirail over  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open-MX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I am seeing with 2 processes and 2 boards per node with *MX*  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) process 0 rail 0 connects to process 1 rail 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) p1r0 connects back to p0r0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) p0 rail 1 connects to p1 rail 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) p1r1 connects back to p0r1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For some reason, with *Open-MX*, process 0 seems to start (3) before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 1 has finished (2). It probably causes a deadlock because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p1 is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling on rail 0 for (2), while (3) needs somebody to poll on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rail 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the connect handshake.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, the question is: is there anything in OMPI (1.3) guarantying  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the above 4 steps will occur in some specified order? If so, Open- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MX is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably doing something wrong breaking the order. If not, adding a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progression thread to Open-MX might be the only solution...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
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
