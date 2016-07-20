<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 18:56:51 2015" -->
<!-- isoreceived="20150603225651" -->
<!-- sent="Thu, 04 Jun 2015 00:56:48 +0200" -->
<!-- isosent="20150603225648" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556F8630.6020208_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556F8570.30204_at_gmail.com" -->
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
<strong>Date:</strong> 2015-06-03 18:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1172.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/06/2015 00:53, Fabricio Cannini a &#233;crit :
<br>
<span class="quotelev1">&gt; On 03-06-2015 19:45, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/06/2015 00:00, Fabricio Cannini a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brice, thanks for answering.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Strangely, xml_libxml and pci works fine as plugins, but nvml and cuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not. I had no trouble making the 'pci' and 'xml_libxml' plugins link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to their respective libraries, leaving 'libhwloc.so' alone, but no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dice with 'nvml' or 'cuda'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've managed to find the offending link line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: gcc -shared  -fPIC -DPIC  .libs/topology.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/traversal.o .libs/distances.o .libs/components.o .libs/bind.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/bitmap.o .libs/pci-common.o .libs/diff.o .libs/misc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/base64.o .libs/topology-noos.o .libs/topology-synthetic.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/topology-custom.o .libs/topology-xml.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/topology-xml-nolibxml.o .libs/topology-xml-libxml.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/topology-pci.o .libs/topology-linux.o .libs/topology-x86.o   -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnuma -lltdl -lpciaccess -lxml2 -L/usr/local/cuda-6.5/lib64 -lcudart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/src/gdk/nvml/lib -lnvidia-ml  -O2   -Wl,-soname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,libhwloc.so.5 -o .libs/libhwloc.so.5.6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '-L/usr/local/cuda-6.5/lib64 -lcudart -L/usr/src/gdk/nvml/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnvidia-ml' should not be here, right ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this part should only hwloc_cuda_la_LDFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Inside 'src/Makefile', the commenting mechanism of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'hwloc_xml_libxml_la_*', 'hwloc_cuda_la_*', 'hwloc_nvml_la_*',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'hwloc_pci_la_*' seems to be working fine ( uncommenting when set to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be made as plugins ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send your src/Makefile (before your change) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean edited manually? I only used './configure' to generate
</span><br>
<span class="quotelev1">&gt; 'src/Makefile' .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah sorry, I misread your last sentence above. Please just send the
<br>
src/Makefile generated by configure :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1172.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
