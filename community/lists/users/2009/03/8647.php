<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 14:11:32 2009" -->
<!-- isoreceived="20090330181132" -->
<!-- sent="Mon, 30 Mar 2009 13:11:27 -0500" -->
<!-- isosent="20090330181127" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode" -->
<!-- id="20090330181126.GA26944_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090320183658.GC26929_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-30 14:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - there is a Libtool thread/patch that resolved this issue:
<br>
<p>&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/libtool/2009-03/msg00035.html">http://lists.gnu.org/archive/html/libtool/2009-03/msg00035.html</a>
<br>
<p>-Ethan
<br>
<p>On Fri, Mar/20/2009 01:36:58PM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar/20/2009 01:09:56PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Let me try this again. Below is the error from OMPI 1.3r20826. In my
</span><br>
<span class="quotelev2">&gt; &gt; last email, I accidentally posted the compiler error from Sun's
</span><br>
<span class="quotelev2">&gt; &gt; internal OMPI source repository.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ cd opal/mca/memory/ptmalloc2
</span><br>
<span class="quotelev2">&gt; &gt;   $ make
</span><br>
<span class="quotelev2">&gt; &gt;   /bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -O -DNDEBUG  -tp=k8-32    -export-dynamic    -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo  -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt; &gt;   libtool: link: pgcc -shared  -fpic -DPIC  .libs/malloc.o .libs/malloc-stats.o   -lnsl -lutil -lpthread -lc    -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev2">&gt; &gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x14d3): In function `munmap_chunk':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x1550): In function `mremap_chunk':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x2bd2): In function `_int_free':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x309e): In function `_int_realloc':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x3c1a): In function `opal_mem_free_ptmalloc2_sbrk':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x3f9b): In function `ptmalloc_init':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_hooks_set_support'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x409d): In function `new_heap':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x40c5): In function `new_heap':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x413f): In function `new_heap':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x4188): In function `new_heap':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x4272): In function `heap_trim':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev2">&gt; &gt;   .libs/malloc.o(.text+0x449a): In function `arena_get2':
</span><br>
<span class="quotelev2">&gt; &gt;   : undefined reference to `opal_atomic_wmb'
</span><br>
<span class="quotelev2">&gt; &gt;   make: *** [libopenmpi-malloc.la] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we have located the problem.  Libtool has stripped out
</span><br>
<span class="quotelev1">&gt; the -tp=k8-32 flag in the link step:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt;   libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I add it back in manually, all is well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ pgcc -tp=k8-32 -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am guessing there is some macro (LDFLAGS?) that I can override to
</span><br>
<span class="quotelev1">&gt; prevent Libtool from stripping out the -tp=k8-32 flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar/20/2009 12:49:06PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Has anyone successfully compiled Open MPI with the PGI compilers in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error with 32-bit:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    $ cd opal/mca/memory/ptmalloc2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    $ make
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil -lpthread
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0xcb3): In function `realloc_check':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_memcpy_base_module'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x14e3): In function `munmap_chunk':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x1560): In function `mremap_chunk':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x2be2): In function `_int_free':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x30ae): In function `_int_realloc':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x3c2a): In function `opal_mem_free_ptmalloc2_sbrk':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x3fab): In function `ptmalloc_init':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_hooks_set_support'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x40ad): In function `new_heap':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x40d5): In function `new_heap':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x414f): In function `new_heap':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x4198): In function `new_heap':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x4282): In function `heap_trim':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   .libs/malloc.o(.text+0x44aa): In function `arena_get2':
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   : undefined reference to `opal_atomic_wmb'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   make: *** [libopenmpi-malloc.la] Error 2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8648.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8646.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
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
