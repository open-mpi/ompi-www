<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 11:47:39 2010" -->
<!-- isoreceived="20100604154739" -->
<!-- sent="Fri, 4 Jun 2010 11:47:35 -0400" -->
<!-- isosent="20100604154735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="D449AA50-C8A1-4905-8305-1D6538BC0CBD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9A20A02-5E8E-420C-8D50-0F74C00E7D82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 11:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8050.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>In reply to:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8075.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 1:36 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev2">&gt; &gt; We did assume that at least the errors are symmetric, i.e. if A fails to connect to B then B will fail when trying to connect to A. However, if there are other BTL the connection is supposed to smoothly move over some other BTL. As an example in the MX BTL, if two nodes have MX support, but they do not share the same mapper the add_procs will silently fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sounds dodgy and icky.  We have to wait for a connect timeout to fail over to the next BTL?  How long is the typical/default TCP timeout?
</span><br>
<p>After thinking about this more, I still do not think that this is good behavior.
<br>
<p>Short version: 
<br>
--------------
<br>
<p>If a BTL is going to fail, it should do so early in the selection process and therefore disqualify itself.  Failing in add_procs() means that it lied in the selection process and has created a set of difficult implications for the rest of the job.
<br>
<p>Perhaps the best compromise is that there should be an MCA parameter to choose between a) the &quot;failover&quot; behavior that George described (i.e., wait for the timeout and then have the PML/BML fail over to a 2nd BTL, if available), and b) abort the job.
<br>
<p>More details:
<br>
-------------
<br>
<p>If a BTL has advertised contact information in the modex but then an error in add_procs() causes the BTL to not be able to listen at that advertised contact point, I think that this is a very serious error.  I see a few options:
<br>
<p>1. Current behavior supposedly has the PML fail over to another eligible BTL.  It's not entirely clear whether this functionality works or not, but even if it does, it can cause a lengthy &quot;hang&quot; *potentially for each connection* while we're waiting for the timeout before failing over to another connection.
<br>
<p>--&gt; IMHO: this behavior just invites user questions and bug reports.  It also is potentially quite expensive -- consider that in an MPI_ALLTOALL operation, every peer might have a substantial delay before it fails over to the secondary BTL.
<br>
<p>2. When a BTL detects that it cannot honor its advertised contact information, either the BTL or the BML can send a modex update to all of the process peers, effectively eliminating that contact information.  This kind of asynchronous update seems racy and difficult -- could be difficult to get this right (indeed, the modex doesn't even currently support an after-the-fact update).
<br>
<p>3. When a BTL detects that it cannot honor its advertised contact information, it fails upward to the BML and the BML decides to abort the job.  
<br>
<p>I think #2 is a bad idea.  I am leaning towards #3 simply because a BTL should not fail by the time it reaches add_procs().  If a BTL is going to fail, it should do so and disqualify itself earlier in the selection process.  Or, perhaps we can have an MCA parameter to switch between #1 and #3.
<br>
<p>Or maybe someone can think of a #4 that would be better...?
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
<li><strong>Next message:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8050.php">Ralph Castain: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>In reply to:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8052.php">Rolf vandeVaart: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8075.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
