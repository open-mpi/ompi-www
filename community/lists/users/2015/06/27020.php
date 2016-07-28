<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 16:53:46 2015" -->
<!-- isoreceived="20150601205346" -->
<!-- sent="Mon, 1 Jun 2015 16:53:40 -0400" -->
<!-- isosent="20150601205340" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="60C13EF4-F84F-4FED-82F8-444C0868727C_at_nrl.navy.mil" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E4B39EA3-CA4B-49E7-9D4E-8346628A721D_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] new hwloc error<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 16:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 30, 2015, at 1:16 PM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2015, at 12:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The planning is pretty simple: at startup, mpirun launches a daemon on each node. If &#151;hetero-nodes is provided, each daemon returns the topology discovered by hwloc - otherwise, only the first daemon does. Mpirun then assigns procs to each node in a round-robin fashion (assuming you haven&#146;t told it something different).
</span><br>
<p>Now that I&#146;ve solved my problem, I thought I&#146;d summarize it on the list, as a cautionary tale.  I&#146;d like to thank everyone who helped me, too.
<br>
<p>Basically, this information from Ralph should have clued me in, but didn&#146;t.  It turns out that the nodes were only _supposed_ to be identical, so I thought the &#151;hetero-nodes things is irrelevant.   As it happens, hyperthreading got turned on on one of the nodes.  When that node was the head node, the binding mask assumed 32 (HT) cores, and when it got to a node that only had 16 (real) cores, and no HT, it failed.  Turning off HT on that one rogue node fixed the problem.
<br>
<p>Things that helped make this hard to debug:
<br>
1. The node that was problematic was not the one that failed.  The node next to it (since our scheduler by default assigns adjacent nodes) is the one that claimed to fail. This is just the nature of the problem.
<br>
2. Openmpi&#146;s bindings listing appears to happen only after the binding is complete, or maybe just the output fails to be flushed, since I never got output (with hwloc_report_binding) from the node that was actually failing to bind.  And I didn&#146;t know the format of the reported binding, so I didn&#146;t know that &#147;BB&#148; meant both HT virtual cores bound, and all the numbers (on the HT node with 32 virtual cores) were 0-15, not 0-31.
<br>
<p>Anyway, problem solved, and thanks again for the help.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27020/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/04/26803.php">Noam Bernstein: "[OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="27021.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
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
