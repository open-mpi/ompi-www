<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 18:19:39 2013" -->
<!-- isoreceived="20131114231939" -->
<!-- sent="Thu, 14 Nov 2013 15:18:39 -0800" -->
<!-- isosent="20131114231839" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="134D1E6F-601F-4000-B746-6AB7172B2A5F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00BD0EA5-8A77-4E7B-AFFD-880AE97ED413_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 18:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 3:07 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So far as I can tell, the issue is one of blocking. The OOB handshake is now async - i.e., you post a non-blocking recv at the beginning of time, and then do a non-blocking send to the other side when you want to create a connection. The question is: how do you know when that connection is ready?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you describe, the new behavior is identical to original one. We post non-blocking (persistent) receive during initialization. Later OMPI has barrier in the flow to ensure that all processes reached the point.
</span><br>
<span class="quotelev1">&gt; On first send, we use a non-blocking oob-send to initialize the connection (QPs). The receive triggers callback that handles the connection setup. OOB / XOOB communication semantics is a fully non-blocking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't really block anywhere. 
</span><br>
<span class="quotelev1">&gt; We use   ompi_rte_recv_buffer_nb and ompi_rte_send_buffer_nb functions only.
</span><br>
<p>The only change is that the receive callback is now occurring in the ORTE event thread, and so perhaps someone needs to look at a way to pass that back into the OMPI event base (which I guess is the OPAL event base)? Just glancing at the code, it looks like that could be the issue - but I honestly have no idea what event base someone wants to switch to, or if they want to resolve it some other way. There are clearly some things happening in the ofacm oob code that involve thread locking etc., but I don't know what those areas are trying to do.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
