<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 06:58:06 2014" -->
<!-- isoreceived="20140401105806" -->
<!-- sent="Tue, 01 Apr 2014 12:58:04 +0200" -->
<!-- isosent="20140401105804" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released" -->
<!-- id="533A9BBC.8080507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBTV6pNKY9Mod3H62dOgdft0uTquZs8P8YzuQdyOAguLHw_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 06:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's exactely why we have plugin support. You can pass
<br>
--enable-plugins so that all plugin-able backends are built as separate
<br>
hwloc_foo.so files that are used only when available/loaded at runtime.
<br>
Then you can put them in different packages and hwloc will only load the
<br>
available ones.
<br>
<p>For instance, if libxnvctrl is the only lib that you don't want libhwloc
<br>
to depends against, you put hwloc_gl.so in a separate package (you can
<br>
even tell hwloc to build only gl as a plugin with --enable-plugins=gl).
<br>
<p>On Debian, the libhwloc package &quot;recommends&quot; libhwloc-plugins (&quot;heavy&quot;
<br>
external dependencies: libxml, pci and libxml) and &quot;suggests&quot;
<br>
libhwloc-contrib-plugins (non-free external dependencies: cuda, gl) and
<br>
people are free to install what they really want. If they don't install
<br>
any plugin package, they still get support for all operating systems,
<br>
the Linux-specific PCI backend, the x86-specific backend and the
<br>
&quot;minimalistic&quot; XML backend. Not too bad :)
<br>
<p>Another solution could be to build and distribute all plugins in the
<br>
main hwloc package but don't have it depend on the plugin dependencies.
<br>
hwloc tries to load all plugins, but it fails when dependene libraries
<br>
are missing. So the CUDA plugin is only loaded if libcuda is installed.
<br>
Can be convenient, but some distros won't let you do that.
<br>
<p>Beware that there's an ABI version number for plugins. It may change in
<br>
the future.
<br>
<p>Brice
<br>
<p><p><p><p><p><p>Le 01/04/2014 12:23, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry for the double report. Now when you wrote it I remember that
</span><br>
<span class="quotelev1">&gt; I have reported it:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for fixing the man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have one more question: RHEL has splitted hwloc into 2 subpackages
</span><br>
<span class="quotelev1">&gt; * hwloc 
</span><br>
<span class="quotelev1">&gt; * hwloc-gui (it contains merely lstopo)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The former one does not need any X11 dependencies. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now tried to do the same for Fedora but it's not so easy. On
</span><br>
<span class="quotelev1">&gt; Fedora I build the package with libXNVCtrl but
</span><br>
<span class="quotelev1">&gt; libXNVCtrl needs libX11. So even CLI tools need libX11:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd lstopo-no-graphics
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
<span class="quotelev1">&gt; Is there any way around? (On RHEL it's easy. RHEL does not provide
</span><br>
<span class="quotelev1">&gt; libXNVCtrl at all so the package is built without it.
</span><br>
<span class="quotelev1">&gt; Then lstopo-no-graphics does not depend on libX11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I currently see two options:
</span><br>
<span class="quotelev1">&gt; A) Accept the fact that lstopo-no-graphics depends on X11. The number
</span><br>
<span class="quotelev1">&gt; of dependencies for lstopo (from hwloc-gui package) is still much
</span><br>
<span class="quotelev1">&gt; lower compared to  lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; B) Compile it without libXNVCtrl but it will reduce the functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any 3rd option? I guess not. It seems like A) is the best
</span><br>
<span class="quotelev1">&gt; choice for Fedora. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; On Tue, Apr 1, 2014 at 10:54 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 01/04/2014 10:43, Jiri Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt;     &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I see some compiler warnings when building rpm package for Fedora:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c: In function
</span><br>
<span class="quotelev1">&gt;     'hwloc_win_get_VirtualAllocExNumaProc':
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c:338:30: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt;     &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c:343:28: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt;     &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c: In function 'hwloc_look_windows':
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c:500:36: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt;     &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt;     &gt; topology-windows.c:501:38: warning: assignment from incompatible
</span><br>
<span class="quotelev2">&gt;     &gt; pointer type [enabled by default]
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You already reported those on February 13th and we replied that
</span><br>
<span class="quotelev1">&gt;     they are
</span><br>
<span class="quotelev1">&gt;     harmless :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Moreover, these warnings come from make check under tests/ports when
</span><br>
<span class="quotelev1">&gt;     verifying that the Windows backend builds fine using &quot;emulated&quot;
</span><br>
<span class="quotelev1">&gt;     Windows
</span><br>
<span class="quotelev1">&gt;     headers under Linux. Something that for sure cannot be perfect. If you
</span><br>
<span class="quotelev1">&gt;     have a way to ignore make check warnings, at least under tests/ports,
</span><br>
<span class="quotelev1">&gt;     that'd be good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_backends.c: In function 'main':
</span><br>
<span class="quotelev2">&gt;     &gt; hwloc_backends.c:42:10: warning: ignoring return value of 'mkstemp',
</span><br>
<span class="quotelev2">&gt;     &gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Another warning from make check. We mostly don't care, I'll see if
</span><br>
<span class="quotelev1">&gt;     I can
</span><br>
<span class="quotelev1">&gt;     fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am fixing the manpage problem and backporting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks!
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1019.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
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
