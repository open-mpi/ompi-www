<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 15:24:48 2016" -->
<!-- isoreceived="20160627192448" -->
<!-- sent="Mon, 27 Jun 2016 21:24:45 +0200" -->
<!-- isosent="20160627192445" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="57717D7D.6010707_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0B97558E6915A6419306E91FD1DACA0E5AFF9AF7C1_at_NRCCENMB1.nrc.ca" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-27 15:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mlock() and mlockall() only guarantee that pages won't be swapped out to
<br>
the disk. However, they don't prevent virtual pages from moving to other
<br>
physical pages (for instance during migration between NUMA nodes), which
<br>
breaks memory registration. At least this was true a couple years ago, I
<br>
didn't check recently, but I would be surprised if that semantics changed.
<br>
<p>Brice
<br>
<p><p><p>Le 27/06/2016 21:17, Audet, Martin a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks Jeff and Alex for your answers and comments.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mlockall(), especially with the MCL_FUTURE argument is indeed interesting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks Jeff for your clarification of what memory registration really
</span><br>
<span class="quotelev1">&gt; means (e.g. locking and telling the network stack the virtual to
</span><br>
<span class="quotelev1">&gt; physical mapping).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Also concerning the ummunotify kernel module, I would like to point
</span><br>
<span class="quotelev1">&gt; out that while the link sent to github bug report suggests it is
</span><br>
<span class="quotelev1">&gt; problematic, the top level Open MPI README file still recommends it.
</span><br>
<span class="quotelev1">&gt; Should the README file need to be updated ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Martin Audet
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29549.php">http://www.open-mpi.org/community/lists/users/2016/06/29549.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29549.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
