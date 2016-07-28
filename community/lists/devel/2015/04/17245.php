<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 10:18:36 2015" -->
<!-- isoreceived="20150417141836" -->
<!-- sent="Fri, 17 Apr 2015 14:18:34 +0000" -->
<!-- isosent="20150417141834" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="82FDF9CC-EF6C-44D3-9186-58382A5B0A56_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5YnT9+T-VW2tbsjP_0d3TRe4DvHJ2_Ra7W=eu7uaSaYA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 10:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17246.php">Howard Pritchard: "[OMPI devel] mtt failures from last nite"</a>
<li><strong>Previous message:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard --
<br>
<p>I notice that you have
<br>
<p>&nbsp;&nbsp;- Cray XE and XC
<br>
<p>on the master README.
<br>
<p>Which is correct for v1.8.5: XC or XK?
<br>
<p><p><span class="quotelev1">&gt; On Apr 17, 2015, at 10:02 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Minor cray corrections below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2015 6:57 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The v1.8 branch NEWS, README, and VERSION files have been updated in preparation for the v1.8.5 release.  Please double check them -- especially NEWS, particularly to ensure that we are giving credit to users who submitted bug reports, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, please double check that this is a current/correct list of supported systems:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev2">&gt; &gt;   - rsh / ssh
</span><br>
<span class="quotelev2">&gt; &gt;   - LoadLeveler
</span><br>
<span class="quotelev2">&gt; &gt;   - PBS Pro, Torque
</span><br>
<span class="quotelev2">&gt; &gt;   - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev2">&gt; &gt;   - SLURM
</span><br>
<span class="quotelev2">&gt; &gt;   - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev1">&gt; delete line above replace with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cray XE and XK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Systems that have been tested are:
</span><br>
<span class="quotelev2">&gt; &gt;   - Linux (various flavors/distros), 32 bit, with gcc
</span><br>
<span class="quotelev2">&gt; &gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev2">&gt; &gt;     Intel, and Portland (*)
</span><br>
<span class="quotelev2">&gt; &gt;   - OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev2">&gt; &gt;     Absoft compilers (*)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev2">&gt; &gt;   - Cygwin 32 &amp; 64 bit with gcc
</span><br>
<span class="quotelev2">&gt; &gt;   - ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
</span><br>
<span class="quotelev2">&gt; &gt;     ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev2">&gt; &gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev2">&gt; &gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev2">&gt; &gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17241.php">http://www.open-mpi.org/community/lists/devel/2015/04/17241.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17244.php">http://www.open-mpi.org/community/lists/devel/2015/04/17244.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17246.php">Howard Pritchard: "[OMPI devel] mtt failures from last nite"</a>
<li><strong>Previous message:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>In reply to:</strong> <a href="17244.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17247.php">Howard Pritchard: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
