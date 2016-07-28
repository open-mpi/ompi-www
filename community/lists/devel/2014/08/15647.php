<?
$subject_val = "Re: [OMPI devel] 1.8.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 00:18:15 2014" -->
<!-- isoreceived="20140814041815" -->
<!-- sent="Wed, 13 Aug 2014 21:18:13 -0700" -->
<!-- isosent="20140814041813" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc4 is out" -->
<!-- id="CAAvDA14G5Lu79GqzX7rBX4q_MSnt+ZfmZANqYK-Z4GmzaRxuuQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8A3D9D5C-A63E-4529-AD90-9E8BD265E543_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc4 is out<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 00:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15646.php">George Bosilca: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have completed testing the majority of the platforms I have access to.
<br>
The only issue that is not already known to exist in earlier releases was
<br>
the missing osx/atomic.h, for which Ralph promptly merged George's fix.
<br>
<p>If I include the re-tested osx-atomics (which passes w/ 1.8.2rc5r32531), I
<br>
have success on 75 distinct configurations which include x86, x86-64,
<br>
sparc-v8+, sparc64-v9, ppc32 and ppc64 ABIs with various releases of Linux,
<br>
Mac OS X, Solaris, FreeBSD, NetBSD and OpenBSD, with all sorts of
<br>
compilers, and static linking (w/o romio :-)) on at least one configuration
<br>
for each OS.
<br>
<p>I will have results on ia64, ARMv5, ARMv7 and 3 MIPS ABIs in the next day
<br>
or two.
<br>
<p>Looks good to me.
<br>
-Paul
<br>
<p><p>On Wed, Aug 13, 2014 at 1:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Please test!  Ralph would like to release after the teleconf next Tuesday:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since last rc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix cascading/over-quoting in some cases with the rsh/ssh-based
</span><br>
<span class="quotelev1">&gt;   launcher.  Thanks to multiple users for raising the issue.
</span><br>
<span class="quotelev1">&gt; - Properly add support for gfortran 4.9 ignore TKR pragma (it was
</span><br>
<span class="quotelev1">&gt;   erroneously only partially added in v1.7.5).  Thanks to Marcus
</span><br>
<span class="quotelev1">&gt;   Daniels for raising the issue.
</span><br>
<span class="quotelev1">&gt; - Update/improve help messages in the usnic BTL.
</span><br>
<span class="quotelev1">&gt; - Resolve a race condition in MPI_Abort.
</span><br>
<span class="quotelev1">&gt; - Fix obscure cases where static linking from wrapper compilers would
</span><br>
<span class="quotelev1">&gt;   fail.
</span><br>
<span class="quotelev1">&gt; - Clarify the configure --help message about when OpenSHMEM is
</span><br>
<span class="quotelev1">&gt;   enabled/disabled by default.  Thanks to Paul Hargrove for the
</span><br>
<span class="quotelev1">&gt;   suggestion.
</span><br>
<span class="quotelev1">&gt; - Align pages properly where relevant.  Thanks to Paul Hargrove for
</span><br>
<span class="quotelev1">&gt;   identifying the issue.
</span><br>
<span class="quotelev1">&gt; - Various compiler warning and minor fixes for OpenBSD, FreeBSD, and
</span><br>
<span class="quotelev1">&gt;   Solaris/SPARC.  Thanks to Paul Hargrove for the patches.
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15640.php">http://www.open-mpi.org/community/lists/devel/2014/08/15640.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15648.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Previous message:</strong> <a href="15646.php">George Bosilca: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>In reply to:</strong> <a href="15640.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<li><strong>Reply:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
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
