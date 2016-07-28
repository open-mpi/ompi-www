<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 09:28:07 2013" -->
<!-- isoreceived="20131029132807" -->
<!-- sent="Tue, 29 Oct 2013 13:21:12 +0000" -->
<!-- isosent="20131029132112" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD44145C11_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 09:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13152.php">Joshua Ladd: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
<li><strong>Maybe reply:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) thanks for jumping in before I woke up
<br>
2) y'all? You've been in Kentucky too long :)
<br>

<br>
Brian
<br>

<br>

<br>

<br>
Sent with Good (www.good.com)
<br>

<br>

<br>
-----Original Message-----
<br>
From: Jeff Squyres (jsquyres) [jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;]
<br>
Sent: Tuesday, October 29, 2013 05:17 AM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] Re: [OMPI devel] SHMEM v1.7 merge proposal
<br>

<br>
I'm not sure what you mean.
<br>

<br>
Brian's proposal was that y'all the shmem stuff go into a single SVN branch off the v1.7 branch. This way, it can be reviewed properly and easily merged into the actual v1.7 SVN branch.
<br>

<br>
Sent from my phone. No type good.
<br>
On Oct 29, 2013, at 7:09 AM, &quot;Mike Dubman&quot; &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>

<br>
will it be ok, that once all is ready, we push git2svn branch for this?
<br>

<br>

<br>
On Tue, Oct 29, 2013 at 12:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
I think Brian's point is that it should be a SVN branch.
<br>

<br>

<br>
On Oct 29, 2013, at 3:27 AM, Mike Dubman &lt;miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; This is exactly the way we handle it now. We have internal branch on top of v1.7 with all SHMEM code in it.
</span><br>
<span class="quotelev1">&gt; It runs mtt and other tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once we done with all changes - we will provide patch (and branch direct access if needed) for GK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt; Mike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 29, 2013 at 1:02 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and I talked today about the logistics of bringing the OpenSHMEM
</span><br>
<span class="quotelev1">&gt; code to the 1.7 release branch, as it's now a fairly large set of changes
</span><br>
<span class="quotelev1">&gt; from the trunk.  What we propose is to follow the same proceedure we used
</span><br>
<span class="quotelev1">&gt; when merging in the RTE framework change, which is essentially a staging
</span><br>
<span class="quotelev1">&gt; branch.  So, Mellanox (as the one filing the CMR) would branch from 1.7,
</span><br>
<span class="quotelev1">&gt; bring the OpenSHMEM changes into that (and hopefully test), and then file
</span><br>
<span class="quotelev1">&gt; a single CMR for the changes from the branch.  If done properly, the GK
</span><br>
<span class="quotelev1">&gt; then only has to merge with --reintegrate and we're set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's talk about it on the call tomorrow, but that's the current proposal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
<li><strong>Previous message:</strong> <a href="13152.php">Joshua Ladd: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
<li><strong>Maybe reply:</strong> <a href="13154.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  SHMEM v1.7 merge proposal"</a>
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
