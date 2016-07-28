<?
$subject_val = "Re: [OMPI devel] barrier before calling del_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 12:43:08 2014" -->
<!-- isoreceived="20140721164308" -->
<!-- sent="Mon, 21 Jul 2014 09:42:53 -0700" -->
<!-- isosent="20140721164253" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier before calling del_procs" -->
<!-- id="DEDA3F5E-B7D8-408E-B4A5-B0AEA96B45A5_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="641b8a75bf3644d3a7909250adc799e9_at_DB3PR05MB427.eurprd05.prod.outlook.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 12:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We already have an rte barrier before del procs
<br>
<p><p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Jul 21, 2014, at 8:21 AM, Yossi Etigin &lt;yosefe_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We get occasional hangs with MTL/MXM during finalize, because a global synchronization is needed before calling del_procs.
</span><br>
<span class="quotelev1">&gt; e.g rank A may call del_procs() and disconnect from rank B, while rank B is still working.
</span><br>
<span class="quotelev1">&gt; What do you think about adding an MPI barrier on COMM_WORLD before calling del_procs()?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Previous message:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<li><strong>In reply to:</strong> <a href="15203.php">Yossi Etigin: "[OMPI devel] barrier before calling del_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
<li><strong>Reply:</strong> <a href="15205.php">Nathan Hjelm: "Re: [OMPI devel] barrier before calling del_procs"</a>
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
