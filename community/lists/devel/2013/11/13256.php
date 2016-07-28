<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 13:29:42 2013" -->
<!-- isoreceived="20131114182942" -->
<!-- sent="Thu, 14 Nov 2013 18:17:55 +0000" -->
<!-- isosent="20131114181755" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37F6ED32_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B1CEB12-2A08-44AE-A1E7-33B774F39D90_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 13:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Previous message:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>In reply to:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless someone went in and &quot;fixed&quot; the code in common (judging by the comments, fixed seems to imply porting (x)oob to use UDCM, which hasn't been done at all in the context of xoob and is incompletely patched and remains unusable as a replacement for oob in 1.7.4), there is no reason to believe it would work any different than the cpcs under btl/openib/connect. IIRC, it's the same code - copy/pasted - just moved to a common location so Cheetah collectives can do their wireup. So, if oob cpc doesn't work, ofacm oob won't work either and, I guess, by extension, Cheetah IBoffload won't work. Pasha, correct me if you know different. 
<br>
<p><p>Josh
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, November 14, 2013 1:05 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect
<br>
<p><p>On Nov 14, 2013, at 9:33 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 11/14/13 9:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does XRC work with the UDCM CPC?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 9:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the problems in udcm were fixed by Nathan quite some time 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ago, but never moved to 1.7 as everyone was told that the connect 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code in openib was already deprecated pending merge with the new 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ofacm common code. Looking over at that area, I see only oob and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xoob - so if the users of the common ofacm code are finding that it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works, the simple answer may just be to finally complete the switchover.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meantime, perhaps someone can CMR and review a copying of the udcm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpc to the 1.7 branch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 14, 2013, at 5:14 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Um, no. It's supposed to work with UDCM which doesn't appear to be 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enabled in 1.7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Per Ralph's comment to me last night:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;... you cannot use the oob connection manager. It doesn't work and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was deprecated. You must use udcm, which is why things are supposed 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be set to do so by default. Please check the openib connect 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; priorities and correct them if necessary.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, it's never been enabled in 1.7 - don't know what &quot;borked&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; means, and from what Devendar tells me, several UDCM commits that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are in the trunk have not been pushed over to 1.7:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, as of this moment, OpenIB BTL is essentially dead-in-the-water 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in 1.7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to start by admitting that I haven't been paying attention 
</span><br>
<span class="quotelev1">&gt; to IB the last couple of months, so I'm out of my league a little bit 
</span><br>
<span class="quotelev1">&gt; here.  I remember discussions of UDCM replacing OOB both because the 
</span><br>
<span class="quotelev1">&gt; OOB CPC had some issues and because it would make it easier to move 
</span><br>
<span class="quotelev1">&gt; the BTLs to the OPAL layer (ie, below the OOB).  But I also thought 
</span><br>
<span class="quotelev1">&gt; that was more future work than it clearly was.  So can someone let me know:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1) What the status of UDCM is (does it work reliably, does it support 
</span><br>
<span class="quotelev1">&gt; XRC, etc.)
</span><br>
<p>Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
<br>
<p><span class="quotelev1">&gt;  2) What's the difference between CPCs and OFACM and what's our plans 
</span><br>
<span class="quotelev1">&gt; w.r.t 1.7 there?
</span><br>
<p>Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
<br>
<p>We now have two duplicate ways of doing the same thing, but with code in two different places. :-(
<br>
<p><span class="quotelev1">&gt;  3) Someone mentioned that ofacm oob worked, but cpc oob didn't.  Can 
</span><br>
<span class="quotelev1">&gt; someone explain why?
</span><br>
<p>I'm not sure that is actually true as there is no indication that anyone is using or testing the collective components that use ofacm code.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, sorry for being dense; I've been spending too much time in 
</span><br>
<span class="quotelev1">&gt; Portals land lately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13257.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>Previous message:</strong> <a href="13255.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] What to do about openib/ofacm/cpc (was: r29703 - in trunk: contrib/p...)"</a>
<li><strong>In reply to:</strong> <a href="13253.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
