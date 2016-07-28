<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 00:01:04 2013" -->
<!-- isoreceived="20130829040104" -->
<!-- sent="Thu, 29 Aug 2013 14:01:01 +1000" -->
<!-- isosent="20130829040101" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="521EC77D.5020901_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7493854.CoGuLmnXzt_at_quad" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-29 00:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12809.php">Chris Samuel: "[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 28/08/13 19:36, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; With RHEL 6.4 gfortran it instead SEGV's straight away
</span><br>
<p>Using strace I can see a mmap(2) (called from malloc I presume)
<br>
failing just before the SEGV.
<br>
<p>Process 6799 detached
<br>
Process 6798 detached
<br>
&nbsp;Hello, world, I am            0  of            1
<br>
[pid  6796] mmap(NULL, 8560001024, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = -1 ENOMEM (Cannot allocate memory)
<br>
[pid  6796] --- SIGSEGV (Segmentation fault) @ 0 (0) ---
<br>
[barcoo:06796] *** Process received signal ***
<br>
[barcoo:06796] Signal: Segmentation fault (11)
<br>
[barcoo:06796] Signal code: Address not mapped (1)
<br>
[barcoo:06796] Failing at address: 0x20078d708
<br>
[pid  6796] mmap(NULL, 2097152, PROT_NONE, MAP_PRIVATE|MAP_ANONYMOUS|MAP_NORESERVE, -1, 0) = 0x7f75a5fed000
<br>
[barcoo:06796] [ 0] /lib64/libpthread.so.0() [0x3f7b60f500]
<br>
[barcoo:06796] [ 1] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x982) [0x7f77a68c2dd2]
<br>
[barcoo:06796] [ 2] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x52) [0x7f77a68c3f42]
<br>
[barcoo:06796] [ 3] ./gnumyhello_f90(MAIN__+0x146) [0x400f6a]
<br>
[barcoo:06796] [ 4] ./gnumyhello_f90(main+0x2a) [0x4011ea]
<br>
[barcoo:06796] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3f7b21ecdd]
<br>
[barcoo:06796] [ 6] ./gnumyhello_f90() [0x400d69]
<br>
[barcoo:06796] *** End of error message ***
<br>
[pid  6796] --- SIGSEGV (Segmentation fault) @ 0 (0) ---
<br>
[pid  6796] +++ killed by SIGSEGV (core dumped) +++
<br>
<p><p>The SEGV occurs (according to the gdb core dump I have) at the
<br>
second set_head() call in this code:
<br>
<p>&nbsp;&nbsp;/* check that one of the above allocation paths succeeded */
<br>
&nbsp;&nbsp;if ((unsigned long)(size) &gt;= (unsigned long)(nb + MINSIZE)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remainder_size = size - nb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remainder = chunk_at_offset(p, nb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;av-&gt;top = remainder;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ? NON_MAIN_ARENA : 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set_head(remainder, remainder_size | PREV_INUSE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;check_malloced_chunk(av, p, nb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return chunk2mem(p);
<br>
&nbsp;&nbsp;}
<br>
<p><p>The arguments to that function are:
<br>
<p>(gdb) print remainder
<br>
$1 = (struct malloc_chunk *) 0x2008e5700
<br>
<p>(gdb) print remainder_size
<br>
$2 = 0
<br>
<p>ANy ideas?
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlIex30ACgkQO2KABBYQAh8HmQCgjj7tReOfdubczho7x9poprM7
<br>
5CwAnRBlw2LHrVHQsu2M1W6qo2H2HOzb
<br>
=dasp
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12817.php">Rishi Kaundinya Mutnuru: "[OMPI devel] Compilation error with OpenIPMI in ubntu 12.04"</a>
<li><strong>Previous message:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12809.php">Chris Samuel: "[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
