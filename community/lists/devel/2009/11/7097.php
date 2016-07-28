<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 17:38:57 2009" -->
<!-- isoreceived="20091105223857" -->
<!-- sent="Thu, 5 Nov 2009 15:38:52 -0700" -->
<!-- isosent="20091105223852" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="B464D07A-A07C-4D7A-9F00-2C36B6C17CCC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF47F683-4A89-4E55-931A-02B95CB2AB4F_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-05 17:38:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>This is how I configured my build.
<br>
<p>./configure --with-platform=./contrib/platform/lanl/rr-class/optimized- 
<br>
panasas --prefix=/usr/projects/hpctools/samuel/local/rr-dev/apps/ 
<br>
openmpi/gcc/ompi-1.3.4rc4 --libdir=/usr/projects/hpctools/samuel/local/ 
<br>
rr-dev/apps/openmpi/gcc/ompi-1.3.4rc4/lib64
<br>
<p>I'll send the build log shortly.
<br>
<p>Thanks!
<br>
<pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Nov 5, 2009, at 3:07 PM, Jeff Squyres wrote:
&gt; How did you build?
&gt;
&gt; I see one carto component named &quot;auto_detect&quot; in the 1.3.4 source  
&gt; tree, but I don't see it in your ompi_info output.
&gt;
&gt; Did that component not build?
&gt;
&gt;
&gt; On Nov 4, 2009, at 7:20 PM, Samuel K. Gutierrez wrote:
&gt;
&gt;&gt; Hi All,
&gt;&gt;
&gt;&gt; I just built OMPI 1.3.4rc4 on one of our Roadrunner machines.  When I
&gt;&gt; try to launch a simple MPI job, I get the following:
&gt;&gt;
&gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking for
&gt;&gt; carto components
&gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: opening carto
&gt;&gt; components
&gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto
&gt;&gt; components
&gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component
&gt;&gt; selected!
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; It looks like opal_init failed for some reason; your parallel  
&gt;&gt; process is
&gt;&gt; likely to abort.  There are many reasons that a parallel process can
&gt;&gt; fail during opal_init; some of which are due to configuration or
&gt;&gt; environment problems.  This failure appears to be an internal  
&gt;&gt; failure;
&gt;&gt; here's some additional information (which may only be relevant to an
&gt;&gt; Open MPI developer):
&gt;&gt;
&gt;&gt;   opal_carto_base_select failed
&gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
&gt;&gt; found in file runtime/orte_init.c at line 77
&gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
&gt;&gt; found in file orterun.c at line 541
&gt;&gt;
&gt;&gt; This may be an issue on our end regarding a runtime parameter that
&gt;&gt; isn't set correctly.  See attached.  Please let me know if you need
&gt;&gt; any more info.
&gt;&gt;
&gt;&gt; Thanks!
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt;
&gt;&gt; &lt;lanl-rr-class-1.3.4rc4.tar.gz&gt;&lt;ATT2634783.txt&gt;&lt;ATT2634785.txt&gt;
&gt;
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
<li><strong>Next message:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7096.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7095.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
