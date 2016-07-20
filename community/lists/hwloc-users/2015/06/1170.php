<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 18:01:10 2015" -->
<!-- isoreceived="20150603220110" -->
<!-- sent="Wed, 03 Jun 2015 19:00:56 -0300" -->
<!-- isosent="20150603220056" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556F7918.6040500_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556E79AF.2020604_at_inria.fr" -->
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
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 18:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03-06-2015 00:51, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 02/06/2015 23:27, Fabricio Cannini a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello there
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to link 'libcudart.so' and 'libnvidia-ml.so' solely to
</span><br>
<span class="quotelev2">&gt;&gt; their respective plugin .so files, not the main libraries/executables?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the './configure' line i'm using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-shared --enable-static --enable-pci --enable-cuda
</span><br>
<span class="quotelev2">&gt;&gt; --enable-nvml --enable-cairo --enable-plugins='nvml,cuda'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Software details:
</span><br>
<span class="quotelev2">&gt;&gt; - Centos 6.5
</span><br>
<span class="quotelev2">&gt;&gt; - gcc 4.4.7
</span><br>
<span class="quotelev2">&gt;&gt; - hwloc 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; - cuda 6.5-14
</span><br>
<span class="quotelev2">&gt;&gt; - nvidia driver 340.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your configure line should do exactly what you want, and that's the
</span><br>
<span class="quotelev1">&gt; whole point of plugins:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ldd src/.libs/libhwloc.so
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 (0x00007fff5579b000)
</span><br>
<span class="quotelev1">&gt; 	libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007fd11e23c000)
</span><br>
<span class="quotelev1">&gt; 	libnuma.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnuma.so.1 (0x00007fd11e031000)
</span><br>
<span class="quotelev1">&gt; 	libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007fd11de26000)
</span><br>
<span class="quotelev1">&gt; 	libpciaccess.so.0 =&gt; /usr/lib/x86_64-linux-gnu/libpciaccess.so.0 (0x00007fd11dc1c000)
</span><br>
<span class="quotelev1">&gt; 	libOpenCL.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libOpenCL.so.1 (0x00007fd11da12000)
</span><br>
<span class="quotelev1">&gt; 	libXNVCtrl.so.0 =&gt; /usr/lib/libXNVCtrl.so.0 (0x00007fd11d80c000)
</span><br>
<span class="quotelev1">&gt; 	libXext.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXext.so.6 (0x00007fd11d5fa000)
</span><br>
<span class="quotelev1">&gt; 	libX11.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libX11.so.6 (0x00007fd11d2b7000)
</span><br>
<span class="quotelev1">&gt; 	libxml2.so.2 =&gt; /usr/lib/x86_64-linux-gnu/libxml2.so.2 (0x00007fd11cf4f000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fd11cba6000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007fd11e786000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fd11c9a2000)
</span><br>
<span class="quotelev1">&gt; 	libz.so.1 =&gt; /lib/x86_64-linux-gnu/libz.so.1 (0x00007fd11c786000)
</span><br>
<span class="quotelev1">&gt; 	libxcb.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libxcb.so.1 (0x00007fd11c564000)
</span><br>
<span class="quotelev1">&gt; 	liblzma.so.5 =&gt; /lib/x86_64-linux-gnu/liblzma.so.5 (0x00007fd11c341000)
</span><br>
<span class="quotelev1">&gt; 	libXau.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXau.so.6 (0x00007fd11c13c000)
</span><br>
<span class="quotelev1">&gt; 	libXdmcp.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libXdmcp.so.6 (0x00007fd11bf37000)
</span><br>
<span class="quotelev1">&gt; (X librairies above are for the GL component here, but there's no libcudart or libnvidia-ml)
</span><br>
<span class="quotelev1">&gt; $ ldd src/.libs/hwloc_nvml.so
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 (0x00007fffe27ce000)
</span><br>
<span class="quotelev1">&gt; 	libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007fdafc92f000)
</span><br>
<span class="quotelev1">&gt; 	libnvidia-ml.so.1 =&gt; /usr/lib/x86_64-linux-gnu/libnvidia-ml.so.1 (0x00007fdafc643000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fdafc299000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fdafc095000)
</span><br>
<span class="quotelev1">&gt; 	libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fdafbe78000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007fdafcd4c000)
</span><br>
<span class="quotelev1">&gt; $ ldd src/.libs/hwloc_cuda.so
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 (0x00007fff19375000)
</span><br>
<span class="quotelev1">&gt; 	libltdl.so.7 =&gt; /usr/lib/x86_64-linux-gnu/libltdl.so.7 (0x00007f54c481f000)
</span><br>
<span class="quotelev1">&gt; 	libcudart.so.6.0 =&gt; /usr/lib/x86_64-linux-gnu/libcudart.so.6.0 (0x00007f54c45ce000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f54c4224000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f54c4020000)
</span><br>
<span class="quotelev1">&gt; 	libstdc++.so.6 =&gt; /usr/lib/x86_64-linux-gnu/libstdc++.so.6 (0x00007f54c3d15000)
</span><br>
<span class="quotelev1">&gt; 	libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f54c3af7000)
</span><br>
<span class="quotelev1">&gt; 	librt.so.1 =&gt; /lib/x86_64-linux-gnu/librt.so.1 (0x00007f54c38ef000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007f54c4c3c000)
</span><br>
<span class="quotelev1">&gt; 	libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f54c35ee000)
</span><br>
<span class="quotelev1">&gt; 	libgcc_s.so.1 =&gt; /lib/x86_64-linux-gnu/libgcc_s.so.1 (0x00007f54c33d7000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If ldd shows libcudart and libnvidia-ml dependencies in libhwloc.so, you
</span><br>
<span class="quotelev1">&gt; may use &quot;make V=1&quot; to verify the link command-line that built these
</span><br>
<span class="quotelev1">&gt; libs, and then find the relevant link line/options in Makefile, and then
</span><br>
<span class="quotelev1">&gt; in Makefile.am
</span><br>
<p>Hi Brice, thanks for answering.
<br>
<p>Strangely, xml_libxml and pci works fine as plugins, but nvml and cuda 
<br>
not. I had no trouble making the 'pci' and 'xml_libxml' plugins link to 
<br>
their respective libraries, leaving 'libhwloc.so' alone, but no dice 
<br>
with 'nvml' or 'cuda'.
<br>
<p>I've managed to find the offending link line:
<br>
========================================================================
<br>
libtool: link: gcc -shared  -fPIC -DPIC  .libs/topology.o 
<br>
.libs/traversal.o .libs/distances.o .libs/components.o .libs/bind.o 
<br>
.libs/bitmap.o .libs/pci-common.o .libs/diff.o .libs/misc.o 
<br>
.libs/base64.o .libs/topology-noos.o .libs/topology-synthetic.o 
<br>
.libs/topology-custom.o .libs/topology-xml.o 
<br>
.libs/topology-xml-nolibxml.o .libs/topology-xml-libxml.o 
<br>
.libs/topology-pci.o .libs/topology-linux.o .libs/topology-x86.o   -lm 
<br>
-lnuma -lltdl -lpciaccess -lxml2 -L/usr/local/cuda-6.5/lib64 -lcudart 
<br>
-L/usr/src/gdk/nvml/lib -lnvidia-ml  -O2   -Wl,-soname -Wl,libhwloc.so.5 
<br>
-o .libs/libhwloc.so.5.6.1
<br>
=========================================================================
<br>
<p>'-L/usr/local/cuda-6.5/lib64 -lcudart -L/usr/src/gdk/nvml/lib 
<br>
-lnvidia-ml' should not be here, right ?
<br>
<p>Inside 'src/Makefile', the commenting mechanism of 
<br>
'hwloc_xml_libxml_la_*', 'hwloc_cuda_la_*', 'hwloc_nvml_la_*', 
<br>
'hwloc_pci_la_*' seems to be working fine ( uncommenting when set to be 
<br>
made as plugins ).
<br>
<p>Any clues ?
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1171.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
