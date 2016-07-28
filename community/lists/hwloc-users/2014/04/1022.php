<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 15:18:08 2014" -->
<!-- isoreceived="20140401191808" -->
<!-- sent="Tue, 1 Apr 2014 21:18:06 +0200" -->
<!-- isosent="20140401191806" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released" -->
<!-- id="CALT_uBRaJ82k7z7KpbqOc2141p3e1ARz6-4=MPDbb5QvwEQ8YA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="533A9BBC.8080507_at_inria.fr" -->
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
<strong>Date:</strong> 2014-04-01 15:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>thanks for pointing this out! Using the plugins is the way to go.
<br>
<p>Jirka
<br>
<p><p>On Tue, Apr 1, 2014 at 12:58 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  That's exactely why we have plugin support. You can pass
</span><br>
<span class="quotelev1">&gt; --enable-plugins so that all plugin-able backends are built as separate
</span><br>
<span class="quotelev1">&gt; hwloc_foo.so files that are used only when available/loaded at runtime.
</span><br>
<span class="quotelev1">&gt; Then you can put them in different packages and hwloc will only load the
</span><br>
<span class="quotelev1">&gt; available ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, if libxnvctrl is the only lib that you don't want libhwloc
</span><br>
<span class="quotelev1">&gt; to depends against, you put hwloc_gl.so in a separate package (you can even
</span><br>
<span class="quotelev1">&gt; tell hwloc to build only gl as a plugin with --enable-plugins=gl).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Debian, the libhwloc package &quot;recommends&quot; libhwloc-plugins (&quot;heavy&quot;
</span><br>
<span class="quotelev1">&gt; external dependencies: libxml, pci and libxml) and &quot;suggests&quot;
</span><br>
<span class="quotelev1">&gt; libhwloc-contrib-plugins (non-free external dependencies: cuda, gl) and
</span><br>
<span class="quotelev1">&gt; people are free to install what they really want. If they don't install any
</span><br>
<span class="quotelev1">&gt; plugin package, they still get support for all operating systems, the
</span><br>
<span class="quotelev1">&gt; Linux-specific PCI backend, the x86-specific backend and the &quot;minimalistic&quot;
</span><br>
<span class="quotelev1">&gt; XML backend. Not too bad :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another solution could be to build and distribute all plugins in the main
</span><br>
<span class="quotelev1">&gt; hwloc package but don't have it depend on the plugin dependencies. hwloc
</span><br>
<span class="quotelev1">&gt; tries to load all plugins, but it fails when dependene libraries are
</span><br>
<span class="quotelev1">&gt; missing. So the CUDA plugin is only loaded if libcuda is installed. Can be
</span><br>
<span class="quotelev1">&gt; convenient, but some distros won't let you do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Beware that there's an ABI version number for plugins. It may change in
</span><br>
<span class="quotelev1">&gt; the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/04/2014 12:23, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm sorry for the double report. Now when you wrote it I remember that I
</span><br>
<span class="quotelev1">&gt; have reported it:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks for fixing the man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have one more question: RHEL has splitted hwloc into 2 subpackages
</span><br>
<span class="quotelev1">&gt; * hwloc
</span><br>
<span class="quotelev1">&gt; * hwloc-gui (it contains merely lstopo)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The former one does not need any X11 dependencies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have now tried to do the same for Fedora but it's not so easy. On
</span><br>
<span class="quotelev1">&gt; Fedora I build the package with libXNVCtrl but libXNVCtrl needs libX11. So
</span><br>
<span class="quotelev1">&gt; even CLI tools need libX11:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ldd lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffbf1cb000)
</span><br>
<span class="quotelev1">&gt;         libhwloc.so.5 =&gt; /dev/shm/usr/lib/libhwloc.so.5
</span><br>
<span class="quotelev1">&gt; (0x00007f7a5277c000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so.1 =&gt; /lib64/libnuma.so.1 (0x0000003c06a00000)
</span><br>
<span class="quotelev1">&gt;         libpciaccess.so.0 =&gt; /lib64/libpciaccess.so.0 (0x0000003c05e00000)
</span><br>
<span class="quotelev1">&gt;         libXNVCtrl.so.0 =&gt; /lib64/libXNVCtrl.so.0 (0x00007f7a52545000)
</span><br>
<span class="quotelev1">&gt;         libXext.so.6 =&gt; /lib64/libXext.so.6 (0x0000003c07a00000)
</span><br>
<span class="quotelev1">&gt;         libX11.so.6 =&gt; /lib64/libX11.so.6 (0x0000003c07600000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there any way around? (On RHEL it's easy. RHEL does not provide
</span><br>
<span class="quotelev1">&gt; libXNVCtrl at all so the package is built without it.
</span><br>
<span class="quotelev1">&gt; Then lstopo-no-graphics does not depend on libX11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I currently see two options:
</span><br>
<span class="quotelev1">&gt; A) Accept the fact that lstopo-no-graphics depends on X11. The number of
</span><br>
<span class="quotelev1">&gt; dependencies for lstopo (from hwloc-gui package) is still much lower
</span><br>
<span class="quotelev1">&gt; compared to  lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; B) Compile it without libXNVCtrl but it will reduce the functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is there any 3rd option? I guess not. It seems like A) is the best
</span><br>
<span class="quotelev1">&gt; choice for Fedora.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Any ideas on that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 1, 2014 at 10:54 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/04/2014 10:43, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I see some compiler warnings when building rpm package for Fedora:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c:338:30: warning: assignment from incompatible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c:343:28: warning: assignment from incompatible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c: In function 'hwloc_look_windows':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c:500:36: warning: assignment from incompatible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-windows.c:501:38: warning: assignment from incompatible
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  You already reported those on February 13th and we replied that they are
</span><br>
<span class="quotelev2">&gt;&gt; harmless :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, these warnings come from make check under tests/ports when
</span><br>
<span class="quotelev2">&gt;&gt; verifying that the Windows backend builds fine using &quot;emulated&quot; Windows
</span><br>
<span class="quotelev2">&gt;&gt; headers under Linux. Something that for sure cannot be perfect. If you
</span><br>
<span class="quotelev2">&gt;&gt; have a way to ignore make check warnings, at least under tests/ports,
</span><br>
<span class="quotelev2">&gt;&gt; that'd be good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_backends.c: In function 'main':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_backends.c:42:10: warning: ignoring return value of 'mkstemp',
</span><br>
<span class="quotelev3">&gt;&gt; &gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Another warning from make check. We mostly don't care, I'll see if I can
</span><br>
<span class="quotelev2">&gt;&gt; fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am fixing the manpage problem and backporting it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1018.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
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
