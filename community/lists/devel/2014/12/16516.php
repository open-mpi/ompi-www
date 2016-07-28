<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 19:21:47 2014" -->
<!-- isoreceived="20141212002147" -->
<!-- sent="Thu, 11 Dec 2014 19:21:46 -0500" -->
<!-- isosent="20141212002146" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="CAMJJpkXAZmt_KAwXGyrRdHdAkY4n-ZYG_JBnBdWrSSkHci9GRA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8CB3D9E2-9222-4DAB-BCB7-1EEC9998053F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-12-11 19:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16515.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orted SEGVs on Solaris-11/x86-64"</a>
<li><strong>In reply to:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The overall design in OMPI was that no OMPI module should be allowed to
<br>
decide if threads are on (thus it should not rely on the value
<br>
returned by opal_using_threads
<br>
during it's initialization stage). Instead, they should respect the level
<br>
of thread support requested as an argument during the initialization step.
<br>
<p>And this is true even for the BTLs. The PML component init function is
<br>
propagating the  enable_progress_threads and enable_mpi_threads, down to
<br>
the BML, and then to the BTL. This 2 variables, enable_progress_threads and
<br>
enable_mpi_threads, are exactly what the ompi_mpi_init is using to compute
<br>
the the value of the opal) using_thread (and that this patch moved).
<br>
<p>The setting of the opal_using_threads was delayed during the initialization
<br>
to ensure that it's value was not used to select a specific thread-level in
<br>
any module, a behavior that is allowed now with the new setting.
<br>
<p>A drastic change in behavior...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Dec 9, 2014 at 3:33 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Kewl - I&#226;&#128;&#153;ll fix. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2014, at 12:32 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; *De :* devel [mailto:devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;devel-bounces_at_[hidden]&gt;] *De la part de* Ralph Castain
</span><br>
<span class="quotelev1">&gt; *Envoy&#195;&#169; :* mardi 9 d&#195;&#169;cembre 2014 09:32
</span><br>
<span class="quotelev1">&gt; *&#195;&#128; :* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Objet :* Re: [OMPI devel] Patch proposed: opal_set_using_threads(true)
</span><br>
<span class="quotelev1">&gt; in ompi/runtime/ompi_mpi_init.c is called to late
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case where MPI is compiled with --enable-mpi-thread-multiple, a call to
</span><br>
<span class="quotelev1">&gt; opal_using_threads() always returns 0 in the routine
</span><br>
<span class="quotelev1">&gt; btl_xxx_component_init() of the BTLs, event if the application calls
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread() with MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because opal_set_using_threads(true) in
</span><br>
<span class="quotelev1">&gt; ompi/runtime/ompi_mpi_init.c is called to late.
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
<span class="quotelev1">&gt; @@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int
</span><br>
<span class="quotelev1">&gt; requested, int *provided)
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
<span class="quotelev1">&gt; @@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int
</span><br>
<span class="quotelev1">&gt; requested, int *provided)
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16463.php">http://www.open-mpi.org/community/lists/devel/2014/12/16463.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16516/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16515.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orted SEGVs on Solaris-11/x86-64"</a>
<li><strong>In reply to:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16517.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
