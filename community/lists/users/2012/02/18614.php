<?
$subject_val = "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 14:33:26 2012" -->
<!-- isoreceived="20120229193326" -->
<!-- sent="Wed, 29 Feb 2012 14:33:21 -0500" -->
<!-- isosent="20120229193321" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes" -->
<!-- id="E7DF96D4-BCAD-445C-BB4A-D640743EC47E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4DF33D.8641.163D2C42_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 14:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18615.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18613.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18598.php">Yiguang Yan: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah.  I didn't realize that my 1.4.x build was a *developer* build.  *Developer* builds give a *lot* more detail with plm_base_verbose=100 (including the specific rsh command being used).  You obviously didn't get that output because you don't have a developer build.  :-\
<br>
<p>Just for reference, here's what plm_base_verbose=100 tells me for running an orted on a remote node, when I use the --prefix option to mpirun (I'm a tcsh user, so the syntax below will be a little different than what is running in your environment):
<br>
<p>-----
<br>
[svbu-mpi:28527] [[20181,0],0] plm:rsh: executing: (//usr/bin/ssh) [/usr/bin/ssh svbu-mpi001  set path = ( /home/jsquyres/bogus/bin $path ) ; if ( $?LD_LIBRARY_PATH == 1 ) set OMPI_have_llp ; if ( $?LD_LIBRARY_PATH == 0 ) setenv LD_LIBRARY_PATH /home/jsquyres/bogus/lib ; if ( $?OMPI_have_llp == 1 ) setenv LD_LIBRARY_PATH /home/jsquyres/bogus/lib:$LD_LIBRARY_PATH ;  /home/jsquyres/bogus/bin/orted --daemonize -mca ess env -mca orte_ess_jobid 1322582016 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;1322582016.0;tcp://172.29.218.140:34815;tcp://10.148.255.1:34815&quot; --mca plm_base_verbose 100]
<br>
-----
<br>
<p>Ok, a few options here:
<br>
<p>1. You can get a developer build if you use the --enable-debug option to configure.  Then plm_base_verbose=100 will give a lot more info.  Remember, the goal here is to see what's going wrong -- not to depend on having a developer build around.
<br>
<p>2. If that isn't workable, make an &quot;orted&quot; in your default path somewhere that's a short script:
<br>
<p>-----
<br>
:
<br>
echo ===========environment===========
<br>
env | sort
<br>
echo ===========environment end===========
<br>
sleep 10000000
<br>
-----
<br>
<p>Then when you &quot;mpirun&quot;, do a &quot;ps&quot; to see exactly what was executed on the node where mpirun was invoked and the node where orted is supposed to be running.  It's not quite as descriptive as seeing the plm_base_verbose output because we run multiple shell commands, but it's something.  You'll also see the stdout from the local node.  You'll need to use the --leave-session-attached option to mpirun to see the output from the remote nodes.
<br>
<p><p>On Feb 29, 2012, at 9:43 AM, Yiguang Yan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried as what you suggested. Here are the output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; yiguang_at_gulftown testdmp]$ ./test.bash
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: Looking for plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: opening plm 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component rsh 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component slurm 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component tm
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component tm 
</span><br>
<span class="quotelev1">&gt; has no register function
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: components_open: component tm 
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Query of component [rsh] 
</span><br>
<span class="quotelev1">&gt; set priority to 10
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev1">&gt; [slurm]
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Skipping component 
</span><br>
<span class="quotelev1">&gt; [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Skipping component [tm]. 
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: close: component tm closed
</span><br>
<span class="quotelev1">&gt; [gulftown:25052] mca: base: close: unloading component tm
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is the content of test.bash:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; yiguang_at_gulftown testdmp]$ ./test.bash
</span><br>
<span class="quotelev1">&gt; #!/bin/sh -f
</span><br>
<span class="quotelev1">&gt; #nohup
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # &gt;-----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------&lt;
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
<span class="quotelev1">&gt; mcaparams=&quot;$mcaprefix $mcaenvars $mcarshagent 
</span><br>
<span class="quotelev1">&gt; $mcaopenibmsg $mcabtlconn $mcatmpdir $mcaplmbase&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $mpirunfile $mcaparams --app addmpw-hostname
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While the content of addmpw-hostname is:
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
<span class="quotelev1">&gt; After this, I also tried to specify the orted through:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca orte_launch_agent $adinahome/bin/orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then, orted could be found on slave nodes, but now the shared libs 
</span><br>
<span class="quotelev1">&gt; in $adinahome/lib are not on the LD_LIBRARY_PATH.
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
<li><strong>Next message:</strong> <a href="18615.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18613.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18598.php">Yiguang Yan: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
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
