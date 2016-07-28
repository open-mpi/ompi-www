<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 14 15:49:32 2013" -->
<!-- isoreceived="20131114204932" -->
<!-- sent="Thu, 14 Nov 2013 20:42:42 +0000" -->
<!-- isosent="20131114204242" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A37F6F11A_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F1604EE0-8952-4EE9-B01F-AAA05C48BE3F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-11-14 15:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>In reply to:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are happy to provide access to our set of small test clusters and engineering resources, but, honestly, Nathan/LANL guys probably have better access to a big IB system.
<br>
<p>I'm sure your boss could care less, but this is not Intel's code base. Sorry to be so blunt about it, Ralph. We've expended an enormous amount of effort *trying* to make OSHMEM something that works for the community and not just Mellanox customers. Believe me, we would rather focus our efforts elsewhere too.
<br>
<p>Josh
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, November 14, 2013 3:32 PM
<br>
To: Open MPI Developers
<br>
Cc: Yiftah Shahar; Gilad Shainer
<br>
Subject: Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect
<br>
<p><p>On Nov 14, 2013, at 12:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>On 11/14/13 1:13 PM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Let me try to summarize my understanding of the situation:
<br>
<p>1. Ralph made the OOB asynchronous.
<br>
<p>2. OOB cpcs don't work as a result of 1, and are thereby &quot;deprecated&quot;,
<br>
meaning: won't fix.
<br>
<p>3. Pasha moved the openib/connect to common/ofacm but excluded the rdmacm
<br>
in that move.  Never changed openib to use ofacm/common.
<br>
<p>4. UDCM is &quot;functional&quot; in the trunk, still sitting in openib/connect.
<br>
But no one is entirely sure if it really works which is why it was
<br>
disabled in 1.7. Nathan - is there a design doc you can share on this
<br>
beyond the comments in the code?
<br>
<p>5. In order to satisfy the &quot;grand plan&quot;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. UDCM still needs to be moved to common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. OpenIB still needs to be changed to use common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c.  RDMACM still needs to migrate to common/ofacm.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. XRC support needs to be added to UDCM and put into
<br>
common/ofacm.
<br>
<p>6. The &quot;grand plan&quot; being:  move the BTLs into Opal - hence the need to
<br>
scuttle the OOB cpcs thereby justifying the deprecation and not fixing
<br>
cpcs after #1.
<br>
<p>So, that's a quick roundup of how we ended up here (as I understand it.)
<br>
What needs to be done is:
<br>
<p>That's my understanding as well.
<br>
<p><p>1. Somebody needs to certify/review/ that what Nathan has done is sound.
<br>
<span class="quotelev1">&gt;From my perspective, this is a BIG change and needs a comprehensive
</span><br>
architecture review. We've been using it in the trunk, and we've been
<br>
testing it under MTT for some time - but have not deployed or tested at
<br>
large-scale out in the field. Would be nice to see something on paper in
<br>
terms of a design doc.
<br>
<p>2. Somebody then needs to move UDCM into common/ofacm.
<br>
<p>3. Somebody needs to change openib to use common/ofacm cpcs instead of
<br>
openib/connect cpcs.
<br>
<p>4. Somebody needs to move RDMACM into common/ofacm and make sure RoCEE
<br>
works.
<br>
<p>5. Somebody needs to add XRC support to UDCM - whatever that might mean.
<br>
Given Nathan added UDCM back in 2011 and nobody is really sure it's ready
<br>
for prime-time, and given Pasha's comments regarding the difference in
<br>
state machine requirements  between the two connection schemes, this
<br>
doesn't seem like a trivial task.
<br>
<p>Given Nathan's comments a second ago about ORNL not supporting the IB
<br>
Offload component, it barely makes sense to keep common/ofacm. And it
<br>
sounds like the two cpcs presently contained therein are now unusable.
<br>
<p>All of this work is a result of the Grand Plan to move the BTLs into the
<br>
Opal layer - which I have no idea what the motive is (I was not involved
<br>
with OMPI when this was decided or debated.)
<br>
<p>Basically, without these five changes OpenIB is dead in 1.7.4 and beyond
<br>
for RC, XRC, and RoCEE. These are blockers to 1.7.4 and I don't believe
<br>
that the onus falls squarely on Mellanox to fix these. These were
<br>
community decisions and, as such, it must be a community effort to
<br>
resolve. We are happy to lend a hand, but we are not fixing all of this
<br>
mess.
<br>
<p>I think that the 5 steps above sound correct and I agree that 1) this
<br>
means 1.7.4 is on hold until we fix this and 2) that Mellanox shouldn't be
<br>
the only one to fix this for 1.7.4, given the amount of work involved.
<br>
<p>Ralph, what, specifically, broke about the oob/xoob cpc mechanisms by
<br>
making the oob asynchronous?
<br>
<p>Hard for me to say as I don't really have access to an IB machine any more. Odin is my sole reference point, and someone has had that fully locked up for more than a week (and I can't complain as I am totally a guest there). Even then, I can only test on a few nodes.
<br>
<p>I have no objection to helping, but we need someone who cares about IB and has access to such a machine to take the lead. Otherwise, we're just spinning our wheels.
<br>
<p>As for the work issue: note that this has been &quot;under development&quot; now for more than a year. We've talked at length about how &quot;somebody&quot; needs to fix the openib/ofacm issue, but everyone keeps pushing it down the road as &quot;not mine&quot;. Like I said, I can help - but (a) my boss couldn't care less about this issue, and (b) I have no way to test the results.
<br>
<p><p><p><p>&nbsp;That is, 1-5 are a huge amount of work; have
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
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13267.php">Ralph Castain: "Re: [OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>Previous message:</strong> <a href="13265.php">Ralph Castain: "[OMPI devel] ROMIO update breaks trunk"</a>
<li><strong>In reply to:</strong> <a href="13264.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703 - in trunk: contrib/platform/iu/odin ompi/mca/btl/openib ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Reply:</strong> <a href="13269.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
