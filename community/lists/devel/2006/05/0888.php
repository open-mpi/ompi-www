<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 22 18:44:13 2006" -->
<!-- isoreceived="20060522224413" -->
<!-- sent="Mon, 22 May 2006 18:36:19 -0400" -->
<!-- isosent="20060522223619" -->
<!-- name="Neil Ludban" -->
<!-- email="nludban_at_[hidden]" -->
<!-- subject="[OMPI devel] memory_malloc_hooks.c and dlclose()" -->
<!-- id="20060522183619.5c8430e3.nludban_at_osc.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Neil Ludban (<em>nludban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-22 18:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Milestone for OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe reply:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Reply:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm getting a core dump when using openmpi-1.0.2 with the MPI extensions
<br>
we're developing for the MATLAB interpreter.  This same build of openmpi
<br>
is working great with C programs and our extensions for gnu octave.  The
<br>
machine is AMD64 running Linux:
<br>
<p>Linux kodos 2.6.9-5.ELsmp #1 SMP Wed Jan 5 19:29:47 EST 2005 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>I believe there's a bug in that opal_memory_malloc_hooks_init() links
<br>
itself into the __free_hook chain during initialization, but then it
<br>
never unlinks itself at shutdown.  In the interpreter environment,
<br>
libopal.so is dlclose()d and unmapped from memory long before the
<br>
interpreter is done with dynamic memory.  A quick check of the nightly
<br>
trunk snapshot reveals some function name changes, but no new shutdown
<br>
code.
<br>
<p>After running this trivial MPI program on a single processor:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
I'm back to the MATLAB prompt, and break into the debugger:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
(gdb) info sharedlibrary
<br>
<span class="quotelev1">&gt;From                To                  Syms Read   Shared Object Library
</span><br>
...
<br>
0x0000002aa0b50740  0x0000002aa0b50a28  Yes         .../mexMPI_Init.mexa64
<br>
0x0000002aa0c52a50  0x0000002aa0c54318  Yes         .../lib/libbcmpi.so.0
<br>
0x0000002aa0dcef90  0x0000002aa0e37398  Yes         /usr/lib64/libstdc++.so.6
<br>
0x0000002aa0fa9ec0  0x0000002aa102e118  Yes         .../lib/libmpi.so.0
<br>
0x0000002aa1178560  0x0000002aa11af708  Yes         .../lib/liborte.so.0
<br>
0x0000002aa12cffb0  0x0000002aa12f2988  Yes         .../lib/libopal.so.0
<br>
0x0000002aa1424180  0x0000002aa14249d8  Yes         /lib64/libutil.so.1
<br>
0x0000002aa152a760  0x0000002aa1536368  Yes         /lib64/libnsl.so.1
<br>
0x0000002aa3540b80  0x0000002aa3551077  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libvapi.so
<br>
0x0000002aa365e0a0  0x0000002aa3664a86  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libmosal.so
<br>
0x0000002aa470db50  0x0000002aa4719438  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/librhhul.so
<br>
0x0000002ac4e508c0  0x0000002ac4e50ed8  Yes         .../mexMPI_Constants.mexa64
<br>
0x0000002ac4f52740  0x0000002ac4f52a28  Yes         .../mexMPI_Finalize.mexa64
<br>
<p>(gdb) c
<br>
<span class="quotelev2">&gt;&gt; exit
</span><br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 182992729024 (LWP 21848)]
<br>
opal_mem_free_free_hook (ptr=0x7fbfff96d0, caller=0xa8d4f8) at memory_malloc_hooks.c:65
<br>
<p>(gdb) info sharedlibrary
<br>
<span class="quotelev1">&gt;From                To                  Syms Read   Shared Object Library
</span><br>
...
<br>
0x0000002aa1424180  0x0000002aa14249d8  Yes         /lib64/libutil.so.1
<br>
0x0000002aa152a760  0x0000002aa1536368  Yes         /lib64/libnsl.so.1
<br>
0x0000002aa3540b80  0x0000002aa3551077  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libvapi.so
<br>
0x0000002aa365e0a0  0x0000002aa3664a86  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libmosal.so
<br>
0x0000002aa470db50  0x0000002aa4719438  Yes         /usr/local/ibgd-1.8.0/driver/infinihost/lib64/librhhul.so
<br>
<p>(gdb) list
<br>
63      static void
<br>
64      opal_mem_free_free_hook (void *ptr, const void *caller)
<br>
65      {
<br>
66          /* dispatch about the pending free */
<br>
67          opal_mem_free_release_hook(ptr, malloc_usable_size(ptr));
<br>
68
<br>
69          __free_hook = old_free_hook;
<br>
70
<br>
71          /* call the next chain down */
<br>
72          free(ptr);
<br>
73
<br>
74          /* save the hooks again and restore our hook again */
<br>
<p>(gdb) print ptr
<br>
$2 = (void *) 0x7fbfff96d0
<br>
(gdb) print caller
<br>
$3 = (const void *) 0xa8d4f8
<br>
(gdb) print __free_hook
<br>
$4 = (void (*)(void *, const void *)) 0x2aa12f1d79 &lt;opal_mem_free_free_hook&gt;
<br>
(gdb) print old_free_hook
<br>
Cannot access memory at address 0x2aa1422800
<br>
<p><p>Before I start blindly hacking a workaround, can somebody who's familiar
<br>
with the openmpi internals verify that this is a real bug, suggest a
<br>
correct fix, and/or comment on other potential problems with running in
<br>
an interpreter.
<br>
<p>Thanks-
<br>
<p>-Neil
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Previous message:</strong> <a href="0887.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Milestone for OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe reply:</strong> <a href="0889.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Reply:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
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
