<?
$subject_val = "Re: [OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 16:25:56 2014" -->
<!-- isoreceived="20140507202556" -->
<!-- sent="Wed, 7 May 2014 20:25:55 +0000" -->
<!-- isosent="20140507202555" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO bug reading darrays" -->
<!-- id="F8EE16AB-78F6-4331-9368-ABF3D41F2CEA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAN+evm=HjCCrP5X+h9U47ncpsr9enPdKkc-8MzHDq-VUUsM9sw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ROMIO bug reading darrays<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 16:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24309.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2014, at 4:10 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Rob. I'll keep track of it over there. How often do updated versions of ROMIO get pulled over from MPICH into OpenMPI?
</span><br>
<p>&quot;Periodically&quot;.
<br>
<p>Hopefully, the fix will be small and we can just pull that one fix down to OMPI.
<br>
<p><span class="quotelev1">&gt; On a slightly related note, I think I heard that you had fixed the 32bit issues in ROMIO that were causing it to break when reading more than 2 GB (i.e. <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>). Have those been pulled into OpenMPI? I've been staying clear of ROMIO for a while (in favour of OMPIO), to avoid those issues.
</span><br>
<p>It looks like we have pulled the following past the ROMIO that was included in MPICH 3.0.4:
<br>
<p>Patches past 3.0.4: (Update whenever ROMIO is updated)
<br>
- Deal with endless ESTALE cases:
<br>
&nbsp;&nbsp;<a href="http://git.mpich.org/mpich.git/commit/b250d338e66667a8a1071a5f73a4151fd59f83b2">http://git.mpich.org/mpich.git/commit/b250d338e66667a8a1071a5f73a4151fd59f83b2</a>
<br>
- Fix compile error with Lustre 2.4
<br>
&nbsp;&nbsp;<a href="http://trac.mpich.org/projects/mpich/changeset/a0c4278f1400a73eb63c5106e2bd3b1">http://trac.mpich.org/projects/mpich/changeset/a0c4278f1400a73eb63c5106e2bd3b1</a>
<br>
a6565ad5a
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24309.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>In reply to:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24316.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
