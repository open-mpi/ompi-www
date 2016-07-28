<?
$subject_val = "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:10:53 2016" -->
<!-- isoreceived="20160317141053" -->
<!-- sent="Thu, 17 Mar 2016 14:10:35 +0000" -->
<!-- isosent="20160317141035" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems" -->
<!-- id="87d1qti49w.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="22A756AC-0175-469B-A008-4AB2410D032E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; That&#226;&#128;&#153;s an SGE error message - looks like your tmp file system on one
</span><br>
<span class="quotelev1">&gt; of the remote nodes is full.
</span><br>
<p>Yes; surely that just needs to be fixed, and I'd expect the host not to
<br>
accept jobs in that state.  It's not just going to break ompi.
<br>
<p><span class="quotelev1">&gt; We don&#226;&#128;&#153;t control where SGE puts its
</span><br>
<span class="quotelev1">&gt; files, but it might be that your backend nodes are having issues with
</span><br>
<span class="quotelev1">&gt; us doing a tree-based launch (i.e., where each backend daemon launches
</span><br>
<span class="quotelev1">&gt; more daemons along the tree).
</span><br>
<p>I doubt that's relevant.  You just need space for the SGE tmpdir, which
<br>
is where the ompi session directory will go, for instance.  Also, too
<br>
many things don't recognize TMPDIR and will fail if they can't write to
<br>
/tmp specifically, even if there's reason to avoid /tmp for tmpdir.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28730.php">Dave Love: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28720.php">Ralph Castain: "Re: [OMPI users] running OpenMPI jobs (either 1.10.1 or 1.8.7) on SoGE more problems"</a>
<!-- nextthread="start" -->
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
