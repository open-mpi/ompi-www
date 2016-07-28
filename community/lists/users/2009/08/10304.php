<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 11:15:13 2009" -->
<!-- isoreceived="20090811151513" -->
<!-- sent="Tue, 11 Aug 2009 09:15:06 -0600" -->
<!-- isosent="20090811151506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="71d2d8cc0908110815l54139556u256c20a30632ae13_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9833CC7B-259F-4913-A906-F29315317101_at_uvic.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 11:15:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Previous message:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it now is launching just fine, so that's one thing! :-)
<br>
<p>Afraid I'll have to let the TCP btl guys take over from here. It looks like
<br>
everything is up and running, but something strange is going on in the MPI
<br>
comm layer.
<br>
<p>You can turn off those mca params I gave you as you are now past that point.
<br>
I know there are others that can help debug that TCP btl error, but they can
<br>
help you there.
<br>
<p>Ralph
<br>
<p><p>On Tue, Aug 11, 2009 at 8:54 AM, Klymak Jody &lt;jklymak_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Aug-09, at 6:16 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This means that OMPI is finding an mca_iof_proxy.la file at run time from
</span><br>
<span class="quotelev2">&gt;&gt; a prior version of Open MPI.  You might want to use &quot;find&quot; or &quot;locate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; search your nodes and find it.  I suspect that you somehow have an OMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.x install that overlaid an install of a prior OMPI version installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, right you were - the old file was in my new install directory.  I
</span><br>
<span class="quotelev1">&gt; didn't erase /usr/local/openmpi before re-running the install...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after reinstalling on the nodes (but not cleaning out /usr/lib on
</span><br>
<span class="quotelev1">&gt; all the nodes) I still have the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; saturna.cluster:17660] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Query of component [rsh]
</span><br>
<span class="quotelev1">&gt; set priority to 10
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Skipping component [tm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Querying component [xgrid]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Skipping component [xgrid].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] plm:base:set_hnp_name: initial bias 17660 nodename
</span><br>
<span class="quotelev1">&gt; hash 1656374957
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] plm:base:set_hnp_name: final jobfam 24811
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:( odls) Querying component
</span><br>
<span class="quotelev1">&gt; [default]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:( odls) Query of component
</span><br>
<span class="quotelev1">&gt; [default] set priority to 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] mca:base:select:( odls) Selected component
</span><br>
<span class="quotelev1">&gt; [default]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: setting up job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:setup_job for job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: assuming same remote shell
</span><br>
<span class="quotelev1">&gt; as local shell
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/bin/ssh &lt;template&gt;  PATH=/usr/local/openmpi/bin:$PATH ; export
</span><br>
<span class="quotelev1">&gt; PATH ; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/orted --debug-daemons -mca ess env
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_jobid 1626013696 -mca orte_ess_vpid &lt;template&gt; -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 3 --hnp-uri &quot;1626013696.0;tcp://142.104.154.96:49710
</span><br>
<span class="quotelev1">&gt; ;tcp://192.168.2.254:49710&quot; -mca plm_base_verbose 5 -mca odls_base_verbose
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: launching on node xserve01
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: recording launch of daemon
</span><br>
<span class="quotelev1">&gt; [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: executing: (//usr/bin/ssh)
</span><br>
<span class="quotelev1">&gt; [/usr/bin/ssh xserve01  PATH=/usr/local/openmpi/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/orted --debug-daemons -mca ess env
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_jobid 1626013696 -mca orte_ess_vpid 1 -mca orte_ess_num_procs
</span><br>
<span class="quotelev1">&gt; 3 --hnp-uri &quot;1626013696.0;tcp://142.104.154.96:49710;tcp://
</span><br>
<span class="quotelev1">&gt; 192.168.2.254:49710&quot; -mca plm_base_verbose 5 -mca odls_base_verbose 5]
</span><br>
<span class="quotelev1">&gt; Daemon was launched on xserve01.cluster - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] mca:base:select:( odls) Querying component
</span><br>
<span class="quotelev1">&gt; [default]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] mca:base:select:( odls) Query of component
</span><br>
<span class="quotelev1">&gt; [default] set priority to 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] mca:base:select:( odls) Selected component
</span><br>
<span class="quotelev1">&gt; [default]
</span><br>
<span class="quotelev1">&gt; Daemon [[24811,0],1] checking in as pid 42519 on host xserve01.cluster
</span><br>
<span class="quotelev1">&gt; Daemon [[24811,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: launching on node xserve02
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: recording launch of daemon
</span><br>
<span class="quotelev1">&gt; [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:rsh: executing: (//usr/bin/ssh)
</span><br>
<span class="quotelev1">&gt; [/usr/bin/ssh xserve02  PATH=/usr/local/openmpi/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH ;  /usr/local/openmpi/bin/orted --debug-daemons -mca ess env
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_jobid 1626013696 -mca orte_ess_vpid 2 -mca orte_ess_num_procs
</span><br>
<span class="quotelev1">&gt; 3 --hnp-uri &quot;1626013696.0;tcp://142.104.154.96:49710;tcp://
</span><br>
<span class="quotelev1">&gt; 192.168.2.254:49710&quot; -mca plm_base_verbose 5 -mca odls_base_verbose 5]
</span><br>
<span class="quotelev1">&gt; Daemon was launched on xserve02.local - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] mca:base:select:( odls) Query of component [default]
</span><br>
<span class="quotelev1">&gt; set priority to 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev1">&gt; Daemon [[24811,0],2] checking in as pid 42180 on host xserve02.local
</span><br>
<span class="quotelev1">&gt; Daemon [[24811,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] progressed_wait: base/plm_base_launch_support.c 459
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event:
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c 423
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch from
</span><br>
<span class="quotelev1">&gt; daemon [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch
</span><br>
<span class="quotelev1">&gt; completed for daemon [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event:
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c 423
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch from
</span><br>
<span class="quotelev1">&gt; daemon [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted: up and running - waiting for
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:orted_report_launch
</span><br>
<span class="quotelev1">&gt; completed for daemon [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:daemon_callback completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:launch_apps for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted: up and running - waiting for
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:report_launched for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] progressed_wait: base/plm_base_launch_support.c 712
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] node[0].name saturna daemon 0 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] node[1].name xserve01 daemon 1 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] node[2].name xserve02 daemon 2 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:construct_child_list unpacking
</span><br>
<span class="quotelev1">&gt; data to launch job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:construct_child_list adding new
</span><br>
<span class="quotelev1">&gt; jobdat for job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:construct_child_list unpacking 1
</span><br>
<span class="quotelev1">&gt; app_contexts
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 0 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 1 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 2 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 3 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 4 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 5 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 6 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 7 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 8 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 9 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 10 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 11 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 12 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 13 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 14 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 15 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:construct:child:
</span><br>
<span class="quotelev1">&gt; num_participating 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:launch found 4 processors for 0
</span><br>
<span class="quotelev1">&gt; children and set oversubscribed to false
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:launch reporting job [24811,1]
</span><br>
<span class="quotelev1">&gt; launch status
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event:
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c 1219
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls:launch setting waitpids
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 2
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from
</span><br>
<span class="quotelev1">&gt; daemon [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch completed
</span><br>
<span class="quotelev1">&gt; processing
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] node[0].name saturna daemon 0 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] node[1].name xserve01 daemon 1 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] node[2].name xserve02 daemon 2 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list unpacking
</span><br>
<span class="quotelev1">&gt; data to launch job [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list adding new
</span><br>
<span class="quotelev1">&gt; jobdat for job [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:construct_child_list unpacking
</span><br>
<span class="quotelev1">&gt; 1 app_contexts
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] node[0].name saturna daemon 0 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] node[1].name xserve01 daemon 1 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] node[2].name xserve02 daemon 2 arch
</span><br>
<span class="quotelev1">&gt; ffc90200
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:construct_child_list unpacking
</span><br>
<span class="quotelev1">&gt; data to launch job [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:construct_child_list adding new
</span><br>
<span class="quotelev1">&gt; jobdat for job [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 0 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 0 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 1 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 2 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 2 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 3 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 4 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 4 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 5 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 6 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 6 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 7 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 8 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 8 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 9 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 10 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 10 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 11 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 12 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 12 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:construct_child_list unpacking 1
</span><br>
<span class="quotelev1">&gt; app_contexts
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 13 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 14 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 14 for me!
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 15 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:construct:child:
</span><br>
<span class="quotelev1">&gt; num_participating 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:launch found 16 processors for
</span><br>
<span class="quotelev1">&gt; 8 children and set oversubscribed to false
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 0 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 1 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 1 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 2 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 3 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 3 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 4 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 5 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 5 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 6 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 7 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 7 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 8 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 9 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 9 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 10 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 11 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 11 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 12 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 13 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 13 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 14 on node 1 with daemon 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list -
</span><br>
<span class="quotelev1">&gt; checking proc 15 on node 2 with daemon 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:constructing child list - found
</span><br>
<span class="quotelev1">&gt; proc 15 for me!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:construct:child:
</span><br>
<span class="quotelev1">&gt; num_participating 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:launch found 16 processors for 8
</span><br>
<span class="quotelev1">&gt; children and set oversubscribed to false
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:launch reporting job [24811,1]
</span><br>
<span class="quotelev1">&gt; launch status
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event:
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c 668
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch reissuing
</span><br>
<span class="quotelev1">&gt; non-blocking recv
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from
</span><br>
<span class="quotelev1">&gt; daemon [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],0] from daemon [[24811,0],1]: pid 42523 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],2] from daemon [[24811,0],1]: pid 42524 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],4] from daemon [[24811,0],1]: pid 42525 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],6] from daemon [[24811,0],1]: pid 42526 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:launch setting waitpids
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],8] from daemon [[24811,0],1]: pid 42527 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],10] from daemon [[24811,0],1]: pid 42528 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],12] from daemon [[24811,0],1]: pid 42529 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],14] from daemon [[24811,0],1]: pid 42530 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch completed
</span><br>
<span class="quotelev1">&gt; processing
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:launch reporting job [24811,1]
</span><br>
<span class="quotelev1">&gt; launch status
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event:
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c 668
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch reissuing
</span><br>
<span class="quotelev1">&gt; non-blocking recv
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch from
</span><br>
<span class="quotelev1">&gt; daemon [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],1] from daemon [[24811,0],2]: pid 42184 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],3] from daemon [[24811,0],2]: pid 42185 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],5] from daemon [[24811,0],2]: pid 42186 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],7] from daemon [[24811,0],2]: pid 42187 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],9] from daemon [[24811,0],2]: pid 42188 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],11] from daemon [[24811,0],2]: pid 42189 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],13] from daemon [[24811,0],2]: pid 42190 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launched for proc
</span><br>
<span class="quotelev1">&gt; [[24811,1],15] from daemon [[24811,0],2]: pid 42191 state 2 exit 0
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:app_report_launch completed
</span><br>
<span class="quotelev1">&gt; processing
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:report_launched all apps
</span><br>
<span class="quotelev1">&gt; reported
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:launch wiring up iof
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:launch setting waitpids
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] plm:base:launch completed for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],0] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],4] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],4] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],2] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],2] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],6] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],6] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],10] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],10] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],8] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],8] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],5] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],5] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],1] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],3] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],3] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],12] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],12] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],14] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv: received sync+nidmap
</span><br>
<span class="quotelev1">&gt; from local proc [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],14] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending contact info to HNP
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: base/routed_base_receive.c
</span><br>
<span class="quotelev1">&gt; 153
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],11] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],11] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],7] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],7] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],2] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],9] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],9] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],13] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],13] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],15] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev1">&gt; local proc [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: registering sync on child
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls:sync nidmap requested for job
</span><br>
<span class="quotelev1">&gt; [24811,1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending sync ack to child
</span><br>
<span class="quotelev1">&gt; [[24811,1],15] with 307 bytes of data
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending contact info to HNP
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: base/routed_base_receive.c
</span><br>
<span class="quotelev1">&gt; 153
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],4] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],6] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],10] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],8] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],5] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],3] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],12] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],14] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: executing collective
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],1] type 2 num_collected 1 num_participating 1
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon
</span><br>
<span class="quotelev1">&gt; col[saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; lective not the HNP - sending to parent [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],1] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collective completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],1] type 2 num_collected 1 num_participating 2
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],9] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],13] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],7] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],11] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],15] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: executing collective
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],2] type 2 num_collected 1 num_participating 1
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective not the HNP -
</span><br>
<span class="quotelev1">&gt; sending to parent [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collective completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],2] for tag 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],2] type 2 num_collected 2 num_participating 2
</span><br>
<span class="quotelev1">&gt; num_contributors 16
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective HNP -
</span><br>
<span class="quotelev1">&gt; xcasting to job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 15
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 2
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 15
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 15
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42[xserve02.local:42180] [[24811,0],2] odls: sending
</span><br>
<span class="quotelev1">&gt; message to tag 15 on child [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; 519] [[24811,0],1] odls: sending message to tag 15 on child [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 15 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],5] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],13] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],7] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],9] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],12] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],10] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],11] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],15] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],4] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],6] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],8] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],14] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],1] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],3] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: executing collective
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],2]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],2] type 1 num_collected 1 num_participating 1
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: daemon collective not the HNP -
</span><br>
<span class="quotelev1">&gt; sending to parent [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: collective completed
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,1],2] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collecting data from child
</span><br>
<span class="quotelev1">&gt; [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: executing collective
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],2] for tag 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],2] type 1 num_collected 1 num_participating 2
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],1] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],1] type 1 num_collected 1 num_participating 1
</span><br>
<span class="quotelev1">&gt; num_contributors 8
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: daemon collective not the HNP
</span><br>
<span class="quotelev1">&gt; - sending to parent [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: collective completed
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor:
</span><br>
<span class="quotelev1">&gt; processing commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received collective data
</span><br>
<span class="quotelev1">&gt; cmd
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective called
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective for job
</span><br>
<span class="quotelev1">&gt; [24811,1] from [[24811,0],1] type 1 num_collected 2 num_participating 2
</span><br>
<span class="quotelev1">&gt; num_contributors 16
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] odls: daemon collective HNP -
</span><br>
<span class="quotelev1">&gt; xcasting to job [24811,1]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev1">&gt; commands completed
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 17
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 1
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] [[24811,0],0] orte:daemon:send_relay sending relay
</span><br>
<span class="quotelev1">&gt; msg to 2
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: received message
</span><br>
<span class="quotelev1">&gt; from [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 17
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],0]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],4]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],6]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: received message from
</span><br>
<span class="quotelev1">&gt; [[24811,0],0]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] defining message event: orted/orted_comm.c 159
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev1">&gt; [[24811,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted_cmd: received
</span><br>
<span class="quotelev1">&gt; message_local_procs
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orted:comm:message_local_procs
</span><br>
<span class="quotelev1">&gt; delivering message to job [24811,1] tag 17
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],1]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],3]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],5]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],7]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],9]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],8]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],10]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],12]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],14]
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster:42519] [[24811,0],1] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],11]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],13]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] odls: sending message to tag 17 on
</span><br>
<span class="quotelev1">&gt; child [[24811,1],15]
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [xserve02.local:42180] [[24811,0],2] orte:daemon:send_relay - recipient
</span><br>
<span class="quotelev1">&gt; list is empty!
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: iof_hnp_receive.c 227
</span><br>
<span class="quotelev1">&gt; [xserve02.local][[24811,1],1][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
</span><br>
<span class="quotelev1">&gt; received unexpected process identifier [[24811,1],2]
</span><br>
<span class="quotelev1">&gt; [saturna.cluster:17660] defining message event: iof_hnp_receive.c 227
</span><br>
<span class="quotelev1">&gt; [xserve01.cluster][[24811,1],2][btl_tcp_endpoint.c:486:mca_btl_tcp_endpoint_recv_connect_ack]
</span><br>
<span class="quotelev1">&gt; received unexpected process identifier [[24811,1],5]
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Previous message:</strong> <a href="10303.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10302.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
