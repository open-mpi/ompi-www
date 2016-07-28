<?
$subject_val = "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 18 05:43:07 2012" -->
<!-- isoreceived="20120718094307" -->
<!-- sent="Wed, 18 Jul 2012 11:42:55 +0200" -->
<!-- isosent="20120718094255" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS." -->
<!-- id="C0D76F6E-2602-436B-AE2E-016A56B846A8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="500646F8.6030300_at_yahoo.com.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS.<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-18 05:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19786.php">Jeff Squyres: "Re: [OMPI users] Beginners Tutorial Link broken"</a>
<li><strong>Previous message:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>In reply to:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 18.07.2012 um 07:17 schrieb Hongsheng Zhao:
<br>
<p><span class="quotelev1">&gt; After compiling openmpi using intel parallel studio, I've seen the following bashrc settings by others:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; source /home/zhanqgp/intel/composerxe/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt; source /home/zhanggp/intel/composerxe/mkl/bin/mklvars.sh intel64 lp64
</span><br>
<span class="quotelev1">&gt; export PATH=/home/zhanggp/software/openmpi-1.4.5/bin:$PATH
</span><br>
<span class="quotelev1">&gt; expott LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/zhanggp/software/openmpi-1.4.5/lib
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; export MKL_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please give me some hints the OMP_NUM_THREADS and MKL_NUM_THREADS used in bashrc file?  Must I use them?  Thanks in advance.
</span><br>
<p><p>If you grant some cores to your job to distribute the workload across the MPI processes, the built-in parallelization of the used library (MKL) may oversubscribe the system, as the default for it is to use all available cores in a machine. Means: if you have 4 cores in a machine and want to start 4 MPI processes. Each process will then start 4 processes when using the MKL and you end up with 16. Therefore often the MKL is limited to use just one core in such context.
<br>
<p>-- Reui
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19786.php">Jeff Squyres: "Re: [OMPI users] Beginners Tutorial Link broken"</a>
<li><strong>Previous message:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>In reply to:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<!-- nextthread="start" -->
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
