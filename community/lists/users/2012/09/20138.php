<?
$subject_val = "Re: [OMPI users] SIGSEGV in OMPI 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 08:01:06 2012" -->
<!-- isoreceived="20120906120106" -->
<!-- sent="Thu, 6 Sep 2012 08:01:01 -0400" -->
<!-- isosent="20120906120101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV in OMPI 1.6.x" -->
<!-- id="256DA22F-F9AC-4746-ACD9-501F8208E718_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADEJBEVFcsyh5WnK=3YJ6w7b2AASrF7YC4uiMCVAqia-J6CDBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV in OMPI 1.6.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 08:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20139.php">Jeff Squyres: "Re: [OMPI users] Regarding the Pthreads"</a>
<li><strong>Previous message:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20135.php">Yong Qin: "[OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you run into a segv in this code, it almost certainly means that you have heap corruption somewhere.  FWIW, that has *always* been what it meant when I've run into segv's in any code under in opal/mca/memory/linux/.  Meaning: my user code did something wrong, it created heap corruption, and then later some malloc() or free() caused a segv in this area of the code.
<br>
<p>This code is the same ptmalloc memory allocator that has shipped in glibc for years.  I'll be hard-pressed to say that any code is 100% bug free :-), but I'd be surprised if there is a bug in this particular chunk of code.  
<br>
<p>I'd run your code through valgrind or some other memory-checking debugger and see if that can shed any light on what's going on.
<br>
<p><p>On Sep 6, 2012, at 12:06 AM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While debugging a mysterious crash of a code, I was able to trace down
</span><br>
<span class="quotelev1">&gt; to a SIGSEGV in OMPI 1.6 and 1.6.1. The offending code is in
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/malloc.c. Please see the following gdb log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) c
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; opal_memory_ptmalloc2_int_free (av=0x2fd0637, mem=0x203a746f74512000)
</span><br>
<span class="quotelev1">&gt; at malloc.c:4385
</span><br>
<span class="quotelev1">&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev1">&gt; (gdb) l
</span><br>
<span class="quotelev1">&gt; 4380           Consolidate other non-mmapped chunks as they arrive.
</span><br>
<span class="quotelev1">&gt; 4381        */
</span><br>
<span class="quotelev1">&gt; 4382
</span><br>
<span class="quotelev1">&gt; 4383        else if (!chunk_is_mmapped(p)) {
</span><br>
<span class="quotelev1">&gt; 4384          nextchunk = chunk_at_offset(p, size);
</span><br>
<span class="quotelev1">&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev1">&gt; 4386          assert(nextsize &gt; 0);
</span><br>
<span class="quotelev1">&gt; 4387
</span><br>
<span class="quotelev1">&gt; 4388          /* consolidate backward */
</span><br>
<span class="quotelev1">&gt; 4389          if (!prev_inuse(p)) {
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_memory_ptmalloc2_int_free (av=0x2fd0637,
</span><br>
<span class="quotelev1">&gt; mem=0x203a746f74512000) at malloc.c:4385
</span><br>
<span class="quotelev1">&gt; #1  0x00002ae6b18ea0c0 in opal_memory_ptmalloc2_free (mem=0x2fd0637)
</span><br>
<span class="quotelev1">&gt; at malloc.c:3511
</span><br>
<span class="quotelev1">&gt; #2  0x00002ae6b18ea736 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev1">&gt; (__ptr=0x2fd0637, caller=0x203a746f74512000) at hooks.c:705
</span><br>
<span class="quotelev1">&gt; #3  0x0000000001412fcc in for_dealloc_allocatable ()
</span><br>
<span class="quotelev1">&gt; #4  0x00000000007767b1 in ALLOC::dealloc_d2 (array=@0x2fd0647,
</span><br>
<span class="quotelev1">&gt; name=@0x6f6e6f69006f6e78, routine=Cannot access memory at address 0x0
</span><br>
<span class="quotelev1">&gt; ) at alloc.F90:1357
</span><br>
<span class="quotelev1">&gt; #5  0x000000000082628c in M_LDAU::hubbard_term (scell=..., nua=@0xd5,
</span><br>
<span class="quotelev1">&gt; na=@0xd5, isa=..., xa=..., indxua=..., maxnh=@0xcf4ff, maxnd=@0xcf4ff,
</span><br>
<span class="quotelev1">&gt; lasto=..., iphorb=...,
</span><br>
<span class="quotelev1">&gt;    numd=..., listdptr=..., listd=..., numh=..., listhptr=...,
</span><br>
<span class="quotelev1">&gt; listh=..., nspin=@0xcf4ff00000002, dscf=..., eldau=@0x0, deldau=@0x0,
</span><br>
<span class="quotelev1">&gt; fa=..., stress=..., h=...,
</span><br>
<span class="quotelev1">&gt;    first=@0x0, last=@0x0) at ldau.F:752
</span><br>
<span class="quotelev1">&gt; #6  0x00000000006cd532 in M_SETUP_HAMILTONIAN::setup_hamiltonian
</span><br>
<span class="quotelev1">&gt; (first=@0x0, last=@0x0, iscf=@0x2) at setup_hamiltonian.F:199
</span><br>
<span class="quotelev1">&gt; #7  0x000000000070e257 in M_SIESTA_FORCES::siesta_forces
</span><br>
<span class="quotelev1">&gt; (istep=@0xf9a4d07000000000) at siesta_forces.F:90
</span><br>
<span class="quotelev1">&gt; #8  0x000000000070e475 in siesta () at siesta.F:23
</span><br>
<span class="quotelev1">&gt; #9  0x000000000045e47c in main ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anybody shed some light here on what could be wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yong Qin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20139.php">Jeff Squyres: "Re: [OMPI users] Regarding the Pthreads"</a>
<li><strong>Previous message:</strong> <a href="20137.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20135.php">Yong Qin: "[OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20144.php">Yong Qin: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
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
