<?
$subject_val = "Re: [OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 13:18:40 2014" -->
<!-- isoreceived="20140721171840" -->
<!-- sent="Mon, 21 Jul 2014 13:18:38 -0400" -->
<!-- isosent="20140721171838" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier before calling del_procs" -->
<!-- id="CAMJJpkVdhAkF=H2pCh6Zj5k8NBM0yBM0219y8JZ2ZzDfSZRmzA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3857538fe5ae4e8785e7ed050a3fe88d_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 13:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a long thread of discussion on why we must use an rte_barrier and
<br>
not an mpi_barrier during the finalize. Basically, we long as we have
<br>
connectionless unreliable BTLs we need an external mechanism to ensure
<br>
complete tear-down of the entire infrastructure. Thus, we need to rely on
<br>
an rte_barrier not because it guarantees the correctness of the code, but
<br>
because it provides enough time to all processes to flush all HPC traffic.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Jul 21, 2014 at 1:10 PM, Yossi Etigin &lt;yosefe_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see. But in branch v1.8, in 31869, Ralph reverted the commit which moved
</span><br>
<span class="quotelev1">&gt; del_procs after the barrier:
</span><br>
<span class="quotelev1">&gt;   &quot;Revert r31851 until we can resolve how to close these leaks without
</span><br>
<span class="quotelev1">&gt; causing the usnic BTL to fail during disconnect of intercommunicators
</span><br>
<span class="quotelev1">&gt;    Refs #4643&quot;
</span><br>
<span class="quotelev1">&gt; Also, we need an rte barrier after del_procs - because otherwise rankA
</span><br>
<span class="quotelev1">&gt; could call pml_finalize() before rankB finishes disconnecting from rankA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the order in finalize should be like this:
</span><br>
<span class="quotelev1">&gt;         1. mpi_barrier(world)
</span><br>
<span class="quotelev1">&gt;         2. del_procs()
</span><br>
<span class="quotelev1">&gt;         3. rte_barrier()
</span><br>
<span class="quotelev1">&gt;         4. pml_finalize()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Nathan Hjelm [mailto:hjelmn_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 21, 2014 8:01 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Cc: Yossi Etigin
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] barrier before calling del_procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should add that it is an rte barrier and not an MPI barrier for
</span><br>
<span class="quotelev1">&gt; technical reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 21, 2014 at 09:42:53AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    We already have an rte barrier before del procs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Sent from my iPhone
</span><br>
<span class="quotelev2">&gt; &gt;    On Jul 21, 2014, at 8:21 AM, Yossi Etigin &lt;yosefe_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      We get occasional hangs with MTL/MXM during finalize, because a
</span><br>
<span class="quotelev1">&gt; global
</span><br>
<span class="quotelev2">&gt; &gt;      synchronization is needed before calling del_procs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      e.g rank A may call del_procs() and disconnect from rank B, while
</span><br>
<span class="quotelev1">&gt; rank B
</span><br>
<span class="quotelev2">&gt; &gt;      is still working.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      What do you think about adding an MPI barrier on COMM_WORLD before
</span><br>
<span class="quotelev2">&gt; &gt;      calling del_procs()?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15204.php">http://www.open-mpi.org/community/lists/devel/2014/07/15204.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15206.php">http://www.open-mpi.org/community/lists/devel/2014/07/15206.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15208.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
