<?
$subject_val = "Re: [OMPI devel] Porting the underlying fabric interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 08:00:16 2016" -->
<!-- isoreceived="20160204130016" -->
<!-- sent="Thu, 4 Feb 2016 13:00:05 +0000" -->
<!-- isosent="20160204130005" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting the underlying fabric interface" -->
<!-- id="9D4B3C84-011E-4E62-A41E-0FA188F800AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56B2FDC0.8040504_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Porting the underlying fabric interface<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 08:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on what Gilles said.  :-)
<br>
<p>Check out this part of the v1.10 README file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/blob/v1.10/README#L585-L625">https://github.com/open-mpi/ompi-release/blob/v1.10/README#L585-L625</a>
<br>
<p>Basically:
<br>
<p>- PML is the back-end to functions like MPI_Send and MPI_Recv.
<br>
- The ob1 PML uses BTL plugins in a many-of-many relationship to potentially utilize multiple networks.
<br>
- The cm PML uses matching-style network APIs in CM plugins to utilize a single underlying network.
<br>
- The yalla PML was written by Mellanox as a replacement for cm and ob1, in that it directly utilizes the MXM network library without going through any of the abstractions in ob1 and cm.  It was written at a time when cm was not well optimized, and basically just added a latency penalty before dispatching to the underlying MTL module.  Since then, cm has been optimized such that its abstraction penalty before invoking the underlying MTL module is negligible.
<br>
<p>So the question really comes down to:
<br>
<p>- if you have a network stack API that does MPI-style matching, you should write an MTL.
<br>
- if not, you should write a BTL
<br>
<p>Does that help?
<br>
<p><p><span class="quotelev1">&gt; On Feb 4, 2016, at 2:29 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; did you confuse PML and MTL ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, a BTL (Byte Transport Layer ?) is used with &quot;primitive&quot; interconnects that can only send bytes.
</span><br>
<span class="quotelev1">&gt; (e.g. if you need to transmit a tagged message, it is up to you send/recv the tag and manually match the tag on the receiver side so you can put the message into the right place)
</span><br>
<span class="quotelev1">&gt; on the other hand, MTL (Message Transport Layer ?) can be used with more advanced interconnects, that can &quot;natively&quot; send/recv (tagged) messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example, with infiniband, you can use the openib BTL, or the mxm MTL
</span><br>
<span class="quotelev1">&gt; (note the openib BTL only requires the free ibverbs libraries
</span><br>
<span class="quotelev1">&gt; and mxm MTL requires proprietary extensions provided by mellanox)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a good starting point is the video Jeff posted at <a href="https://www.open-mpi.org/video/?category=internals">https://www.open-mpi.org/video/?category=internals</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/4/2016 2:20 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi developers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to add support for a new (proprietary) RDMA capable fabric
</span><br>
<span class="quotelev2">&gt;&gt; to OpenMPI and have the following question:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I understand, some networks are implemented as a PML framework and
</span><br>
<span class="quotelev2">&gt;&gt; some are implemented as a BTL framework. It seems there is even
</span><br>
<span class="quotelev2">&gt;&gt; overlap as Myrinet seems to exist in both.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is: what is the difference between these two frameworks?
</span><br>
<span class="quotelev2">&gt;&gt; When adding support for a new fabric, what factors one should consider
</span><br>
<span class="quotelev2">&gt;&gt; when choosing between one type of framework over the other?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And, with apologies for asking a summary question: is there any kind
</span><br>
<span class="quotelev2">&gt;&gt; of documentation and/or book that explains all the internal details of
</span><br>
<span class="quotelev2">&gt;&gt; the implementation (which looks little like voodoo to a newcomer like
</span><br>
<span class="quotelev2">&gt;&gt; me)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Durga Choudhury
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18544.php">http://www.open-mpi.org/community/lists/devel/2016/02/18544.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18545.php">http://www.open-mpi.org/community/lists/devel/2016/02/18545.php</a>
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
<li><strong>Next message:</strong> <a href="18550.php">Joshua Ladd: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18548.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="18545.php">Gilles Gouaillardet: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
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
