<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 07:24:54 2015" -->
<!-- isoreceived="20150721112454" -->
<!-- sent="Tue, 21 Jul 2015 13:24:37 +0200" -->
<!-- isosent="20150721112437" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="0F819589-BD95-4AAF-A9E6-14B982796C34_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA16MzKXjpg1zQ8OCfer6YPxhjzSUXAiSmhxBzEAaOjmnuQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 07:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4506.php">Balaji, Pavan: "[hwloc-devel] whelk warning"</a>
<li><strong>Previous message:</strong> <a href="4504.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
Could you test this new asm on all your systems/compilers? I don't want break that fragile code again.
<br>
Brice
<br>
<p>Le 21 juillet 2015 08:17:06 UTC+02:00, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;Oops - send the wrong asm code.
</span><br>
<span class="quotelev1">&gt;While &quot;=S&quot; is correct for the second constraint, I meant to send a
</span><br>
<span class="quotelev1">&gt;version
</span><br>
<span class="quotelev1">&gt;that had &quot;=r&quot; because it allows the compiler more choices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Jul 20, 2015 at 11:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PGI-14.10 for 32-bit targets fails in the same manner as 13.7, 13.9
</span><br>
<span class="quotelev1">&gt;and
</span><br>
<span class="quotelev2">&gt;&gt; 13.10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the following inline x86 asm is correct and more robust
</span><br>
<span class="quotelev1">&gt;than the
</span><br>
<span class="quotelev2">&gt;&gt; existing code that pgi appears to reject:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #elif defined(HWLOC_X86_32_ARCH)
</span><br>
<span class="quotelev2">&gt;&gt;   __asm__(
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;xchg %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;cpuid\n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;xchg %%ebx,%1\n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   : &quot;=a&quot; (*eax), &quot;=S&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=d&quot; (*edx)
</span><br>
<span class="quotelev2">&gt;&gt;   : &quot;0&quot; (*eax), &quot;2&quot; (*ecx));
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 20, 2015 at 9:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can confirm that I see the same with PGI-13.10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a couple systems with 14.x installed but neither with 32-bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am downloading 32-bit support now (which I am assuming will work
</span><br>
<span class="quotelev1">&gt;with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the existing license) and will report back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jul 20, 2015 at 9:00 PM, Balaji, Pavan &lt;balaji_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The hwloc-1.11 build seems to fail with the pgi compiler on 32-bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; platforms.  I see the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC       topology-x86.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC-F-0000-Internal compiler error. unable to allocate a register
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  8 (topology-x86.c: 87)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGC/x86 Linux 13.9-0: compilation aborted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I only tried pgi-13.7 and 13.9 (I don't have access to later
</span><br>
<span class="quotelev1">&gt;compiler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions).  It looks like the compiler doesn't like the assembly
</span><br>
<span class="quotelev1">&gt;code in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include/private/cpuid-x86.h for 32-bit platforms.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   -- Pavan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4505.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4505.php</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4506.php">Balaji, Pavan: "[hwloc-devel] whelk warning"</a>
<li><strong>Previous message:</strong> <a href="4504.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4507.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
