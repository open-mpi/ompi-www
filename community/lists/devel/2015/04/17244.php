<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 10:02:48 2015" -->
<!-- isoreceived="20150417140248" -->
<!-- sent="Fri, 17 Apr 2015 08:02:47 -0600" -->
<!-- isosent="20150417140247" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="CAF1Cqj5YnT9+T-VW2tbsjP_0d3TRe4DvHJ2_Ra7W=eu7uaSaYA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6A2E513F-F491-407E-92B0-1D6752C1815A_at_cisco.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 10:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Minor cray corrections below
<br>
<p>On Apr 17, 2015 6:57 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The v1.8 branch NEWS, README, and VERSION files have been updated in
</span><br>
preparation for the v1.8.5 release.  Please double check them -- especially
<br>
NEWS, particularly to ensure that we are giving credit to users who
<br>
submitted bug reports, etc.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, please double check that this is a current/correct list of
</span><br>
supported systems:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev1">&gt;   - rsh / ssh
</span><br>
<span class="quotelev1">&gt;   - LoadLeveler
</span><br>
<span class="quotelev1">&gt;   - PBS Pro, Torque
</span><br>
<span class="quotelev1">&gt;   - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev1">&gt;   - SLURM
</span><br>
<span class="quotelev1">&gt;   - Cray XT-3, XT-4, and XT-5
</span><br>
delete line above replace with
<br>
<p>Cray XE and XK
<br>
<p><span class="quotelev1">&gt;   - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev1">&gt;   - Linux (various flavors/distros), 32 bit, with gcc
</span><br>
<span class="quotelev1">&gt;   - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev1">&gt;     Intel, and Portland (*)
</span><br>
<span class="quotelev1">&gt;   - OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev1">&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev1">&gt;   - Cygwin 32 &amp; 64 bit with gcc
</span><br>
<span class="quotelev1">&gt;   - ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
</span><br>
<span class="quotelev1">&gt;     ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev1">&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev1">&gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev1">&gt;     with Oracle Solaris Studio 12.2 and 12.3
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17241.php">http://www.open-mpi.org/community/lists/devel/2015/04/17241.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17245.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
