<?
$subject_val = "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 09:56:59 2010" -->
<!-- isoreceived="20100715135659" -->
<!-- sent="Thu, 15 Jul 2010 09:56:51 -0400" -->
<!-- isosent="20100715135651" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31" -->
<!-- id="EFE5DE1E-B947-466A-8F47-45364BD9EFBF_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1007151005080.7610_at_dubris.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 09:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13652.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Reply:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lydia,
<br>
<p>Which interconnect is this running over?
<br>
<p>Scott
<br>
<p>On Jul 15, 2010, at 5:19 AM, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt; We are running Sun's build of Open Mpi  1.3.3r21324-ct8.2-b09b-r31
</span><br>
<span class="quotelev1">&gt; (HPC8.2) and one code that runs perfectly fine under
</span><br>
<span class="quotelev1">&gt; HPC8.1 (Open MPI) 1.3r19845-ct8.1-b06b-r21 and before fails with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [oberon:08454] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [oberon:08454] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [oberon:08454] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [oberon:08454] Failing at address: 0
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libopen-pal.so.0.0.0:0x4b89e
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xd0f36
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1:0xc5a72
</span><br>
<span class="quotelev1">&gt; 0x0 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Alloc_mem+0x7f
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Sendrecv_replace+0x31e
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi_f77.so.0.0.0:PMPI_SENDRECV_REPLACE+0x94
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:mpi_cyclic_transfer_+0xd9
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:cycle_particles_and_interpolate_+0x94b
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:interpolate_field_+0xc30
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:MAIN_+0xe68
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:main+0x3d
</span><br>
<span class="quotelev1">&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:0x62ac
</span><br>
<span class="quotelev1">&gt; [oberon:08454] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 8454 on node oberon exited on signal 11 (Segmentation Fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not tried to get and build a newer Open Mpi, so I do not know if the problem propagates into the more recent versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the developers are interested, I could ask the user to prepare the code for you to have a look at the problem which looks like to be in  MPI_Alloc_mem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Durham Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics South Road
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE United Kingdom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13652.php">Jeff Squyres: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>In reply to:</strong> <a href="13645.php">Lydia Heck: "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Reply:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
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
