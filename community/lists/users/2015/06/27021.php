<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 17:09:10 2015" -->
<!-- isoreceived="20150601210910" -->
<!-- sent="Mon, 1 Jun 2015 14:09:05 -0700" -->
<!-- isosent="20150601210905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="6F3D8287-C3B1-4695-8CD0-B156D5D0F685_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="60C13EF4-F84F-4FED-82F8-444C0868727C_at_nrl.navy.mil" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 17:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This probably isn&#146;t very helpful, but fwiw: we added an automatic &#147;fingerprint&#148; capability in the later OMPI versions just to detect things like this. If the fingerprint of a backend node doesn&#146;t match the head node, we automatically assume hetero-nodes. It isn&#146;t foolproof, but it would have picked this one up.
<br>
<p>Sorry you had that trouble.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jun 1, 2015, at 1:53 PM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 30, 2015, at 1:16 PM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 30, 2015, at 12:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The planning is pretty simple: at startup, mpirun launches a daemon on each node. If &#151;hetero-nodes is provided, each daemon returns the topology discovered by hwloc - otherwise, only the first daemon does. Mpirun then assigns procs to each node in a round-robin fashion (assuming you haven&#146;t told it something different).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that I&#146;ve solved my problem, I thought I&#146;d summarize it on the list, as a cautionary tale.  I&#146;d like to thank everyone who helped me, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically, this information from Ralph should have clued me in, but didn&#146;t.  It turns out that the nodes were only _supposed_ to be identical, so I thought the &#151;hetero-nodes things is irrelevant.   As it happens, hyperthreading got turned on on one of the nodes.  When that node was the head node, the binding mask assumed 32 (HT) cores, and when it got to a node that only had 16 (real) cores, and no HT, it failed.  Turning off HT on that one rogue node fixed the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things that helped make this hard to debug:
</span><br>
<span class="quotelev1">&gt; 1. The node that was problematic was not the one that failed.  The node next to it (since our scheduler by default assigns adjacent nodes) is the one that claimed to fail. This is just the nature of the problem.
</span><br>
<span class="quotelev1">&gt; 2. Openmpi&#146;s bindings listing appears to happen only after the binding is complete, or maybe just the output fails to be flushed, since I never got output (with hwloc_report_binding) from the node that was actually failing to bind.  And I didn&#146;t know the format of the reported binding, so I didn&#146;t know that &#147;BB&#148; meant both HT virtual cores bound, and all the numbers (on the HT node with 32 virtual cores) were 0-15, not 0-31.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, problem solved, and thanks again for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 										Noam_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27020.php">http://www.open-mpi.org/community/lists/users/2015/06/27020.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="27020.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="27022.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
