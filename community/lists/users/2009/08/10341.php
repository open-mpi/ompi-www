<?
$subject_val = "Re: [OMPI users] orte_launch_agent usage?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 22:01:44 2009" -->
<!-- isoreceived="20090813020144" -->
<!-- sent="Wed, 12 Aug 2009 20:01:31 -0600" -->
<!-- isosent="20090813020131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_launch_agent usage?" -->
<!-- id="7ADC2737-8A03-4419-B311-D77326AD7078_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0908121725180.3593_at_qe2.sdsc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_launch_agent usage?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 22:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10340.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>In reply to:</strong> <a href="10340.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay - let me debug this. It is likely broken, but I can get the fix  
<br>
into 1.3.4 (probably coming out fairly soon)
<br>
<p>Will update shortly.
<br>
<p>On Aug 12, 2009, at 6:26 PM, Kenneth Yoshimoto wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is 1.3.3.  I would like to specify the path to orted on
</span><br>
<span class="quotelev1">&gt; different sets of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kenneth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 12 Aug 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 12 Aug 2009 17:03:17 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Kenneth Yoshimoto &lt;kenneth_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] orte_launch_agent usage?
</span><br>
<span class="quotelev2">&gt;&gt; This is using 1.3.3, devel trunk, ...??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I doubt anyone has really tested it in a long time as everyone just  
</span><br>
<span class="quotelev2">&gt;&gt; uses the default orted - are you just trying to see if it works, or  
</span><br>
<span class="quotelev2">&gt;&gt; are you trying your own orted out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 12, 2009, at 4:04 PM, Kenneth Yoshimoto wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use -mca orte_launch_agent /home/kenneth/info/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install/ bin/orted,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bash: -c: line 0: `( test ! -r ./.profile || . ./.profile;  PATH=/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/kenneth/info/openmpi/install/bin:$PATH ; export PATH ;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/home/kenneth/info/openmpi/install/lib: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /home/kenneth/info/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/install/bin/orted /home/kenneth/info/openmpi/install/bin/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (null) --daemonize -mca ess env -mca orte_ess_jobid 4215865344 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;4215865344.0;tcp://192.168.120.34:41950;tcp:// 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 198.202.112.34:41950&quot; -mca mpi_show_mca_params all -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_launch_agent /home/kenneth/ info/openmpi/install/bin/orted )'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For some reason, there is an argument after orted, with (null) in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does use of orte_launch_agent require another mca param to be set?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kenneth
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10340.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>In reply to:</strong> <a href="10340.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
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
