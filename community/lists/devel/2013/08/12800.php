<?
$subject_val = "Re: [OMPI devel] Detailed documentation on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 14:45:42 2013" -->
<!-- isoreceived="20130826184542" -->
<!-- sent="Mon, 26 Aug 2013 18:45:40 +0000" -->
<!-- isosent="20130826184540" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Detailed documentation on OpenMPI" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F836840_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130823055414.GA10082_at_xtreme.fed" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Detailed documentation on OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 14:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12799.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>In reply to:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As George replied, yes, Open MPI does use sockets -- that's in the TCP BTL (BTL = byte transfer layer, or point-to-point messaging layer for many network types).  Open MPI also uses shared memory for on-server communication.  But Open MPI can also use lots of other network types, if they're available (e.g., InfiniBand, iWARP, usNIC, portals, ugini, ...etc.).
<br>
<p>Note, too, that OMPI also uses sockets in the run-time system layer.
<br>
<p>You might want to look at a few Open MPI developer videos we did at Greenplum a while ago.  They talk about the general code base, and Brian's talk discusses in detail how the back-ends to MPI_SEND / MPI_RECV work, etc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/video/?category=internals">http://www.open-mpi.org/video/?category=internals</a>
<br>
<p>Enjoy.
<br>
<p><p><p>On Aug 23, 2013, at 1:54 AM, mahesh &lt;mahsh.baheti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that its a huge code base. But, I am looking for specific answers like does OpenMPI use sockets? Can programs written without mpi libraries be run on
</span><br>
<span class="quotelev1">&gt; clusters using orte(with some changes)? It would be really helpful if atleast these and related doubts can be solved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mahesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2013 (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote
</span><br>
<span class="quotelev2">&gt;&gt; Note that according to <a href="http://www.ohloh.net/p/openmpi">http://www.ohloh.net/p/openmpi</a>, OMPI is over 3/4M lines of code.  I doubt you will be able to get a thorough understanding of *all* of OMPI in a semester or two -- indeed, I doubt that any one Open MPI core developer has a thorough understanding of the whole code base (I know I don't!).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't say these things to discourage you; I actually just want to encourage you to set realistic expectations for what you'll be able to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there any particular areas that you'd like to focus on?  MPI -- and the Open MPI implementation -- covers a *lot* of different subsystems and concepts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2013, at 8:06 AM, mahesh &lt;mahsh.baheti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am an	newbie to all MPI concepts and I would like to understand the MPI source code thoroughly for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an academic project. So, what I	need is	an detailed explanation	of how every framework and module 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works. It would	be really helpful if wise people could point me	to right direction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mahesh
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12799.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>In reply to:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<!-- nextthread="start" -->
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
