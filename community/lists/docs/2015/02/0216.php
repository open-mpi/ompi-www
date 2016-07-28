<?
$subject_val = "Re: [OMPI docs] MPI_Ibarrier missing request argument";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 09:50:13 2015" -->
<!-- isoreceived="20150221145013" -->
<!-- sent="Sat, 21 Feb 2015 14:50:11 +0000" -->
<!-- isosent="20150221145011" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] MPI_Ibarrier missing request argument" -->
<!-- id="DBB7489F-F3DF-4D60-BDBC-6E2DE0419E70_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54E761EC.9020102_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] MPI_Ibarrier missing request argument<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-21 09:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I fixed it here:
<br>
<p><a href="https://github.com/open-mpi/ompi/commit/4c91bdfb0c106f66590aa20b245946dea4af6d61">https://github.com/open-mpi/ompi/commit/4c91bdfb0c106f66590aa20b245946dea4af6d61</a>
<br>
<p>And filed for it to be part of the next OMPI 1.8.x release:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/190">https://github.com/open-mpi/ompi-release/pull/190</a>
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 20, 2015, at 11:33 AM, Maximilian &lt;maxinator333_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At <a href="http://www.open-mpi.org/doc/v1.8/man3/MPI_Ibarrier.3.php">http://www.open-mpi.org/doc/v1.8/man3/MPI_Ibarrier.3.php</a> the second argument 'MPI_REQUEST request', like specified in e.g. MPI 3.0 Chapter 5.12.1 'MPI_IBARRIER(comm , request)', seems to be missing in all syntaxes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/docs/2015/02/0215.php">http://www.open-mpi.org/community/lists/docs/2015/02/0215.php</a>
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
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Maximilian: "[OMPI docs] MPI_Ibarrier missing request argument"</a>
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
