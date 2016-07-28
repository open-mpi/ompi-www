<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:20:12 2009" -->
<!-- isoreceived="20091105002012" -->
<!-- sent="Wed, 4 Nov 2009 17:20:06 -0700" -->
<!-- isosent="20091105002006" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="CF8452B6-74DD-4D84-917D-3D2A838A7C87_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07BA2A77-20C7-4C56-9C8D-D8F947DE2514_at_cisco.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 19:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Previous message:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I just built OMPI 1.3.4rc4 on one of our Roadrunner machines.  When I  
<br>
try to launch a simple MPI job, I get the following:
<br>
<p>[rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking for  
<br>
carto components
<br>
[rra011a.rr.lanl.gov:31601] mca: base: components_open: opening carto  
<br>
components
<br>
[rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto  
<br>
components
<br>
[rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component  
<br>
selected!
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_carto_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
<br>
found in file runtime/orte_init.c at line 77
<br>
[rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
<br>
found in file orterun.c at line 541
<br>
<p>This may be an issue on our end regarding a runtime parameter that  
<br>
isn't set correctly.  See attached.  Please let me know if you need  
<br>
any more info.
<br>
<p>Thanks!
<br>
<pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory


</pre>
<p>
<p><p><p>On Nov 4, 2009, at 3:00 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; The latest-n-greatest is available here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please beat it up and look for problems!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7088/lanl-rr-class-1.3.4rc4.tar.gz">lanl-rr-class-1.3.4rc4.tar.gz</a>
</ul>
<!-- attachment="lanl-rr-class-1.3.4rc4.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Previous message:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
