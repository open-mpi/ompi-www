<?
$subject_val = "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 10:30:18 2015" -->
<!-- isoreceived="20150615143018" -->
<!-- sent="Mon, 15 Jun 2015 23:30:16 +0900" -->
<!-- isosent="20150615143016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing file &amp;quot;openmpi/ompi/mpi/f77/constants.h&amp;quot;" -->
<!-- id="CAAkFZ5uWcXSrzUGo-TbXTpkp1u3AWC4646w-=v62weEEp-6y=w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="877fr52jaj.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 10:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27136.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>In reply to:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>v1.6 is ok if configure'd with --with-devel-headers
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, June 15, 2015, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dave,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5">https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5</a>
</span><br>
<span class="quotelev2">&gt; &gt; broke Open MPI support for Open MPI 1.8 and above
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually it won't build with 1.6 either.  It seems to be trying to use
</span><br>
<span class="quotelev1">&gt; internal headers.  (It already needs internals of MPIs, of course.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I didn't think there was anything much added since the last
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; fedora 22 IPM is older that is why it works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh; I couldn't find it in Fedora, which is why I packaged it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Filipo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i made PR <a href="https://github.com/nerscadmin/IPM/pull/6">https://github.com/nerscadmin/IPM/pull/6</a>
</span><br>
<span class="quotelev2">&gt; &gt; at this stage, it is only possible to *not* handle MPI_IN_PLACE in
</span><br>
<span class="quotelev2">&gt; &gt; Fortran with Open MPI &gt; 1.6
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27134.php">http://www.open-mpi.org/community/lists/users/2015/06/27134.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27136.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>In reply to:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
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
