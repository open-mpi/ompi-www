<?
$subject_val = "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 03:14:05 2016" -->
<!-- isoreceived="20160609071405" -->
<!-- sent="Thu, 9 Jun 2016 07:13:50 +0000" -->
<!-- isosent="20160609071350" -->
<!-- name="Jiri Kraus" -->
<!-- email="jkraus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice" -->
<!-- id="6a741468019d4bbc8d29dc741f26920b_at_UKMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice" -->
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
<strong>Subject:</strong> Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice<br>
<strong>From:</strong> Jiri Kraus (<em>jkraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 03:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Previous message:</strong> <a href="29413.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Reply:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Kristina,
<br>
<p>Although its reported by cuda-memcheck as an error it really is an expected return code from cuPointerGetAttributes. The CUDA-aware build of OpenMPI calls cuPointerGetAttributes to query if a pointer is a host or device pointer. Memory allocated with the system allocator (malloc, global, stack and static data) is not part of the Unified Virtual Addressspace (UVA) known to the driver and therefore cuPointerGetAttributes returns CUDA_ERROR_INVALID_VALUE for those. For OpenMPI this simply means that it is a host pointer.
<br>
<p>Hope this helps
<br>
<p>Jiri
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of users-
</span><br>
<span class="quotelev1">&gt; request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Mittwoch, 8. Juni 2016 18:00
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: users Digest, Vol 3525, Issue 3
</span><br>
<span class="quotelev1">&gt;    1. cuda-memcheck reports errors for MPI functions after	use of
</span><br>
<span class="quotelev1">&gt;       cudaSetDevice (Kristina Tesch)
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 8 Jun 2016 14:59:24 +0200
</span><br>
<span class="quotelev1">&gt; From: Kristina Tesch &lt;Kristina.Tesch_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] cuda-memcheck reports errors for MPI functions
</span><br>
<span class="quotelev1">&gt; 	after	use of cudaSetDevice
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;2EFDD862-C5B1-44F1-9710-932FA74119D5_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in my application I use CUDA-aware OpenMPI 1.10.2 together with CUDA
</span><br>
<span class="quotelev1">&gt; 7.5. If I call cudaSetDevice() cuda-memcheck reports this error for all
</span><br>
<span class="quotelev1">&gt; subsequent MPI function calls:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ========= CUDA-MEMCHECK
</span><br>
<span class="quotelev1">&gt; ========= Program hit CUDA_ERROR_INVALID_VALUE (error 1) due to
</span><br>
<span class="quotelev1">&gt; &quot;invalid argument&quot; on CUDA API call to cuPointerGetAttributes.
</span><br>
<span class="quotelev1">&gt; =========     Saved host backtrace up to driver entry point at error
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/usr/lib64/libcuda.so.1 (cuPointerGetAttributes +
</span><br>
<span class="quotelev1">&gt; 0x18d) [0x144ffd]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev1">&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 [0xb0f52]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-
</span><br>
<span class="quotelev1">&gt; pal.so.13 (mca_cuda_convertor_init + 0xac) [0x3cbcc]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-
</span><br>
<span class="quotelev1">&gt; pal.so.13 (opal_convertor_prepare_for_recv + 0x25) [0x33f65]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev1">&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_recv_req_start + 0x15e) [0x1b487e]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev1">&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (mca_pml_ob1_irecv +
</span><br>
<span class="quotelev1">&gt; 0xc4) [0x1ab464]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev1">&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_barrier_intra_recursivedoubling + 0xde) [0x13d79e]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev1">&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev1">&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (MPI_Barrier + 0x72)
</span><br>
<span class="quotelev1">&gt; [0x86eb2]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:./Errortest [0x2cb3]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:/usr/lib64/libc.so.6 (__libc_start_main + 0xf5)
</span><br>
<span class="quotelev1">&gt; [0x21b15]
</span><br>
<span class="quotelev1">&gt; =========     Host Frame:./Errortest [0x2b99]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A minimal example that reproduces the error on my system is:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cudaSetDevice(0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find the same behavior when cudaSetDevice() is swapped with MPI_Init().
</span><br>
<span class="quotelev1">&gt; How can I avoid these errors and still select the GPU to work on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Kristina
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 3525, Issue 3
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
<br>
Managing Director: Karen Theresa Burns
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Previous message:</strong> <a href="29413.php">Gilles Gouaillardet: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>Reply:</strong> <a href="29415.php">Kristina Tesch: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
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
