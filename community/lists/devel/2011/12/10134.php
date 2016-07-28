<?
$subject_val = "Re: [OMPI devel] Nodes already filled when spawning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 13:27:09 2011" -->
<!-- isoreceived="20111215182709" -->
<!-- sent="Thu, 15 Dec 2011 13:27:03 -0500" -->
<!-- isosent="20111215182703" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Nodes already filled when spawning" -->
<!-- id="4EEA3BF7.6030705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11ABACA4-F141-487C-B4D3-7CF4D4107308_at_open-mpi.org" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 13:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Previous message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Reply:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's an oversubscribe option I can set in my case, right?
<br>
<p>Thanks,
<br>
<p>--td
<br>
<p>On 12/15/2011 1:22 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; This is fixed, to a degree, with r25659. However, note that there is 
</span><br>
<span class="quotelev1">&gt; one big change that occurred back when we first committed the mapping 
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I noted at that time, we changed the default for RM-given 
</span><br>
<span class="quotelev1">&gt; allocations to be no-oversubscribe. So your MTTs may well fail if they 
</span><br>
<span class="quotelev1">&gt; weren't updated as all those tests oversubscribe the nodes, and are 
</span><br>
<span class="quotelev1">&gt; running in RM environments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2011, at 8:37 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last night MTT test results for 1.7a1r25652 from IU and Oracle is 
</span><br>
<span class="quotelev2">&gt;&gt; showing failures during some of the spawn tests see 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=2036">http://www.open-mpi.org/mtt/index.php?do_redir=2036</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Essentially, the test are failing with the message:
</span><br>
<span class="quotelev2">&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if this is related to some of the hostfile changes done lately.  Anyways, I am
</span><br>
<span class="quotelev2">&gt;&gt; working on narrowing down the revision that introduced that but if someone figures this out
</span><br>
<span class="quotelev2">&gt;&gt; before me that would be great.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10134/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Previous message:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>Reply:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
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
