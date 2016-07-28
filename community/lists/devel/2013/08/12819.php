<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 09:18:14 2013" -->
<!-- isoreceived="20130829131814" -->
<!-- sent="Thu, 29 Aug 2013 06:18:10 -0700" -->
<!-- isosent="20130829131810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="74698639-D1FF-4396-B7E4-3E777F19E16D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="521EC77D.5020901_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 09:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12820.php">Bibrak Qamar: "[OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would guess the problem is that your memory restriction is causing a malloc failure based on this line:
<br>
<p><span class="quotelev1">&gt; [pid  6796] mmap(NULL, 8560001024, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = -1 ENOMEM (Cannot allocate memory)
</span><br>
<p>and we probably don't protect against that failure as well as we should. I doubt we would issue another 1.6 release for it, though.
<br>
<p><p>On Aug 28, 2013, at 9:01 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 28/08/13 19:36, Chris Samuel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With RHEL 6.4 gfortran it instead SEGV's straight away
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using strace I can see a mmap(2) (called from malloc I presume)
</span><br>
<span class="quotelev1">&gt; failing just before the SEGV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 6799 detached
</span><br>
<span class="quotelev1">&gt; Process 6798 detached
</span><br>
<span class="quotelev1">&gt; Hello, world, I am            0  of            1
</span><br>
<span class="quotelev1">&gt; [pid  6796] mmap(NULL, 8560001024, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = -1 ENOMEM (Cannot allocate memory)
</span><br>
<span class="quotelev1">&gt; [pid  6796] --- SIGSEGV (Segmentation fault) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] Failing at address: 0x20078d708
</span><br>
<span class="quotelev1">&gt; [pid  6796] mmap(NULL, 2097152, PROT_NONE, MAP_PRIVATE|MAP_ANONYMOUS|MAP_NORESERVE, -1, 0) = 0x7f75a5fed000
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 0] /lib64/libpthread.so.0() [0x3f7b60f500]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 1] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x982) [0x7f77a68c2dd2]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 2] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x52) [0x7f77a68c3f42]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 3] ./gnumyhello_f90(MAIN__+0x146) [0x400f6a]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 4] ./gnumyhello_f90(main+0x2a) [0x4011ea]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3f7b21ecdd]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] [ 6] ./gnumyhello_f90() [0x400d69]
</span><br>
<span class="quotelev1">&gt; [barcoo:06796] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [pid  6796] --- SIGSEGV (Segmentation fault) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; [pid  6796] +++ killed by SIGSEGV (core dumped) +++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The SEGV occurs (according to the gdb core dump I have) at the
</span><br>
<span class="quotelev1">&gt; second set_head() call in this code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* check that one of the above allocation paths succeeded */
</span><br>
<span class="quotelev1">&gt;  if ((unsigned long)(size) &gt;= (unsigned long)(nb + MINSIZE)) {
</span><br>
<span class="quotelev1">&gt;    remainder_size = size - nb;
</span><br>
<span class="quotelev1">&gt;    remainder = chunk_at_offset(p, nb);
</span><br>
<span class="quotelev1">&gt;    av-&gt;top = remainder;
</span><br>
<span class="quotelev1">&gt;    set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ? NON_MAIN_ARENA : 0));
</span><br>
<span class="quotelev1">&gt;    set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev1">&gt;    check_malloced_chunk(av, p, nb);
</span><br>
<span class="quotelev1">&gt;    return chunk2mem(p);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The arguments to that function are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) print remainder
</span><br>
<span class="quotelev1">&gt; $1 = (struct malloc_chunk *) 0x2008e5700
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) print remainder_size
</span><br>
<span class="quotelev1">&gt; $2 = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ANy ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlIex30ACgkQO2KABBYQAh8HmQCgjj7tReOfdubczho7x9poprM7
</span><br>
<span class="quotelev1">&gt; 5CwAnRBlw2LHrVHQsu2M1W6qo2H2HOzb
</span><br>
<span class="quotelev1">&gt; =dasp
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12820.php">Bibrak Qamar: "[OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12818.php">George Bosilca: "Re: [OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>In reply to:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
