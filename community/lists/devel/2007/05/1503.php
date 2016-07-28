<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 11:42:19 2007" -->
<!-- isoreceived="20070509154219" -->
<!-- sent="Wed, 09 May 2007 11:42:08 -0400" -->
<!-- isosent="20070509154208" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl - bugs opened" -->
<!-- id="4641EBD0.3000600_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E170A1B6-DDE7-45EA-9AC0-E815281F745F_at_cisco.com" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 11:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1502.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1500.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree OMPI trac ticket #890 should cover this. I will test the 
<br>
suggested fix, just removing that one line from btl_udapl.c, on Solaris. 
<br>
I am still not set up on Linux so hopefully Steve can confirm there.
<br>
<p>-DON
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;FWIW, I would marginally prefer if this bug is tracked in the Open  
</span><br>
<span class="quotelev1">&gt;MPI trac ticket system, not the OFA bugzilla (Steve W. will have  
</span><br>
<span class="quotelev1">&gt;write access there as soon as Chelsio submits their OMPI 3rd party  
</span><br>
<span class="quotelev1">&gt;contribution agreement).  We've traditionally [mostly] tracked OMPI  
</span><br>
<span class="quotelev1">&gt;bugs in the OMPI bug system and OFED-specific OMPI packaging problems  
</span><br>
<span class="quotelev1">&gt;in the OFA bugzilla.  It's a gray area, I admit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But since I'm not the uDAPL maintainer in Open MPI, moving the bug  
</span><br>
<span class="quotelev1">&gt;over there will allow the Right people to see it (some OMPI  
</span><br>
<span class="quotelev1">&gt;developers are cross subscribed to the OFA general list, but not  
</span><br>
<span class="quotelev1">&gt;all).  For example, this udapl problem is likely related to the  
</span><br>
<span class="quotelev1">&gt;existing OMPI trac ticket 890 (<a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> 
</span><br>
<span class="quotelev1">&gt;ticket/890).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On May 9, 2007, at 10:37 AM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Although as Boris pointed out, perhaps the hack in OMPI is no longer
</span><br>
<span class="quotelev2">&gt;&gt;needed at all...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Wed, 2007-05-09 at 08:41 -0500, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;606 opened to track the udapl change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;607 opened to track the ompi change to remove the port number  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;stashing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;hack.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Status: I have a patch from Arlin to test today.  I will test with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;patch and with the OMPI port hack removed.  Stay tuned...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Tue, 2007-05-08 at 15:47 -0700, Arlin Davis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Steve Wise wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;I would like the group to consider including changes needed to OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;and/or ofa udapl to get OMPI working again on udapl for ofed-1.2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;This will provide OMPI support over iwarp devices via udapl  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;until we can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;get rdma-cm support added to OMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Steve.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Steve,cCan you open a bug to track this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1502.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1500.php">Jeff Squyres: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1504.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
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
