<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:15:51 2009" -->
<!-- isoreceived="20090320181551" -->
<!-- sent="Fri, 20 Mar 2009 13:15:46 -0500" -->
<!-- isosent="20090320181546" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode" -->
<!-- id="20090320181546.GB26932_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar/20/2009 11:06:00AM, Doug Reeder wrote:
<br>
<span class="quotelev1">&gt;    Ethan,
</span><br>
<span class="quotelev1">&gt;    It looks likesome of the object files that you are trying to link to the
</span><br>
<span class="quotelev1">&gt;    malloc.o and malloc-stats.o were compiled as 64 bit objects. Are you using
</span><br>
<span class="quotelev1">&gt;    the 32 bit compiler flag for the compile step as well as the link step.
</span><br>
<p>It looks like I'm in 32-bit mode for the compile:
<br>
<p>&nbsp;&nbsp;libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -D_REENTRANT -O -DNDEBUG -tp=k8-32 -c malloc.c  -fpic -DPIC -o .libs/malloc.o
<br>
<p>&nbsp;&nbsp;libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I./sysdeps/pthread -I./sysdeps/generic -I../../../.. -D_REENTRANT -O -DNDEBUG -tp=k8-32 -c malloc-stats.c  -fpic -DPIC -o .libs/malloc-stats.o
<br>
<p>Can't I ignore those warnings for now?  It seems PGI allows me to
<br>
create a working executable, even if I mix &quot;i386&quot; with &quot;i386:x86-64&quot;:
<br>
<p>&nbsp;&nbsp;$ pgcc -c -tp=k8-32 bar.c -o bar_32.o
<br>
&nbsp;&nbsp;$ pgcc -tp=k8-64 foo.c bar_32.o -o foo_mix
<br>
&nbsp;&nbsp;/home/em162155/tmp/foo.c:
<br>
&nbsp;&nbsp;/usr/bin/ld: warning: i386 architecture of input file `bar_32.o' is incompatible with i386:x86-64 output
<br>
&nbsp;&nbsp;$ ./foo_mix
<br>
&nbsp;&nbsp;foo
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;    Doug Reeder
</span><br>
<span class="quotelev1">&gt;    On Mar 20, 2009, at 10:49 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Has anyone successfully compiled Open MPI with the PGI compilers in
</span><br>
<span class="quotelev1">&gt;      32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
</span><br>
<span class="quotelev1">&gt;      error with 32-bit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        $ cd opal/mca/memory/ptmalloc2
</span><br>
<span class="quotelev1">&gt;        $ make
</span><br>
<span class="quotelev1">&gt;        /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG
</span><br>
<span class="quotelev1">&gt;      -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath
</span><br>
<span class="quotelev1">&gt;      /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;      -lpthread
</span><br>
<span class="quotelev1">&gt;        libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o
</span><br>
<span class="quotelev1">&gt;      .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname
</span><br>
<span class="quotelev1">&gt;      -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt;       /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o'
</span><br>
<span class="quotelev1">&gt;      is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;       /usr/bin/ld: warning: i386 architecture of input file
</span><br>
<span class="quotelev1">&gt;      `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0xcb3): In function `realloc_check':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_memcpy_base_module'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x14e3): In function `munmap_chunk':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x1560): In function `mremap_chunk':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x2be2): In function `_int_free':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x30ae): In function `_int_realloc':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x3c2a): In function
</span><br>
<span class="quotelev1">&gt;      `opal_mem_free_ptmalloc2_sbrk':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_hooks_release_hook'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x3fab): In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_hooks_set_support'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x40ad): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x40d5): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x414f): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x4198): In function `new_heap':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x4282): In function `heap_trim':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_mem_free_ptmalloc2_munmap'
</span><br>
<span class="quotelev1">&gt;       .libs/malloc.o(.text+0x44aa): In function `arena_get2':
</span><br>
<span class="quotelev1">&gt;       : undefined reference to `opal_atomic_wmb'
</span><br>
<span class="quotelev1">&gt;       make: *** [libopenmpi-malloc.la] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Ethan
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8536.php">Doug Reeder: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>Reply:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
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
