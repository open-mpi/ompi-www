<?
$subject_val = "Re: [OMPI users] help me understand these error msgs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 15:09:49 2013" -->
<!-- isoreceived="20130122200949" -->
<!-- sent="Tue, 22 Jan 2013 12:09:42 -0800" -->
<!-- isosent="20130122200942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me understand these error msgs" -->
<!-- id="88EB7927-EA21-453C-B47C-AA2067EB3369_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20130122183426.3a7b1a61.pegasus_at_nerv.eu.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me understand these error msgs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 15:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21187.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see - then the problem is that at least one node is unable to communicate via TCP back to where mpirun is executing. Might be a firewall, or could be that we are selecting the wrong network if multiple NICs are around. I assume that you use additional nodes when running against the larger dataset?
<br>
<p><p>On Jan 22, 2013, at 9:34 AM, Jure Pe&#196;&#141;ar &lt;pegasus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 17 Jan 2013 11:54:13 -0800
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or is this happening on startup of the larger job, or during a call to MPI_Comm_spawn?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happens on a startup. Mpirun spawns processes and when they start talking to eachother during setup phase, I get this kind of error. Running time in such case is less than a minute.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jure Pe&#196;&#141;ar
</span><br>
<span class="quotelev1">&gt; <a href="http://jure.pecar.org">http://jure.pecar.org</a>
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
<li><strong>Next message:</strong> <a href="21193.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21187.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
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
