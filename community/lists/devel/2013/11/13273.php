<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 17:31:42 2013" -->
<!-- isoreceived="20131114223142" -->
<!-- sent="Thu, 14 Nov 2013 14:30:42 -0800" -->
<!-- isosent="20131114223042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="63365E0A-3C40-4011-9089-368A7C28DB7F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C905121E-42FE-48F1-8AD2-FFD62A310EA4_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 17:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So far as I can tell, the issue is one of blocking. The OOB handshake is now async - i.e., you post a non-blocking recv at the beginning of time, and then do a non-blocking send to the other side when you want to create a connection. The question is: how do you know when that connection is ready?
<br>
<p>I don't know enough about the cpc handshake to debug the problem. I can only verify that the data is being sent and received by both sides. Someone who understands the cpc state machine needs to look at the code and figure out where and how to block at the appropriate point.
<br>
<p><p>On Nov 14, 2013, at 1:16 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Ralph made the OOB asynchronous.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not familiar with details of the change. If out-of-band communication is supported, it should not be
</span><br>
<span class="quotelev1">&gt; that huge change for XOOB/OOB.
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
<li><strong>Next message:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13274.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
