<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:21:25 2013" -->
<!-- isoreceived="20131114202125" -->
<!-- sent="Thu, 14 Nov 2013 20:21:10 +0000" -->
<!-- isosent="20131114202110" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect" -->
<!-- id="CEAA7DD8.154C0%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A37F6F016_at_MTIDAG01.mtl.com" -->
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
<strong>Date:</strong> 2013-11-14 15:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/14/13 1:13 PM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Let me try to summarize my understanding of the situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Ralph made the OOB asynchronous.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. OOB cpcs don't work as a result of 1, and are thereby &quot;deprecated&quot;,
</span><br>
<span class="quotelev1">&gt;meaning: won't fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. Pasha moved the openib/connect to common/ofacm but excluded the rdmacm
</span><br>
<span class="quotelev1">&gt;in that move.  Never changed openib to use ofacm/common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. UDCM is &quot;functional&quot; in the trunk, still sitting in openib/connect.
</span><br>
<span class="quotelev1">&gt;But no one is entirely sure if it really works which is why it was
</span><br>
<span class="quotelev1">&gt;disabled in 1.7. Nathan - is there a design doc you can share on this
</span><br>
<span class="quotelev1">&gt;beyond the comments in the code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5. In order to satisfy the &quot;grand plan&quot;:
</span><br>
<span class="quotelev1">&gt;	a. UDCM still needs to be moved to common/ofacm.
</span><br>
<span class="quotelev1">&gt;                b. OpenIB still needs to be changed to use common/ofacm.
</span><br>
<span class="quotelev1">&gt;                c.  RDMACM still needs to migrate to common/ofacm.
</span><br>
<span class="quotelev1">&gt;                d. XRC support needs to be added to UDCM and put into
</span><br>
<span class="quotelev1">&gt;common/ofacm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;6. The &quot;grand plan&quot; being:  move the BTLs into Opal - hence the need to
</span><br>
<span class="quotelev1">&gt;scuttle the OOB cpcs thereby justifying the deprecation and not fixing
</span><br>
<span class="quotelev1">&gt;cpcs after #1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, that's a quick roundup of how we ended up here (as I understand it.)
</span><br>
<span class="quotelev1">&gt;What needs to be done is:
</span><br>
<p>That's my understanding as well.
<br>
<p><span class="quotelev1">&gt;1. Somebody needs to certify/review/ that what Nathan has done is sound.
</span><br>
<span class="quotelev1">&gt;From my perspective, this is a BIG change and needs a comprehensive
</span><br>
<span class="quotelev1">&gt;architecture review. We've been using it in the trunk, and we've been
</span><br>
<span class="quotelev1">&gt;testing it under MTT for some time - but have not deployed or tested at
</span><br>
<span class="quotelev1">&gt;large-scale out in the field. Would be nice to see something on paper in
</span><br>
<span class="quotelev1">&gt;terms of a design doc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. Somebody then needs to move UDCM into common/ofacm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. Somebody needs to change openib to use common/ofacm cpcs instead of
</span><br>
<span class="quotelev1">&gt;openib/connect cpcs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. Somebody needs to move RDMACM into common/ofacm and make sure RoCEE
</span><br>
<span class="quotelev1">&gt;works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5. Somebody needs to add XRC support to UDCM - whatever that might mean.
</span><br>
<span class="quotelev1">&gt;Given Nathan added UDCM back in 2011 and nobody is really sure it's ready
</span><br>
<span class="quotelev1">&gt;for prime-time, and given Pasha's comments regarding the difference in
</span><br>
<span class="quotelev1">&gt;state machine requirements  between the two connection schemes, this
</span><br>
<span class="quotelev1">&gt;doesn't seem like a trivial task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Given Nathan's comments a second ago about ORNL not supporting the IB
</span><br>
<span class="quotelev1">&gt;Offload component, it barely makes sense to keep common/ofacm. And it
</span><br>
<span class="quotelev1">&gt;sounds like the two cpcs presently contained therein are now unusable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;All of this work is a result of the Grand Plan to move the BTLs into the
</span><br>
<span class="quotelev1">&gt;Opal layer - which I have no idea what the motive is (I was not involved
</span><br>
<span class="quotelev1">&gt;with OMPI when this was decided or debated.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Basically, without these five changes OpenIB is dead in 1.7.4 and beyond
</span><br>
<span class="quotelev1">&gt;for RC, XRC, and RoCEE. These are blockers to 1.7.4 and I don't believe
</span><br>
<span class="quotelev1">&gt;that the onus falls squarely on Mellanox to fix these. These were
</span><br>
<span class="quotelev1">&gt;community decisions and, as such, it must be a community effort to
</span><br>
<span class="quotelev1">&gt;resolve. We are happy to lend a hand, but we are not fixing all of this
</span><br>
<span class="quotelev1">&gt;mess.
</span><br>
<p>I think that the 5 steps above sound correct and I agree that 1) this
<br>
means 1.7.4 is on hold until we fix this and 2) that Mellanox shouldn't be
<br>
the only one to fix this for 1.7.4, given the amount of work involved.
<br>
<p>Ralph, what, specifically, broke about the oob/xoob cpc mechanisms by
<br>
making the oob asynchronous?  That is, 1-5 are a huge amount of work; have
<br>
we done the analysis to say that updating the oob / xoob cpc to work with
<br>
the new oob is actually more work than doing 1-5?  Obviously, there's long
<br>
term plans that make oob/xoob problematic.  But those aren't 1.7 / 1.8
<br>
plans.  Unfortunately, the cpcs were always out of my area of interest, so
<br>
I'm flying a bit more blind than I'd like here.
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
<li><strong>Next message:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13262.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full]	svn:open-mpi	r29703	- in trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
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
