<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:32:08 2013" -->
<!-- isoreceived="20131114203208" -->
<!-- sent="Thu, 14 Nov 2013 12:31:09 -0800" -->
<!-- isosent="20131114203109" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect" -->
<!-- id="F1604EE0-8952-4EE9-B01F-AAA05C48BE3F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEAA7DD8.154C0%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-14 15:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2013, at 12:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 11/14/13 1:13 PM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me try to summarize my understanding of the situation:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Ralph made the OOB asynchronous.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. OOB cpcs don't work as a result of 1, and are thereby &quot;deprecated&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; meaning: won't fix.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Pasha moved the openib/connect to common/ofacm but excluded the rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; in that move.  Never changed openib to use ofacm/common.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. UDCM is &quot;functional&quot; in the trunk, still sitting in openib/connect.
</span><br>
<span class="quotelev2">&gt;&gt; But no one is entirely sure if it really works which is why it was
</span><br>
<span class="quotelev2">&gt;&gt; disabled in 1.7. Nathan - is there a design doc you can share on this
</span><br>
<span class="quotelev2">&gt;&gt; beyond the comments in the code?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. In order to satisfy the &quot;grand plan&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; 	a. UDCM still needs to be moved to common/ofacm.
</span><br>
<span class="quotelev2">&gt;&gt;               b. OpenIB still needs to be changed to use common/ofacm.
</span><br>
<span class="quotelev2">&gt;&gt;               c.  RDMACM still needs to migrate to common/ofacm.
</span><br>
<span class="quotelev2">&gt;&gt;               d. XRC support needs to be added to UDCM and put into
</span><br>
<span class="quotelev2">&gt;&gt; common/ofacm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6. The &quot;grand plan&quot; being:  move the BTLs into Opal - hence the need to
</span><br>
<span class="quotelev2">&gt;&gt; scuttle the OOB cpcs thereby justifying the deprecation and not fixing
</span><br>
<span class="quotelev2">&gt;&gt; cpcs after #1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, that's a quick roundup of how we ended up here (as I understand it.)
</span><br>
<span class="quotelev2">&gt;&gt; What needs to be done is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's my understanding as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Somebody needs to certify/review/ that what Nathan has done is sound.
</span><br>
<span class="quotelev2">&gt;&gt; From my perspective, this is a BIG change and needs a comprehensive
</span><br>
<span class="quotelev2">&gt;&gt; architecture review. We've been using it in the trunk, and we've been
</span><br>
<span class="quotelev2">&gt;&gt; testing it under MTT for some time - but have not deployed or tested at
</span><br>
<span class="quotelev2">&gt;&gt; large-scale out in the field. Would be nice to see something on paper in
</span><br>
<span class="quotelev2">&gt;&gt; terms of a design doc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Somebody then needs to move UDCM into common/ofacm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Somebody needs to change openib to use common/ofacm cpcs instead of
</span><br>
<span class="quotelev2">&gt;&gt; openib/connect cpcs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. Somebody needs to move RDMACM into common/ofacm and make sure RoCEE
</span><br>
<span class="quotelev2">&gt;&gt; works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. Somebody needs to add XRC support to UDCM - whatever that might mean.
</span><br>
<span class="quotelev2">&gt;&gt; Given Nathan added UDCM back in 2011 and nobody is really sure it's ready
</span><br>
<span class="quotelev2">&gt;&gt; for prime-time, and given Pasha's comments regarding the difference in
</span><br>
<span class="quotelev2">&gt;&gt; state machine requirements  between the two connection schemes, this
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem like a trivial task.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given Nathan's comments a second ago about ORNL not supporting the IB
</span><br>
<span class="quotelev2">&gt;&gt; Offload component, it barely makes sense to keep common/ofacm. And it
</span><br>
<span class="quotelev2">&gt;&gt; sounds like the two cpcs presently contained therein are now unusable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All of this work is a result of the Grand Plan to move the BTLs into the
</span><br>
<span class="quotelev2">&gt;&gt; Opal layer - which I have no idea what the motive is (I was not involved
</span><br>
<span class="quotelev2">&gt;&gt; with OMPI when this was decided or debated.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Basically, without these five changes OpenIB is dead in 1.7.4 and beyond
</span><br>
<span class="quotelev2">&gt;&gt; for RC, XRC, and RoCEE. These are blockers to 1.7.4 and I don't believe
</span><br>
<span class="quotelev2">&gt;&gt; that the onus falls squarely on Mellanox to fix these. These were
</span><br>
<span class="quotelev2">&gt;&gt; community decisions and, as such, it must be a community effort to
</span><br>
<span class="quotelev2">&gt;&gt; resolve. We are happy to lend a hand, but we are not fixing all of this
</span><br>
<span class="quotelev2">&gt;&gt; mess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the 5 steps above sound correct and I agree that 1) this
</span><br>
<span class="quotelev1">&gt; means 1.7.4 is on hold until we fix this and 2) that Mellanox shouldn't be
</span><br>
<span class="quotelev1">&gt; the only one to fix this for 1.7.4, given the amount of work involved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, what, specifically, broke about the oob/xoob cpc mechanisms by
</span><br>
<span class="quotelev1">&gt; making the oob asynchronous?
</span><br>
<p>Hard for me to say as I don't really have access to an IB machine any more. Odin is my sole reference point, and someone has had that fully locked up for more than a week (and I can't complain as I am totally a guest there). Even then, I can only test on a few nodes.
<br>
<p>I have no objection to helping, but we need someone who cares about IB and has access to such a machine to take the lead. Otherwise, we're just spinning our wheels.
<br>
<p>As for the work issue: note that this has been &quot;under development&quot; now for more than a year. We've talked at length about how &quot;somebody&quot; needs to fix the openib/ofacm issue, but everyone keeps pushing it down the road as &quot;not mine&quot;. Like I said, I can help - but (a) my boss couldn't care less about this issue, and (b) I have no way to test the results.
<br>
<p><p><p><span class="quotelev1">&gt;  That is, 1-5 are a huge amount of work; have
</span><br>
<span class="quotelev1">&gt; we done the analysis to say that updating the oob / xoob cpc to work with
</span><br>
<span class="quotelev1">&gt; the new oob is actually more work than doing 1-5?  Obviously, there's long
</span><br>
<span class="quotelev1">&gt; term plans that make oob/xoob problematic.  But those aren't 1.7 / 1.8
</span><br>
<span class="quotelev1">&gt; plans.  Unfortunately, the cpcs were always out of my area of interest, so
</span><br>
<span class="quotelev1">&gt; I'm flying a bit more blind than I'd like here.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13263.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13266.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
