<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 10:15:54 2014" -->
<!-- isoreceived="20141112151554" -->
<!-- sent="Wed, 12 Nov 2014 15:15:34 +0000" -->
<!-- isosent="20141112151534" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="8761eklaax.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8E6FC616-4E1D-436F-A8C3-9069D6744068_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-11-12 10:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25770.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; You might also add the &#226;&#128;&#148;display-allocation flag to mpirun so we can
</span><br>
<span class="quotelev1">&gt; see what it thinks the allocation looks like. If there are only 16
</span><br>
<span class="quotelev1">&gt; slots on the node, it seems odd that OMPI would assign 32 procs to it
</span><br>
<span class="quotelev1">&gt; unless it thinks there is only 1 node in the job, and oversubscription
</span><br>
<span class="quotelev1">&gt; is allowed (which it won&#226;&#128;&#153;t be by default if it read the GE allocation)
</span><br>
<p>I think there's a problem with documentation at least not being
<br>
explicit, and it would really help to have it clarified unless I'm
<br>
missing some.
<br>
<p>Although there's probably more to it in this case, the behaviour seemed
<br>
consistent with what I deduced (without reading the code) from the doc,
<br>
ompi_info, and experiment that at least wasn't inconsistent:  the node
<br>
has 32 processing units, and the default allocation is by socket,
<br>
apparently round-robin within nodes.  I can't check the actual behaviour
<br>
in that case just now.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25770.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25768.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
