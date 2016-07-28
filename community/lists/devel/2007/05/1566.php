<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 22 12:11:39 2007" -->
<!-- isoreceived="20070522161139" -->
<!-- sent="Tue, 22 May 2007 10:11:33 -0600" -->
<!-- isosent="20070522161133" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Dumping process status etc." -->
<!-- id="C2787255.93B6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-22 12:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<li><strong>Previous message:</strong> <a href="1565.php">Ethan Mallove: "[OMPI devel] Outdated PMB_2.2 test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<li><strong>Reply:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This came up in today's telecon and I promised to send this to George -
<br>
however, it occurred to me that others may also want to know.
<br>
<p>If you want to dump info for debugging purposes, and if you can get into
<br>
orterun/mpirun (e.g., via gdb), you can dump info on anything with the
<br>
following (NOTE: Gdb will frequently truncate the output from these commands
<br>
- that is why there are so many and they are somewhat detailed. I tend to
<br>
bury the more verbose of these in the code itself when debugging so I can be
<br>
sure to see the entire output):
<br>
<p>orte_gpr.dump_all(0): this will dump *everything* in the registry to opal
<br>
output stream 0 (or whatever one you care to designate), including all the
<br>
info on trigger status (e.g., whether it has fired or not).
<br>
<p>orte_gpr.dump_segment(segment-name): this will provide the info stored on
<br>
any segment of the registry. Standard segments worth looking at include:
<br>
<p>1. &quot;orte-job-1&quot;: shows info on all procs in your initial applications,
<br>
including their reported state
<br>
<p>2. &quot;orte-node&quot;: what nodes are known to the system, and anything about their
<br>
status
<br>
<p>3. &quot;orte-job-0&quot;: info on all daemons in the system
<br>
<p><p>orte_gpr.dump_triggers(0): status and info on all triggers. The &quot;0&quot; argument
<br>
indicates that you want them all dumped to the screen. Since gdb doesn't
<br>
like getting too much info, you can use this argument to specify how many
<br>
you want to see starting from the end of the list (i.e., &quot;5&quot; says give me
<br>
the five last triggers that were defined).
<br>
<p>orte_gpr.dump_subscriptions(0): same as above, only for subscriptions
<br>
<p>There are more of these that are defined, but they are fairly obvious - you
<br>
can see them all listed in orte/mca/gpr/gpr.h.
<br>
<p>Also, don't forget that you can dump *any* data type object using the
<br>
orte_dss.dump command - see orte/dss/dss.h for a description.
<br>
<p>Hope that helps!
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<li><strong>Previous message:</strong> <a href="1565.php">Ethan Mallove: "[OMPI devel] Outdated PMB_2.2 test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
<li><strong>Reply:</strong> <a href="1567.php">Josh Hursey: "Re: [OMPI devel] [devel-core] Dumping process status etc."</a>
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
