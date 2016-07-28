<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 24 10:48:15 2013" -->
<!-- isoreceived="20130924144815" -->
<!-- sent="Tue, 24 Sep 2013 16:48:11 +0200" -->
<!-- isosent="20130924144811" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="3617C114-953E-4736-8EB3-AE7D3633FCC8_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0822E79E-AD5F-4CC2-8A4D-8CE1DFD0F2EF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intercomm Merge<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-24 10:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12982.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12982.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Output attached in a file.
<br>
Thanks a lot!
<br>
<p>Best,
<br>
Suraj
<br>
<p><p>

<br><p>
<p><p>On Sep 24, 2013, at 4:11 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Afraid I don't see the problem offhand - can you add the following to your cmd line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca state_base_verbose 10 -mca errmgr_base_verbose 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2013, at 6:35 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I always got this output from any MPI job that ran on our nodes. There seems to be a problem somewhere but it never stopped the applications from running. But anyway, I ran it again now with only tcp and excluded the infiniband and I get the same output again. Except that this time, the error related to this openib is not there anymore. Printing out the log again. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive job launch command from [[6160,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive adding hosts
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive calling spawn
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:setup_job
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:setup_vm add new daemon [[6160,0],2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:setup_vm assigning new daemon [[6160,0],2] to node grsacc18
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: launching vm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: final top-level argv:
</span><br>
<span class="quotelev2">&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 403701760 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;403701760.0;tcp://192.168.222.20:35163&quot; -mca plm_base_verbose 5 -mca btl tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: launching on node grsacc19
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: executing:
</span><br>
<span class="quotelev2">&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 403701760 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;403701760.0;tcp://192.168.222.20:35163&quot; -mca plm_base_verbose 5 -mca btl tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: launching on node grsacc18
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm: executing:
</span><br>
<span class="quotelev2">&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 403701760 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;403701760.0;tcp://192.168.222.20:35163&quot; -mca plm_base_verbose 5 -mca btl tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:tm:launch: finished spawning orteds
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] [[6160,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] [[6160,0],1] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] [[6160,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28821] [[6160,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] [[6160,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] [[6160,0],2] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc18:16717] [[6160,0],2] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:orted_report_launch from daemon [[6160,0],2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:orted_report_launch from daemon [[6160,0],2] on node grsacc18
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:orted_report_launch completed for daemon [[6160,0],2] at contact 403701760.2;tcp://192.168.222.18:44229
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:launch_apps for job [6160,2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive update proc state command from [[6160,0],2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive got update_proc_state for job [6160,2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive got update_proc_state for vpid 0 state RUNNING exit_code 0
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:launch wiring up iof for job [6160,2]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:launch registered event
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:launch sending dyn release of job [6160,2] to [[6160,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc19:28815] [[6160,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; [grsacc20:04578] [[6160,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.1$ [grsacc18:16717] [[6160,0],2] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Suraj
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2013, at 3:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your output shows that it launched your apps, but they exited. The error is reported here, though it appears we aren't flushing the message out before exiting due to a race condition:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] 1 more process has sent help message help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the full text:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [no active ports found]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There is at least non-excluded one OpenFabrics device found,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but there are no active ports detected (or Open MPI was unable to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them).  This is most certainly not what you wanted.  Check your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cables, subnet manager configuration, etc.  The openib BTL will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ignored for this job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host: %s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like at least one node being used doesn't have an active Infiniband port on it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2013, at 6:11 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tested it with the trunk r29228. I still have the following problem. Now, it even spawns the daemon on the new node through torque but then suddently quits. The following is the output. Can you please have a look? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive job launch command from [[6253,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive adding hosts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive calling spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:setup_job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:setup_vm add new daemon [[6253,0],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:setup_vm assigning new daemon [[6253,0],2] to node grsacc18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: launching vm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: final top-level argv:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 409796608 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;409796608.0;tcp://192.168.222.20:53097&quot; -mca plm_base_verbose 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: launching on node grsacc19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: executing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 409796608 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;409796608.0;tcp://192.168.222.20:53097&quot; -mca plm_base_verbose 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: launching on node grsacc18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm: executing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 409796608 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 -mca orte_hnp_uri &quot;409796608.0;tcp://192.168.222.20:53097&quot; -mca plm_base_verbose 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:tm:launch: finished spawning orteds
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] [[6253,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] [[6253,0],1] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] [[6253,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28754] [[6253,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] [[6253,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] [[6253,0],2] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc18:16648] [[6253,0],2] plm:base:receive start comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:orted_report_launch from daemon [[6253,0],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:orted_report_launch from daemon [[6253,0],2] on node grsacc18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:orted_report_launch completed for daemon [[6253,0],2] at contact 409796608.2;tcp://192.168.222.18:47974
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:launch_apps for job [6253,2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] 1 more process has sent help message help-mpi-btl-openib.txt / no active ports found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] 1 more process has sent help message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive update proc state command from [[6253,0],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive got update_proc_state for job [6253,2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive got update_proc_state for vpid 0 state RUNNING exit_code 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:launch wiring up iof for job [6253,2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:launch registered event
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:launch sending dyn release of job [6253,2] to [[6253,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc19:28747] [[6253,0],1] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grsacc20:04511] [[6253,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-4.1$ [grsacc18:16648] [[6253,0],2] plm:base:receive stop comm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 23, 2013, at 1:55 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Found a bug in the Torque support - we were trying to connect to the MOM again, which would hang (I imagine). I pushed a fix to the trunk (r29227) and scheduled it to come to 1.7.3 if you want to try it again.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 22, 2013, at 4:21 PM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is the output I get when I execute with the verbose option.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive processing msg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive job launch command from [[23526,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive adding hosts
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive calling spawn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive done processing commands
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_vm add new daemon [[23526,0],2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_vm assigning new daemon [[23526,0],2] to node grsacc17/1-4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_vm add new daemon [[23526,0],3]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:setup_vm assigning new daemon [[23526,0],3] to node grsacc17/0-5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:tm: launching vm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:tm: final top-level argv:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 	orted -mca ess tm -mca orte_ess_jobid 1541799936 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_hnp_uri &quot;1541799936.0;tcp://192.168.222.20:49049&quot; -mca plm_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [grsacc20:21012] [[23526,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Says something?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 22, 2013, at 9:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll still need to look at the intercomm_create issue, but I just tested both the trunk and current 1.7.3 branch for &quot;add-host&quot; and both worked just fine. This was on my little test cluster which only has rsh available - no Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You might add &quot;-mca plm_base_verbose 5&quot; to your cmd line to get some debug output as to the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 21, 2013, at 5:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 21, 2013, at 4:54 PM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Really thanks a lot for your efforts. I too downloaded the trunk to check if it works for my case and as of revision 29215, it works for the original case I reported. Although it works, I still see the following in the output. Does it mean anything?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [grsacc17][[13611,1],0][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[13611,2],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes - it means we don't quite have this right yet :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, on another topic relevant to my use case, I have another problem to report. I am having problems using the &quot;add-host&quot; info to the MPI_Comm_spawn() when MPI is compiled with support for Torque resource manager. This problem is totally new in the 1.7 series and it worked perfectly until 1.6.5 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Basically, I am working on implementing dynamic resource management facilities in the Torque/Maui batch system. Through a new tm call, an application can get new resources for a job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FWIW: you'll find that we added an API to the orte RAS framework to support precisely that operation. It allows an application to request that we dynamically obtain additional resources during execution (e.g., as part of a Comm_spawn call via an info_key). We originally implemented this with Slurm, but you could add the calls into the Torque component as well if you like.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is in the trunk now - will come over to 1.7.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I want to use MPI_Comm_spawn() to spawn new processes in the new hosts. With my extended torque/maui batch system, I was able to perfectly use the &quot;add-host&quot; info argument to MPI_Comm_spawn() to spawn new processes on these hosts. Since MPI and Torque refer to the hosts through the nodeids, I made sure that OpenMPI uses the correct nodeid's for these new hosts. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Until 1.6.5, this worked perfectly fine, except that due to the Intercomm_merge problem, I could not really run a real application to its completion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; While this is now fixed in the trunk, I found that, however, when using the &quot;add-host&quot; info argument, everything collapses after printing out the following error. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [warn] opal_libevent2021_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll take a look - probably some stale code that hasn't been updated yet for async ORTE operations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And due to this, I am still not really able to run my application! I also compiled the MPI without any Torque/PBS support and just used the &quot;add-host&quot; argument normally. Again, this worked perfectly in 1.6.5. But in the 1.7 series, it works but after printing out the following error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [grsacc17][[13731,1],0][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[13731,2],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [grsacc17][[13731,1],1][btl_openib_proc.c:157:mca_btl_openib_proc_create] [btl_openib_proc.c:157] ompi_modex_recv failed for peer [[13731,2],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yeah, the 1.7 series doesn't have the reentrant test in it - so we &quot;illegally&quot; re-enter libevent. The error again means we don't have Intercomm_create correct just yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'll see what I can do about this and get back to you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In short, with pbs/torque support, it fails and without pbs/torque support, it runs after spitting the above lines. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would really appreciate some help on this, since I need these features to actually test my case and (at least in my short experience) no other MPI implementation seem friendly to such dynamic scenarios. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 20, 2013, at 4:58 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Just to close my end of this loop: as of trunk r29213, it all works for me.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 12:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks George - much appreciated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 9:49 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The test case was broken. I just pushed a fix.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 16:49 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hangs with any np &gt; 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, I'm not sure if that's an issue with the test vs the underlying implementation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 7:40 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Does it hang when you run with -np 4?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 4:10 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Strange - it works fine for me on my Mac. However, I see one difference - I only run it with np=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 2:22 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 9:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. sm doesn't work between spawned processes. So you must have another network enabled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know :-).  I have tcp available as well (OMPI will abort if you only run with sm,self because the comm_spawn will fail with unreachable errors -- I just tested/proved this to myself).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. Don't use the test case attached to my email, I left an xterm based spawn and the debugging. It can't work without xterm support. Instead try using the test case from the trunk, the one committed by Ralph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I didn't see any &quot;xterm&quot; strings in there, but ok.  :-)  I ran with orte/test/mpi/intercomm_create.c, and that hangs for me as well:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Similarly, on my Mac, it hangs with no output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 07:53 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I build the SVN trunk (r29201) on 64 bit linux, your attached test case hangs:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On my Mac, it hangs without printing anything:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sep 18, 2013, at 1:48 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a quick (and definitively not the cleanest) patch that addresses the MPI_Intercomm issue at the MPI level. It should be applied after removal of 29166.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I also added the corrected test case stressing the corner cases by doing barriers at every inter-comm creation and doing a clean disconnect.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/rtf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12983/output.rtf">output.rtf</a>
</ul>
<!-- attachment="output.rtf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12982.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12982.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12984.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
