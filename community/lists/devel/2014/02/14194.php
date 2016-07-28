<?
$subject_val = "Re: [OMPI devel] oshmem test suite errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 10:44:04 2014" -->
<!-- isoreceived="20140220154404" -->
<!-- sent="Thu, 20 Feb 2014 15:44:03 +0000" -->
<!-- isosent="20140220154403" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem test suite errors" -->
<!-- id="79030388-165D-4CFF-905C-56E9620E81CC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="146F03CB-A2BE-44F5-B188-FB15CCC8FD38_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem test suite errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 10:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>In reply to:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I've added them to my Cisco MTT ini files in the ompi-svn repo.  Look in cisco/mtt/usnic/usnic-trunk.ini and usnic-v1.7.ini.
<br>
<p>All relevant sections have &quot;oshmem&quot; in them.
<br>
<p>Most are copied from the Mellanox examples, but I made a few tweaks/improvements here and there.  I also anticipate adjusting some of the timeouts as we get a few MTT oshmem runs done in some of the sections for some longer-running tests (at np=32 and possibly 64).
<br>
<p><p>On Feb 20, 2014, at 10:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could you send along the relevant mtt .ini sections?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2014, at 7:10 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For all of these, I'm using the openshmem test suite that is now committed to the ompi-svn SVN repo.  I don't know if the errors are with the tests or with oshmem itself.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I'm running the oshmem test suite at 32 processes across 2 16-core servers.  I'm seeing a segv in &quot;examples/shmem_2dheat.x 10 10&quot;.  It seems to run fine at lower np values such as 2, 4, and 8; I didn't try to determine where the crossover to badness occurs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. &quot;examples/adjacent_32bit_amo.x 10 10&quot; seems to hang with both tcp and usnic BTLs, even when running at np=2 (I let it run for several minutes before killing it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Ditto for &quot;example/ptp.x 10 10&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. &quot;examples/shmem_matrix.x 10 10&quot; seems to run fine at np=32 on usnic, but hangs with TCP (i.e., I let it run for 8+ minutes before killing it -- perhaps it would have finished eventually?).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...there's more results (more timeouts and more failures), but they're not yet complete, and I've got to keep working on my own features for v1.7.5, so I need to move to other things right now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think I have oshmem running well enough to add these to Cisco's nightly MTT runs now, so the results will start showing up there without needing my manual attention.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Previous message:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>In reply to:</strong> <a href="14193.php">Ralph Castain: "Re: [OMPI devel] oshmem test suite errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
<li><strong>Reply:</strong> <a href="14195.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem test suite errors"</a>
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
