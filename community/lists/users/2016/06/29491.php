<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 16:27:54 2016" -->
<!-- isoreceived="20160620202754" -->
<!-- sent="Mon, 20 Jun 2016 23:27:52 +0300" -->
<!-- isosent="20160620202752" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="559690AE95344283AFCE94C19806723D_at_chem.msu.ru" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-20 16:27:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Would be the use of  mlockall helpful for this approach?
<br>
<p>From: Audet, Martin 
<br>
Sent: Monday, June 20, 2016 11:15 PM
<br>
To: mailto:users_at_[hidden] 
<br>
Subject: Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?
<br>
<p>Thanks Jeff for your answer.
<br>
<p>It is sad that the approach I mentioned of having all memory registered for user process on cluster nodes didn&#226;&#128;&#153;t become more popular.
<br>
<p>I still believe that such an approach would shorten the executed code path in MPI libraries, reduce message latency, increase the communication/computation overlap potential and allows communication progress more naturally.
<br>
<p>But now since we have to live with memory registration issues, what changes should be done to standard Linux distro so that Open MPI can best use a recent Mellanox Infiniband network ?
<br>
<p>I guess that installing the ummunotify kernel module is a good idea ?
<br>
<p>Maybe also removing the limits on the &#226;&#128;&#156;max locked memory&#226;&#128;&#157; (ulimit -l) is also good ? 
<br>
<p>Beside that, I guess that installing the latest OFED (to have the latest middleware) instead of using the default one coming with the Linux distro is a good idea ?
<br>
<p>Also does the XPMEM kernel module for more efficient intra node transfer of large message worth installing since kernels now include the CMA API ?
<br>
<p>Thanks,
<br>
<p>Martin Audet
<br>
<p><p><p>--------------------------------------------------------------------------------
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29490.php">http://www.open-mpi.org/community/lists/users/2016/06/29490.php</a>
<br>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>In reply to:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
<li><strong>Reply:</strong> <a href="29492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Avoiding the memory registration costs by having	memory always registered, is it possible with Linux ?"</a>
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
