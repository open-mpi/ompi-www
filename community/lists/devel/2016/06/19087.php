<?
$subject_val = "[OMPI devel] Jenkins testing - what purpose are we striving to achieve?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:33:44 2016" -->
<!-- isoreceived="20160607193344" -->
<!-- sent="Tue, 7 Jun 2016 12:33:40 -0700" -->
<!-- isosent="20160607193340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Jenkins testing - what purpose are we striving to achieve?" -->
<!-- id="E1500B3C-A855-43EE-9B8F-D812CE4B278E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Jenkins testing - what purpose are we striving to achieve?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 15:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I&#226;&#128;&#153;m trying to get a handle on our use of Jenkins testing for PRs prior to committing them. When we first discussed this, it was my impression that our objective was to screen PRs to catch any errors caused by differences in environment and to avoid regressions. However, it appears that the tests keep changing without warning, leading to the impression that we are using Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157; testing device.
<br>
<p>So I think we need to come to consensus on the purpose of the Jenkins testing. If it is to screen for regressions, then the tests need to remain stable. A PR that does not introduce any new problems might not address old ones, but that is no reason to flag it as an &#226;&#128;&#156;error&#226;&#128;&#157;.
<br>
<p>On the other hand, if the objective is to use Jenkins as a &#226;&#128;&#156;mini-MTT&#226;&#128;&#157;, then we need to agree on how/when a PR is ready to be merged. Insisting that nothing be merged until even a mini-MTT is perfectly clean is probably excessively prohibitive - it would require that the entire community (and not just the one proposing the PR) take responsibility for cleaning up the code base against any and all imposed tests.
<br>
<p>So I would welcome opinions on this: are we using Jenkins as a screening tool on changes, or as a test for overall correctness of the code base?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Previous message:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<li><strong>Reply:</strong> <a href="19088.php">Howard Pritchard: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
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
