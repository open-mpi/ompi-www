<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 06:36:28 2010" -->
<!-- isoreceived="20101103103628" -->
<!-- sent="Wed, 3 Nov 2010 06:36:25 -0400" -->
<!-- isosent="20101103103625" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="4E410FC8-F33C-4A22-A95F-66BAE6AB9225_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTinAwJWB4K58JiBdZ1S=woP0ri-43uiAzOa9OLDd_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-03 06:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep - I get these mails, too. 
<br>

<br>
My only comment is: %}%%&#226;&#130;&#172;&lt;&gt;~|%&gt;&#226;&#130;&#172;&#226;&#130;&#172;!!!
<br>

<br>
I swear I actually do test these things and they *do* work before I commit them. There must be some difference between my env and the nightly creation env. I'll investigate...
<br>

<br>
Sent from my PDA. No type good. 
<br>

<br>
On Nov 3, 2010, at 2:12 AM, &quot;Mike Dubman&quot; &lt;mike.ompi_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; ompi/trunk (r23985) build still fails with compilation errors (attached).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 1, 2010 at 11:10 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sorry for the delay on this -- the issue was quite subtle and the holiday weekend got in the way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fix that will be committed a little after 6pm US Eastern.  It seems to allow a fresh SVN checkout (with my patch applied) to pass &quot;make distcheck&quot;.  Hopefully we'll finally get a new trunk tarball tonight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2010, at 9:16 PM, MPI Team wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev2">&gt; &gt;       make distcheck
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Start time: Sun Oct 31 21:00:12 EDT 2010
</span><br>
<span class="quotelev2">&gt; &gt; End time:   Sun Oct 31 21:16:33 EDT 2010
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt; &gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for OPAL CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OPAL LIBS... -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt; &gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE CFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE LIBS...  -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt; &gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI CFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI FFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI FCFLAGS_PREFIX...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI LIBS...   -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt; &gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Final output
</span><br>
<span class="quotelev2">&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/include/opal/version.h
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/backtrace/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/backtrace/printstack/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/backtrace/execinfo/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/backtrace/darwin/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/backtrace/none/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/carto/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/carto/auto_detect/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/carto/file/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/compress/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/compress/gzip/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/compress/bzip/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/crs/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/crs/none/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/crs/self/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/crs/blcr/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/event/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: creating opal/mca/event/libevent207/Makefile
</span><br>
<span class="quotelev2">&gt; &gt; config.status: error: cannot find input file: `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt; &gt; Cyrador
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; testing mailing list
</span><br>
<span class="quotelev2">&gt; &gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mtt_ompi_trunk_r23985.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8655.php">Mike Dubman: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
