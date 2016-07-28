<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 13:57:52 2010" -->
<!-- isoreceived="20101029175752" -->
<!-- sent="Fri, 29 Oct 2010 13:57:37 -0400" -->
<!-- isosent="20101029175737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="419AD4F2-5BBA-4C62-81C8-D5F6B7468B08_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201010290116.o9T1GJcc021155_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 13:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>Previous message:</strong> <a href="8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have fixes for this, but they're .m4 changes (stupid VPATH stuff; sorry) -- so I'll commit them tonight after 6pm US Eastern.
<br>
<p><p><p>On Oct 28, 2010, at 9:16 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Thu Oct 28 21:00:05 EDT 2010
</span><br>
<span class="quotelev1">&gt; End time:   Thu Oct 28 21:16:19 EDT 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; checking for OPAL CXXFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for OPAL CXXFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for OPAL LDFLAGS...   
</span><br>
<span class="quotelev1">&gt; checking for OPAL LIBS... -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt; checking for OPAL extra include dirs... 
</span><br>
<span class="quotelev1">&gt; checking for ORTE CPPFLAGS... 
</span><br>
<span class="quotelev1">&gt; checking for ORTE CXXFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for ORTE CXXFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for ORTE CFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for ORTE CFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for ORTE LDFLAGS...    
</span><br>
<span class="quotelev1">&gt; checking for ORTE LIBS...  -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt; checking for ORTE extra include dirs... 
</span><br>
<span class="quotelev1">&gt; checking for OMPI CPPFLAGS... 
</span><br>
<span class="quotelev1">&gt; checking for OMPI CFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for OMPI CFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for OMPI CXXFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for OMPI CXXFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for OMPI FFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for OMPI FFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for OMPI FCFLAGS... -pthread 
</span><br>
<span class="quotelev1">&gt; checking for OMPI FCFLAGS_PREFIX...  
</span><br>
<span class="quotelev1">&gt; checking for OMPI LDFLAGS...     
</span><br>
<span class="quotelev1">&gt; checking for OMPI LIBS...   -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt; checking for OMPI extra include dirs... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Final output
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/include/opal/version.h
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/backtrace/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/backtrace/printstack/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/backtrace/execinfo/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/backtrace/darwin/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/backtrace/none/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/carto/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/carto/auto_detect/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/carto/file/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/compress/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/compress/gzip/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/compress/bzip/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/crs/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/crs/none/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/crs/self/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/crs/blcr/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/event/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating opal/mca/event/libevent207/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: error: cannot find input file: `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in'
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8641.php">Tim Stitt: "[OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>Previous message:</strong> <a href="8639.php">Barrett, Brian W: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8651.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
