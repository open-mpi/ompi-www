<?
$subject_val = "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 08:45:04 2011" -->
<!-- isoreceived="20110224134504" -->
<!-- sent="Thu, 24 Feb 2011 08:44:59 -0500" -->
<!-- isosent="20110224134459" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RoCE (IBoE) &amp;amp; OpenMPI" -->
<!-- id="DA43C838-70FD-4547-92DA-E4C80D08E276_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=pT6OwJGs92_QurHCmb7FbZL9oUda1Q3MuAPgS_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 08:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15725.php">Jeff Squyres: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2011, at 8:00 AM, Michael Shuey wrote:
<br>
<p><span class="quotelev1">&gt; Late yesterday I did have a chance to test the patch Jeff provided
</span><br>
<span class="quotelev1">&gt; (against 1.4.3 - testing 1.5.x is on the docket for today).  While it
</span><br>
<span class="quotelev1">&gt; works, in that I can specify a gid_index,
</span><br>
<p>Great!  I'll commit that to the trunk and start the process of moving it to the v1.5.x series (I know you haven't tested it yet, but it's essentially the same patch, just slightly adjusted for each of the 3 branches).
<br>
<p><span class="quotelev1">&gt; it doesn't do everything
</span><br>
<span class="quotelev1">&gt; required - my traffic won't match a lossless CoS on the ethernet
</span><br>
<span class="quotelev1">&gt; switch.  Specifying a GID is only half of it; I really need to also
</span><br>
<span class="quotelev1">&gt; specify a service level.
</span><br>
<p>RoCE requires the use of the RDMA CM (I think?), and I didn't think there was a way to request a specific SL via the RDMA CM...?  (I could certainly be wrong here)
<br>
<p>I think Mellanox will need to follow up with these questions...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15727.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15725.php">Jeff Squyres: "Re: [OMPI users] nonblock alternative to MPI_Win_complete"</a>
<li><strong>In reply to:</strong> <a href="15721.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15767.php">Michael Shuey: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
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
