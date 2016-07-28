<?
$subject_val = "Re: [OMPI users] orte_launch_agent usage?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 17:23:37 2009" -->
<!-- isoreceived="20090818212337" -->
<!-- sent="Tue, 18 Aug 2009 15:23:23 -0600" -->
<!-- isosent="20090818212323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_launch_agent usage?" -->
<!-- id="2190FC7C-77A8-441D-975A-062DE186B124_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0908121501260.3593_at_qe2.sdsc.edu" -->
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
<strong>Date:</strong> 2009-08-18 17:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10421.php">Nulik Nol: "[OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10338.php">Kenneth Yoshimoto: "[OMPI users] orte_launch_agent usage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I found the problem on this and fixed it. If you can, you  
<br>
might try installing the nightly tarball and see if that solves the  
<br>
problem. Anything on or after r21827 will include the fix.
<br>
<p>Ralph
<br>
<p>On Aug 12, 2009, at 4:04 PM, Kenneth Yoshimoto wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I use -mca orte_launch_agent /home/kenneth/info/openmpi/install/ 
</span><br>
<span class="quotelev1">&gt; bin/orted,
</span><br>
<span class="quotelev1">&gt; I get an error:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; bash: -c: line 0: `( test ! -r ./.profile || . ./.profile;  PATH=/ 
</span><br>
<span class="quotelev1">&gt; home/kenneth/info/openmpi/install/bin:$PATH ; export PATH ;  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/kenneth/info/openmpi/install/lib: 
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /home/kenneth/info/ 
</span><br>
<span class="quotelev1">&gt; openmpi/install/bin/orted /home/kenneth/info/openmpi/install/bin/ 
</span><br>
<span class="quotelev1">&gt; (null) --daemonize -mca ess env -mca orte_ess_jobid 4215865344 -mca  
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri  
</span><br>
<span class="quotelev1">&gt; &quot;4215865344.0;tcp://192.168.120.34:41950;tcp://198.202.112.34:41950&quot;  
</span><br>
<span class="quotelev1">&gt; -mca mpi_show_mca_params all -mca orte_launch_agent /home/kenneth/ 
</span><br>
<span class="quotelev1">&gt; info/openmpi/install/bin/orted )'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some reason, there is an argument after orted, with (null) in it.
</span><br>
<span class="quotelev1">&gt; Does use of orte_launch_agent require another mca param to be set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kenneth
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
<li><strong>Next message:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10421.php">Nulik Nol: "[OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10338.php">Kenneth Yoshimoto: "[OMPI users] orte_launch_agent usage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10423.php">Kenneth Yoshimoto: "Re: [OMPI users] orte_launch_agent usage?"</a>
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
