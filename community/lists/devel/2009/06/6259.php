<?
$subject_val = "Re: [OMPI devel] connect management for multirail (Open-)MX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 11:50:02 2009" -->
<!-- isoreceived="20090617155002" -->
<!-- sent="Wed, 17 Jun 2009 11:49:52 -0400" -->
<!-- isosent="20090617154952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] connect management for multirail (Open-)MX" -->
<!-- id="AFF99273-E590-4B77-8FC9-358463D9277F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A38E02A.7070900_at_inria.fr" -->
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
<strong>Date:</strong> 2009-06-17 11:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Previous message:</strong> <a href="6258.php">Brad Benton: "Re: [OMPI devel] 1.3.3 Release Schedule"</a>
<li><strong>In reply to:</strong> <a href="6252.php">Brice Goglin: "[OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>The connection mechanism in the MX BTL suffers from a big problem on  
<br>
multi-rail (if all NICS are identical). If the rails are connected  
<br>
using the same mapper, they will have identical ID. Unfortunately,  
<br>
these ID are supposed to be unique in order to guarantee the  
<br>
connection ordering (0 to 0, 1 to 1 and so on based on the mapper's  
<br>
MAC). However, the outcome I saw in the past in this case is not a  
<br>
deadlock but a poorly distribution of the data over the two NICS: one  
<br>
will be over-loaded while the other will not be used at all.
<br>
<p>There is no answer from a peer when we connect the MX BTLs. If the  
<br>
steps are the ones you described in your email, then I guess both of  
<br>
the peers try to connect to the other simultaneously. Now, when you  
<br>
have multiple rails, we treat them at the upper level as independent  
<br>
devices, and we will try to load balance the messages over all of  
<br>
them. The step (3) seems to indicate that another message (MPI) has  
<br>
been sent, and because of the load balancing scheme we try to connect  
<br>
the second device (rail in this context). In MX this works because we  
<br>
use the blocking function (mx_connect).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 17, 2009, at 08:23 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am debugging some sort of deadlock when doing multirail over Open- 
</span><br>
<span class="quotelev1">&gt; MX.
</span><br>
<span class="quotelev1">&gt; What I am seeing with 2 processes and 2 boards per node with *MX* is:
</span><br>
<span class="quotelev1">&gt; 1) process 0 rail 0 connects to process 1 rail 0
</span><br>
<span class="quotelev1">&gt; 2) p1r0 connects back to p0r0
</span><br>
<span class="quotelev1">&gt; 3) p0 rail 1 connects to p1 rail 1
</span><br>
<span class="quotelev1">&gt; 4) p1r1 connects back to p0r1
</span><br>
<span class="quotelev1">&gt; For some reason, with *Open-MX*, process 0 seems to start (3) before
</span><br>
<span class="quotelev1">&gt; process 1 has finished (2). It probably causes a deadlock because p1  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; polling on rail 0 for (2), while (3) needs somebody to poll on rail 1
</span><br>
<span class="quotelev1">&gt; for the connect handshake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the question is: is there anything in OMPI (1.3) guarantying that
</span><br>
<span class="quotelev1">&gt; the above 4 steps will occur in some specified order? If so, Open-MX  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; probably doing something wrong breaking the order. If not, adding a
</span><br>
<span class="quotelev1">&gt; progression thread to Open-MX might be the only solution...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Previous message:</strong> <a href="6258.php">Brad Benton: "Re: [OMPI devel] 1.3.3 Release Schedule"</a>
<li><strong>In reply to:</strong> <a href="6252.php">Brice Goglin: "[OMPI devel] connect management for multirail (Open-)MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>Reply:</strong> <a href="6260.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
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
