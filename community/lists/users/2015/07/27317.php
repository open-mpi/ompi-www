<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 20:38:51 2015" -->
<!-- isoreceived="20150724003851" -->
<!-- sent="Fri, 24 Jul 2015 09:38:47 +0900" -->
<!-- isosent="20150724003847" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="55B18917.3090904_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87380en7cc.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 20:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>On 7/24/2015 1:53 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; ompio in 1.8 only has pvfs2 (== orangefs) and ufs support -- which might
</span><br>
<span class="quotelev1">&gt; be a good reason to use pvfs2.  You'll need an expert to say if you can
</span><br>
<span class="quotelev1">&gt; use ufs correctly over an nfs filesystem.  (I assume you are actually
</span><br>
<span class="quotelev1">&gt; picking up the romio nfs support.)
</span><br>
<p>on my system :
<br>
$ grep FILE_SYSTEM ./ompi/mca/io/romio/romio/config.status
<br>
S[&quot;FILE_SYSTEM&quot;]=&quot;testfs ufs nfs&quot;
<br>
<p>unless i am misunderstanding, nfs is there
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27318.php">Ralph Castain: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27315.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27351.php">Dave Love: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
