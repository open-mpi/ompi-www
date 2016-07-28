<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 17:10:26 2010" -->
<!-- isoreceived="20101101211026" -->
<!-- sent="Mon, 1 Nov 2010 17:10:21 -0400" -->
<!-- isosent="20101101211021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="471DDBCD-31C4-4493-9E49-26775A6FBD8C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201011010116.oA11GX00016843_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-11-01 17:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay on this -- the issue was quite subtle and the holiday weekend got in the way.
<br>
<p>I have a fix that will be committed a little after 6pm US Eastern.  It seems to allow a fresh SVN checkout (with my patch applied) to pass &quot;make distcheck&quot;.  Hopefully we'll finally get a new trunk tarball tonight.
<br>
<p><p>On Oct 31, 2010, at 9:16 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Sun Oct 31 21:00:12 EDT 2010
</span><br>
<span class="quotelev1">&gt; End time:   Sun Oct 31 21:16:33 EDT 2010
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
<li><strong>Next message:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI devel] Question about barrier()"</a>
<li><strong>Previous message:</strong> <a href="8650.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question about barrier()"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
