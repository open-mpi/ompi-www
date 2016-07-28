<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 08:54:32 2014" -->
<!-- isoreceived="20141007125432" -->
<!-- sent="Tue, 7 Oct 2014 12:54:30 +0000" -->
<!-- isosent="20141007125430" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a" -->
<!-- id="203E3507-0FFA-479D-A8F1-6117D43EE623_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141007110904.C2347265840_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-49-g86f1d5a<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 08:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Reply:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure how I feel about this commit:
<br>
<p>1. It blindly ignores the &quot;return&quot; statement.  I.e., if the intent for this commit was to kill the process, that &quot;return&quot; statement should have been deleted, too.
<br>
<p>2. We clearly decided a long time ago that removing an item from a list from which it does not belong is NOT a fatal error.  This commit is a fundamental change in behavior that really should have been RFC'ed (e.g., I RFC'ed the calloc-vs-malloc idea last week).
<br>
<p>I'm not saying that this is a bad change in core behavior, but I would have appreciated a little heads-up and a chance to think about it before it was made (I'm still not sure what I think about this).
<br>
<p><p><p>On Oct 7, 2014, at 7:09 AM, &lt;gitdub_at_[hidden]&gt; &lt;gitdub_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c (commit)
</span><br>
<span class="quotelev1">&gt;      from  cd48fbeec67f1a511a9cf5ce890fef6cc535ef60 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c">https://github.com/open-mpi/ompi/commit/86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 86f1d5af3ee484f34092ad3f7a645d9a5ccbcb6c
</span><br>
<span class="quotelev1">&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Tue Oct 7 14:07:41 2014 +0300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OPAL: drop dead with core on bad flow. rarely happens with helloworld on large scale.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/class/opal_list.h b/opal/class/opal_list.h
</span><br>
<span class="quotelev1">&gt; index b66438e..bad4cbf 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/class/opal_list.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/class/opal_list.h
</span><br>
<span class="quotelev1">&gt; @@ -486,6 +486,7 @@ static inline opal_list_item_t *opal_list_remove_item
</span><br>
<span class="quotelev1">&gt;     if (!found) {
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr,&quot; Warning :: opal_list_remove_item - the item %p is not on the list %p \n&quot;,(void*) item, (void*) list);
</span><br>
<span class="quotelev1">&gt;         fflush(stderr);
</span><br>
<span class="quotelev1">&gt; +        abort();
</span><br>
<span class="quotelev1">&gt;         return (opal_list_item_t *)NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; opal/class/opal_list.h | 1 +
</span><br>
<span class="quotelev1">&gt; 1 file changed, 1 insertion(+)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<li><strong>Next message:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16018.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Reply:</strong> <a href="16020.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
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
