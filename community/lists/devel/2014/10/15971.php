<?
$subject_val = "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 11:51:43 2014" -->
<!-- isoreceived="20141002155143" -->
<!-- sent="Thu, 2 Oct 2014 08:51:38 -0700" -->
<!-- isosent="20141002155138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="B6E72895-DC3B-445B-9904-0C0C8293EDAE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5ECF7CB-B66C-4208-96D9-01DCD1B49315_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 11:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15972.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72"</a>
<li><strong>Previous message:</strong> <a href="15970.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>In reply to:</strong> <a href="15967.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15987.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree that someone needs to do it. However, what isn't clear is *how* to do it. I get the mechanics:
<br>
<p>* clone the ompi-release 1.8 branch
<br>
* apply the required change
<br>
* issue a pull request
<br>
<p>It's the second step that isn't clear. How the heck do I (a) find the change that was originally applied, and (b) apply it to my clone of ompi-release???
<br>
<p>Do I just download the changeset(s) from Trac and patch them in? I guess that will work if we don't have an alternative method.
<br>
<p><p>On Oct 2, 2014, at 3:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Someone* needs to re-file those CMRs as pull requests; probably in some cases it's the reporter, probably in some cases it's the owner.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2014, at 6:33 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thumbs up for the migration !
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the names here are the CMR owners ('Owned by' field in TRAC)
</span><br>
<span class="quotelev2">&gt;&gt; should it be the duty of the creators ('Reported by' field in TRAC) to
</span><br>
<span class="quotelev2">&gt;&gt; re-create the CMR instead?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* if not, and from a git log point of view, that means the commiter
</span><br>
<span class="quotelev2">&gt;&gt; will be the reviewer and not the reporter */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; what do you think ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/10/02 19:24, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. The following still-open CMRs were not brought over, and need to be re-filed as pull requests:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4216">https://svn.open-mpi.org/trac/ompi/ticket/4216</a>: Nathan (BLOCKER)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4816">https://svn.open-mpi.org/trac/ompi/ticket/4816</a>: Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4872">https://svn.open-mpi.org/trac/ompi/ticket/4872</a>: Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4888">https://svn.open-mpi.org/trac/ompi/ticket/4888</a>: Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4900">https://svn.open-mpi.org/trac/ompi/ticket/4900</a>: Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4905">https://svn.open-mpi.org/trac/ompi/ticket/4905</a>: Mike Dubman
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4917">https://svn.open-mpi.org/trac/ompi/ticket/4917</a>: Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>: Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4922">https://svn.open-mpi.org/trac/ompi/ticket/4922</a>: Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4923">https://svn.open-mpi.org/trac/ompi/ticket/4923</a>: Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4925">https://svn.open-mpi.org/trac/ompi/ticket/4925</a>: OMPI RM 1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4926">https://svn.open-mpi.org/trac/ompi/ticket/4926</a>: Oscar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4927">https://svn.open-mpi.org/trac/ompi/ticket/4927</a>: Jeff
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15966.php">http://www.open-mpi.org/community/lists/devel/2014/10/15966.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15967.php">http://www.open-mpi.org/community/lists/devel/2014/10/15967.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15972.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-9-g3263f72"</a>
<li><strong>Previous message:</strong> <a href="15970.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>In reply to:</strong> <a href="15967.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15987.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
