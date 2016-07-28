<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 12:18:17 2011" -->
<!-- isoreceived="20110816161817" -->
<!-- sent="Tue, 16 Aug 2011 10:18:09 -0600" -->
<!-- isosent="20110816161809" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="A579B1A9-9D75-45E1-8CE8-C762DF379407_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E4A8866.8060203_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 12:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17062.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17062.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Smells like a bug - I'll take a look.
<br>
<p><p>On Aug 16, 2011, at 9:10 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; On 08/16/2011 02:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That should work, then. When you set the &quot;host&quot; property, did you give the same name as was in your machine file?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Debug options that might help:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca plm_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You'll need to configure --enable-debug to get the output, but that should help tell us what is happening.
</span><br>
<span class="quotelev1">&gt; To be clear here is the code I am using to spawn the MPI job:
</span><br>
<span class="quotelev1">&gt; // create the info object
</span><br>
<span class="quotelev1">&gt; MPI_Info info;
</span><br>
<span class="quotelev1">&gt; MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev1">&gt; MPI_Info_set(info, &quot;host&quot;, const_cast&lt;char*&gt;(hostname.c_str()));
</span><br>
<span class="quotelev1">&gt; LOG(ERROR) &lt;&lt; hostname;
</span><br>
<span class="quotelev1">&gt; LOG(DEBUG) &lt;&lt; &quot;Invoking task ID '&quot; &lt;&lt; task_id &lt;&lt;&quot;': '&quot; &lt;&lt; exec_name &lt;&lt; &quot;'&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn( const_cast&lt;char*&gt;(exec_name.c_str()), cargs, num_procs,
</span><br>
<span class="quotelev1">&gt;                    info, 0, MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; delete[] cargs;
</span><br>
<span class="quotelev1">&gt; MPI_Info_free(&amp;info);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and here is the log message:
</span><br>
<span class="quotelev1">&gt; In this case the MPI_Spaw creates a job with 3 MPI processes. As you can see MPI_Spawn doesn't care about my &quot;host&quot; setting, it just goes ahead and map the processes to node b05 and node b06 which are in my machinefile. (which is the same as before)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there any way to overwrite this behaviour?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DEBUG 14628:R&lt;0&gt; 17:00:13] Spawning new MPI processes...
</span><br>
<span class="quotelev1">&gt; DEBUG 14628:R&lt;0&gt; 17:00:13] Serving event 'TASK_CREATED', (number of registered handlers: 1)
</span><br>
<span class="quotelev1">&gt; ERROR 14628:R&lt;0&gt; 17:00:13] b01
</span><br>
<span class="quotelev1">&gt; DEBUG 14628:R&lt;0&gt; 17:00:13] Invoking task ID '4': './simulator'
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive got message from [[34621,1],0]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive job launch command
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:rsh: setting up job [34621,4]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:setup_job for job [34621,4]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: created new proc [[34621,4],INVALID]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot mapping proc in job [34621,4] to node b02
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: adding node b02 to map
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping proc for job [34621,4] to node b02
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: created new proc [[34621,4],INVALID]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot mapping proc in job [34621,4] to node b01
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: adding node b01 to map
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping proc for job [34621,4] to node b01
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot: created new proc [[34621,4],INVALID]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:claim_slot mapping proc in job [34621,4] to node b02
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base: mapping proc for job [34621,4] to node b02
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:compute_usage
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:define_daemons
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:define_daemons existing daemon [[34621,0],2] already launched
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] rmaps:base:define_daemons existing daemon [[34621,0],1] already launched
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:rsh: no new daemons to launch
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch_apps for job [34621,4]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:report_launched for job [34621,4]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch from daemon [[34621,0],0]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch completed processing
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch reissuing non-blocking recv
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch from daemon [[34621,0],1]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launched for proc [[34621,4],1] from daemon [[34621,0],1]: pid 14646 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch completed processing
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch reissuing non-blocking recv
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch from daemon [[34621,0],2]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launched for proc [[34621,4],0] from daemon [[34621,0],2]: pid 9803 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launched for proc [[34621,4],2] from daemon [[34621,0],2]: pid 9804 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:app_report_launch completed processing
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:report_launched all apps reported
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch wiring up iof
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:launch completed for job [34621,4]
</span><br>
<span class="quotelev1">&gt; [kreusspitze.dps.uibk.ac.at:02647] [[34621,0],0] plm:base:receive job [34621,4] launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers, Simone P.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 16, 2011, at 5:09 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/16/2011 12:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What version are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 16, 2011, at 3:19 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am developing a system to manage MPI tasks on top of MPI. The architecture is rather simple, I have a set of scheduler processes which takes care to manage the resources of a node. The idea is to have 1 (or more) of those scheduler allocated on each node of a cluster and then create new MPI processes (on demand) as computation is needed. Allocation of processes is done using MPI_Spawn.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The system now works fine on a single node by allocating the main scheduler using the following mpi command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --np 1 ./scheduler ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now when I scale to multiple nodes problems with default MPI behaviour starts. For example lets assume I have 2 nodes with 8 cpu cores each. I therefore set up a machine file in the following way:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; s01 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; s02 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and start the node schedulers in the following way:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --np 2 --machinefile machinefile ./scheduler ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This allocates the processes correctly, now the problem starts when I invoke MPI_Spawn. basically MPI spawn also uses the informations from the machinefile and if 4 MPI processes are spawned 2 are allocated in s01 and 2 on s02. What I want is to allocate the processes always in the same node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to do this by specifying an MPI_Info object which is then passed to the MPI_Spawn routine. I tried to set the &quot;host&quot; property to the hostname of the machine where the scheduler is running but this didn't help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately there is very little documentation on this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for the help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Simone
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17062.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17062.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
