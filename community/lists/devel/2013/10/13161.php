<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 12:01:13 2013" -->
<!-- isoreceived="20131029160113" -->
<!-- sent="Tue, 29 Oct 2013 16:01:11 +0000" -->
<!-- isosent="20131029160111" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F998F7B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="7A09C47F-F8E8-44D5-ABAE-66833E9AEB62_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 12:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13162.php">Barrett, Brian W: "[OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13160.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13157.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 -- sounds good, thanks!
<br>
<p>Just put the branch under /tmp; that's where we typically put short-lived branches.  E.g., <a href="http://svn.open-mpi.org/svn/ompi/tmp/oshmem-for-v1.7">http://svn.open-mpi.org/svn/ompi/tmp/oshmem-for-v1.7</a>, or somesuch.
<br>
<p><p>On Oct 29, 2013, at 10:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That would be fine - thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you do the export, please setup the &quot;svn ignore&quot; properties after you do your test build. Those don't get set by git, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2013, at 7:28 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; yes, this is what I tried to suggest :)
</span><br>
<span class="quotelev2">&gt;&gt; we export our git branch to svn in openmpi.org for review.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 29, 2013 at 3:34 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think the community&#146;s concerns are valid. What Mike is articulating is that we already maintain a &#147;1.7 ready&#148; OSHMEM branch internally. I think it should be a simple procedure to do as Brian and Ralph are suggesting and branch off of 1.7 in SVN and apply our patches. We can do this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 29, 2013 9:29 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Developers'; 'Open MPI Developers'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, what's important is that 1) we all have a way to review the final merge (which means a public branch) and 2) it's easy for the GK to merge.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 29, 2013 04:36 AM Mountain Standard Time
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [EXTERNAL] Re: [OMPI devel] SHMEM v1.7 merge proposal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think Brian's point is that it should be a SVN branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 29, 2013, at 3:27 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is exactly the way we handle it now. We have internal branch on top of v1.7 with all SHMEM code in it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It runs mtt and other tests.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Once we done with all changes - we will provide patch (and branch direct access if needed) for GK.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Kind Regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Mike.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Oct 29, 2013 at 1:02 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; All -
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph and I talked today about the logistics of bringing the OpenSHMEM
</span><br>
<span class="quotelev3">&gt;&gt; &gt; code to the 1.7 release branch, as it's now a fairly large set of changes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; from the trunk.  What we propose is to follow the same proceedure we used
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when merging in the RTE framework change, which is essentially a staging
</span><br>
<span class="quotelev3">&gt;&gt; &gt; branch.  So, Mellanox (as the one filing the CMR) would branch from 1.7,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bring the OpenSHMEM changes into that (and hopefully test), and then file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a single CMR for the changes from the branch.  If done properly, the GK
</span><br>
<span class="quotelev3">&gt;&gt; &gt; then only has to merge with --reintegrate and we're set.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Let's talk about it on the call tomorrow, but that's the current proposal.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Scalable System Software Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13162.php">Barrett, Brian W: "[OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13160.php">Mike Dubman: "Re: [OMPI devel] SHMEM v1.7 merge proposal"</a>
<li><strong>In reply to:</strong> <a href="13157.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: SHMEM v1.7 merge proposal"</a>
<!-- nextthread="start" -->
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
