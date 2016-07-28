<?
$subject_val = "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 12:49:37 2013" -->
<!-- isoreceived="20130222174937" -->
<!-- sent="Fri, 22 Feb 2013 09:49:29 -0800" -->
<!-- isosent="20130222174929" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures" -->
<!-- id="2A27F144-4921-48A8-852D-107323B936D0_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="816805F1-E0B5-49F3-BF39-A489B0DB96E2_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-22 12:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>Previous message:</strong> <a href="12153.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures"</a>
<li><strong>In reply to:</strong> <a href="12153.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>Reply:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm....well that doesn't solve the problem either - we also have to typedef ompi_local_rank_t. I've committed the complete fix.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Feb 22, 2013, at 9:15 AM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well apparently not&#133; another try&#133; sorry for the extra noise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;btl_sm_component_c.patch&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2013, at 12:08 PM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This patch will actually apply correctly, not the first one. Sorry about that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;btl_sm_component_c.patch&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2013, at 11:57 AM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some of the latest modifications to the SM BTL make a direct reference to ORTE instead of the equivalent at the OMPI level.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached patch fixes that problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;btl_sm_component_c.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>Previous message:</strong> <a href="12153.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures"</a>
<li><strong>In reply to:</strong> <a href="12153.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference to ORTE data structures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>Reply:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
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
