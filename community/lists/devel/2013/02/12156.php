<?
$subject_val = "Re: [OMPI devel] Patch for the SM BTL - Remove explicit	reference	to ORTE data structures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 14:22:03 2013" -->
<!-- isoreceived="20130222192203" -->
<!-- sent="Fri, 22 Feb 2013 19:21:58 +0000" -->
<!-- isosent="20130222192158" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch for the SM BTL - Remove explicit	reference	to ORTE data structures" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B18AD44DA_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="2A624BD7-CC58-487D-B4B6-3E35B582E567_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch for the SM BTL - Remove explicit	reference	to ORTE data structures<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-22 14:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>In reply to:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, guys.
<br>
<p>Sam
<br>
________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Vallee, Geoffroy R. [valleegr_at_[hidden]]
<br>
Sent: Friday, February 22, 2013 12:02 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Patch for the SM BTL - Remove explicit        reference       to ORTE data structures
<br>
<p>Thanks Ralph. And sorry for not including the rte/orte/rte_orte.h modification in my patch, i am not using ORTE at the moment.
<br>
<p><p>On Feb 22, 2013, at 12:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm....well that doesn't solve the problem either - we also have to typedef ompi_local_rank_t. I've committed the complete fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2013, at 9:15 AM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well apparently not&#133; another try&#133; sorry for the extra noise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;btl_sm_component_c.patch&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2013, at 12:08 PM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch will actually apply correctly, not the first one. Sorry about that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;btl_sm_component_c.patch&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 22, 2013, at 11:57 AM, &quot;Vallee, Geoffroy R.&quot; &lt;valleegr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some of the latest modifications to the SM BTL make a direct reference to ORTE instead of the equivalent at the OMPI level.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The attached patch fixes that problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;btl_sm_component_c.patch&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<li><strong>Previous message:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
<li><strong>In reply to:</strong> <a href="12155.php">Vallee, Geoffroy R.: "Re: [OMPI devel] Patch for the SM BTL - Remove explicit reference	to ORTE data structures"</a>
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
