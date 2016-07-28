<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:10:04 2009" -->
<!-- isoreceived="20090320181004" -->
<!-- sent="Fri, 20 Mar 2009 13:09:56 -0500" -->
<!-- isosent="20090320180956" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode" -->
<!-- id="20090320180955.GA26932_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090320174906.GB26929_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Reply:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me try this again. Below is the error from OMPI 1.3r20826. In my
<br>
last email, I accidentally posted the compiler error from Sun's
<br>
internal OMPI source repository.
<br>
<p>&nbsp;&nbsp;$ cd opal/mca/memory/ptmalloc2
<br>
&nbsp;&nbsp;$ make
<br>
&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -O -DNDEBUG  -tp=k8-32    -export-dynamic    -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo  -lnsl -lutil  -lpthread
<br>
&nbsp;&nbsp;libtool: link: pgcc -shared  -fpic -DPIC  .libs/malloc.o .libs/malloc-stats.o   -lnsl -lutil -lpthread -lc    -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
<br>
&nbsp;&nbsp;/usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
<br>
&nbsp;&nbsp;/usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x14d3): In function `munmap_chunk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x1550): In function `mremap_chunk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x2bd2): In function `_int_free':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x309e): In function `_int_realloc':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x3c1a): In function `opal_mem_free_ptmalloc2_sbrk':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_release_hook'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x3f9b): In function `ptmalloc_init':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_hooks_set_support'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x409d): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x40c5): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x413f): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x4188): In function `new_heap':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x4272): In function `heap_trim':
<br>
&nbsp;&nbsp;: undefined reference to `opal_mem_free_ptmalloc2_munmap'
<br>
&nbsp;&nbsp;.libs/malloc.o(.text+0x449a): In function `arena_get2':
<br>
&nbsp;&nbsp;: undefined reference to `opal_atomic_wmb'
<br>
&nbsp;&nbsp;make: *** [libopenmpi-malloc.la] Error 2
<br>
<p>-Ethan
<br>
<p><p>On Fri, Mar/20/2009 12:49:06PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone successfully compiled Open MPI with the PGI compilers in
</span><br>
<span class="quotelev1">&gt; 32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
</span><br>
<span class="quotelev1">&gt; error with 32-bit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ cd opal/mca/memory/ptmalloc2
</span><br>
<span class="quotelev1">&gt;    $ make
</span><br>
<span class="quotelev1">&gt;    /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt;    libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0xcb3): In function `realloc_check':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_memcpy_base_module'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x14e3): In function `munmap_chunk':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x1560): In function `mremap_chunk':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x2be2): In function `_int_free':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x30ae): In function `_int_realloc':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x3c2a): In function `opal_mem_free_ptmalloc2_sbrk':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x3fab): In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_hooks_set_support'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x40ad): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x40d5): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x414f): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x4198): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x4282): In function `heap_trim':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;   .libs/malloc.o(.text+0x44aa): In function `arena_get2':
</span><br>
<span class="quotelev1">&gt;   : undefined reference to `opal_atomic_wmb'
</span><br>
<span class="quotelev1">&gt;   make: *** [libopenmpi-malloc.la] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Reply:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
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
