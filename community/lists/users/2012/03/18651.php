<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 14:59:42 2012" -->
<!-- isoreceived="20120301195942" -->
<!-- sent="Thu, 1 Mar 2012 14:59:51 -0500" -->
<!-- isosent="20120301195951" -->
<!-- name="Yiguang Yan" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="4F4F8EE7.18572.1C853B9E_at_localhost" -->
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
<strong>Date:</strong> 2012-03-01 14:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks, here is what I did as suggested by Jeff:
<br>
<p><span class="quotelev1">&gt; What did this command line look like? Can you provide the configure line as well? 
</span><br>
<p>As in my previous post, the script as following:
<br>
<p>(1) debug messages:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
yiguang_at_gulftown testdmp]$ ./test.bash
<br>
[gulftown:28340] mca: base: components_open: Looking for plm components
<br>
[gulftown:28340] mca: base: components_open: opening plm components
<br>
[gulftown:28340] mca: base: components_open: found loaded component rsh
<br>
[gulftown:28340] mca: base: components_open: component rsh has no register function
<br>
[gulftown:28340] mca: base: components_open: component rsh open function successful
<br>
[gulftown:28340] mca: base: components_open: found loaded component slurm
<br>
[gulftown:28340] mca: base: components_open: component slurm has no register function
<br>
[gulftown:28340] mca: base: components_open: component slurm open function successful
<br>
[gulftown:28340] mca: base: components_open: found loaded component tm
<br>
[gulftown:28340] mca: base: components_open: component tm has no register function
<br>
[gulftown:28340] mca: base: components_open: component tm open function successful
<br>
[gulftown:28340] mca:base:select: Auto-selecting plm components
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component [rsh]
<br>
[gulftown:28340] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component [slurm]
<br>
[gulftown:28340] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[gulftown:28340] mca:base:select:(  plm) Querying component [tm]
<br>
[gulftown:28340] mca:base:select:(  plm) Skipping component [tm]. Query failed to return a module
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
[gulftown:28340] plm:base:set_hnp_name: initial bias 28340 nodename hash 3546479048
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
[gulftown:28340] [[17438,0],0] plm:rsh: assuming same remote shell as local shell
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/rsh &lt;template&gt;  orted --daemonize -mca ess env -mca orte_ess_jobid 1142816768 -mca 
<br>
orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
<br>
-mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
<br>
orte_tmpdir_base /tmp --mca plm_base_verbose 100
<br>
[gulftown:28340] [[17438,0],0] plm:rsh:launch daemon already exists on node gulftown
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode001
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],1]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode001  orted --daemonize -mca 
<br>
ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
<br>
-mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
<br>
orte_tmpdir_base /tmp --mca plm_base_verbose 100]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode002
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],2]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode002  orted --daemonize -mca 
<br>
ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
<br>
-mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
<br>
orte_tmpdir_base /tmp --mca plm_base_verbose 100]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode003
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode003  orted --daemonize -mca 
<br>
ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 --hnp-uri 
<br>
&quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
<br>
-mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
<br>
orte_tmpdir_base /tmp --mca plm_base_verbose 100]
<br>
[gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],3]
<br>
bash: orted: command not found
<br>
[gulftown:28340] [[17438,0],0] plm:base:daemon_callback
<br>
&lt;&lt;&lt;
<br>
<p>(2) test.bash script:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
#!/bin/sh -f
<br>
#nohup
<br>
#
<br>
# &gt;-------------------------------------------------------------------------------------------&lt;
<br>
adinahome=/usr/adina/system8.8dmp
<br>
mpirunfile=$adinahome/bin/mpirun
<br>
#
<br>
# Set envars for mpirun and orted
<br>
#
<br>
export PATH=$adinahome/bin:$adinahome/tools:$PATH
<br>
export LD_LIBRARY_PATH=$adinahome/lib:$LD_LIBRARY_PATH
<br>
#
<br>
#
<br>
# run DMP problem
<br>
#
<br>
mcaprefix=&quot;--prefix $adinahome&quot;
<br>
mcarshagent=&quot;--mca plm_rsh_agent rsh:ssh&quot;
<br>
mcatmpdir=&quot;--mca orte_tmpdir_base /tmp&quot;
<br>
mcaopenibmsg=&quot;--mca btl_openib_warn_default_gid_prefix 0&quot;
<br>
mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
<br>
mcabtlconn=&quot;--mca btl openib,sm,self&quot;
<br>
mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
<br>
<p>mcaparams=&quot;$mcaprefix $mcaenvars $mcarshagent $mcaopenibmsg $mcabtlconn $mcatmpdir $mcaplmbase&quot;
<br>
<p>$mpirunfile $mcaparams --app addmpw-hostname
<br>
&lt;&lt;&lt;
<br>
<p>(3) the contend of app file addmpw-hostname:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
-n 1 -host gulftown hostname
<br>
-n 1 -host ibnode001 hostname
<br>
-n 1 -host ibnode002 hostname
<br>
-n 1 -host ibnode003 thostname
<br>
&lt;&lt;&lt;
<br>
<p>Any comments?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18650.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18652.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
