<?
$subject_val = "Re: [OMPI users] orte_launch_agent usage?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 17:25:58 2009" -->
<!-- isoreceived="20090818212558" -->
<!-- sent="Tue, 18 Aug 2009 14:25:53 -0700 (PDT)" -->
<!-- isosent="20090818212553" -->
<!-- name="Kenneth Yoshimoto" -->
<!-- email="kenneth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_launch_agent usage?" -->
<!-- id="Pine.LNX.4.60.0908181425400.29556_at_qe2.sdsc.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2190FC7C-77A8-441D-975A-062DE186B124_at_open-mpi.org" -->
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
<strong>From:</strong> Kenneth Yoshimoto (<em>kenneth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 17:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>In reply to:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I'll let you know how it works out.
<br>
<p>Kenneth
<br>
<p>On Tue, 18 Aug 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Date: Tue, 18 Aug 2009 15:23:23 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Kenneth Yoshimoto &lt;kenneth_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte_launch_agent usage?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe I found the problem on this and fixed it. If you can, you might try 
</span><br>
<span class="quotelev1">&gt; installing the nightly tarball and see if that solves the problem. Anything 
</span><br>
<span class="quotelev1">&gt; on or after r21827 will include the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2009, at 4:04 PM, Kenneth Yoshimoto wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I use -mca orte_launch_agent /home/kenneth/info/openmpi/install/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/orted,
</span><br>
<span class="quotelev2">&gt;&gt; I get an error:
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; bash: -c: line 0: `( test ! -r ./.profile || . ./.profile;  PATH=/ 
</span><br>
<span class="quotelev2">&gt;&gt; home/kenneth/info/openmpi/install/bin:$PATH ; export PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/home/kenneth/info/openmpi/install/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH ; /home/kenneth/info/openmpi/install/bin/orted 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kenneth/info/openmpi/install/bin/(null) --daemonize -mca ess env 
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_ess_jobid 4215865344 -mca orte_ess_vpid 1 -mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;4215865344.0;tcp://192.168.120.34:41950;tcp://198.202.112.34:41950&quot; -mca 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_show_mca_params all -mca orte_launch_agent /home/kenneth/ 
</span><br>
<span class="quotelev2">&gt;&gt; info/openmpi/install/bin/orted )'
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For some reason, there is an argument after orted, with (null) in it.
</span><br>
<span class="quotelev2">&gt;&gt; Does use of orte_launch_agent require another mca param to be set?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Kenneth
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>In reply to:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
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
