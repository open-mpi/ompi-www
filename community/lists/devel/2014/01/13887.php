<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 16:16:28 2014" -->
<!-- isoreceived="20140123211628" -->
<!-- sent="Thu, 23 Jan 2014 13:16:26 -0800" -->
<!-- isosent="20140123211626" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA15aAEMfU9G0a=YuV5DytdV7kO-HnRbQsfHiEvNgHk4ycg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17xpRFpJVnF8H3wXCN8wVU7wKJdZjPHseMW5ydQWKa=rA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 16:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<li><strong>In reply to:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some progress:
<br>
<p>I fixed IA64.asm but still saw failures.
<br>
I realized I'd not checked the ia64/atomic.h file.
<br>
<p>Lo and behold the origin of the bogus &quot;sxt4&quot; is a pair of improper casts,
<br>
removed by the following:
<br>
--- opal/include/opal/sys/ia64/atomic.h~        2014-01-23
<br>
13:04:03.000000000 -0800
<br>
+++ opal/include/opal/sys/ia64/atomic.h 2014-01-23 13:04:42.000000000 -0800
<br>
@@ -119,7 +119,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (&quot;cmpxchg8.acq %0=[%1],%2,ar.ccv&quot;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;=r&quot;(ret) : &quot;r&quot;(addr), &quot;r&quot;(newval) : &quot;memory&quot;);
<br>
<p>-    return ((int32_t)ret == oldval);
<br>
+    return (ret == oldval);
<br>
&nbsp;}
<br>
<p><p>@@ -132,7 +132,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (&quot;cmpxchg8.rel %0=[%1],%2,ar.ccv&quot;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;=r&quot;(ret) : &quot;r&quot;(addr), &quot;r&quot;(newval) : &quot;memory&quot;);
<br>
<p>-    return ((int32_t)ret == oldval);
<br>
+    return (ret == oldval);
<br>
&nbsp;}
<br>
<p>&nbsp;#endif /* OMPI_GCC_INLINE_ASSEMBLY */
<br>
<p><p>I will retest ASAP and report with, I hope, an attachment to fix both
<br>
IA64.asm and ia64/atomic.h
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 4:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 2:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My ia64 asm is a bit rusty, but I'll give a quick look if/when I can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had a look (in v1.7) and this is what I see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $cat -n IA64.asm | grep -A14 opal_atomic_cmpset_acq_64:
</span><br>
<span class="quotelev1">&gt;     70  opal_atomic_cmpset_acq_64:
</span><br>
<span class="quotelev1">&gt;     71          .prologue
</span><br>
<span class="quotelev1">&gt;     72          .body
</span><br>
<span class="quotelev1">&gt;     73          mov ar.ccv=r33;;
</span><br>
<span class="quotelev1">&gt;     74          cmpxchg8.acq r32=[r32],r34,ar.ccv
</span><br>
<span class="quotelev1">&gt;     75          ;;
</span><br>
<span class="quotelev1">&gt;     76          sxt4 r32 = r32
</span><br>
<span class="quotelev1">&gt;     77          ;;
</span><br>
<span class="quotelev1">&gt;     78          cmp.eq p6, p7 = r33, r32
</span><br>
<span class="quotelev1">&gt;     79          ;;
</span><br>
<span class="quotelev1">&gt;     80          (p6) addl r8 = 1, r0
</span><br>
<span class="quotelev1">&gt;     81          (p7) mov r8 = r0
</span><br>
<span class="quotelev1">&gt;     82          br.ret.sptk.many b0
</span><br>
<span class="quotelev1">&gt;     83          ;;
</span><br>
<span class="quotelev1">&gt;     84          .endp opal_atomic_cmpset_acq_64#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The (approximate and non-atomic) C equivalent is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // r32 = address
</span><br>
<span class="quotelev1">&gt; // r33 = oldvalue
</span><br>
<span class="quotelev1">&gt; // r34 = newvalue
</span><br>
<span class="quotelev1">&gt; int opal_atomic_cmpset_acq_64(int64_t r32, int64_t r33, int64 r34) {
</span><br>
<span class="quotelev1">&gt;    int64_t ccv = r33; // L73
</span><br>
<span class="quotelev1">&gt;    if (*(int64_t *)r32 == ccv) *(int64_t *)r32 = r34; // L74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    r32 = (int64_t)(int32_t)r32; // L76 = sign-extend 32-&gt;64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    bool p6, p7;
</span><br>
<span class="quotelev1">&gt;    p7 = !(p6 = (r33 == r32)); // L78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    const int r0 = 0;
</span><br>
<span class="quotelev1">&gt;    int r8;
</span><br>
<span class="quotelev1">&gt;    if (p6) r8 = 1 + r0; // L80
</span><br>
<span class="quotelev1">&gt;    if (p7) r8 = r0; // L81
</span><br>
<span class="quotelev1">&gt;    return r8; // L82
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is fine except that line 76 is totally wrong!!
</span><br>
<span class="quotelev1">&gt; The &quot;sxt4&quot; instruction is &quot;sign-extend from 4 bytes to 8 bytes&quot;.
</span><br>
<span class="quotelev1">&gt; Thus the upper 32-bits of the value read from memory are lost!
</span><br>
<span class="quotelev1">&gt; Unless the upper 33 bits off r33 (oldvalue) are all 0s or all 1s, the
</span><br>
<span class="quotelev1">&gt; comparison on line 78 MUST fail.
</span><br>
<span class="quotelev1">&gt; This explains the hang, as the lifo push will loop indefinitely waiting
</span><br>
<span class="quotelev1">&gt; for the success of this cmpset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the same erroneous instruction is also present in the _rel variant
</span><br>
<span class="quotelev1">&gt; (at line 94).
</span><br>
<span class="quotelev1">&gt; The trunk has the same issue.
</span><br>
<span class="quotelev1">&gt; This code has not changed at all since IA64.asm was added way back in
</span><br>
<span class="quotelev1">&gt; r4471.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I won't have access to the IA64 platform again until tomorrow AM.
</span><br>
<span class="quotelev1">&gt; So, testing my hypothesis will need to wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW:
</span><br>
<span class="quotelev1">&gt; IFF I am right about the source of this problem, then it would be
</span><br>
<span class="quotelev1">&gt; beneficial to have (and I may contribute) a stronger test (for &quot;make
</span><br>
<span class="quotelev1">&gt; check&quot;) that would detect this sort of bug in the atomics (specifically
</span><br>
<span class="quotelev1">&gt; look for both false-positive and false-negative return value from 64-bit
</span><br>
<span class="quotelev1">&gt; cmpset operations with values satisfying a range of &quot;corner cases&quot;).  I
</span><br>
<span class="quotelev1">&gt; think I have single-bit and double-bit &quot;marching tests&quot; for cmpset in my
</span><br>
<span class="quotelev1">&gt; own arsenal of tests for GASNet's atomics.  If I don't have time to
</span><br>
<span class="quotelev1">&gt; contribute a complete test, I can at least contribute that logic for
</span><br>
<span class="quotelev1">&gt; somebody else to port to the OPAL atomics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.:
</span><br>
<span class="quotelev1">&gt; The cmpxchgN for N in 1,2,4 are documented as ZERO-extending their loads
</span><br>
<span class="quotelev1">&gt; to 64-bits.
</span><br>
<span class="quotelev1">&gt; So, there is a slim chance that the sxt4 actually was intended for the
</span><br>
<span class="quotelev1">&gt; 32-bit cmpset code.
</span><br>
<span class="quotelev1">&gt; However, since the comparison used there is a &quot;cmp4.eq&quot; the &quot;sxt4&quot; would
</span><br>
<span class="quotelev1">&gt; still not be needed.
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13888.php">Paul Hargrove: "Re: [OMPI devel] vader on SGI UV?"</a>
<li><strong>Previous message:</strong> <a href="13886.php">Paul Hargrove: "[OMPI devel] vader on SGI UV?"</a>
<li><strong>In reply to:</strong> <a href="13853.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
