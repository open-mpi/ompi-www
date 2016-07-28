<?
$subject_val = "Re: [OMPI devel] Nodes already filled when spawning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 13:22:40 2011" -->
<!-- isoreceived="20111215182240" -->
<!-- sent="Thu, 15 Dec 2011 11:22:31 -0700" -->
<!-- isosent="20111215182231" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nodes already filled when spawning" -->
<!-- id="11ABACA4-F141-487C-B4D3-7CF4D4107308_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEA1425.9020505_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Nodes already filled when spawning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 13:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Previous message:</strong> <a href="10132.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10131.php">TERRY DONTJE: "[OMPI devel] Nodes already filled when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Reply:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is fixed, to a degree, with r25659. However, note that there is one big change that occurred back when we first committed the mapping change.
<br>
<p>As I noted at that time, we changed the default for RM-given allocations to be no-oversubscribe. So your MTTs may well fail if they weren't updated as all those tests oversubscribe the nodes, and are running in RM environments.
<br>
<p><p>On Dec 15, 2011, at 8:37 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Last night MTT test results for 1.7a1r25652 from IU and Oracle is showing failures during some of the spawn tests see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2036">http://www.open-mpi.org/mtt/index.php?do_redir=2036</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Essentially, the test are failing with the message:
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if this is related to some of the hostfile changes done lately.  Anyways, I am 
</span><br>
<span class="quotelev1">&gt; working on narrowing down the revision that introduced that but if someone figures this out 
</span><br>
<span class="quotelev1">&gt; before me that would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Previous message:</strong> <a href="10132.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10131.php">TERRY DONTJE: "[OMPI devel] Nodes already filled when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Reply:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
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
