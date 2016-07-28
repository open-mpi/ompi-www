<?
$subject_val = "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 18:41:23 2011" -->
<!-- isoreceived="20110919224123" -->
<!-- sent="Mon, 19 Sep 2011 16:41:08 -0600" -->
<!-- isosent="20110919224108" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FAAD498_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 18:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am observing differences in floating-point results from an application program that appear to be related to whether I link with OpenMPI 1.4.3 or MVAPICH 1.2.0.  Both packages were built with the same installation of Intel 11.1, as well as the application program; identical flags passed to the compiler in each case.
<br>
<p>I've tracked down some differences in a compute-only routine where I've printed out the inputs to the routine (to 18 digits) ; the inputs are identical.  The output numbers are different in the 16th place (perhaps a few in the 15th place).  These differences only show up for optimized code, not for -O0.
<br>
<p>My assumption is that some optimized math intrinsic is being replaced dynamically, but I do not know how to confirm this.  Anyone have guidance to offer? Or similar experience?
<br>
<p>Thanks very much
<br>
<p>Ed
<br>
<p>Just for what it's worth, here's the output of ldd:
<br>
<p>% ldd application_mvapich
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffe3746000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b5b45fc1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpich.so.1.0 =&gt; /usr/mpi/intel/mvapich-1.2.0/lib/shared/libmpich.so.1.0 (0x00002b5b462cd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00002b5b465ed000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00002b5b467fc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b5b46a04000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b5b46c21000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b5b46e2a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b5b47081000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b5b47285000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b5b475e3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b5b45da0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b5b477fb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b5b47b8f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b5b47da5000)
<br>
<p>% ldd application_openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff6ebff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b6e7c17d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f90.so.0 (0x00002b6e7c489000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f77.so.0 (0x00002b6e7c68d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi.so.0 (0x00002b6e7c8ca000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-rte.so.0 (0x00002b6e7cb9c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-pal.so.0 (0x00002b6e7ce01000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b6e7d077000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b6e7d27c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b6e7d494000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b6e7d697000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b6e7d8ee000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b6e7db0b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b6e7de69000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b6e7bf5c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libifport.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5 (0x00002b6e7e081000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libifcoremt.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5 (0x00002b6e7e1ba000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17346.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17344.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17348.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
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
