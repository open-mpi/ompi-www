<?
$subject_val = "Re: [OMPI devel] Shared Memory RDMA and eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 07:15:42 2008" -->
<!-- isoreceived="20080515111542" -->
<!-- sent="Thu, 15 May 2008 07:15:30 -0400" -->
<!-- isosent="20080515111530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared Memory RDMA and eager messages" -->
<!-- id="37411866-5650-4547-899D-29F4D2BBA384_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6A5EA6D6-F0BE-4FD4-A38D-606554409279_at_stud.cs.uit.no" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Shared Memory RDMA and eager messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 07:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Reply:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2008, at 5:55 AM, Torje Henriksen wrote:
<br>
<p><span class="quotelev1">&gt; 1. In the BTL SM component (both in &quot;ompi_info --param btl sm&quot; and the
</span><br>
<span class="quotelev1">&gt; source), there is mention of RDMA. Is RDMA used in ths component? Is
</span><br>
<span class="quotelev1">&gt; any special hardware needed for using it?
</span><br>
<p>No and no.  The SM BTL uses a copyout/copyin mechanism (copy out to  
<br>
shared memory, copy in to the target process) -- it does not directly  
<br>
copy from one process to another.
<br>
<p>The OB1 PML uses &quot;RDMA-like&quot; semantics; I'm guessing that's what it's  
<br>
referring to.
<br>
<p><span class="quotelev1">&gt; 2. As for eager vs non-eager messages. Is the only difference between
</span><br>
<span class="quotelev1">&gt; these the amount of memory allocated for a fragment? Is there any
</span><br>
<span class="quotelev1">&gt; rendevouz protocol used for large messages or anything like that?
</span><br>
<p>The rendesvouz protocol is enforced by the upper level PML (OB1) -- it  
<br>
is basically the lower-layer-independent &quot;protocol engine&quot;.  OB1  
<br>
decides the exact protocol to use (short, long, pipelined, etc.), and  
<br>
the lower later BTLs decide how to get the bits there.
<br>
<p><span class="quotelev1">&gt; The module based architecture is great, but sometimes I find it hard
</span><br>
<span class="quotelev1">&gt; to figure out what is happening :)
</span><br>
<p>Indeed.  This is definitely a tradeoff when you only see small pieces  
<br>
of the puzzle at a time.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3915.php">Torje Henriksen: "[OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Reply:</strong> <a href="3917.php">Torje Henriksen: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
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
