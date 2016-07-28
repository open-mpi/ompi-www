<?
$subject_val = "[OMPI users] divide-by-zero in mca_btl_openib_add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 09:59:41 2014" -->
<!-- isoreceived="20140526135941" -->
<!-- sent="Mon, 26 May 2014 15:59:38 +0200" -->
<!-- isosent="20140526135938" -->
<!-- name="Alain Miniussi" -->
<!-- email="alain.miniussi_at_[hidden]" -->
<!-- subject="[OMPI users] divide-by-zero in mca_btl_openib_add_procs" -->
<!-- id="538348CA.2010109_at_oca.eu" -->
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
<strong>Subject:</strong> [OMPI users] divide-by-zero in mca_btl_openib_add_procs<br>
<strong>From:</strong> Alain Miniussi (<em>alain.miniussi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-26 09:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a failure with the following minimalistic testcase:
<br>
$: more ./test.c
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
$: mpicc -v
<br>
icc version 13.1.1 (gcc version 4.4.7 compatibility)
<br>
$: mpicc ./test.c
<br>
$: ./a.out
<br>
[tagir:02855] *** Process received signal ***
<br>
[tagir:02855] Signal: Floating point exception (8)
<br>
[tagir:02855] Signal code: Integer divide-by-zero (1)
<br>
[tagir:02855] Failing at address: 0x2aef6e5b2d9f
<br>
[tagir:02855] [ 0] /lib64/libpthread.so.0[0x30f920f710]
<br>
[tagir:02855] [ 1] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0xe9f)[0x2aef6e5b2d9f]
<br>
[tagir:02855] [ 2] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_bml_r2.so(+0x1481)[0x2aef6e3a6481]
<br>
[tagir:02855] [ 3] 
<br>
/softs/openmpi-1.8.1-intel13/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0xa8)[0x2aef6f8ef2f8]
<br>
[tagir:02855] [ 4] 
<br>
/softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(ompi_mpi_init+0x9f6)[0x2aef69572236]
<br>
[tagir:02855] [ 5] 
<br>
/softs/openmpi-1.8.1-intel13/lib/libmpi.so.1(MPI_Init+0xef)[0x2aef6959474f]
<br>
[tagir:02855] [ 6] ./a.out[0x400dd1]
<br>
[tagir:02855] [ 7] /lib64/libc.so.6(__libc_start_main+0xfd)[0x30f8a1ed1d]
<br>
[tagir:02855] [ 8] ./a.out[0x400cc9]
<br>
[tagir:02855] *** End of error message ***
<br>
$:
<br>
<p>Versions info:
<br>
$: mpicc -v
<br>
icc version 13.1.1 (gcc version 4.4.7 compatibility)
<br>
$: ldd ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffbb197000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.1 =&gt; /softs/openmpi-1.8.1-intel13/lib/libmpi.so.1 
<br>
(0x00002b20262ee000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00000030f8e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000030ff200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000030f9200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00000030f8a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000030f9600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.7 =&gt; 
<br>
/softs/openmpi-1.8.1-intel13/lib/libopen-rte.so.7 (0x00002b202660d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.6 =&gt; 
<br>
/softs/openmpi-1.8.1-intel13/lib/libopen-pal.so.6 (0x00002b20268a1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00002b2026ba6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00000030f9e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003109800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000310aa00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; 
<br>
/softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libimf.so 
<br>
(0x00002b2026db0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; 
<br>
/softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libsvml.so 
<br>
(0x00002b202726d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libirng.so =&gt; 
<br>
/softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libirng.so 
<br>
(0x00002b2027c37000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; 
<br>
/softs/intel/composer_xe_2013.3.163/compiler/lib/intel64/libintlc.so.5 
<br>
(0x00002b2027e3e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00000030f8600000)
<br>
$:
<br>
<p>I tried to goole the issue, and saw something regarding an old 
<br>
vectorization bug with intel compiler, but that was a lonng time ago and 
<br>
seemed to be fixed for 1.6.x.
<br>
Also, &quot;make check&quot; went fine ???
<br>
<p>Any idea ?
<br>
<p>Cheers
<br>
<p><pre>
-- 
---
Alain
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Previous message:</strong> <a href="24477.php">Ralph Castain: "Re: [OMPI users] False positive from valgrind in sec_basic.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24479.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>Reply:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
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
