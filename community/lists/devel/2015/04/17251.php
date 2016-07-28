<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 16:02:31 2015" -->
<!-- isoreceived="20150417200231" -->
<!-- sent="Fri, 17 Apr 2015 13:02:25 -0700" -->
<!-- isosent="20150417200225" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="52B45BBF-CBA1-4BEE-96A2-3725549F5BF9_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj577JzERvT=-FzYYmitG+Ca8rOPxtxQjxrD0uVsrGuuCg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.5 NEWS and README<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 16:02:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I&#226;&#128;&#153;m puzzled by the XC comment on 1.8.5 given that I&#226;&#128;&#153;m working with at least one group that is using it on an XC system. If you don&#226;&#128;&#153;t want to support it, I understand - but we should be clear that it may well work anyway.
<br>
<p><p><span class="quotelev1">&gt; On Apr 17, 2015, at 9:28 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind of sad but I don't want to sign up for XC support for 1.8.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cray XK is just an XE but with one opteron socket/node removed and replaced with an 
</span><br>
<span class="quotelev1">&gt; nvidia GPU on a daughter card, so I&quot;m willing to sign up for supporting
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So on master README say we support 
</span><br>
<span class="quotelev1">&gt; Cray XE, XK, and XC systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the 1.8.5 README say we support
</span><br>
<span class="quotelev1">&gt; Cray XE and XK systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually the 1.8.X branch will no longer build on cray owing to pmi issues.
</span><br>
<span class="quotelev1">&gt; But this late in the release cycle for 1.8.X I'd prefer not to make more changes
</span><br>
<span class="quotelev1">&gt; in this area of orte.  Its more important that the 1.8.X branch work well for
</span><br>
<span class="quotelev1">&gt; the slurm/pmi systems at trilabs than for the Cray's.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I strongly encourage anyone wanting to use open mpi on cray systems
</span><br>
<span class="quotelev1">&gt; to use master (on good days, today is not such a day) at this point in time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-04-17 8:18 GMT-06:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; Howard --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice that you have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - Cray XE and XC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on the master README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is correct for v1.8.5: XC or XK?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 17, 2015, at 10:02 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Minor cray corrections below
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 17, 2015 6:57 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The v1.8 branch NEWS, README, and VERSION files have been updated in preparation for the v1.8.5 release.  Please double check them -- especially NEWS, particularly to ensure that we are giving credit to users who submitted bug reports, etc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, please double check that this is a current/correct list of supported systems:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - rsh / ssh
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - LoadLeveler
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - PBS Pro, Torque
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - SLURM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev2">&gt; &gt; delete line above replace with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cray XE and XK
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Systems that have been tested are:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Linux (various flavors/distros), 32 bit, with gcc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Intel, and Portland (*)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     Absoft compilers (*)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Cygwin 32 &amp; 64 bit with gcc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17241.php">http://www.open-mpi.org/community/lists/devel/2015/04/17241.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17241.php">http://www.open-mpi.org/community/lists/devel/2015/04/17241.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17244.php">http://www.open-mpi.org/community/lists/devel/2015/04/17244.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17244.php">http://www.open-mpi.org/community/lists/devel/2015/04/17244.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17245.php">http://www.open-mpi.org/community/lists/devel/2015/04/17245.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17245.php">http://www.open-mpi.org/community/lists/devel/2015/04/17245.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17247.php">http://www.open-mpi.org/community/lists/devel/2015/04/17247.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Previous message:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17253.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
