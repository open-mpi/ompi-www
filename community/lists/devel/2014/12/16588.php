<?
$subject_val = "Re: [OMPI devel] 1.8.4rc4 now out for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 01:52:48 2014" -->
<!-- isoreceived="20141215065248" -->
<!-- sent="Sun, 14 Dec 2014 22:52:45 -0800" -->
<!-- isosent="20141215065245" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc4 now out for testing" -->
<!-- id="CAAvDA15f6HpsUtNtdjY_kw-=TROrnys4g2peB7dn0QjVbMyiqw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] 1.8.4rc4 now out for testing" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc4 now out for testing<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 01:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16589.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Reply:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My testing on 1.8.4rc4 is not quite done, but is getting close.
<br>
With two exceptions, so far all looks good to me on almost 60 different
<br>
platforms.
<br>
<p>I've retested on my Solaris systems and saw none of the issues I had with
<br>
rc3.
<br>
The x86-64/Linux system with mtl:psm is no longer giving a SEGV at exit.
<br>
<p>My QEMU-based Linux/ARM and Linux/MIPS testers were OK with rc3, but I've
<br>
not yet completed testing rc4 (too slow).
<br>
<p>The &quot;two exceptions&quot;:
<br>
<p>#1
<br>
I *am* still manually passing --without-xpmem on the SGI UV.
<br>
If I don't do so then the build fails as describe in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16520.php">http://www.open-mpi.org/community/lists/devel/2014/12/16520.php</a>
<br>
<p>#2
<br>
Solaris-10/SPARC and &quot;--enable-static --disable-shared&quot; appears broken for
<br>
C++ apps (but OK for C).
<br>
I will report in more details when I have more information.
<br>
<p>-Paul
<br>
<p>On Sat, Dec 13, 2014 at 3:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've rolled up the bug fixes so far, including the thread-multiple
</span><br>
<span class="quotelev1">&gt; performance fix. So please give this one a whirl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16586.php">http://www.open-mpi.org/community/lists/devel/2014/12/16586.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16589.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16587.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Maybe in reply to:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>Reply:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
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
