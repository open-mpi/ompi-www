<?
$subject_val = "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 22:58:38 2016" -->
<!-- isoreceived="20160622025838" -->
<!-- sent="Wed, 22 Jun 2016 11:58:25 +0900" -->
<!-- isosent="20160622025825" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
<!-- id="14757fb8-ed09-f27f-aa69-a43f9b2bc6e0_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160614154217.GA9342_at_issan.sis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-21 22:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nicolas,
<br>
<p><p>can you please give the attached patch a try ?
<br>
<p><p>in my environment, it fixes your test case.
<br>
<p>based on previous tests posted here, it is likely a similar bug should 
<br>
be fixed for other filesystems.
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/15/2016 12:42 AM, Nicolas Joly wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At work, i do have some mpi codes that make use of custom datatypes to
</span><br>
<span class="quotelev1">&gt; call MPI_File_read with MPI_BOTTOM ... It mostly works, except when
</span><br>
<span class="quotelev1">&gt; the underlying filesystem is NFS where if crash with SIGSEGV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached sample (code + data) works just fine with 1.10.1 on my
</span><br>
<span class="quotelev1">&gt; NetBSD/amd64 workstation using the UFS romio backend, but crash if
</span><br>
<span class="quotelev1">&gt; switched to NFS :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [~]&gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.1
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [~]&gt; mpicc -g -Wall -o sample sample.c
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [~]&gt; mpirun -n 2 ./sample ufs:data.txt
</span><br>
<span class="quotelev1">&gt; rank1 ... 111111111133333333335555555555
</span><br>
<span class="quotelev1">&gt; rank0 ... 000000000022222222224444444444
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [~]&gt; mpirun -n 2 ./sample nfs:data.txt
</span><br>
<span class="quotelev1">&gt; [issan:20563] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [issan:08879] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [issan:20563] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [issan:20563] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [issan:20563] Failing at address: 0xffffffffb1309240
</span><br>
<span class="quotelev1">&gt; [issan:08879] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [issan:08879] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [issan:08879] Failing at address: 0xffffffff881b0420
</span><br>
<span class="quotelev1">&gt; [issan:08879] [ 0] [issan:20563] [ 0] 0x7dafb14a52b0 &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; [issan:20563] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 0x78b9886a52b0 &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; [issan:08879] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 20563 on node issan exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; njoly_at_issan [~]&gt; gdb sample sample.core
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.10.1
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Core was generated by `sample'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; #0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; [Current thread is 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; #1  0x000078b974010edf in ADIOI_NFS_ReadStrided () from /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #2  0x000078b97400bacf in MPIOI_File_read () from /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #3  0x000078b97400bc72 in mca_io_romio_dist_MPI_File_read () from /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #4  0x000078b988e72b38 in PMPI_File_read () from /usr/pkg/lib/libmpi.so.12
</span><br>
<span class="quotelev1">&gt; #5  0x00000000004013a4 in main (argc=2, argv=0x7f7fff7b0f00) at sample.c:63
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29434.php">http://www.open-mpi.org/community/lists/users/2016/06/29434.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29494/ADIOI_NFS_ReadStrided.diff">ADIOI_NFS_ReadStrided.diff</a>
</ul>
<!-- attachment="ADIOI_NFS_ReadStrided.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29495.php">remi marchal: "[OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
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
