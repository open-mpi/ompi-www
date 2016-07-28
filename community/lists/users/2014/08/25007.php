<?
$subject_val = "Re: [OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 09:58:48 2014" -->
<!-- isoreceived="20140813135848" -->
<!-- sent="Wed, 13 Aug 2014 08:58:39 -0500" -->
<!-- isosent="20140813135839" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-I/O issues" -->
<!-- id="53EB6F0F.6030008_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4064AB98-CBC1-4264-BE21-786ACCAD691C_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 09:58:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="24993.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for my silence on that, I was out for a couple of days. I have a 
<br>
patch that made ompio work for Mohamads test, he is testing it now on 
<br>
his own/additional test cases, and I'll commit it (and file a CMR) as 
<br>
soon as we have feedback on that.
<br>
<p>Thanks
<br>
Edgar
<br>
On 8/12/2014 10:30 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4856">https://svn.open-mpi.org/trac/ompi/ticket/4856</a> to apply these ROMIO patches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probably won't happen until 1.8.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2014, at 2:54 PM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/06/2014 11:50 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To replicate, run the program with 2 or more procs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 ./hindexed_io mpi_test_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 0] [0xfcd440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIOI_Flatten_datatype+0x17a)[0xc80f2a]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I bet OpenMPI needs to pick up a few patches for this fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="http://git.mpich.org/mpich.git/commit/50f3d5806">http://git.mpich.org/mpich.git/commit/50f3d5806</a>
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="http://git.mpich.org/mpich.git/commit/97114ec5b">http://git.mpich.org/mpich.git/commit/97114ec5b</a>
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="http://git.mpich.org/mpich.git/commit/90e15e9b0">http://git.mpich.org/mpich.git/commit/90e15e9b0</a>
</span><br>
<span class="quotelev2">&gt;&gt; - <a href="http://git.mpich.org/mpich.git/commit/76a079c7c">http://git.mpich.org/mpich.git/commit/76a079c7c</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ... and two more patches that are sitting in my tree waiting review.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIO_Set_view+0x1c1)[0xc72a6d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_dist_MPI_File_set_view+0x69b)[0xc8d11b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_file_set_view+0x7c)[0xc4f7c5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(PMPI_File_set_view+0x1e6)[0xb32f7e]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 6] ./hindexed_io[0x8048aa6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 7] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] [ 8] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15566] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use --mca io ompio with 2 or more procs, the program segfaults in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write_at_all (regardless of what routine is used to construct a 0 sized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] Signal: Floating point exception (8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] Failing at address: 0x3e29b7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 0] [0xe56440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ompi_io_ompio_set_explicit_offset+0x9d)[0x3513bc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ompio_io_ompio_file_write_at_all+0x3e)[0x35869a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_ompio_file_write_at_all+0x66)[0x358650]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(MPI_File_write_at_all+0x1b3)[0x1f46f3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 5] ./hindexed_io[0x8048b07]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] [ 7] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jam:15687] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use mpich 3.1.2 , I don't see those issues.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mohamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24931.php">http://www.open-mpi.org/community/lists/users/2014/08/24931.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rob Latham
</span><br>
<span class="quotelev2">&gt;&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev2">&gt;&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24934.php">http://www.open-mpi.org/community/lists/users/2014/08/24934.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="24993.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
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
