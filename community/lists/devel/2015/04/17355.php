<?
$subject_val = "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 05:35:14 2015" -->
<!-- isoreceived="20150424093514" -->
<!-- sent="Fri, 24 Apr 2015 15:05:13 +0530" -->
<!-- isosent="20150424093513" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;maybe&amp;quot; issue in 1.8.5rc[23]" -->
<!-- id="CAMQsnoad4O8KDdrWYnkwMUhymJreMpiNi5DEbrESgDHKjO-KzA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17xZw-OV74jWWvBh_0m+exEg_W5uq3LgPAmiZG62FROFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 05:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17356.php">Paul Hargrove: "[OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Previous message:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>In reply to:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I remember this one. Its a bug in that specific version of the
<br>
compiler. I had reported it to the compiler team a couple of years back.
<br>
<p>Quoting from the email I sent them:
<br>
The &quot;stw     r0,0(r31)&quot; probably overwrites the previous stack pointer ?
<br>
<p>static inline int opal_atomic_cmpset_32(volatile int32_t *addr,
<br>
10000580:       94 21 ff c0     stwu    r1,-64(r1)
<br>
10000584:       93 e1 00 3c     stw     r31,60(r1)
<br>
10000588:       7c 3f 0b 78     mr      r31,r1
<br>
1000058c:       90 7f 00 24     stw     r3,36(r31)
<br>
10000590:       90 9f 00 28     stw     r4,40(r31)
<br>
10000594:       90 bf 00 2c     stw     r5,44(r31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t oldval, int32_t newval)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int32_t ret;
<br>
<p>&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (
<br>
10000598:       80 9f 00 28     lwz     r4,40(r31)
<br>
1000059c:       80 7f 00 2c     lwz     r3,44(r31)
<br>
100005a0:       80 1f 00 24     lwz     r0,36(r31)
<br>
*100005a4:       90 1f 00 00     stw     r0,0(r31)*
<br>
100005a8:       90 1f 00 04     stw     r0,4(r31)
<br>
100005ac:       90 9f 00 08     stw     r4,8(r31)
<br>
100005b0:       90 7f 00 0c     stw     r3,12(r31)
<br>
100005b4:       90 1f 00 10     stw     r0,16(r31)
<br>
100005b8:       80 7f 00 04     lwz     r3,4(r31)
<br>
100005bc:       7c 80 18 28     lwarx   r4,0,r3
<br>
100005c0:       80 1f 00 08     lwz     r0,8(r31)
<br>
100005c4:       7c 04 00 00     cmpw    r4,r0
<br>
100005c8:       90 9f 00 14     stw     r4,20(r31)
<br>
100005cc:       90 7f 00 04     stw     r3,4(r31)
<br>
100005d0:       90 1f 00 08     stw     r0,8(r31)
<br>
100005d4:       40 82 00 1c     bne-    100005f0
<br>
&lt;opal_atomic_cmpset_32+0x70&gt;
<br>
100005d8:       80 1f 00 0c     lwz     r0,12(r31)
<br>
100005dc:       80 7f 00 04     lwz     r3,4(r31)
<br>
100005e0:       7c 00 19 2d     stwcx.  r0,0,r3
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Fri, Apr 24, 2015 at 5:06 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Exhibit 1: the smoking gun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x00000fffa4d6f184 in opal_atomic_cmpset_acq_32 (addr=Cannot access
</span><br>
<span class="quotelev1">&gt; memory at address 0xd8
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-1.8.5rc3-linux-ppc64-xlc-11.1/openmpi-1.8.5rc3/opal/include/opal/sys/powerpc/atomic.h:158
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, this is a new symptom of the known inability of this compiler to get
</span><br>
<span class="quotelev1">&gt; the inline asm right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the false alarm,
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2015 at 4:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a system w/ xlc-11.1.
</span><br>
<span class="quotelev2">&gt;&gt; It has essentially always failed &quot;make check&quot; in a LP64 build due to xlc
</span><br>
<span class="quotelev2">&gt;&gt; botching the atomics.
</span><br>
<span class="quotelev2">&gt;&gt; So, when it failed with 1.8.5.rc2 I didn't look closely.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today it has failed with rc3 and I *did* look closely and here is what I
</span><br>
<span class="quotelev2">&gt;&gt; see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: line 5: 39766 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev2">&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also see the same in the rc2 results I hadn't examined closely before.
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile the rc1 failure was the known atomics-related one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, UNLESS I find that the dlopen_test failure is related to the atomics
</span><br>
<span class="quotelev2">&gt;&gt; or some other problem specific to xlc, this may be a new issue related to
</span><br>
<span class="quotelev2">&gt;&gt; the elimination of the built-in libltdl.  Note that this system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's hoping this is a new symptom, and not a new problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17352.php">http://www.open-mpi.org/community/lists/devel/2015/04/17352.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17355/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17356.php">Paul Hargrove: "[OMPI devel] Dead code in opal_config_asm.4"</a>
<li><strong>Previous message:</strong> <a href="17354.php">Paul Hargrove: "[OMPI devel] Unsolicited code review of new distscript.sh"</a>
<li><strong>In reply to:</strong> <a href="17352.php">Paul Hargrove: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
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
