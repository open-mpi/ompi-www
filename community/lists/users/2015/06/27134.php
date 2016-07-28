<?
$subject_val = "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 09:27:49 2015" -->
<!-- isoreceived="20150615132749" -->
<!-- sent="Mon, 15 Jun 2015 14:27:48 +0100" -->
<!-- isosent="20150615132748" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing file &amp;quot;openmpi/ompi/mpi/f77/constants.h&amp;quot;" -->
<!-- id="877fr52jaj.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="557E931D.30003_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 09:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27131.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Reply:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5">https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5</a>
</span><br>
<span class="quotelev1">&gt; broke Open MPI support for Open MPI 1.8 and above
</span><br>
<p>Actually it won't build with 1.6 either.  It seems to be trying to use
<br>
internal headers.  (It already needs internals of MPIs, of course.)
<br>
<p>Sorry, I didn't think there was anything much added since the last
<br>
release.
<br>
<p><span class="quotelev1">&gt; fedora 22 IPM is older that is why it works
</span><br>
<p>Oh; I couldn't find it in Fedora, which is why I packaged it.
<br>
<p><span class="quotelev1">&gt; Filipo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made PR <a href="https://github.com/nerscadmin/IPM/pull/6">https://github.com/nerscadmin/IPM/pull/6</a>
</span><br>
<span class="quotelev1">&gt; at this stage, it is only possible to *not* handle MPI_IN_PLACE in
</span><br>
<span class="quotelev1">&gt; Fortran with Open MPI &gt; 1.6
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27133.php">Dave Love: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27131.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Reply:</strong> <a href="27135.php">Gilles Gouaillardet: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
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
