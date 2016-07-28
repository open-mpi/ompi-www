<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:54:43 2009" -->
<!-- isoreceived="20090811145443" -->
<!-- sent="Tue, 11 Aug 2009 07:54:35 -0700" -->
<!-- isosent="20090811145435" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="9833CC7B-259F-4913-A906-F29315317101_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5B150C7F-6CFF-4E31-BEA1-415FEEE7C01F_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-11 10:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-Aug-09, at 6:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This means that OMPI is finding an mca_iof_proxy.la file at run time  
</span><br>
<span class="quotelev1">&gt; from a prior version of Open MPI.  You might want to use &quot;find&quot; or  
</span><br>
<span class="quotelev1">&gt; &quot;locate&quot; to search your nodes and find it.  I suspect that you  
</span><br>
<span class="quotelev1">&gt; somehow have an OMPI 1.3.x install that overlaid an install of a  
</span><br>
<span class="quotelev1">&gt; prior OMPI version installation.
</span><br>
<p><p>OK, right you were - the old file was in my new install directory.  I  
<br>
didn't erase /usr/local/openmpi before re-running the install...
<br>
<p>However, after reinstalling on the nodes (but not cleaning out /usr/ 
<br>
lib on all the nodes) I still have the following:
<br>
<p>Thanks,  Jody
<br>
<p><p>saturna.cluster:17660] mca:base:select:(  plm) Querying component [rsh]
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Query of component  
<br>
[rsh] set priority to 10
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Querying component  
<br>
[slurm]
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Skipping component  
<br>
[slurm]. Query failed to return a module
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Querying component [tm]
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Skipping component  
<br>
[tm]. Query failed to return a module
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Querying component  
<br>
[xgrid]
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Skipping component  
<br>
[xgrid]. Query failed to return a module
<br>
[saturna.cluster:17660] mca:base:select:(  plm) Selected component [rsh]
<br>
[saturna.cluster:17660] plm:base:set_hnp_name: initial bias 17660  
<br>
nodename hash 1656374957
<br>
[saturna.cluster:17660] plm:base:set_hnp_name: final jobfam 24811
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:receive start comm
<br>
[saturna.cluster:17660] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[saturna.cluster:17660] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[saturna.cluster:17660] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: setting up job [24811,1]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:setup_job for job  
<br>
[24811,1]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: local shell: 0 (bash)
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: assuming same remote  
<br>
shell as local shell
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/ssh &lt;template&gt;  PATH=/usr/local/openmpi/bin:$PATH ; export  
<br>
PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ;  
<br>
export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/orted --debug-daemons  
<br>
-mca ess env -mca orte_ess_jobid 1626013696 -mca orte_ess_vpid  
<br>
&lt;template&gt; -mca orte_ess_num_procs 3 --hnp-uri &quot;1626013696.0;tcp:// 
<br>
142.104.154.96:49710;tcp://192.168.2.254:49710&quot; -mca plm_base_verbose  
<br>
5 -mca odls_base_verbose 5
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: launching on node  
<br>
xserve01
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: recording launch of  
<br>
daemon [[24811,0],1]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: executing: (//usr/bin/ 
<br>
ssh) [/usr/bin/ssh xserve01  PATH=/usr/local/openmpi/bin:$PATH ;  
<br>
export PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib: 
<br>
$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/ 
<br>
orted --debug-daemons -mca ess env -mca orte_ess_jobid 1626013696 -mca  
<br>
orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri  
<br>
&quot;1626013696.0;tcp://142.104.154.96:49710;tcp://192.168.2.254:49710&quot; - 
<br>
mca plm_base_verbose 5 -mca odls_base_verbose 5]
<br>
Daemon was launched on xserve01.cluster - beginning to initialize
<br>
[xserve01.cluster:42519] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[xserve01.cluster:42519] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[xserve01.cluster:42519] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
Daemon [[24811,0],1] checking in as pid 42519 on host xserve01.cluster
<br>
Daemon [[24811,0],1] not using static ports
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: launching on node  
<br>
xserve02
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: recording launch of  
<br>
daemon [[24811,0],2]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:rsh: executing: (//usr/bin/ 
<br>
ssh) [/usr/bin/ssh xserve02  PATH=/usr/local/openmpi/bin:$PATH ;  
<br>
export PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib: 
<br>
$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/ 
<br>
orted --debug-daemons -mca ess env -mca orte_ess_jobid 1626013696 -mca  
<br>
orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri  
<br>
&quot;1626013696.0;tcp://142.104.154.96:49710;tcp://192.168.2.254:49710&quot; - 
<br>
mca plm_base_verbose 5 -mca odls_base_verbose 5]
<br>
Daemon was launched on xserve02.local - beginning to initialize
<br>
[xserve02.local:42180] mca:base:select:( odls) Querying component  
<br>
[default]
<br>
[xserve02.local:42180] mca:base:select:( odls) Query of component  
<br>
[default] set priority to 1
<br>
[xserve02.local:42180] mca:base:select:( odls) Selected component  
<br>
[default]
<br>
Daemon [[24811,0],2] checking in as pid 42180 on host xserve02.local
<br>
Daemon [[24811,0],2] not using static ports
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:daemon_callback
<br>
[saturna.cluster:17660] progressed_wait: base/ 
<br>
plm_base_launch_support.c 459
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
plm_base_launch_support.c 423
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch  
<br>
from daemon [[24811,0],1]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch  
<br>
completed for daemon [[24811,0],1]
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
plm_base_launch_support.c 423
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch  
<br>
from daemon [[24811,0],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] orted: up and running - waiting  
<br>
for commands!
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch  
<br>
completed for daemon [[24811,0],2]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:daemon_callback completed
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:launch_apps for job  
<br>
[24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] orted: up and running - waiting  
<br>
for commands!
<br>
[saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:report_launched for job  
<br>
[24811,1]
<br>
[saturna.cluster:17660] progressed_wait: base/ 
<br>
plm_base_launch_support.c 712
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[saturna.cluster:17660] [[24811,0],0] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[saturna.cluster:17660] [[24811,0],0] node[1].name xserve01 daemon 1  
<br>
arch ffc90200
<br>
[saturna.cluster:17660] [[24811,0],0] node[2].name xserve02 daemon 2  
<br>
arch ffc90200
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received  
<br>
add_local_procs
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list
<br>
[saturna.cluster:17660] [[24811,0],0] odls:construct_child_list  
<br>
unpacking data to launch job [24811,1]
<br>
[saturna.cluster:17660] [[24811,0],0] odls:construct_child_list adding  
<br>
new jobdat for job [24811,1]
<br>
[saturna.cluster:17660] [[24811,0],0] odls:construct_child_list  
<br>
unpacking 1 app_contexts
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 0 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 1 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 2 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 3 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 4 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 5 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 6 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 7 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 8 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 9 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 10 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 11 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 12 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 13 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 14 on node 1 with daemon 1
<br>
[saturna.cluster:17660] [[24811,0],0] odls:constructing child list -  
<br>
checking proc 15 on node 2 with daemon 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:construct:child:  
<br>
num_participating 2
<br>
[saturna.cluster:17660] [[24811,0],0] odls:launch found 4 processors  
<br>
for 0 children and set oversubscribed to false
<br>
[saturna.cluster:17660] [[24811,0],0] odls:launch reporting job  
<br>
[24811,1] launch status
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
odls_base_default_fns.c 1219
<br>
[saturna.cluster:17660] [[24811,0],0] odls:launch setting waitpids
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 1
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 2
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from  
<br>
daemon [[24811,0],0]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,0],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,0],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[xserve01.cluster:42519] [[24811,0],1] node[1].name xserve01 daemon 1  
<br>
arch ffc90200
<br>
[xserve01.cluster:42519] [[24811,0],1] node[2].name xserve02 daemon 2  
<br>
arch ffc90200
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received  
<br>
add_local_procs
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list  
<br>
unpacking data to launch job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list  
<br>
adding new jobdat for job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list  
<br>
unpacking 1 app_contexts
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,0],0]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] node[0].name saturna daemon 0  
<br>
arch ffc90200
<br>
[xserve02.local:42180] [[24811,0],2] node[1].name xserve01 daemon 1  
<br>
arch ffc90200
<br>
[xserve02.local:42180] [[24811,0],2] node[2].name xserve02 daemon 2  
<br>
arch ffc90200
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received add_local_procs
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list
<br>
[xserve02.local:42180] [[24811,0],2] odls:construct_child_list  
<br>
unpacking data to launch job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls:construct_child_list adding  
<br>
new jobdat for job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 0 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 0 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 1 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 2 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 2 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 3 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 4 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 4 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 5 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 6 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 6 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 7 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 8 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 8 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 9 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 10 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 10 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 11 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 12 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 12 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:construct_child_list  
<br>
unpacking 1 app_contexts
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 13 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 14 on node 1 with daemon 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
found proc 14 for me!
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -  
<br>
checking proc 15 on node 2 with daemon 2
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:construct:child:  
<br>
num_participating 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:launch found 16 processors  
<br>
for 8 children and set oversubscribed to false
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 0 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 1 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 1 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 2 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 3 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 3 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 4 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 5 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 5 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 6 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 7 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 7 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 8 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 9 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 9 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 10 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 11 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 11 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 12 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 13 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 13 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 14 on node 1 with daemon 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
checking proc 15 on node 2 with daemon 2
<br>
[xserve02.local:42180] [[24811,0],2] odls:constructing child list -  
<br>
found proc 15 for me!
<br>
[xserve02.local:42180] [[24811,0],2] odls:construct:child:  
<br>
num_participating 1
<br>
[xserve02.local:42180] [[24811,0],2] odls:launch found 16 processors  
<br>
for 8 children and set oversubscribed to false
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:launch reporting job  
<br>
[24811,1] launch status
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
plm_base_launch_support.c 668
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch  
<br>
reissuing non-blocking recv
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from  
<br>
daemon [[24811,0],1]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],0] from daemon [[24811,0],1]: pid 42523 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],2] from daemon [[24811,0],1]: pid 42524 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],4] from daemon [[24811,0],1]: pid 42525 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],6] from daemon [[24811,0],1]: pid 42526 state 2 exit 0
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:launch setting waitpids
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],8] from daemon [[24811,0],1]: pid 42527 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],10] from daemon [[24811,0],1]: pid 42528 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],12] from daemon [[24811,0],1]: pid 42529 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],14] from daemon [[24811,0],1]: pid 42530 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[xserve02.local:42180] [[24811,0],2] odls:launch reporting job  
<br>
[24811,1] launch status
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
plm_base_launch_support.c 668
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch  
<br>
reissuing non-blocking recv
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from  
<br>
daemon [[24811,0],2]
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],1] from daemon [[24811,0],2]: pid 42184 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],3] from daemon [[24811,0],2]: pid 42185 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],5] from daemon [[24811,0],2]: pid 42186 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],7] from daemon [[24811,0],2]: pid 42187 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],9] from daemon [[24811,0],2]: pid 42188 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],11] from daemon [[24811,0],2]: pid 42189 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],13] from daemon [[24811,0],2]: pid 42190 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for  
<br>
proc [[24811,1],15] from daemon [[24811,0],2]: pid 42191 state 2 exit 0
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch  
<br>
completed processing
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:report_launched all  
<br>
apps reported
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:launch wiring up iof
<br>
[xserve02.local:42180] [[24811,0],2] odls:launch setting waitpids
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
[saturna.cluster:17660] [[24811,0],0] plm:base:launch completed for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],0] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],4]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],4] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],4] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],2]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],2] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],2] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],6]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],6] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],6]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],6]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],6] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],10]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],10] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],10]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],10]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],10] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],8]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],8] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],8]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],8]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],8] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],5]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],5] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],5] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],1]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],1] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],1] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],3]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],3] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],3] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],12]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],12] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],12] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],14]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],14] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync 
<br>
+nidmap from local proc [[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child  
<br>
[[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child  
<br>
[[24811,1],14] with 307 bytes of data
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending contact info to HNP
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
routed_base_receive.c 153
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],11]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],11] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],11] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],2]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],7]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],7] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],7] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],2] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],9]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],9] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],9]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],9]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],9] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],13]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],13] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],13]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],13]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],13] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],15]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],15] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap  
<br>
from local proc [[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] odls: registering sync on child  
<br>
[[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for  
<br>
job [24811,1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child  
<br>
[[24811,1],15] with 307 bytes of data
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending contact info to HNP
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] defining message event: base/ 
<br>
routed_base_receive.c 153
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],4]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],4] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],6]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],6] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],6]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],10]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],10] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],10]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],8]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],8] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],8]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],5]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],5] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],3]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],3] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],12]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],12] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],1]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],1] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message  
<br>
from [[24811,0],1]
<br>
[saturna.cluster:17660] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],14]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],14] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: executing collective
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon collective called
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],1] type 2 num_collected 1 num_participating  
<br>
1 num_contributors 8
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon  
<br>
col[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
<br>
lective not the HNP - sending to parent [[24811,0],0]
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],1] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collective completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],1] type 2 num_collected 1 num_participating  
<br>
2 num_contributors 8
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],9]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],9] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],9]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],13]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],13] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],13]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],7]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],7] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],11]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],11] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],15]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],15] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] odls: executing collective
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective called
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],2] type 2 num_collected 1 num_participating  
<br>
1 num_contributors 8
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective not the  
<br>
HNP - sending to parent [[24811,0],0]
<br>
[xserve02.local:42180] [[24811,0],2] odls: collective completed
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message  
<br>
from [[24811,0],2]
<br>
[saturna.cluster:17660] defining message event: orted/orted_comm.c 159
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],2] for tag 1
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],2] type 2 num_collected 2 num_participating  
<br>
2 num_contributors 16
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective HNP -  
<br>
xcasting to job [24811,1]
<br>
[saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received  
<br>
message_local_procs
<br>
[saturna.cluster:17660] [[24811,0],0] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 15
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 1
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 2
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,0],0]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received  
<br>
message_local_procs
<br>
[xserve02.local:42180] [[24811,0],2] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 15
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],9]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15  
<br>
on child [[24811,1],13]
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,0],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,0],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received  
<br>
message_local_procs
<br>
[xserve01.cluster:42519] [[24811,0],1] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 15
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],6]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],8]
<br>
[xserve01.cluster:42[xserve02.local:42180] [[24811,0],2] odls: sending  
<br>
message to tag 15 on child [[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
519] [[24811,0],1] odls: sending message to tag 15 on child [[24811,1], 
<br>
10]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15  
<br>
on child [[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],5]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],5] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],13]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],13] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],13]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],7]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],7] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],9]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],9] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],9]
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],12]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],12] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],10]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],10] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],10]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],11]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],11] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],15]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],15] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],4]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],4] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],6]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],6] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],6]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],8]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],8] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],8]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],14]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],14] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],1]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],1] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,1],3]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,1],3] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve02.local:42180] [[24811,0],2] odls: collecting data from child  
<br>
[[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] odls: executing collective
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message  
<br>
from [[24811,0],2]
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],2] type 1 num_collected 1 num_participating  
<br>
1 num_contributors 8
<br>
[xserve02.local:42180] [[24811,0],2] odls: daemon collective not the  
<br>
HNP - sending to parent [[24811,0],0]
<br>
[xserve02.local:42180] [[24811,0],2] odls: collective completed
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] defining message event: orted/orted_comm.c 159
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message  
<br>
from [[24811,0],1]
<br>
[saturna.cluster:17660] defining message event: orted/orted_comm.c 159
<br>
[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,1],2]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,1],2] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective  
<br>
data cmd
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collecting data from  
<br>
child [[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: executing collective
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],2] for tag 1
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],2] type 1 num_collected 1 num_participating  
<br>
2 num_contributors 8
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],1] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],1] type 1 num_collected 1 num_participating  
<br>
1 num_contributors 8
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: daemon collective not the  
<br>
HNP - sending to parent [[24811,0],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: collective completed
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective  
<br>
data cmd
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job  
<br>
[24811,1] from [[24811,0],1] type 1 num_collected 2 num_participating  
<br>
2 num_contributors 16
<br>
[saturna.cluster:17660] [[24811,0],0] odls: daemon collective HNP -  
<br>
xcasting to job [24811,1]
<br>
[saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor:  
<br>
processing commands completed
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[saturna.cluster:17660] [[24811,0],0] orted_cmd: received  
<br>
message_local_procs
<br>
[saturna.cluster:17660] [[24811,0],0] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 17
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 1
<br>
[saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending  
<br>
relay msg to 2
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received  
<br>
message from [[24811,0],0]
<br>
[xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor  
<br>
called by [[24811,0],0] for tag 1
<br>
[xserve01.cluster:42519] [[24811,0],1] orted_cmd: received  
<br>
message_local_procs
<br>
[xserve01.cluster:42519] [[24811,0],1] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 17
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],0]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],2]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],4]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],6]
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message  
<br>
from [[24811,0],0]
<br>
[xserve02.local:42180] defining message event: orted/orted_comm.c 159
<br>
[xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called  
<br>
by [[24811,0],0] for tag 1
<br>
[xserve02.local:42180] [[24811,0],2] orted_cmd: received  
<br>
message_local_procs
<br>
[xserve02.local:42180] [[24811,0],2] orted:comm:message_local_procs  
<br>
delivering message to job [24811,1] tag 17
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],1]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],3]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],5]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],7]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],9]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],8]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],10]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],12]
<br>
[xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17  
<br>
on child [[24811,1],14]
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
<br>
[xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],11]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],13]
<br>
[xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17  
<br>
on child [[24811,1],15]
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
<br>
[xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
[saturna.cluster:17660] defining message event: iof_hnp_receive.c 227
<br>
[xserve02.local][[24811,1],1][btl_tcp_endpoint.c: 
<br>
486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process  
<br>
identifier [[24811,1],2]
<br>
[saturna.cluster:17660] defining message event: iof_hnp_receive.c 227
<br>
[xserve01.cluster][[24811,1],2][btl_tcp_endpoint.c: 
<br>
486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process  
<br>
identifier [[24811,1],5]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10301.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
