<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 04:40:34 2011" -->
<!-- isoreceived="20110629084034" -->
<!-- sent="Wed, 29 Jun 2011 10:40:29 +0200" -->
<!-- isosent="20110629084029" -->
<!-- name="sylvain.jeaugey_at_[hidden]" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="OFF5A2C1D8.C7932FEF-ONC12578BE.002CA296-C12578BE.002FA6C0_at_bull.net" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> <a href="mailto:sylvain.jeaugey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20&amp;amp;quot;Open%20MPI&amp;amp;quot;-based%20MPI%20library%20used%20by%20K%20computer"><em>sylvain.jeaugey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-29 04:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kawashima-san,
<br>
<p>Congratulations for your machine, this is a stunning achievement !
<br>
<p><span class="quotelev1">&gt; Kawashima &lt;t-kawashima_at_[hidden]&gt; wrote :
</span><br>
<span class="quotelev1">&gt; Also, we modified tuned COLL to implement interconnect-and-topology-
</span><br>
<span class="quotelev1">&gt; specific bcast/allgather/alltoall/allreduce algorithm. These algorithm
</span><br>
<span class="quotelev1">&gt; implementations also bypass PML/BML/BTL to eliminate protocol and 
</span><br>
software
<br>
<span class="quotelev1">&gt; overhead.
</span><br>
This seems perfectly valid to me. The current coll components use normal 
<br>
MPI_Send/Recv semantics, hence the PML/BML/BTL chain, but I always saw the 
<br>
coll framework as a way to be able to integrate smoothly &quot;custom&quot; 
<br>
collective components for a specific interconnect. I think that Mellanox 
<br>
also did a specific collective component using directly their ConnectX HCA 
<br>
capabilities.
<br>
<p>However, modifying the &quot;tuned&quot; component may not be the better way to 
<br>
integrate your collective work. You may consider creating a &quot;tofu&quot; coll 
<br>
component which would only provide the collectives you optimized (and the 
<br>
coll framework will fallback on tuned for the ones you didn't optimize).
<br>
<p><span class="quotelev1">&gt; To achieve above, we created 'tofu COMMON', like sm 
</span><br>
(ompi/mca/common/sm/).
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there interesting one?
</span><br>
It may be interesting, yes. I don't know the tofu model, but if it is not 
<br>
secret, contributing it is usually a good thing.
<br>
<p>Your communication model may be similar to others and portions of code may 
<br>
be shared with other technologies (I'm thinking of IB, MX, PSM,...). 
<br>
People writing new code would also consider your model and let you take 
<br>
advantage of it. Knowing how tofu is integrated into Open MPI may also 
<br>
impact major decisions the open-source community is taking.
<br>
<p>Sylvain
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9441.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
