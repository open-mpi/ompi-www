<?
$subject_val = "Re: [OMPI devel] trunk problem for large-SMP startup?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:35:47 2009" -->
<!-- isoreceived="20090304213547" -->
<!-- sent="Wed, 4 Mar 2009 14:35:36 -0700" -->
<!-- isosent="20090304213536" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk problem for large-SMP startup?" -->
<!-- id="12563241-9C28-4136-BEE5-240879F2A985_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7D90BDC3-102D-4334-946F-D0EDC754C907_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk problem for large-SMP startup?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 16:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>In reply to:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Reply:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just ran a 64ppn job without problem. Couple of possibilities come  
<br>
to mind:
<br>
<p>1. you might have some stale lib around - try blowing things away and  
<br>
rebuilding
<br>
<p>2. there may be a problem in your specific situation. Can you provide  
<br>
some info on what you are doing (e.g., what environment)?
<br>
<p>Ralph
<br>
<p><p>On Mar 4, 2009, at 2:22 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'll take a look - offhand, I don't know of anything limiting you to  
</span><br>
<span class="quotelev1">&gt; &lt;= 64 ppn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2009, at 1:49 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem starting large SMP jobs (e.g., 64 processes on a  
</span><br>
<span class="quotelev2">&gt;&gt; single SMP) that might be related to a recent trunk change.   
</span><br>
<span class="quotelev2">&gt;&gt; (Guessing.)  Does the following ring any bells?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file ess_env_module.c at line 299
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file base/grpcomm_base_modex.c at line 416
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06798] [[57827,1],42] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file grpcomm_bad_module.c at line 378
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file ess_env_module.c at line 299
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file base/grpcomm_base_modex.c at line 416
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06800] [[57827,1],44] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file grpcomm_bad_module.c at line 378
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file ess_env_module.c at line 299
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file base/grpcomm_base_modex.c at line 416
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:06797] [[57827,1],41] ORTE_ERROR_LOG: Not found in  
</span><br>
<span class="quotelev2">&gt;&gt; file grpcomm_bad_module.c at line 378
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's  
</span><br>
<span class="quotelev2">&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_grpcomm_modex failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:6756] Abort before MPI_INIT completed successfully;  
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [burl-t5440-0:6757] Abort before MPI_INIT completed successfully;  
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &lt;trunk-problem.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>In reply to:</strong> <a href="5575.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Reply:</strong> <a href="5586.php">Eugene Loh: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
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
