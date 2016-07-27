<?
$subject_val = "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 08:15:44 2010" -->
<!-- isoreceived="20101111131544" -->
<!-- sent="Thu, 11 Nov 2010 14:15:34 +0100" -->
<!-- isosent="20101111131534" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751" -->
<!-- id="201011111415.34902.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CDAE56F.4070406_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 08:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>Previous message:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>Reply:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>this one is tricky. I don't see this crash when compiling by hand (./configure 
<br>
&amp;&amp; make &amp;&amp; make check). I see the crash only when building with rpmbuild. It 
<br>
happens both with 2694 and 2751.
<br>
<p>rpmbuild is applying automatically CFLAGS flags. Finally, I have reduced it to
<br>
<p>cd hwloc-1.2a1r2751/
<br>
export CFLAGS='-O2'
<br>
./configure &amp;&amp; make &amp;&amp; make check
<br>
<p>It works fine with -O1
<br>
<p>Please try if you can reproduce the problem with
<br>
=======================================================
<br>
$make clean &amp;&amp; export CFLAGS='-g -O2' &amp;&amp; ./configure &amp;&amp; make &amp;&amp; make check
<br>
=======================================================
<br>
<p><p>This is gdb output:
<br>
=====================================================
<br>
gdb /tmp/J/hwloc-1.2a1r2751/tests/.libs/lt-linux-libnuma
<br>
(gdb) run
<br>
Starting program: /tmp/J/hwloc-1.2a1r2751/tests/.libs/lt-linux-libnuma 
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff7deb632 in hwloc_get_type_depth (topology=0x0, type=HWLOC_OBJ_NODE) 
<br>
at traversal.c:17
<br>
=====================================================
<br>
<p>I have the feeling it's gcc bug. Any feedback?
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>On Wednesday, November 10, 2010 07:33:19 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I don't see any change in this test between 2694 and 2751. Do you get a
</span><br>
<span class="quotelev1">&gt; better backtrace if you compile in debug mode (and/or with CFLAGS=&quot;-g
</span><br>
<span class="quotelev1">&gt; -O0&quot;) or with gdb?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 10/11/2010 15:56, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; just a quick check.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see following when running make check for hwloc-1.2a1r2694
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================
</span><br>
<span class="quotelev2">&gt; &gt; PASS: hwloc_insert_misc
</span><br>
<span class="quotelev2">&gt; &gt; *** buffer overflow detected ***:
</span><br>
<span class="quotelev2">&gt; &gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev2">&gt; &gt; a terminated
</span><br>
<span class="quotelev2">&gt; &gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__fortify_fail+0x37)[0x30cfcf7707]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6[0x30cfcf5720]
</span><br>
<span class="quotelev2">&gt; &gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-
</span><br>
<span class="quotelev2">&gt; &gt; libnuma[0x401ae9]
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x30cfc1eb1d]
</span><br>
<span class="quotelev2">&gt; &gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-
</span><br>
<span class="quotelev2">&gt; &gt; libnuma[0x401059]
</span><br>
<span class="quotelev2">&gt; &gt; ======= Memory map: ========
</span><br>
<span class="quotelev2">&gt; &gt; 00400000-00404000 r-xp 00000000 fd:00 1230911
</span><br>
<span class="quotelev2">&gt; &gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev2">&gt; &gt; a 00603000-00604000 rw-p 00003000 fd:00 1230911
</span><br>
<span class="quotelev2">&gt; &gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev2">&gt; &gt; a 019a6000-019c7000 rw-p 00000000 00:00 0
</span><br>
<span class="quotelev2">&gt; &gt; [heap]
</span><br>
<span class="quotelev2">&gt; &gt; 30cf800000-30cf81e000 r-xp 00000000 08:02 48991
</span><br>
<span class="quotelev2">&gt; &gt; /lib64/ld-2.11.2.so
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's running just fine when using hwloc-1.2a1r2751
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Have you fixed this test in hwloc-1.2a1r2751?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; Jirka
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>Previous message:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>Reply:</strong> <a href="1474.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
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
