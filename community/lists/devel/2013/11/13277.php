<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 18:36:32 2013" -->
<!-- isoreceived="20131114233632" -->
<!-- sent="Thu, 14 Nov 2013 15:35:31 -0800" -->
<!-- isosent="20131114233531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="BE9E176F-9550-48B4-B016-14FE2D99EA21_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BBC72601-1EFD-4BF9-9D44-BFB85AA0175D_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 18:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 3:33 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only change is that the receive callback is now occurring in the ORTE event thread, and so perhaps someone needs to look at a way to pass that back into the OMPI event base (which I guess is the OPAL event base)? Just glancing at the code, it looks like that could be the issue - but I honestly have no idea what event base someone wants to switch to, or if they want to resolve it some other way. There are clearly some things happening in the ofacm oob code that involve thread locking etc., but I don't know what those areas are trying to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see. In this mode do you enable thread safety support  in all library (mpi)?
</span><br>
<p>Only if the user configures to do so - ORTE doesn't require it as we use the event library's thread safety and do everything inside events.
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13276.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13278.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]	Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
