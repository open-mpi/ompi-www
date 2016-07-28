<?
$subject_val = "Re: [OMPI devel] descriptor limits -- FAQ item";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 22:39:45 2011" -->
<!-- isoreceived="20110831023945" -->
<!-- sent="Tue, 30 Aug 2011 20:39:37 -0600" -->
<!-- isosent="20110831023937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] descriptor limits -- FAQ item" -->
<!-- id="C0D17193-C234-47D3-ACA4-EAAF1AE5A309_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E5C1128.5000408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] descriptor limits -- FAQ item<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-30 22:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2011, at 4:22 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; It seems to me the FAQ item <a href="http://www.open-mpi.org/faq/?category=large-clusters#fd-limits">http://www.open-mpi.org/faq/?category=large-clusters#fd-limits</a> needs updating.  I'm willing to give this a try, but need some help first.  (I'm even more willing to let someone else do all this, but I'm not holding my breath.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, the text sounds dated -- e.g., with references to v1.2.  Is the &quot;road map&quot; discussion still current?
</span><br>
<p>No - we should remove that stuff, as well as discussion of the 1.2 issues as we no longer support code that old.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the estimate of the needed number of descriptors our current best guess?
</span><br>
<p>No - it's incorrect.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The FAQ is missing discussion of how to increase the limit.  For something like &quot;limit/ulimit/unlimit&quot;, where should this be done?  In .login?  I assume it's not sufficient simply to set this in the shell where mpirun is executed, assuming processes will also be launched on remote nodes.  Yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (And, clearly, the FAQ item is missing discussion of the MCA parameter opal_set_max_sys_limits.)
</span><br>
<p>I'll take a first cut at it - may leave the discussion of how to increase the limits to you.
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9734.php">Eugene Loh: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>Previous message:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
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
