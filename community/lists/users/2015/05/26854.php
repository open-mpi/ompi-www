<?
$subject_val = "[OMPI users] failure of 1.8.5 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 15:55:18 2015" -->
<!-- isoreceived="20150511195518" -->
<!-- sent="Mon, 11 May 2015 12:55:01 -0700" -->
<!-- isosent="20150511195501" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="[OMPI users] failure of 1.8.5 on FreeBSD" -->
<!-- id="20150511195501.GA77850_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] failure of 1.8.5 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 15:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26855.php">Walt Brainerd: "[OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've configured and built openmpi-1.8.5 on FreeBSD-11
<br>
with
<br>
<p>% ./configure --prefix /usr/local/openmpi-1.8.5 --disable-shared \
<br>
&nbsp;&nbsp;&nbsp;--enable-static --enable-mpirun-prefix-by-default
<br>
<p>This, of course, disables shared libraries and enables static 
<br>
libs.  Now, when I go to build my program, I see
<br>
<p>% make -DMPI
<br>
/usr/local/openmpi-1.8.5/bin/mpif90 -O2 -pipe -static -I/home/kargl/modules  \
<br>
&nbsp;&nbsp;&nbsp;-o sasmp sasmp.f90  -L/home/kargl/lib -L. -L/usr/local/lib -L. -loa -ltgt \
<br>
&nbsp;&nbsp;-L/home/kargl/lib -L. -L/usr/local/lib -lm90 -llapack -lblas
<br>
/usr/lib/libexecinfo.a(symtab.o): In function `symtab_create':
<br>
/usr/src/lib/libexecinfo/../../contrib/libexecinfo/symtab.c:(.text+0x7f): \
<br>
&nbsp;&nbsp;&nbsp;undefined reference to `elf_version'
<br>
/usr/src/lib/libexecinfo/../../contrib/libexecinfo/symtab.c:(.text+0x95): 
<br>
&nbsp;&nbsp;&nbsp;undefined reference to `elf_begin'
<br>
<p>The undefined symbols live in /usr/lib/libelf.a.  In grepping through
<br>
the Makefiles, I find
<br>
<p>LIBS = -lexecinfo -lm -lutil
<br>
OPAL_WRAPPER_EXTRA_LIBS = -lm -L/usr/local/lib -lpciaccess -lexecinfo -lutil 
<br>
OMPI_WRAPPER_EXTRA_LIBS = -lm -L/usr/local/lib -lpciaccess -lexecinfo -lutil 
<br>
ORTE_WRAPPER_EXTRA_LIBS = -lm -L/usr/local/lib -lpciaccess -lexecinfo -lutil
<br>
<p>Where do I modify the the configure infrastructure to add -lelf to these
<br>
variables?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26855.php">Walt Brainerd: "[OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
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
