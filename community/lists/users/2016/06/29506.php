<?
$subject_val = "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 06:47:40 2016" -->
<!-- isoreceived="20160622104740" -->
<!-- sent="Wed, 22 Jun 2016 19:47:38 +0900" -->
<!-- isosent="20160622104738" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
<!-- id="CAAkFZ5sOZCx6mPJ1YgLiMQkAS0RLh-4cf4y7R7g0N58tcWRH5w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160622102048.GA12001_at_issan.sis.pasteur.fr" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 06:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29507.php">Ralph Castain: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29505.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info, I updated <a href="https://github.com/open-mpi/ompi/issues/1809">https://github.com/open-mpi/ompi/issues/1809</a>
<br>
accordingly.
<br>
<p>fwiw, the bug occurs when addresses do not fit in 32 bits.
<br>
for some reasons, I always run into it on OSX but not on Linux, ubless I
<br>
use dmalloc.
<br>
I replaced malloc with alloca (and remove free) so I always hit the bug on
<br>
Linux.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, June 22, 2016, Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jun 22, 2016 at 11:58:25AM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Nicolas,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can you please give the attached patch a try ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in my environment, it fixes your test case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes ! It does here too ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just patched ADIOI_NFS_WriteStrided() using the same fix. And the
</span><br>
<span class="quotelev1">&gt; original tool that crashed first on read, and later on write with
</span><br>
<span class="quotelev1">&gt; MPI_BOTTOM now succeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; based on previous tests posted here, it is likely a similar bug should
</span><br>
<span class="quotelev2">&gt; &gt; be fixed for other filesystems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 6/15/2016 12:42 AM, Nicolas Joly wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;At work, i do have some mpi codes that make use of custom datatypes to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;call MPI_File_read with MPI_BOTTOM ... It mostly works, except when
</span><br>
<span class="quotelev3">&gt; &gt; &gt;the underlying filesystem is NFS where if crash with SIGSEGV.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;The attached sample (code + data) works just fine with 1.10.1 on my
</span><br>
<span class="quotelev3">&gt; &gt; &gt;NetBSD/amd64 workstation using the UFS romio backend, but crash if
</span><br>
<span class="quotelev3">&gt; &gt; &gt;switched to NFS :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;njoly_at_issan [~]&gt; mpirun --version
</span><br>
<span class="quotelev3">&gt; &gt; &gt;mpirun (Open MPI) 1.10.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;njoly_at_issan [~]&gt; mpicc -g -Wall -o sample sample.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt;njoly_at_issan [~]&gt; mpirun -n 2 ./sample ufs:data.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;rank1 ... 111111111133333333335555555555
</span><br>
<span class="quotelev3">&gt; &gt; &gt;rank0 ... 000000000022222222224444444444
</span><br>
<span class="quotelev3">&gt; &gt; &gt;njoly_at_issan [~]&gt; mpirun -n 2 ./sample nfs:data.txt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:20563] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:20563] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:20563] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:20563] Failing at address: 0xffffffffb1309240
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] Failing at address: 0xffffffff881b0420
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] [ 0] [issan:20563] [ 0] 0x7dafb14a52b0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:20563] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt;0x78b9886a52b0 &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[issan:08879] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;mpirun noticed that process rank 0 with PID 20563 on node issan exited
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev3">&gt; &gt; &gt;signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;njoly_at_issan [~]&gt; gdb sample sample.core
</span><br>
<span class="quotelev3">&gt; &gt; &gt;GNU gdb (GDB) 7.10.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Core was generated by `sample'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt; &gt; &gt;[Current thread is 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#1  0x000078b974010edf in ADIOI_NFS_ReadStrided () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt;/usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#2  0x000078b97400bacf in MPIOI_File_read () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt;/usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#3  0x000078b97400bc72 in mca_io_romio_dist_MPI_File_read () from
</span><br>
<span class="quotelev3">&gt; &gt; &gt;/usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#4  0x000078b988e72b38 in PMPI_File_read () from
</span><br>
<span class="quotelev1">&gt; /usr/pkg/lib/libmpi.so.12
</span><br>
<span class="quotelev3">&gt; &gt; &gt;#5  0x00000000004013a4 in main (argc=2, argv=0x7f7fff7b0f00) at
</span><br>
<span class="quotelev1">&gt; sample.c:63
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29434.php">http://www.open-mpi.org/community/lists/users/2016/06/29434.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c
</span><br>
<span class="quotelev2">&gt; &gt; index 16f3a4d..2577f13 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/io/romio/romio/adio/ad_nfs/ad_nfs_read.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -457,13 +457,14 @@ void ADIOI_NFS_ReadStrided(ADIO_File fd, void
</span><br>
<span class="quotelev1">&gt; *buf, int count,
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else {
</span><br>
<span class="quotelev2">&gt; &gt;  /* noncontiguous in memory as well as in file */
</span><br>
<span class="quotelev2">&gt; &gt; +            ADIO_Offset i;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           ADIOI_Flatten_datatype(datatype);
</span><br>
<span class="quotelev2">&gt; &gt;           flat_buf = ADIOI_Flatlist;
</span><br>
<span class="quotelev2">&gt; &gt;           while (flat_buf-&gt;type != datatype) flat_buf = flat_buf-&gt;next;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           k = num = buf_count = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -         i = (int) (flat_buf-&gt;indices[0]);
</span><br>
<span class="quotelev2">&gt; &gt; +         i = flat_buf-&gt;indices[0];
</span><br>
<span class="quotelev2">&gt; &gt;           j = st_index;
</span><br>
<span class="quotelev2">&gt; &gt;           off = offset;
</span><br>
<span class="quotelev2">&gt; &gt;           n_filetypes = st_n_filetypes;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -508,8 +509,8 @@ void ADIOI_NFS_ReadStrided(ADIO_File fd, void *buf,
</span><br>
<span class="quotelev1">&gt; int count,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   k = (k + 1)%flat_buf-&gt;count;
</span><br>
<span class="quotelev2">&gt; &gt;                   buf_count++;
</span><br>
<span class="quotelev2">&gt; &gt; -                 i = (int) (buftype_extent*(buf_count/flat_buf-&gt;count) +
</span><br>
<span class="quotelev2">&gt; &gt; -                     flat_buf-&gt;indices[k]);
</span><br>
<span class="quotelev2">&gt; &gt; +                 i = buftype_extent*(buf_count/flat_buf-&gt;count) +
</span><br>
<span class="quotelev2">&gt; &gt; +                     flat_buf-&gt;indices[k];
</span><br>
<span class="quotelev2">&gt; &gt;                   new_brd_size = flat_buf-&gt;blocklens[k];
</span><br>
<span class="quotelev2">&gt; &gt;                   if (size != frd_size) {
</span><br>
<span class="quotelev2">&gt; &gt;                       off += size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29494.php">http://www.open-mpi.org/community/lists/users/2016/06/29494.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nicolas Joly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cluster &amp; Computing Group
</span><br>
<span class="quotelev1">&gt; Biology IT Center
</span><br>
<span class="quotelev1">&gt; Institut Pasteur, Paris.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29504.php">http://www.open-mpi.org/community/lists/users/2016/06/29504.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29507.php">Ralph Castain: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29505.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>In reply to:</strong> <a href="29504.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29514.php">Rob Latham: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
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
