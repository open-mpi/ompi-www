<?
$subject_val = "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 13:49:11 2009" -->
<!-- isoreceived="20090320174911" -->
<!-- sent="Fri, 20 Mar 2009 12:49:06 -0500" -->
<!-- isosent="20090320174906" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode" -->
<!-- id="20090320174906.GB26929_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 13:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8534.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Reply:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Has anyone successfully compiled Open MPI with the PGI compilers in
<br>
32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
<br>
error with 32-bit:
<br>
<p>&nbsp;&nbsp;&nbsp;$ cd opal/mca/memory/ptmalloc2
<br>
&nbsp;&nbsp;&nbsp;$ make
<br>
&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil -lpthread
<br>
&nbsp;&nbsp;&nbsp;libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
<br>
&nbsp;&nbsp;/usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
<br>
&nbsp;&nbsp;/usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0xcb3): In function `realloc_check':
<br>
&nbsp;&nbsp;: undefined reference to `opal_memcpy_base_module'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x14e3): In function `munmap_chunk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x1560): In function `mremap_chunk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x2be2): In function `_int_free':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x30ae): In function `_int_realloc':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x3c2a): In function `opal_mem_free_ptmalloc2_sbrk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x3fab): In function `ptmalloc_init':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_set_support'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x40ad): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x40d5): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x414f): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x4198): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x4282): In function `heap_trim':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x44aa): In function `arena_get2':
<br>
&nbsp;&nbsp;: undefined reference to `opal_atomic_wmb'
<br>
&nbsp;&nbsp;make: *** [libopenmpi-malloc.la] Error 2
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8534.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Reply:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
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
