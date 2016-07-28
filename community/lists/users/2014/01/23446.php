<?
$subject_val = "[OMPI users] Connection to lifeline lost";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:41:30 2014" -->
<!-- isoreceived="20140124174130" -->
<!-- sent="Fri, 24 Jan 2014 15:41:38 -0200" -->
<!-- isosent="20140124174138" -->
<!-- name="etcamargo" -->
<!-- email="etcamargo_at_[hidden]" -->
<!-- subject="[OMPI users] Connection to lifeline lost" -->
<!-- id="b45bcdefc1f86ad84b989920b01b8e4a_at_inf.ufpr.br" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Connection to lifeline lost<br>
<strong>From:</strong> etcamargo (<em>etcamargo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Reply:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, All!
<br>
<p>Please, I have a problem to run a simple &quot;hello world&quot; program on 
<br>
different hosts. The hosts are virtual machines located in the same net. 
<br>
The program works fine only on one host, the ssh is ok between the 
<br>
machines and nfs is ok, sharing the  executable files between the 
<br>
machines.
<br>
<p>a) $ mpirun -hostfile machines -v -np 2 ./hello
<br>
<p>[achel:15275] [[32727,0],0] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/plm_base_launch_support.c at line 482
<br>
[latrappe:16467] OPAL dss:unpack: got type 49 when expecting type 38
<br>
[latrappe:16467] [[32727,0],1] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../orte/orted/orted_comm.c at line 235
<br>
[latrappe:16467] [[32727,0],1] routed:binomial: Connection to lifeline 
<br>
[[32727,0],0] lost
<br>
<p><p>b) $ mpirun -mca plm_base_verbose 5 -hostfile machines -v -np 2 ./hello
<br>
<p>[achel:17020] mca:base:select:(  plm) Querying component [rsh]
<br>
[achel:17020] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path 
<br>
NULL
<br>
[achel:17020] mca:base:select:(  plm) Query of component [rsh] set 
<br>
priority to 10
<br>
[achel:17020] mca:base:select:(  plm) Querying component [slurm]
<br>
[achel:17020] mca:base:select:(  plm) Skipping component [slurm]. Query 
<br>
failed to return a module
<br>
[achel:17020] mca:base:select:(  plm) Selected component [rsh]
<br>
[achel:17020] plm:base:set_hnp_name: initial bias 17020 nodename hash 
<br>
2714559920
<br>
[achel:17020] plm:base:set_hnp_name: final jobfam 1536
<br>
[achel:17020] [[1536,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[achel:17020] [[1536,0],0] plm:base:receive start comm
<br>
[achel:17020] released to spawn
<br>
[achel:17020] [[1536,0],0] plm:base:setup_vm
<br>
[achel:17020] [[1536,0],0] plm:base:setup_vm creating map
<br>
[achel:17020] [[1536,0],0] plm:base:setup_vm add new daemon [[1536,0],1]
<br>
[achel:17020] [[1536,0],0] plm:base:setup_vm assigning new daemon 
<br>
[[1536,0],1] to node latrappe.c3local
<br>
[achel:17020] [[1536,0],0] plm:rsh: launching vm
<br>
[achel:17020] [[1536,0],0] plm:rsh: local shell: 0 (bash)
<br>
[achel:17020] [[1536,0],0] plm:rsh: assuming same remote shell as local 
<br>
shell
<br>
[achel:17020] [[1536,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[achel:17020] [[1536,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/ssh &lt;template&gt;  orted -mca ess env -mca orte_ess_jobid 
<br>
100663296 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca 
<br>
orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca 
<br>
plm_base_verbose 5 -mca plm rsh
<br>
[achel:17020] [[1536,0],0] plm:rsh: launching on node latrappe.c3local
<br>
[achel:17020] [[1536,0],0] plm:rsh: recording launch of daemon 
<br>
[[1536,0],1]
<br>
[achel:17020] [[1536,0],0] plm:base:daemon_callback
<br>
[achel:17020] [[1536,0],0] plm:rsh: executing: (//usr/bin/ssh) 
<br>
[/usr/bin/ssh latrappe.c3local  orted -mca ess env -mca orte_ess_jobid 
<br>
100663296 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca 
<br>
orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca 
<br>
plm_base_verbose 5 -mca plm rsh]
<br>
[latrappe:18212] mca:base:select:(  plm) Querying component [rsh]
<br>
[latrappe:18212] mca:base:select:(  plm) Query of component [rsh] set 
<br>
priority to 10
<br>
[latrappe:18212] mca:base:select:(  plm) Selected component [rsh]
<br>
[achel:17020] [[1536,0],0] plm:base:orted_report_launch from daemon 
<br>
[[1536,0],1] via [[1536,0],1]
<br>
[achel:17020] [[1536,0],0] ORTE_ERROR_LOG: Out of resource in file 
<br>
base/plm_base_launch_support.c at line 482
<br>
[achel:17020] [[1536,0],0] plm:base:orted_report_launch failed for 
<br>
daemon [[1536,0],1] (via [[1536,0],1]) at contact 
<br>
100663296.1;tcp://10.254.222.7:33825
<br>
[achel:17020] [[1536,0],0] plm:base:orted_cmd sending orted_exit 
<br>
commands
<br>
[achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit abnormal term 
<br>
ordered
<br>
[achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit sending cmd to 
<br>
[[1536,0],1]
<br>
[achel:17020] [[1536,0],0] plm:base:orted_cmd message to [[1536,0],1] 
<br>
sent
<br>
[achel:17020] [[1536,0],0] plm:base:orted_cmd all messages sent
<br>
[achel:17020] [[1536,0],0] plm:tm: daemon launch failed on error (null)
<br>
[latrappe:18212] OPAL dss:unpack: got type 49 when expecting type 38
<br>
[latrappe:18212] [[1536,0],1] ORTE_ERROR_LOG: Pack data mismatch in file 
<br>
../../../orte/orted/orted_comm.c at line 235
<br>
[achel:17020] [[1536,0],0] plm:base:receive stop comm
<br>
[latrappe:18212] [[1536,0],1] routed:binomial: Connection to lifeline 
<br>
[[1536,0],0] lost
<br>
<p>Thanks in advance,
<br>
<p>Edson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Reply:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
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
