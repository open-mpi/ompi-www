<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 11:24:21 2014" -->
<!-- isoreceived="20141226162421" -->
<!-- sent="Fri, 26 Dec 2014 08:24:17 -0800" -->
<!-- isosent="20141226162417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e" -->
<!-- id="87FCEBDD-D174-495D-9C8B-0D342B4259D2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20141226064041.01E4025FA9E_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 11:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;.this actually isn&#226;&#128;&#153;t quite correct as we aren&#226;&#128;&#153;t guaranteed to know our binding that early in the procedure (see orte/mca/ess/base/ess_base_fns.c, the orte_ess_base_proc_binding function). I think I see the right fix, so I&#226;&#128;&#153;ll update this a bit later.
<br>
<p><p><span class="quotelev1">&gt; On Dec 25, 2014, at 10:40 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt;       via  9e9261e90aef7611a919d005312ce0e6a9c5856e (commit)
</span><br>
<span class="quotelev1">&gt;      from  24df0ed039510cca3801f7d2b1315e48982b4a6b (commit)
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
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/9e9261e90aef7611a919d005312ce0e6a9c5856e">https://github.com/open-mpi/ompi/commit/9e9261e90aef7611a919d005312ce0e6a9c5856e</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 9e9261e90aef7611a919d005312ce0e6a9c5856e
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Dec 26 15:37:08 2014 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    pmix: correctly set locality flags in proc_flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    do not use opal_process_info.cpuset which is not
</span><br>
<span class="quotelev1">&gt;    set at that time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/pmix/native/pmix_native.c b/opal/mca/pmix/native/pmix_native.c
</span><br>
<span class="quotelev1">&gt; index 1ff007c..ea67fe1 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/pmix/native/pmix_native.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/pmix/native/pmix_native.c
</span><br>
<span class="quotelev1">&gt; @@ -1306,6 +1306,19 @@ static bool native_get_attr(const char *attr, opal_value_t **kv)
</span><br>
<span class="quotelev1">&gt;     myrank = native_pname.vpid;
</span><br>
<span class="quotelev1">&gt;     id.jobid = native_pname.jobid;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; +    /* fetch my cpuset */
</span><br>
<span class="quotelev1">&gt; +    OBJ_CONSTRUCT(&amp;vals, opal_list_t);
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SUCCESS == (rc = opal_dstore.fetch(opal_dstore_internal, &amp;native_pname,
</span><br>
<span class="quotelev1">&gt; +                                                OPAL_DSTORE_CPUSET, &amp;vals))) {
</span><br>
<span class="quotelev1">&gt; +        kp = (opal_value_t*)opal_list_get_first(&amp;vals);
</span><br>
<span class="quotelev1">&gt; +        cpuset = strdup(kp-&gt;data.string);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        cpuset = NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    OPAL_LIST_DESTRUCT(&amp;vals);
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* we only need to set locality for each local rank as &quot;not found&quot;
</span><br>
<span class="quotelev1">&gt;      * equates to &quot;non local&quot; */
</span><br>
<span class="quotelev1">&gt;     ranks = opal_argv_split(lclpeers-&gt;data.string, ',');
</span><br>
<span class="quotelev1">&gt; @@ -1337,7 +1350,7 @@ static bool native_get_attr(const char *attr, opal_value_t **kv)
</span><br>
<span class="quotelev1">&gt;             } else {
</span><br>
<span class="quotelev1">&gt;                 /* determine relative location on our node */
</span><br>
<span class="quotelev1">&gt;                 locality = opal_hwloc_base_get_relative_locality(opal_hwloc_topology,
</span><br>
<span class="quotelev1">&gt; -                                                                 opal_process_info.cpuset,
</span><br>
<span class="quotelev1">&gt; +                                                                 cpuset,
</span><br>
<span class="quotelev1">&gt;                                                                  kp-&gt;data.string);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             OPAL_LIST_DESTRUCT(&amp;vals);
</span><br>
<span class="quotelev1">&gt; @@ -1359,6 +1372,11 @@ static bool native_get_attr(const char *attr, opal_value_t **kv)
</span><br>
<span class="quotelev1">&gt;         (void)opal_dstore.store(opal_dstore_internal, &amp;id, &amp;kvn);
</span><br>
<span class="quotelev1">&gt;         OBJ_DESTRUCT(&amp;kvn);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +#if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; +    if (NULL != cpuset) {
</span><br>
<span class="quotelev1">&gt; +        free(cpuset);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt;     opal_argv_free(ranks);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return found;
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
<span class="quotelev1">&gt; opal/mca/pmix/native/pmix_native.c | 20 +++++++++++++++++++-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 19 insertions(+), 1 deletion(-)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Previous message:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
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
