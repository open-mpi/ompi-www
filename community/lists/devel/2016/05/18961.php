<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 20:46:18 2016" -->
<!-- isoreceived="20160511004618" -->
<!-- sent="Tue, 10 May 2016 17:46:12 -0700" -->
<!-- isosent="20160511004612" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32" -->
<!-- id="CAAvDA16M02UpKExbKm85KT+hSApfLznmUuR7ZaSfxRpPgSxGtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA1448ddXMK3DVrC2G+NgvWdhmMb1UTDqVkt2C9241zW75g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 20:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Previous message:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Of the issues I have reported so far, this is the only one I am aware of
<br>
that has not yet resulted in a PR (or at least an issue).
<br>
The patch to fix this issue appears below.
<br>
<p>-Paul
<br>
<p>--- a/opal/include/opal/sys/ia32/timer.h
<br>
+++ b/opal/include/opal/sys/ia32/timer.h
<br>
@@ -35,9 +35,9 @@ opal_sys_timer_get_cycles(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tmp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
-                         &quot;xchg{l} {%%}ebx, %1\n&quot;
<br>
+                         &quot;xchgl %%ebx, %1\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;cpuid\n&quot;
<br>
-                         &quot;xchg{l} {%%}ebx, %1\n&quot;
<br>
+                         &quot;xchgl %%ebx, %1\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;rdtsc\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=A&quot;(ret), &quot;=r&quot;(tmp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:: &quot;ecx&quot;);
<br>
<p><p>On Mon, May 2, 2016 at 1:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The 2.0.0rc2 tarball fails to compile on Linux/x86-64 with the Sun/Oracle
</span><br>
<span class="quotelev1">&gt; Studio compilers when using &quot;-m32&quot;.
</span><br>
<span class="quotelev1">&gt; I have reproduced with the 12.2 and 12.4 compiler releases (I have others,
</span><br>
<span class="quotelev1">&gt; but only tested those 2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error appears to be the same one I previously reported multiple times.
</span><br>
<span class="quotelev1">&gt; The latest report was in
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/07/17585.php">https://www.open-mpi.org/community/lists/devel/2015/07/17585.php</a>
</span><br>
<span class="quotelev1">&gt; FWIW: that posting includes a 2-line patch that fixes the problem for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18962.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>Previous message:</strong> <a href="18960.php">Ralph Castain: "Re: [OMPI devel] Jenkins mindist test now failing in 2.x"</a>
<li><strong>In reply to:</strong> <a href="18874.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Linux w/ studio 12.x and -m32"</a>
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
