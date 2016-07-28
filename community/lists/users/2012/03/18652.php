<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 16:51:57 2012" -->
<!-- isoreceived="20120301215157" -->
<!-- sent="Thu, 1 Mar 2012 16:51:53 -0500" -->
<!-- isosent="20120301215153" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="661D0912-135A-4109-BE27-B06AD6A3E2E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4F8EE7.18572.1C853B9E_at_localhost" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 16:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem.
<br>
<p>It looks like the use of the app context file is triggering different behavior, and that behavior is erasing the use of --prefix.  If I replace the app context file with a complete command line, it works and the --prefix behavior is observed.
<br>
<p>Specifically:
<br>
<p>$mpirunfile $mcaparams --app addmpw-hostname
<br>
<p>^^ This one seems to ignore --prefix behavior.
<br>
<p>$mpirunfile $mcaparams --host svbu-mpi,svbu-mpi001 -np 2 hostname
<br>
$mpirunfile $mcaparams --host svbu-mpi -np 1 hostname : --host svbu-mpi001 -np 1 hostname
<br>
<p>^^ These two seem to adhere to the proper --prefix behavior.
<br>
<p>Ralph -- can you have a look?
<br>
<p><p><p><p>On Mar 1, 2012, at 2:59 PM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, here is what I did as suggested by Jeff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What did this command line look like? Can you provide the configure line as well? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As in my previous post, the script as following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) debug messages:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; yiguang_at_gulftown testdmp]$ ./test.bash
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: found loaded component tm
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component tm has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca: base: components_open: component tm open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component [tm]. Query failed to return a module
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
<span class="quotelev1">&gt; [gulftown:28340] plm:base:set_hnp_name: initial bias 28340 nodename hash 3546479048
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
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt;        /usr/bin/rsh &lt;template&gt;  orted --daemonize -mca ess env -mca orte_ess_jobid 1142816768 -mca 
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev1">&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh:launch daemon already exists on node gulftown
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode001
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],1]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode001  orted --daemonize -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev1">&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode002
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],2]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode002  orted --daemonize -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev1">&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode003
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode003  orted --daemonize -mca 
</span><br>
<span class="quotelev1">&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev1">&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],3]
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; [gulftown:28340] [[17438,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) test.bash script:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh -f
</span><br>
<span class="quotelev1">&gt; #nohup
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # &gt;-------------------------------------------------------------------------------------------&lt;
</span><br>
<span class="quotelev1">&gt; adinahome=/usr/adina/system8.8dmp
</span><br>
<span class="quotelev1">&gt; mpirunfile=$adinahome/bin/mpirun
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Set envars for mpirun and orted
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; export PATH=$adinahome/bin:$adinahome/tools:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$adinahome/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # run DMP problem
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; mcaprefix=&quot;--prefix $adinahome&quot;
</span><br>
<span class="quotelev1">&gt; mcarshagent=&quot;--mca plm_rsh_agent rsh:ssh&quot;
</span><br>
<span class="quotelev1">&gt; mcatmpdir=&quot;--mca orte_tmpdir_base /tmp&quot;
</span><br>
<span class="quotelev1">&gt; mcaopenibmsg=&quot;--mca btl_openib_warn_default_gid_prefix 0&quot;
</span><br>
<span class="quotelev1">&gt; mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; mcabtlconn=&quot;--mca btl openib,sm,self&quot;
</span><br>
<span class="quotelev1">&gt; mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mcaparams=&quot;$mcaprefix $mcaenvars $mcarshagent $mcaopenibmsg $mcabtlconn $mcatmpdir $mcaplmbase&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirunfile $mcaparams --app addmpw-hostname
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) the contend of app file addmpw-hostname:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; -n 1 -host gulftown hostname
</span><br>
<span class="quotelev1">&gt; -n 1 -host ibnode001 hostname
</span><br>
<span class="quotelev1">&gt; -n 1 -host ibnode002 hostname
</span><br>
<span class="quotelev1">&gt; -n 1 -host ibnode003 thostname
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments?
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18651.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
