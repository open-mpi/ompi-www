<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 22:50:06 2013" -->
<!-- isoreceived="20131115035006" -->
<!-- sent="Fri, 15 Nov 2013 03:48:25 +0000" -->
<!-- isosent="20131115034825" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37F6F632_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="90B66228-CF95-41E7-A976-7C608DD36F7C_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 22:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13282.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13282.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The proof of the pudding is that all of the MPI layer has been adapted to the new async behavior -except- for the openib cpc's. The issue of what to do with these has been raised several times, especially once the ofacm code was committed. Unfortunately, lack of time and priorities left this code to bitrot.
<br>
<p>[Josh] Not completely true, UDCM is supposed to be the alternative, at least for RC. It's easy to say - &quot;well, everything works now except OpenIB&quot;. If we're working under the assumption that these were community decisions wholeheartedly agreed upon and fully endorsed by all members, well then we have to also believe that we agreed as a community to the following list of tasks and nobody's done anything. The only ones explicitly committed to technical work - Mellanox.  Per Jeff's words, &quot;the next dominos to fall&quot; implies at least a partial ordering. We need a functioning UDCM before we can study it and figure out how to adapt it to XRC - maybe it is functioning perfectly, who knows??! Nobody, apparently - seems like it should've been released into the wild in 1.7.3. Are there some ppt slides that we can look at from the RFC? If so, I've been unable to locate them. Unfortunately, this is just one piece of what's missing and we are relying on the rest of the community that agreed to these changes to make good on their promises. My biggest issue this morning is that UDCM is not in 1.7 but the OOB change is - that's a problem. You skipped steps 1, 2, 3, and 4 and went right to 5 - that's a problem. That's not what we as a community agreed upon.
<br>
<p>Josh
<br>
<p><p>Subject: [OMPI devel] Openib + common/verbs CPC consolidation
<br>
From: Jeff Squyres (jsquyres) (jsquyres_at_[hidden])
<br>
Date: 2013-05-14 15:29:15
<br>
<p>&nbsp;&nbsp;*   Next message: Rolf vandeVaart: &quot;[OMPI devel] Build warnings in trunk&quot;&lt;<a href="http://www.open-mpi.org/community/lists/devel/2013/05/12383.php">http://www.open-mpi.org/community/lists/devel/2013/05/12383.php</a>&gt;
<br>
&nbsp;&nbsp;*   Previous message: Ralph Castain: &quot;[OMPI devel] RFC: rewrite of ORTE OOB&quot;&lt;<a href="http://www.open-mpi.org/community/lists/devel/2013/05/12381.php">http://www.open-mpi.org/community/lists/devel/2013/05/12381.php</a>&gt;
<br>
<p><p>&nbsp;FYI: On the teleconf today, we talked about the next dominos to fall in the quest to move the BTLs down to OPAL:
<br>
<p>1. Nathan will make the openib &quot;udcm&quot; CPC the default in the immediate future
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to ditch the problematic &quot;oob&quot; openib CPC
<br>
&nbsp;&nbsp;&nbsp;--&gt; This also will give udcm more widespread testing
<br>
2. Mellanox will add XRC support to udcm
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to ditch the problematic &quot;xoob&quot; openib CPC
<br>
&nbsp;&nbsp;&nbsp;--&gt; Josh thought they could do this within a month, but that's a SWAG and subject to change
<br>
3. I will ping Chelsio about getting them to add proper iWARP support into common/ofacm
<br>
&nbsp;&nbsp;&nbsp;--&gt; This paves the way to eliminate btl/openib/cpc
<br>
&nbsp;&nbsp;&nbsp;--&gt; No idea on timeframe yet
<br>
4. Once #3 is done, make openib use common/ofacm
<br>
5. Once #2, #3, and #4 are done, delete btl/openib/cpc
<br>
<p>#1-3 have people assigned to them. #4 does not (#5 is pretty trivial -- an svn rm plus some Makefile.am mods).
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13283/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13282.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13282.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13284.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:	[OMPI	svn-full]	svn:open-mpi	r29703	-	in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
