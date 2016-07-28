<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:12:51 2013" -->
<!-- isoreceived="20131114201251" -->
<!-- sent="Thu, 14 Nov 2013 15:12:49 -0500" -->
<!-- isosent="20131114201249" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8232530B-1770-426E-9455-45BBDBF1FA3E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A5C1D8D_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 15:12:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13260.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13260.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a bit outdated. What it the problem with oob / xoob ?
<br>
-Pasha
<br>
<p>On Nov 14, 2013, at 3:07 PM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't think so. From what I understand the iboffload component may not live much longer because of
</span><br>
<span class="quotelev1">&gt; Mellanox's fork of Cheetah. So, it might not matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excuse the *&amp;(#$y Outlook posting-style. OWA sucks.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 14, 2013 12:58 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]        svn:open-mpi    r29703  - in trunk:     contrib/platform/iu/odin        ompi/mca/btl/openib     ompi/mca/btl/openib/connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The key question, though, is: has anyone checked to see if the ofacm code even works any more??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only oob and xoob components appear to be present - so unless someone fixed those since they were originally copied from openib, I doubt ofacm works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2013, at 11:08 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is some confusion in the thread. UDCM is just another CPC, like XOOB, OOB, and RDMACM (I think IBCM is officially dead).
</span><br>
<span class="quotelev2">&gt;&gt; XOOB and OOB don't use UDCM, they relay on ORTE out-of-band communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB/connect supports UDCM,XOOB,OOB, and RDMACM
</span><br>
<span class="quotelev2">&gt;&gt; OFACM supports (at least last time when we checked) OOB and XOOB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; RDMACM was not moved to OFACM, because of iWarp's &quot;first message&quot; requirement that used to break the abstraction.
</span><br>
<span class="quotelev2">&gt;&gt; Moreover RDMACM scalability used to be terrible, as a result no one in IB community really used it.
</span><br>
<span class="quotelev2">&gt;&gt; The situation is a bit different today, since ROCEE relays on RDMACM. It worth noting that you may setup
</span><br>
<span class="quotelev2">&gt;&gt; ROCEE connections with a regular OOB with a some restrictions (we did it for mvapich-1).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code between ofacm and openib is similar, but NOT the same. We change the API in a way that it allows
</span><br>
<span class="quotelev2">&gt;&gt; to hide XRC QP management (there is hash table that manages QP to EP mapping) in OFACM instead of OPENIB.
</span><br>
<span class="quotelev2">&gt;&gt; This made openib initialization code a bit cleaner. Here is my old tree with openib btl changes <a href="https://bitbucket.org/pasha/ofacm">https://bitbucket.org/pasha/ofacm</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope it helps,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 14, 2013, at 1:17 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unless someone went in and &quot;fixed&quot; the code in common (judging by the comments, fixed seems to imply porting (x)oob to use UDCM, which hasn't been done at all in the context of xoob and is incompletely patched and remains unusable as a replacement for oob in 1.7.4), there is no reason to believe it would work any different than the cpcs under btl/openib/connect. IIRC, it's the same code - copy/pasted - just moved to a common location so Cheetah collectives can do their wireup. So, if oob cpc doesn't work, ofacm oob won't work either and, I guess, by extension, Cheetah IBoffload won't work. Pasha, correct me if you know different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, November 14, 2013 1:05 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 14, 2013, at 9:33 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/14/13 9:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does XRC work with the UDCM CPC?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 14, 2013, at 9:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think the problems in udcm were fixed by Nathan quite some time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ago, but never moved to 1.7 as everyone was told that the connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code in openib was already deprecated pending merge with the new
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ofacm common code. Looking over at that area, I see only oob and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xoob - so if the users of the common ofacm code are finding that it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works, the simple answer may just be to finally complete the switchover.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Meantime, perhaps someone can CMR and review a copying of the udcm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpc to the 1.7 branch?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 14, 2013, at 5:14 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Um, no. It's supposed to work with UDCM which doesn't appear to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; enabled in 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Per Ralph's comment to me last night:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;... you cannot use the oob connection manager. It doesn't work and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; was deprecated. You must use udcm, which is why things are supposed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be set to do so by default. Please check the openib connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; priorities and correct them if necessary.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, it's never been enabled in 1.7 - don't know what &quot;borked&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; means, and from what Devendar tells me, several UDCM commits that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are in the trunk have not been pushed over to 1.7:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, as of this moment, OpenIB BTL is essentially dead-in-the-water
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm going to start by admitting that I haven't been paying attention
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to IB the last couple of months, so I'm out of my league a little bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here.  I remember discussions of UDCM replacing OOB both because the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OOB CPC had some issues and because it would make it easier to move
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the BTLs to the OPAL layer (ie, below the OOB).  But I also thought
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that was more future work than it clearly was.  So can someone let me know:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We now have two duplicate ways of doing the same thing, but with code in two different places. :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) Someone mentioned that ofacm oob worked, but cpc oob didn't.  Can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; someone explain why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure that is actually true as there is no indication that anyone is using or testing the collective components that use ofacm code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Again, sorry for being dense; I've been spending too much time in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Portals land lately.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13260.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13260.php">Hjelm, Nathan T: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
