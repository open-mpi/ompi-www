<?
$subject_val = "Re: [OMPI users] Seg fault in MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 15:33:52 2015" -->
<!-- isoreceived="20151016193352" -->
<!-- sent="Fri, 16 Oct 2015 19:33:23 +0000" -->
<!-- isosent="20151016193323" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault in MPI_FINALIZE" -->
<!-- id="E173DECE-85F9-4F3F-A528-F6CDD68F983B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BN3PR09MB03693DBA03E49DFE75E493988E3D0_at_BN3PR09MB0369.namprd09.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Seg fault in MPI_FINALIZE<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 15:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27886.php">McGrattan, Kevin B. Dr.: "[OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27886.php">McGrattan, Kevin B. Dr.: "[OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 16, 2015, at 3:25 PM, McGrattan, Kevin B. Dr. &lt;kevin.mcgrattan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot nail this down any better because this happens like every other night, with about 1 out of a hundred jobs. Can anyone think of a reason why the job would seg fault in MPI_FINALIZE, but only under conditions where the jobs are tightly packed onto our cluster?
</span><br>
<p>There have been a bunch of fixes in the ORTE / MPI_FINALIZE areas of Open MPI since 1.8.4.
<br>
<p>Is there any chance you can upgrade to 1.8.8, or, better yet, 1.10.0?  (note that even though it's 1.10, it's actually effectively a continuation of the v1.8 series -- the v1.10 series does not represent a new fork from our development master -- see the full version/roadmap details here, if you're interested: <a href="http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap">http://blogs.cisco.com/performance/open-mpi-new-versioning-scheme-and-roadmap</a>).
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
<li><strong>Next message:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="27886.php">McGrattan, Kevin B. Dr.: "[OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="27886.php">McGrattan, Kevin B. Dr.: "[OMPI users] Seg fault in MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="27888.php">Nick Papior: "Re: [OMPI users] Seg fault in MPI_FINALIZE"</a>
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
