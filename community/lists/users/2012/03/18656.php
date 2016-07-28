<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 18:02:31 2012" -->
<!-- isoreceived="20120301230231" -->
<!-- sent="Thu, 1 Mar 2012 16:02:22 -0700" -->
<!-- isosent="20120301230222" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="8B582971-460E-4004-9A07-8124D892058E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D7715A2C-8763-4AD1-83E7-842F8C36E27E_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-01 18:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know - I didn't write the app file code, and I've never seen anything defining its behavior. So I guess you could say it is intended - or not! :-/
<br>
<p><p>On Mar 1, 2012, at 2:53 PM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I should say that I discovered that if you put --prefix on each line of the app context file, then the first case (running the app context file) works fine; it adheres to the --prefix behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph: is this intended behavior?  (I don't know if I have an opinion either way)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2012, at 4:51 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the use of the app context file is triggering different behavior, and that behavior is erasing the use of --prefix.  If I replace the app context file with a complete command line, it works and the --prefix behavior is observed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specifically:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $mpirunfile $mcaparams --app addmpw-hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ^^ This one seems to ignore --prefix behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $mpirunfile $mcaparams --host svbu-mpi,svbu-mpi001 -np 2 hostname
</span><br>
<span class="quotelev2">&gt;&gt; $mpirunfile $mcaparams --host svbu-mpi -np 1 hostname : --host svbu-mpi001 -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ^^ These two seem to adhere to the proper --prefix behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -- can you have a look?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2012, at 2:59 PM, Yiguang Yan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, here is what I did as suggested by Jeff:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What did this command line look like? Can you provide the configure line as well? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As in my previous post, the script as following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) debug messages:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yiguang_at_gulftown testdmp]$ ./test.bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: found loaded component tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component tm has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: components_open: component tm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Skipping component [tm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: close: component tm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] mca: base: close: unloading component tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] plm:base:set_hnp_name: initial bias 28340 nodename hash 3546479048
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] plm:base:set_hnp_name: final jobfam 17438
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: setting up job [17438,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:base:setup_job for job [17438,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /usr/bin/rsh &lt;template&gt;  orted --daemonize -mca ess env -mca orte_ess_jobid 1142816768 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh:launch daemon already exists on node gulftown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode001  orted --daemonize -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode002  orted --daemonize -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: launching on node ibnode003
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: executing: (//usr/bin/rsh) [/usr/bin/rsh ibnode003  orted --daemonize -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess env -mca orte_ess_jobid 1142816768 -mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;1142816768.0;tcp://198.177.146.70:43159;tcp://10.10.10.4:43159;tcp://172.23.10.1:43159;tcp://172.33.10.1:43159&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca plm_rsh_agent rsh:ssh --mca btl_openib_warn_default_gid_prefix 0 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_tmpdir_base /tmp --mca plm_base_verbose 100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:rsh: recording launch of daemon [[17438,0],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: orted: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gulftown:28340] [[17438,0],0] plm:base:daemon_callback
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) test.bash script:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #nohup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # &gt;-------------------------------------------------------------------------------------------&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adinahome=/usr/adina/system8.8dmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirunfile=$adinahome/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Set envars for mpirun and orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$adinahome/bin:$adinahome/tools:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=$adinahome/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # run DMP problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcaprefix=&quot;--prefix $adinahome&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcarshagent=&quot;--mca plm_rsh_agent rsh:ssh&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcatmpdir=&quot;--mca orte_tmpdir_base /tmp&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcaopenibmsg=&quot;--mca btl_openib_warn_default_gid_prefix 0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcabtlconn=&quot;--mca btl openib,sm,self&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcaparams=&quot;$mcaprefix $mcaenvars $mcarshagent $mcaopenibmsg $mcabtlconn $mcatmpdir $mcaplmbase&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirunfile $mcaparams --app addmpw-hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (3) the contend of app file addmpw-hostname:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n 1 -host gulftown hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n 1 -host ibnode001 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n 1 -host ibnode002 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -n 1 -host ibnode003 thostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any comments?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yiguang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>Previous message:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18653.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18655.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
