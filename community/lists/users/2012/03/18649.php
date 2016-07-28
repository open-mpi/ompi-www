<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:46:38 2012" -->
<!-- isoreceived="20120301194638" -->
<!-- sent="Thu, 1 Mar 2012 14:46:46 -0500" -->
<!-- isosent="20120301194646" -->
<!-- name="Yiguang Yan" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="4F4F8BD6.19105.1C793EBA_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
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
<strong>From:</strong> Yiguang Yan (<em>yanyg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 14:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18648.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Here I made a developer build, and then got the following message 
<br>
with plm_base_verbose:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;
</span><br>
[gulftown:28340] mca: base: components_open: Looking for plm 
<br>
components
<br>
[gulftown:28340] mca: base: components_open: opening plm 
<br>
components
<br>
[gulftown:28340] mca: base: components_open: found loaded 
<br>
component rsh
<br>
[gulftown:28340] mca: base: components_open: component rsh 
<br>
has no register function
<br>
[gulftown:28340] mca: base: components_open: component rsh 
<br>
open function successful
<br>
[gulftown:28340] mca: base: components_open: found loaded 
<br>
component slurm
<br>
[gulftown:28340] mca: base: components_open: component slurm 
<br>
has no register function
<br>
[gulftown:28340] mca: base: components_open: component slurm 
<br>
open function successful
<br>
[gulftown:28340] mca: base: components_open: found loaded 
<br>
component tm
<br>
[gulftown:28340] mca: base: components_open: component tm 
<br>
has no register function
<br>
[gulftown:28340] mca: base: components_open: component tm 
<br>
open function successful
<br>
[gulftown:28340] mca:base:select: Auto-selecting plm components
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component [rsh]
<br>
[gulftown:28340] mca:base:select:(  plm) Query of component [rsh] 
<br>
set priority to 10
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component 
<br>
[slurm]
<br>
[gulftown:28340] mca:base:select:(  plm) Skipping component 
<br>
[slurm]. Query failed to return a module
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component [tm]
<br>
[gulftown:28340] mca:base:select:(  plm) Skipping component [tm]. 
<br>
Query failed to return a module
<br>
[gulftown:28340] mca:base:select:(  plm) Selected component [rsh]
<br>
[gulftown:28340] mca: base: close: component slurm closed
<br>
[gulftown:28340] mca: base: close: unloading component slurm
<br>
[gulftown:28340] mca: base: close: component tm closed
<br>
[gulftown:28340] mca: base: close: unloading component tm
<br>
[gulftown:28340] plm:base:set_hnp_name: initial bias 28340 
<br>
nodename hash 3546479048
<br>
[gulftown:28340] plm:base:set_hnp_name: final jobfam 17438
<br>
[gulftown:28340] [[17438,0],0] plm:base:receive start comm
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: setting up job [17438,1]
<br>
[gulftown:28340] [[17438,0],0] plm:base:setup_job for job [17438,1]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: local shell: 0 (bash)
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: assuming same remote 
<br>
shell as local shell
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/rsh &lt;template&gt;  orted --daemonize -mca ess env -
<br>
mca orte_ess_jobid 1142816768 -mca orte_ess_vpid &lt;template&gt; -
<br>
mca orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
<br>
cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
<br>
plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
<br>
0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
<br>
plm_base_verbose 100
<br>
[gulftown:28340] [[17438,0],0] plm:rsh:launch daemon already 
<br>
exists on node gulftown
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
<br>
ibnode001
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
<br>
[[17438,0],1]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
<br>
[/usr/bin/rsh ibnode001  orted --daemonize -mca ess env -mca 
<br>
orte_ess_jobid 1142816768 -mca orte_ess_vpid 1 -mca 
<br>
orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
<br>
cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
<br>
plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
<br>
0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
<br>
plm_base_verbose 100]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
<br>
ibnode002
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
<br>
[[17438,0],2]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
<br>
[/usr/bin/rsh ibnode002  orted --daemonize -mca ess env -mca 
<br>
orte_ess_jobid 1142816768 -mca orte_ess_vpid 2 -mca 
<br>
orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
<br>
cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
<br>
plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
<br>
0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
<br>
plm_base_verbose 100]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node 
<br>
ibnode003
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) 
<br>
[/usr/bin/rsh ibnode003  orted --daemonize -mca ess env -mca 
<br>
orte_ess_jobid 1142816768 -mca orte_ess_vpid 3 -mca 
<br>
orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;t
<br>
cp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; --mca 
<br>
plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 
<br>
0 --mca btl openib,sm,self --mca orte_tmpdir_base /tmp --mca 
<br>
plm_base_verbose 100]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon 
<br>
[[17438,0],3]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:base:daemon_callback
<br>
&lt;&lt;&lt;
<br>
<p><p>It seems no shell environment is passed through rsh, don't know 
<br>
why though.
<br>
<p>Any thoughts?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18648.php">Ralph Castain: "Re: [OMPI users] Redefine proc in cartesian topologies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18662.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe reply:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
