<?
$subject_val = "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 07:04:40 2010" -->
<!-- isoreceived="20101216120440" -->
<!-- sent="Thu, 16 Dec 2010 07:04:36 -0500" -->
<!-- isosent="20101216120436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix" -->
<!-- id="5AA968D7-575C-4F4F-A12D-33A1EBE0BCA0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D09CDFE.6060800_at_cern.ch" -->
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
<strong>Date:</strong> 2010-12-16 07:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2010, at 3:29 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Does this problem *always* happen, or does it only happen once in a great while?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; gg= No, this problem happens rather often, almost every other time.
</span><br>
<span class="quotelev1">&gt; Seems to happen more often as the number of cores increases.
</span><br>
<p>Well that's a bummer -- it seems to indicate that this may be a problem in OMPI.
<br>
<p>Are you running multiple OMPI jobs concurrently?  More specifically, are you starting multiple jobs on the same machine more-or-less at the same time?  I'm wondering if our TCP startup mechanism is somehow accidentally getting the TCP ports from a different job.  I can't imagine how that would be happening, but...
<br>
<p><span class="quotelev1">&gt; gg= Is there a way with the current code, to direct OpenMPI to use a restricted range of TCP ports,
</span><br>
<span class="quotelev1">&gt; that I can choose at launch time ?
</span><br>
<p>Yes.  In OMPI v1.4, there's 2 MCA params:
<br>
<p>oob_tcp_port_min_v4 (default: 0)
<br>
oob_tcp_port_range_v4 (default: 65536)
<br>
<p>Try setting these values to mutually exclusive ranges for each of your jobs and see if that fixes the problem.  Keep in mind that user-level ports start at 1024, so your lowest range might as well start at 1024.
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
<li><strong>Next message:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15171.php">Jeff Squyres: "Re: [OMPI users] problem when compiling ompenmpiV1.5.1"</a>
<li><strong>In reply to:</strong> <a href="15163.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15186.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
