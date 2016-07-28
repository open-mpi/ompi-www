<?
$subject_val = "[OMPI users] orte_launch_agent usage?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 18:04:33 2009" -->
<!-- isoreceived="20090812220433" -->
<!-- sent="Wed, 12 Aug 2009 15:04:25 -0700 (PDT)" -->
<!-- isosent="20090812220425" -->
<!-- name="Kenneth Yoshimoto" -->
<!-- email="kenneth_at_[hidden]" -->
<!-- subject="[OMPI users] orte_launch_agent usage?" -->
<!-- id="Pine.LNX.4.60.0908121501260.3593_at_qe2.sdsc.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] orte_launch_agent usage?<br>
<strong>From:</strong> Kenneth Yoshimoto (<em>kenneth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 18:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10337.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I use -mca orte_launch_agent /home/kenneth/info/openmpi/install/bin/orted,
<br>
I get an error:
<br>
...
<br>
bash: -c: line 0: `( test ! -r ./.profile || . ./.profile;  PATH=/home/kenneth/info/openmpi/install/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/home/kenneth/info/openmpi/install/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; /home/kenneth/info/openmpi/install/bin/orted /home/kenneth/info/openmpi/install/bin/(null) --daemonize -mca ess env -mca orte_ess_jobid 4215865344 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;4215865344.0;tcp://192.168.120.34:41950;tcp://198.202.112.34:41950&quot; -mca mpi_show_mca_params all -mca orte_launch_agent /home/kenneth/info/openmpi/install/bin/orted )'
<br>
...
<br>
<p>For some reason, there is an argument after orted, with (null) in it.
<br>
Does use of orte_launch_agent require another mca param to be set?
<br>
<p>Thanks,
<br>
Kenneth
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Previous message:</strong> <a href="10337.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10339.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
<li><strong>Reply:</strong> <a href="10422.php">Ralph Castain: "Re: [OMPI users] orte_launch_agent usage?"</a>
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
