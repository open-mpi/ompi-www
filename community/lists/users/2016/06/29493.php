<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 21 09:54:10 2016" -->
<!-- isoreceived="20160621135410" -->
<!-- sent="Tue, 21 Jun 2016 13:53:57 +0000" -->
<!-- isosent="20160621135357" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="746C6F02-3090-4B6B-BD18-F9BA71D79A59_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0B97558E6915A6419306E91FD1DACA0E5AFF8FA310_at_NRCCENMB1.nrc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-21 09:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29494.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 20, 2016, at 4:15 PM, Audet, Martin &lt;Martin.Audet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But now since we have to live with memory registration issues, what changes should be done to standard Linux distro so that Open MPI can best use a recent Mellanox Infiniband network ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess that installing the ummunotify kernel module is a good idea ?
</span><br>

<br>
There may be some bit rot in our ummunotify support in Open MPI.  Ah yes, here it is:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/429">https://github.com/open-mpi/ompi/issues/429</a>
<br>

<br>
We haven't dug into the problem because ummunotify isn't upstream, and no one has apparently been using it.  If someone had some cycles to look into it, that would be great.
<br>

<br>
<span class="quotelev1">&gt; Maybe also removing the limits on the &#226;&#128;&#156;max locked memory&#226;&#128;&#157; (ulimit -l) is also good ? 
</span><br>

<br>
That's what most OS-bypass vendors recommend.
<br>

<br>
<span class="quotelev1">&gt; Beside that, I guess that installing the latest OFED (to have the latest middleware) instead of using the default one coming with the Linux distro is a good idea ?
</span><br>

<br>
There's different religion surrounding that -- I believe there was some good discussion about that topic on the user's list recently.
<br>

<br>
<span class="quotelev1">&gt; Also does the XPMEM kernel module for more efficient intra node transfer of large message worth installing since kernels now include the CMA API ?
</span><br>

<br>
Yes, XPMEM == goodness.  I know that Vader supports both XPMEM and CMA; I don't know offhand the tradeoffs between the two.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29494.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<li><strong>Previous message:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
