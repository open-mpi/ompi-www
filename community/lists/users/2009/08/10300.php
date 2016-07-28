<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:15:03 2009" -->
<!-- isoreceived="20090811141503" -->
<!-- sent="Tue, 11 Aug 2009 07:14:57 -0700" -->
<!-- isosent="20090811141457" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="E70FEF5D-593D-4E82-BD22-2EE7781CA6F6_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908110628g3ac423dg6bbeccc1a49b42e3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 10:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-Aug-09, at 6:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; -mca plm_base_verbose 5 --debug-daemons -mca odls_base_verbose 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid the output will be a tad verbose, but I would appreciate  
</span><br>
<span class="quotelev1">&gt; seeing it. Might also tell us something about the lib issue.
</span><br>
<p><p>Command line was:
<br>
<p>/usr/local/openmpi/bin/mpirun -mca plm_base_verbose 5 --debug-daemons - 
<br>
mca odls_base_verbose 5 -n 16 --host xserve03,xserve04 ../build/mitgcmuv
<br>
<p><p>Starting: ../results//TasGaussRestart16
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Querying component [rsh]
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Query of component  
<br>
[rsh] set priority to 10
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Querying component  
<br>
[slurm]
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Skipping component  
<br>
[slurm]. Query failed to return a module
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Querying component [tm]
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Skipping component  
<br>
[tm]. Query failed to return a module
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Querying component  
<br>
[xgrid]
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Skipping component  
<br>
[xgrid]. Query failed to return a module
<br>
[saturna.cluster:07360] mca:base:select:(  plm) Selected component [rsh]
<br>
[saturna.cluster:07360] plm:base:set_hnp_name: initial bias 7360  
<br>
nodename hash 1656374957
<br>
[saturna.cluster:07360] plm:base:set_hnp_name: final jobfam 14551
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive start comm
<br>
[saturna.cluster:07360] mca: base: component_find: ras  
<br>
&quot;mca_ras_dash_host&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] mca: base: component_find: ras  
<br>
&quot;mca_ras_hostfile&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] mca: base: component_find: ras  
<br>
&quot;mca_ras_localhost&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] mca: base: component_find: ras &quot;mca_ras_xgrid&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[saturna.cluster:07360] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[saturna.cluster:07360] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
[saturna.cluster:07360] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: setting up job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:setup_job for job  
<br>
[14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: local shell: 0 (bash)
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: assuming same remote  
<br>
shell as local shell
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/ssh &lt;template&gt;  PATH=/usr/local/openmpi/bin:$PATH ; export  
<br>
PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ;  
<br>
export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/orted --debug-daemons  
<br>
-mca ess env -mca orte_ess_jobid 953614336 -mca orte_ess_vpid  
<br>
&lt;template&gt; -mca orte_ess_num_procs 3 --hnp-uri &quot;953614336.0;tcp:// 
<br>
142.104.154.96:49622;tcp://192.168.2.254:49622&quot; -mca plm_base_verbose  
<br>
5 -mca odls_base_verbose 5
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: launching on node  
<br>
xserve03
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: recording launch of  
<br>
daemon [[14551,0],1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: executing: (//usr/bin/ 
<br>
ssh) [/usr/bin/ssh xserve03  PATH=/usr/local/openmpi/bin:$PATH ;  
<br>
export PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib: 
<br>
$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/ 
<br>
orted --debug-daemons -mca ess env -mca orte_ess_jobid 953614336 -mca  
<br>
orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;953614336.0;tcp:// 
<br>
142.104.154.96:49622;tcp://192.168.2.254:49622&quot; -mca plm_base_verbose  
<br>
5 -mca odls_base_verbose 5]
<br>
Daemon was launched on xserve03.local - beginning to initialize
<br>
[xserve03.local:40708] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[xserve03.local:40708] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[xserve03.local:40708] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
[xserve03.local:40708] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[xserve03.local:40708] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
Daemon [[14551,0],1] checking in as pid 40708 on host xserve03.local
<br>
Daemon [[14551,0],1] not using static ports
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: launching on node  
<br>
xserve04
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: recording launch of  
<br>
daemon [[14551,0],2]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:rsh: executing: (//usr/bin/ 
<br>
ssh) [/usr/bin/ssh xserve04  PATH=/usr/local/openmpi/bin:$PATH ;  
<br>
export PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib: 
<br>
$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/ 
<br>
orted --debug-daemons -mca ess env -mca orte_ess_jobid 953614336 -mca  
<br>
orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;953614336.0;tcp:// 
<br>
142.104.154.96:49622;tcp://192.168.2.254:49622&quot; -mca plm_base_verbose  
<br>
5 -mca odls_base_verbose 5]
<br>
Daemon was launched on xserve04.local - beginning to initialize
<br>
[xserve04.local:40450] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[xserve04.local:40450] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[xserve04.local:40450] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
[xserve04.local:40450] mca: base: component_find: iof &quot;mca_iof_proxy&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
[xserve04.local:40450] mca: base: component_find: iof &quot;mca_iof_svc&quot;  
<br>
uses an MCA interface that is not recognized (component MCA v1.0.0 !=  
<br>
supported MCA v2.0.0) -- ignored
<br>
Daemon [[14551,0],2] checking in as pid 40450 on host xserve04.local
<br>
Daemon [[14551,0],2] not using static ports
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:daemon_callback
<br>
[saturna.cluster:07360] progressed_wait: base/ 
<br>
plm_base_launch_support.c 459
<br>
[xserve04.local:40450] [[14551,0],2] orted: up and running - waiting  
<br>
for commands!
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_launch_support.c 423
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_launch_support.c 423
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_report_launch  
<br>
from daemon [[14551,0],1]
<br>
[xserve03.local:40708] [[14551,0],1] orted: up and running - waiting  
<br>
for commands!
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_report_launch  
<br>
completed for daemon [[14551,0],1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_report_launch  
<br>
from daemon [[14551,0],2]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_report_launch  
<br>
completed for daemon [[14551,0],2]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:daemon_callback completed
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:launch_apps for job  
<br>
[14551,1]
<br>
[saturna.cluster:07360] defining message event: grpcomm_bad_module.c 183
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:report_launched for job  
<br>
[14551,1]
<br>
[saturna.cluster:07360] progressed_wait: base/ 
<br>
plm_base_launch_support.c 712
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor called  
<br>
by [[14551,0],0] for tag 1
<br>
[saturna.cluster:07360] [[14551,0],0] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[saturna.cluster:07360] [[14551,0],0] node[1].name xserve03 daemon 1  
<br>
arch ffc90200
<br>
[saturna.cluster:07360] [[14551,0],0] node[2].name xserve04 daemon 2  
<br>
arch ffc90200
<br>
[saturna.cluster:07360] [[14551,0],0] orted_cmd: received  
<br>
add_local_procs
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list
<br>
[saturna.cluster:07360] [[14551,0],0] odls:construct_child_list  
<br>
unpacking data to launch job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] odls:construct_child_list adding  
<br>
new jobdat for job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] odls:construct_child_list  
<br>
unpacking 1 app_contexts
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 0 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 1 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 2 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 3 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 4 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 5 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 6 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 7 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 8 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 9 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 10 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 11 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 12 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 13 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 14 on node 1 with daemon 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:constructing child list -  
<br>
checking proc 15 on node 2 with daemon 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:construct:child:  
<br>
num_participating 2
<br>
[saturna.cluster:07360] [[14551,0],0] odls:launch found 4 processors  
<br>
for 0 children and set oversubscribed to false
<br>
[saturna.cluster:07360] [[14551,0],0] odls:launch reporting job  
<br>
[14551,1] launch status
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
odls_base_default_fns.c 1219
<br>
[saturna.cluster:07360] [[14551,0],0] odls:launch setting waitpids
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:send_relay
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 1
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 2
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch from  
<br>
daemon [[14551,0],0]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[xserve04.local:40450] [[14551,0],2] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[xserve04.local:40450] [[14551,0],2] node[1].name xserve03 daemon 1  
<br>
arch ffc90200
<br>
[xserve04.local:40450] [[14551,0],2] node[2].name xserve04 daemon 2  
<br>
arch ffc90200
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received add_local_procs
<br>
[xserve03.local:40708] [[14551,0],1] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[xserve03.local:40708] [[14551,0],1] node[1].name xserve03 daemon 1  
<br>
arch ffc90200
<br>
[xserve03.local:40708] [[14551,0],1] node[2].name xserve04 daemon 2  
<br>
arch ffc90200
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received add_local_procs
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_launch_support.c 668
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch  
<br>
reissuing non-blocking recv
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch from  
<br>
daemon [[14551,0],1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],0] from daemon [[14551,0],1]: pid 40710 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],2] from daemon [[14551,0],1]: pid 40711 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],4] from daemon [[14551,0],1]: pid 40712 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],6] from daemon [[14551,0],1]: pid 40713 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],8] from daemon [[14551,0],1]: pid 40714 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],10] from daemon [[14551,0],1]: pid 40715 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],12] from daemon [[14551,0],1]: pid 40716 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],14] from daemon [[14551,0],1]: pid 40717 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_launch_support.c 668
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch  
<br>
reissuing non-blocking recv
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch from  
<br>
daemon [[14551,0],2]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],1] from daemon [[14551,0],2]: pid 40452 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],3] from daemon [[14551,0],2]: pid 40453 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],5] from daemon [[14551,0],2]: pid 40454 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],7] from daemon [[14551,0],2]: pid 40455 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],9] from daemon [[14551,0],2]: pid 40456 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],11] from daemon [[14551,0],2]: pid 40457 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],13] from daemon [[14551,0],2]: pid 40458 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launched for  
<br>
proc [[14551,1],15] from daemon [[14551,0],2]: pid 40459 state 2 exit 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:report_launched all  
<br>
apps reported
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:launch wiring up iof
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:launch completed for  
<br>
job [14551,1]
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],0]
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],2]
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],4]
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],3]
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],1]
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40710] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40711] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40712] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40453] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],7]
<br>
[xserve04.local:40452] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],6]
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],5]
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],8]
<br>
[xserve04.local:40455] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40713] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40454] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40714] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],9]
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],10]
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],12]
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
routed_base_receive.c 153
<br>
[xserve03.local:40708] [[14551,0],1] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],14]
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],11]
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],15]
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve04.local:40450] [[14551,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[14551,1],13]
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
routed_base_receive.c 153
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40715] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40716] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve03.local:40717] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40456] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve04.local:40457] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40459] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[saturna.cluster:07360] defining message event: iof_hnp_receive.c 227
<br>
[xserve04.local:40458] mca: base: component_find: rcache  
<br>
&quot;mca_rcache_rb&quot; uses an MCA interface that is not recognized  
<br>
(component MCA v1.0.0 != supported MCA v2.0.0) -- ignored
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] [[14551,0],0] orted_recv_cmd: received message  
<br>
from [[14551,0],1]
<br>
[saturna.cluster:07360] defining message event: orted/orted_comm.c 159
<br>
[xserve03.local:40708] [[14551,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] [[14551,0],0] orted_recv_cmd: reissued recv
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor called  
<br>
by [[14551,0],1] for tag 1
<br>
[saturna.cluster:07360] [[14551,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] [[14551,0],0] odls: daemon collective called
<br>
[saturna.cluster:07360] [[14551,0],0] odls: daemon collective for job  
<br>
[14551,1] from [[14551,0],1] type 2 num_collected 1 num_participating  
<br>
2 num_contributors 8
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] [[14551,0],0] orted_recv_cmd: received message  
<br>
from [[14551,0],2]
<br>
[xserve04.local:40450] [[14551,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] defining message event: orted/orted_comm.c 159
<br>
[saturna.cluster:07360] [[14551,0],0] orted_recv_cmd: reissued recv
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor called  
<br>
by [[14551,0],2] for tag 1
<br>
[saturna.cluster:07360] [[14551,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:07360] [[14551,0],0] odls: daemon collective called
<br>
[saturna.cluster:07360] [[14551,0],0] odls: daemon collective for job  
<br>
[14551,1] from [[14551,0],2] type 2 num_collected 2 num_participating  
<br>
2 num_contributors 16
<br>
[saturna.cluster:07360] [[14551,0],0] odls: daemon collective HNP -  
<br>
xcasting to job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] ORTE_ERROR_LOG: Buffer type  
<br>
(described vs non-described) mismatch - operation not allowed in file  
<br>
base/odls_base_default_fns.c at line 2475
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
<p>^C[saturna.cluster:07360] defining timer event: 0 sec 0 usec at  
<br>
orterun.c:1128
<br>
Killed by signal 2.
<br>
mpirun: killing job...
<br>
<p>Killed by signal 2.
<br>
[saturna.cluster:07360] [[14551,0],0]:orterun.c(1031) updating exit  
<br>
status to 1
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd sending  
<br>
kill_local_procs cmds
<br>
[saturna.cluster:07360] [[14551,0],0]  
<br>
plm:base:orted_cmd:kill_local_procs abnormal term ordered
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_orted_cmds.c 276
<br>
[saturna.cluster:07360] [[14551,0],0]  
<br>
plm:base:orted_cmd:kill_local_procs sending cmd to [[14551,0],1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd message to  
<br>
[[14551,0],1] sent
<br>
[saturna.cluster:07360] [[14551,0],0]  
<br>
plm:base:orted_cmd:kill_local_procs sending cmd to [[14551,0],2]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd message to  
<br>
[[14551,0],2] sent
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd all messages  
<br>
sent
<br>
[saturna.cluster:07360] defining timeout: 0 sec 2000 usec at base/ 
<br>
plm_base_orted_cmds.c:321
<br>
[saturna.cluster:07360] progressed_wait: base/plm_base_orted_cmds.c 324
<br>
[saturna.cluster:07360] defining timeout: 0 sec 16000 usec at  
<br>
orterun.c:1066
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor called  
<br>
by [[14551,0],0] for tag 1
<br>
[saturna.cluster:07360] [[14551,0],0] odls:kill_local_proc working on  
<br>
job [WILDCARD]
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
odls_base_default_fns.c 2267
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed  
<br>
called with NULL pointer
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed job  
<br>
[14551,1] is not terminated
<br>
[saturna.cluster:07360] [[14551,0],0] daemon 2 failed with status 255
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:launch_failed abort in  
<br>
progress, ignoring report
<br>
[saturna.cluster:07360] [[14551,0],0] daemon 1 failed with status 255
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:launch_failed abort in  
<br>
progress, ignoring report
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got message  
<br>
from [[14551,0],1]
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_receive.c 327
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got message  
<br>
from [[14551,0],2]
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_receive.c 327
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 0 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 2 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 4 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 6 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 8 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 10 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 12 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 14 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed for  
<br>
job [14551,1] - num_terminated 8  num_procs 16
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed  
<br>
declared job [14551,1] aborted by proc [[14551,1],0] with code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed job  
<br>
[14551,1] is not terminated
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for job [14551,1]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 1 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 3 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 5 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 7 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 9 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 11 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 13 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:receive got  
<br>
update_proc_state for vpid 15 state 400 exit_code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed for  
<br>
job [14551,1] - num_terminated 16  num_procs 16
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed  
<br>
declared job [14551,1] aborted by proc [[14551,1],0] with code 0
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed all  
<br>
jobs terminated - waking up
<br>
[saturna.cluster:07360] [[14551,0],0] calling job_complete trigger
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 40710 on node xserve03  
<br>
exited on signal 0 (Signal 0).
<br>
--------------------------------------------------------------------------
<br>
16 total processes killed (some possibly by mpirun during cleanup)
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd sending  
<br>
orted_exit commands
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:orted_cmd:orted_exit  
<br>
abnormal term ordered
<br>
[saturna.cluster:07360] defining message event: base/ 
<br>
plm_base_orted_cmds.c 142
<br>
[saturna.cluster:07360] defining timeout: 0 sec 0 usec at base/ 
<br>
plm_base_orted_cmds.c:186
<br>
[saturna.cluster:07360] progressed_wait: base/plm_base_orted_cmds.c 189
<br>
[saturna.cluster:07360] defining timeout: 0 sec 3000 usec at orterun.c: 
<br>
752
<br>
[saturna.cluster:07360] [[14551,0],0] orte:daemon:cmd:processor called  
<br>
by [[14551,0],0] for tag 1
<br>
[saturna.cluster:07360] [[14551,0],0] orted_cmd: received exit
<br>
[saturna.cluster:07360] [[14551,0],0] odls:kill_local_proc working on  
<br>
job [WILDCARD]
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed for  
<br>
job [14551,0] - num_terminated 3  num_procs 3
<br>
[saturna.cluster:07360] [[14551,0],0] plm:base:check_job_completed  
<br>
declared job [14551,0] failed to start by proc [[14551,0],1]
<br>
[saturna.cluster:07360] [[14551,0],0] calling orted_exit trigger
<br>
mpirun: clean termination accomplished
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10295.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
