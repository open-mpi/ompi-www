<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 00:44:06 2015" -->
<!-- isoreceived="20151028044406" -->
<!-- sent="Wed, 28 Oct 2015 13:43:59 +0900" -->
<!-- isosent="20151028044359" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307" -->
<!-- id="5630528F.4030005_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56304946.1070501_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 00:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>i am unable to reproduce the issue.
<br>
if build still breaks for you, could you send me your configure command 
<br>
line ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 10/28/2015 1:04 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMIX_ERR_SILENT is defined in 
</span><br>
<span class="quotelev1">&gt; opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ll have a look at it from now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/28/2015 12:02 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We get a nice compiler complaint:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c: 
</span><br>
<span class="quotelev2">&gt;&gt; In function 'pmix_server_get':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131: 
</span><br>
<span class="quotelev2">&gt;&gt; error: 'PMIX_ERR_SILENT' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131: 
</span><br>
<span class="quotelev2">&gt;&gt; error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:131: 
</span><br>
<span class="quotelev2">&gt;&gt; error: for each function it appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:117: 
</span><br>
<span class="quotelev2">&gt;&gt; warning: unused variable 'cd'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c: 
</span><br>
<span class="quotelev2">&gt;&gt; In function '_process_dmdx_reply':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:478: 
</span><br>
<span class="quotelev2">&gt;&gt; error: 'PMIX_ERR_SILENT' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460: 
</span><br>
<span class="quotelev2">&gt;&gt; warning: unused variable 'xptr'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460: 
</span><br>
<span class="quotelev2">&gt;&gt; warning: unused variable 'pbkt'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c:460: 
</span><br>
<span class="quotelev2">&gt;&gt; warning: unused variable 'xfer'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And he is right:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $find . -name &quot;*.h&quot; -exec grep -Hn PMIX_ERR_SILENT {} +
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/mca/pmix/pmix1xx/pmix/src/util/error.h:33:  if 
</span><br>
<span class="quotelev2">&gt;&gt; (PMIX_ERR_SILENT != (r)) {       \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: &lt;gitdub_at_[hidden] &lt;mailto:gitdub_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, Oct 27, 2015 at 10:39 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. 
</span><br>
<span class="quotelev2">&gt;&gt; dev-2921-gb603307
</span><br>
<span class="quotelev2">&gt;&gt; To: ompi-commits_at_[hidden] &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;        via  b603307f7d33663ef6fe5941bb0d94bd2be017cb (commit)
</span><br>
<span class="quotelev2">&gt;&gt;        via  267ca8fcd3a59b780491d80d29e870061d8dac56 (commit)
</span><br>
<span class="quotelev2">&gt;&gt;       from  3035e140511b082c51ad66e116dd381a083a191d (commit)
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
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb">https://github.com/open-mpi/ompi/commit/b603307f7d33663ef6fe5941bb0d94bd2be017cb</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit b603307f7d33663ef6fe5941bb0d94bd2be017cb
</span><br>
<span class="quotelev2">&gt;&gt; Merge: 3035e14 267ca8f
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc54 &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Tue Oct 27 19:39:10 2015 -0700
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Merge pull request #1073 from rhc54/topic/pmix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cleanup the PMIx direct modex support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56">https://github.com/open-mpi/ompi/commit/267ca8fcd3a59b780491d80d29e870061d8dac56</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; commit 267ca8fcd3a59b780491d80d29e870061d8dac56
</span><br>
<span class="quotelev2">&gt;&gt; Author: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Tue Oct 27 11:01:49 2015 -0700
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cleanup the PMIx direct modex support. Add an MCA parameter 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_base_async_modex that will cause the async modex to be used when 
</span><br>
<span class="quotelev2">&gt;&gt; set to 1. Default it to 0 for now
</span><br>
<span class="quotelev2">&gt;&gt;      to continue current default behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Also add an MCA param pmix_base_collect_data to direct that the 
</span><br>
<span class="quotelev2">&gt;&gt; blocking fence shall return all data to each process. Obviously, this 
</span><br>
<span class="quotelev2">&gt;&gt; param has no effect if async_
</span><br>
<span class="quotelev2">&gt;&gt;     modex is used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; index 4c0391d..d0eebb2 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -639,10 +639,9 @@ int ompi_mpi_init(int argc, char **argv, int 
</span><br>
<span class="quotelev2">&gt;&gt; requested, int *provided)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* exchange connection info - this function may also act as a 
</span><br>
<span class="quotelev2">&gt;&gt; barrier
</span><br>
<span class="quotelev2">&gt;&gt;       * if data exchange is required. The modex occurs solely across 
</span><br>
<span class="quotelev2">&gt;&gt; procs
</span><br>
<span class="quotelev2">&gt;&gt; -     * in our job, so no proc array is passed. If a barrier is required,
</span><br>
<span class="quotelev2">&gt;&gt; -     * the &quot;modex&quot; function will perform it internally
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_MODEX(NULL, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +     * in our job. If a barrier is required, the &quot;modex&quot; function will
</span><br>
<span class="quotelev2">&gt;&gt; +     * perform it internally */
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_MODEX();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL_TIMING_MNEXT((&amp;tm,&quot;time from modex to first barrier&quot;));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/base/pmix_base_frame.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; index e1ab766..6e8a347 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/base/pmix_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -31,12 +31,21 @@
</span><br>
<span class="quotelev2">&gt;&gt;  /* Note that this initializer is important -- do not remove it!  See
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/issues/375">https://github.com/open-mpi/ompi/issues/375</a> for details. */
</span><br>
<span class="quotelev2">&gt;&gt;  opal_pmix_base_module_t opal_pmix = { 0 };
</span><br>
<span class="quotelev2">&gt;&gt; -bool opal_pmix_collect_all_data = false;
</span><br>
<span class="quotelev2">&gt;&gt; +bool opal_pmix_collect_all_data = true;
</span><br>
<span class="quotelev2">&gt;&gt;  bool opal_pmix_base_allow_delayed_server = false;
</span><br>
<span class="quotelev2">&gt;&gt;  int opal_pmix_verbose_output = -1;
</span><br>
<span class="quotelev2">&gt;&gt; +bool opal_pmix_base_async_modex = false;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  static int opal_pmix_base_frame_register(mca_base_register_flag_t flags)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; +    opal_pmix_base_async_modex = false;
</span><br>
<span class="quotelev2">&gt;&gt; +    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;async_modex&quot;, &quot;Use asynchronous modex mode&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev2">&gt;&gt; +  MCA_BASE_VAR_SCOPE_READONLY, &amp;opal_pmix_base_async_modex);
</span><br>
<span class="quotelev2">&gt;&gt; +    opal_pmix_collect_all_data = true;
</span><br>
<span class="quotelev2">&gt;&gt; +    (void) mca_base_var_register(&quot;opal&quot;, &quot;pmix&quot;, &quot;base&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;collect_data&quot;, &quot;Collect all data during modex&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 MCA_BASE_VAR_TYPE_BOOL, NULL, 0, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_INFO_LVL_9,
</span><br>
<span class="quotelev2">&gt;&gt; +  MCA_BASE_VAR_SCOPE_READONLY, &amp;opal_pmix_collect_all_data);
</span><br>
<span class="quotelev2">&gt;&gt;      return OPAL_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix.h b/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev2">&gt;&gt; index f265e01..7223529 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -36,6 +36,8 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt;  /* provide access to the framework verbose output without
</span><br>
<span class="quotelev2">&gt;&gt;   * exposing the entire base */
</span><br>
<span class="quotelev2">&gt;&gt;  extern int opal_pmix_verbose_output;
</span><br>
<span class="quotelev2">&gt;&gt; +extern bool opal_pmix_collect_all_data;
</span><br>
<span class="quotelev2">&gt;&gt; +extern bool opal_pmix_base_async_modex;
</span><br>
<span class="quotelev2">&gt;&gt;  extern int opal_pmix_base_exchange(opal_value_t *info,
</span><br>
<span class="quotelev2">&gt;&gt;                                     opal_pmix_pdata_t *pdat,
</span><br>
<span class="quotelev2">&gt;&gt;                                     int timeout);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -254,10 +256,13 @@ extern int opal_pmix_base_exchange(opal_value_t 
</span><br>
<span class="quotelev2">&gt;&gt; *info,
</span><br>
<span class="quotelev2">&gt;&gt;   * that takes into account directives and availability of
</span><br>
<span class="quotelev2">&gt;&gt;   * non-blocking operations
</span><br>
<span class="quotelev2">&gt;&gt;   */
</span><br>
<span class="quotelev2">&gt;&gt; -#define OPAL_MODEX(p, s)              \
</span><br>
<span class="quotelev2">&gt;&gt; -    do {                              \
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_pmix.commit();           \
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_pmix.fence((p), (s));    \
</span><br>
<span class="quotelev2">&gt;&gt; +#define OPAL_MODEX()                                    \
</span><br>
<span class="quotelev2">&gt;&gt; +    do {                                                \
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_pmix.commit();                             \
</span><br>
<span class="quotelev2">&gt;&gt; +        if (!opal_pmix_base_async_modex) {              \
</span><br>
<span class="quotelev2">&gt;&gt; +            opal_pmix.fence(NULL,                       \
</span><br>
<span class="quotelev2">&gt;&gt; +                opal_pmix_collect_all_data);            \
</span><br>
<span class="quotelev2">&gt;&gt; +        }                                               \
</span><br>
<span class="quotelev2">&gt;&gt;      } while(0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /**
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; index 0216e34..5a111a1 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/include/pmix/pmix_common.h.in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -183,7 +183,7 @@ BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /****    PMIX ERROR CONSTANTS    ****/
</span><br>
<span class="quotelev2">&gt;&gt;  /* PMIx errors are always negative, with 0 reserved for success */
</span><br>
<span class="quotelev2">&gt;&gt; -#define PMIX_ERROR_MIN  -41  // set equal to number of non-zero 
</span><br>
<span class="quotelev2">&gt;&gt; entries in enum
</span><br>
<span class="quotelev2">&gt;&gt; +#define PMIX_ERROR_MIN  -42  // set equal to number of non-zero 
</span><br>
<span class="quotelev2">&gt;&gt; entries in enum
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt;      PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER = PMIX_ERROR_MIN,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -230,6 +230,7 @@ typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt;      PMIX_ERR_INVALID_CRED,
</span><br>
<span class="quotelev2">&gt;&gt;      PMIX_EXISTS,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_ERR_SILENT,
</span><br>
<span class="quotelev2">&gt;&gt;      PMIX_ERROR,
</span><br>
<span class="quotelev2">&gt;&gt;      PMIX_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;  } pmix_status_t;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev2">&gt;&gt; index d41be9c..b93ca6d 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client_get.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -458,6 +458,7 @@ static void getnb_cbfunc(struct pmix_peer_t *pr, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_usock_hdr_t *hdr,
</span><br>
<span class="quotelev2">&gt;&gt;          PMIX_RELEASE(bptr);  // free's the data region
</span><br>
<span class="quotelev2">&gt;&gt;          if (PMIX_ERR_UNPACK_READ_PAST_END_OF_BUFFER != rc) {
</span><br>
<span class="quotelev2">&gt;&gt;              PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +            rc = PMIX_ERR_SILENT; // avoid error-logging twice
</span><br>
<span class="quotelev2">&gt;&gt;              break;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; index 5422b78..88b0468 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; @@ -16,4 +16,5 @@ sources += \
</span><br>
<span class="quotelev2">&gt;&gt;          src/server/pmix_server.c \
</span><br>
<span class="quotelev2">&gt;&gt;          src/server/pmix_server_ops.c \
</span><br>
<span class="quotelev2">&gt;&gt;          src/server/pmix_server_regex.c \
</span><br>
<span class="quotelev2">&gt;&gt; -        src/server/pmix_server_listener.c
</span><br>
<span class="quotelev2">&gt;&gt; +        src/server/pmix_server_listener.c \
</span><br>
<span class="quotelev2">&gt;&gt; +        src/server/pmix_server_get.c
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; index d16ae16..85f9e17 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -141,8 +141,7 @@ static void _queue_message(int fd, short args, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_usock_queue_t *queue = (pmix_usock_queue_t*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_usock_send_t *snd;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;[%s:%d] queue callback called: reply to 
</span><br>
<span class="quotelev2">&gt;&gt; %s:%d on tag %d,&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;event_is_active=%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;[%s:%d] queue callback called: reply to 
</span><br>
<span class="quotelev2">&gt;&gt; %s:%d on tag %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                          __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt;  (queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace,
</span><br>
<span class="quotelev2">&gt;&gt;                          (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),
</span><br>
<span class="quotelev2">&gt;&gt; @@ -179,12 +178,10 @@ static void _queue_message(int fd, short args, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;          queue-&gt;buf  = (b);                 \
</span><br>
<span class="quotelev2">&gt;&gt;          queue-&gt;tag  = (t);                 \
</span><br>
<span class="quotelev2">&gt;&gt;          pmix_output_verbose(2, pmix_globals.debug_output,              \
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;[%s:%d] queue reply to %s:%d on tag %d,&quot;    
</span><br>
<span class="quotelev2">&gt;&gt;    \
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;event_is_active=%d&quot;,              \
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;[%s:%d] queue reply to %s:%d on tag %d&quot;,    
</span><br>
<span class="quotelev2">&gt;&gt;    \
</span><br>
<span class="quotelev2">&gt;&gt;                          __FILE__, __LINE__,              \
</span><br>
<span class="quotelev2">&gt;&gt;  (queue-&gt;peer)-&gt;info-&gt;nptr-&gt;nspace, \
</span><br>
<span class="quotelev2">&gt;&gt; -                        (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag),    
</span><br>
<span class="quotelev2">&gt;&gt;     \
</span><br>
<span class="quotelev2">&gt;&gt; - (queue-&gt;peer)-&gt;send_ev_active);                 \
</span><br>
<span class="quotelev2">&gt;&gt; +                        (queue-&gt;peer)-&gt;info-&gt;rank, (queue-&gt;tag));    
</span><br>
<span class="quotelev2">&gt;&gt;    \
</span><br>
<span class="quotelev2">&gt;&gt;          event_assign(&amp;queue-&gt;ev, pmix_globals.evbase, -1,            
</span><br>
<span class="quotelev2">&gt;&gt;    \
</span><br>
<span class="quotelev2">&gt;&gt;                         EV_WRITE, _queue_message, queue);             \
</span><br>
<span class="quotelev2">&gt;&gt;          event_priority_set(&amp;queue-&gt;ev, 0);                     \
</span><br>
<span class="quotelev2">&gt;&gt; @@ -723,7 +720,7 @@ static void _register_client(int sd, short args, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;           * someone has been waiting for a request on a remote proc
</span><br>
<span class="quotelev2">&gt;&gt;           * in one of our nspaces, but we didn't know all the local procs
</span><br>
<span class="quotelev2">&gt;&gt;           * and so couldn't determine the proc was remote */
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_pending_nspace_fix(nptr);
</span><br>
<span class="quotelev2">&gt;&gt; +        pmix_pending_nspace_requests(nptr);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      /* let the caller know we are done */
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != cd-&gt;opcbfunc) {
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev2">&gt;&gt; new file mode 100644
</span><br>
<span class="quotelev2">&gt;&gt; index 0000000..2cb75cf
</span><br>
<span class="quotelev2">&gt;&gt; --- /dev/null
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,552 @@
</span><br>
<span class="quotelev2">&gt;&gt; +/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
</span><br>
<span class="quotelev2">&gt;&gt; +/*
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014-2015 Intel, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014-2015 Artem Y. Polyakov &lt;artpol84_at_[hidden]&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2015      Mellanox Technologies, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;private/autogen/config.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;pmix/rename.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;private/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;private/pmix_stdint.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;private/pmix_socket_errno.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;pmix_server.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/include/pmix_globals.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_STRING_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;fcntl.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_SYS_UN_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;sys/un.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_SYS_UIO_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;sys/uio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#include PMIX_EVENT_HEADER
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/class/pmix_list.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/buffer_ops/buffer_ops.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/util/argv.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/util/error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/util/output.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/util/pmix_environ.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/util/progress_threads.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/usock/usock.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;src/sec/pmix_sec.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;pmix_server_ops.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +extern pmix_server_module_t pmix_host_server;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_object_t super;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_event_t ev;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_status_t status;
</span><br>
<span class="quotelev2">&gt;&gt; +    const char *data;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t ndata;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_local_t *lcd;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_release_cbfunc_t relcbfunc;
</span><br>
<span class="quotelev2">&gt;&gt; +    void *cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +} pmix_dmdx_reply_caddy_t;
</span><br>
<span class="quotelev2">&gt;&gt; +static void dcd_con(pmix_dmdx_reply_caddy_t *p)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    p-&gt;status = PMIX_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt; +    p-&gt;ndata = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    p-&gt;lcd = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    p-&gt;relcbfunc = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    p-&gt;cbdata = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
</span><br>
<span class="quotelev2">&gt;&gt; +                   pmix_object_t, dcd_con, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static void dmdx_cbfunc(pmix_status_t status, const char *data,
</span><br>
<span class="quotelev2">&gt;&gt; +                        size_t ndata, void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; +                        pmix_release_cbfunc_t relfn, void *relcbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +static pmix_status_t _satisfy_request(pmix_hash_table_t *ht, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; +                                      pmix_modex_cbfunc_t cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +static pmix_status_t create_local_tracker(char nspace[], int rank,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          pmix_info_t info[], size_t 
</span><br>
<span class="quotelev2">&gt;&gt; ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          pmix_dmdx_local_t **lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* declare a function whose sole purpose is to
</span><br>
<span class="quotelev2">&gt;&gt; + * free data that we provided to our host server
</span><br>
<span class="quotelev2">&gt;&gt; + * when servicing dmodex requests */
</span><br>
<span class="quotelev2">&gt;&gt; +static void relfn(void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    char *data = (char*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    free(data);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +pmix_status_t pmix_server_get(pmix_buffer_t *buf,
</span><br>
<span class="quotelev2">&gt;&gt; +                              pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; +                              void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    int32_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    int rank;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *cptr;
</span><br>
<span class="quotelev2">&gt;&gt; +    char nspace[PMIX_MAX_NSLEN+1];
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_info_t *info=NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t ninfo=0;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_local_t *lcd, *cd;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_hash_table_t *ht;
</span><br>
<span class="quotelev2">&gt;&gt; +    bool local;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;recvd GET&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* setup */
</span><br>
<span class="quotelev2">&gt;&gt; +    memset(nspace, 0, sizeof(nspace));
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* retrieve the nspace and rank of the requested proc */
</span><br>
<span class="quotelev2">&gt;&gt; +    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;cptr, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; +    free(cptr);
</span><br>
<span class="quotelev2">&gt;&gt; +    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;rank, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    /* retrieve any provided info structs */
</span><br>
<span class="quotelev2">&gt;&gt; +    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;ninfo, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_SIZE))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (0 &lt; ninfo) {
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_INFO_CREATE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; +        cnt = ninfo;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, info, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_INFO))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; +            return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* find the nspace object for this client */
</span><br>
<span class="quotelev2">&gt;&gt; +    nptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 == strcmp(nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            nptr = ns;
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        pmix_globals.myid.nspace,
</span><br>
<span class="quotelev2">&gt;&gt; +                        pmix_globals.myid.rank, nspace, rank);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == nptr || NULL == nptr-&gt;server) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* this is for an nspace we don't know about yet, so
</span><br>
<span class="quotelev2">&gt;&gt; +         * record the request for data from this process and
</span><br>
<span class="quotelev2">&gt;&gt; +         * give the host server a chance to tell us about it */
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; +                                  cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* We have to wait for all local clients to be registered before
</span><br>
<span class="quotelev2">&gt;&gt; +     * we can know whether this request is for data from a local or a
</span><br>
<span class="quotelev2">&gt;&gt; +     * remote client because one client might ask for data about another
</span><br>
<span class="quotelev2">&gt;&gt; +     * client that the host RM hasn't told us about yet. Fortunately,
</span><br>
<span class="quotelev2">&gt;&gt; +     * we do know how many clients to expect, so first check to see if
</span><br>
<span class="quotelev2">&gt;&gt; +     * all clients have been registered with us */
</span><br>
<span class="quotelev2">&gt;&gt; +     if (!nptr-&gt;server-&gt;all_registered) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* we cannot do anything further, so just track this request
</span><br>
<span class="quotelev2">&gt;&gt; +         * for now */
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; +                                  cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Since we know about all the local clients in this nspace,
</span><br>
<span class="quotelev2">&gt;&gt; +     * let's first try to satisfy the request with any available data.
</span><br>
<span class="quotelev2">&gt;&gt; +     * By default, we assume we are looking for data from a remote
</span><br>
<span class="quotelev2">&gt;&gt; +     * client, and then check to see if this is one of my local
</span><br>
<span class="quotelev2">&gt;&gt; +     * clients - if so, then we look in that hash table */
</span><br>
<span class="quotelev2">&gt;&gt; +    ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev2">&gt;&gt; +    local = false;
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev2">&gt;&gt; +            /* it is known local client - check the local table */
</span><br>
<span class="quotelev2">&gt;&gt; +            ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev2">&gt;&gt; +            local = true;
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* see if we already have this data */
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = _satisfy_request(ht, rank, cbfunc, cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +    if( PMIX_SUCCESS == rc ){
</span><br>
<span class="quotelev2">&gt;&gt; +        /* request was successfully satisfied */
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* If we get here, then we don't have the data at this time. Check
</span><br>
<span class="quotelev2">&gt;&gt; +     * to see if we already have a pending request for the data - if
</span><br>
<span class="quotelev2">&gt;&gt; +     * we do, then we can just wait for it to arrive */
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = create_local_tracker(nspace, rank, info, ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; +                              cbfunc, cbdata, &amp;lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS == rc) {
</span><br>
<span class="quotelev2">&gt;&gt; +       /* we are already waiting for the data - nothing more
</span><br>
<span class="quotelev2">&gt;&gt; +        * for us to do as the function added the new request
</span><br>
<span class="quotelev2">&gt;&gt; +        * to the tracker for us */
</span><br>
<span class="quotelev2">&gt;&gt; +       return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_ERR_NOT_FOUND != rc || NULL == lcd) {
</span><br>
<span class="quotelev2">&gt;&gt; +       /* we have a problem - e.g., out of memory */
</span><br>
<span class="quotelev2">&gt;&gt; +       return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Getting here means that we didn't already have a request for
</span><br>
<span class="quotelev2">&gt;&gt; +     * for data pending, and so we created a new tracker for this
</span><br>
<span class="quotelev2">&gt;&gt; +     * request. We know the identity of all our local clients, so
</span><br>
<span class="quotelev2">&gt;&gt; +     * if this is one, then we have nothing further to do - we will
</span><br>
<span class="quotelev2">&gt;&gt; +     * fulfill the request once the process commits its data */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (local) {
</span><br>
<span class="quotelev2">&gt;&gt; +        return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* this isn't a local client of ours, so we need to ask the host
</span><br>
<span class="quotelev2">&gt;&gt; +     * resource manager server to please get the info for us from
</span><br>
<span class="quotelev2">&gt;&gt; +     * whomever is hosting the target process */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != pmix_host_server.direct_modex) {
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = pmix_host_server.direct_modex(&amp;lcd-&gt;proc, info, ninfo, 
</span><br>
<span class="quotelev2">&gt;&gt; dmdx_cbfunc, lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* if we don't have direct modex feature, just respond with 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;not found&quot; */
</span><br>
<span class="quotelev2">&gt;&gt; +        cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static pmix_status_t create_local_tracker(char nspace[], int rank,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          pmix_info_t info[], size_t 
</span><br>
<span class="quotelev2">&gt;&gt; ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; +                                          pmix_dmdx_local_t **ld)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_local_t *lcd, *cd;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* define default */
</span><br>
<span class="quotelev2">&gt;&gt; +    *ld = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* see if we already have an existing request for data
</span><br>
<span class="quotelev2">&gt;&gt; +     * from this namespace/rank */
</span><br>
<span class="quotelev2">&gt;&gt; +    lcd = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 != strncmp(nspace, cd-&gt;proc.nspace, PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev2">&gt;&gt; +                rank != cd-&gt;proc.rank ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        lcd = cd;
</span><br>
<span class="quotelev2">&gt;&gt; +        break;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != lcd) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* we already have a request, so just track that someone
</span><br>
<span class="quotelev2">&gt;&gt; +         * else wants data from the same target */
</span><br>
<span class="quotelev2">&gt;&gt; +        rc = PMIX_SUCCESS; // indicates we found an existing request
</span><br>
<span class="quotelev2">&gt;&gt; +        goto complete;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    /* we do not have an existing request, so let's create
</span><br>
<span class="quotelev2">&gt;&gt; +     * one and add it to our list */
</span><br>
<span class="quotelev2">&gt;&gt; +    lcd = PMIX_NEW(pmix_dmdx_local_t);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == lcd){
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; +        return PMIX_ERR_NOMEM;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    strncpy(lcd-&gt;proc.nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; +    lcd-&gt;proc.rank = rank;
</span><br>
<span class="quotelev2">&gt;&gt; +    lcd-&gt;info = info;
</span><br>
<span class="quotelev2">&gt;&gt; +    lcd-&gt;ninfo = ninfo;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_list_append(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = PMIX_ERR_NOT_FOUND;  // indicates that we created a new 
</span><br>
<span class="quotelev2">&gt;&gt; request tracker
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  complete:
</span><br>
<span class="quotelev2">&gt;&gt; +    /* track this specific requestor so we return the
</span><br>
<span class="quotelev2">&gt;&gt; +     * data to them */
</span><br>
<span class="quotelev2">&gt;&gt; +    req = PMIX_NEW(pmix_dmdx_request_t);
</span><br>
<span class="quotelev2">&gt;&gt; +    req-&gt;cbfunc = cbfunc;
</span><br>
<span class="quotelev2">&gt;&gt; +    req-&gt;cbdata = cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +    *ld = lcd;
</span><br>
<span class="quotelev2">&gt;&gt; +    return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +void pmix_pending_nspace_requests(pmix_nspace_t *nptr)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_local_t *cd, *cd_next;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* Now that we know all local ranks, go along request list and 
</span><br>
<span class="quotelev2">&gt;&gt; ask for remote data
</span><br>
<span class="quotelev2">&gt;&gt; +     * for the non-local ranks, and resolve all pending requests for 
</span><br>
<span class="quotelev2">&gt;&gt; local procs
</span><br>
<span class="quotelev2">&gt;&gt; +     * that were waiting for registration to complete
</span><br>
<span class="quotelev2">&gt;&gt; +     */
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_LIST_FOREACH_SAFE(cd, cd_next, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        pmix_rank_info_t *info;
</span><br>
<span class="quotelev2">&gt;&gt; +        bool found = false;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_MAX_NSLEN) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (info-&gt;rank == cd-&gt;proc.rank) {
</span><br>
<span class="quotelev2">&gt;&gt; +                found = true;  // we will satisy this request upon 
</span><br>
<span class="quotelev2">&gt;&gt; commit from new proc
</span><br>
<span class="quotelev2">&gt;&gt; +                break;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        /* if not found - this is remote process and we need to send
</span><br>
<span class="quotelev2">&gt;&gt; +         * corresponding direct modex request */
</span><br>
<span class="quotelev2">&gt;&gt; +        if( !found ){
</span><br>
<span class="quotelev2">&gt;&gt; +            if( NULL != pmix_host_server.direct_modex ){
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info, cd-&gt;ninfo, 
</span><br>
<span class="quotelev2">&gt;&gt; dmdx_cbfunc, cd);
</span><br>
<span class="quotelev2">&gt;&gt; +            } else {
</span><br>
<span class="quotelev2">&gt;&gt; +                pmix_dmdx_request_t *req, *req_next;
</span><br>
<span class="quotelev2">&gt;&gt; +                PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +                    PMIX_RELEASE(req);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, &amp;cd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +                PMIX_RELEASE(cd);
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static pmix_status_t _satisfy_request(pmix_hash_table_t *ht, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; +                                      pmix_modex_cbfunc_t cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_value_t *val;
</span><br>
<span class="quotelev2">&gt;&gt; +    char *data;
</span><br>
<span class="quotelev2">&gt;&gt; +    size_t sz;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_buffer_t xfer, pbkt, *xptr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* check to see if this data already has been
</span><br>
<span class="quotelev2">&gt;&gt; +     * obtained as a result of a prior direct modex request from
</span><br>
<span class="quotelev2">&gt;&gt; +     * a remote peer, or due to data from a local client
</span><br>
<span class="quotelev2">&gt;&gt; +     * having been committed */
</span><br>
<span class="quotelev2">&gt;&gt; +    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* the client is expecting this to arrive as a byte object
</span><br>
<span class="quotelev2">&gt;&gt; +         * containing a buffer, so package it accordingly */
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; +        xptr = &amp;xfer;
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes, val-&gt;data.bo.size);
</span><br>
<span class="quotelev2">&gt;&gt; +        pmix_bfrop.pack(&amp;pbkt, &amp;xptr, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev2">&gt;&gt; +        xfer.base_ptr = NULL; // protect the passed data
</span><br>
<span class="quotelev2">&gt;&gt; +        xfer.bytes_used = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_DESTRUCT(&amp;pbkt);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev2">&gt;&gt; +        /* pass it back */
</span><br>
<span class="quotelev2">&gt;&gt; +        cbfunc(rc, data, sz, cbdata, relfn, data);
</span><br>
<span class="quotelev2">&gt;&gt; +        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    return PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* Resolve pending requests to this namespace/rank */
</span><br>
<span class="quotelev2">&gt;&gt; +pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; +                                   pmix_status_t status, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t *lcd)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_local_t *cd;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* find corresponding request (if exists) */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == lcd &amp;&amp; NULL != nptr) {
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +            if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev2">&gt;&gt; +                    rank != cd-&gt;proc.rank) {
</span><br>
<span class="quotelev2">&gt;&gt; +                continue;
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            lcd = cd;
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* If somebody was interested in this rank */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != lcd) {
</span><br>
<span class="quotelev2">&gt;&gt; +        pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        if (PMIX_SUCCESS != status){
</span><br>
<span class="quotelev2">&gt;&gt; +            /* if we've got an error for this request - just forward 
</span><br>
<span class="quotelev2">&gt;&gt; it*/
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +                /* if we can't satisfy this request - respond with 
</span><br>
<span class="quotelev2">&gt;&gt; error */
</span><br>
<span class="quotelev2">&gt;&gt; +                req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        } else if (NULL != nptr) {
</span><br>
<span class="quotelev2">&gt;&gt; +            /* if we've got the blob - try to satisfy requests */
</span><br>
<span class="quotelev2">&gt;&gt; +            pmix_hash_table_t *ht;
</span><br>
<span class="quotelev2">&gt;&gt; +            pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            /* by default we are looking for the remote data */
</span><br>
<span class="quotelev2">&gt;&gt; +            ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev2">&gt;&gt; +            /* check if this rank is local */
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +            /* run through all the requests to this rank */
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +                pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; +                rc = _satisfy_request(ht, rank, req-&gt;cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; req-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +                if( PMIX_SUCCESS != rc ){
</span><br>
<span class="quotelev2">&gt;&gt; +                    /* if we can't satisfy this particular request 
</span><br>
<span class="quotelev2">&gt;&gt; (missing key?) */
</span><br>
<span class="quotelev2">&gt;&gt; +                    req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        /* remove all requests to this rank and cleanup the 
</span><br>
<span class="quotelev2">&gt;&gt; corresponding structure */
</span><br>
<span class="quotelev2">&gt;&gt; + pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; (pmix_list_item_t*)lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* process the returned data from the host RM server */
</span><br>
<span class="quotelev2">&gt;&gt; +static void _process_dmdx_reply(int fd, short args, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_reply_caddy_t *caddy = (pmix_dmdx_reply_caddy_t *)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_kval_t *kp;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_buffer_t xfer, pbkt, *xptr;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                    &quot;[%s:%d] process dmdx reply from %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                    __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; +                    caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* find the nspace object for this client */
</span><br>
<span class="quotelev2">&gt;&gt; +    nptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev2">&gt;&gt; +            nptr = ns;
</span><br>
<span class="quotelev2">&gt;&gt; +            break;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == nptr) {
</span><br>
<span class="quotelev2">&gt;&gt; +        /* should be impossible */
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt; +        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt; +        goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* if the request was successfully satisfied, then store the data
</span><br>
<span class="quotelev2">&gt;&gt; +     * in our hash table for remote procs. Although we could immediately
</span><br>
<span class="quotelev2">&gt;&gt; +     * resolve any outstanding requests on our tracking list, we instead
</span><br>
<span class="quotelev2">&gt;&gt; +     * store the data first so we can immediately satisfy any future
</span><br>
<span class="quotelev2">&gt;&gt; +     * requests. Then, rather than duplicate the resolve code here, we
</span><br>
<span class="quotelev2">&gt;&gt; +     * will let the pmix_pending_resolve function go ahead and retrieve
</span><br>
<span class="quotelev2">&gt;&gt; +     * it from the hash table */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (PMIX_SUCCESS == caddy-&gt;status) {
</span><br>
<span class="quotelev2">&gt;&gt; +        kp = PMIX_NEW(pmix_kval_t);
</span><br>
<span class="quotelev2">&gt;&gt; +        kp-&gt;key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_VALUE_CREATE(kp-&gt;value, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
</span><br>
<span class="quotelev2">&gt;&gt; +        /* we don't know if the host is going to save this data
</span><br>
<span class="quotelev2">&gt;&gt; +         * or not, so we have to copy it - the client is expecting
</span><br>
<span class="quotelev2">&gt;&gt; +         * this to arrive as a byte object containing a buffer, so
</span><br>
<span class="quotelev2">&gt;&gt; +         * package it accordingly */
</span><br>
<span class="quotelev2">&gt;&gt; +        kp-&gt;value-&gt;data.bo.bytes = malloc(caddy-&gt;ndata);
</span><br>
<span class="quotelev2">&gt;&gt; +        memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
</span><br>
<span class="quotelev2">&gt;&gt; +        kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
</span><br>
<span class="quotelev2">&gt;&gt; +        /* store it in the appropriate hash */
</span><br>
<span class="quotelev2">&gt;&gt; +        if (PMIX_SUCCESS != (rc = 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_hash_store(&amp;nptr-&gt;server-&gt;remote, caddy-&gt;lcd-&gt;proc.rank, kp))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        PMIX_RELEASE(kp);  // maintain acctg
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* always execute the callback to avoid having the client hang */
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank, caddy-&gt;status, 
</span><br>
<span class="quotelev2">&gt;&gt; caddy-&gt;lcd);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +cleanup:
</span><br>
<span class="quotelev2">&gt;&gt; +    /* now call the release function so the host server
</span><br>
<span class="quotelev2">&gt;&gt; +     * knows it can release the data */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != caddy-&gt;relcbfunc) {
</span><br>
<span class="quotelev2">&gt;&gt; +        caddy-&gt;relcbfunc(caddy-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    PMIX_RELEASE(caddy);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +/* this is the callback function that the host RM server will call
</span><br>
<span class="quotelev2">&gt;&gt; + * when it gets requested info back from a remote server */
</span><br>
<span class="quotelev2">&gt;&gt; +static void dmdx_cbfunc(pmix_status_t status,
</span><br>
<span class="quotelev2">&gt;&gt; +                        const char *data, size_t ndata, void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; +                        pmix_release_cbfunc_t release_fn, void 
</span><br>
<span class="quotelev2">&gt;&gt; *release_cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_dmdx_reply_caddy_t *caddy;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* because the host RM is calling us from their own thread, we
</span><br>
<span class="quotelev2">&gt;&gt; +     * need to thread-shift into our local progress thread before
</span><br>
<span class="quotelev2">&gt;&gt; +     * accessing any global info */
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;status = status;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* point to the callers cbfunc */
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;relcbfunc = release_fn;
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;cbdata = release_cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    /* point to the returned data and our own internal
</span><br>
<span class="quotelev2">&gt;&gt; +     * tracker */
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;data   = data;
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;ndata  = ndata;
</span><br>
<span class="quotelev2">&gt;&gt; +    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; +                        &quot;[%s:%d] queue dmdx reply for %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +                        __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; +                        caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev2">&gt;&gt; +    event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
</span><br>
<span class="quotelev2">&gt;&gt; +                 _process_dmdx_reply, caddy);
</span><br>
<span class="quotelev2">&gt;&gt; +    event_priority_set(&amp;caddy-&gt;ev, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +    event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev2">&gt;&gt; index 4a4abd1..43d35b5 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -58,246 +58,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  pmix_server_module_t pmix_host_server = {0};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -static void dmdx_cbfunc(pmix_status_t status, const char *data,
</span><br>
<span class="quotelev2">&gt;&gt; -                        size_t ndata, void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; -                        pmix_release_cbfunc_t relfn, void *relcbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_object_t super;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_event_t ev;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_status_t status;
</span><br>
<span class="quotelev2">&gt;&gt; -    const char *data;
</span><br>
<span class="quotelev2">&gt;&gt; -    size_t ndata;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_local_t *lcd;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_release_cbfunc_t relcbfunc;
</span><br>
<span class="quotelev2">&gt;&gt; -    void *cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -} pmix_dmdx_reply_caddy_t;
</span><br>
<span class="quotelev2">&gt;&gt; -PMIX_CLASS_INSTANCE(pmix_dmdx_reply_caddy_t,
</span><br>
<span class="quotelev2">&gt;&gt; -                   pmix_object_t, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -static void relfn(void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    char *data = (char*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -    free(data);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -static pmix_status_t _satisfy_request(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; -                                         pmix_hash_table_t *ht,
</span><br>
<span class="quotelev2">&gt;&gt; -  pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_buffer_t pbkt, xfer;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_value_t *val;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *data;
</span><br>
<span class="quotelev2">&gt;&gt; -    size_t sz;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* check to see if this data already has been
</span><br>
<span class="quotelev2">&gt;&gt; -     * obtained as a result of a prior direct modex request from
</span><br>
<span class="quotelev2">&gt;&gt; -     * another local peer */
</span><br>
<span class="quotelev2">&gt;&gt; -    rc = pmix_hash_fetch(ht, rank, &quot;modex&quot;, &amp;val);
</span><br>
<span class="quotelev2">&gt;&gt; -    if (PMIX_SUCCESS == rc &amp;&amp; NULL != val) {
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_CONSTRUCT(&amp;pbkt, pmix_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_buffer_t *pxfer = &amp;xfer;
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes, val-&gt;data.bo.size);
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev2">&gt;&gt; -        xfer.base_ptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -        xfer.bytes_used = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_DESTRUCT(&amp;pbkt);
</span><br>
<span class="quotelev2">&gt;&gt; -        /* pass it back */
</span><br>
<span class="quotelev2">&gt;&gt; -        cbfunc(rc, data, sz, cbdata, relfn, data);
</span><br>
<span class="quotelev2">&gt;&gt; -        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    return PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -pmix_status_t pmix_pending_request(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   pmix_info_t *info, size_t ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   pmix_modex_cbfunc_t cbfunc, void 
</span><br>
<span class="quotelev2">&gt;&gt; *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_local_t *lcd = NULL, *cd;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_hash_table_t *ht;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* 1. Try to satisfy the request right now */
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* by default we are looking for the remote data */
</span><br>
<span class="quotelev2">&gt;&gt; -    ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev2">&gt;&gt; -            /* in case it is known local rank - check local table */
</span><br>
<span class="quotelev2">&gt;&gt; -            ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev2">&gt;&gt; -            break;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    rc = _satisfy_request(nptr, rank, ht, cbfunc, cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -    if( PMIX_SUCCESS == rc ){
</span><br>
<span class="quotelev2">&gt;&gt; -        /* request was successfully satisfied */
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; -        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* 2. We were unable to satisfy request right now.
</span><br>
<span class="quotelev2">&gt;&gt; -     * Look for existing requests to this namespace/rank */
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev2">&gt;&gt; -                rank != cd-&gt;proc.rank ) {
</span><br>
<span class="quotelev2">&gt;&gt; -            continue;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        lcd = cd;
</span><br>
<span class="quotelev2">&gt;&gt; -        break;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* 3. If no requests exists then:
</span><br>
<span class="quotelev2">&gt;&gt; -     * - if all local clients are registered then we were called because
</span><br>
<span class="quotelev2">&gt;&gt; -     * the remote data was requested. Create request and call direct 
</span><br>
<span class="quotelev2">&gt;&gt; modex
</span><br>
<span class="quotelev2">&gt;&gt; -     * to retrieve the data
</span><br>
<span class="quotelev2">&gt;&gt; -     * - if not all local ranks were registered, we need to wait untill
</span><br>
<span class="quotelev2">&gt;&gt; -     * pmix_pending_localy_fin would be called to resolve this. Just 
</span><br>
<span class="quotelev2">&gt;&gt; add the
</span><br>
<span class="quotelev2">&gt;&gt; -     * request for now.
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == lcd) {
</span><br>
<span class="quotelev2">&gt;&gt; -        lcd = PMIX_NEW(pmix_dmdx_local_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        if (NULL == lcd){
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; -            return PMIX_ERR_NOMEM;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        strncpy(lcd-&gt;proc.nspace, nptr-&gt;nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; -        lcd-&gt;proc.rank = rank;
</span><br>
<span class="quotelev2">&gt;&gt; -        lcd-&gt;info = info;
</span><br>
<span class="quotelev2">&gt;&gt; -        lcd-&gt;ninfo = ninfo;
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_list_append(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        /* check &amp; send request if need/possible */
</span><br>
<span class="quotelev2">&gt;&gt; -        if (nptr-&gt;server-&gt;all_registered &amp;&amp; NULL == info) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL != pmix_host_server.direct_modex) {
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_host_server.direct_modex(&amp;lcd-&gt;proc, info, ninfo, dmdx_cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; lcd);
</span><br>
<span class="quotelev2">&gt;&gt; -            } else {
</span><br>
<span class="quotelev2">&gt;&gt; -                /* if we don't have direct modex feature, just 
</span><br>
<span class="quotelev2">&gt;&gt; respond with &quot;not found&quot; */
</span><br>
<span class="quotelev2">&gt;&gt; -                cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, &amp;lcd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_LIST_DESTRUCT(&amp;lcd-&gt;loc_reqs);
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev2">&gt;&gt; -                return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_request_t *req = PMIX_NEW(pmix_dmdx_request_t);
</span><br>
<span class="quotelev2">&gt;&gt; -    req-&gt;cbfunc = cbfunc;
</span><br>
<span class="quotelev2">&gt;&gt; -    req-&gt;cbdata = cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_list_append(&amp;lcd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -    return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -void pmix_pending_nspace_fix(pmix_nspace_t *nptr)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_local_t *cd, *cd_next;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* Now when we know all local ranks, go along request list and 
</span><br>
<span class="quotelev2">&gt;&gt; ask for remote data
</span><br>
<span class="quotelev2">&gt;&gt; -     * for the non-local ranks, and resolve all pending requests for 
</span><br>
<span class="quotelev2">&gt;&gt; local procs
</span><br>
<span class="quotelev2">&gt;&gt; -     * that were waiting for registration to complete
</span><br>
<span class="quotelev2">&gt;&gt; -     */
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_LIST_FOREACH_SAFE(cd, cd_next, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;pmix_server_globals.local_reqs, pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_rank_info_t *info;
</span><br>
<span class="quotelev2">&gt;&gt; -        bool found = false;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_MAX_NSLEN) ) {
</span><br>
<span class="quotelev2">&gt;&gt; -            continue;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_LIST_FOREACH(info, &amp;nptr-&gt;server-&gt;ranks, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (info-&gt;rank == cd-&gt;proc.rank) {
</span><br>
<span class="quotelev2">&gt;&gt; -                found = true;
</span><br>
<span class="quotelev2">&gt;&gt; -                break;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        /* if not found - this is remote process and we need to send
</span><br>
<span class="quotelev2">&gt;&gt; -         * corresponding direct modex request */
</span><br>
<span class="quotelev2">&gt;&gt; -        if( !found ){
</span><br>
<span class="quotelev2">&gt;&gt; -            if( NULL != pmix_host_server.direct_modex ){
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_host_server.direct_modex(&amp;cd-&gt;proc, cd-&gt;info, cd-&gt;ninfo, 
</span><br>
<span class="quotelev2">&gt;&gt; dmdx_cbfunc, cd);
</span><br>
<span class="quotelev2">&gt;&gt; -            } else {
</span><br>
<span class="quotelev2">&gt;&gt; -                pmix_dmdx_request_t *req, *req_next;
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_LIST_FOREACH_SAFE(req, req_next, &amp;cd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    req-&gt;cbfunc(PMIX_ERR_NOT_FOUND, NULL, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_list_remove_item(&amp;cd-&gt;loc_reqs, &amp;req-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -                    PMIX_RELEASE(req);
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, &amp;cd-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_RELEASE(cd);
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -/* Resolve pending requests to this namespace/rank */
</span><br>
<span class="quotelev2">&gt;&gt; -pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   pmix_status_t status, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t *lcd)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_local_t *cd;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* find corresponding request (if exists) */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( NULL == lcd ){
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_LIST_FOREACH(cd, &amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (0 != strncmp(nptr-&gt;nspace, cd-&gt;proc.nspace, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_MAX_NSLEN) ||
</span><br>
<span class="quotelev2">&gt;&gt; -                    rank != cd-&gt;proc.rank) {
</span><br>
<span class="quotelev2">&gt;&gt; -                continue;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -            lcd = cd;
</span><br>
<span class="quotelev2">&gt;&gt; -            break;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* If somebody was interested in this rank */
</span><br>
<span class="quotelev2">&gt;&gt; -    if( NULL != lcd ){
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_dmdx_request_t *req;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -        if (PMIX_SUCCESS != status){
</span><br>
<span class="quotelev2">&gt;&gt; -            /* if we've got an error for this request - just forward 
</span><br>
<span class="quotelev2">&gt;&gt; it*/
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -                /* if we can't satisfy this request - respond with 
</span><br>
<span class="quotelev2">&gt;&gt; error */
</span><br>
<span class="quotelev2">&gt;&gt; -                req-&gt;cbfunc(status, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        } else {
</span><br>
<span class="quotelev2">&gt;&gt; -            /* if we've got the blob - try to satisfy requests */
</span><br>
<span class="quotelev2">&gt;&gt; -            pmix_hash_table_t *ht;
</span><br>
<span class="quotelev2">&gt;&gt; -            pmix_rank_info_t *iptr;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            /* by default we are looking for the remote data */
</span><br>
<span class="quotelev2">&gt;&gt; -            ht = &amp;nptr-&gt;server-&gt;remote;
</span><br>
<span class="quotelev2">&gt;&gt; -            /* check if this rank is local */
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_LIST_FOREACH(iptr, &amp;nptr-&gt;server-&gt;ranks, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_rank_info_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -                if (iptr-&gt;rank == rank) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    ht = &amp;nptr-&gt;server-&gt;mylocal;
</span><br>
<span class="quotelev2">&gt;&gt; -                    break;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -            /* run through all the requests to this rank */
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_LIST_FOREACH(req, &amp;lcd-&gt;loc_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_request_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -                pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; -                rc = _satisfy_request(nptr, rank, ht, req-&gt;cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; req-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -                if( PMIX_SUCCESS != rc ){
</span><br>
<span class="quotelev2">&gt;&gt; -                    /* if we can't satisfy this particular request 
</span><br>
<span class="quotelev2">&gt;&gt; (missing key?) */
</span><br>
<span class="quotelev2">&gt;&gt; -                    req-&gt;cbfunc(rc, NULL, 0, req-&gt;cbdata, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        /* remove all requests to this rank and cleanup the 
</span><br>
<span class="quotelev2">&gt;&gt; corresponding structure */
</span><br>
<span class="quotelev2">&gt;&gt; - pmix_list_remove_item(&amp;pmix_server_globals.local_reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; (pmix_list_item_t*)lcd);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_RELEASE(lcd);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    return PMIX_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  pmix_status_t pmix_server_abort(pmix_peer_t *peer, pmix_buffer_t *buf,
</span><br>
<span class="quotelev2">&gt;&gt;                                  pmix_op_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -436,13 +196,7 @@ pmix_status_t pmix_server_commit(pmix_peer_t 
</span><br>
<span class="quotelev2">&gt;&gt; *peer, pmix_buffer_t *buf)
</span><br>
<span class="quotelev2">&gt;&gt;               * may not be a contribution */
</span><br>
<span class="quotelev2">&gt;&gt;              if (PMIX_SUCCESS == 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_hash_fetch(&amp;nptr-&gt;server-&gt;myremote, info-&gt;rank, &quot;modex&quot;, &amp;val) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;                  NULL != val) {
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_CONSTRUCT(&amp;xfer, pmix_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_LOAD_BUFFER(&amp;xfer, val-&gt;data.bo.bytes, 
</span><br>
<span class="quotelev2">&gt;&gt; val-&gt;data.bo.size);
</span><br>
<span class="quotelev2">&gt;&gt; -                pmix_buffer_t *pxfer = &amp;xfer;
</span><br>
<span class="quotelev2">&gt;&gt; -                pmix_bfrop.pack(&amp;pbkt, &amp;pxfer, 1, PMIX_BUFFER);
</span><br>
<span class="quotelev2">&gt;&gt; -                xfer.base_ptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -                xfer.bytes_used = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIX_DESTRUCT(&amp;xfer);
</span><br>
<span class="quotelev2">&gt;&gt; +                PMIX_LOAD_BUFFER(&amp;pbkt, val-&gt;data.bo.bytes, 
</span><br>
<span class="quotelev2">&gt;&gt; val-&gt;data.bo.size);
</span><br>
<span class="quotelev2">&gt;&gt;                  PMIX_VALUE_RELEASE(val);
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;              PMIX_UNLOAD_BUFFER(&amp;pbkt, data, sz);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -457,7 +211,7 @@ pmix_status_t pmix_server_commit(pmix_peer_t 
</span><br>
<span class="quotelev2">&gt;&gt; *peer, pmix_buffer_t *buf)
</span><br>
<span class="quotelev2">&gt;&gt;              PMIX_RELEASE(dcd);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -    /* see if anyone local is waiting on this data- could be more 
</span><br>
<span class="quotelev2">&gt;&gt; than one */
</span><br>
<span class="quotelev2">&gt;&gt; +    /* see if anyone local is waiting on this data - could be more 
</span><br>
<span class="quotelev2">&gt;&gt; than one */
</span><br>
<span class="quotelev2">&gt;&gt;      return pmix_pending_resolve(nptr, info-&gt;rank, PMIX_SUCCESS, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -826,163 +580,6 @@ pmix_status_t 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_server_fence(pmix_server_caddy_t *cd,
</span><br>
<span class="quotelev2">&gt;&gt;      return rc;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -static void _process_dmdx_reply(int fd, short args, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_reply_caddy_t *caddy = (pmix_dmdx_reply_caddy_t *)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_kval_t *kp;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; -                    &quot;[%s:%d] queue dmdx reply from %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                    __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; -                    caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* find the nspace object for this client */
</span><br>
<span class="quotelev2">&gt;&gt; -    nptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 == strcmp(caddy-&gt;lcd-&gt;proc.nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            nptr = ns;
</span><br>
<span class="quotelev2">&gt;&gt; -            break;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == nptr) {
</span><br>
<span class="quotelev2">&gt;&gt; -        /* should be impossible */
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_ERROR_LOG(PMIX_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt; -        caddy-&gt;status = PMIX_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt; -        goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (PMIX_SUCCESS == caddy-&gt;status) {
</span><br>
<span class="quotelev2">&gt;&gt; -        kp = PMIX_NEW(pmix_kval_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        kp-&gt;key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_VALUE_CREATE(kp-&gt;value, 1);
</span><br>
<span class="quotelev2">&gt;&gt; -        kp-&gt;value-&gt;type = PMIX_BYTE_OBJECT;
</span><br>
<span class="quotelev2">&gt;&gt; -        /* we don't know if the host is going to save this data
</span><br>
<span class="quotelev2">&gt;&gt; -         * or not, so we have to copy it */
</span><br>
<span class="quotelev2">&gt;&gt; -        kp-&gt;value-&gt;data.bo.bytes = (char*)malloc(caddy-&gt;ndata);
</span><br>
<span class="quotelev2">&gt;&gt; -        memcpy(kp-&gt;value-&gt;data.bo.bytes, caddy-&gt;data, caddy-&gt;ndata);
</span><br>
<span class="quotelev2">&gt;&gt; -        kp-&gt;value-&gt;data.bo.size = caddy-&gt;ndata;
</span><br>
<span class="quotelev2">&gt;&gt; -        /* store it in the appropriate hash */
</span><br>
<span class="quotelev2">&gt;&gt; -        if (PMIX_SUCCESS != (rc = 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_hash_store(&amp;nptr-&gt;server-&gt;remote, caddy-&gt;lcd-&gt;proc.rank, kp))) {
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_RELEASE(kp);  // maintain acctg
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -cleanup:
</span><br>
<span class="quotelev2">&gt;&gt; -    /* always execute the callback to avoid having the client hang */
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_pending_resolve(nptr, caddy-&gt;lcd-&gt;proc.rank, caddy-&gt;status, 
</span><br>
<span class="quotelev2">&gt;&gt; caddy-&gt;lcd);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* now call the release function so the host server
</span><br>
<span class="quotelev2">&gt;&gt; -     * knows it can release the data */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL != caddy-&gt;relcbfunc) {
</span><br>
<span class="quotelev2">&gt;&gt; -        caddy-&gt;relcbfunc(caddy-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_RELEASE(caddy);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -static void dmdx_cbfunc(pmix_status_t status,
</span><br>
<span class="quotelev2">&gt;&gt; -                        const char *data, size_t ndata, void *cbdata,
</span><br>
<span class="quotelev2">&gt;&gt; -                        pmix_release_cbfunc_t release_fn, void 
</span><br>
<span class="quotelev2">&gt;&gt; *release_cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_dmdx_reply_caddy_t *caddy;
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy = PMIX_NEW(pmix_dmdx_reply_caddy_t);
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;status = status;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* point to the callers cbfunc */
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;relcbfunc = release_fn;
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;cbdata = release_cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;data   = data;
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;ndata  = ndata;
</span><br>
<span class="quotelev2">&gt;&gt; -    caddy-&gt;lcd    = (pmix_dmdx_local_t *)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_output_verbose(2, pmix_globals.debug_output, &quot;[%s:%d] queue 
</span><br>
<span class="quotelev2">&gt;&gt; dmdx reply %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                        __FILE__, __LINE__,
</span><br>
<span class="quotelev2">&gt;&gt; -                        caddy-&gt;lcd-&gt;proc.nspace, caddy-&gt;lcd-&gt;proc.rank);
</span><br>
<span class="quotelev2">&gt;&gt; -    event_assign(&amp;caddy-&gt;ev, pmix_globals.evbase, -1, EV_WRITE,
</span><br>
<span class="quotelev2">&gt;&gt; -                 _process_dmdx_reply, caddy);
</span><br>
<span class="quotelev2">&gt;&gt; -    event_priority_set(&amp;caddy-&gt;ev, 0);
</span><br>
<span class="quotelev2">&gt;&gt; -    event_active(&amp;caddy-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -pmix_status_t pmix_server_get(pmix_buffer_t *buf,
</span><br>
<span class="quotelev2">&gt;&gt; -                              pmix_modex_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; -                              void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; -{
</span><br>
<span class="quotelev2">&gt;&gt; -    int32_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    int rank;
</span><br>
<span class="quotelev2">&gt;&gt; -    char *cptr;
</span><br>
<span class="quotelev2">&gt;&gt; -    char nspace[PMIX_MAX_NSLEN+1];
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_nspace_t *ns, *nptr;
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_info_t *info=NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -    size_t ninfo=0;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;recvd GET&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* setup */
</span><br>
<span class="quotelev2">&gt;&gt; -    memset(nspace, 0, sizeof(nspace));
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* retrieve the nspace and rank of the requested proc */
</span><br>
<span class="quotelev2">&gt;&gt; -    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;cptr, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_STRING))) {
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    (void)strncpy(nspace, cptr, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; -    free(cptr);
</span><br>
<span class="quotelev2">&gt;&gt; -    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;rank, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_INT))) {
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    /* find the nspace object for this client */
</span><br>
<span class="quotelev2">&gt;&gt; -    nptr = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; -    PMIX_LIST_FOREACH(ns, &amp;pmix_globals.nspaces, pmix_nspace_t) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (0 == strcmp(nspace, ns-&gt;nspace)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            nptr = ns;
</span><br>
<span class="quotelev2">&gt;&gt; -            break;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_output_verbose(2, pmix_globals.debug_output,
</span><br>
<span class="quotelev2">&gt;&gt; -                        &quot;%s:%d EXECUTE GET FOR %s:%d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; -                        pmix_globals.myid.nspace,
</span><br>
<span class="quotelev2">&gt;&gt; -                        pmix_globals.myid.rank, nspace, rank);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    /* retrieve any provided info structs */
</span><br>
<span class="quotelev2">&gt;&gt; -    cnt = 1;
</span><br>
<span class="quotelev2">&gt;&gt; -    if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, &amp;ninfo, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_SIZE))) {
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    if (0 &lt; ninfo) {
</span><br>
<span class="quotelev2">&gt;&gt; -        PMIX_INFO_CREATE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; -        cnt = ninfo;
</span><br>
<span class="quotelev2">&gt;&gt; -        if (PMIX_SUCCESS != (rc = pmix_bfrop.unpack(buf, info, &amp;cnt, 
</span><br>
<span class="quotelev2">&gt;&gt; PMIX_INFO))) {
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -            PMIX_INFO_FREE(info, ninfo);
</span><br>
<span class="quotelev2">&gt;&gt; -            return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == nptr) {
</span><br>
<span class="quotelev2">&gt;&gt; -        /* this is for an nspace we don't know about yet, so
</span><br>
<span class="quotelev2">&gt;&gt; -         * give the host server a chance to tell us about it */
</span><br>
<span class="quotelev2">&gt;&gt; -        nptr = PMIX_NEW(pmix_nspace_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        (void)strncpy(nptr-&gt;nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; -        pmix_list_append(&amp;pmix_globals.nspaces, &amp;nptr-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -    /* if we don't have any ranks for this job, protect ourselves 
</span><br>
<span class="quotelev2">&gt;&gt; here */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (NULL == nptr-&gt;server) {
</span><br>
<span class="quotelev2">&gt;&gt; -        nptr-&gt;server = PMIX_NEW(pmix_server_nspace_t);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    return pmix_pending_request(nptr, rank, info, ninfo, cbfunc, 
</span><br>
<span class="quotelev2">&gt;&gt; cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;  pmix_status_t pmix_server_publish(pmix_peer_t *peer,
</span><br>
<span class="quotelev2">&gt;&gt;                                    pmix_buffer_t *buf,
</span><br>
<span class="quotelev2">&gt;&gt;                                    pmix_op_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev2">&gt;&gt; index c6279d5..9129b6b 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_ops.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -183,10 +183,7 @@ void pmix_stop_listening(void);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  bool pmix_server_trk_update(pmix_server_trkr_t *trk);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -pmix_status_t pmix_pending_request(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   pmix_info_t *info, size_t ninfo,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   pmix_modex_cbfunc_t cbfunc, void 
</span><br>
<span class="quotelev2">&gt;&gt; *cbdata);
</span><br>
<span class="quotelev2">&gt;&gt; -void pmix_pending_nspace_fix(pmix_nspace_t *nptr);
</span><br>
<span class="quotelev2">&gt;&gt; +void pmix_pending_nspace_requests(pmix_nspace_t *nptr);
</span><br>
<span class="quotelev2">&gt;&gt;  pmix_status_t pmix_pending_resolve(pmix_nspace_t *nptr, int rank,
</span><br>
<span class="quotelev2">&gt;&gt;                                     pmix_status_t status, 
</span><br>
<span class="quotelev2">&gt;&gt; pmix_dmdx_local_t *lcd);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev2">&gt;&gt; index 8cc4bcd..90c42ed 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -123,6 +123,8 @@ const char* PMIx_Error_string(pmix_status_t errnum)
</span><br>
<span class="quotelev2">&gt;&gt;      case PMIX_EXISTS:
</span><br>
<span class="quotelev2">&gt;&gt;          return &quot;EXISTS&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    case PMIX_ERR_SILENT:
</span><br>
<span class="quotelev2">&gt;&gt; +        return &quot;SILENT&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      case PMIX_ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;          return &quot;ERROR&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      case PMIX_SUCCESS:
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev2">&gt;&gt; index f72227a..e43ac47 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix/src/util/error.h
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,9 +28,13 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -#define PMIX_ERROR_LOG(r)      \
</span><br>
<span class="quotelev2">&gt;&gt; -    pmix_output(0, &quot;PMIX ERROR: %s in file %s at line %d&quot;,     \
</span><br>
<span class="quotelev2">&gt;&gt; -                PMIx_Error_string((r)), __FILE__, __LINE__);
</span><br>
<span class="quotelev2">&gt;&gt; +#define PMIX_ERROR_LOG(r)              \
</span><br>
<span class="quotelev2">&gt;&gt; +    do {             \
</span><br>
<span class="quotelev2">&gt;&gt; +        if (PMIX_ERR_SILENT != (r)) {              \
</span><br>
<span class="quotelev2">&gt;&gt; +            pmix_output(0, &quot;PMIX ERROR: %s in file %s at line %d&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt;     \
</span><br>
<span class="quotelev2">&gt;&gt; +                        PMIx_Error_string((r)), __FILE__, 
</span><br>
<span class="quotelev2">&gt;&gt; __LINE__);    \
</span><br>
<span class="quotelev2">&gt;&gt; +        }              \
</span><br>
<span class="quotelev2">&gt;&gt; +    }while(0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #define PMIX_REPORT_ERROR(e)                            \
</span><br>
<span class="quotelev2">&gt;&gt;      do {                                                \
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix1_client.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev2">&gt;&gt; index f1ba0d5..e9c50b7 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix1_client.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -217,6 +217,7 @@ int pmix1_store_local(const opal_process_name_t 
</span><br>
<span class="quotelev2">&gt;&gt; *proc, opal_value_t *val)
</span><br>
<span class="quotelev2">&gt;&gt;              }
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          if (NULL == job) {
</span><br>
<span class="quotelev2">&gt;&gt; +            OPAL_ERROR_LOG(OPAL_ERR_NOT_FOUND);
</span><br>
<span class="quotelev2">&gt;&gt;              return OPAL_ERR_NOT_FOUND;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          (void)strncpy(p.nspace, job-&gt;nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/mca/pmix/pmix1xx/pmix1_server_south.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev2">&gt;&gt; index ae42de0..f0d0f11 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/mca/pmix/pmix1xx/pmix1_server_south.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -156,10 +156,10 @@ static void opcbfunc(pmix_status_t status, void 
</span><br>
<span class="quotelev2">&gt;&gt; *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int pmix1_server_register_nspace(opal_jobid_t jobid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   int nlocalprocs,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   opal_list_t *info,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +                                 int nlocalprocs,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 opal_list_t *info,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      opal_value_t *kv, *k2;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_info_t *pinfo, *pmap;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -168,10 +168,17 @@ int pmix1_server_register_nspace(opal_jobid_t 
</span><br>
<span class="quotelev2">&gt;&gt; jobid,
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev2">&gt;&gt;      opal_list_t *pmapinfo;
</span><br>
<span class="quotelev2">&gt;&gt; +    opal_pmix1_jobid_trkr_t *job;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* convert the jobid */
</span><br>
<span class="quotelev2">&gt;&gt;      (void)snprintf(nspace, PMIX_MAX_NSLEN, 
</span><br>
<span class="quotelev2">&gt;&gt; opal_convert_jobid_to_string(jobid));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* store this job in our list of known nspaces */
</span><br>
<span class="quotelev2">&gt;&gt; +    job = OBJ_NEW(opal_pmix1_jobid_trkr_t);
</span><br>
<span class="quotelev2">&gt;&gt; +    (void)strncpy(job-&gt;nspace, nspace, PMIX_MAX_NSLEN);
</span><br>
<span class="quotelev2">&gt;&gt; +    job-&gt;jobid = jobid;
</span><br>
<span class="quotelev2">&gt;&gt; + opal_list_append(&amp;mca_pmix_pmix1xx_component.jobids, &amp;job-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      /* convert the list to an array of pmix_info_t */
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != info) {
</span><br>
<span class="quotelev2">&gt;&gt;          sz = opal_list_get_size(info);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -220,10 +227,10 @@ int pmix1_server_register_nspace(opal_jobid_t 
</span><br>
<span class="quotelev2">&gt;&gt; jobid,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int pmix1_server_register_client(const opal_process_name_t *proc,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   uid_t uid, gid_t gid,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   void *server_object,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; -                                   void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +                                 uid_t uid, gid_t gid,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 void *server_object,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 opal_pmix_op_cbfunc_t cbfunc,
</span><br>
<span class="quotelev2">&gt;&gt; +                                 void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -275,7 +282,7 @@ static void dmdx_response(pmix_status_t status, 
</span><br>
<span class="quotelev2">&gt;&gt; char *data, size_t sz, void *cbd
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int pmix1_server_dmodex(const opal_process_name_t *proc,
</span><br>
<span class="quotelev2">&gt;&gt; -                          opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt; +                        opal_pmix_modex_cbfunc_t cbfunc, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      pmix1_opcaddy_t *op;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_status_t rc;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/orted/pmix/pmix_server.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; index 953145d..ee5582c 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/orted/pmix/pmix_server.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -505,7 +505,6 @@ static void pmix_server_dmdx_resp(int status, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;      int rc, ret, room_num;
</span><br>
<span class="quotelev2">&gt;&gt;      int32_t cnt;
</span><br>
<span class="quotelev2">&gt;&gt;      opal_process_name_t target;
</span><br>
<span class="quotelev2">&gt;&gt; -    opal_value_t kv;
</span><br>
<span class="quotelev2">&gt;&gt;      pmix_server_req_t *req;
</span><br>
<span class="quotelev2">&gt;&gt;      uint8_t *data = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;      int32_t ndata = 0;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -542,29 +541,14 @@ static void pmix_server_dmdx_resp(int status, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_name_t* sender,
</span><br>
<span class="quotelev2">&gt;&gt;          return;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    /* if we got something, store the blobs locally so we can
</span><br>
<span class="quotelev2">&gt;&gt; -     * meet any further requests without doing a remote fetch.
</span><br>
<span class="quotelev2">&gt;&gt; -     * This must be done as a single blob for later retrieval */
</span><br>
<span class="quotelev2">&gt;&gt; -    if (ORTE_SUCCESS == ret &amp;&amp; NULL != data) {
</span><br>
<span class="quotelev2">&gt;&gt; -        OBJ_CONSTRUCT(&amp;kv, opal_value_t);
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.key = strdup(&quot;modex&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.type = OPAL_BYTE_OBJECT;
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.data.bo.bytes = data;
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.data.bo.size = ndata;
</span><br>
<span class="quotelev2">&gt;&gt; -        if (OPAL_SUCCESS != (rc = opal_pmix.store_local(&amp;target, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;kv))) {
</span><br>
<span class="quotelev2">&gt;&gt; -            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.data.bo.bytes = NULL;  // protect the data
</span><br>
<span class="quotelev2">&gt;&gt; -        kv.data.bo.size = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        OBJ_DESTRUCT(&amp;kv);
</span><br>
<span class="quotelev2">&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      /* check the request out of the tracking hotel */
</span><br>
<span class="quotelev2">&gt;&gt;  opal_hotel_checkout_and_return_occupant(&amp;orte_pmix_server_globals.reqs, 
</span><br>
<span class="quotelev2">&gt;&gt; room_num, (void**)&amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;      /* return the returned data to the requestor */
</span><br>
<span class="quotelev2">&gt;&gt;      if (NULL != req) {
</span><br>
<span class="quotelev2">&gt;&gt;          if (NULL != req-&gt;mdxcbfunc) {
</span><br>
<span class="quotelev2">&gt;&gt;              req-&gt;mdxcbfunc(ret, (char*)data, ndata, req-&gt;cbdata, 
</span><br>
<span class="quotelev2">&gt;&gt; relcbfunc, data);
</span><br>
<span class="quotelev2">&gt;&gt; +        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +            free(data);
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;          OBJ_RELEASE(req);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/orted/pmix/pmix_server_fence.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev2">&gt;&gt; index b3b0e33..765c1c2 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/orted/pmix/pmix_server_fence.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -197,6 +197,12 @@ static void dmodex_req(int sd, short args, void 
</span><br>
<span class="quotelev2">&gt;&gt; *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;          goto callback;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* if we are the host daemon, then this is a local request, so
</span><br>
<span class="quotelev2">&gt;&gt; +     * just wait for the data to come in */
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ORTE_PROC_MY_NAME-&gt;vpid == dmn-&gt;name.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; +        return;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      /* construct a request message */
</span><br>
<span class="quotelev2">&gt;&gt;      buf = OBJ_NEW(opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;      if (OPAL_SUCCESS != (rc = opal_dss.pack(buf, &amp;req-&gt;target, 1, 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_NAME))) {
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
<span class="quotelev2">&gt;&gt;  ompi/runtime/ompi_mpi_init.c                       |   7 +-
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/base/pmix_base_frame.c               |  11 +-
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix.h                               |  13 +-
</span><br>
<span class="quotelev2">&gt;&gt;  .../pmix1xx/pmix/include/pmix/pmix_common.h.in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://pmix_common.h.in">http://pmix_common.h.in</a>&gt;     |   3 +-
</span><br>
<span class="quotelev2">&gt;&gt;  .../pmix/pmix1xx/pmix/src/client/pmix_client_get.c |   1 +
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix1xx/pmix/src/server/Makefile.am  |   3 +-
</span><br>
<span class="quotelev2">&gt;&gt;  .../mca/pmix/pmix1xx/pmix/src/server/pmix_server.c |  11 +-
</span><br>
<span class="quotelev2">&gt;&gt;  .../pmix/pmix1xx/pmix/src/server/pmix_server_get.c | 552 
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  .../pmix/pmix1xx/pmix/src/server/pmix_server_ops.c | 407 +--------------
</span><br>
<span class="quotelev2">&gt;&gt;  .../pmix/pmix1xx/pmix/src/server/pmix_server_ops.h |   5 +-
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix1xx/pmix/src/util/error.c        |   2 +
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix1xx/pmix/src/util/error.h        |  10 +-
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix1xx/pmix1_client.c               |   1 +
</span><br>
<span class="quotelev2">&gt;&gt;  opal/mca/pmix/pmix1xx/pmix1_server_south.c         |  25 +-
</span><br>
<span class="quotelev2">&gt;&gt;  orte/orted/pmix/pmix_server.c                      |  20 +-
</span><br>
<span class="quotelev2">&gt;&gt;  orte/orted/pmix/pmix_server_fence.c                |   6 +
</span><br>
<span class="quotelev2">&gt;&gt;  16 files changed, 620 insertions(+), 457 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;  create mode 100644 
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_get.c
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
<span class="quotelev2">&gt;&gt; ompi-commits_at_[hidden] &lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18297.php">http://www.open-mpi.org/community/lists/devel/2015/10/18297.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18299/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18298.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Reply:</strong> <a href="18300.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
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
