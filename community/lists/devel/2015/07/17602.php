<?
$subject_val = "[OMPI devel] Error in ./configure for Yocto";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 10:59:41 2015" -->
<!-- isoreceived="20150709145941" -->
<!-- sent="Thu, 9 Jul 2015 09:59:40 -0500" -->
<!-- isosent="20150709145940" -->
<!-- name="Victor Rodriguez" -->
<!-- email="vm.rod25_at_[hidden]" -->
<!-- subject="[OMPI devel] Error in ./configure for Yocto" -->
<!-- id="CAK5mteyHzZuVnNskX9QLuvRGZkju06=OgB_nyz+JG7D+-YKu-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Error in ./configure for Yocto<br>
<strong>From:</strong> Victor Rodriguez (<em>vm.rod25_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 10:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Previous message:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Reply:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi team
<br>
<p>I am porting open mpi to Yocto but at moment of ./configure I have this problem
<br>
<p>yctb03:~/poky/build/tmp/work/corei7-64-poky-linux/openmpi/1.8.6-r0/openmpi-1.8.6
<br>
# ./configure
<br>
<p><p>configure: loading site script /home/vrodri3/poky/meta/site/endian-little
<br>
configure: loading site script /home/vrodri3/poky/meta/site/common-linux
<br>
configure: loading site script /home/vrodri3/poky/meta/site/common-glibc
<br>
configure: loading site script /home/vrodri3/poky/meta/site/x86_64-linux
<br>
configure: loading site script /home/vrodri3/poky/meta/site/common
<br>
configure: loading site script
<br>
/home/vrodri3/meta-openembedded/meta-oe/site/endian-little
<br>
configure: loading site script
<br>
/home/vrodri3/meta-openembedded/meta-gnome/site/x86_64-linux
<br>
configure: loading site script
<br>
/home/vrodri3/poky/build/tmp/work/corei7-64-poky-linux/openmpi/1.8.6-r0/build/aclocal-copy/glibc_config
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Startup tests
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking host system type... x86_64-unknown-linux-gnu
<br>
checking target system type... x86_64-unknown-linux-gnu
<br>
checking for gcc... x86_64-poky-linux-gcc  -m64 -march=corei7
<br>
-mtune=corei7 -mfpmath=sse -msse4.2
<br>
--sysroot=/home/vrodri3/poky/build/tmp/sysroots/intel-corei7-64
<br>
checking whether the C compiler works... yes
<br>
checking for C compiler default output file name... a.out
<br>
checking for suffix of executables...
<br>
checking whether we are cross compiling... configure: error: in
<br>
`/home/vrodri3/poky/build/tmp/work/corei7-64-poky-linux/openmpi/1.8.6-r0/openmpi-1.8.6':
<br>
configure: error: cannot run C compiled programs.
<br>
If you meant to cross compile, use `--host'.
<br>
See `config.log' for more details
<br>
<p><p><p>DO you know if there is any flag that I should enable to disable check
<br>
cross compiling
<br>
<p>Also Yocto do not support fortran , how can I disable fortran ?
<br>
<p><p>Thanks a lot and regards
<br>
<p>Victor Rodriguez
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Previous message:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Reply:</strong> <a href="17603.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Error in ./configure for Yocto"</a>
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
