<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 16:05:25 2016" -->
<!-- isoreceived="20160627200525" -->
<!-- sent="Mon, 27 Jun 2016 20:05:22 +0000" -->
<!-- isosent="20160627200522" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="F3C2AB71-51F8-4FB8-B191-FE508846E422_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="57717D7D.6010707_at_inria.fr" -->
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
<strong>Date:</strong> 2016-06-27 16:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29552.php">Audet, Martin: "[OMPI users] Experience with MXM, yalla, FCA and HCOLL with Mellanox HCA ?"</a>
<li><strong>Previous message:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice: good to know.
<br>
<p>Martin: yes, we should update README.  Thanks for the heads up.
<br>
<p><p><span class="quotelev1">&gt; On Jun 27, 2016, at 3:24 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mlock() and mlockall() only guarantee that pages won't be swapped out to the disk. However, they don't prevent virtual pages from moving to other physical pages (for instance during migration between NUMA nodes), which breaks memory registration. At least this was true a couple years ago, I didn't check recently, but I would be surprised if that semantics changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 27/06/2016 21:17, Audet, Martin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jeff and Alex for your answers and comments.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; mlockall(), especially with the MCL_FUTURE argument is indeed interesting.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Jeff for your clarification of what memory registration really means (e.g. locking and telling the network stack the virtual to physical mapping).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Also concerning the ummunotify kernel module, I would like to point out that while the link sent to github bug report suggests it is problematic, the top level Open MPI README file still recommends it. Should the README file need to be updated ?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Martin Audet
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29549.php">http://www.open-mpi.org/community/lists/users/2016/06/29549.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29550.php">http://www.open-mpi.org/community/lists/users/2016/06/29550.php</a>
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
<li><strong>Next message:</strong> <a href="29552.php">Audet, Martin: "[OMPI users] Experience with MXM, yalla, FCA and HCOLL with Mellanox HCA ?"</a>
<li><strong>Previous message:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29550.php">Brice Goglin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
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
