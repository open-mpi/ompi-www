<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 23:51:14 2015" -->
<!-- isoreceived="20150603035114" -->
<!-- sent="Wed, 03 Jun 2015 05:51:11 +0200" -->
<!-- isosent="20150603035111" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556E79AF.2020604_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556E1FB6.2060903_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] linking libcudart and libnvml only to the plugins<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-02 23:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<li><strong>Previous message:</strong> <a href="1165.php">Fabricio Cannini: "[hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1165.php">Fabricio Cannini: "[hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/06/2015 23:27, Fabricio Cannini a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to link 'libcudart.so' and 'libnvidia-ml.so' solely to
</span><br>
<span class="quotelev1">&gt; their respective plugin .so files, not the main libraries/executables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the './configure' line i'm using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-shared --enable-static --enable-pci --enable-cuda
</span><br>
<span class="quotelev1">&gt; --enable-nvml --enable-cairo --enable-plugins='nvml,cuda'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Software details:
</span><br>
<span class="quotelev1">&gt; - Centos 6.5
</span><br>
<span class="quotelev1">&gt; - gcc 4.4.7
</span><br>
<span class="quotelev1">&gt; - hwloc 1.10.1
</span><br>
<span class="quotelev1">&gt; - cuda 6.5-14
</span><br>
<span class="quotelev1">&gt; - nvidia driver 340.29
</span><br>
<p>Hello
<br>
<p>Your configure line should do exactly what you want, and that's the
<br>
whole point of plugins:
<br>
<p>$ ldd src/.libs/libhwloc.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 (0x00007fff5579b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007fd11e23c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 (0x00007fd11e031000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007fd11de26000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpciaccess.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libpciaccess.so.0 (0x00007fd11dc1c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libOpenCL.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libOpenCL.so.1 (0x00007fd11da12000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXNVCtrl.so.0 =&gt; /usr/lib/libXNVCtrl.so.0 (0x00007fd11d80c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXext.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXext.so.6 (0x00007fd11d5fa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libX11.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libX11.so.6 (0x00007fd11d2b7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxml2.so.2 =&gt; /usr/lib/x86_64-linux-gnu/libxml2.so.2 (0x00007fd11cf4f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fd11cba6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fd11e786000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fd11c9a2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /lib/x86_64-linux-gnu/libz.so.1 (0x00007fd11c786000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxcb.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libxcb.so.1 (0x00007fd11c564000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;liblzma.so.5 =&gt; /lib/x86_64-linux-gnu/liblzma.so.5 (0x00007fd11c341000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXau.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXau.so.6 (0x00007fd11c13c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXdmcp.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXdmcp.so.6 (0x00007fd11bf37000)
<br>
(X librairies above are for the GL component here, but there's no libcudart or libnvidia-ml)
<br>
$ ldd src/.libs/hwloc_nvml.so 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 (0x00007fffe27ce000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007fdafc92f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnvidia-ml.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnvidia-ml.so.1 (0x00007fdafc643000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fdafc299000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fdafc095000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fdafbe78000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fdafcd4c000)
<br>
$ ldd src/.libs/hwloc_cuda.so 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 (0x00007fff19375000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007f54c481f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libcudart.so.6.0 =&gt; /usr/lib/x86_64-linux-gnu/libcudart.so.6.0 (0x00007f54c45ce000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f54c4224000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f54c4020000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libstdc++.so.6 (0x00007f54c3d15000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f54c3af7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib/x86_64-linux-gnu/librt.so.1 (0x00007f54c38ef000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f54c4c3c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f54c35ee000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1 (0x00007f54c33d7000)
<br>
<p>If ldd shows libcudart and libnvidia-ml dependencies in libhwloc.so, you
<br>
may use &quot;make V=1&quot; to verify the link command-line that built these
<br>
libs, and then find the relevant link line/options in Makefile, and then
<br>
in Makefile.am
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<li><strong>Previous message:</strong> <a href="1165.php">Fabricio Cannini: "[hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1165.php">Fabricio Cannini: "[hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
