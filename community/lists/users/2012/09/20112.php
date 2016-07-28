<?
$subject_val = "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 18:07:50 2012" -->
<!-- isoreceived="20120903220750" -->
<!-- sent="Mon, 3 Sep 2012 15:07:43 -0700" -->
<!-- isosent="20120903220743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="F2FBC17E-2D88-44DB-BABB-E6310DBB8F6C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B2641285-4401-4626-85CA-40244FBA666C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 18:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20113.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2012, at 2:40 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 03.09.2012 um 23:34 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2012, at 2:12 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just compiled Open MPI 1.6.1 and before digging any deeper: does anyone else notice, that the command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -n 4 -machinefile mymachines ./mpihello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will ignore the argument &quot;-machinefile mymachines&quot; and use the file &quot;openmpi-default-hostfile&quot; instead all the time?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try setting &quot;-mca orte_default_hostfile mymachines&quot; instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known bug and will be fixed or is this the new syntax?
</span><br>
<p>I'm leaning towards fixing it - it came due to discussions on how to handle hostfile when there is an allocation. For now, though, that should work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I usually don't install new versions instantly, so I only noticed right now, that in 1.4.5 I get a wrong allocation inside SGE (always one process less than requested with `qsub -pe orted N ...`. This I tried only, as with 1.6.1 I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Weird - I'm not sure I understand what you are saying. Is this happening with 1.6.1 as well? Or just with 1.4.5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6.1 = no nodes allocated
</span><br>
<span class="quotelev1">&gt; 1.4.5 = one process less than requested
</span><br>
<span class="quotelev1">&gt; 1.4.1 = works as it should
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Well that seems strange! Can you run 1.6.1 with the following on the mpirun cmd line:
<br>
<p>-mca ras_gridengine_debug 1 -mca ras_gridengine_verbose 10 -mca ras_base_verbose 10
<br>
<p>My guess is that something in the pe_hostfile syntax may have changed and we didn't pick up on it.
<br>
<p><p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I configured with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and adjusted my PATHs accordingly (at least: I hope so).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="20113.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
