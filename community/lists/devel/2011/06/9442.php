<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 08:01:13 2011" -->
<!-- isoreceived="20110629120113" -->
<!-- sent="Wed, 29 Jun 2011 08:01:07 -0400" -->
<!-- isosent="20110629120107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="5A7B23A1-3EA0-4BAF-8AB9-644C52BD4237_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87mxh16pef.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Date:</strong> 2011-06-29 08:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2011, at 3:57 AM, Kawashima wrote:
<br>
<p><span class="quotelev1">&gt; First, we created a new BTL component, 'tofu BTL'. It's not so special
</span><br>
<span class="quotelev1">&gt; one but dedicated to our Tofu interconnect. But its latency was not
</span><br>
<span class="quotelev1">&gt; enough for us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we created a new framework, 'LLP', and its component, 'tofu LLP'.
</span><br>
<span class="quotelev1">&gt; It bypasses request object creation in PML and BML/BTL, and sends
</span><br>
<span class="quotelev1">&gt; a message immediately if possible.
</span><br>
<p>Gotcha.  Was the sendi pml call not sufficient?  (sendi = &quot;send immediate&quot;)  This call was designed to be part of a latency reduction mechanism.  I forget offhand what we don't do before calling sendi, but the rationale was that if the message was small enough, we could skip some steps in the sending process and &quot;just send it.&quot;
<br>
<p>Note, too, that the coll modules can be laid overtop of each other -- e.g., if you only implement barrier (and some others) in tofu coll, then you can supply NULL for the other function pointers and the coll base will resolve those functions to other coll modules automatically.
<br>
<p><span class="quotelev1">&gt; Also, we modified tuned COLL to implement interconnect-and-topology-
</span><br>
<span class="quotelev1">&gt; specific bcast/allgather/alltoall/allreduce algorithm. These algorithm
</span><br>
<span class="quotelev1">&gt; implementations also bypass PML/BML/BTL to eliminate protocol and software
</span><br>
<span class="quotelev1">&gt; overhead.
</span><br>
<p>Good.  As Sylvain mentioned, that was the intent of the coll framework -- it certainly isn't *necessary* for coll's to always implement their underlying sends/receives with the BTL.  The sm coll does this, for example -- it uses its own shared memory block for talking to other the sm coll's in other processes on the same node, but it doesn't go through the sm BTL.
<br>
<p><span class="quotelev1">&gt; To achieve above, we created 'tofu COMMON', like sm (ompi/mca/common/sm/).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there interesting one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though our BTL and COLL are quite interconnect-specific, LLP may be
</span><br>
<span class="quotelev1">&gt; contributed in the future.
</span><br>
<p>Yes, it may be interesting to see what you did there.
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
<li><strong>Next message:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9443.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
