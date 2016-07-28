<?
$subject_val = "Re: [OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 10:41:09 2014" -->
<!-- isoreceived="20140811144109" -->
<!-- sent="Mon, 11 Aug 2014 09:41:08 -0500" -->
<!-- isosent="20140811144108" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-I/O issues" -->
<!-- id="53E8D604.4020901_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkX8y1yUK1AK9S94fwoCb1KejtdGk9hBWNO7sOLDxxhZhQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-11 10:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/11/2014 08:54 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The patch related to ticket #4597 is zapping only the datatypes where
</span><br>
<span class="quotelev1">&gt; the user explicitly provided a zero count.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can argue about LB and UB, but I have a hard time understanding the
</span><br>
<span class="quotelev1">&gt; rationale of allowing zero count only for LB and UB. If it is required
</span><br>
<span class="quotelev1">&gt; by the standard we can easily support it (the line in the patch has to
</span><br>
<span class="quotelev1">&gt; move a little down in the code).
</span><br>
<p>ROMIO's type flattening code is primitive: the zero-length blocks for UB 
<br>
and LB were the only way to encode the extent of the type, without 
<br>
calling back into the MPI implementation's type-inquiry routines.
<br>
<p><p>*I* don't  care how OpenMPI deals with UB and LB.  It was *you* who 
<br>
suggested one might need to look a bit more closely at how OpenMPI type 
<br>
processing handles those markers:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2014/05/24325.php">http://www.open-mpi.org/community/lists/users/2014/05/24325.php</a>
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 11, 2014 at 9:44 AM, Rob Latham &lt;robl_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:robl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 08/10/2014 07:32 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Update:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         George suggested that I try with the 1.8.2 rc3 and that one
</span><br>
<span class="quotelev1">&gt;         resolves the
</span><br>
<span class="quotelev1">&gt;         hindexed_block segfault that I was seeing with ompi. the I/O
</span><br>
<span class="quotelev1">&gt;         part now
</span><br>
<span class="quotelev1">&gt;         works with ompio, but needs the patches from Rob in ROMIO to
</span><br>
<span class="quotelev1">&gt;         work correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The 2nd issue with collective I/O where some processes
</span><br>
<span class="quotelev1">&gt;         participate with
</span><br>
<span class="quotelev1">&gt;         0 sized datatypes created with hindexed and hvector, is still
</span><br>
<span class="quotelev1">&gt;         unresolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think this ticket was closed a bit too early:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/__ompi/ticket/4597">https://svn.open-mpi.org/trac/__ompi/ticket/4597</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/4597">https://svn.open-mpi.org/trac/ompi/ticket/4597</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't know OpenMPI's type processing at all, but if it's like
</span><br>
<span class="quotelev1">&gt;     ROMIO, you cannot simply zap blocks of zero length:  some zero
</span><br>
<span class="quotelev1">&gt;     length blocks indicate upper bound and lower bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     or maybe it's totally unrelated.  There were a flurry of datatype
</span><br>
<span class="quotelev1">&gt;     bugs reported against both MPICH and OpenMPI in may of this year and
</span><br>
<span class="quotelev1">&gt;     I am sure I am confusing several issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks,
</span><br>
<span class="quotelev1">&gt;         Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 8/6/2014 11:50 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I'm seeing some problems with dervided datatype construction
</span><br>
<span class="quotelev1">&gt;             and I/O
</span><br>
<span class="quotelev1">&gt;             with OpenMPI 1.8.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I have replicated them in the attached program.
</span><br>
<span class="quotelev1">&gt;             The first issue is that MPI_Type_create_hindexed___block()
</span><br>
<span class="quotelev1">&gt;             always
</span><br>
<span class="quotelev1">&gt;             sefgaults. Usage of this routine is commented out in the
</span><br>
<span class="quotelev1">&gt;             program. (I
</span><br>
<span class="quotelev1">&gt;             have a separate email thread with George and Edgar about this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The other issue is a segfault in MPI_File_set_view, when I
</span><br>
<span class="quotelev1">&gt;             have ranks
</span><br>
<span class="quotelev2">&gt;              &gt; 0 creating the derived datatypes with count 0, and rank 0
</span><br>
<span class="quotelev1">&gt;             creating a
</span><br>
<span class="quotelev1">&gt;             derived datatype of count NUM_BLOCKS. If I use
</span><br>
<span class="quotelev1">&gt;             MPI_Type_contiguous to
</span><br>
<span class="quotelev1">&gt;             create the 0 sized file and memory datatypes (instead of
</span><br>
<span class="quotelev1">&gt;             hindexed and
</span><br>
<span class="quotelev1">&gt;             hvector) it works fine.
</span><br>
<span class="quotelev1">&gt;             To replicate, run the program with 2 or more procs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             mpirun -np 2 ./hindexed_io mpi_test_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             [jam:15566] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;             [jam:15566] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;             [jam:15566] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;             [jam:15566] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 0] [0xfcd440]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 1]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(ADIOI_Flatten___datatype+0x17a)[0xc80f2a]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 2]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(ADIO_Set_view+__0x1c1)[0xc72a6d]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 3]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(mca_io_romio___dist_MPI_File_set_view+0x69b)[__0xc8d11b]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 4]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(mca_io_romio___file_set_view+0x7c)[0xc4f7c5]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 5]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(PMPI_File_set___view+0x1e6)[0xb32f7e]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 6] ./hindexed_io[0x8048aa6]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 7]
</span><br>
<span class="quotelev1">&gt;             /lib/libc.so.6(__libc_start___main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] [ 8] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev1">&gt;             [jam:15566] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             If I use --mca io ompio with 2 or more procs, the program
</span><br>
<span class="quotelev1">&gt;             segfaults in
</span><br>
<span class="quotelev1">&gt;             write_at_all (regardless of what routine is used to
</span><br>
<span class="quotelev1">&gt;             construct a 0
</span><br>
<span class="quotelev1">&gt;             sized datatype):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             [jam:15687] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;             [jam:15687] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt;             [jam:15687] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt;             [jam:15687] Failing at address: 0x3e29b7
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 0] [0xe56440]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 1]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(ompi_io_ompio___set_explicit_offset+0x9d)[__0x3513bc]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 2]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(ompio_io___ompio_file_write_at_all+0x3e)[__0x35869a]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 3]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(mca_io_ompio___file_write_at_all+0x66)[__0x358650]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 4]
</span><br>
<span class="quotelev1">&gt;             /scr/chaarawi/install/ompi/__lib/libmpi.so.1(MPI_File___write_at_all+0x1b3)[0x1f46f3]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 5] ./hindexed_io[0x8048b07]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 6]
</span><br>
<span class="quotelev1">&gt;             /lib/libc.so.6(__libc_start___main+0xdc)[0x7d5ebc]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] [ 7] ./hindexed_io[0x80487e1]
</span><br>
<span class="quotelev1">&gt;             [jam:15687] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             If I use mpich 3.1.2 , I don't see those issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks,
</span><br>
<span class="quotelev1">&gt;             Mohamad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _________________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:<a href="http://www.open-__mpi.org/mailman/listinfo.cgi/__users">http://www.open-__mpi.org/mailman/listinfo.cgi/__users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;             Link to this
</span><br>
<span class="quotelev1">&gt;             post:<a href="http://www.open-mpi.org/__community/lists/users/2014/08/__24931.php">http://www.open-mpi.org/__community/lists/users/2014/08/__24931.php</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24931.php">http://www.open-mpi.org/community/lists/users/2014/08/24931.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__community/lists/users/2014/08/__24963.php">http://www.open-mpi.org/__community/lists/users/2014/08/__24963.php</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24963.php">http://www.open-mpi.org/community/lists/users/2014/08/24963.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Rob Latham
</span><br>
<span class="quotelev1">&gt;     Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt;     Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__community/lists/users/2014/08/__24971.php">http://www.open-mpi.org/__community/lists/users/2014/08/__24971.php</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24971.php">http://www.open-mpi.org/community/lists/users/2014/08/24971.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24973.php">http://www.open-mpi.org/community/lists/users/2014/08/24973.php</a>
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
<li><strong>Next message:</strong> <a href="24975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24973.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24978.php">George Bosilca: "Re: [OMPI users] MPI-I/O issues"</a>
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
