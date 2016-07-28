<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 03:33:57 2014" -->
<!-- isoreceived="20141209083357" -->
<!-- sent="Tue, 9 Dec 2014 00:33:52 -0800" -->
<!-- isosent="20141209083352" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="8CB3D9E2-9222-4DAB-BCB7-1EEC9998053F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DC31D20C207C9643AEEE0D83E753E5C98288B9AD_at_BUMSG3WM.fr.ad.bull.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 03:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16464.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16462.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16462.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16516.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16516.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - I&#146;ll fix. Thanks!
<br>
<p><span class="quotelev1">&gt; On Dec 9, 2014, at 12:32 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; De : devel [mailto:devel-bounces_at_[hidden]] De la part de Ralph Castain
</span><br>
<span class="quotelev1">&gt; Envoy&#233; : mardi 9 d&#233;cembre 2014 09:32
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Developers
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
<span class="quotelev1">&gt; On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden] &lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16462.php">http://www.open-mpi.org/community/lists/devel/2014/12/16462.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16464.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16462.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16462.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16516.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16516.php">George Bosilca: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
