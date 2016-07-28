<?
$subject_val = "[OMPI devel] RFC: ORTE state machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 18 22:47:29 2012" -->
<!-- isoreceived="20120319024729" -->
<!-- sent="Sun, 18 Mar 2012 20:47:21 -0600" -->
<!-- isosent="20120319024721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: ORTE state machine" -->
<!-- id="7151268E-B28F-4A61-A503-D91AB5DEBBD2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: ORTE state machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-18 22:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10734.php">David Singleton: "[OMPI devel] mpirun --debug"</a>
<li><strong>Previous message:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHY:     Enable async progress
<br>
<p>WHAT:  Restructure ORTE to operate as a completely event-driven state machine
<br>
<p>WHEN:  ~April 1 (seems appropriate)
<br>
<p>SIGNIFICANT CHANGES:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* grpcomm API has changed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* routed API has changed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* state framework has been added to ORTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* OPAL SOS has been removed (per IU)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* --enable-resilient-orte and all epoch code has been removed (per UTK)
<br>
<p>KNOWN BREAKAGE:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* checkpoint/restart is almost certainly broken
<br>
<p>This has been discussed several times over the last 6-8 months. Going forward, we need to enable async progress at both the OMPI and ORTE level. This change deals solely with the latter area. All interactions with the ORTE level have been made non-blocking to allow the MPI layer to continue making separate progress. This is reflected in changes made to ompi_mpi_init, ompi_mpi_finalize, and dpm_orte.
<br>
<p>The largest change is the introduction of the ORTE &quot;state&quot; framework that moves the launch of a job thru a series of events, each processing one step of the launch procedure. So allocation becomes an event, as does mapping. The state machine is implemented as a linked list, so variations of the procedures can be easily implemented by those wanting to try something different from the base implementation.
<br>
<p>The daemon collectives have also been reworked to remove their &quot;tree&quot; dependency. Non-tree collectives can now be performed, and a few are in the works and should be committed shortly after the state machine is in the trunk.
<br>
<p>The ability to run an ORTE progress thread has been included in the configure code (--enable-orte-progress-thread), but is off by default. As Brian noted, the MPI layer is not ready for this feature at this time. However, the ORTE code is fully prepared, so those interested in working on completing the async progress work in the MPI layer can do so.
<br>
<p>The state machine branch is at <a href="https://bitbucket.org/rhc/ompi-term">https://bitbucket.org/rhc/ompi-term</a>. I'm still doing some cleanup there, so don't be surprised if debug messages appear and/or things aren't completely right just yet.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10734.php">David Singleton: "[OMPI devel] mpirun --debug"</a>
<li><strong>Previous message:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
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
