<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1488-g40b7643";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 11:40:31 2015" -->
<!-- isoreceived="20150413154031" -->
<!-- sent="Mon, 13 Apr 2015 09:40:29 -0600" -->
<!-- isosent="20150413154029" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1488-g40b7643" -->
<!-- id="20150413154029.GB99684_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150413153200.61934260906_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1488-g40b7643<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-13 11:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17214.php">Cyrille DIBAMOU MBEUYO: "[OMPI devel] Restart a mpi application previously checkpointed"</a>
<li><strong>Previous message:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is going to be unreachable code. The outstanding lock can only take
<br>
on the value lock_nocheck, lock_exclusive, lock_shared, or
<br>
lock_none. All of which are checked. The correct fix would be to change
<br>
it to an switch so a warning will be printed if any other valid lock
<br>
values are added.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 13, 2015 at 11:32:00AM -0400, gitdub_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;        via  40b7643119f2fbb9c08e9987e93d543e247cede4 (commit)
</span><br>
<span class="quotelev1">&gt;       from  9c6d452d6b95a2aebffb23a7a7c8a985b60edd36 (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/40b7643119f2fbb9c08e9987e93d543e247cede4">https://github.com/open-mpi/ompi/commit/40b7643119f2fbb9c08e9987e93d543e247cede4</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 40b7643119f2fbb9c08e9987e93d543e247cede4
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Apr 13 11:31:43 2015 -0400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     osc_sm_passive_target.c: ensure ret is always defined
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     Fixes a compiler warning
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/osc/sm/osc_sm_passive_target.c b/ompi/mca/osc/sm/osc_sm_passive_target.c
</span><br>
<span class="quotelev1">&gt; index c54be0b..b2398ed 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/osc/sm/osc_sm_passive_target.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/osc/sm/osc_sm_passive_target.c
</span><br>
<span class="quotelev1">&gt; @@ -3,6 +3,7 @@
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2011      Sandia National Laboratories.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2014-2015 Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt;   *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2015 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -160,6 +161,8 @@ ompi_osc_sm_unlock(int target,
</span><br>
<span class="quotelev1">&gt;          ret = end_exclusive(module, target);
</span><br>
<span class="quotelev1">&gt;      } else if (module-&gt;outstanding_locks[target] == lock_shared) {
</span><br>
<span class="quotelev1">&gt;          ret = end_shared(module, target);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        ret = OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      module-&gt;outstanding_locks[target] = lock_none;
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
<span class="quotelev1">&gt;  ompi/mca/osc/sm/osc_sm_passive_target.c | 3 +++
</span><br>
<span class="quotelev1">&gt;  1 file changed, 3 insertions(+)
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17213/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17214.php">Cyrille DIBAMOU MBEUYO: "[OMPI devel] Restart a mpi application previously checkpointed"</a>
<li><strong>Previous message:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
