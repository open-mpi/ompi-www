<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 12:10:26 2010" -->
<!-- isoreceived="20101103161026" -->
<!-- sent="Wed, 03 Nov 2010 17:12:09 +0100" -->
<!-- isosent="20101103161209" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="4CD189D9.6010003_at_hlrs.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="2C434451-30AA-4952-B6BC-CA4763EEA0CA_at_sandia.gov" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-03 12:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really sorry for the trouble. I forgot that opal_config.h has been 
<br>
included only for Windows for the bool definition.
<br>
<p>It's already been reverted early today in the trunk.
<br>
<p><p>On 2010-11-3 4:11 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; I'm pretty sure it was Shiqing's patch.  THe problem is that 
</span><br>
<span class="quotelev1">&gt; OPAL_DECLSPEC was added to event.h to export a couple of symbols, but 
</span><br>
<span class="quotelev1">&gt; none of the libevent files include opal_config.h, so OPAL_DECLSPEC 
</span><br>
<span class="quotelev1">&gt; isn't properly defined on Unix systems.  I ran into this last night 
</span><br>
<span class="quotelev1">&gt; and was going to send an e-mail this morning, but it looks like the 
</span><br>
<span class="quotelev1">&gt; nightly build beat me to it.  Unfortunately, I don't have time to fix 
</span><br>
<span class="quotelev1">&gt; the bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2010, at 7:20 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...but it -did- work after your last change - we got a nice 
</span><br>
<span class="quotelev2">&gt;&gt; tarball that night. Perhaps it was Shiqing's commit that broke it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 3, 2010 at 4:36 AM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yep - I get these mails, too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My only comment is: %}%%&#128;&lt;&gt;~|%&gt;&#128;&#128;!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I swear I actually do test these things and they *do* work before
</span><br>
<span class="quotelev2">&gt;&gt;     I commit them. There must be some difference between my env and
</span><br>
<span class="quotelev2">&gt;&gt;     the nightly creation env. I'll investigate...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Nov 3, 2010, at 2:12 AM, &quot;Mike Dubman&quot; &lt;mike.ompi_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:mike.ompi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ompi/trunk (r23985) build still fails with compilation errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (attached).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Mon, Nov 1, 2010 at 11:10 PM, Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Sorry for the delay on this -- the issue was quite subtle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and the holiday weekend got in the way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I have a fix that will be committed a little after 6pm US
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Eastern.  It seems to allow a fresh SVN checkout (with my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         patch applied) to pass &quot;make distcheck&quot;.  Hopefully we'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         finally get a new trunk tarball tonight.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Oct 31, 2010, at 9:16 PM, MPI Team wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;       make distcheck
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Start time: Sun Oct 31 21:00:12 EDT 2010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; End time:   Sun Oct 31 21:16:33 EDT 2010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         =======================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OPAL CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OPAL LIBS... -ldl   -Wl,--export-dynamic -lrt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE CFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE LIBS...  -ldl   -Wl,--export-dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI CFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI FFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI FCFLAGS_PREFIX...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI LIBS...   -ldl   -Wl,--export-dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; *** Final output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; configure: creating ./config.status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/include/opal/version.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/backtrace/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/backtrace/printstack/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/backtrace/execinfo/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/backtrace/darwin/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/backtrace/none/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/carto/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/carto/auto_detect/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/carto/file/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/compress/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/compress/gzip/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/compress/bzip/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/crs/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/crs/none/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/crs/self/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/crs/blcr/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/event/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: creating opal/mca/event/libevent207/Makefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; config.status: error: cannot find input file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="http://event-config.h.in/">http://event-config.h.in/</a>&gt;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         =======================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Your friendly daemon,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Cyrador
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; testing mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; testing_at_[hidden] &lt;mailto:testing_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mtt_ompi_trunk_r23985.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8658.php">Barrett, Brian W: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8660.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
