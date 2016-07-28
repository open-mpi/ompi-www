<?
$subject_val = "Re: [OMPI devel] Nodes already filled when spawning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 13:33:17 2011" -->
<!-- isoreceived="20111215183317" -->
<!-- sent="Thu, 15 Dec 2011 11:33:08 -0700" -->
<!-- isosent="20111215183308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nodes already filled when spawning" -->
<!-- id="C5B37083-FA2D-4644-B2AB-4C5F29B4280B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEA3BF7.6030705_at_oracle.com" -->
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
<strong>Date:</strong> 2011-12-15 13:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun --oversubscribe  or   OMPI_MCA_rmaps_base_oversubscribe=1
<br>
<p><p>On Dec 15, 2011, at 11:27 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; There's an oversubscribe option I can set in my case, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/15/2011 1:22 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is fixed, to a degree, with r25659. However, note that there is one big change that occurred back when we first committed the mapping change.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I noted at that time, we changed the default for RM-given allocations to be no-oversubscribe. So your MTTs may well fail if they weren't updated as all those tests oversubscribe the nodes, and are running in RM environments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2011, at 8:37 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last night MTT test results for 1.7a1r25652 from IU and Oracle is showing failures during some of the spawn tests see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2036">http://www.open-mpi.org/mtt/index.php?do_redir=2036</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Essentially, the test are failing with the message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if this is related to some of the hostfile changes done lately.  Anyways, I am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on narrowing down the revision that introduced that but if someone figures this out 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before me that would be great.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10136.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10134.php">TERRY DONTJE: "Re: [OMPI devel] Nodes already filled when spawning"</a>
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
