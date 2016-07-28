<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 17:07:25 2009" -->
<!-- isoreceived="20091105220725" -->
<!-- sent="Thu, 5 Nov 2009 17:07:20 -0500" -->
<!-- isosent="20091105220720" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="EF47F683-4A89-4E55-931A-02B95CB2AB4F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CF8452B6-74DD-4D84-917D-3D2A838A7C87_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.3.4rc4 is out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 17:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7094.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7088.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How did you build?
<br>
<p>I see one carto component named &quot;auto_detect&quot; in the 1.3.4 source  
<br>
tree, but I don't see it in your ompi_info output.
<br>
<p>Did that component not build?
<br>
<p><p>On Nov 4, 2009, at 7:20 PM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just built OMPI 1.3.4rc4 on one of our Roadrunner machines.  When I
</span><br>
<span class="quotelev1">&gt; try to launch a simple MPI job, I get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking for
</span><br>
<span class="quotelev1">&gt; carto components
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: opening carto
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component
</span><br>
<span class="quotelev1">&gt; selected!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file orterun.c at line 541
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be an issue on our end regarding a runtime parameter that
</span><br>
<span class="quotelev1">&gt; isn't set correctly.  See attached.  Please let me know if you need
</span><br>
<span class="quotelev1">&gt; any more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;lanl-rr-class-1.3.4rc4.tar.gz&gt;&lt;ATT2634783.txt&gt;&lt;ATT2634785.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7094.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7088.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
