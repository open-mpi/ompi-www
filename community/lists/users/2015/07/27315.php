<?
$subject_val = "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 12:53:48 2015" -->
<!-- isoreceived="20150723165348" -->
<!-- sent="Thu, 23 Jul 2015 17:53:39 +0100" -->
<!-- isosent="20150723165339" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)" -->
<!-- id="87380en7cc.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9426C51C-850E-4D86-9461-A4AF9041CAD7_at_aia.rwth-aachen.de" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-23 12:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Schlottke-Lakemper, Michael&quot; &lt;m.schlottke-lakemper_at_[hidden]&gt;
<br>
writes:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's probably not a good idea.  Have you read about NFS in the romio
</span><br>
<span class="quotelev2">&gt;&gt; README?  It's old, but as far as I know, it's still relevant for NFS3.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe Rob Latham will see this and be able to comment on NFS4.
</span><br>
<span class="quotelev1">&gt; No, are you referring to the file
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.7/ompi/mca/io/romio/romio/README? The only hint they give
</span><br>
<span class="quotelev1">&gt; is that they suggest to use the &#226;&#128;&#156;noac&#226;&#128;&#157; option, which according to the
</span><br>
<span class="quotelev1">&gt; manpages should not affect file contents but rather file attributes
</span><br>
<span class="quotelev1">&gt; only (if I understand it correctly). Or do you think it would still be
</span><br>
<span class="quotelev1">&gt; worth trying? By the way, we are using NFSv3.
</span><br>
<p>As far as I remember, you need &quot;noac&quot; and &quot;sync&quot;, but I've never tried.
<br>
We couldn't afford to run with the relevant options anyway after it
<br>
emerged there was requirement for MPI-IO on a new system here.  It was
<br>
just a warning about NFS in general before an expert speaks up, and I'm
<br>
surprised it worked OK previously.
<br>
<p><span class="quotelev2">&gt;&gt; It seems to me that building for NFS by default is a mistake.
</span><br>
<span class="quotelev1">&gt; Can you tell me the correct flags I need to provide at configure-time?
</span><br>
<p>I think the romio flags are fairly obvious from
<br>
&nbsp;&nbsp;./configure --help=recursive
<br>
but I doubt that would help unless you have a parallel filesystem
<br>
available.  (You can set up orangefs on the fly on compute node local
<br>
disks and copy results off at the end of a job, if that's any help.)
<br>
<p>I meant that I think you should have to configure NFS explicitly, with a
<br>
warning.  Having it as a default gives the impression it will just work.
<br>
I _think_ the default is or was &quot;ufs,nfs&quot; -- apologies if I mis-remember.
<br>
<p><span class="quotelev1">&gt; Or where I can find more information about that (there does not seem
</span><br>
<span class="quotelev1">&gt; to be anything about configure flags in the above-mentioned
</span><br>
<span class="quotelev1">&gt; README). Also, as Gilles (see other mail in thread) suggested, I am
</span><br>
<span class="quotelev1">&gt; not sure whether we use romio or ompio, but I do not know how to find
</span><br>
<span class="quotelev1">&gt; out.
</span><br>
<p>ompio in 1.8 only has pvfs2 (== orangefs) and ufs support -- which might
<br>
be a good reason to use pvfs2.  You'll need an expert to say if you can
<br>
use ufs correctly over an nfs filesystem.  (I assume you are actually
<br>
picking up the romio nfs support.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27316.php">Dave Love: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27314.php">m.delorme_at_[hidden]: "Re: [OMPI users] SGE segfaulting with OpenMPI 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27309.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>Reply:</strong> <a href="27317.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
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
