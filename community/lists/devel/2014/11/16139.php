<?
$subject_val = "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 04:44:17 2014" -->
<!-- isoreceived="20141101084417" -->
<!-- sent="Sat, 01 Nov 2014 17:44:09 +0900" -->
<!-- isosent="20141101084409" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a" -->
<!-- id="usjwls6wepd1trb52gkdi42m.1414830535661_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-01 04:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">Ralph Castain: "[OMPI devel] 1.8.4rc1 ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>I am sorry about that, the doc is not to be blamed here.
<br>
I usually do pull/commit/push in a row to avoid this kind of things but i screwed up this time ...
<br>
I cannot remember if i did commit/pull/push or if i simply forgot to pull
<br>
<p>btw, is there a push option to abort if that would make github history non linear ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>&quot;Dave Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please try to avoid creating merge-of-master commits like 68bec0ae (&quot;Merge branch 'master' of...&quot;), they just clutter the history.  A rebase is almost always more appropriate in this situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="https://github.com/open-mpi/ompi/wiki/GitBestPractices">https://github.com/open-mpi/ompi/wiki/GitBestPractices</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you created that commit with &quot;git pull&quot;, you can perform the rebase equivalent by running &quot;git pull --rebase&quot;.  If this doesn't make sense, just let me know and I can explain further and/or improve the docs around this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;-Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 31, 2014, at 2:35 AM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;       via  68bec0ae1f022e095c132b3f8c7317238b318416 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;       via  76ee98c86a7dafc922d342bc4c819ecc3ee14f52 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;      from  672d96704cc165b91c7bcf263e97704affcd5f20 (commit)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/68bec0ae1f022e095c132b3f8c7317238b318416">https://github.com/open-mpi/ompi/commit/68bec0ae1f022e095c132b3f8c7317238b318416</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 68bec0ae1f022e095c132b3f8c7317238b318416
</span><br>
<span class="quotelev2">&gt;&gt; Merge: 76ee98c 672d967
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Fri Oct 31 16:34:43 2014 +0900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Merge branch 'master' of <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/76ee98c86a7dafc922d342bc4c819ecc3ee14f52">https://github.com/open-mpi/ompi/commit/76ee98c86a7dafc922d342bc4c819ecc3ee14f52</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 76ee98c86a7dafc922d342bc4c819ecc3ee14f52
</span><br>
<span class="quotelev2">&gt;&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Fri Oct 31 16:34:02 2014 +0900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    btl/scif: start the listening thread once only
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/btl/scif/btl_scif.h b/opal/mca/btl/scif/btl_scif.h
</span><br>
<span class="quotelev2">&gt;&gt; index 741fda8..b8d9aab 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/btl/scif/btl_scif.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/btl/scif/btl_scif.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -93,6 +93,7 @@ typedef struct mca_btl_scif_module_t {
</span><br>
<span class="quotelev2">&gt;&gt;     pthread_t listen_thread;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     volatile bool exiting;
</span><br>
<span class="quotelev2">&gt;&gt; +    bool listening;
</span><br>
<span class="quotelev2">&gt;&gt; } mca_btl_scif_module_t;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct mca_btl_scif_component_t {
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/btl/scif/btl_scif_add_procs.c b/opal/mca/btl/scif/btl_scif_add_procs.c
</span><br>
<span class="quotelev2">&gt;&gt; index 80da884..4a6d838 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/btl/scif/btl_scif_add_procs.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/btl/scif/btl_scif_add_procs.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -98,10 +98,13 @@ int mca_btl_scif_add_procs(struct mca_btl_base_module_t* btl,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     scif_module-&gt;endpoint_count = procs_on_board;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    /* start listening thread */
</span><br>
<span class="quotelev2">&gt;&gt; -    rc = pthread_create (&amp;mca_btl_scif_module.listen_thread, NULL, mca_btl_scif_connect_accept, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -    if (0 &gt; rc) {
</span><br>
<span class="quotelev2">&gt;&gt; -        return OPAL_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (!mca_btl_scif_module.listening) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* start listening thread */
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = pthread_create (&amp;mca_btl_scif_module.listen_thread, NULL, mca_btl_scif_connect_accept, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 &gt; rc) {
</span><br>
<span class="quotelev2">&gt;&gt; +            return OPAL_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_btl_scif_module.listening = true;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/btl/scif/btl_scif_component.c b/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev2">&gt;&gt; index 7600b12..61bf2d1 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -267,6 +267,7 @@ static mca_btl_base_module_t **mca_btl_scif_component_init (int *num_btl_modules
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     base_modules[0] = &amp;mca_btl_scif_module.super;
</span><br>
<span class="quotelev2">&gt;&gt;     mca_btl_scif_module.exiting = false;
</span><br>
<span class="quotelev2">&gt;&gt; +    mca_btl_scif_module.listening = false;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     rc = mca_btl_scif_modex_send ();
</span><br>
<span class="quotelev2">&gt;&gt;     if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/btl/scif/btl_scif_module.c b/opal/mca/btl/scif/btl_scif_module.c
</span><br>
<span class="quotelev2">&gt;&gt; index 7777cfb..fb36b7b 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/btl/scif/btl_scif_module.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/btl/scif/btl_scif_module.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -126,7 +126,7 @@ mca_btl_scif_module_finalize (struct mca_btl_base_module_t *btl)
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     /* close the listening endpoint */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (-1 != mca_btl_scif_module.scif_fd) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (mca_btl_scif_module.listening &amp;&amp; -1 != mca_btl_scif_module.scif_fd) {
</span><br>
<span class="quotelev2">&gt;&gt;         /* wake up the scif thread */
</span><br>
<span class="quotelev2">&gt;&gt;         scif_epd_t tmpfd;
</span><br>
<span class="quotelev2">&gt;&gt;         tmpfd = scif_open();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/btl/scif/btl_scif.h           |  1 +
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/btl/scif/btl_scif_add_procs.c | 11 +++++++----
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/btl/scif/btl_scif_component.c |  1 +
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/btl/scif/btl_scif_module.c    |  2 +-
</span><br>
<span class="quotelev2">&gt;&gt; 4 files changed, 10 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi/ompi
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits mailing list
</span><br>
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16137.php">http://www.open-mpi.org/community/lists/devel/2014/10/16137.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16138.php">Ralph Castain: "[OMPI devel] 1.8.4rc1 ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16146.php">Dave Goodell (dgoodell): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
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
