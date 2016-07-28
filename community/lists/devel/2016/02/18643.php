<?
$subject_val = "Re: [OMPI devel] Singletons";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 29 13:44:56 2016" -->
<!-- isoreceived="20160229184456" -->
<!-- sent="Mon, 29 Feb 2016 10:44:52 -0800" -->
<!-- isosent="20160229184452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Singletons" -->
<!-- id="992BFFB5-9015-476F-BB6E-CA093114E69D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkUOx5=Cbpw1r8DVKMJVm3f6=_Ugrwjz3YB71Zn3waiPEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Singletons<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-29 13:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<li><strong>In reply to:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<li><strong>Reply:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fix is waiting in a PR - Howard said he will do the final review this evening (need verification that Cray isn&#226;&#128;&#153;t broken)
<br>
<p><span class="quotelev1">&gt; On Feb 29, 2016, at 10:35 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Singletons are broken with version (e5d6b97db4fa1) compiled in both debug and optimized builds. I got this on my OS X laptop, I can try on a linux machine if necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message is attached below. My application is calling MPI_Init_thread, but this is not the root of the problem as a simple MPI_Init/MPI_Finalize fails with a similar message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   init pmix failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Bad parameter (-5) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Bad parameter&quot; (-5) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [Babuska:42464] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all other processes were killed!
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18642.php">http://www.open-mpi.org/community/lists/devel/2016/02/18642.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<li><strong>In reply to:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
<li><strong>Reply:</strong> <a href="18644.php">George Bosilca: "Re: [OMPI devel] Singletons"</a>
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
