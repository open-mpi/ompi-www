<?
$subject_val = "[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 05:36:24 2013" -->
<!-- isoreceived="20130828093624" -->
<!-- sent="Wed, 28 Aug 2013 19:36:21 +1000" -->
<!-- isosent="20130828093621" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="7493854.CoGuLmnXzt_at_quad" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-28 05:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>One of our users (oh, OK, our director, one of the Dalton developers)
<br>
has found an odd behaviour of OMPI 1.6.5 on our x86 clusters and has
<br>
managed to get a small reproducer - a modified version of the
<br>
ubiquitous F90 &quot;hello world&quot; MPI program.
<br>
<p>We find that if we run this program (compiled with either Intel or GCC)
<br>
after doing &quot;ulimit -v $((1*1024*1024))&quot; to simulate the default 1GB
<br>
memory limit for jobs under Slurm we get odd, but different behaviour.
<br>
<p>With the Intel compilers it appears to just hang, but if I run it under
<br>
strace I see it looping constantly SEGV'ing.
<br>
<p>With RHEL 6.4 gfortran it instead SEGV's straight away and gives a
<br>
stack trace:
<br>
<p>&nbsp;Hello, world, I am            0  of            1
<br>
[barcoo:27489] *** Process received signal ***
<br>
[barcoo:27489] Signal: Segmentation fault (11)
<br>
[barcoo:27489] Signal code: Address not mapped (1)
<br>
[barcoo:27489] Failing at address: 0x2008e5708
<br>
[barcoo:27489] [ 0] /lib64/libpthread.so.0() [0x3f7b60f500]
<br>
[barcoo:27489] [ 1] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x982) [0x7f83caff6dd2]
<br>
[barcoo:27489] [ 2] /usr/local/openmpi/1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x52) [0x7f83caff7f42]
<br>
[barcoo:27489] [ 3] ./gnumyhello_f90(MAIN__+0x146) [0x400f6a]
<br>
[barcoo:27489] [ 4] ./gnumyhello_f90(main+0x2a) [0x4011ea]
<br>
[barcoo:27489] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3f7b21ecdd]
<br>
[barcoo:27489] [ 6] ./gnumyhello_f90() [0x400d69]
<br>
[barcoo:27489] *** End of error message ***
<br>
<p><p>If I let it generate a core file &quot;bt&quot; tells me:
<br>
<p>(gdb) bt
<br>
#0  sYSMALLOc (av=0xffffffffffffefd0, bytes=&lt;value optimized out&gt;) at malloc.c:3240
<br>
#1  opal_memory_ptmalloc2_int_malloc (av=0xffffffffffffefd0, bytes=&lt;value optimized out&gt;) at malloc.c:4328
<br>
#2  0x00007f83caff7f42 in opal_memory_ptmalloc2_malloc (bytes=8560000000) at malloc.c:3433
<br>
#3  0x0000000000400f6a in main () at gnumyhello_f90.f90:26
<br>
#4  0x00000000004011ea in main ()
<br>
<p><p>I've attached his reproducer program, I've just compiled it with:
<br>
<p>mpif90 -g -o ./gnumyhello_f90 gnumyhello_f90.f90
<br>
<p>We've reproduced it on two different Intel clusters (both RHEL 6.4,
<br>
one Nehalem and one SandyBridge) so I'd be really interested to
<br>
know if this is a bug?
<br>
<p>Thanks!
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12809/gnumyhello_f90.f90">gnumyhello_f90.f90</a>
</ul>
<!-- attachment="gnumyhello_f90.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12808.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
