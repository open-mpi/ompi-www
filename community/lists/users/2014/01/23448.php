<?
$subject_val = "Re: [OMPI users] Connection to lifeline lost";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 13:01:10 2014" -->
<!-- isoreceived="20140124180110" -->
<!-- sent="Fri, 24 Jan 2014 10:00:17 -0800" -->
<!-- isosent="20140124180017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection to lifeline lost" -->
<!-- id="E9DCF70E-7129-4C22-8524-C26A3FF80711_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b45bcdefc1f86ad84b989920b01b8e4a_at_inf.ufpr.br" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection to lifeline lost<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 13:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>Previous message:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23446.php">etcamargo: "[OMPI users] Connection to lifeline lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Reply:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like you are picking up a different OMPI installation on the remote node - check that your path and ld_library_path on the remote host are being set correctly
<br>
On Jan 24, 2014, at 9:41 AM, etcamargo &lt;etcamargo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, All!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, I have a problem to run a simple &quot;hello world&quot; program on different hosts. The hosts are virtual machines located in the same net. The program works fine only on one host, the ssh is ok between the machines and nfs is ok, sharing the  executable files between the machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) $ mpirun -hostfile machines -v -np 2 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [achel:15275] [[32727,0],0] ORTE_ERROR_LOG: Out of resource in file base/plm_base_launch_support.c at line 482
</span><br>
<span class="quotelev1">&gt; [latrappe:16467] OPAL dss:unpack: got type 49 when expecting type 38
</span><br>
<span class="quotelev1">&gt; [latrappe:16467] [[32727,0],1] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/orted/orted_comm.c at line 235
</span><br>
<span class="quotelev1">&gt; [latrappe:16467] [[32727,0],1] routed:binomial: Connection to lifeline [[32727,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) $ mpirun -mca plm_base_verbose 5 -hostfile machines -v -np 2 ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [achel:17020] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [achel:17020] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [achel:17020] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [achel:17020] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [achel:17020] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [achel:17020] plm:base:set_hnp_name: initial bias 17020 nodename hash 2714559920
</span><br>
<span class="quotelev1">&gt; [achel:17020] plm:base:set_hnp_name: final jobfam 1536
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [achel:17020] released to spawn
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm add new daemon [[1536,0],1]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm assigning new daemon [[1536,0],1] to node latrappe.c3local
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; 	/usr/bin/ssh &lt;template&gt;  orted -mca ess env -mca orte_ess_jobid 100663296 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca plm_base_verbose 5 -mca plm rsh
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: launching on node latrappe.c3local
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: recording launch of daemon [[1536,0],1]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:rsh: executing: (//usr/bin/ssh) [/usr/bin/ssh latrappe.c3local  orted -mca ess env -mca orte_ess_jobid 100663296 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca plm_base_verbose 5 -mca plm rsh]
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_report_launch from daemon [[1536,0],1] via [[1536,0],1]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] ORTE_ERROR_LOG: Out of resource in file base/plm_base_launch_support.c at line 482
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_report_launch failed for daemon [[1536,0],1] (via [[1536,0],1]) at contact 100663296.1;tcp://10.254.222.7:33825
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit abnormal term ordered
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit sending cmd to [[1536,0],1]
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd message to [[1536,0],1] sent
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd all messages sent
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:tm: daemon launch failed on error (null)
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] OPAL dss:unpack: got type 49 when expecting type 38
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] [[1536,0],1] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/orted/orted_comm.c at line 235
</span><br>
<span class="quotelev1">&gt; [achel:17020] [[1536,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt; [latrappe:18212] [[1536,0],1] routed:binomial: Connection to lifeline [[1536,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edson
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
<li><strong>Next message:</strong> <a href="23449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>Previous message:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23446.php">etcamargo: "[OMPI users] Connection to lifeline lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>Reply:</strong> <a href="23452.php">etcamargo: "Re: [OMPI users] Connection to lifeline lost"</a>
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
