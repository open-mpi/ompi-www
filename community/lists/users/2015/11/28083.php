<?
$subject_val = "[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 09:19:52 2015" -->
<!-- isoreceived="20151120141952" -->
<!-- sent="Fri, 20 Nov 2015 14:19:47 +0000" -->
<!-- isosent="20151120141947" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)" -->
<!-- id="878u5sg3cs.fsf_-__at_pc102091.liv.ac.uk" -->
<!-- inreplyto="1852321.UKbvTmxxiX_at_stikine" -->
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
<strong>Subject:</strong> [OMPI users] local directory for shmem etc. (was: help understand unhelpful ORTE error message)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 09:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Martin Siegert &lt;siegert_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; In particular, is there a way to cause shm to not use the global
</span><br>
<span class="quotelev2">&gt;&gt; filesystem?  I see this issue comes up a lot and I read the list archives,
</span><br>
<span class="quotelev2">&gt;&gt; but the warning message (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/">https://github.com/hpc/cce-mpi-openmpi-1.6.4/blob/master/ompi/mca/common/sm/</a>
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-common-sm.txt) suggested that I could override it by setting 
</span><br>
<span class="quotelev1">&gt; TMP,
</span><br>
<span class="quotelev2">&gt;&gt; TEMP or TEMPDIR, which I did to no avail.
</span><br>
<p>[Why look at such an old version?]
<br>
<p><span class="quotelev1">&gt; From my experience on edison: the one environment variable that does 
</span><br>
<span class="quotelev1">&gt; works is TMPDIR - the one that is not listed in the error message :-)
</span><br>
<p>It's a tyepo -- see routine opal_tmp_directory.
<br>
<p>I don't know about other resource managers, but SGE sets TMPDIR to a
<br>
job-specific directory.  OMPI creates mmap files there, inter alia,
<br>
unless told otherwise by MCA orte_tmpdir_base or something more
<br>
specific.  [You probably don't want to follow our vendor's
<br>
orte_tmpdir_base=/dev/shm...]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28084.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28063.php">Martin Siegert: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28082.php">Dave Love: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
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
