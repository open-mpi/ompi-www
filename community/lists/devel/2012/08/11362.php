<?
$subject_val = "Re: [OMPI devel] 1.6.1rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 02:31:32 2012" -->
<!-- isoreceived="20120803063132" -->
<!-- sent="Fri, 3 Aug 2012 06:31:28 +0000 (GMT)" -->
<!-- isosent="20120803063128" -->
<!-- name="P. Martin" -->
<!-- email="mrsmiley98_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc2" -->
<!-- id="1911781296.302903.1343975488530.JavaMail.mail_at_webmail11" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="712D04E2-3D4B-426F-AFC0-14DE4DD05AC3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc2<br>
<strong>From:</strong> P. Martin (<em>mrsmiley98_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 02:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11342.php">Jeff Squyres: "[OMPI devel] 1.6.1rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2012, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New tarball issued in the usual place:
</span><br>
<p><p>Thanks for the link.  I tried it on OSX 10.8 Mountain Lion.  It works
<br>
with llvm-gcc from XCode-4.4, and it passes make check.
<br>
<p>It doesn't work with clang, though, which is the default compiler.
<br>
This issue was raised on Homebrew here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/mxcl/homebrew/issues/13837">https://github.com/mxcl/homebrew/issues/13837</a>
<br>
<p>If you read that you can see that your configure script adds a
<br>
option to CFLAGS, and in doing so strips a required -XClang
<br>
from my CFLAGS.   This is a rare issue, but there it is.  So using
<br>
clang I don't get past configure.
<br>
<p>Ok thanks again,
<br>
2bits @ github
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11363.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11361.php">Jeff Squyres: "Re: [OMPI devel] Broken password recovery functionality of the Trac system"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11342.php">Jeff Squyres: "[OMPI devel] 1.6.1rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>Reply:</strong> <a href="11366.php">Jeff Squyres: "[OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
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
