<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 11:25:56 2007" -->
<!-- isoreceived="20070509152556" -->
<!-- sent="Wed, 9 May 2007 11:25:43 -0400" -->
<!-- isosent="20070509152543" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="E170A1B6-DDE7-45EA-9AC0-E815281F745F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1178721476.382.18.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 11:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I would marginally prefer if this bug is tracked in the Open  
<br>
MPI trac ticket system, not the OFA bugzilla (Steve W. will have  
<br>
write access there as soon as Chelsio submits their OMPI 3rd party  
<br>
contribution agreement).  We've traditionally [mostly] tracked OMPI  
<br>
bugs in the OMPI bug system and OFED-specific OMPI packaging problems  
<br>
in the OFA bugzilla.  It's a gray area, I admit.
<br>
<p>But since I'm not the uDAPL maintainer in Open MPI, moving the bug  
<br>
over there will allow the Right people to see it (some OMPI  
<br>
developers are cross subscribed to the OFA general list, but not  
<br>
all).  For example, this udapl problem is likely related to the  
<br>
existing OMPI trac ticket 890 (<a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
<br>
ticket/890).
<br>
<p><p>On May 9, 2007, at 10:37 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although as Boris pointed out, perhaps the hack in OMPI is no longer
</span><br>
<span class="quotelev1">&gt; needed at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2007-05-09 at 08:41 -0500, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 606 opened to track the udapl change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 607 opened to track the ompi change to remove the port number  
</span><br>
<span class="quotelev2">&gt;&gt; stashing
</span><br>
<span class="quotelev2">&gt;&gt; hack.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Status: I have a patch from Arlin to test today.  I will test with  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; patch and with the OMPI port hack removed.  Stay tuned...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2007-05-08 at 15:47 -0700, Arlin Davis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve Wise wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like the group to consider including changes needed to OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and/or ofa udapl to get OMPI working again on udapl for ofed-1.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will provide OMPI support over iwarp devices via udapl  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until we can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get rdma-cm support added to OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve,cCan you open a bug to track this?
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1499.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1503.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
