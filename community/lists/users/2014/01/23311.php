<?
$subject_val = "Re: [OMPI users] Hetero apps just hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 05:56:01 2014" -->
<!-- isoreceived="20140102105601" -->
<!-- sent="Thu, 2 Jan 2014 11:55:37 +0100 (CET)" -->
<!-- isosent="20140102105537" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hetero apps just hang" -->
<!-- id="201401021055.s02AtblP012330_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Hetero apps just hang" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hetero apps just hang<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 05:55:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Previous message:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Maybe in reply to:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; We shouldn't just hang - that isn't right. Can you configure
</span><br>
<span class="quotelev1">&gt; OMPI with --enable-debug and then add &quot;-mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; -mca state_base_verbose 5&quot; to your cmd line so we can see where
</span><br>
<span class="quotelev1">&gt; it is hanging?
</span><br>
<p>The program doesn't hang. It completes without any output and
<br>
return status &quot;1&quot;.
<br>
<p>tyr small_prog 55 mpiexec -np 3 -host rs0,sunpc1,linpc1 \
<br>
&nbsp;&nbsp;-mca plm_base_verbose 5 -mca state_base_verbose 5 rank_size
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [app]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [hnp]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Query of component [hnp] set priority to 60
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [novm]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [orted]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [orted]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [staged_hnp]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [staged_orted]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Querying component [tool]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(state) Selected component [hnp]
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(  plm) Querying component [rsh]
<br>
[tyr.informatik.hs-fulda.de:12297] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[tyr.informatik.hs-fulda.de:12297] mca:base:select:(  plm) Selected component [rsh]
<br>
[tyr.informatik.hs-fulda.de:12297] plm:base:set_hnp_name: initial bias 12297 nodename hash 339128848
<br>
[tyr.informatik.hs-fulda.de:12297] plm:base:set_hnp_name: final jobfam 38447
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:receive start comm
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB [INVALID] STATE PENDING INIT AT ../../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/rsh/plm_rsh_module.c:900
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB [INVALID] STATE PENDING INIT PRI 4
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_job
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB [38447,1] STATE INIT_COMPLETE AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:317
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB [38447,1] STATE INIT_COMPLETE PRI 4
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB [38447,1] STATE PENDING ALLOCATION AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:328
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB [38447,1] STATE PENDING ALLOCATION PRI 4
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB [38447,1] STATE ALLOCATION COMPLETE AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/ras/base/ras_base_allocate.c:423
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB [38447,1] STATE ALLOCATION COMPLETE PRI 4
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB [38447,1] STATE PENDING DAEMON LAUNCH AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:184
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB [38447,1] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm creating map
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] setup:vm: working unmanaged allocation
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] using dash_host
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] checking node rs0
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] checking node sunpc1
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] checking node linpc1
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm add new daemon [[38447,0],1]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm assigning new daemon [[38447,0],1] to node rs0
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm add new daemon [[38447,0],2]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm assigning new daemon [[38447,0],2] to node sunpc1
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm add new daemon [[38447,0],3]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:setup_vm assigning new daemon [[38447,0],3] to node linpc1
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: launching vm
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: local shell: 2 (tcsh)
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: assuming same remote shell as local shell
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: remote shell: 2 (tcsh)
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/bin/ssh &lt;template&gt;  orted -mca ess env -mca orte_ess_jobid 2519662592 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_hnp_uri &quot;2519662592.0;tcp://193.174.24.39:59753&quot; 
<br>
--tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh:launch daemon 0 not a child of mine
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: adding node rs0 to launch list
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: adding node sunpc1 to launch list
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh:launch daemon 3 not a child of mine
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: activating launch event
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: recording launch of daemon [[38447,0],1]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh rs0  orted -mca ess env -mca orte_ess_jobid 2519662592 -mca orte_ess_vpid 1 -mca 
<br>
orte_ess_num_procs 4 -mca orte_hnp_uri &quot;2519662592.0;tcp://193.174.24.39:59753&quot; --tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh sunpc1  orted -mca ess env -mca orte_ess_jobid 2519662592 -mca orte_ess_vpid 2 -mca 
<br>
orte_ess_num_procs 4 -mca orte_hnp_uri &quot;2519662592.0;tcp://193.174.24.39:59753&quot; --tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh]
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:rsh: recording launch of daemon [[38447,0],2]
<br>
X11 forwarding request failed on channel 0
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [app]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [hnp]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [hnp]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [novm]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [orted]
<br>
[sunpc1:22290] mca:base:select:(state) Query of component [orted] set priority to 100
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [staged_hnp]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [staged_orted]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Querying component [tool]
<br>
[sunpc1:22290] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[sunpc1:22290] mca:base:select:(state) Selected component [orted]
<br>
[sunpc1:22290] mca:base:select:(  plm) Querying component [rsh]
<br>
[sunpc1:22290] [[38447,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[sunpc1:22290] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[sunpc1:22290] mca:base:select:(  plm) Selected component [rsh]
<br>
[sunpc1:22290] [[38447,0],2] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[sunpc1:22290] [[38447,0],2] plm:base:receive start comm
<br>
[sunpc1:22290] [[38447,0],2] ACTIVATE PROC [[38447,0],0] STATE UNABLE TO SEND MSG AT ../../../../openmpi-1.9a1r30100/orte/mca/rml/base/rml_base_frame.c:205
<br>
[sunpc1:22290] [[38447,0],2] ACTIVATING PROC [[38447,0],0] STATE UNABLE TO SEND MSG PRI 0
<br>
[sunpc1:22290] [[38447,0],2] FORCE-TERMINATE AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[sunpc1:22290] [[38447,0],2] ACTIVATE JOB NULL STATE FORCED EXIT AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[sunpc1:22290] [[38447,0],2] ACTIVATING JOB NULL STATE FORCED EXIT PRI 0
<br>
[sunpc1:22290] [[38447,0],2] plm:base:receive stop comm
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] daemon 2 failed with status 1
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE PROC [[38447,0],2] STATE FAILED TO START AT ../../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/rsh/plm_rsh_module.c:304
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING PROC [[38447,0],2] STATE FAILED TO START PRI 0
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATE JOB NULL STATE DAEMONS TERMINATED AT ../../openmpi-1.7.4rc2r30094/orte/orted/orted_comm.c:465
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] ACTIVATING JOB NULL STATE DAEMONS TERMINATED PRI 0
<br>
[tyr.informatik.hs-fulda.de:12297] [[38447,0],0] plm:base:receive stop comm
<br>
tyr small_prog 56 [rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [app]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [hnp]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [hnp]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [novm]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [orted]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Query of component [orted] set priority to 100
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [staged_hnp]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [staged_orted]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Querying component [tool]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(state) Selected component [orted]
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(  plm) Querying component [rsh]
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[rs0.informatik.hs-fulda.de:03686] mca:base:select:(  plm) Selected component [rsh]
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] plm:base:receive start comm
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] ACTIVATE PROC [[38447,0],0] STATE UNABLE TO SEND MSG AT ../../../../openmpi-1.9a1r30100/orte/mca/rml/base/rml_base_frame.c:205
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] ACTIVATING PROC [[38447,0],0] STATE UNABLE TO SEND MSG PRI 0
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] FORCE-TERMINATE AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] ACTIVATE JOB NULL STATE FORCED EXIT AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] ACTIVATING JOB NULL STATE FORCED EXIT PRI 0
<br>
[rs0.informatik.hs-fulda.de:03686] [[38447,0],1] plm:base:receive stop comm
<br>
<p>tyr small_prog 56 echo $status
<br>
1
<br>
tyr small_prog 57 
<br>
<p><p><p><p><p><p><p><p><p><p>tyr small_prog 57 mpiexec -np 3 -host rs0,sunpc1,linpc1 -mca plm_base_verbose 5 \
<br>
&nbsp;&nbsp;-mca state_base_verbose 5 --hetero-nodes --hetero-apps rank_size
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [app]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [hnp]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Query of component [hnp] set priority to 60
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [novm]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [orted]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [orted]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [staged_hnp]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [staged_orted]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Querying component [tool]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(state) Selected component [hnp]
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(  plm) Querying component [rsh]
<br>
[tyr.informatik.hs-fulda.de:12313] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[tyr.informatik.hs-fulda.de:12313] mca:base:select:(  plm) Selected component [rsh]
<br>
[tyr.informatik.hs-fulda.de:12313] plm:base:set_hnp_name: initial bias 12313 nodename hash 339128848
<br>
[tyr.informatik.hs-fulda.de:12313] plm:base:set_hnp_name: final jobfam 38463
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:receive start comm
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB [INVALID] STATE PENDING INIT AT ../../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/rsh/plm_rsh_module.c:900
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB [INVALID] STATE PENDING INIT PRI 4
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_job
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB [38463,1] STATE INIT_COMPLETE AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:317
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB [38463,1] STATE INIT_COMPLETE PRI 4
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB [38463,1] STATE PENDING ALLOCATION AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:328
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB [38463,1] STATE PENDING ALLOCATION PRI 4
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB [38463,1] STATE ALLOCATION COMPLETE AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/ras/base/ras_base_allocate.c:423
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB [38463,1] STATE ALLOCATION COMPLETE PRI 4
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB [38463,1] STATE PENDING DAEMON LAUNCH AT ../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/base/plm_base_launch_support.c:184
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB [38463,1] STATE PENDING DAEMON LAUNCH PRI 4
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm creating map
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] setup:vm: working unmanaged allocation
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] using dash_host
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] checking node rs0
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] checking node sunpc1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] checking node linpc1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm add new daemon [[38463,0],1]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm assigning new daemon [[38463,0],1] to node rs0
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm add new daemon [[38463,0],2]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm assigning new daemon [[38463,0],2] to node sunpc1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm add new daemon [[38463,0],3]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:setup_vm assigning new daemon [[38463,0],3] to node linpc1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: launching vm
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: local shell: 2 (tcsh)
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: assuming same remote shell as local shell
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: remote shell: 2 (tcsh)
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/bin/ssh &lt;template&gt;  orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 2520711168 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 -mca orte_hnp_uri 
<br>
&quot;2520711168.0;tcp://193.174.24.39:59756&quot; --tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh -mca orte_hetero_apps 1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh:launch daemon 0 not a child of mine
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: adding node rs0 to launch list
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: adding node sunpc1 to launch list
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh:launch daemon 3 not a child of mine
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: activating launch event
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: recording launch of daemon [[38463,0],1]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh rs0  orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 2520711168 -mca 
<br>
orte_ess_vpid 1 -mca orte_ess_num_procs 4 -mca orte_hnp_uri &quot;2520711168.0;tcp://193.174.24.39:59756&quot; --tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh -mca orte_hetero_apps 1]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: executing: (/usr/local/bin/ssh) [/usr/local/bin/ssh sunpc1  orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 2520711168 -mca 
<br>
orte_ess_vpid 2 -mca orte_ess_num_procs 4 -mca orte_hnp_uri &quot;2520711168.0;tcp://193.174.24.39:59756&quot; --tree-spawn -mca plm_base_verbose 5 -mca state_base_verbose 5 -mca plm rsh -mca orte_hetero_apps 1]
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:rsh: recording launch of daemon [[38463,0],2]
<br>
Warning: No xauth data; using fake authentication data for X11 forwarding.
<br>
X11 forwarding request failed on channel 0
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [app]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [hnp]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [hnp]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [novm]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [orted]
<br>
[sunpc1:22320] mca:base:select:(state) Query of component [orted] set priority to 100
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [staged_hnp]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [staged_orted]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Querying component [tool]
<br>
[sunpc1:22320] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[sunpc1:22320] mca:base:select:(state) Selected component [orted]
<br>
[sunpc1:22320] mca:base:select:(  plm) Querying component [rsh]
<br>
[sunpc1:22320] [[38463,0],2] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[sunpc1:22320] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[sunpc1:22320] mca:base:select:(  plm) Selected component [rsh]
<br>
[sunpc1:22320] [[38463,0],2] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[sunpc1:22320] [[38463,0],2] plm:base:receive start comm
<br>
[sunpc1:22320] [[38463,0],2] ACTIVATE PROC [[38463,0],0] STATE UNABLE TO SEND MSG AT ../../../../openmpi-1.9a1r30100/orte/mca/rml/base/rml_base_frame.c:205
<br>
[sunpc1:22320] [[38463,0],2] ACTIVATING PROC [[38463,0],0] STATE UNABLE TO SEND MSG PRI 0
<br>
[sunpc1:22320] [[38463,0],2] FORCE-TERMINATE AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[sunpc1:22320] [[38463,0],2] ACTIVATE JOB NULL STATE FORCED EXIT AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[sunpc1:22320] [[38463,0],2] ACTIVATING JOB NULL STATE FORCED EXIT PRI 0
<br>
[sunpc1:22320] [[38463,0],2] plm:base:receive stop comm
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] daemon 2 failed with status 1
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE PROC [[38463,0],2] STATE FAILED TO START AT ../../../../../openmpi-1.7.4rc2r30094/orte/mca/plm/rsh/plm_rsh_module.c:304
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING PROC [[38463,0],2] STATE FAILED TO START PRI 0
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATE JOB NULL STATE DAEMONS TERMINATED AT ../../openmpi-1.7.4rc2r30094/orte/orted/orted_comm.c:465
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] ACTIVATING JOB NULL STATE DAEMONS TERMINATED PRI 0
<br>
[tyr.informatik.hs-fulda.de:12313] [[38463,0],0] plm:base:receive stop comm
<br>
tyr small_prog 58 [rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [app]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [app]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [hnp]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [hnp]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [novm]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [novm]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [orted]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Query of component [orted] set priority to 100
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [staged_hnp]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [staged_hnp]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [staged_orted]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [staged_orted]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Querying component [tool]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Skipping component [tool]. Query failed to return a module
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(state) Selected component [orted]
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(  plm) Querying component [rsh]
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[rs0.informatik.hs-fulda.de:03718] mca:base:select:(  plm) Selected component [rsh]
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] plm:base:receive start comm
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] ACTIVATE PROC [[38463,0],0] STATE UNABLE TO SEND MSG AT ../../../../openmpi-1.9a1r30100/orte/mca/rml/base/rml_base_frame.c:205
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] ACTIVATING PROC [[38463,0],0] STATE UNABLE TO SEND MSG PRI 0
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] FORCE-TERMINATE AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] ACTIVATE JOB NULL STATE FORCED EXIT AT ../../../../../openmpi-1.9a1r30100/orte/mca/errmgr/default_orted/errmgr_default_orted.c:259
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] ACTIVATING JOB NULL STATE FORCED EXIT PRI 0
<br>
[rs0.informatik.hs-fulda.de:03718] [[38463,0],1] plm:base:receive stop comm
<br>
<p>tyr small_prog 58 echo $status                                                        1
<br>
tyr small_prog 59 
<br>
<p><p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><p><span class="quotelev1">&gt; On Jan 1, 2014, at 1:48 AM, Siegmar Gross
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the past I could run a small program in a real heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt; system with little (sunpc1, linpc1) and big endian (rs0, tyr)
</span><br>
<span class="quotelev2">&gt; &gt; machines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 101 ompi_info | grep MPI:
</span><br>
<span class="quotelev2">&gt; &gt;                Open MPI: 1.6.6a1r29175
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 102 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 1 of 3 available processes running on sunpc1.
</span><br>
<span class="quotelev2">&gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 0 of 3 available processes running on rs0.informatik.hs-fulda.de.
</span><br>
<span class="quotelev2">&gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; I'm process 2 of 3 available processes running on linpc1.
</span><br>
<span class="quotelev2">&gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 103 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now I get no output at all.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 130 ompi_info | grep MPI:
</span><br>
<span class="quotelev2">&gt; &gt;                Open MPI: 1.9a1r30100
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 131 mpiexec -np 3 -host rs0,sunpc1,linpc1 rank_size
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 132 mpiexec -np 3 -host rs0,sunpc1,linpc1 \
</span><br>
<span class="quotelev2">&gt; &gt;  --hetero-nodes --hetero-apps rank_size
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 133
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps this behaviour is intended, because Open MPI doesn't
</span><br>
<span class="quotelev2">&gt; &gt; support little and big endian machines in the same cluster or
</span><br>
<span class="quotelev2">&gt; &gt; virtual computer (I know only LAM-MPI which works in such an
</span><br>
<span class="quotelev2">&gt; &gt; environment). On the other side: Does it make sense to run
</span><br>
<span class="quotelev2">&gt; &gt; the command without any output, if it doesn't work (even if
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpiexec&quot; returns &quot;1&quot;)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23312.php">Siegmar Gross: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>Previous message:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Maybe in reply to:</strong> <a href="23301.php">Ralph Castain: "Re: [OMPI users] Hetero apps just hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
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
