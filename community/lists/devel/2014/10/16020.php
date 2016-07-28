<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 09:38:09 2014" -->
<!-- isoreceived="20141007133809" -->
<!-- sent="Tue, 7 Oct 2014 06:38:07 -0700" -->
<!-- isosent="20141007133807" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a" -->
<!-- id="CAMD57oc3GnbhiaMwbLsrqxADZSRfPKjXpqWOW4S5BaTOtao4rw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="203E3507-0FFA-479D-A8F1-6117D43EE623_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 09:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<li><strong>In reply to:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Reply:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may be me mis-communicating with Mike off list. I had suggested he add
<br>
this &quot;feature&quot; to help in catching a rare race condition in his MTT runs.
<br>
However, I had expected him to do it on his private branch, not commit it
<br>
to the main repo.
<br>
<p>I agree that I'm not sure what I think about it for the trunk. It is
<br>
indicative of a bug in the code, but if someone hits that bug at
<br>
scale....generating core files at scale can be really bad.
<br>
<p><p>On Tue, Oct 7, 2014 at 5:54 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure how I feel about this commit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. It blindly ignores the &quot;return&quot; statement.  I.e., if the intent for
</span><br>
<span class="quotelev1">&gt; this commit was to kill the process, that &quot;return&quot; statement should have
</span><br>
<span class="quotelev1">&gt; been deleted, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We clearly decided a long time ago that removing an item from a list
</span><br>
<span class="quotelev1">&gt; from which it does not belong is NOT a fatal error.  This commit is a
</span><br>
<span class="quotelev1">&gt; fundamental change in behavior that really should have been RFC'ed (e.g., I
</span><br>
<span class="quotelev1">&gt; RFC'ed the calloc-vs-malloc idea last week).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not saying that this is a bad change in core behavior, but I would
</span><br>
<span class="quotelev1">&gt; have appreciated a little heads-up and a chance to think about it before it
</span><br>
<span class="quotelev1">&gt; was made (I'm still not sure what I think about this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2014, at 7:09 AM, &lt;gitdub_at_[hidden]&gt; &lt;gitdub_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  cd48fbeec67f1a511a9cf5ce890fef6cc535ef60 (commit)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c">https://github.com/open-mpi/ompi/commit/86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c
</span><br>
<span class="quotelev2">&gt; &gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Tue Oct 7 14:07:41 2014 +0300
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OPAL: drop dead with core on bad flow. rarely happens with helloworld
</span><br>
<span class="quotelev1">&gt; on large scale.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/class/opal_list.h b/opal/class/opal_list.h
</span><br>
<span class="quotelev2">&gt; &gt; index b66438e..bad4cbf 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/class/opal_list.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/class/opal_list.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -486,6 +486,7 @@ static inline opal_list_item_t *opal_list_remove_item
</span><br>
<span class="quotelev2">&gt; &gt;     if (!found) {
</span><br>
<span class="quotelev2">&gt; &gt;         fprintf(stderr,&quot; Warning :: opal_list_remove_item - the item %p
</span><br>
<span class="quotelev1">&gt; is not on the list %p \n&quot;,(void*) item, (void*) list);
</span><br>
<span class="quotelev2">&gt; &gt;         fflush(stderr);
</span><br>
<span class="quotelev2">&gt; &gt; +        abort();
</span><br>
<span class="quotelev2">&gt; &gt;         return (opal_list_item_t *)NULL;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt; &gt; opal/class/opal_list.h | 1 +
</span><br>
<span class="quotelev2">&gt; &gt; 1 file changed, 1 insertion(+)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt; &gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16019.php">http://www.open-mpi.org/community/lists/devel/2014/10/16019.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16020/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16021.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<li><strong>In reply to:</strong> <a href="16019.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Reply:</strong> <a href="16023.php">Mike Dubman: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
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
