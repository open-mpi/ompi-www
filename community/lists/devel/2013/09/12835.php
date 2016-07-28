<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 02:51:42 2013" -->
<!-- isoreceived="20130902065142" -->
<!-- sent="Mon, 02 Sep 2013 16:51:39 +1000" -->
<!-- isosent="20130902065139" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="5224357B.90700_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52243106.5060702_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2013-09-02 02:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 02/09/13 16:32, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; I cannot duplicate this under valgrind or gdb and given that this
</span><br>
<span class="quotelev1">&gt; doesn't happen every time I run it and gdb indicates there are at
</span><br>
<span class="quotelev1">&gt; least 2 threads running then we're wondering if this is a race condition.
</span><br>
<p>I have also duplicated this problem with 1.7.3a1r29103.
<br>
<p>&nbsp;Hello, world, I am            0  of            1
<br>
[barcoo:03306] *** Process received signal ***
<br>
[barcoo:03306] Signal: Segmentation fault (11)
<br>
[barcoo:03306] Signal code: Address not mapped (1)
<br>
[barcoo:03306] Failing at address: 0x2009b4298
<br>
[barcoo:03306] [ 0] /lib64/libpthread.so.0() [0x3f7b60f500]
<br>
[barcoo:03306] [ 1] /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5(opal_memory_ptmalloc2_int_malloc+0x96a) [0x7f47de6935aa]
<br>
[barcoo:03306] [ 2] /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5(opal_memory_ptmalloc2_malloc+0x52) [0x7f47de694612]
<br>
[barcoo:03306] [ 3] ./1.7-gnumyhello_f90() [0x400dca]
<br>
[barcoo:03306] [ 4] ./1.7-gnumyhello_f90() [0x40104a]
<br>
[barcoo:03306] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3f7b21ecdd]
<br>
[barcoo:03306] [ 6] ./1.7-gnumyhello_f90() [0x400bc9]
<br>
[barcoo:03306] *** End of error message ***
<br>
<p>The backtrace I get from the core file isn't as useful though:
<br>
<p>(gdb) bt full
<br>
#0  0x00007fd9c4c255aa in opal_memory_ptmalloc2_int_malloc () from /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5
<br>
No symbol table info available.
<br>
#1  0x00007fd9c4c26612 in opal_memory_ptmalloc2_malloc () from /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5
<br>
No symbol table info available.
<br>
#2  0x0000000000400dca in main () at gnumyhello_f90.f90:26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;work = &lt;object is not allocated&gt;
<br>
#3  0x000000000040104a in main ()
<br>
No symbol table info available.
<br>
<p>OMPI 1.7 is built with exactly the same configure options as 1.6
<br>
and the executable is built with -g -O0.
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
<p>iEYEARECAAYFAlIkNXsACgkQO2KABBYQAh9fhQCdHUrlsl3ftY8VyDNRa8E8jKBx
<br>
BZkAnjJJIXgUzRV8T+VBmrS0MQjXS8zO
<br>
=B7GU
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12836.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
