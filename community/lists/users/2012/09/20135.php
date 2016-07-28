<?
$subject_val = "[OMPI users] SIGSEGV in OMPI 1.6.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 00:06:36 2012" -->
<!-- isoreceived="20120906040636" -->
<!-- sent="Wed, 5 Sep 2012 21:06:12 -0700" -->
<!-- isosent="20120906040612" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEGV in OMPI 1.6.x" -->
<!-- id="CADEJBEVFcsyh5WnK=3YJ6w7b2AASrF7YC4uiMCVAqia-J6CDBg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEGV in OMPI 1.6.x<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 00:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20134.php">George Bosilca: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>While debugging a mysterious crash of a code, I was able to trace down
<br>
to a SIGSEGV in OMPI 1.6 and 1.6.1. The offending code is in
<br>
opal/mca/memory/linux/malloc.c. Please see the following gdb log.
<br>
<p>(gdb) c
<br>
Continuing.
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
opal_memory_ptmalloc2_int_free (av=0x2fd0637, mem=0x203a746f74512000)
<br>
at malloc.c:4385
<br>
4385          nextsize = chunksize(nextchunk);
<br>
(gdb) l
<br>
4380           Consolidate other non-mmapped chunks as they arrive.
<br>
4381        */
<br>
4382
<br>
4383        else if (!chunk_is_mmapped(p)) {
<br>
4384          nextchunk = chunk_at_offset(p, size);
<br>
4385          nextsize = chunksize(nextchunk);
<br>
4386          assert(nextsize &gt; 0);
<br>
4387
<br>
4388          /* consolidate backward */
<br>
4389          if (!prev_inuse(p)) {
<br>
(gdb) bt
<br>
#0  opal_memory_ptmalloc2_int_free (av=0x2fd0637,
<br>
mem=0x203a746f74512000) at malloc.c:4385
<br>
#1  0x00002ae6b18ea0c0 in opal_memory_ptmalloc2_free (mem=0x2fd0637)
<br>
at malloc.c:3511
<br>
#2  0x00002ae6b18ea736 in opal_memory_linux_free_hook
<br>
(__ptr=0x2fd0637, caller=0x203a746f74512000) at hooks.c:705
<br>
#3  0x0000000001412fcc in for_dealloc_allocatable ()
<br>
#4  0x00000000007767b1 in ALLOC::dealloc_d2 (array=@0x2fd0647,
<br>
name=@0x6f6e6f69006f6e78, routine=Cannot access memory at address 0x0
<br>
) at alloc.F90:1357
<br>
#5  0x000000000082628c in M_LDAU::hubbard_term (scell=..., nua=@0xd5,
<br>
na=@0xd5, isa=..., xa=..., indxua=..., maxnh=@0xcf4ff, maxnd=@0xcf4ff,
<br>
lasto=..., iphorb=...,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numd=..., listdptr=..., listd=..., numh=..., listhptr=...,
<br>
listh=..., nspin=@0xcf4ff00000002, dscf=..., eldau=@0x0, deldau=@0x0,
<br>
fa=..., stress=..., h=...,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;first=@0x0, last=@0x0) at ldau.F:752
<br>
#6  0x00000000006cd532 in M_SETUP_HAMILTONIAN::setup_hamiltonian
<br>
(first=@0x0, last=@0x0, iscf=@0x2) at setup_hamiltonian.F:199
<br>
#7  0x000000000070e257 in M_SIESTA_FORCES::siesta_forces
<br>
(istep=@0xf9a4d07000000000) at siesta_forces.F:90
<br>
#8  0x000000000070e475 in siesta () at siesta.F:23
<br>
#9  0x000000000045e47c in main ()
<br>
<p>Can anybody shed some light here on what could be wrong?
<br>
<p>Thanks,
<br>
<p>Yong Qin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20136.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20134.php">George Bosilca: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Reply:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
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
