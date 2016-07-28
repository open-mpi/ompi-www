<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 18:47:43 2014" -->
<!-- isoreceived="20141113234743" -->
<!-- sent="Thu, 13 Nov 2014 23:47:27 +0000" -->
<!-- isosent="20141113234727" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="87389mmzn4.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="00B5C9AC-F64B-4260-8633-E84092B8D8EC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-13 18:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; I think there's a problem with documentation at least not being
</span><br>
<span class="quotelev2">&gt;&gt; explicit, and it would really help to have it clarified unless I'm
</span><br>
<span class="quotelev2">&gt;&gt; missing some.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not quite sure I understand this comment - the problem is that we
</span><br>
<span class="quotelev1">&gt; aren&#226;&#128;&#153;t correctly reading the allocation, as evidenced by when the user
</span><br>
<span class="quotelev1">&gt; ran with &#226;&#128;&#148;display-allocation. From what we can see, it looks like the
</span><br>
<span class="quotelev1">&gt; PE_HOSTFILE may be containing some unexpected characters that make us
</span><br>
<span class="quotelev1">&gt; think we hit EOF at the end of the first line, thus ignoring the
</span><br>
<span class="quotelev1">&gt; second node.
</span><br>
<p>I suspect that the environment variables Reuti listed are trashed, but
<br>
without printing the environment and the contents of $PE_HOSTFILE, it's
<br>
only a guess.
<br>
<p>But on the face of it (ignoring the diagnostics) the observed
<br>
&quot;oversubscription&quot; still seems consistent with what documentation there
<br>
is.  I can't see where it says what is the correct behaviour for the
<br>
mapping without the mpirun command specifying it.
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Although there's probably more to it in this case, the behaviour seemed
</span><br>
<span class="quotelev2">&gt;&gt; consistent with what I deduced (without reading the code) from the doc,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info, and experiment that at least wasn't inconsistent:  the node
</span><br>
<span class="quotelev2">&gt;&gt; has 32 processing units, and the default allocation is by socket,
</span><br>
<span class="quotelev2">&gt;&gt; apparently round-robin within nodes.  I can't check the actual behaviour
</span><br>
<span class="quotelev2">&gt;&gt; in that case just now.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25809.php">Gilles Gouaillardet: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25807.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
