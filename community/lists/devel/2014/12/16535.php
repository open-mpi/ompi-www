<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 01:49:00 2014" -->
<!-- isoreceived="20141212064900" -->
<!-- sent="Fri, 12 Dec 2014 01:48:59 -0500" -->
<!-- isosent="20141212064859" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="CAMJJpkVn=zjkCt_vTVVZ=s=kdTGxstw6s8hYtLPKVSUTv6OYYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548A55DC.5070203_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 01:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16536.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>Previous message:</strong> <a href="16534.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16519.php">Gilles Gouaillardet: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16532.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 11, 2014 at 9:41 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please allow me to jump in with naive comments ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; currently (master) both openib and usnic btl invokes opal_using_threads in
</span><br>
<span class="quotelev1">&gt; component_init() :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_component_init(int *num_btl_modules,
</span><br>
<span class="quotelev1">&gt;                           bool enable_progress_threads,
</span><br>
<span class="quotelev1">&gt;                           bool enable_mpi_threads)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;     /* Currently refuse to run if MPI_THREAD_MULTIPLE is enabled */
</span><br>
<span class="quotelev1">&gt;     if (opal_using_threads() &amp;&amp; !mca_btl_base_thread_multiple_override) {
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(5, opal_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;btl:openib: MPI_THREAD_MULTIPLE not
</span><br>
<span class="quotelev1">&gt; suppported; skipping this component&quot;);
</span><br>
<span class="quotelev1">&gt;         goto no_btls;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>the code should not check for opal_using_threads(), instead it should check
<br>
the local argument enable_mpi_threads.
<br>
<p><p><span class="quotelev1">&gt; The overall design in OMPI was that no OMPI module should be allowed to decide if threads are on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does &quot;OMPI module&quot; exclude OPAL and ORTE module ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Every modele where the threading level is provided in the _init function. I
<br>
am not aware if there are any in ORTE, but there are certainly quite a few
<br>
in OPAL and OMPI.
<br>
<p><p><span class="quotelev1">&gt; if yes, did the btl move from OMPI down to OPAL have any impact ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Should not, the highest level defines the supported threading level (OMPI
<br>
in the current code).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if not, then could/should opal_using_threads() abort and/or display an
</span><br>
<span class="quotelev1">&gt; error message if it is called too early
</span><br>
<span class="quotelev1">&gt; (at least in debug builds) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't think so. The thing I wanted to raise attention to is that solely
<br>
using opal_using _threads in a module initialization to decide the level of
<br>
thread support provided is wrong. This information can be used to augment
<br>
the decision already taken using the two provided arguments, but nothing
<br>
more (certainly not as shown in the above code).
<br>
<p>That being said, I can also see how one might use the opal_using _threads()
<br>
to extend upon the provided level of thread safety. Let me take an example.
<br>
A BTL can provide internal async progress for all pending fragments as long
<br>
as it does not involve any other component (PML, mpool and so on). Thus,
<br>
even if the BTL is requested only minimal threading support during
<br>
initialization, it might check the opal_using_threads to see if it can
<br>
safely use functions such as opal_lifo_push or it should use the
<br>
opal_lifo_atomic_push instead. I know this example is somehow convoluted,
<br>
as one can always go for the version known to be atomic, but is the best I
<br>
found.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/12/12 10:30, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to help me understand: I don&#226;&#128;&#153;t think this change actually changed any behavior. However, it certainly *allows* a different behavior. Isn&#226;&#128;&#153;t that true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I guess the real question is for Pascal at Bull: why do you feel this earlier setting is required?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Dec 11, 2014, at 4:21 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The overall design in OMPI was that no OMPI module should be allowed to decide if threads are on (thus it should not rely on the value returned by opal_using_threads during it's initialization stage). Instead, they should respect the level of thread support requested as an argument during the initialization step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this is true even for the BTLs. The PML component init function is propagating the  enable_progress_threads and enable_mpi_threads, down to the BML, and then to the BTL. This 2 variables, enable_progress_threads and enable_mpi_threads, are exactly what the ompi_mpi_init is using to compute the the value of the opal) using_thread (and that this patch moved).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The setting of the opal_using_threads was delayed during the initialization to ensure that it's value was not used to select a specific thread-level in any module, a behavior that is allowed now with the new setting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A drastic change in behavior...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 9, 2014 at 3:33 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Kewl - I&#226;&#128;&#153;ll fix. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Dec 9, 2014, at 12:32 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden] &lt;mailto:pascal.deveze_at_[hidden]&gt; &lt;pascal.deveze_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This in in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; De : devel [mailto:devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt; &lt;mailto:devel-bounces_at_[hidden]&gt; &lt;devel-bounces_at_[hidden]&gt;] De la part de Ralph Castain
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169; : mardi 9 d&#195;&#169;cembre 2014 09:32
</span><br>
<span class="quotelev1">&gt; &#195;&#128; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Pascal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this in the trunk or in the 1.8 series (or both)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden] &lt;mailto:pascal.deveze_at_[hidden]&gt; &lt;pascal.deveze_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case where MPI is compiled with --enable-mpi-thread-multiple, a call to opal_using_threads() always returns 0 in the routine btl_xxx_component_init() of the BTLs, event if the application calls MPI_Init_thread() with MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I propose the following patch that solves the problem for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; index 35509cf..c2370fc 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; @@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev1">&gt; +       them. */
</span><br>
<span class="quotelev1">&gt; +    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev1">&gt; +        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev1">&gt; +        opal_set_using_threads(true);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;      /* initialize datatypes. This step should be done early as it will
</span><br>
<span class="quotelev1">&gt;       * create the local convertor and local arch used in the proc
</span><br>
<span class="quotelev1">&gt;       * init.
</span><br>
<span class="quotelev1">&gt; @@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev1">&gt; -       them. */
</span><br>
<span class="quotelev1">&gt; -    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev1">&gt; -        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev1">&gt; -        opal_set_using_threads(true);
</span><br>
<span class="quotelev1">&gt; -    }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;      /* start PML/BTL's */
</span><br>
<span class="quotelev1">&gt;      ret = MCA_PML_CALL(enable(true));
</span><br>
<span class="quotelev1">&gt;      if( OMPI_SUCCESS != ret ) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16516.php">http://www.open-mpi.org/community/lists/devel/2014/12/16516.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16517.php">http://www.open-mpi.org/community/lists/devel/2014/12/16517.php</a>
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16519.php">http://www.open-mpi.org/community/lists/devel/2014/12/16519.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16536.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<li><strong>Previous message:</strong> <a href="16534.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16519.php">Gilles Gouaillardet: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16532.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
