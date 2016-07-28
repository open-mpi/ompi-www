<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  4 07:41:36 2011" -->
<!-- isoreceived="20110704114136" -->
<!-- sent="Mon, 4 Jul 2011 07:41:29 -0400" -->
<!-- isosent="20110704114129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="541B0308-C346-4368-A0FA-5F1CA1432BEE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zkkuq3nv.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-04 07:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9469.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9467.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 3, 2011, at 8:40 PM, Kawashima wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Does your llp sed path order MPI matching ordering?  Eg if some prior isend is already queued, could the llp send overtake it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, LLP send may overtake queued isend.
</span><br>
<span class="quotelev1">&gt; But we use correct PML send_sequence. So the LLP message is queued as
</span><br>
<span class="quotelev1">&gt; unexpected message on receiver side, and I think it's no problem.
</span><br>
<p>Good!  I just wanted to ask because I couldn't quite tell from your prior description.
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
<li><strong>Next message:</strong> <a href="9469.php">Xin He: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="9467.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="9465.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
