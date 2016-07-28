<?
$subject_val = "[OMPI users] cuda-memcheck reports errors for MPI functions after use of cudaSetDevice";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 08:59:30 2016" -->
<!-- isoreceived="20160608125930" -->
<!-- sent="Wed, 8 Jun 2016 14:59:24 +0200" -->
<!-- isosent="20160608125924" -->
<!-- name="Kristina Tesch" -->
<!-- email="Kristina.Tesch_at_[hidden]" -->
<!-- subject="[OMPI users] cuda-memcheck reports errors for MPI functions after use of cudaSetDevice" -->
<!-- id="2EFDD862-C5B1-44F1-9710-932FA74119D5_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI users] cuda-memcheck reports errors for MPI functions after use of cudaSetDevice<br>
<strong>From:</strong> Kristina Tesch (<em>Kristina.Tesch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 08:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29410.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>in my application I use CUDA-aware OpenMPI 1.10.2 together with CUDA 7.5. If I call cudaSetDevice() cuda-memcheck reports this error for all subsequent MPI function calls:
<br>
<p>========= CUDA-MEMCHECK
<br>
========= Program hit CUDA_ERROR_INVALID_VALUE (error 1) due to &quot;invalid argument&quot; on CUDA API call to cuPointerGetAttributes. 
<br>
=========     Saved host backtrace up to driver entry point at error
<br>
=========     Host Frame:/usr/lib64/libcuda.so.1 (cuPointerGetAttributes + 0x18d) [0x144ffd]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 [0xb0f52]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-pal.so.13 (mca_cuda_convertor_init + 0xac) [0x3cbcc]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-pal.so.13 (opal_convertor_prepare_for_recv + 0x25) [0x33f65]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (mca_pml_ob1_recv_req_start + 0x15e) [0x1b487e]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (mca_pml_ob1_irecv + 0xc4) [0x1ab464]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (ompi_coll_tuned_barrier_intra_recursivedoubling + 0xde) [0x13d79e]
<br>
=========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (MPI_Barrier + 0x72) [0x86eb2]
<br>
=========     Host Frame:./Errortest [0x2cb3]
<br>
=========     Host Frame:/usr/lib64/libc.so.6 (__libc_start_main + 0xf5) [0x21b15]
<br>
=========     Host Frame:./Errortest [0x2b99]
<br>
<p>A minimal example that reproduces the error on my system is:
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cudaSetDevice(0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I find the same behavior when cudaSetDevice() is swapped with MPI_Init(). How can I avoid these errors and still select the GPU to work on?
<br>
<p>Thank you, 
<br>
Kristina
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29410.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29408.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using	MPI_Comm_spawn on Windows"</a>
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
