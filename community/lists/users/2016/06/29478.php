<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 06:03:53 2016" -->
<!-- isoreceived="20160617100353" -->
<!-- sent="Fri, 17 Jun 2016 19:03:29 +0900" -->
<!-- isosent="20160617100329" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
<!-- id="8o35afm7n0a4a14527qy5sjj.1466157809824_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 06:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Romio is imported from a not update mpich.
<br>
Could you give the latest mpich a try  ?
<br>
<p>That will be helpful to figure out whether this bug has already been fixed.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Nicolas Joly &lt;njoly_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;On Fri, Jun 17, 2016 at 10:15:28AM +0200, Vincent Huber wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Mr. Joly,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tried your code on my MacBook Pro (cf. infra for details) to detail
</span><br>
<span class="quotelev2">&gt;&gt; that behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at openmpi-1.10.3/ompi/mca/io/romio/romio/adio/comon/ad_fstype.c to
</span><br>
<span class="quotelev2">&gt;&gt; get the list of file system I can test, I have tried the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample ufs:data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample nfs:data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Crash with SIGSEGV in ADIOI_NFS_ReadStrided()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Made a quick and dirty test by replacing ADIOI_NFS_ReadStrided by
</span><br>
<span class="quotelev1">&gt;ADIOI_GEN_ReadStrided() in ADIO_NFS_operations structure
</span><br>
<span class="quotelev1">&gt;(ad_nfs/ad_nfs.c) ... and this fixed the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample pfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample piofs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample panfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample hfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample xfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample sfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample pvfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample zoidfs:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample ftp:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample lustre:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample bgl:data.txt
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample bglockless:data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't have access to this filesystems ...  The tool fails when
</span><br>
<span class="quotelev1">&gt;trying to open the file, that's the corresponding assert that fire.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./sample testfs:data.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This one crash with SIGSEGV but in ADIOI_Flatten().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I also tried with ompio and it seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun --mca io ompio -np 2 ./sample data.txt
</span><br>
<span class="quotelev1">&gt;rank0 ... 000000000022222222224444444444
</span><br>
<span class="quotelev1">&gt;rank1 ... 111111111133333333335555555555
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only one to not crash is ufs.
</span><br>
<span class="quotelev2">&gt;&gt; That is not the answer you are looking for but my two cents?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; Configured with:
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/Applications/Xcode.app/Contents/Developer/usr
</span><br>
<span class="quotelev2">&gt;&gt; --with-gxx-include-dir=/usr/include/c++/4.2.1
</span><br>
<span class="quotelev2">&gt;&gt; Apple LLVM version 7.0.0 (clang-700.0.72)
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-apple-darwin15.5.0
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; et
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.10.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2016-06-14 17:42 GMT+02:00 Nicolas Joly &lt;njoly_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; At work, i do have some mpi codes that make use of custom datatypes to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; call MPI_File_read with MPI_BOTTOM ... It mostly works, except when
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the underlying filesystem is NFS where if crash with SIGSEGV.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The attached sample (code + data) works just fine with 1.10.1 on my
</span><br>
<span class="quotelev3">&gt;&gt; &gt; NetBSD/amd64 workstation using the UFS romio backend, but crash if
</span><br>
<span class="quotelev3">&gt;&gt; &gt; switched to NFS :
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; njoly_at_issan [~]&gt; mpirun --version
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun (Open MPI) 1.10.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; njoly_at_issan [~]&gt; mpicc -g -Wall -o sample sample.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; njoly_at_issan [~]&gt; mpirun -n 2 ./sample ufs:data.txt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rank1 ... 111111111133333333335555555555
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rank0 ... 000000000022222222224444444444
</span><br>
<span class="quotelev3">&gt;&gt; &gt; njoly_at_issan [~]&gt; mpirun -n 2 ./sample nfs:data.txt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:20563] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:20563] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:20563] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:20563] Failing at address: 0xffffffffb1309240
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] Failing at address: 0xffffffff881b0420
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] [ 0] [issan:20563] [ 0] 0x7dafb14a52b0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:20563] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0x78b9886a52b0 &lt;__sigtramp_siginfo_2&gt; at /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [issan:08879] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that process rank 0 with PID 20563 on node issan exited on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; njoly_at_issan [~]&gt; gdb sample sample.core
</span><br>
<span class="quotelev3">&gt;&gt; &gt; GNU gdb (GDB) 7.10.1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Core was generated by `sample'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Program terminated with signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [Current thread is 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #0  0x000078b98871971f in memcpy () from /usr/lib/libc.so.12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #1  0x000078b974010edf in ADIOI_NFS_ReadStrided () from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #2  0x000078b97400bacf in MPIOI_File_read () from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #3  0x000078b97400bc72 in mca_io_romio_dist_MPI_File_read () from
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /usr/pkg/lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #4  0x000078b988e72b38 in PMPI_File_read () from /usr/pkg/lib/libmpi.so.12
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #5  0x00000000004013a4 in main (argc=2, argv=0x7f7fff7b0f00) at sample.c:63
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nicolas Joly
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cluster &amp; Computing Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Biology IT Center
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Institut Pasteur, Paris.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29434.php">http://www.open-mpi.org/community/lists/users/2016/06/29434.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Docteur Ing&#195;&#169;nieur de recherche
</span><br>
<span class="quotelev2">&gt;&gt; CeMoSiS &lt;<a href="http://www.cemosis.fr">http://www.cemosis.fr</a>&gt; - vincent.huber_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +33 (0)3 68 8*5 02 06*
</span><br>
<span class="quotelev2">&gt;&gt; IRMA - 7, rue Ren&#195;&#169; Descartes
</span><br>
<span class="quotelev2">&gt;&gt; 67 000 Strasbourg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29476.php">http://www.open-mpi.org/community/lists/users/2016/06/29476.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Nicolas Joly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cluster &amp; Computing Group
</span><br>
<span class="quotelev1">&gt;Biology IT Center
</span><br>
<span class="quotelev1">&gt;Institut Pasteur, Paris.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29477.php">http://www.open-mpi.org/community/lists/users/2016/06/29477.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29477.php">Nicolas Joly: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Reply:</strong> <a href="29479.php">Nicolas Joly: "Re: [OMPI users] OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
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
