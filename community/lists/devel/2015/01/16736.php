<?
$subject_val = "[OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 11:44:46 2015" -->
<!-- isoreceived="20150106164446" -->
<!-- sent="Tue, 6 Jan 2015 09:44:45 -0700" -->
<!-- isosent="20150106164445" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="20150106164445.GB1467_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove --disable-smp-locks<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 11:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Remove the --disable-smp-locks configure option from master.
<br>
<p>Why: Use of this option produces incorrect results/undefined behavior
<br>
when any shared memory BTL is in use. Since BTL usage is enabled even
<br>
when using cm for point-to-point this option can never be safely used.
<br>
<p>When: Thurs, Jan 6, 2015
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16736/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16735.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19178.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
