<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 12:34:04 2013" -->
<!-- isoreceived="20131114173404" -->
<!-- sent="Thu, 14 Nov 2013 17:33:48 +0000" -->
<!-- isosent="20131114173348" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect" -->
<!-- id="CEAA4EA0.15468%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 12:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13251.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/14/13 9:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Does XRC work with the UDCM CPC?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 14, 2013, at 9:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the problems in udcm were fixed by Nathan quite some time ago,
</span><br>
<span class="quotelev2">&gt;&gt;but never moved to 1.7 as everyone was told that the connect code in
</span><br>
<span class="quotelev2">&gt;&gt;openib was already deprecated pending merge with the new ofacm common
</span><br>
<span class="quotelev2">&gt;&gt;code. Looking over at that area, I see only oob and xoob - so if the
</span><br>
<span class="quotelev2">&gt;&gt;users of the common ofacm code are finding that it works, the simple
</span><br>
<span class="quotelev2">&gt;&gt;answer may just be to finally complete the switchover.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meantime, perhaps someone can CMR and review a copying of the udcm cpc
</span><br>
<span class="quotelev2">&gt;&gt;to the 1.7 branch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 5:14 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Um, no. It's supposed to work with UDCM which doesn't appear to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;enabled in 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per Ralph's comment to me last night:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;... you cannot use the oob connection manager. It doesn't work and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;was deprecated. You must use udcm, which is why things are supposed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;be set to do so by default. Please check the openib connect priorities
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and correct them if necessary.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, it's never been enabled in 1.7 - don't know what &quot;borked&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;means, and from what Devendar tells me, several UDCM commits that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;in the trunk have not been pushed over to 1.7:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, as of this moment, OpenIB BTL is essentially dead-in-the-water in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<p>I'm going to start by admitting that I haven't been paying attention to IB
<br>
the last couple of months, so I'm out of my league a little bit here.  I
<br>
remember discussions of UDCM replacing OOB both because the OOB CPC had
<br>
some issues and because it would make it easier to move the BTLs to the
<br>
OPAL layer (ie, below the OOB).  But I also thought that was more future
<br>
work than it clearly was.  So can someone let me know:
<br>
<p>&nbsp;&nbsp;1) What the status of UDCM is (does it work reliably, does it support
<br>
XRC, etc.)
<br>
&nbsp;&nbsp;2) What's the difference between CPCs and OFACM and what's our plans
<br>
w.r.t 1.7 there?
<br>
&nbsp;&nbsp;3) Someone mentioned that ofacm oob worked, but cpc oob didn't.  Can
<br>
someone explain why?
<br>
<p>Again, sorry for being dense; I've been spending too much time in Portals
<br>
land lately.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13251.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
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
