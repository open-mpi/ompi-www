<?
$subject_val = "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 18 01:17:57 2012" -->
<!-- isoreceived="20120718051757" -->
<!-- sent="Wed, 18 Jul 2012 13:17:44 +0800" -->
<!-- isosent="20120718051744" -->
<!-- name="Hongsheng Zhao" -->
<!-- email="zhaohscas_at_[hidden]" -->
<!-- subject="[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS." -->
<!-- id="500646F8.6030300_at_yahoo.com.cn" -->
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
<strong>Subject:</strong> [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS.<br>
<strong>From:</strong> Hongsheng Zhao (<em>zhaohscas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-18 01:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Previous message:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Reply:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>After compiling openmpi using intel parallel studio, I've seen the 
<br>
following bashrc settings by others:
<br>
<p>----------------
<br>
source /home/zhanqgp/intel/composerxe/bin/compilervars.sh intel64
<br>
source /home/zhanggp/intel/composerxe/mkl/bin/mklvars.sh intel64 lp64
<br>
export PATH=/home/zhanggp/software/openmpi-1.4.5/bin:$PATH
<br>
expott 
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/zhanggp/software/openmpi-1.4.5/lib
<br>
export OMP_NUM_THREADS=1
<br>
export MKL_NUM_THREADS=1
<br>
----------------
<br>
<p>Could you please give me some hints the OMP_NUM_THREADS and 
<br>
MKL_NUM_THREADS used in bashrc file?  Must I use them?  Thanks in advance.
<br>
<p>Regards
<br>
<pre>
-- 
Hongsheng Zhao &lt;zhaohscas_at_[hidden]&gt;
School of Physics and Electrical Information Science,
Ningxia University, Yinchuan 750021, China
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Previous message:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Reply:</strong> <a href="19785.php">Reuti: "Re: [OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
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
