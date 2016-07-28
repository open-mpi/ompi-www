<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:54:18 2012" -->
<!-- isoreceived="20120302195418" -->
<!-- sent="Fri, 2 Mar 2012 14:54:13 -0500" -->
<!-- isosent="20120302195413" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="062872F5-D1BB-4F5F-A614-29B858055897_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B798CB5-1374-4BDC-9451-562D0C911562_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 14:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2012, at 2:50 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Ralph and I just had a phone conversation about this.  We consider it a bug -- you shouldn't need to put --prefix in the app file.  Meaning: --prefix is currently being ignored if you use an app file (and therefore you have to put --prefix in the app file).  We're going to fix that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Updated in the developer's trunk. I don't think we'll bring this to the 1.5 branch, though I leave that up to Jeff.
</span><br>
<p><p>Actually, I think we should.  This way, the unexpected behavior of --prefix / absolute mpirun path name being dropped won't be in the entire 1.6 series.
<br>
<p>Ralph -- can you CMR this?
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
<li><strong>Next message:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="18673.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18676.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
