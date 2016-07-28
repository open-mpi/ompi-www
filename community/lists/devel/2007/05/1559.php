<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 15:20:57 2007" -->
<!-- isoreceived="20070518192057" -->
<!-- sent="Fri, 18 May 2007 13:18:57 -0600" -->
<!-- isosent="20070518191857" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change to default xcast mode [RFC]" -->
<!-- id="C2735841.9311%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-18 15:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1560.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Change to default xcast mode [RFC]"</a>
<li><strong>Previous message:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the last several months, we have supported three modes of sending the
<br>
xcast messages used to release MPI processes from their various stage gates:
<br>
<p>1. Direct - message sent directly to each process in a serial fashion
<br>
<p>2. Linear - message sent serially to the daemon on each node, which then
<br>
&quot;fans&quot; it out to the application procs on that node
<br>
<p>3. Binomial - message sent via binomial tree algorithm to the daemon on each
<br>
node, which then &quot;fans&quot; it out to the local application procs
<br>
<p>To maintain historical consistency, we have defaulted to &quot;direct&quot;. However,
<br>
this is not the more scalable mode.
<br>
<p>We propose to leave all three of these modes in the system, but to change
<br>
the default on the OMPI trunk to &quot;linear&quot; so that it will be tested more
<br>
thoroughly by the automated test suite.
<br>
<p>Please voice any comments and/or objections. Assuming there is agreement, we
<br>
will make the switch (solely on the OMPI trunk - this will not impact the
<br>
1.2 series) on June 1.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1560.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Change to default xcast mode [RFC]"</a>
<li><strong>Previous message:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
