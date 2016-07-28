<?
$subject_val = "[OMPI devel] oshmem test suite errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 10:10:44 2014" -->
<!-- isoreceived="20140220151044" -->
<!-- sent="Thu, 20 Feb 2014 15:10:43 +0000" -->
<!-- isosent="20140220151043" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem test suite errors" -->
<!-- id="811AABED-D008-402A-903E-26046D757B66_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem test suite errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 10:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Previous message:</strong> <a href="14190.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14197.php">Brian Barrett: "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For all of these, I'm using the openshmem test suite that is now committed to the ompi-svn SVN repo.  I don't know if the errors are with the tests or with oshmem itself.
<br>
<p>1. I'm running the oshmem test suite at 32 processes across 2 16-core servers.  I'm seeing a segv in &quot;examples/shmem_2dheat.x 10 10&quot;.  It seems to run fine at lower np values such as 2, 4, and 8; I didn't try to determine where the crossover to badness occurs.
<br>
<p>2. &quot;examples/adjacent_32bit_amo.x 10 10&quot; seems to hang with both tcp and usnic BTLs, even when running at np=2 (I let it run for several minutes before killing it).
<br>
<p>3. Ditto for &quot;example/ptp.x 10 10&quot;.
<br>
<p>4. &quot;examples/shmem_matrix.x 10 10&quot; seems to run fine at np=32 on usnic, but hangs with TCP (i.e., I let it run for 8+ minutes before killing it -- perhaps it would have finished eventually?).
<br>
<p>...there's more results (more timeouts and more failures), but they're not yet complete, and I've got to keep working on my own features for v1.7.5, so I need to move to other things right now.
<br>
<p>I think I have oshmem running well enough to add these to Cisco's nightly MTT runs now, so the results will start showing up there without needing my manual attention.
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
<li><strong>Next message:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Previous message:</strong> <a href="14190.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14197.php">Brian Barrett: "Re: [OMPI devel] oshmem test suite errors"</a>
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
