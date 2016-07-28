<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 06:36:52 2006" -->
<!-- isoreceived="20060523103652" -->
<!-- sent="Tue, 23 May 2006 06:36:44 -0400" -->
<!-- isosent="20060523103644" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory_malloc_hooks.c and dlclose()" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3813_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] memory_malloc_hooks.c and dlclose()" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 06:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Bug tracking"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe in reply to:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Neil --
<br>
<p>Many thanks for the detailed report!
<br>
<p>Our Memory Hooks Guy(tm) (Brian Barrett) is inprocessing at his summer
<br>
internship over the next 24-48 hours; this may delay the reply a little
<br>
bit.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Neil Ludban
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 22, 2006 6:36 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] memory_malloc_hooks.c and dlclose()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a core dump when using openmpi-1.0.2 with the MPI 
</span><br>
<span class="quotelev1">&gt; extensions
</span><br>
<span class="quotelev1">&gt; we're developing for the MATLAB interpreter.  This same build 
</span><br>
<span class="quotelev1">&gt; of openmpi
</span><br>
<span class="quotelev1">&gt; is working great with C programs and our extensions for gnu 
</span><br>
<span class="quotelev1">&gt; octave.  The
</span><br>
<span class="quotelev1">&gt; machine is AMD64 running Linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux kodos 2.6.9-5.ELsmp #1 SMP Wed Jan 5 19:29:47 EST 2005 
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe there's a bug in that opal_memory_malloc_hooks_init() links
</span><br>
<span class="quotelev1">&gt; itself into the __free_hook chain during initialization, but then it
</span><br>
<span class="quotelev1">&gt; never unlinks itself at shutdown.  In the interpreter environment,
</span><br>
<span class="quotelev1">&gt; libopal.so is dlclose()d and unmapped from memory long before the
</span><br>
<span class="quotelev1">&gt; interpreter is done with dynamic memory.  A quick check of the nightly
</span><br>
<span class="quotelev1">&gt; trunk snapshot reveals some function name changes, but no new shutdown
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After running this trivial MPI program on a single processor:
</span><br>
<span class="quotelev1">&gt; 	MPI_Init();
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; I'm back to the MATLAB prompt, and break into the debugger:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ^C
</span><br>
<span class="quotelev1">&gt; (gdb) info sharedlibrary
</span><br>
<span class="quotelev2">&gt; &gt;From                To                  Syms Read   Shared 
</span><br>
<span class="quotelev1">&gt; Object Library
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 0x0000002aa0b50740  0x0000002aa0b50a28  Yes         
</span><br>
<span class="quotelev1">&gt; .../mexMPI_Init.mexa64
</span><br>
<span class="quotelev1">&gt; 0x0000002aa0c52a50  0x0000002aa0c54318  Yes         
</span><br>
<span class="quotelev1">&gt; .../lib/libbcmpi.so.0
</span><br>
<span class="quotelev1">&gt; 0x0000002aa0dcef90  0x0000002aa0e37398  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libstdc++.so.6
</span><br>
<span class="quotelev1">&gt; 0x0000002aa0fa9ec0  0x0000002aa102e118  Yes         
</span><br>
<span class="quotelev1">&gt; .../lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; 0x0000002aa1178560  0x0000002aa11af708  Yes         
</span><br>
<span class="quotelev1">&gt; .../lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; 0x0000002aa12cffb0  0x0000002aa12f2988  Yes         
</span><br>
<span class="quotelev1">&gt; .../lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; 0x0000002aa1424180  0x0000002aa14249d8  Yes         
</span><br>
<span class="quotelev1">&gt; /lib64/libutil.so.1
</span><br>
<span class="quotelev1">&gt; 0x0000002aa152a760  0x0000002aa1536368  Yes         /lib64/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; 0x0000002aa3540b80  0x0000002aa3551077  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libvapi.so
</span><br>
<span class="quotelev1">&gt; 0x0000002aa365e0a0  0x0000002aa3664a86  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libmosal.so
</span><br>
<span class="quotelev1">&gt; 0x0000002aa470db50  0x0000002aa4719438  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/librhhul.so
</span><br>
<span class="quotelev1">&gt; 0x0000002ac4e508c0  0x0000002ac4e50ed8  Yes         
</span><br>
<span class="quotelev1">&gt; .../mexMPI_Constants.mexa64
</span><br>
<span class="quotelev1">&gt; 0x0000002ac4f52740  0x0000002ac4f52a28  Yes         
</span><br>
<span class="quotelev1">&gt; .../mexMPI_Finalize.mexa64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; exit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 182992729024 (LWP 21848)]
</span><br>
<span class="quotelev1">&gt; opal_mem_free_free_hook (ptr=0x7fbfff96d0, caller=0xa8d4f8) 
</span><br>
<span class="quotelev1">&gt; at memory_malloc_hooks.c:65
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) info sharedlibrary
</span><br>
<span class="quotelev2">&gt; &gt;From                To                  Syms Read   Shared 
</span><br>
<span class="quotelev1">&gt; Object Library
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 0x0000002aa1424180  0x0000002aa14249d8  Yes         
</span><br>
<span class="quotelev1">&gt; /lib64/libutil.so.1
</span><br>
<span class="quotelev1">&gt; 0x0000002aa152a760  0x0000002aa1536368  Yes         /lib64/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; 0x0000002aa3540b80  0x0000002aa3551077  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libvapi.so
</span><br>
<span class="quotelev1">&gt; 0x0000002aa365e0a0  0x0000002aa3664a86  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/libmosal.so
</span><br>
<span class="quotelev1">&gt; 0x0000002aa470db50  0x0000002aa4719438  Yes         
</span><br>
<span class="quotelev1">&gt; /usr/local/ibgd-1.8.0/driver/infinihost/lib64/librhhul.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) list
</span><br>
<span class="quotelev1">&gt; 63      static void
</span><br>
<span class="quotelev1">&gt; 64      opal_mem_free_free_hook (void *ptr, const void *caller)
</span><br>
<span class="quotelev1">&gt; 65      {
</span><br>
<span class="quotelev1">&gt; 66          /* dispatch about the pending free */
</span><br>
<span class="quotelev1">&gt; 67          opal_mem_free_release_hook(ptr, malloc_usable_size(ptr));
</span><br>
<span class="quotelev1">&gt; 68
</span><br>
<span class="quotelev1">&gt; 69          __free_hook = old_free_hook;
</span><br>
<span class="quotelev1">&gt; 70
</span><br>
<span class="quotelev1">&gt; 71          /* call the next chain down */
</span><br>
<span class="quotelev1">&gt; 72          free(ptr);
</span><br>
<span class="quotelev1">&gt; 73
</span><br>
<span class="quotelev1">&gt; 74          /* save the hooks again and restore our hook again */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) print ptr
</span><br>
<span class="quotelev1">&gt; $2 = (void *) 0x7fbfff96d0
</span><br>
<span class="quotelev1">&gt; (gdb) print caller
</span><br>
<span class="quotelev1">&gt; $3 = (const void *) 0xa8d4f8
</span><br>
<span class="quotelev1">&gt; (gdb) print __free_hook
</span><br>
<span class="quotelev1">&gt; $4 = (void (*)(void *, const void *)) 0x2aa12f1d79 
</span><br>
<span class="quotelev1">&gt; &lt;opal_mem_free_free_hook&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) print old_free_hook
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x2aa1422800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before I start blindly hacking a workaround, can somebody 
</span><br>
<span class="quotelev1">&gt; who's familiar
</span><br>
<span class="quotelev1">&gt; with the openmpi internals verify that this is a real bug, suggest a
</span><br>
<span class="quotelev1">&gt; correct fix, and/or comment on other potential problems with 
</span><br>
<span class="quotelev1">&gt; running in
</span><br>
<span class="quotelev1">&gt; an interpreter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Neil
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Bug tracking"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<li><strong>Maybe in reply to:</strong> <a href="0888.php">Neil Ludban: "[OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0903.php">Brian W. Barrett: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
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
