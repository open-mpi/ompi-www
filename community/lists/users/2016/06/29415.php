<?
$subject_val = "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 03:29:56 2016" -->
<!-- isoreceived="20160609072956" -->
<!-- sent="Thu, 9 Jun 2016 09:29:43 +0200" -->
<!-- isosent="20160609072943" -->
<!-- name="Kristina Tesch" -->
<!-- email="Kristina.Tesch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice" -->
<!-- id="9E6A95E7-DDC6-44C6-93D8-05BC1577E393_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6a741468019d4bbc8d29dc741f26920b_at_UKMAIL102.nvidia.com" -->
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
<strong>From:</strong> Kristina Tesch (<em>Kristina.Tesch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-09 03:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>In reply to:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jiri, 
<br>
<p>thank you for your reply. That is a good thing to know, I will ignore those error messages then.
<br>
<p>Best regards,
<br>
Kristina
<br>
<p><span class="quotelev1">&gt; Am 09.06.2016 um 09:13 schrieb Jiri Kraus &lt;jkraus_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Kristina,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although its reported by cuda-memcheck as an error it really is an expected return code from cuPointerGetAttributes. The CUDA-aware build of OpenMPI calls cuPointerGetAttributes to query if a pointer is a host or device pointer. Memory allocated with the system allocator (malloc, global, stack and static data) is not part of the Unified Virtual Addressspace (UVA) known to the driver and therefore cuPointerGetAttributes returns CUDA_ERROR_INVALID_VALUE for those. For OpenMPI this simply means that it is a host pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jiri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of users-
</span><br>
<span class="quotelev2">&gt;&gt; request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Mittwoch, 8. Juni 2016 18:00
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: users Digest, Vol 3525, Issue 3
</span><br>
<span class="quotelev2">&gt;&gt;   1. cuda-memcheck reports errors for MPI functions after	use of
</span><br>
<span class="quotelev2">&gt;&gt;      cudaSetDevice (Kristina Tesch)
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 8 Jun 2016 14:59:24 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: Kristina Tesch &lt;Kristina.Tesch_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] cuda-memcheck reports errors for MPI functions
</span><br>
<span class="quotelev2">&gt;&gt; 	after	use of cudaSetDevice
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;2EFDD862-C5B1-44F1-9710-932FA74119D5_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in my application I use CUDA-aware OpenMPI 1.10.2 together with CUDA
</span><br>
<span class="quotelev2">&gt;&gt; 7.5. If I call cudaSetDevice() cuda-memcheck reports this error for all
</span><br>
<span class="quotelev2">&gt;&gt; subsequent MPI function calls:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ========= CUDA-MEMCHECK
</span><br>
<span class="quotelev2">&gt;&gt; ========= Program hit CUDA_ERROR_INVALID_VALUE (error 1) due to
</span><br>
<span class="quotelev2">&gt;&gt; &quot;invalid argument&quot; on CUDA API call to cuPointerGetAttributes.
</span><br>
<span class="quotelev2">&gt;&gt; =========     Saved host backtrace up to driver entry point at error
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/usr/lib64/libcuda.so.1 (cuPointerGetAttributes +
</span><br>
<span class="quotelev2">&gt;&gt; 0x18d) [0x144ffd]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev2">&gt;&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 [0xb0f52]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-
</span><br>
<span class="quotelev2">&gt;&gt; pal.so.13 (mca_cuda_convertor_init + 0xac) [0x3cbcc]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libopen-
</span><br>
<span class="quotelev2">&gt;&gt; pal.so.13 (opal_convertor_prepare_for_recv + 0x25) [0x33f65]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev2">&gt;&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt; (mca_pml_ob1_recv_req_start + 0x15e) [0x1b487e]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev2">&gt;&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (mca_pml_ob1_irecv +
</span><br>
<span class="quotelev2">&gt;&gt; 0xc4) [0x1ab464]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev2">&gt;&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt; (ompi_coll_tuned_barrier_intra_recursivedoubling + 0xde) [0x13d79e]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/modules/opt/spack/linux-x86_64/gcc-
</span><br>
<span class="quotelev2">&gt;&gt; 5.3.0/openmpicuda-1.10.2-
</span><br>
<span class="quotelev2">&gt;&gt; y246ecjlhmkkh7lhbrgvdwpazc4mgetr/lib/libmpi.so.12 (MPI_Barrier + 0x72)
</span><br>
<span class="quotelev2">&gt;&gt; [0x86eb2]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:./Errortest [0x2cb3]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:/usr/lib64/libc.so.6 (__libc_start_main + 0xf5)
</span><br>
<span class="quotelev2">&gt;&gt; [0x21b15]
</span><br>
<span class="quotelev2">&gt;&gt; =========     Host Frame:./Errortest [0x2b99]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A minimal example that reproduces the error on my system is:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    cudaSetDevice(0);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I find the same behavior when cudaSetDevice() is swapped with MPI_Init().
</span><br>
<span class="quotelev2">&gt;&gt; How can I avoid these errors and still select the GPU to work on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Kristina
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 3525, Issue 3
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
</span><br>
<span class="quotelev1">&gt; NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
</span><br>
<span class="quotelev1">&gt; Managing Director: Karen Theresa Burns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29414.php">http://www.open-mpi.org/community/lists/users/2016/06/29414.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29416.php">Roth, Christopher: "Re: [OMPI users] Processes unable to communicate when using MPI_Comm_spawn on Windows"</a>
<li><strong>Previous message:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
<li><strong>In reply to:</strong> <a href="29414.php">Jiri Kraus: "Re: [OMPI users] . cuda-memcheck reports errors for MPI functions after use of cudaSetDevice"</a>
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
