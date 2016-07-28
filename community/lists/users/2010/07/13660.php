<?
$subject_val = "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 11:52:26 2010" -->
<!-- isoreceived="20100715155226" -->
<!-- sent="Thu, 15 Jul 2010 11:51:56 -0400" -->
<!-- isosent="20100715155156" -->
<!-- name="Don Kerr" -->
<!-- email="don.kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31" -->
<!-- id="4C3F2E9C.20801_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EFE5DE1E-B947-466A-8F47-45364BD9EFBF_at_myri.com" -->
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
<strong>From:</strong> Don Kerr (<em>don.kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 11:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13659.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a slightly newer version available, 8.2.1c at 
<br>
<a href="http://www.oracle.com/goto/ompt">http://www.oracle.com/goto/ompt</a>
<br>
<p>You should be able to install side by side without interfering with a 
<br>
previously installed version.
<br>
<p>If that does not alleviate the issue additional information as Scott 
<br>
asked would be useful. The full mpirun line or list of mca parameters 
<br>
that were set, number of processes, number of nodes, version of Solaris,
<br>
version of compiler, what interconnect?
<br>
<p>If that does not shed some light then maybe a small test case would be 
<br>
the next step.
<br>
<p>-DON
<br>
<p>On 07/15/10 09:56, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; Lydia,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which interconnect is this running over?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2010, at 5:19 AM, Lydia Heck wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are running Sun's build of Open Mpi  1.3.3r21324-ct8.2-b09b-r31
</span><br>
<span class="quotelev2">&gt;&gt; (HPC8.2) and one code that runs perfectly fine under
</span><br>
<span class="quotelev2">&gt;&gt; HPC8.1 (Open MPI) 1.3r19845-ct8.1-b06b-r21 and before fails with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [oberon:08454] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [oberon:08454] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [oberon:08454] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [oberon:08454] Failing at address: 0
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libopen-pal.so.0.0.0:0x4b89e
</span><br>
<span class="quotelev2">&gt;&gt; /lib/amd64/libc.so.1:0xd0f36
</span><br>
<span class="quotelev2">&gt;&gt; /lib/amd64/libc.so.1:0xc5a72
</span><br>
<span class="quotelev2">&gt;&gt; 0x0 [ Signal 11 (SEGV)]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Alloc_mem+0x7f
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Sendrecv_replace+0x31e
</span><br>
<span class="quotelev2">&gt;&gt; /opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi_f77.so.0.0.0:PMPI_SENDRECV_REPLACE+0x94
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:mpi_cyclic_transfer_+0xd9
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:cycle_particles_and_interpolate_+0x94b
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:interpolate_field_+0xc30
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:MAIN_+0xe68
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:main+0x3d
</span><br>
<span class="quotelev2">&gt;&gt; /home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:0x62ac
</span><br>
<span class="quotelev2">&gt;&gt; [oberon:08454] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 8454 on node oberon exited on signal 11 (Segmentation Fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not tried to get and build a newer Open Mpi, so I do not know if the problem propagates into the more recent versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the developers are interested, I could ask the user to prepare the code for you to have a look at the problem which looks like to be in  MPI_Alloc_mem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes,
</span><br>
<span class="quotelev2">&gt;&gt; Lydia Heck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr E L  Heck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Durham Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics South Road
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DURHAM, DH1 3LE United Kingdom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Previous message:</strong> <a href="13659.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
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
