<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 21:06:40 2009" -->
<!-- isoreceived="20090817010640" -->
<!-- sent="Mon, 17 Aug 2009 11:06:23 +1000 (EST)" -->
<!-- isosent="20090817010623" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="3844979.1418711250471183148.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1272324643.1418581250470196272.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-16 21:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6638.php">George Bosilca: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is an important discussion.
</span><br>
<p>Indeed! My big fear is that people won't pick up the significance
<br>
of the change and will complain about performance regressions
<br>
in the middle of an OMPI stable release cycle.
<br>
<p><span class="quotelev1">&gt; Do note:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Bind-to-core is actually the default behavior of many MPIs today.
</span><br>
<p>We had this issue with MVAPICH before we dumped it to go to OpenMPI
<br>
as if we had (for example) two 4 core jobs running on the same node
<br>
they'd both go at half speed whilst the node itself was 50% idle.
<br>
<p>Turned out they'd both bound to cores 0-3 leaving cores 4-7 unused. :-(
<br>
<p>Fortunately there was an undocumented environment variable
<br>
that let us turn it off for all jobs, but getting rid of that
<br>
misbehaviour was a major reason for switching to OpenMPI.
<br>
<p><span class="quotelev1">&gt; 2) The proposed OMPI bind-to-socket default is less severe. In the
</span><br>
<span class="quotelev1">&gt; general case, it would allow multiple jobs to bind in the same way
</span><br>
<span class="quotelev1">&gt; without oversubscribing any core or socket. (This comment added to
</span><br>
<span class="quotelev1">&gt; the trac ticket.)
</span><br>
<p>That's a nice clarification, thanks. I suspect though that the
<br>
same issue we have with MVAPICH would occur if two 4 core jobs
<br>
both bound themselves to the first socket.
<br>
<p>Thinking further, it would be interesting to find out how this
<br>
code would behave on a system where cpusets is in use and so OMPI
<br>
has to submit to the will of the scheduler regarding cores/sockets.
<br>
<p><span class="quotelev1">&gt; 3) Defaults (if I understand correctly) can be set differently
</span><br>
<span class="quotelev1">&gt; on each cluster.
</span><br>
<p>Yes, but the defaults should be sensible for the majority of
<br>
clusters.  If the majority do indeed share nodes between jobs
<br>
then I would suggest that the default should be off and the
<br>
minority who don't share nodes should have to enable it.
<br>
<p>There's also the issue of those users who (for whatever reason)
<br>
like to build their own MPI stack and who are even less likely
<br>
to understand the impact that they may have on others.. :-(
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6638.php">George Bosilca: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="6628.php">Terry Dontje: "[OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
