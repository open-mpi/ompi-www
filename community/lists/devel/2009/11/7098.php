<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 17:55:21 2009" -->
<!-- isoreceived="20091105225521" -->
<!-- sent="Thu, 5 Nov 2009 17:55:16 -0500" -->
<!-- isosent="20091105225516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="36761C51-FA03-488A-AA42-EEEA0CE41B65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B464D07A-A07C-4D7A-9F00-2C36B6C17CCC_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-11-05 17:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see:
<br>
<p>enable_mca_no_build=carto,crs,routed-direct,routed-linear,snapc,pml- 
<br>
dr,pml-crcp2,pml-crcpw,pml-v,pml-example,crcp,pml-cm,filem
<br>
<p>Which means that you're directing all carto components not to build at  
<br>
all.
<br>
<p>It looks like carto is now required...?
<br>
<p><p>On Nov 5, 2009, at 5:38 PM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is how I configured my build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-platform=./contrib/platform/lanl/rr-class/ 
</span><br>
<span class="quotelev1">&gt; optimized-
</span><br>
<span class="quotelev1">&gt; panasas --prefix=/usr/projects/hpctools/samuel/local/rr-dev/apps/
</span><br>
<span class="quotelev1">&gt; openmpi/gcc/ompi-1.3.4rc4 --libdir=/usr/projects/hpctools/samuel/ 
</span><br>
<span class="quotelev1">&gt; local/
</span><br>
<span class="quotelev1">&gt; rr-dev/apps/openmpi/gcc/ompi-1.3.4rc4/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll send the build log shortly.
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
<span class="quotelev1">&gt; On Nov 5, 2009, at 3:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; How did you build?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see one carto component named &quot;auto_detect&quot; in the 1.3.4 source
</span><br>
<span class="quotelev2">&gt; &gt; tree, but I don't see it in your ompi_info output.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did that component not build?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 4, 2009, at 7:20 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just built OMPI 1.3.4rc4 on one of our Roadrunner machines.   
</span><br>
<span class="quotelev1">&gt; When I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; try to launch a simple MPI job, I get the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; carto components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: opening  
</span><br>
<span class="quotelev1">&gt; carto
</span><br>
<span class="quotelev3">&gt; &gt;&gt; components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto
</span><br>
<span class="quotelev3">&gt; &gt;&gt; components
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component
</span><br>
<span class="quotelev3">&gt; &gt;&gt; selected!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev3">&gt; &gt;&gt; failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only be relevant to  
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   opal_carto_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; found in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; found in file orterun.c at line 541
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This may be an issue on our end regarding a runtime parameter that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; isn't set correctly.  See attached.  Please let me know if you need
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any more info.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;lanl-rr-class-1.3.4rc4.tar.gz&gt;&lt;ATT2634783.txt&gt;&lt;ATT2634785.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7097.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7099.php">David Gunter: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
