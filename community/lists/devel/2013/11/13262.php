<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:15:00 2013" -->
<!-- isoreceived="20131114201500" -->
<!-- sent="Thu, 14 Nov 2013 20:13:36 +0000" -->
<!-- isosent="20131114201336" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37F6F016_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48A41753-1C34-482F-B281-664588417393_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 15:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13261.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13270.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me try to summarize my understanding of the situation:
<br>
<p>1. Ralph made the OOB asynchronous.
<br>
<p>2. OOB cpcs don't work as a result of 1, and are thereby &quot;deprecated&quot;, meaning: won't fix.  
<br>
<p>3. Pasha moved the openib/connect to common/ofacm but excluded the rdmacm in that move.  Never changed openib to use ofacm/common. 
<br>
<p>4. UDCM is &quot;functional&quot; in the trunk, still sitting in openib/connect. But no one is entirely sure if it really works which is why it was disabled in 1.7. Nathan - is there a design doc you can share on this beyond the comments in the code?
<br>
<p>5. In order to satisfy the &quot;grand plan&quot;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. UDCM still needs to be moved to common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. OpenIB still needs to be changed to use common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.  RDMACM still needs to migrate to common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. XRC support needs to be added to UDCM and put into common/ofacm.
<br>
<p>6. The &quot;grand plan&quot; being:  move the BTLs into Opal - hence the need to scuttle the OOB cpcs thereby justifying the deprecation and not fixing cpcs after #1.
<br>
<p>So, that's a quick roundup of how we ended up here (as I understand it.)  What needs to be done is:
<br>
<p>1. Somebody needs to certify/review/ that what Nathan has done is sound. From my perspective, this is a BIG change and needs a comprehensive architecture review. We've been using it in the trunk, and we've been testing it under MTT for some time - but have not deployed or tested at large-scale out in the field. Would be nice to see something on paper in terms of a design doc. 
<br>
<p>2. Somebody then needs to move UDCM into common/ofacm.
<br>
<p>3. Somebody needs to change openib to use common/ofacm cpcs instead of openib/connect cpcs.
<br>
<p>4. Somebody needs to move RDMACM into common/ofacm and make sure RoCEE works.
<br>
<p>5. Somebody needs to add XRC support to UDCM - whatever that might mean. Given Nathan added UDCM back in 2011 and nobody is really sure it's ready for prime-time, and given Pasha's comments regarding the difference in state machine requirements  between the two connection schemes, this doesn't seem like a trivial task.
<br>
<p>Given Nathan's comments a second ago about ORNL not supporting the IB Offload component, it barely makes sense to keep common/ofacm. And it sounds like the two cpcs presently contained therein are now unusable.
<br>
&nbsp;
<br>
All of this work is a result of the Grand Plan to move the BTLs into the Opal layer - which I have no idea what the motive is (I was not involved with OMPI when this was decided or debated.) 
<br>
<p>Basically, without these five changes OpenIB is dead in 1.7.4 and beyond for RC, XRC, and RoCEE. These are blockers to 1.7.4 and I don't believe that the onus falls squarely on Mellanox to fix these. These were community decisions and, as such, it must be a community effort to resolve. We are happy to lend a hand, but we are not fixing all of this mess.
<br>
<p>Josh 
<br>
<p>&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Shamis, Pavel
<br>
Sent: Thursday, November 14, 2013 2:08 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect
<br>
<p>There is some confusion in the thread. UDCM is just another CPC, like XOOB, OOB, and RDMACM (I think IBCM is officially dead).
<br>
XOOB and OOB don't use UDCM, they relay on ORTE out-of-band communication.
<br>
<p>OpenIB/connect supports UDCM,XOOB,OOB, and RDMACM OFACM supports (at least last time when we checked) OOB and XOOB
<br>
<p>RDMACM was not moved to OFACM, because of iWarp's &quot;first message&quot; requirement that used to break the abstraction.
<br>
Moreover RDMACM scalability used to be terrible, as a result no one in IB community really used it.
<br>
The situation is a bit different today, since ROCEE relays on RDMACM. It worth noting that you may setup ROCEE connections with a regular OOB with a some restrictions (we did it for mvapich-1).
<br>
<p>The code between ofacm and openib is similar, but NOT the same. We change the API in a way that it allows to hide XRC QP management (there is hash table that manages QP to EP mapping) in OFACM instead of OPENIB.
<br>
This made openib initialization code a bit cleaner. Here is my old tree with openib btl changes <a href="https://bitbucket.org/pasha/ofacm">https://bitbucket.org/pasha/ofacm</a>
<br>
<p>I hope it helps,
<br>
<p>Best,
<br>
Pasha
<br>
<p>On Nov 14, 2013, at 1:17 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unless someone went in and &quot;fixed&quot; the code in common (judging by the comments, fixed seems to imply porting (x)oob to use UDCM, which hasn't been done at all in the context of xoob and is incompletely patched and remains unusable as a replacement for oob in 1.7.4), there is no reason to believe it would work any different than the cpcs under btl/openib/connect. IIRC, it's the same code - copy/pasted - just moved to a common location so Cheetah collectives can do their wireup. So, if oob cpc doesn't work, ofacm oob won't work either and, I guess, by extension, Cheetah IBoffload won't work. Pasha, correct me if you know different. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph 
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 14, 2013 1:05 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi 
</span><br>
<span class="quotelev1">&gt; r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2013, at 9:33 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/14/13 9:51 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does XRC work with the UDCM CPC?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 14, 2013, at 9:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the problems in udcm were fixed by Nathan quite some time 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ago, but never moved to 1.7 as everyone was told that the connect 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code in openib was already deprecated pending merge with the new 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ofacm common code. Looking over at that area, I see only oob and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xoob - so if the users of the common ofacm code are finding that it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works, the simple answer may just be to finally complete the switchover.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Meantime, perhaps someone can CMR and review a copying of the udcm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpc to the 1.7 branch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 14, 2013, at 5:14 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Um, no. It's supposed to work with UDCM which doesn't appear to be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; enabled in 1.7.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Per Ralph's comment to me last night:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;... you cannot use the oob connection manager. It doesn't work 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and was deprecated. You must use udcm, which is why things are 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; supposed to be set to do so by default. Please check the openib 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connect priorities and correct them if necessary.&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, it's never been enabled in 1.7 - don't know what &quot;borked&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; means, and from what Devendar tells me, several UDCM commits that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are in the trunk have not been pushed over to 1.7:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, as of this moment, OpenIB BTL is essentially dead-in-the-water 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in 1.7.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to start by admitting that I haven't been paying attention 
</span><br>
<span class="quotelev2">&gt;&gt; to IB the last couple of months, so I'm out of my league a little bit 
</span><br>
<span class="quotelev2">&gt;&gt; here.  I remember discussions of UDCM replacing OOB both because the 
</span><br>
<span class="quotelev2">&gt;&gt; OOB CPC had some issues and because it would make it easier to move 
</span><br>
<span class="quotelev2">&gt;&gt; the BTLs to the OPAL layer (ie, below the OOB).  But I also thought 
</span><br>
<span class="quotelev2">&gt;&gt; that was more future work than it clearly was.  So can someone let me know:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) What the status of UDCM is (does it work reliably, does it support 
</span><br>
<span class="quotelev2">&gt;&gt; XRC, etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to be working okay on the IB systems at LANL and IU. Don't know about XRC - I seem to recall the answer is &quot;no&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) What's the difference between CPCs and OFACM and what's our plans 
</span><br>
<span class="quotelev2">&gt;&gt; w.r.t 1.7 there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pasha created ofacm because some of the collective components now need to forge connections. So he created the common/ofacm code to meet those needs, with the intention of someday replacing the openib cpc's with the new common code. However, this was stalled by the iWarp issue, and so it fell off the table.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We now have two duplicate ways of doing the same thing, but with code 
</span><br>
<span class="quotelev1">&gt; in two different places. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3) Someone mentioned that ofacm oob worked, but cpc oob didn't.  Can 
</span><br>
<span class="quotelev2">&gt;&gt; someone explain why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure that is actually true as there is no indication that anyone is using or testing the collective components that use ofacm code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, sorry for being dense; I've been spending too much time in 
</span><br>
<span class="quotelev2">&gt;&gt; Portals land lately.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13261.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13258.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi	r29703	- in trunk: contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13270.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
