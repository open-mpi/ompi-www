<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:51:09 2012" -->
<!-- isoreceived="20120301195109" -->
<!-- sent="Thu, 1 Mar 2012 12:51:01 -0700" -->
<!-- isosent="20120301195101" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="94665560-F755-4CA0-A5D5-4D25782BF1E1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4F8BD6.19105.1C793EBA_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 14:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What did this command line look like? Can you provide the configure line as well?
<br>
<p>On Mar 1, 2012, at 12:46 PM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here I made a developer build, and then got the following message 
</span><br>
<span class="quotelev1">&gt; with plm_base_verbose:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: Looking for plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component tm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component tm 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component tm 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Query of component [rsh] 
</span><br>
<span class="quotelev1">&gt; set priority to 10
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component 
</span><br>
<span class="quotelev1">&gt; [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component [tm]. 
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: close: component tm closed
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: close: unloading component tm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] plm:base:set_hnp_name: initial bias 28340 
</span><br>
<span class="quotelev1">&gt; nodename hash 3546479048
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] plm:base:set_hnp_name: final jobfam 17438
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: setting up job [17438,1]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:base:setup_job for job [17438,1]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: assuming same remote 
</span><br>
<span class="quotelev1">&gt; shell as local shell
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/bin/rsh &lt;template&gt;  orted --daemonize -mca ess env -
</span><br>
<span class="quotelev1">&gt; mca orte_ess_jobid 1142816768 -mca orte_ess_vpid &lt;template&gt; -
</span><br>
<span class="quotelev1">&gt; mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
</span><br>
<span class="quotelev1">&gt; cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
</span><br>
<span class="quotelev1">&gt; 0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh:launch daemon already 
</span><br>
<span class="quotelev1">&gt; exists on node gulftown
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
</span><br>
<span class="quotelev1">&gt; ibnode001
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[17438,0],1]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
</span><br>
<span class="quotelev1">&gt; [/usr/bin/rsh ibnode001  orted --daemonize -mca ess env -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 1142816768 -mca orte_ess_vpid 1 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
</span><br>
<span class="quotelev1">&gt; cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
</span><br>
<span class="quotelev1">&gt; 0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
</span><br>
<span class="quotelev1">&gt; ibnode002
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[17438,0],2]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
</span><br>
<span class="quotelev1">&gt; [/usr/bin/rsh ibnode002  orted --daemonize -mca ess env -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 1142816768 -mca orte_ess_vpid 2 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
</span><br>
<span class="quotelev1">&gt; cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
</span><br>
<span class="quotelev1">&gt; 0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
</span><br>
<span class="quotelev1">&gt; ibnode003
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
</span><br>
<span class="quotelev1">&gt; [/usr/bin/rsh ibnode003  orted --daemonize -mca ess env -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 1142816768 -mca orte_ess_vpid 3 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
</span><br>
<span class="quotelev1">&gt; cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
</span><br>
<span class="quotelev1">&gt; 0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev1">&gt; [[17438,0],3]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems no shell environment is passed through rsh, don't know 
</span><br>
<span class="quotelev1">&gt; why though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<li><strong>Next message:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
