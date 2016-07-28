<?
$subject_val = "Re: [OMPI users] mca:base:select:( ess) No component selected!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 14:11:06 2008" -->
<!-- isoreceived="20080924181106" -->
<!-- sent="Wed, 24 Sep 2008 14:11:01 -0400" -->
<!-- isosent="20080924181101" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca:base:select:( ess) No component selected!" -->
<!-- id="e1ac6ccc0809241111n553fcf77j50b7ae2975bb8369_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2B279C4-4B1E-47FE-9491-FA6540191FFC_at_lanl.gov" -->
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
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 14:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>In reply to:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was the output with plm_base_verbose set to 99 - it's the same
<br>
output with 1.
<br>
<p>Yes, I'd like to use ssh.
<br>
<p>orted wasn't starting properly with orte_launch_agent (which was
<br>
needed because my environment on the target machine wasn't set up), so
<br>
that's why I thought I would try it directly on the command line on
<br>
localhost.  I thought this was a simpler case: to verify that orted
<br>
could find all of its necessary components without the complexity of
<br>
everything else I'm doing.
<br>
<p>If I needed to use orte_launch_agent, how should I pass the necessary
<br>
parameters to start orted after I set up my environment?
<br>
<p>Am I better off using trunk over 1.3?
<br>
<p>thank you,
<br>
<p>Will
<br>
<p>On Wed, Sep 24, 2008 at 2:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Could you rerun that with -mca plm_base_verbose 1? What environment are you
</span><br>
<span class="quotelev1">&gt; in - I assume rsh/ssh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to see the cmd line being used to launch the orted. What this
</span><br>
<span class="quotelev1">&gt; indicates is that we are not getting the cmd line correct. Could just be
</span><br>
<span class="quotelev1">&gt; that some patch in the trunk didn't get completely applied to the 1.3
</span><br>
<span class="quotelev1">&gt; branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: you probably can't run orted directly off of the cmd line. It likely
</span><br>
<span class="quotelev1">&gt; needs some cmd line params to get critical info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2008, at 9:47 AM, Will Portnoy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to use MPI_Comm_Spawn with MPI_Info's host key to spawn
</span><br>
<span class="quotelev2">&gt;&gt; processes from a process not started with mpirun.  This works with the
</span><br>
<span class="quotelev2">&gt;&gt; host key set to the localhost's hostname, but it does not work when I
</span><br>
<span class="quotelev2">&gt;&gt; use other hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using version 1.3a1r19602.  I need to use orte_launch_agent to set
</span><br>
<span class="quotelev2">&gt;&gt; up my environment a bit before orted is started, but it fails with
</span><br>
<span class="quotelev2">&gt;&gt; errors listed below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to run orted directly on the command line with some of the
</span><br>
<span class="quotelev2">&gt;&gt; verbosity flags turned to &quot;11&quot;, I receive the same messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: Looking for ess components
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component env has no register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component env open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component hnp has no register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component hnp open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component singleton
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component singleton has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component singleton open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev2">&gt;&gt; register function
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component tool has no register
</span><br>
<span class="quotelev2">&gt;&gt; function
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca: base: components_open: component tool open function
</span><br>
<span class="quotelev2">&gt;&gt; successful
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select: Auto-selecting ess components
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev2">&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [hnp]. Query
</span><br>
<span class="quotelev2">&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev2">&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [slurm]. Query
</span><br>
<span class="quotelev2">&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev2">&gt;&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] mca:base:select:(  ess) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orted/orted_main.c at line 315
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Previous message:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>In reply to:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6727.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
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
