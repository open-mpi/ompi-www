<?
$subject_val = "Re: [OMPI devel] Shared Memory RDMA and eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 07:28:19 2008" -->
<!-- isoreceived="20080515112819" -->
<!-- sent="Thu, 15 May 2008 13:28:06 +0200" -->
<!-- isosent="20080515112806" -->
<!-- name="Torje Henriksen" -->
<!-- email="torjeh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared Memory RDMA and eager messages" -->
<!-- id="B3179B39-B0F2-4BD7-B258-BCAF2E66D7F5_at_stud.cs.uit.no" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37411866-5650-4547-899D-29F4D2BBA384_at_cisco.com" -->
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
<strong>From:</strong> Torje Henriksen (<em>torjeh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 07:28:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3916.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3916.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Reply:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff.
<br>
<p><p>Always fast answers from this mailing list. Very nice indeed. I'll  
<br>
look at the PML OB1 module next then.
<br>
<p><p>Best regards,
<br>
<p>Torje
<br>
<p>On May 15, 2008, at 1:15 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 15, 2008, at 5:55 AM, Torje Henriksen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. In the BTL SM component (both in &quot;ompi_info --param btl sm&quot; and  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; source), there is mention of RDMA. Is RDMA used in ths component? Is
</span><br>
<span class="quotelev2">&gt;&gt; any special hardware needed for using it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No and no.  The SM BTL uses a copyout/copyin mechanism (copy out to
</span><br>
<span class="quotelev1">&gt; shared memory, copy in to the target process) -- it does not directly
</span><br>
<span class="quotelev1">&gt; copy from one process to another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OB1 PML uses &quot;RDMA-like&quot; semantics; I'm guessing that's what it's
</span><br>
<span class="quotelev1">&gt; referring to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. As for eager vs non-eager messages. Is the only difference between
</span><br>
<span class="quotelev2">&gt;&gt; these the amount of memory allocated for a fragment? Is there any
</span><br>
<span class="quotelev2">&gt;&gt; rendevouz protocol used for large messages or anything like that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rendesvouz protocol is enforced by the upper level PML (OB1) -- it
</span><br>
<span class="quotelev1">&gt; is basically the lower-layer-independent &quot;protocol engine&quot;.  OB1
</span><br>
<span class="quotelev1">&gt; decides the exact protocol to use (short, long, pipelined, etc.), and
</span><br>
<span class="quotelev1">&gt; the lower later BTLs decide how to get the bits there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The module based architecture is great, but sometimes I find it hard
</span><br>
<span class="quotelev2">&gt;&gt; to figure out what is happening :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed.  This is definitely a tradeoff when you only see small pieces
</span><br>
<span class="quotelev1">&gt; of the puzzle at a time.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Previous message:</strong> <a href="3916.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>In reply to:</strong> <a href="3916.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
<li><strong>Reply:</strong> <a href="3918.php">Jeff Squyres: "Re: [OMPI devel] Shared Memory RDMA and eager messages"</a>
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
