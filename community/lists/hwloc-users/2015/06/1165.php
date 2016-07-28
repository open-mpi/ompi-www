<?
$subject_val = "[hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 17:27:20 2015" -->
<!-- isoreceived="20150602212720" -->
<!-- sent="Tue, 02 Jun 2015 18:27:18 -0300" -->
<!-- isosent="20150602212718" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="[hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556E1FB6.2060903_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-users] linking libcudart and libnvml only to the plugins<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-02 17:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/04/1164.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] hello world can't run in Ubuntu 12.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there
<br>
<p>Is there a way to link 'libcudart.so' and 'libnvidia-ml.so' solely to 
<br>
their respective plugin .so files, not the main libraries/executables?
<br>
<p>This is the './configure' line i'm using:
<br>
<p>./configure --enable-shared --enable-static --enable-pci --enable-cuda 
<br>
--enable-nvml --enable-cairo --enable-plugins='nvml,cuda'
<br>
<p><p>Software details:
<br>
- Centos 6.5
<br>
- gcc 4.4.7
<br>
- hwloc 1.10.1
<br>
- cuda 6.5-14
<br>
- nvidia driver 340.29
<br>
<p><p>TIA,
<br>
Fabricio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/04/1164.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] hello world can't run in Ubuntu 12.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1166.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
