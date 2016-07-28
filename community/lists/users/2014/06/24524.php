<?
$subject_val = "[OMPI users] intermittent segfaults with openib on ring_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 12:38:26 2014" -->
<!-- isoreceived="20140603163826" -->
<!-- sent="Tue, 3 Jun 2014 12:38:19 -0400" -->
<!-- isosent="20140603163819" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="[OMPI users] intermittent segfaults with openib on ring_c.c" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159EC104B8_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] intermittent segfaults with openib on ring_c.c<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 12:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe reply:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello openmpi-users,
<br>
<p>I'm running into a perplexing problem on a new system, whereby I'm experiencing intermittent segmentation faults when I run the ring_c.c example and use the openib BTL. See an example below. Approximately 50% of the time it provides the expected output, but the other 50% of the time, it segfaults. LD_LIBRARY_PATH is set correctly, and the version of &quot;mpirun&quot; being invoked is correct. The output of ompi_info -all is attached.
<br>
<p>One potential problem may be that the system that OpenMPI was compiled on is mostly the same as the system where it is being executed, but there are some differences in the installed packages. I've checked the critical ones (libibverbs, librdmacm, libmlx4-rdmav2, etc.), and they appear to be the same.
<br>
<p>Can anyone suggest how I might start tracking this problem down?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>[binf102:fischega] $ mpirun -np 2 --mca btl openib,self ring_c
<br>
[binf102:31268] *** Process received signal ***
<br>
[binf102:31268] Signal: Segmentation fault (11)
<br>
[binf102:31268] Signal code: Address not mapped (1)
<br>
[binf102:31268] Failing at address: 0x10
<br>
[binf102:31268] [ 0] /lib64/libpthread.so.0(+0xf7c0) [0x2b42213f57c0]
<br>
[binf102:31268] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3) [0x2b42203fd7e3]
<br>
[binf102:31268] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x8b) [0x2b4220400d3b]
<br>
[binf102:31268] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x6f) [0x2b42204008ef]
<br>
[binf102:31268] [ 4] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(+0x117876) [0x2b4220400876]
<br>
[binf102:31268] [ 5] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0xc34c) [0x2b422572334c]
<br>
[binf102:31268] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_class_initialize+0xaa) [0x2b422041d64a]
<br>
[binf102:31268] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0x1f12f) [0x2b422573612f]
<br>
[binf102:31268] [ 8] /lib64/libpthread.so.0(+0x77b6) [0x2b42213ed7b6]
<br>
[binf102:31268] [ 9] /lib64/libc.so.6(clone+0x6d) [0x2b42216dcd6d]
<br>
[binf102:31268] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 31268 on node xxxx102 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24524/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24523.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe reply:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
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
