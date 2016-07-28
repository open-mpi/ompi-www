<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 21:41:19 2014" -->
<!-- isoreceived="20141212024119" -->
<!-- sent="Fri, 12 Dec 2014 11:41:32 +0900" -->
<!-- isosent="20141212024132" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="548A55DC.5070203_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64F63AA6-FA7D-4049-9087-D2B26EF55DC7_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 21:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16520.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>Previous message:</strong> <a href="16518.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>please allow me to jump in with naive comments ...
<br>
<p>currently (master) both openib and usnic btl invokes opal_using_threads
<br>
in component_init() :
<br>
<p>btl_openib_component_init(int *num_btl_modules,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool enable_progress_threads,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool enable_mpi_threads)
<br>
{
<br>
[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Currently refuse to run if MPI_THREAD_MULTIPLE is enabled */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (opal_using_threads() &amp;&amp; !mca_btl_base_thread_multiple_override) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, opal_btl_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;btl:openib: MPI_THREAD_MULTIPLE not
<br>
suppported; skipping this component&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto no_btls;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><span class="quotelev1">&gt; The overall design in OMPI was that no OMPI module should be allowed to decide if threads are on
</span><br>
<p>does &quot;OMPI module&quot; exclude OPAL and ORTE module ?
<br>
if yes, did the btl move from OMPI down to OPAL have any impact ?
<br>
<p>if not, then could/should opal_using_threads() abort and/or display an
<br>
error message if it is called too early
<br>
(at least in debug builds) ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/12 10:30, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to help me understand: I don't think this change actually changed any behavior. However, it certainly *allows* a different behavior. Isn't that true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I guess the real question is for Pascal at Bull: why do you feel this earlier setting is required?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2014, at 4:21 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The overall design in OMPI was that no OMPI module should be allowed to decide if threads are on (thus it should not rely on the value returned by opal_using_threads during it's initialization stage). Instead, they should respect the level of thread support requested as an argument during the initialization step.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this is true even for the BTLs. The PML component init function is propagating the  enable_progress_threads and enable_mpi_threads, down to the BML, and then to the BTL. This 2 variables, enable_progress_threads and enable_mpi_threads, are exactly what the ompi_mpi_init is using to compute the the value of the opal) using_thread (and that this patch moved).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The setting of the opal_using_threads was delayed during the initialization to ensure that it's value was not used to select a specific thread-level in any module, a behavior that is allowed now with the new setting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A drastic change in behavior...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 9, 2014 at 3:33 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Kewl - I'll fix. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 9, 2014, at 12:32 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden] &lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This in in the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De : devel [mailto:devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;] De la part de Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Envoy&#233; : mardi 9 d&#233;cembre 2014 09:32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#192; : Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Pascal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this in the trunk or in the 1.8 series (or both)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden] &lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In case where MPI is compiled with --enable-mpi-thread-multiple, a call to opal_using_threads() always returns 0 in the routine btl_xxx_component_init() of the BTLs, event if the application calls MPI_Init_thread() with MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is because opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I propose the following patch that solves the problem for me:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 35509cf..c2370fc 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       them. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        opal_set_using_threads(true);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* initialize datatypes. This step should be done early as it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       * create the local convertor and local arch used in the proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       * init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         goto error;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -       them. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        opal_set_using_threads(true);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* start PML/BTL's */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ret = MCA_PML_CALL(enable(true));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if( OMPI_SUCCESS != ret ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a>&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16516.php">http://www.open-mpi.org/community/lists/devel/2014/12/16516.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16517.php">http://www.open-mpi.org/community/lists/devel/2014/12/16517.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16520.php">Paul Hargrove: "[OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>Previous message:</strong> <a href="16518.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16535.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
