<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:15:41 2015" -->
<!-- isoreceived="20150721231541" -->
<!-- sent="Tue, 21 Jul 2015 16:15:24 -0700" -->
<!-- isosent="20150721231524" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA16osLqrKaGv2E0x99b9M-x9zXkCeAAO-RcJ6qepphPGxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17w-AseF3x8vZ0dfiQ5Ew9pKPsdq_=mAp-RjuYuqbinBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 19:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Paul Hargrove: "[hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>In reply to:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4520.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>I am glad you asked me to test widely, because I did find 2 compilers that
<br>
rejected my version with &quot;=r&quot; and one that generated bad code for that case.
<br>
However, the original &quot;=S&quot; works everywhere I could test (list of 26
<br>
compilers below), as did &quot;=D&quot; and &quot;=SD&quot;.
<br>
Since the &quot;=SD&quot; constraint gives the compiler more choices than the other
<br>
two, it should be preferred:
<br>
<p>#elif defined(HWLOC_X86_32_ARCH)
<br>
&nbsp;&nbsp;__asm__(
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;: &quot;=a&quot; (*eax), &quot;=SD&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=d&quot; (*edx)
<br>
&nbsp;&nbsp;: &quot;0&quot; (*eax), &quot;2&quot; (*ecx));
<br>
#else
<br>
<p>The tested platforms and compilers include the oldest and newest gcc, icc,
<br>
pgcc and suncc versions I could find with x86 support.
<br>
Unfortunately my Solaris/x86 platform is currently down.
<br>
<p>-Paul
<br>
<p>The list:
<br>
<p>Red Hat Linux 8.0 (32-bit host)
<br>
&nbsp;&nbsp;gcc 2.96
<br>
&nbsp;&nbsp;gcc (GCC) 3.2 20020903 (Red Hat Linux 8.0 3.2-7)
<br>
&nbsp;&nbsp;gcc (GCC) 6.0.0 20150706 [a development snapshot]
<br>
<p>OpenSuSE 10.2 (32-bit host)
<br>
&nbsp;&nbsp;gcc (GCC) 4.1.2 20061115 (prerelease) (SUSE Linux)
<br>
<p>Scientific Linux 5.5 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;pgi 9.0-4
<br>
&nbsp;&nbsp;pgi 13.10-0
<br>
&nbsp;&nbsp;pgi 14.10-0
<br>
&nbsp;&nbsp;icc (ICC) 11.1 20100414
<br>
&nbsp;&nbsp;icc (ICC) 14.0.2 20140120
<br>
<p>Scientific Linux 6.6 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-11)
<br>
&nbsp;&nbsp;clang version 3.4.2 (tags/RELEASE_34/dot2-final)
<br>
&nbsp;&nbsp;Open64 Compiler Suite: Version 4.5.2.1
<br>
&nbsp;&nbsp;Sun C 5.12 Linux_i386 2011/11/16 [a.k.a. Solaris Studio 12.3]
<br>
&nbsp;&nbsp;Sun C 5.13 Linux_i386 2014/10/20 [a.k.a. Solaris Studio 12.4]
<br>
<p>Scientific Linux 6.6 (32-bit host)
<br>
&nbsp;&nbsp;gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-11)
<br>
<p>Debian Jessie
<br>
&nbsp;&nbsp;gcc (Debian 4.9.2-10) 4.9.2
<br>
<p>Ubuntu 12.04.5 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;icc (ICC) 15.0.3 20150407
<br>
<p>Ubuntu 14.04.02 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;Sun Ceres C 5.10 Linux_i386 2009/03/06 [a.k.a. Studio Express 03/09]
<br>
&nbsp;&nbsp;Sun C 5.11 Linux_i386 2010/08/13 [a.k.a. Solaris Studio 12.2]
<br>
<p>Mac OS X 10.5 (64-bit host, but 32-bit is default target)
<br>
&nbsp;&nbsp;i686-apple-darwin9-gcc-4.0.1 (GCC) 4.0.1 (Apple Inc. build 5465)
<br>
<p>Mac OS X 10.6 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;gcc 4.2.1 (Apple Inc. build 5646)
<br>
<p>Mac OS X 10.8 (-m32 on 64-bit host)
<br>
&nbsp;&nbsp;Apple LLVM version 4.2 (clang-425.0.28) (based on LLVM 3.2svn)
<br>
&nbsp;&nbsp;i686-apple-darwin11-llvm-gcc-4.2 (GCC) 4.2.1 (Based on Apple Inc. build
<br>
5658) (LLVM build 2336.11.00)
<br>
<p>NetBSD 6.1.5 (32-bit host)
<br>
&nbsp;&nbsp;gcc (NetBSD nb2 20110806) 4.5.3
<br>
<p>OpenBSD 5.7 (32-bit host)
<br>
&nbsp;&nbsp;gcc (GCC) 4.2.1 20070719
<br>
<p>FreeBSD 10.1 (32-bit host)
<br>
&nbsp;&nbsp;FreeBSD clang version 3.4.1 (tags/RELEASE_34/dot1-final 208032) 20140512
<br>
<p><p><p><p>On Tue, Jul 21, 2015 at 11:22 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have anywhere near the testing coverage for Linux on x86 as I do
</span><br>
<span class="quotelev1">&gt; on x86-64.
</span><br>
<span class="quotelev1">&gt; However, I will see what I can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 21, 2015 at 4:24 AM, Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Could you test this new asm on all your systems/compilers? I don't want
</span><br>
<span class="quotelev2">&gt;&gt; break that fragile code again.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 21 juillet 2015 08:17:06 UTC+02:00, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oops - send the wrong asm code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While &quot;=S&quot; is correct for the second constraint, I meant to send a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version that had &quot;=r&quot; because it allows the compiler more choices.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jul 20, 2015 at 11:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGI-14.10 for 32-bit targets fails in the same manner as 13.7, 13.9 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 13.10.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe the following inline x86 asm is correct and more robust than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the existing code that pgi appears to reject:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #elif defined(HWLOC_X86_32_ARCH)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   __asm__(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   &quot;xchg %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   &quot;cpuid\n\t&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   &quot;xchg %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   : &quot;=a&quot; (*eax), &quot;=S&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=d&quot; (*edx)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   : &quot;0&quot; (*eax), &quot;2&quot; (*ecx));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #else
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Jul 20, 2015 at 9:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pavan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can confirm that I see the same with PGI-13.10.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a couple systems with 14.x installed but neither with 32-bit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am downloading 32-bit support now (which I am assuming will work
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with the existing license) and will report back.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Jul 20, 2015 at 9:00 PM, Balaji, Pavan &lt;balaji_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The hwloc-1.11 build seems to fail with the pgi compiler on 32-bit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; platforms.  I see the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   CC       topology-x86.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC-F-0000-Internal compiler error. unable to allocate a register
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    8 (topology-x86.c: 87)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGC/x86 Linux 13.9-0: compilation aborted
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I only tried pgi-13.7 and 13.9 (I don't have access to later compiler
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; versions).  It looks like the compiler doesn't like the assembly code in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; include/private/cpuid-x86.h for 32-bit platforms.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   -- Pavan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4505.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4505.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Paul Hargrove: "[hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>In reply to:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4520.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
