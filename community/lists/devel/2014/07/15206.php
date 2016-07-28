<?
$subject_val = "Re: [OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 13:10:59 2014" -->
<!-- isoreceived="20140721171059" -->
<!-- sent="Mon, 21 Jul 2014 17:10:56 +0000" -->
<!-- isosent="20140721171056" -->
<!-- name="Yossi Etigin" -->
<!-- email="yosefe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier before calling del_procs" -->
<!-- id="3857538fe5ae4e8785e7ed050a3fe88d_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140721170116.GD26882_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-07-21 13:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see. But in branch v1.8, in 31869, Ralph reverted the commit which moved del_procs after the barrier:
<br>
&nbsp;&nbsp;&quot;Revert r31851 until we can resolve how to close these leaks without causing the usnic BTL to fail during disconnect of intercommunicators
<br>
&nbsp;&nbsp;&nbsp;Refs #4643&quot;
<br>
Also, we need an rte barrier after del_procs - because otherwise rankA could call pml_finalize() before rankB finishes disconnecting from rankA.
<br>
<p>I think the order in finalize should be like this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. mpi_barrier(world)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. del_procs()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. rte_barrier()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. pml_finalize()
<br>
<p>-----Original Message-----
<br>
From: Nathan Hjelm [mailto:hjelmn_at_[hidden]] 
<br>
Sent: Monday, July 21, 2014 8:01 PM
<br>
To: Open MPI Developers
<br>
Cc: Yossi Etigin
<br>
Subject: Re: [OMPI devel] barrier before calling del_procs
<br>
<p>I should add that it is an rte barrier and not an MPI barrier for technical reasons.
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 21, 2014 at 09:42:53AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    We already have an rte barrier before del procs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;    On Jul 21, 2014, at 8:21 AM, Yossi Etigin &lt;yosefe_at_[hidden]&gt; wrote:
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
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15204.php">http://www.open-mpi.org/community/lists/devel/2014/07/15204.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15207.php">George Bosilca: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
