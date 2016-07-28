<?
$subject_val = "Re: [OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 11:31:15 2014" -->
<!-- isoreceived="20140812153115" -->
<!-- sent="Tue, 12 Aug 2014 15:30:49 +0000" -->
<!-- isosent="20140812153049" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-I/O issues" -->
<!-- id="4064AB98-CBC1-4264-BE21-786ACCAD691C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53E279EE.7000405_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-I/O issues<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 11:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Previous message:</strong> <a href="24992.php">Antonio Rago: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4856">https://svn.open-mpi.org/trac/ompi/ticket/4856</a> to apply these ROMIO patches.
<br>
<p>Probably won't happen until 1.8.3.
<br>
<p>On Aug 6, 2014, at 2:54 PM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/06/2014 11:50 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To replicate, run the program with 2 or more procs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./hindexed_io mpi_test_file
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 0] [0xfcd440]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIOI_Flatten_datatype+0x17a)[0xc80f2a]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I bet OpenMPI needs to pick up a few patches for this fault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - <a href="http://git.mpich.org/mpich.git/commit/50f3d5806">http://git.mpich.org/mpich.git/commit/50f3d5806</a>
</span><br>
<span class="quotelev1">&gt; - <a href="http://git.mpich.org/mpich.git/commit/97114ec5b">http://git.mpich.org/mpich.git/commit/97114ec5b</a>
</span><br>
<span class="quotelev1">&gt; - <a href="http://git.mpich.org/mpich.git/commit/90e15e9b0">http://git.mpich.org/mpich.git/commit/90e15e9b0</a>
</span><br>
<span class="quotelev1">&gt; - <a href="http://git.mpich.org/mpich.git/commit/76a079c7c">http://git.mpich.org/mpich.git/commit/76a079c7c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... and two more patches that are sitting in my tree waiting review.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIO_Set_view+0x1c1)[0xc72a6d]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_dist_MPI_File_set_view+0x69b)[0xc8d11b]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_file_set_view+0x7c)[0xc4f7c5]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(PMPI_File_set_view+0x1e6)[0xb32f7e]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 6] ./hindexed_io[0x8048aa6]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 7] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 8] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I use --mca io ompio with 2 or more procs, the program segfaults in
</span><br>
<span class="quotelev2">&gt;&gt; write_at_all (regardless of what routine is used to construct a 0 sized
</span><br>
<span class="quotelev2">&gt;&gt; datatype):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] Signal: Floating point exception (8)
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] Failing at address: 0x3e29b7
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 0] [0xe56440]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ompi_io_ompio_set_explicit_offset+0x9d)[0x3513bc]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ompio_io_ompio_file_write_at_all+0x3e)[0x35869a]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_ompio_file_write_at_all+0x66)[0x358650]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(MPI_File_write_at_all+0x1b3)[0x1f46f3]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 5] ./hindexed_io[0x8048b07]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 7] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I use mpich 3.1.2 , I don't see those issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24931.php">http://www.open-mpi.org/community/lists/users/2014/08/24931.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24934.php">http://www.open-mpi.org/community/lists/users/2014/08/24934.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24994.php">Reuti: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Previous message:</strong> <a href="24992.php">Antonio Rago: "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
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
