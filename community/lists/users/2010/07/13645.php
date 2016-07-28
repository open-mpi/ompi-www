<?
$subject_val = "[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 05:19:23 2010" -->
<!-- isoreceived="20100715091923" -->
<!-- sent="Thu, 15 Jul 2010 10:19:03 +0100 (BST)" -->
<!-- isosent="20100715091903" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31" -->
<!-- id="alpine.LRH.2.00.1007151005080.7610_at_dubris.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 05:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Reply:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are running Sun's build of Open Mpi  1.3.3r21324-ct8.2-b09b-r31
<br>
(HPC8.2) and one code that runs perfectly fine under
<br>
HPC8.1 (Open MPI) 1.3r19845-ct8.1-b06b-r21 and before fails with
<br>
<p><p><p>[oberon:08454] *** Process received signal ***
<br>
[oberon:08454] Signal: Segmentation Fault (11)
<br>
[oberon:08454] Signal code: Address not mapped (1)
<br>
[oberon:08454] Failing at address: 0
<br>
/opt/SUNWhpc/HPC8.2/sun/lib/amd64/libopen-pal.so.0.0.0:0x4b89e
<br>
/lib/amd64/libc.so.1:0xd0f36
<br>
/lib/amd64/libc.so.1:0xc5a72
<br>
0x0 [ Signal 11 (SEGV)]
<br>
/opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Alloc_mem+0x7f
<br>
/opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi.so.0.0.0:MPI_Sendrecv_replace+0x31e
<br>
/opt/SUNWhpc/HPC8.2/sun/lib/amd64/libmpi_f77.so.0.0.0:PMPI_SENDRECV_REPLACE+0x94
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:mpi_cyclic_transfer_+0xd9
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:cycle_particles_and_interpolate_+0x94b
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:interpolate_field_+0xc30
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:MAIN_+0xe68
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:main+0x3d
<br>
/home/arj/code_devel/ic_gen_2lpt_v3.5/comp_disp.x:0x62ac
<br>
[oberon:08454] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 8454 on node oberon exited on 
<br>
signal 11 (Segmentation Fault).
<br>
<p><p><p>I have not tried to get and build a newer Open Mpi, so I do not know if the 
<br>
problem propagates into the more recent versions.
<br>
<p><p>If the developers are interested, I could ask the user to prepare the code for 
<br>
you to have a look at the problem which looks like to be in  MPI_Alloc_mem.
<br>
<p>Best wishes,
<br>
Lydia Heck
<br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham 
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics 
<br>
South Road
<br>
<p>DURHAM, DH1 3LE 
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13646.php">Jeff Squyres: "Re: [OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<li><strong>Previous message:</strong> <a href="13644.php">TH Chew: "[OMPI users] orted unknown option &quot;--daemonize&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Reply:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
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
