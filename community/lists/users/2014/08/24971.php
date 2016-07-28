<?
$subject_val = "Re: [OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 09:44:30 2014" -->
<!-- isoreceived="20140811134430" -->
<!-- sent="Mon, 11 Aug 2014 08:44:29 -0500" -->
<!-- isosent="20140811134429" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-I/O issues" -->
<!-- id="53E8C8BD.5080606_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53E80F1D.8050202_at_cs.uh.edu" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 09:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/10/2014 07:32 PM, Mohamad Chaarawi wrote:
<br>
<span class="quotelev1">&gt; Update:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George suggested that I try with the 1.8.2 rc3 and that one resolves the
</span><br>
<span class="quotelev1">&gt; hindexed_block segfault that I was seeing with ompi. the I/O part now
</span><br>
<span class="quotelev1">&gt; works with ompio, but needs the patches from Rob in ROMIO to work correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 2nd issue with collective I/O where some processes participate with
</span><br>
<span class="quotelev1">&gt; 0 sized datatypes created with hindexed and hvector, is still unresolved.
</span><br>
<p>I think this ticket was closed a bit too early:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4597">https://svn.open-mpi.org/trac/ompi/ticket/4597</a>
<br>
<p>I don't know OpenMPI's type processing at all, but if it's like ROMIO, 
<br>
you cannot simply zap blocks of zero length:  some zero length blocks 
<br>
indicate upper bound and lower bound.
<br>
<p>or maybe it's totally unrelated.  There were a flurry of datatype bugs 
<br>
reported against both MPICH and OpenMPI in may of this year and I am 
<br>
sure I am confusing several issues.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/6/2014 11:50 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing some problems with dervided datatype construction and I/O
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.8.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have replicated them in the attached program.
</span><br>
<span class="quotelev2">&gt;&gt; The first issue is that MPI_Type_create_hindexed_block() always
</span><br>
<span class="quotelev2">&gt;&gt; sefgaults. Usage of this routine is commented out in the program. (I
</span><br>
<span class="quotelev2">&gt;&gt; have a separate email thread with George and Edgar about this).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other issue is a segfault in MPI_File_set_view, when I have ranks
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 0 creating the derived datatypes with count 0, and rank 0 creating a
</span><br>
<span class="quotelev2">&gt;&gt; derived datatype of count NUM_BLOCKS. If I use MPI_Type_contiguous to
</span><br>
<span class="quotelev2">&gt;&gt; create the 0 sized file and memory datatypes (instead of hindexed and
</span><br>
<span class="quotelev2">&gt;&gt; hvector) it works fine.
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
<span class="quotelev2">&gt;&gt; [jam:15566] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIO_Set_view+0x1c1)[0xc72a6d]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_dist_MPI_File_set_view+0x69b)[0xc8d11b]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_file_set_view+0x7c)[0xc4f7c5]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15566] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(PMPI_File_set_view+0x1e6)[0xb32f7e]
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
<span class="quotelev2">&gt;&gt; write_at_all (regardless of what routine is used to construct a 0
</span><br>
<span class="quotelev2">&gt;&gt; sized datatype):
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
<span class="quotelev2">&gt;&gt; [jam:15687] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(ompio_io_ompio_file_write_at_all+0x3e)[0x35869a]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_ompio_file_write_at_all+0x66)[0x358650]
</span><br>
<span class="quotelev2">&gt;&gt; [jam:15687] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /scr/chaarawi/install/ompi/lib/libmpi.so.1(MPI_File_write_at_all+0x1b3)[0x1f46f3]
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/24931.php">http://www.open-mpi.org/community/lists/users/2014/08/24931.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24963.php">http://www.open-mpi.org/community/lists/users/2014/08/24963.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<li><strong>In reply to:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
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
