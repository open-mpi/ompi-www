<?
$subject_val = "Re: [OMPI users] problems with checkpointing an mpi job";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 08:54:00 2009" -->
<!-- isoreceived="20091106135400" -->
<!-- sent="Fri, 6 Nov 2009 06:53:56 -0700" -->
<!-- isosent="20091106135356" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with checkpointing an mpi job" -->
<!-- id="631D3D59-6263-4598-B26E-81285CCBFB67_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AEB4007.4090906_at_iit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with checkpointing an mpi job<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 08:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2009, at 1:35 PM, Hui Jin wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I got a problem when trying to checkpoint a mpi job.
</span><br>
<span class="quotelev1">&gt; I will really appreciate if you can help me fix the problem.
</span><br>
<span class="quotelev1">&gt; the blcr package was installed successfully on the cluster.
</span><br>
<span class="quotelev1">&gt; I configure the ompenmpi with flags,
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads -- 
</span><br>
<span class="quotelev1">&gt; with-blcr=/usr/local --with-blcr-libdir=/usr/local/lib/
</span><br>
<span class="quotelev1">&gt; The installation looks correct. The open MPI version is 1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following output when issueing ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_hec:/export/home/hjin/test# ompi_info | grep ft
</span><br>
<span class="quotelev1">&gt;                MCA rml: ftrm (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; root_at_hec:/export/home/hjin/test# ompi_info | grep crs
</span><br>
<span class="quotelev1">&gt;                MCA crs: none (MCA v2.0, API v2.0, Component v1.3.3)
</span><br>
<span class="quotelev1">&gt; It seems the MCA crs is lost but I have no idea about how to get it.
</span><br>
<p>This is an artifact of the way ompi_info searches for components. This  
<br>
came up before on the users list:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10667.php">http://www.open-mpi.org/community/lists/users/2009/09/10667.php</a>
<br>
<p>I filed a bug about this, if you want to track its progress:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2097">https://svn.open-mpi.org/trac/ompi/ticket/2097</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To run a checkpointable application, I run:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host hec -am ft-enable-cr test_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however, when trying to checkpoint at another terminal of the same  
</span><br>
<span class="quotelev1">&gt; host, I have the following,
</span><br>
<span class="quotelev1">&gt; root_at_hec:~# ompi-checkpoint -v 29234
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [hec:29243]      PID 29234
</span><br>
<span class="quotelev1">&gt; [hec:29243]      Connected to Mpirun [[46621,0],0]
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: notify_hnp: Contact Head Node Process  
</span><br>
<span class="quotelev1">&gt; PID 29234
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: notify_hnp: Requested a checkpoint of  
</span><br>
<span class="quotelev1">&gt; jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [hec:29243]                 Requested - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [hec:29243]                   Pending - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [hec:29243] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; [hec:29243]                   Running - Global Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; (null)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is some error msg at the terminal of the running applicaiton,  
</span><br>
<span class="quotelev1">&gt; as,
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process with PID 29236 is not checkpointable.
</span><br>
<span class="quotelev1">&gt;      This could be due to one of the following:
</span><br>
<span class="quotelev1">&gt;       - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev1">&gt;       - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev1">&gt;       - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev1">&gt;      We were looking for the named files:
</span><br>
<span class="quotelev1">&gt;        /tmp/opal_cr_prog_write.29236
</span><br>
<span class="quotelev1">&gt;        /tmp/opal_cr_prog_read.29236
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hec:29234] local) Error: Unable to initiate the handshake with peer  
</span><br>
<span class="quotelev1">&gt; [[46621,1],1]. -1
</span><br>
<span class="quotelev1">&gt; [hec:29234] [[46621,0],0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; snapc_full_global.c at line 567
</span><br>
<span class="quotelev1">&gt; [hec:29234] [[46621,0],0] ORTE_ERROR_LOG: Error in file  
</span><br>
<span class="quotelev1">&gt; snapc_full_global.c at line 1054
</span><br>
<p>This means that either the MPI application did not respond to the  
<br>
checkpoint request in time, or that the application was not  
<br>
checkpointable for some other reason.
<br>
<p>Some options to try:
<br>
&nbsp;&nbsp;- Set the 'snapc_full_max_wait_time' MCA parameter to say 60, the  
<br>
default is 20 seconds before giving up. You can also set it to 0,  
<br>
which indicates to the runtime to wait indefinitely.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun -mca snapc_full_max_wait_time 60
<br>
&nbsp;&nbsp;- Try cleaning out the /tmp directory on all of the nodes, maybe  
<br>
this has something to do with disks being full (though usually we  
<br>
would see other symptoms).
<br>
<p>If that doesn't help, can you send me the config.log from your build  
<br>
of Open MPI. If those do not work, I would suspect that something in  
<br>
the configure of Open MPI might have gone wrong.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does anyone have some hint to fix this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Hui Jin
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
<li><strong>Next message:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11086.php">Josh Hursey: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/11031.php">Hui Jin: "[OMPI users] problems with checkpointing an mpi job"</a>
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
