<?
$subject_val = "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 08:46:30 2010" -->
<!-- isoreceived="20101111134630" -->
<!-- sent="Thu, 11 Nov 2010 14:46:25 +0100" -->
<!-- isosent="20101111134625" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751" -->
<!-- id="4CDBF3B1.8050304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011111415.34902.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 08:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1475.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1473.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>In reply to:</strong> <a href="1473.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached patch fixed it for me on F12. Some libnuma helpers were
<br>
clearing too many bytes when resetting libnuma mask.
<br>
<p>Brice
<br>
<p><p><p>Le 11/11/2010 14:15, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this one is tricky. I don't see this crash when compiling by hand (./configure 
</span><br>
<span class="quotelev1">&gt; &amp;&amp; make &amp;&amp; make check). I see the crash only when building with rpmbuild. It 
</span><br>
<span class="quotelev1">&gt; happens both with 2694 and 2751.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild is applying automatically CFLAGS flags. Finally, I have reduced it to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd hwloc-1.2a1r2751/
</span><br>
<span class="quotelev1">&gt; export CFLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; ./configure &amp;&amp; make &amp;&amp; make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine with -O1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try if you can reproduce the problem with
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; $make clean &amp;&amp; export CFLAGS='-g -O2' &amp;&amp; ./configure &amp;&amp; make &amp;&amp; make check
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is gdb output:
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; gdb /tmp/J/hwloc-1.2a1r2751/tests/.libs/lt-linux-libnuma
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /tmp/J/hwloc-1.2a1r2751/tests/.libs/lt-linux-libnuma 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff7deb632 in hwloc_get_type_depth (topology=0x0, type=HWLOC_OBJ_NODE) 
</span><br>
<span class="quotelev1">&gt; at traversal.c:17
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the feeling it's gcc bug. Any feedback?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, November 10, 2010 07:33:19 pm Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I don't see any change in this test between 2694 and 2751. Do you get a
</span><br>
<span class="quotelev2">&gt;&gt; better backtrace if you compile in debug mode (and/or with CFLAGS=&quot;-g
</span><br>
<span class="quotelev2">&gt;&gt; -O0&quot;) or with gdb?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 10/11/2010 15:56, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just a quick check.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see following when running make check for hwloc-1.2a1r2694
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PASS: hwloc_insert_misc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** buffer overflow detected ***:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__fortify_fail+0x37)[0x30cfcf7707]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6[0x30cfcf5720]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libnuma[0x401ae9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x30cfc1eb1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libnuma[0x401059]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Memory map: ========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00400000-00404000 r-xp 00000000 fd:00 1230911
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 00603000-00604000 rw-p 00003000 fd:00 1230911
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694/tests/.libs/lt-linux-libnum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a 019a6000-019c7000 rw-p 00000000 00:00 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [heap]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30cf800000-30cf81e000 r-xp 00000000 08:02 48991
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/ld-2.11.2.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's running just fine when using hwloc-1.2a1r2751
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you fixed this test in hwloc-1.2a1r2751?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jirka
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1474/fix_libnuma_helper.patch">fix_libnuma_helper.patch</a>
</ul>
<!-- attachment="fix_libnuma_helper.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1475.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1473.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
<li><strong>In reply to:</strong> <a href="1473.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-1.2a1r2694 and hwloc-1.2a1r2751"</a>
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
