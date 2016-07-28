<?
$subject_val = "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 04:15:31 2016" -->
<!-- isoreceived="20160617081531" -->
<!-- sent="Fri, 17 Jun 2016 10:15:28 +0200" -->
<!-- isosent="20160617081528" -->
<!-- name="Vincent Huber" -->
<!-- email="vincent.huber_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
<!-- id="CAK+p5Jb9eOM=iY9gLmhCr0NYqTttp+hj7GACpy9eROJkALVrdw_at_mail.gmail.com" -->
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
<strong>From:</strong> Vincent Huber (<em>vincent.huber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 04:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Joly,
<br>
<p>I have tried your code on my MacBook Pro (cf. infra for details) to detail
<br>
that behavior.
<br>
Looking at openmpi-1.10.3/ompi/mca/io/romio/romio/adio/comon/ad_fstype.c to
<br>
get the list of file system I can test, I have tried the following:
<br>
<p>mpirun -np 2 ./sample ufs:data.txt
<br>
mpirun -np 2 ./sample nfs:data.txt
<br>
mpirun -np 2 ./sample pfs:data.txt
<br>
mpirun -np 2 ./sample piofs:data.txt
<br>
mpirun -np 2 ./sample panfs:data.txt
<br>
mpirun -np 2 ./sample hfs:data.txt
<br>
mpirun -np 2 ./sample xfs:data.txt
<br>
mpirun -np 2 ./sample sfs:data.txt
<br>
mpirun -np 2 ./sample pvfs:data.txt
<br>
mpirun -np 2 ./sample zoidfs:data.txt
<br>
mpirun -np 2 ./sample testfs:data.txt
<br>
mpirun -np 2 ./sample ftp:data.txt
<br>
mpirun -np 2 ./sample lustre:data.txt
<br>
mpirun -np 2 ./sample bgl:data.txt
<br>
mpirun -np 2 ./sample bglockless:data.txt
<br>
<p>The only one to not crash is ufs.
<br>
That is not the answer you are looking for but my two cents&#226;&#128;&#166;
<br>
<p>All the best,
<br>
<p>VH
<br>
<p>&nbsp;gcc --version
<br>
Configured with:
<br>
--prefix=/Applications/Xcode.app/Contents/Developer/usr
<br>
--with-gxx-include-dir=/usr/include/c++/4.2.1
<br>
Apple LLVM version 7.0.0 (clang-700.0.72)
<br>
Target: x86_64-apple-darwin15.5.0
<br>
Thread model: posix
<br>
<p>et
<br>
<p>mpirun --version
<br>
mpirun (Open MPI) 1.10.2
<br>
<p>&#226;&#128;&#139;
<br>
<p>2016-06-14 17:42 GMT+02:00 Nicolas Joly &lt;njoly_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; [issan:08879] [ 0] [issan:20563] [ 0] 0x7dafb14a52b0
</span><br>
<span class="quotelev1">&gt; &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; [issan:20563] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 0x78b9886a52b0 &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev1">&gt; [issan:08879] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 20563 on node issan exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
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
<span class="quotelev1">&gt; #1  0x000078b974010edf in ADIOI_NFS_ReadStrided () from
</span><br>
<span class="quotelev1">&gt; /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #2  0x000078b97400bacf in MPIOI_File_read () from
</span><br>
<span class="quotelev1">&gt; /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #3  0x000078b97400bc72 in mca_io_romio_dist_MPI_File_read () from
</span><br>
<span class="quotelev1">&gt; /usr/pkg/lib/openmpi/mca_io_romio.so
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29434.php">http://www.open-mpi.org/community/lists/users/2016/06/29434.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Docteur Ing&#195;&#169;nieur de recherche
CeMoSiS &lt;<a href="http://www.cemosis.fr">http://www.cemosis.fr</a>&gt; - vincent.huber_at_[hidden]
Tel: +33 (0)3 68 8*5 02 06*
IRMA - 7, rue Ren&#195;&#169; Descartes
67 000 Strasbourg
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29475.php">Alex Kaiser: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29434.php">Nicolas Joly: "[OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
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
