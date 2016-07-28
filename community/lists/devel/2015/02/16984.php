<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 03:24:41 2015" -->
<!-- isoreceived="20150213082441" -->
<!-- sent="Fri, 13 Feb 2015 00:24:39 -0800" -->
<!-- isosent="20150213082439" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA15dJ5o7c5MUFHhM2+h5FV6cRYSQ8nx17a3QaNjnOeBUeA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150213074921.GA11899_at_paradies.suse.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-13 03:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16985.php">Jeff Squyres (jsquyres): "[OMPI devel] PSA: Github 2-factor authentication"</a>
<li><strong>Previous message:</strong> <a href="16983.php">Philipp Thomas: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16983.php">Philipp Thomas: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Philipp,
<br>
<p>You are right that libtool doesn't need to put &quot;/usr/lib64/libltdl.so&quot; in
<br>
the compiler command line as the *only* solution.  I only meant that doing
<br>
so was preferred over the observed behavior of putting the full path of a
<br>
library for the wrong architecture.  You are correct that passing &quot;-lltdl&quot;
<br>
to the compiler unchanged would also be correct, but that is NOT what
<br>
libtool was doing.
<br>
<p>What I observed is that make passed &quot;-lltdl&quot; to libtool, but libtool passed
<br>
&quot;/usr/lib/libltdl.so&quot; to the compiler *instead* of passing -lltdl.
<br>
<p>You can see the libtool command and the compiler command it invoked in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16881.php">http://www.open-mpi.org/community/lists/devel/2015/02/16881.php</a>
<br>
<p><p>Even if libtool had passed *both* &quot;/usr/lib/libltdl.so&quot; and &quot;-lltdl&quot; this
<br>
would still have been erroneous because the explicitly named .so is for the
<br>
wrong architecture.  That is why the error message is
<br>
&nbsp;&nbsp;&nbsp;/usr/lib/libltdl.so: could not read symbols: File in wrong format
<br>
Rather than something about unresolved symbols that should have been in
<br>
libltdl.
<br>
<p><p>I should note that I saw this on both a SLES-11.1 system and a Scientific
<br>
Linux 5.5 system, but in both cases only with Portland Group compilers
<br>
(Gnu, Intel, PathScale and Open64 compilers worked fine).  So, this is not
<br>
a SUSE-specific issue.
<br>
<p>-Paul
<br>
<p>On Thu, Feb 12, 2015 at 11:49 PM, Philipp Thomas &lt;pth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt; sorry for chiming in so late, but this list is on low priority for me at
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Paul Hargrove (phhargrove_at_[hidden]) [20150202 22:58]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; is erroneous is that /usr/lib contains 32-bit libs (and target is
</span><br>
<span class="quotelev1">&gt; 64-bit).
</span><br>
<span class="quotelev2">&gt; &gt; Therefore libtool should have replaced -lltdl with /usr/lib64/libltdl.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't need to do so. If only -lltdl is passed, the linker will by
</span><br>
<span class="quotelev1">&gt; default search /usr/lib64. As I'm SUSE's maintainer of libtool (and openMPI
</span><br>
<span class="quotelev1">&gt; :) maintainer, I'll gladly try to help with any issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Philipp
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16983.php">http://www.open-mpi.org/community/lists/devel/2015/02/16983.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16985.php">Jeff Squyres (jsquyres): "[OMPI devel] PSA: Github 2-factor authentication"</a>
<li><strong>Previous message:</strong> <a href="16983.php">Philipp Thomas: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16983.php">Philipp Thomas: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
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
