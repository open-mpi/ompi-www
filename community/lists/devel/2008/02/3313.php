<?
$subject_val = "[OMPI devel] Revised trunk: debugging output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 09:16:00 2008" -->
<!-- isoreceived="20080228141600" -->
<!-- sent="Thu, 28 Feb 2008 07:15:50 -0700" -->
<!-- isosent="20080228141550" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Revised trunk: debugging output" -->
<!-- id="C3EC1026.C69B%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Revised trunk: debugging output<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 09:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3312.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those of you working with the revised trunk, we made some significant
<br>
changes to the way we control debugging output in the ORTE layer. We tried
<br>
to make it more consistent so you wouldn't have to keep searching the source
<br>
code to figure out how to get debug output for a particular area of the
<br>
code.
<br>
<p>What we settled on was the use of &quot;verbosity&quot;. Basically, you get debugging
<br>
output in the following ways:
<br>
<p>1. for any framework, setting -mca framework_base_verbose x&quot; will turn on
<br>
debugging output for that framework. A verbosity &lt; 5 will get various levels
<br>
of debug from the individual components. Verbosity &gt; 5 will add various
<br>
levels of debug output from any base functions.
<br>
<p>NOTE: one major change from prior ORTE versions - you no longer have to
<br>
specify --debug-daemons to get debug output from an orted's frameworks. Just
<br>
specify the framework verbosity as above and you will see the orteds output
<br>
too.
<br>
<p>2. for the non-framework parts of orte, set --debug-devel (or -d) to see
<br>
this from mpirun, and set --debug-daemons to see it from the daemons. There
<br>
is a verbosity parameter defined for this, but it hasn't been implemented
<br>
yet.
<br>
<p>NOTE: setting these will -not- give you any debug info from the frameworks!
<br>
You need to set that separately. There are some places in the code that
<br>
probably violate this, but we are hoping to clean those up over time.
<br>
<p><p>Another important thing to note is that the debug output was pretty
<br>
universally converted to OPAL_OUTPUT_VERBOSE macros. These macros do -not-
<br>
compile in non-debug builds. Hence, please note that you will -not- get
<br>
debug output from an optimized build. This was done to eliminate a continual
<br>
set of &quot;if&quot; statements being executed in optimized builds.
<br>
<p><p>While we tried to sweep the code base and clean this all up, we cannot
<br>
guarantee we caught everything. If you come across something that we missed,
<br>
please let me know or revamp it to fit the above description.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<li><strong>Previous message:</strong> <a href="3312.php">Ralph H Castain: "Re: [OMPI devel] Trunk returned to normal operations"</a>
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
