<?
$subject_val = "Re: [OMPI devel] 1.8.4rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 10:00:31 2014" -->
<!-- isoreceived="20140814140031" -->
<!-- sent="Thu, 14 Aug 2014 14:00:29 +0000" -->
<!-- isosent="20140814140029" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc4 is out" -->
<!-- id="57D44795-E596-4772-94D3-59A2AC4431F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oece9U=sQFAXfzgy=oBOcjCUXkPT3fUkYsOV=q0bfx07Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 10:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15652.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Previous message:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Woot -- thank you!
<br>
<p>On Aug 14, 2014, at 1:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Fantastic - thanks Paul!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2014 at 9:18 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have completed testing the majority of the platforms I have access to.
</span><br>
<span class="quotelev1">&gt; The only issue that is not already known to exist in earlier releases was the missing osx/atomic.h, for which Ralph promptly merged George's fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I include the re-tested osx-atomics (which passes w/ 1.8.2rc5r32531), I have success on 75 distinct configurations which include x86, x86-64, sparc-v8+, sparc64-v9, ppc32 and ppc64 ABIs with various releases of Linux, Mac OS X, Solaris, FreeBSD, NetBSD and OpenBSD, with all sorts of compilers, and static linking (w/o romio :-)) on at least one configuration for each OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will have results on ia64, ARMv5, ARMv7 and 3 MIPS ABIs in the next day or two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks good to me.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 13, 2014 at 1:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Please test!  Ralph would like to release after the teleconf next Tuesday:
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15640.php">http://www.open-mpi.org/community/lists/devel/2014/08/15640.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15647.php">http://www.open-mpi.org/community/lists/devel/2014/08/15647.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15649.php">http://www.open-mpi.org/community/lists/devel/2014/08/15649.php</a>
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
<li><strong>Next message:</strong> <a href="15652.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Previous message:</strong> <a href="15650.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15649.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15658.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 is out"</a>
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
