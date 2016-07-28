<?
$subject_val = "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 16:09:22 2015" -->
<!-- isoreceived="20150105210922" -->
<!-- sent="Mon, 5 Jan 2015 21:09:19 +0000" -->
<!-- isosent="20150105210919" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Possible outdated documentation on MPI_Isend()" -->
<!-- id="88D8AFAB-E83F-436E-A90D-56A80DF7C3AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF9AE2ED23.8B6862E7-ONC3257DC4.0031A02C-43257DC4.003306C6_at_ru.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Possible outdated documentation on MPI_Isend()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 16:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/02/0214.php">Maximilian: "[OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct -- thanks for the heads up!
<br>
<p><p>On Jan 5, 2015, at 4:17 AM, Alexander Pozdneev &lt;alexander.pozdneev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe, I've spotted an outdated statement in the documentation - the 
</span><br>
<span class="quotelev1">&gt; word &quot;ACCESS&quot; should be replaced with the word &quot;MODIFY&quot; in the man-page on 
</span><br>
<span class="quotelev1">&gt; MPI_Isend().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, the man-page on MPI_Isend() says: &quot;The sender should not ACCESS 
</span><br>
<span class="quotelev1">&gt; any part of the send buffer after a nonblocking send operation is called, 
</span><br>
<span class="quotelev1">&gt; until the send completes&quot;.
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Isend.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Isend.3.php</a> (Accessed Jan 05, 
</span><br>
<span class="quotelev1">&gt; 2015).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was true in MPI-2.1 and prior versions (mpi21-report.pdf, Section 
</span><br>
<span class="quotelev1">&gt; 3.7.2, page 52).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortunately, MPI-2.2 and further versions do not have this restriction: 
</span><br>
<span class="quotelev1">&gt; &quot;The sender should not MODIFY any part of the send buffer after a 
</span><br>
<span class="quotelev1">&gt; nonblocking send operation is called, until the send completes.&quot; 
</span><br>
<span class="quotelev1">&gt; (mpi22-report.pdf, Section 3.7.2, page 52)  
</span><br>
<span class="quotelev1">&gt; As stated in a changelog, &quot;The read access restriction on the send buffer 
</span><br>
<span class="quotelev1">&gt; for blocking, non blocking and collective API has been lifted. It is 
</span><br>
<span class="quotelev1">&gt; permitted to access for read the send buffer while the operation is in 
</span><br>
<span class="quotelev1">&gt; progress.&quot; (mpi22-report.pdf, Section B.1, item 5, page 593)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alexander Pozdneev
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/docs/2015/01/0213.php">http://www.open-mpi.org/community/lists/docs/2015/01/0213.php</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2015/02/0214.php">Maximilian: "[OMPI docs] Small note about MPI_Buffer_detach"</a>
<li><strong>Previous message:</strong> <a href="0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Alexander Pozdneev: "[OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
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
