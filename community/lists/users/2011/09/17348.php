<?
$subject_val = "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 07:25:40 2011" -->
<!-- isoreceived="20110920112540" -->
<!-- sent="Tue, 20 Sep 2011 13:25:28 +0200" -->
<!-- isosent="20110920112528" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="4E155B3E-104F-465C-BF2B-8D145C010FD2_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FAAD498_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 07:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
<br>
<p><span class="quotelev1">&gt; I am observing differences in floating-point results from an application program that appear to be related to whether I link with OpenMPI 1.4.3 or MVAPICH 1.2.0.  Both packages were built with the same installation of Intel 11.1, as well as the application program; identical flags passed to the compiler in each case.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ve tracked down some differences in a compute-only routine where I&#146;ve printed out the inputs to the routine (to 18 digits) ; the inputs are identical.  The output numbers are different in the 16th place (perhaps a few in the 15th place).  These differences only show up for optimized code, not for &#150;O0.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My assumption is that some optimized math intrinsic is being replaced dynamically, but I do not know how to confirm this.  Anyone have guidance to offer? Or similar experience?
</span><br>
<p>yes, I face it often but always at a magnitude where it's not of any concern (and not related to any MPI). Due to the limited precision in computers, a simple reordering of operation (although being equivalent in a mathematical sense) can lead to different results. Removing the anomalies with -O0 could proof that.
<br>
<p>The other point I heard especially for the x86 instruction set is, that the internal FPU has still 80 bits, while the presentation in memory is only 64 bit. Hence when all can be done in the registers, the result can be different compared to the case when some interim results need to be stored to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it to stay always in 64 bit, and a similar one for Intel is -mp (now -fltconsistency) and -mp1.
<br>
<p><a href="http://www.pgroup.com/doc/pgiref.pdf">http://www.pgroup.com/doc/pgiref.pdf</a> (page 42)
<br>
<p><a href="http://software.intel.com/file/6335">http://software.intel.com/file/6335</a> (page 260)
<br>
<p>You could try with the mentioned switches whether you get more consistent output.
<br>
<p><p>If there would be a MPI ABI, and you could just drop in any MPI library, it would be quite easy to spot the real point where the discrepancy occured.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks very much
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just for what it&#146;s worth, here&#146;s the output of ldd:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; % ldd application_mvapich
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffe3746000)
</span><br>
<span class="quotelev1">&gt;         libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b5b45fc1000)
</span><br>
<span class="quotelev1">&gt;         libmpich.so.1.0 =&gt; /usr/mpi/intel/mvapich-1.2.0/lib/shared/libmpich.so.1.0 (0x00002b5b462cd000)
</span><br>
<span class="quotelev1">&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00002b5b465ed000)
</span><br>
<span class="quotelev1">&gt;         libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00002b5b467fc000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b5b46a04000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b5b46c21000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b5b46e2a000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b5b47081000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b5b47285000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b5b475e3000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b5b45da0000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b5b477fb000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b5b47b8f000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b5b47da5000)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; % ldd application_openmpi
</span><br>
<span class="quotelev1">&gt;        linux-vdso.so.1 =&gt;  (0x00007fff6ebff000)
</span><br>
<span class="quotelev1">&gt;         libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b6e7c17d000)
</span><br>
<span class="quotelev1">&gt;         libmpi_f90.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f90.so.0 (0x00002b6e7c489000)
</span><br>
<span class="quotelev1">&gt;         libmpi_f77.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f77.so.0 (0x00002b6e7c68d000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi.so.0 (0x00002b6e7c8ca000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-rte.so.0 (0x00002b6e7cb9c000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-pal.so.0 (0x00002b6e7ce01000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b6e7d077000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b6e7d27c000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b6e7d494000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b6e7d697000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b6e7d8ee000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b6e7db0b000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b6e7de69000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b6e7bf5c000)
</span><br>
<span class="quotelev1">&gt;         libifport.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5 (0x00002b6e7e081000)
</span><br>
<span class="quotelev1">&gt;         libifcoremt.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5 (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev1">&gt;         libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
</span><br>
<span class="quotelev1">&gt;         libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5 =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
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
<li><strong>Next message:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Reply:</strong> <a href="17349.php">Tim Prince: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
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
