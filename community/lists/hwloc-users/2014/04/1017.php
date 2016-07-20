<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 06:23:26 2014" -->
<!-- isoreceived="20140401102326" -->
<!-- sent="Tue, 1 Apr 2014 12:23:24 +0200" -->
<!-- isosent="20140401102324" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released" -->
<!-- id="CALT_uBTV6pNKY9Mod3H62dOgdft0uTquZs8P8YzuQdyOAguLHw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="533A7ECC.7000002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 06:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I'm sorry for the double report. Now when you wrote it I remember that I
<br>
have reported it:-)
<br>
<p>Thanks for fixing the man page.
<br>
<p>I have one more question: RHEL has splitted hwloc into 2 subpackages
<br>
* hwloc
<br>
* hwloc-gui (it contains merely lstopo)
<br>
<p>The former one does not need any X11 dependencies.
<br>
<p>I have now tried to do the same for Fedora but it's not so easy. On Fedora
<br>
I build the package with libXNVCtrl but libXNVCtrl needs libX11. So even
<br>
CLI tools need libX11:
<br>
<p>ldd lstopo-no-graphics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffbf1cb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libhwloc.so.5 =&gt; /dev/shm/usr/lib/libhwloc.so.5 (0x00007f7a5277c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /lib64/libnuma.so.1 (0x0000003c06a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpciaccess.so.0 =&gt; /lib64/libpciaccess.so.0 (0x0000003c05e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXNVCtrl.so.0 =&gt; /lib64/libXNVCtrl.so.0 (0x00007f7a52545000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXext.so.6 =&gt; /lib64/libXext.so.6 (0x0000003c07a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libX11.so.6 =&gt; /lib64/libX11.so.6 (0x0000003c07600000)
<br>
<p>Is there any way around? (On RHEL it's easy. RHEL does not provide
<br>
libXNVCtrl at all so the package is built without it.
<br>
Then lstopo-no-graphics does not depend on libX11)
<br>
<p>I currently see two options:
<br>
A) Accept the fact that lstopo-no-graphics depends on X11. The number of
<br>
dependencies for lstopo (from hwloc-gui package) is still much lower
<br>
compared to  lstopo-no-graphics
<br>
B) Compile it without libXNVCtrl but it will reduce the functionality.
<br>
<p>Is there any 3rd option? I guess not. It seems like A) is the best choice
<br>
for Fedora.
<br>
<p>Any ideas on that?
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><p><p><p>On Tue, Apr 1, 2014 at 10:54 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 01/04/2014 10:43, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see some compiler warnings when building rpm package for Fedora:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c:338:30: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c:343:28: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c: In function 'hwloc_look_windows':
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c:500:36: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt; &gt; topology-windows.c:501:38: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You already reported those on February 13th and we replied that they are
</span><br>
<span class="quotelev1">&gt; harmless :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, these warnings come from make check under tests/ports when
</span><br>
<span class="quotelev1">&gt; verifying that the Windows backend builds fine using &quot;emulated&quot; Windows
</span><br>
<span class="quotelev1">&gt; headers under Linux. Something that for sure cannot be perfect. If you
</span><br>
<span class="quotelev1">&gt; have a way to ignore make check warnings, at least under tests/ports,
</span><br>
<span class="quotelev1">&gt; that'd be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_backends.c: In function 'main':
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_backends.c:42:10: warning: ignoring return value of 'mkstemp',
</span><br>
<span class="quotelev2">&gt; &gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another warning from make check. We mostly don't care, I'll see if I can
</span><br>
<span class="quotelev1">&gt; fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am fixing the manpage problem and backporting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
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
