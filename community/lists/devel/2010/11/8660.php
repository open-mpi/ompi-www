<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 13:43:28 2010" -->
<!-- isoreceived="20101103174328" -->
<!-- sent="Wed, 3 Nov 2010 13:43:23 -0400" -->
<!-- isosent="20101103174323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="7E160264-F422-4C26-8F20-A292F7DD7DD5_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4CD189D9.6010003_at_hlrs.de" -->
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
<strong>Date:</strong> 2010-11-03 13:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8661.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confirm -- I was able to run &quot;make distcheck&quot; successfully on my systems.  I will kick off the nightly script right now to see if it works in the official build environment.
<br>
<p><p>On Nov 3, 2010, at 12:12 PM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really sorry for the trouble. I forgot that opal_config.h has been included only for Windows for the bool definition. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's already been reverted early today in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2010-11-3 4:11 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm pretty sure it was Shiqing's patch.  THe problem is that OPAL_DECLSPEC was added to event.h to export a couple of symbols, but none of the libevent files include opal_config.h, so OPAL_DECLSPEC isn't properly defined on Unix systems.  I ran into this last night and was going to send an e-mail this morning, but it looks like the nightly build beat me to it.  Unfortunately, I don't have time to fix the bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 3, 2010, at 7:20 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...but it -did- work after your last change - we got a nice tarball that night. Perhaps it was Shiqing's commit that broke it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Nov 3, 2010 at 4:36 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yep - I get these mails, too. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My only comment is: %}%%&#128;&lt;&gt;~|%&gt;&#128;&#128;!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I swear I actually do test these things and they *do* work before I commit them. There must be some difference between my env and the nightly creation env. I'll investigate...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my PDA. No type good. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 3, 2010, at 2:12 AM, &quot;Mike Dubman&quot; &lt;mike.ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/trunk (r23985) build still fails with compilation errors (attached).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Nov 1, 2010 at 11:10 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry for the delay on this -- the issue was quite subtle and the holiday weekend got in the way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a fix that will be committed a little after 6pm US Eastern.  It seems to allow a fresh SVN checkout (with my patch applied) to pass &quot;make distcheck&quot;.  Hopefully we'll finally get a new trunk tarball tonight.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 31, 2010, at 9:16 PM, MPI Team wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;       make distcheck
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Start time: Sun Oct 31 21:00:12 EDT 2010
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; End time:   Sun Oct 31 21:16:33 EDT 2010
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =======================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OPAL CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OPAL CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OPAL LDFLAGS...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OPAL LIBS... -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OPAL extra include dirs...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE CPPFLAGS...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE CFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE CFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE LDFLAGS...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE LIBS...  -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for ORTE extra include dirs...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI CPPFLAGS...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI CFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI CFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI CXXFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI CXXFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI FFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI FFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI FCFLAGS... -pthread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI FCFLAGS_PREFIX...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI LDFLAGS...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI LIBS...   -ldl   -Wl,--export-dynamic -lrt -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; *** Final output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating orte/include/orte/version.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/include/opal/version.h
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/backtrace/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/backtrace/printstack/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/backtrace/execinfo/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/backtrace/darwin/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/backtrace/none/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/carto/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/carto/auto_detect/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/carto/file/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/compress/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/compress/gzip/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/compress/bzip/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/crs/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/crs/none/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/crs/self/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/crs/blcr/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/event/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: creating opal/mca/event/libevent207/Makefile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; config.status: error: cannot find input file: `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; =======================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Cyrador
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; testing mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mtt_ompi_trunk_r23985.txt&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: 
</span><br>
<span class="quotelev1">&gt; fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8661.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9872.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
