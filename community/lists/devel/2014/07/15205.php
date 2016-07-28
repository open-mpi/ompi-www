<?
$subject_val = "Re: [OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 13:01:21 2014" -->
<!-- isoreceived="20140721170121" -->
<!-- sent="Mon, 21 Jul 2014 11:01:16 -0600" -->
<!-- isosent="20140721170116" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier before calling del_procs" -->
<!-- id="20140721170116.GD26882_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DEDA3F5E-B7D8-408E-B4A5-B0AEA96B45A5_at_gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 13:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should add that it is an rte barrier and not an MPI barrier for
<br>
technical reasons.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15204.php">http://www.open-mpi.org/community/lists/devel/2014/07/15204.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15205/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15204.php">Ralph Castain: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15206.php">Yossi Etigin: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
