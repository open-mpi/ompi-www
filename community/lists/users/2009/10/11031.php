<?
$subject_val = "[OMPI users] problems with checkpointing an mpi job";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 15:35:35 2009" -->
<!-- isoreceived="20091030193535" -->
<!-- sent="Fri, 30 Oct 2009 14:35:35 -0500" -->
<!-- isosent="20091030193535" -->
<!-- name="Hui Jin" -->
<!-- email="hjin6_at_[hidden]" -->
<!-- subject="[OMPI users] problems with checkpointing an mpi job" -->
<!-- id="4AEB4007.4090906_at_iit.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problems with checkpointing an mpi job<br>
<strong>From:</strong> Hui Jin (<em>hjin6_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 15:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
I got a problem when trying to checkpoint a mpi job.
<br>
I will really appreciate if you can help me fix the problem.
<br>
the blcr package was installed successfully on the cluster.
<br>
I configure the ompenmpi with flags,
<br>
./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads 
<br>
--with-blcr=/usr/local --with-blcr-libdir=/usr/local/lib/
<br>
The installation looks correct. The open MPI version is 1.3.3
<br>
<p>I got the following output when issueing ompi_info:
<br>
<p>root_at_hec:/export/home/hjin/test# ompi_info | grep ft
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: ftrm (MCA v2.0, API v2.0, Component v1.3.3)
<br>
root_at_hec:/export/home/hjin/test# ompi_info | grep crs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: none (MCA v2.0, API v2.0, Component v1.3.3)
<br>
It seems the MCA crs is lost but I have no idea about how to get it.
<br>
<p>To run a checkpointable application, I run:
<br>
&nbsp;mpirun -np 2 --host hec -am ft-enable-cr test_mpi
<br>
<p>however, when trying to checkpoint at another terminal of the same host, 
<br>
I have the following,
<br>
root_at_hec:~# ompi-checkpoint -v 29234
<br>
[hec:29243] orte_checkpoint: Checkpointing...
<br>
[hec:29243]      PID 29234
<br>
[hec:29243]      Connected to Mpirun [[46621,0],0]
<br>
[hec:29243] orte_checkpoint: notify_hnp: Contact Head Node Process PID 29234
<br>
[hec:29243] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid 
<br>
[INVALID]
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Status Update.
<br>
[hec:29243]                 Requested - Global Snapshot Reference: (null)
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Status Update.
<br>
[hec:29243]                   Pending - Global Snapshot Reference: (null)
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[hec:29243] orte_checkpoint: hnp_receiver: Status Update.
<br>
[hec:29243]                   Running - Global Snapshot Reference: (null)
<br>
<p>There is some error msg at the terminal of the running applicaiton, as,
<br>
--------------------------------------------------------------------------
<br>
Error: The process with PID 29236 is not checkpointable.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could be due to one of the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- An application with this PID doesn't currently exist
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't checkpointable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't an OPAL application.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We were looking for the named files:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_write.29236
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_read.29236
<br>
--------------------------------------------------------------------------
<br>
[hec:29234] local) Error: Unable to initiate the handshake with peer 
<br>
[[46621,1],1]. -1
<br>
[hec:29234] [[46621,0],0] ORTE_ERROR_LOG: Error in file 
<br>
snapc_full_global.c at line 567
<br>
[hec:29234] [[46621,0],0] ORTE_ERROR_LOG: Error in file 
<br>
snapc_full_global.c at line 1054
<br>
<p><p><p><p>does anyone have some hint to fix this problem?
<br>
<p>Thanks,
<br>
Hui Jin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11032.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
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
