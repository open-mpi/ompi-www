<?
$subject_val = "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 23:33:24 2014" -->
<!-- isoreceived="20141003033324" -->
<!-- sent="Fri, 03 Oct 2014 12:33:32 +0900" -->
<!-- isosent="20141003033332" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="542E190C.8010602_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6E72895-DC3B-445B-9904-0C0C8293EDAE_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-02 23:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15988.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15986.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15971.php">Ralph Castain: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15989.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15989.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>what about cherry-pick ?
<br>
<p>the most painful part is probably to manually retrieve the git commit id
<br>
of a given svn commit id
<br>
<p>git log master, and then search rxxxx
<br>
/* each commit log has a line like :
<br>
This commit was SVN rxxxxx
<br>
*/
<br>
<p>and once you got (all) the git commits id of a given CMR, you can
<br>
cherry-pick them,
<br>
and push and issue the PR
<br>
<p>/* i did not check whether cherry-pick automatically create/remove files */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/03 0:51, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I agree that someone needs to do it. However, what isn't clear is *how* to do it. I get the mechanics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * clone the ompi-release 1.8 branch
</span><br>
<span class="quotelev1">&gt; * apply the required change
</span><br>
<span class="quotelev1">&gt; * issue a pull request
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's the second step that isn't clear. How the heck do I (a) find the change that was originally applied, and (b) apply it to my clone of ompi-release???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I just download the changeset(s) from Trac and patch them in? I guess that will work if we don't have an alternative method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 2, 2014, at 3:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fair enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Someone* needs to re-file those CMRs as pull requests; probably in some cases it's the reporter, probably in some cases it's the owner.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 2, 2014, at 6:33 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thumbs up for the migration !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the names here are the CMR owners ('Owned by' field in TRAC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should it be the duty of the creators ('Reported by' field in TRAC) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-create the CMR instead?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* if not, and from a git log point of view, that means the commiter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be the reviewer and not the reporter */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what do you think ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/10/02 19:24, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. The following still-open CMRs were not brought over, and need to be re-filed as pull requests:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4216">https://svn.open-mpi.org/trac/ompi/ticket/4216</a>: Nathan (BLOCKER)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4816">https://svn.open-mpi.org/trac/ompi/ticket/4816</a>: Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4872">https://svn.open-mpi.org/trac/ompi/ticket/4872</a>: Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4888">https://svn.open-mpi.org/trac/ompi/ticket/4888</a>: Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4900">https://svn.open-mpi.org/trac/ompi/ticket/4900</a>: Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4905">https://svn.open-mpi.org/trac/ompi/ticket/4905</a>: Mike Dubman
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4917">https://svn.open-mpi.org/trac/ompi/ticket/4917</a>: Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4911">https://svn.open-mpi.org/trac/ompi/ticket/4911</a>: Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4922">https://svn.open-mpi.org/trac/ompi/ticket/4922</a>: Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4923">https://svn.open-mpi.org/trac/ompi/ticket/4923</a>: Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4925">https://svn.open-mpi.org/trac/ompi/ticket/4925</a>: OMPI RM 1.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4926">https://svn.open-mpi.org/trac/ompi/ticket/4926</a>: Oscar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - <a href="https://svn.open-mpi.org/trac/ompi/ticket/4927">https://svn.open-mpi.org/trac/ompi/ticket/4927</a>: Jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15966.php">http://www.open-mpi.org/community/lists/devel/2014/10/15966.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15967.php">http://www.open-mpi.org/community/lists/devel/2014/10/15967.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15971.php">http://www.open-mpi.org/community/lists/devel/2014/10/15971.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15988.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15986.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15971.php">Ralph Castain: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15989.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15989.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
