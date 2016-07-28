<?
$subject_val = "Re: [OMPI users] Connection to lifeline lost";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 14:31:13 2014" -->
<!-- isoreceived="20140124193113" -->
<!-- sent="Fri, 24 Jan 2014 17:31:09 -0200" -->
<!-- isosent="20140124193109" -->
<!-- name="etcamargo" -->
<!-- email="etcamargo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection to lifeline lost" -->
<!-- id="ff99ec11063745d573b4d23758dec266_at_inf.ufpr.br" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E9DCF70E-7129-4C22-8524-C26A3FF80711_at_open-mpi.org" -->
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
<strong>From:</strong> etcamargo (<em>etcamargo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 14:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right. The problem was solved put the entire path of one mpi 
<br>
version:
<br>
<p>/home/myuser/openmpi-x/bin/mpirun -hostfile machines -np 2 ./hello
<br>
<p>Thanks,
<br>
<p>Edson
<br>
<p><p><p>Em 24-01-2014 16:00, Ralph Castain escreveu:
<br>
<span class="quotelev1">&gt; Looks to me like you are picking up a different OMPI installation on
</span><br>
<span class="quotelev1">&gt; the remote node - check that your path and ld_library_path on the
</span><br>
<span class="quotelev1">&gt; remote host are being set correctly
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2014, at 9:41 AM, etcamargo &lt;etcamargo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, All!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please, I have a problem to run a simple &quot;hello world&quot; program on 
</span><br>
<span class="quotelev2">&gt;&gt; different hosts. The hosts are virtual machines located in the same 
</span><br>
<span class="quotelev2">&gt;&gt; net. The program works fine only on one host, the ssh is ok between 
</span><br>
<span class="quotelev2">&gt;&gt; the machines and nfs is ok, sharing the  executable files between the 
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) $ mpirun -hostfile machines -v -np 2 ./hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [achel:15275] [[32727,0],0] ORTE_ERROR_LOG: Out of resource in file 
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c at line 482
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:16467] OPAL dss:unpack: got type 49 when expecting type 38
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:16467] [[32727,0],1] ORTE_ERROR_LOG: Pack data mismatch in 
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../orte/orted/orted_comm.c at line 235
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:16467] [[32727,0],1] routed:binomial: Connection to lifeline 
</span><br>
<span class="quotelev2">&gt;&gt; [[32727,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) $ mpirun -mca plm_base_verbose 5 -hostfile machines -v -np 2 
</span><br>
<span class="quotelev2">&gt;&gt; ./hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh 
</span><br>
<span class="quotelev2">&gt;&gt; path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] mca:base:select:(  plm) Query of component [rsh] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] mca:base:select:(  plm) Skipping component [slurm]. 
</span><br>
<span class="quotelev2">&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] plm:base:set_hnp_name: initial bias 17020 nodename hash 
</span><br>
<span class="quotelev2">&gt;&gt; 2714559920
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] plm:base:set_hnp_name: final jobfam 1536
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] released to spawn
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm add new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[1536,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[1536,0],1] to node latrappe.c3local
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: assuming same remote shell as 
</span><br>
<span class="quotelev2">&gt;&gt; local shell
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt;&gt; 	/usr/bin/ssh &lt;template&gt;  orted -mca ess env -mca orte_ess_jobid 
</span><br>
<span class="quotelev2">&gt;&gt; 100663296 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca 
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 5 -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: launching on node latrappe.c3local
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[1536,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:rsh: executing: (//usr/bin/ssh) 
</span><br>
<span class="quotelev2">&gt;&gt; [/usr/bin/ssh latrappe.c3local  orted -mca ess env -mca orte_ess_jobid 
</span><br>
<span class="quotelev2">&gt;&gt; 100663296 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_hnp_uri &quot;100663296.0;tcp://10.254.222.5:37564&quot; -mca 
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_verbose 5 -mca plm rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] mca:base:select:(  plm) Query of component [rsh] set 
</span><br>
<span class="quotelev2">&gt;&gt; priority to 10
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_report_launch from daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[1536,0],1] via [[1536,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] ORTE_ERROR_LOG: Out of resource in file 
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c at line 482
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_report_launch failed for 
</span><br>
<span class="quotelev2">&gt;&gt; daemon [[1536,0],1] (via [[1536,0],1]) at contact 
</span><br>
<span class="quotelev2">&gt;&gt; 100663296.1;tcp://10.254.222.7:33825
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd sending orted_exit 
</span><br>
<span class="quotelev2">&gt;&gt; commands
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit abnormal term 
</span><br>
<span class="quotelev2">&gt;&gt; ordered
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd:orted_exit sending cmd 
</span><br>
<span class="quotelev2">&gt;&gt; to [[1536,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd message to [[1536,0],1] 
</span><br>
<span class="quotelev2">&gt;&gt; sent
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:orted_cmd all messages sent
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:tm: daemon launch failed on error 
</span><br>
<span class="quotelev2">&gt;&gt; (null)
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] OPAL dss:unpack: got type 49 when expecting type 38
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] [[1536,0],1] ORTE_ERROR_LOG: Pack data mismatch in 
</span><br>
<span class="quotelev2">&gt;&gt; file ../../../orte/orted/orted_comm.c at line 235
</span><br>
<span class="quotelev2">&gt;&gt; [achel:17020] [[1536,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev2">&gt;&gt; [latrappe:18212] [[1536,0],1] routed:binomial: Connection to lifeline 
</span><br>
<span class="quotelev2">&gt;&gt; [[1536,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Edson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
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
