<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 11:11:51 2010" -->
<!-- isoreceived="20101103151151" -->
<!-- sent="Wed, 3 Nov 2010 09:11:34 -0600" -->
<!-- isosent="20101103151134" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="2C434451-30AA-4952-B6BC-CA4763EEA0CA_at_sandia.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AANLkTimqLuEDjO6=+s_fMFX=6nUqseZ8MRJr_hUhRPa1_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-03 11:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm pretty sure it was Shiqing's patch.  THe problem is that OPAL_DECLSPEC was added to event.h to export a couple of symbols, but none of the libevent files include opal_config.h, so OPAL_DECLSPEC isn't properly defined on Unix systems.  I ran into this last night and was going to send an e-mail this morning, but it looks like the nightly build beat me to it.  Unfortunately, I don't have time to fix the bug.
<br>
<p>Brian
<br>
<p>On Nov 3, 2010, at 7:20 AM, Ralph Castain wrote:
<br>
<p>Hmmm...but it -did- work after your last change - we got a nice tarball that night. Perhaps it was Shiqing's commit that broke it?
<br>
<p><p>On Wed, Nov 3, 2010 at 4:36 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Yep - I get these mails, too.
<br>
<p>My only comment is: %}%%&#128;&lt;&gt;~|%&gt;&#128;&#128;!!!
<br>
<p>I swear I actually do test these things and they *do* work before I commit them. There must be some difference between my env and the nightly creation env. I'll investigate...
<br>
<p>Sent from my PDA. No type good.
<br>
<p>On Nov 3, 2010, at 2:12 AM, &quot;Mike Dubman&quot; &lt;mike.ompi_at_[hidden]&lt;mailto:mike.ompi_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi,
<br>
ompi/trunk (r23985) build still fails with compilation errors (attached).
<br>
<p>Regards
<br>
M
<br>
<p>On Mon, Nov 1, 2010 at 11:10 PM, Jeff Squyres &lt;&lt;mailto:jsquyres_at_[hidden]&gt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
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
<span class="quotelev1">&gt; config.status: error: cannot find input file: `opal/mca/event/libevent207/libevent/include/event2/event-config.h.in&lt;<a href="http://event-config.h.in/">http://event-config.h.in/</a>&gt;'
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
<span class="quotelev1">&gt; &lt;mailto:testing_at_[hidden]&gt; testing_at_[hidden]&lt;mailto:testing_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
&lt;mailto:jsquyres_at_[hidden]&gt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to:
&lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
&lt;mailto:devel_at_[hidden]&gt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&lt;mtt_ompi_trunk_r23985.txt&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&lt;ATT00002..txt&gt;
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="8657.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="8659.php">Shiqing Fan: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
