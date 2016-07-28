<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:13:06 2009" -->
<!-- isoreceived="20090320181306" -->
<!-- sent="Fri, 20 Mar 2009 14:13:02 -0400" -->
<!-- isosent="20090320181302" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode" -->
<!-- id="49C3DCAE.6060705_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31ECC6BB-E766-4164-BD17-3BB6806E46D8_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan,
<br>
<p>I agree with Doug. Did you try to build for 64-bit in the same
<br>
directory? If so, you need to do a 'make clean' or 'make distclean'
<br>
before compiling for 32-bit.
<br>
<p>Even if you didn't try to compile for 64-bit yourself, try doing 'make
<br>
clean' or 'make distclean'. ;)
<br>
<p><pre>
-- 
Prentice
Doug Reeder wrote:
&gt; Ethan,
&gt; 
&gt; It looks likesome of the object files that you are trying to link to the
&gt; malloc.o and malloc-stats.o were compiled as 64 bit objects. Are you
&gt; using the 32 bit compiler flag for the compile step as well as the link
&gt; step.
&gt; 
&gt; Doug Reeder
&gt; On Mar 20, 2009, at 10:49 AM, Ethan Mallove wrote:
&gt; 
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; Has anyone successfully compiled Open MPI with the PGI compilers in
&gt;&gt; 32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
&gt;&gt; error with 32-bit:
&gt;&gt;
&gt;&gt;   $ cd opal/mca/memory/ptmalloc2
&gt;&gt;   $ make
&gt;&gt;   /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG
&gt;&gt; -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath
&gt;&gt; /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil
&gt;&gt; -lpthread
&gt;&gt;   libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o
&gt;&gt; .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname
&gt;&gt; -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
&gt;&gt;  /usr/bin/ld: warning: i386 architecture of input file
&gt;&gt; `.libs/malloc.o' is incompatible with i386:x86-64 output
&gt;&gt;  /usr/bin/ld: warning: i386 architecture of input file
&gt;&gt; `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
&gt;&gt;  .libs/malloc.o(.text+0xcb3): In function `realloc_check':
&gt;&gt;  : undefined reference to `opal_memcpy_base_module'
&gt;&gt;  .libs/malloc.o(.text+0x14e3): In function `munmap_chunk':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x1560): In function `mremap_chunk':
&gt;&gt;  : undefined reference to `opal_mem_hooks_release_hook'
&gt;&gt;  .libs/malloc.o(.text+0x2be2): In function `_int_free':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x30ae): In function `_int_realloc':
&gt;&gt;  : undefined reference to `opal_mem_hooks_release_hook'
&gt;&gt;  .libs/malloc.o(.text+0x3c2a): In function `opal_mem_free_ptmalloc2_sbrk':
&gt;&gt;  : undefined reference to `opal_mem_hooks_release_hook'
&gt;&gt;  .libs/malloc.o(.text+0x3fab): In function `ptmalloc_init':
&gt;&gt;  : undefined reference to `opal_mem_hooks_set_support'
&gt;&gt;  .libs/malloc.o(.text+0x40ad): In function `new_heap':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x40d5): In function `new_heap':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x414f): In function `new_heap':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x4198): In function `new_heap':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x4282): In function `heap_trim':
&gt;&gt;  : undefined reference to `opal_mem_free_ptmalloc2_munmap'
&gt;&gt;  .libs/malloc.o(.text+0x44aa): In function `arena_get2':
&gt;&gt;  : undefined reference to `opal_atomic_wmb'
&gt;&gt;  make: *** [libopenmpi-malloc.la] Error 2
&gt;&gt;
&gt;&gt; -Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
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
