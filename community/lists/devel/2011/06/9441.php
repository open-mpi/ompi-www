<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 06:32:08 2011" -->
<!-- isoreceived="20110629103208" -->
<!-- sent="Wed, 29 Jun 2011 19:32:01 +0900" -->
<!-- isosent="20110629103201" -->
<!-- name="Kawashima" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="87k4c56i8u.wl%t-kawashima_at_jp.fujitsu.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFF5A2C1D8.C7932FEF-ONC12578BE.002CA296-C12578BE.002FA6C0_at_bull.net" -->
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
<strong>From:</strong> Kawashima (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 06:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sylvain,
<br>
<p><span class="quotelev2">&gt; &gt; Also, we modified tuned COLL to implement interconnect-and-topology-
</span><br>
<span class="quotelev2">&gt; &gt; specific bcast/allgather/alltoall/allreduce algorithm. These algorithm
</span><br>
<span class="quotelev2">&gt; &gt; implementations also bypass PML/BML/BTL to eliminate protocol and 
</span><br>
<span class="quotelev1">&gt; software
</span><br>
<span class="quotelev2">&gt; &gt; overhead.
</span><br>
<span class="quotelev1">&gt; This seems perfectly valid to me. The current coll components use normal 
</span><br>
<span class="quotelev1">&gt; MPI_Send/Recv semantics, hence the PML/BML/BTL chain, but I always saw the 
</span><br>
<span class="quotelev1">&gt; coll framework as a way to be able to integrate smoothly &quot;custom&quot; 
</span><br>
<span class="quotelev1">&gt; collective components for a specific interconnect. I think that Mellanox 
</span><br>
<span class="quotelev1">&gt; also did a specific collective component using directly their ConnectX HCA 
</span><br>
<span class="quotelev1">&gt; capabilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, modifying the &quot;tuned&quot; component may not be the better way to 
</span><br>
<span class="quotelev1">&gt; integrate your collective work. You may consider creating a &quot;tofu&quot; coll 
</span><br>
<span class="quotelev1">&gt; component which would only provide the collectives you optimized (and the 
</span><br>
<span class="quotelev1">&gt; coll framework will fallback on tuned for the ones you didn't optimize).
</span><br>
<p>Yes. I agree.
<br>
But sadly, my colleague implemented it badly.
<br>
<p>We created another COLL component that use interconnect barrier,
<br>
like Mellanox FCA.
<br>
<p><span class="quotelev2">&gt; &gt; To achieve above, we created 'tofu COMMON', like sm 
</span><br>
<span class="quotelev1">&gt; (ompi/mca/common/sm/).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there interesting one?
</span><br>
<span class="quotelev1">&gt; It may be interesting, yes. I don't know the tofu model, but if it is not 
</span><br>
<span class="quotelev1">&gt; secret, contributing it is usually a good thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your communication model may be similar to others and portions of code may 
</span><br>
<span class="quotelev1">&gt; be shared with other technologies (I'm thinking of IB, MX, PSM,...). 
</span><br>
<span class="quotelev1">&gt; People writing new code would also consider your model and let you take 
</span><br>
<span class="quotelev1">&gt; advantage of it. Knowing how tofu is integrated into Open MPI may also 
</span><br>
<span class="quotelev1">&gt; impact major decisions the open-source community is taking.
</span><br>
<p>Tofu communication model is simular to that of IB RDMA.
<br>
Actually, we use source code of openib BTL as a reference.
<br>
We'll consider contribution of some code, and join the discussion.
<br>
<p>Regards,
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9440.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9442.php">Jeff Squyres: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
