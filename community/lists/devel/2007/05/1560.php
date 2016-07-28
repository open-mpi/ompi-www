<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 16:20:56 2007" -->
<!-- isoreceived="20070518202056" -->
<!-- sent="Fri, 18 May 2007 14:20:48 -0600" -->
<!-- isosent="20070518202048" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] Change to default xcast mode [RFC]" -->
<!-- id="C27366C0.931E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="464E0745.3070209_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-05-18 16:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1559.php">Ralph H Castain: "[OMPI devel] Change to default xcast mode [RFC]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/18/07 2:06 PM, &quot;Andrew Friedley&quot; &lt;afriedle_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why not use the binomial mode?  I assume it is faster?
</span><br>
<p>Yes, but it doesn't work right this minute (should be fixed soon), and we
<br>
would prefer to take a small step first. Linear doesn't require any major
<br>
code change, while binomial requires we more significant changes,
<br>
particularly regarding how the orteds handle the buffers for
<br>
re-transmission. Hence, binomial represents a higher degree of risk.
<br>
<p>We have tested linear on a significant range of environments and we
<br>
therefore expect to see it work cleanly. Binomial has not been tested very
<br>
much at this time. Once we have more fully exercised linear, and have had
<br>
time to fix and test binomial on more environments, then we can try
<br>
switching the default to binomial.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are the MCA params to control this?
</span><br>
<p>oob_xcast_mode = {&quot;direct&quot;, &quot;linear&quot;} (&quot;binomial&quot; will currently generate an
<br>
error)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you discuss a little bit about the difference in performance we
</span><br>
<span class="quotelev1">&gt; might see between the different modes, and why we might use one over the
</span><br>
<span class="quotelev1">&gt; other?
</span><br>
<p>Direct is the slowest due to the number of messages involved. Binomial is
<br>
the fastest as it more rapidly propagates the startup message across all the
<br>
procs.
<br>
<p>Linear is a compromise - it gives you better performance than direct when
<br>
ppn &gt; 1 (obviously, when ppn=1, there is no benefit at all), but not as good
<br>
as binomial because we send the messages to each orted independently
<br>
(instead of via a binomial tree method).
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For the last several months, we have supported three modes of sending the
</span><br>
<span class="quotelev2">&gt;&gt; xcast messages used to release MPI processes from their various stage gates:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Direct - message sent directly to each process in a serial fashion
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Linear - message sent serially to the daemon on each node, which then
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fans&quot; it out to the application procs on that node
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Binomial - message sent via binomial tree algorithm to the daemon on each
</span><br>
<span class="quotelev2">&gt;&gt; node, which then &quot;fans&quot; it out to the local application procs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To maintain historical consistency, we have defaulted to &quot;direct&quot;. However,
</span><br>
<span class="quotelev2">&gt;&gt; this is not the more scalable mode.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We propose to leave all three of these modes in the system, but to change
</span><br>
<span class="quotelev2">&gt;&gt; the default on the OMPI trunk to &quot;linear&quot; so that it will be tested more
</span><br>
<span class="quotelev2">&gt;&gt; thoroughly by the automated test suite.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please voice any comments and/or objections. Assuming there is agreement, we
</span><br>
<span class="quotelev2">&gt;&gt; will make the switch (solely on the OMPI trunk - this will not impact the
</span><br>
<span class="quotelev2">&gt;&gt; 1.2 series) on June 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1561.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1559.php">Ralph H Castain: "[OMPI devel] Change to default xcast mode [RFC]"</a>
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
