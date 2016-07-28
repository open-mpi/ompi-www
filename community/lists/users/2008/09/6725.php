<?
$subject_val = "Re: [OMPI users] mca:base:select:( ess) No component selected!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 14:01:56 2008" -->
<!-- isoreceived="20080924180156" -->
<!-- sent="Wed, 24 Sep 2008 12:01:46 -0600" -->
<!-- isosent="20080924180146" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca:base:select:( ess) No component selected!" -->
<!-- id="E2B279C4-4B1E-47FE-9491-FA6540191FFC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e1ac6ccc0809240847h4aa0c20cm97a674a85b671950_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca:base:select:( ess) No component selected!<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 14:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6720.php">Will Portnoy: "[OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you rerun that with -mca plm_base_verbose 1? What environment  
<br>
are you in - I assume rsh/ssh?
<br>
<p>I would like to see the cmd line being used to launch the orted. What  
<br>
this indicates is that we are not getting the cmd line correct. Could  
<br>
just be that some patch in the trunk didn't get completely applied to  
<br>
the 1.3 branch.
<br>
<p>BTW: you probably can't run orted directly off of the cmd line. It  
<br>
likely needs some cmd line params to get critical info.
<br>
<p>Ralph
<br>
<p>On Sep 24, 2008, at 9:47 AM, Will Portnoy wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to use MPI_Comm_Spawn with MPI_Info's host key to spawn
</span><br>
<span class="quotelev1">&gt; processes from a process not started with mpirun.  This works with the
</span><br>
<span class="quotelev1">&gt; host key set to the localhost's hostname, but it does not work when I
</span><br>
<span class="quotelev1">&gt; use other hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using version 1.3a1r19602.  I need to use orte_launch_agent to set
</span><br>
<span class="quotelev1">&gt; up my environment a bit before orted is started, but it fails with
</span><br>
<span class="quotelev1">&gt; errors listed below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run orted directly on the command line with some of the
</span><br>
<span class="quotelev1">&gt; verbosity flags turned to &quot;11&quot;, I receive the same messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: Looking for ess components
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component env has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component env open function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component hnp has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component hnp open function  
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: found loaded component  
</span><br>
<span class="quotelev1">&gt; singleton
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component singleton has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component singleton open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component tool has no  
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca: base: components_open: component tool open  
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select: Auto-selecting ess components
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [hnp]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] mca:base:select:(  ess) No component selected!
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; orted/orted_main.c at line 315
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
<li><strong>Next message:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6724.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6720.php">Will Portnoy: "[OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6726.php">Will Portnoy: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
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
