<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 18:11:06 2009" -->
<!-- isoreceived="20091105231106" -->
<!-- sent="Thu, 5 Nov 2009 16:11:02 -0700" -->
<!-- isosent="20091105231102" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.4rc4 is out" -->
<!-- id="4D80B1FA-9D0D-4E3B-BA71-9AF91CF96EA1_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36761C51-FA03-488A-AA42-EEEA0CE41B65_at_cisco.com" -->
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
<strong>Date:</strong> 2009-11-05 18:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, good catch.  I'm not sure who updates the platform files or who  
<br>
would have added the &quot;carto&quot; option to the no_build.  It's the only  
<br>
difference between the the 1.3.4 platform files and the previous ones,  
<br>
save for some compiler flags.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On Nov 5, 2009, at 3:55 PM, Jeff Squyres wrote:
&gt; I see:
&gt;
&gt; enable_mca_no_build=carto,crs,routed-direct,routed-linear,snapc,pml- 
&gt; dr,pml-crcp2,pml-crcpw,pml-v,pml-example,crcp,pml-cm,filem
&gt;
&gt; Which means that you're directing all carto components not to build  
&gt; at all.
&gt;
&gt; It looks like carto is now required...?
&gt;
&gt;
&gt; On Nov 5, 2009, at 5:38 PM, Samuel K. Gutierrez wrote:
&gt;
&gt;&gt; Hi Jeff,
&gt;&gt;
&gt;&gt; This is how I configured my build.
&gt;&gt;
&gt;&gt; ./configure --with-platform=./contrib/platform/lanl/rr-class/ 
&gt;&gt; optimized-
&gt;&gt; panasas --prefix=/usr/projects/hpctools/samuel/local/rr-dev/apps/
&gt;&gt; openmpi/gcc/ompi-1.3.4rc4 --libdir=/usr/projects/hpctools/samuel/ 
&gt;&gt; local/
&gt;&gt; rr-dev/apps/openmpi/gcc/ompi-1.3.4rc4/lib64
&gt;&gt;
&gt;&gt; I'll send the build log shortly.
&gt;&gt;
&gt;&gt; Thanks!
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt; On Nov 5, 2009, at 3:07 PM, Jeff Squyres wrote:
&gt;&gt;
&gt;&gt; &gt; How did you build?
&gt;&gt; &gt;
&gt;&gt; &gt; I see one carto component named &quot;auto_detect&quot; in the 1.3.4 source
&gt;&gt; &gt; tree, but I don't see it in your ompi_info output.
&gt;&gt; &gt;
&gt;&gt; &gt; Did that component not build?
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt; On Nov 4, 2009, at 7:20 PM, Samuel K. Gutierrez wrote:
&gt;&gt; &gt;
&gt;&gt; &gt;&gt; Hi All,
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; I just built OMPI 1.3.4rc4 on one of our Roadrunner machines.   
&gt;&gt; When I
&gt;&gt; &gt;&gt; try to launch a simple MPI job, I get the following:
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: Looking  
&gt;&gt; for
&gt;&gt; &gt;&gt; carto components
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca: base: components_open: opening  
&gt;&gt; carto
&gt;&gt; &gt;&gt; components
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select: Auto-selecting carto
&gt;&gt; &gt;&gt; components
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] mca:base:select:(carto) No component
&gt;&gt; &gt;&gt; selected!
&gt;&gt; &gt;&gt;  
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel
&gt;&gt; &gt;&gt; process is
&gt;&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process  
&gt;&gt; can
&gt;&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
&gt;&gt; &gt;&gt; environment problems.  This failure appears to be an internal
&gt;&gt; &gt;&gt; failure;
&gt;&gt; &gt;&gt; here's some additional information (which may only be relevant  
&gt;&gt; to an
&gt;&gt; &gt;&gt; Open MPI developer):
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;   opal_carto_base_select failed
&gt;&gt; &gt;&gt;   --&gt; Returned value -13 instead of OPAL_SUCCESS
&gt;&gt; &gt;&gt;  
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG:  
&gt;&gt; Not
&gt;&gt; &gt;&gt; found in file runtime/orte_init.c at line 77
&gt;&gt; &gt;&gt; [rra011a.rr.lanl.gov:31601] [[INVALID],INVALID] ORTE_ERROR_LOG:  
&gt;&gt; Not
&gt;&gt; &gt;&gt; found in file orterun.c at line 541
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; This may be an issue on our end regarding a runtime parameter that
&gt;&gt; &gt;&gt; isn't set correctly.  See attached.  Please let me know if you  
&gt;&gt; need
&gt;&gt; &gt;&gt; any more info.
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; Thanks!
&gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; Samuel K. Gutierrez
&gt;&gt; &gt;&gt; Los Alamos National Laboratory
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &lt;lanl-rr-class-1.3.4rc4.tar.gz&gt;&lt;ATT2634783.txt&gt;&lt;ATT2634785.txt&gt;
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt; --
&gt;&gt; &gt; Jeff Squyres
&gt;&gt; &gt; jsquyres_at_[hidden]
&gt;&gt; &gt;
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; devel mailing list
&gt;&gt; &gt; devel_at_[hidden]
&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="7098.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7100.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="7102.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
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
