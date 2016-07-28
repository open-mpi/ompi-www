<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 09:20:08 2010" -->
<!-- isoreceived="20101103132008" -->
<!-- sent="Wed, 3 Nov 2010 07:20:02 -0600" -->
<!-- isosent="20101103132002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="AANLkTimqLuEDjO6=+s_fMFX=6nUqseZ8MRJr_hUhRPa1_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4E410FC8-F33C-4A22-A95F-66BAE6AB9225_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-03 09:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8656.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8656.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...but it -did- work after your last change - we got a nice tarball that
<br>
night. Perhaps it was Shiqing's commit that broke it?
<br>
<p><p>On Wed, Nov 3, 2010 at 4:36 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Yep - I get these mails, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only comment is: %}%%&#128;&lt;&gt;~|%&gt;&#128;&#128;!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I swear I actually do test these things and they *do* work before I commit
</span><br>
<span class="quotelev1">&gt; them. There must be some difference between my env and the nightly creation
</span><br>
<span class="quotelev1">&gt; env. I'll investigate...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2010, at 2:12 AM, &quot;Mike Dubman&quot; &lt;mike.ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; On Mon, Nov 1, 2010 at 11:10 PM, Jeff Squyres &lt; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay on this -- the issue was quite subtle and the holiday
</span><br>
<span class="quotelev2">&gt;&gt; weekend got in the way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a fix that will be committed a little after 6pm US Eastern.  It
</span><br>
<span class="quotelev2">&gt;&gt; seems to allow a fresh SVN checkout (with my patch applied) to pass &quot;make
</span><br>
<span class="quotelev2">&gt;&gt; distcheck&quot;.  Hopefully we'll finally get a new trunk tarball tonight.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2010, at 9:16 PM, MPI Team wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;       make distcheck
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Start time: Sun Oct 31 21:00:12 EDT 2010
</span><br>
<span class="quotelev3">&gt;&gt; &gt; End time:   Sun Oct 31 21:16:33 EDT 2010
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OPAL CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OPAL LIBS... -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE CFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE LIBS...  -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI CFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI FFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI FCFLAGS_PREFIX...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI LIBS...   -ldl   -Wl,--export-dynamic -lrt -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; -lutil -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; *** Final output
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/include/opal/version.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/backtrace/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/backtrace/printstack/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/backtrace/execinfo/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/backtrace/darwin/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/backtrace/none/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/carto/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/carto/auto_detect/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/carto/file/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/compress/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/compress/gzip/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/compress/bzip/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/crs/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/crs/none/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/crs/self/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/crs/blcr/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/event/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: creating opal/mca/event/libevent207/Makefile
</span><br>
<span class="quotelev3">&gt;&gt; &gt; config.status: error: cannot find input file:
</span><br>
<span class="quotelev2">&gt;&gt; `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Your friendly daemon,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cyrador
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; testing mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;testing_at_[hidden]&gt;testing_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;jsquyres_at_[hidden]&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;devel_at_[hidden]&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mtt_ompi_trunk_r23985.txt&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8656.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8656.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
