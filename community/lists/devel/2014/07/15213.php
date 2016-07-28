<?
$subject_val = "Re: [OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 08:33:27 2014" -->
<!-- isoreceived="20140723123327" -->
<!-- sent="Wed, 23 Jul 2014 12:33:24 +0000" -->
<!-- isosent="20140723123324" -->
<!-- name="Yossi Etigin" -->
<!-- email="yosefe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier before calling del_procs" -->
<!-- id="f2cd097f34d44313b08a055ba6a1f650_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkXGwKKq2M5QReZWeR+n_Rrc336=KeQboUoRXLmevZbsmQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] barrier before calling del_procs<br>
<strong>From:</strong> Yossi Etigin (<em>yosefe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-23 08:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>In reply to:</strong> <a href="15209.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15223.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15223.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.       If the barrier is before del_proc, it does guarantee all MPI calls have been completed by all other ranks, but it does not guarantee all ACKs have been delivered. For MXM, closing the connection (del_procs call completed) guarantees that my rank got all ACKs. So we need a barrier between del_procs and pml_finalize, because only when all other ranks closed their connection it&#226;&#128;&#153;s safe to destroy the global pml resources.
<br>

<br>

<br>

<br>
2.       In order to avoid a situation when rankA starts disconnecting from rankB, while rankB is still doing MPI work. In this case rankB will not be able to communicate with rankA any more, while it still has work to do.
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Monday, July 21, 2014 9:11 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] barrier before calling del_procs
<br>

<br>
On Mon, Jul 21, 2014 at 1:41 PM, Yossi Etigin &lt;yosefe_at_[hidden]&lt;mailto:yosefe_at_[hidden]&gt;&gt; wrote:
<br>
Right, but:
<br>

<br>
1.       IMHO the rte_barrier in the wrong place (in the trunk)
<br>

<br>
In the trunk we have the rte_barrier prior to del_proc, which is what I would have expected: quiescence the BTLs by reaching a point where everybody agree that no more MPI messages will be exchanged, and then delete the BTLs.
<br>

<br>

<br>
2.       In addition to the rte_barrier, need also mpi_barrier
<br>
Care for providing a reasoning for this barrier? Why and where should it be placed?
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>

<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of George Bosilca
<br>
Sent: Monday, July 21, 2014 8:19 PM
<br>
To: Open MPI Developers
<br>

<br>
Subject: Re: [OMPI devel] barrier before calling del_procs
<br>

<br>
There was a long thread of discussion on why we must use an rte_barrier and not an mpi_barrier during the finalize. Basically, we long as we have connectionless unreliable BTLs we need an external mechanism to ensure complete tear-down of the entire infrastructure. Thus, we need to rely on an rte_barrier not because it guarantees the correctness of the code, but because it provides enough time to all processes to flush all HPC traffic.
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>
On Mon, Jul 21, 2014 at 1:10 PM, Yossi Etigin &lt;yosefe_at_[hidden]&lt;mailto:yosefe_at_[hidden]&gt;&gt; wrote:
<br>
I see. But in branch v1.8, in 31869, Ralph reverted the commit which moved del_procs after the barrier:
<br>
&nbsp;&nbsp;&quot;Revert r31851 until we can resolve how to close these leaks without causing the usnic BTL to fail during disconnect of intercommunicators
<br>
&nbsp;&nbsp;&nbsp;Refs #4643&quot;
<br>
Also, we need an rte barrier after del_procs - because otherwise rankA could call pml_finalize() before rankB finishes disconnecting from rankA.
<br>

<br>
I think the order in finalize should be like this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. mpi_barrier(world)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. del_procs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. rte_barrier()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. pml_finalize()
<br>

<br>
-----Original Message-----
<br>
From: Nathan Hjelm [mailto:hjelmn_at_[hidden]&lt;mailto:hjelmn_at_[hidden]&gt;]
<br>
Sent: Monday, July 21, 2014 8:01 PM
<br>
To: Open MPI Developers
<br>
Cc: Yossi Etigin
<br>
Subject: Re: [OMPI devel] barrier before calling del_procs
<br>

<br>
I should add that it is an rte barrier and not an MPI barrier for technical reasons.
<br>

<br>
-Nathan
<br>

<br>
On Mon, Jul 21, 2014 at 09:42:53AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    We already have an rte barrier before del procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;    On Jul 21, 2014, at 8:21 AM, Yossi Etigin &lt;yosefe_at_[hidden]&lt;mailto:yosefe_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      We get occasional hangs with MTL/MXM during finalize, because a global
</span><br>
<span class="quotelev1">&gt;      synchronization is needed before calling del_procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      e.g rank A may call del_procs() and disconnect from rank B, while rank B
</span><br>
<span class="quotelev1">&gt;      is still working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      What do you think about adding an MPI barrier on COMM_WORLD before
</span><br>
<span class="quotelev1">&gt;      calling del_procs()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15204.php">http://www.open-mpi.org/community/lists/devel/2014/07/15204.php</a>
</span><br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15206.php">http://www.open-mpi.org/community/lists/devel/2014/07/15206.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15208.php">http://www.open-mpi.org/community/lists/devel/2014/07/15208.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15213/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15214.php">Mike Dubman: "[OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15212.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Build failed in Jenkins:	ompi_upstream_v1.8_build_debug #265"</a>
<li><strong>In reply to:</strong> <a href="15209.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15223.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15223.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
