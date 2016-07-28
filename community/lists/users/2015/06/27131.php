<?
$subject_val = "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 04:56:03 2015" -->
<!-- isoreceived="20150615085603" -->
<!-- sent="Mon, 15 Jun 2015 17:55:57 +0900" -->
<!-- isosent="20150615085557" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing file &amp;quot;openmpi/ompi/mpi/f77/constants.h&amp;quot;" -->
<!-- id="557E931D.30003_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="87y4jq2pm8.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 04:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27132.php">Ralph Castain: "Re: [OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>Previous message:</strong> <a href="27130.php">Lane, William: "[OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>In reply to:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Reply:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>commit 
<br>
<a href="https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5">https://github.com/nerscadmin/IPM/commit/8f628dadc502b3e0113d6ab3075bf66b107f07e5</a>
<br>
broke Open MPI support for Open MPI 1.8 and above
<br>
<p>fedora 22 IPM is older that is why it works
<br>
<p>Filipo,
<br>
<p>i made PR <a href="https://github.com/nerscadmin/IPM/pull/6">https://github.com/nerscadmin/IPM/pull/6</a>
<br>
at this stage, it is only possible to *not* handle MPI_IN_PLACE in 
<br>
Fortran with Open MPI &gt; 1.6
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/12/2015 1:09 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI experts,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am rebuilding IPM (<a href="https://github.com/nerscadmin/ipm">https://github.com/nerscadmin/ipm</a>) based on OpenMPI 1.8.5. However, despite OMPI is compiled with the &quot;--with-devel-headers&quot; option, IPM build fails because the file &quot;openmpi/ompi/mpi/f77/constants.h&quot; is missing
</span><br>
<span class="quotelev1">&gt; Which version of IPM?  2.0.3 plus irrelevant patches builds against
</span><br>
<span class="quotelev1">&gt; Fedora 22's openmpi-1.8.4:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://copr.fedoraproject.org/coprs/loveshack/livhpc/build/97971/">http://copr.fedoraproject.org/coprs/loveshack/livhpc/build/97971/</a>&gt;.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27097.php">http://www.open-mpi.org/community/lists/users/2015/06/27097.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27132.php">Ralph Castain: "Re: [OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>Previous message:</strong> <a href="27130.php">Lane, William: "[OMPI users] OpenMPI stable 1.8.6 release date?"</a>
<li><strong>In reply to:</strong> <a href="27097.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Reply:</strong> <a href="27134.php">Dave Love: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
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
