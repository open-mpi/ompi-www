<?
$subject_val = "[OMPI users] mca:base:select:( ess) No component selected!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 11:47:39 2008" -->
<!-- isoreceived="20080924154739" -->
<!-- sent="Wed, 24 Sep 2008 11:47:33 -0400" -->
<!-- isosent="20080924154733" -->
<!-- name="Will Portnoy" -->
<!-- email="will.portnoy_at_[hidden]" -->
<!-- subject="[OMPI users] mca:base:select:( ess) No component selected!" -->
<!-- id="e1ac6ccc0809240847h4aa0c20cm97a674a85b671950_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mca:base:select:( ess) No component selected!<br>
<strong>From:</strong> Will Portnoy (<em>will.portnoy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 11:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6721.php">Jeff Squyres: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6719.php">Brock Palen: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use MPI_Comm_Spawn with MPI_Info's host key to spawn
<br>
processes from a process not started with mpirun.  This works with the
<br>
host key set to the localhost's hostname, but it does not work when I
<br>
use other hosts.
<br>
<p>I'm using version 1.3a1r19602.  I need to use orte_launch_agent to set
<br>
up my environment a bit before orted is started, but it fails with
<br>
errors listed below.
<br>
<p>When I try to run orted directly on the command line with some of the
<br>
verbosity flags turned to &quot;11&quot;, I receive the same messages.
<br>
<p>Does anybody have any suggestions?
<br>
<p>thank you,
<br>
<p>Will
<br>
<p><p>[fqdn:24761] mca: base: components_open: Looking for ess components
<br>
[fqdn:24761] mca: base: components_open: opening ess components
<br>
[fqdn:24761] mca: base: components_open: found loaded component env
<br>
[fqdn:24761] mca: base: components_open: component env has no register function
<br>
[fqdn:24761] mca: base: components_open: component env open function successful
<br>
[fqdn:24761] mca: base: components_open: found loaded component hnp
<br>
[fqdn:24761] mca: base: components_open: component hnp has no register function
<br>
[fqdn:24761] mca: base: components_open: component hnp open function successful
<br>
[fqdn:24761] mca: base: components_open: found loaded component singleton
<br>
[fqdn:24761] mca: base: components_open: component singleton has no
<br>
register function
<br>
[fqdn:24761] mca: base: components_open: component singleton open
<br>
function successful
<br>
[fqdn:24761] mca: base: components_open: found loaded component slurm
<br>
[fqdn:24761] mca: base: components_open: component slurm has no
<br>
register function
<br>
[fqdn:24761] mca: base: components_open: component slurm open function
<br>
successful
<br>
[fqdn:24761] mca: base: components_open: found loaded component tool
<br>
[fqdn:24761] mca: base: components_open: component tool has no register function
<br>
[fqdn:24761] mca: base: components_open: component tool open function successful
<br>
[fqdn:24761] mca:base:select: Auto-selecting ess components
<br>
[fqdn:24761] mca:base:select:(  ess) Querying component [env]
<br>
[fqdn:24761] mca:base:select:(  ess) Skipping component [env]. Query
<br>
failed to return a module
<br>
[fqdn:24761] mca:base:select:(  ess) Querying component [hnp]
<br>
[fqdn:24761] mca:base:select:(  ess) Skipping component [hnp]. Query
<br>
failed to return a module
<br>
[fqdn:24761] mca:base:select:(  ess) Querying component [singleton]
<br>
[fqdn:24761] mca:base:select:(  ess) Skipping component [singleton].
<br>
Query failed to return a module
<br>
[fqdn:24761] mca:base:select:(  ess) Querying component [slurm]
<br>
[fqdn:24761] mca:base:select:(  ess) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[fqdn:24761] mca:base:select:(  ess) Querying component [tool]
<br>
[fqdn:24761] mca:base:select:(  ess) Skipping component [tool]. Query
<br>
failed to return a module
<br>
[fqdn:24761] mca:base:select:(  ess) No component selected!
<br>
[fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[fqdn:24761] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
orted/orted_main.c at line 315
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6721.php">Jeff Squyres: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6719.php">Brock Palen: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
<li><strong>Reply:</strong> <a href="6725.php">Ralph Castain: "Re: [OMPI users] mca:base:select:( ess) No component selected!"</a>
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
