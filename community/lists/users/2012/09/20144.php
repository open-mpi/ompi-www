<?
$subject_val = "Re: [OMPI users] SIGSEGV in OMPI 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 12:52:27 2012" -->
<!-- isoreceived="20120906165227" -->
<!-- sent="Thu, 6 Sep 2012 09:52:03 -0700" -->
<!-- isosent="20120906165203" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV in OMPI 1.6.x" -->
<!-- id="CADEJBEUp-L0E-0tipNvBrzka0SA4JQ+YKu7B49ML58938DG=Ww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="256DA22F-F9AC-4746-ACD9-501F8208E718_at_cisco.com" -->
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
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 12:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>In reply to:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff. I will definitely do the failure analysis. But just
<br>
wanted to confirm this isn't something special in OMPI itself, e.g.,
<br>
missing some configuration settings, etc.
<br>
<p><p>On Thu, Sep 6, 2012 at 5:01 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you run into a segv in this code, it almost certainly means that you have heap corruption somewhere.  FWIW, that has *always* been what it meant when I've run into segv's in any code under in opal/mca/memory/linux/.  Meaning: my user code did something wrong, it created heap corruption, and then later some malloc() or free() caused a segv in this area of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code is the same ptmalloc memory allocator that has shipped in glibc for years.  I'll be hard-pressed to say that any code is 100% bug free :-), but I'd be surprised if there is a bug in this particular chunk of code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd run your code through valgrind or some other memory-checking debugger and see if that can shed any light on what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2012, at 12:06 AM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While debugging a mysterious crash of a code, I was able to trace down
</span><br>
<span class="quotelev2">&gt;&gt; to a SIGSEGV in OMPI 1.6 and 1.6.1. The offending code is in
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/memory/linux/malloc.c. Please see the following gdb log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) c
</span><br>
<span class="quotelev2">&gt;&gt; Continuing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; opal_memory_ptmalloc2_int_free (av=0x2fd0637, mem=0x203a746f74512000)
</span><br>
<span class="quotelev2">&gt;&gt; at malloc.c:4385
</span><br>
<span class="quotelev2">&gt;&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) l
</span><br>
<span class="quotelev2">&gt;&gt; 4380           Consolidate other non-mmapped chunks as they arrive.
</span><br>
<span class="quotelev2">&gt;&gt; 4381        */
</span><br>
<span class="quotelev2">&gt;&gt; 4382
</span><br>
<span class="quotelev2">&gt;&gt; 4383        else if (!chunk_is_mmapped(p)) {
</span><br>
<span class="quotelev2">&gt;&gt; 4384          nextchunk = chunk_at_offset(p, size);
</span><br>
<span class="quotelev2">&gt;&gt; 4385          nextsize = chunksize(nextchunk);
</span><br>
<span class="quotelev2">&gt;&gt; 4386          assert(nextsize &gt; 0);
</span><br>
<span class="quotelev2">&gt;&gt; 4387
</span><br>
<span class="quotelev2">&gt;&gt; 4388          /* consolidate backward */
</span><br>
<span class="quotelev2">&gt;&gt; 4389          if (!prev_inuse(p)) {
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  opal_memory_ptmalloc2_int_free (av=0x2fd0637,
</span><br>
<span class="quotelev2">&gt;&gt; mem=0x203a746f74512000) at malloc.c:4385
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002ae6b18ea0c0 in opal_memory_ptmalloc2_free (mem=0x2fd0637)
</span><br>
<span class="quotelev2">&gt;&gt; at malloc.c:3511
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002ae6b18ea736 in opal_memory_linux_free_hook
</span><br>
<span class="quotelev2">&gt;&gt; (__ptr=0x2fd0637, caller=0x203a746f74512000) at hooks.c:705
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x0000000001412fcc in for_dealloc_allocatable ()
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00000000007767b1 in ALLOC::dealloc_d2 (array=@0x2fd0647,
</span><br>
<span class="quotelev2">&gt;&gt; name=@0x6f6e6f69006f6e78, routine=Cannot access memory at address 0x0
</span><br>
<span class="quotelev2">&gt;&gt; ) at alloc.F90:1357
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x000000000082628c in M_LDAU::hubbard_term (scell=..., nua=@0xd5,
</span><br>
<span class="quotelev2">&gt;&gt; na=@0xd5, isa=..., xa=..., indxua=..., maxnh=@0xcf4ff, maxnd=@0xcf4ff,
</span><br>
<span class="quotelev2">&gt;&gt; lasto=..., iphorb=...,
</span><br>
<span class="quotelev2">&gt;&gt;    numd=..., listdptr=..., listd=..., numh=..., listhptr=...,
</span><br>
<span class="quotelev2">&gt;&gt; listh=..., nspin=@0xcf4ff00000002, dscf=..., eldau=@0x0, deldau=@0x0,
</span><br>
<span class="quotelev2">&gt;&gt; fa=..., stress=..., h=...,
</span><br>
<span class="quotelev2">&gt;&gt;    first=@0x0, last=@0x0) at ldau.F:752
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00000000006cd532 in M_SETUP_HAMILTONIAN::setup_hamiltonian
</span><br>
<span class="quotelev2">&gt;&gt; (first=@0x0, last=@0x0, iscf=@0x2) at setup_hamiltonian.F:199
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x000000000070e257 in M_SIESTA_FORCES::siesta_forces
</span><br>
<span class="quotelev2">&gt;&gt; (istep=@0xf9a4d07000000000) at siesta_forces.F:90
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x000000000070e475 in siesta () at siesta.F:23
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x000000000045e47c in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody shed some light here on what could be wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yong Qin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20143.php">Yonghui: "[OMPI users] MPI_Allreduce fail  (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>In reply to:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20145.php">Douglas Eadline: "[OMPI users] Open-mx issue with ompi 1.6.1"</a>
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
