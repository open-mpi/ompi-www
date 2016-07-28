<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 16:39:59 2009" -->
<!-- isoreceived="20091105213959" -->
<!-- sent="Thu, 5 Nov 2009 14:39:53 -0700" -->
<!-- isosent="20091105213953" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="009A58C8-57EA-41C9-AE27-E6CC93B4A09E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] Open MPI v1.3.4rc4 is out" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 16:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7093.php">Jeff Squyres: "[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I, too, have tried various builds of the rc4 release.  It's dying  
<br>
during orterun.
<br>
<p>Specifically, here's the call chain where things fall apart:
<br>
<p>orterun -&gt; orte_init -&gt; opal_init -&gt; opal_carto_base_select  -&gt;  
<br>
mca_base_select
<br>
<p>54     for (item  = opal_list_get_first(components_available);
<br>
55         item != opal_list_get_end(components_available);
<br>
56          item  = opal_list_get_next(item) ) {
<br>
57         cli = (mca_base_component_list_item_t *) item;
<br>
58         component = (mca_base_component_t *) cli-&gt;cli_component;
<br>
<p>The code is failing on line #55, i.e. item must be getting set to the  
<br>
end on the first pass through.  The code then jumps to line #107 and  
<br>
passes the NULL test there:
<br>
<p>107    if (NULL == *best_component) {
<br>
108         opal_output_verbose(5, output_id,
<br>
109                             &quot;mca:base:select:(%5s) No component  
<br>
selected!&quot;,
<br>
110                             type_name);
<br>
111         /*
<br>
112          * Still close the non-selected components
<br>
113          */
<br>
114         mca_base_components_close(0, /* Pass 0 to keep this from  
<br>
closing the output handle */
<br>
115                                   components_available,
<br>
116                                   NULL);
<br>
117         return OPAL_ERR_NOT_FOUND;
<br>
118     }
<br>
<p><p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
Sam Gutierrez wrote:
 &gt;   Hi All,
 &gt;  I just built OMPI 1.3.4rc4 on one of our Roadrunner machines. When I
 &gt;  try to launch a simple MPI job, I get the following:
 &gt;  [rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking for
 &gt;  carto components
 &gt;  [rra011a.rr.lanl.gov:31601] mca: base: components_open: opening  
carto
 &gt;  components
 &gt;  [rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto
 &gt;  components
 &gt;  [rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component
 &gt;  selected!
 &gt;   
--------------------------------------------------------------------------
 &gt;  It looks like opal_init failed for some reason; your parallel  
process is
 &gt;  likely to abort. There are many reasons that a parallel process can
 &gt;  fail during opal_init; some of which are due to configuration or
 &gt;  environment problems. This failure appears to be an internal  
failure;
 &gt;  here's some additional information (which may only be relevant to an
 &gt;  Open MPI developer):
 &gt;     opal_carto_base_select failed
 &gt;     --&gt; Returned value -13 instead of OPAL_SUCCESS
 &gt;   
--------------------------------------------------------------------------
 &gt;  [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
 &gt;  found in file runtime/orte_init.c at line 77
 &gt;  [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
 &gt;  found in file orterun.c at line 541
 &gt;  This may be an issue on our end regarding a runtime parameter that
 &gt;  isn't set correctly. See attached. Please let me know if you need
 &gt;  any more info.
 &gt;  Thanks!
 &gt;  --
Samuel K. Gutierrez
Los Alamos National Laboratory
On Nov 4, 2009, at 3:00 PM, Jeff Squyres wrote:
 &gt; The latest-n-greatest is available here:
 &gt;
 &gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
 &gt;
 &gt; Please beat it up and look for problems!
 &gt;
 &gt; --
 &gt; Jeff Squyres
 &gt; jsquyres_at_[hidden]
 &gt;
 &gt; _______________________________________________
 &gt; devel mailing list
 &gt; devel_at_[hidden]
 &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7093.php">Jeff Squyres: "[OMPI devel] Fwd: [hwloc-announce] Hardware Locality (hwloc) v0.9.2 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
