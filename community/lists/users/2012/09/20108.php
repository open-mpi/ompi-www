<?
$subject_val = "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 17:34:47 2012" -->
<!-- isoreceived="20120903213447" -->
<!-- sent="Mon, 3 Sep 2012 14:34:40 -0700" -->
<!-- isosent="20120903213440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="9478A2BE-79C2-46D0-B88C-B8FBEC2BD539_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8136F9F-DA01-4F04-A9F2-0F72D2B7A484_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-09-03 17:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20109.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20107.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20106.php">Reuti: "[OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2012, at 2:12 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just compiled Open MPI 1.6.1 and before digging any deeper: does anyone else notice, that the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 4 -machinefile mymachines ./mpihello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will ignore the argument &quot;-machinefile mymachines&quot; and use the file &quot;openmpi-default-hostfile&quot; instead all the time?
</span><br>
<p>Try setting &quot;-mca orte_default_hostfile mymachines&quot; instead.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I usually don't install new versions instantly, so I only noticed right now, that in 1.4.5 I get a wrong allocation inside SGE (always one process less than requested with `qsub -pe orted N ...`. This I tried only, as with 1.6.1 I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; all the time.
</span><br>
<p>Weird - I'm not sure I understand what you are saying. Is this happening with 1.6.1 as well? Or just with 1.4.5?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and adjusted my PATHs accordingly (at least: I hope so).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="20109.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20107.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20106.php">Reuti: "[OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20110.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
