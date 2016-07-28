<?
$subject_val = "[OMPI users] issue with openmpi + CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 22:31:27 2015" -->
<!-- isoreceived="20150326023127" -->
<!-- sent="Thu, 26 Mar 2015 10:31:21 +0800" -->
<!-- isosent="20150326023121" -->
<!-- name="Zhisong Fu" -->
<!-- email="fuzhisong_at_[hidden]" -->
<!-- subject="[OMPI users] issue with openmpi + CUDA" -->
<!-- id="BLU436-SMTP913C629187BEBF91C7C382B2080_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] issue with openmpi + CUDA<br>
<strong>From:</strong> Zhisong Fu (<em>fuzhisong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-25 22:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Reply:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just started to use openmpi and am trying to run a MPI/GPU code. My code compiles but when I run, I get this error:
<br>
The library attempted to open the following supporting CUDA libraries,
<br>
but each of them failed.  CUDA-aware support is disabled.
<br>
/usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32
<br>
/usr/lib/libcuda.so.1: wrong ELF class: ELFCLASS32
<br>
If you are not interested in CUDA-aware support, then run with
<br>
--mca mpi_cuda_support 0 to suppress this message.  If you are interested
<br>
in CUDA-aware support, then try setting LD_LIBRARY_PATH to the location
<br>
of libcuda.so.1 to get passed this issue.
<br>
<p>I could not find a libcuda.so.1 in my system but I do find libcuda.so in /usr/local/cuda/lib64/stubs. Why is openmpi looking for libcuda.so.1 instead of libcuda.so?
<br>
I created a symbolic link to libcuda.so, now I get CUDA error 35: CUDA driver version is insufficient for CUDA runtime version.
<br>
I am not sure if this is related to libcuda.so or the driver since I could run this code using mvapich.
<br>
<p>Any input on the issue is really appreciated.
<br>
My openmpi version is 1.8.4, my cuda version is 6.5, driver version is 340.65.
<br>
<p>Thanks.
<br>
Jason
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26538.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<li><strong>Previous message:</strong> <a href="26536.php">Ralph Castain: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Reply:</strong> <a href="26543.php">Rolf vandeVaart: "Re: [OMPI users] issue with openmpi + CUDA"</a>
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
