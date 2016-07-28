<?
$subject_val = "Re: [OMPI devel] Porting the underlying fabric interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 10:11:53 2016" -->
<!-- isoreceived="20160204151153" -->
<!-- sent="Thu, 4 Feb 2016 08:11:51 -0700" -->
<!-- isosent="20160204151151" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting the underlying fabric interface" -->
<!-- id="CAF1Cqj7c1hiD9zSLS8i_C-o+gn-K-xNkuh+KwfnME1gCLVC9Kw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9D4B3C84-011E-4E62-A41E-0FA188F800AE_at_cisco.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 10:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>Previous message:</strong> <a href="18552.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>In reply to:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Durga
<br>
<p>as an alternative you could implement a libfabric provider for your
<br>
network.  In theory,  if you can implement the reliable datagram endpoint
<br>
type on your network and a tag matching mechanism, you could then just use
<br>
the ofi mtl and not have to do much if anything in open mpi or mpich etc.
<br>
<p><a href="https://github.com/ofiwg/libfabric">https://github.com/ofiwg/libfabric</a>
<br>
<p>You may also want to see if the open ucx tl model might work for your
<br>
network.  It may be less work than implementing a libfabric provider.
<br>
<p>good luck
<br>
<p>Howard
<br>
<p>----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Feb 4, 2016 6:00 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; +1 on what Gilles said.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check out this part of the v1.10 README file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release/blob/v1.10/README#L585-L625">https://github.com/open-mpi/ompi-release/blob/v1.10/README#L585-L625</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - PML is the back-end to functions like MPI_Send and MPI_Recv.
</span><br>
<span class="quotelev1">&gt; - The ob1 PML uses BTL plugins in a many-of-many relationship to
</span><br>
<span class="quotelev1">&gt; potentially utilize multiple networks.
</span><br>
<span class="quotelev1">&gt; - The cm PML uses matching-style network APIs in CM plugins to utilize a
</span><br>
<span class="quotelev1">&gt; single underlying network.
</span><br>
<span class="quotelev1">&gt; - The yalla PML was written by Mellanox as a replacement for cm and ob1,
</span><br>
<span class="quotelev1">&gt; in that it directly utilizes the MXM network library without going through
</span><br>
<span class="quotelev1">&gt; any of the abstractions in ob1 and cm.  It was written at a time when cm
</span><br>
<span class="quotelev1">&gt; was not well optimized, and basically just added a latency penalty before
</span><br>
<span class="quotelev1">&gt; dispatching to the underlying MTL module.  Since then, cm has been
</span><br>
<span class="quotelev1">&gt; optimized such that its abstraction penalty before invoking the underlying
</span><br>
<span class="quotelev1">&gt; MTL module is negligible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the question really comes down to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if you have a network stack API that does MPI-style matching, you should
</span><br>
<span class="quotelev1">&gt; write an MTL.
</span><br>
<span class="quotelev1">&gt; - if not, you should write a BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 4, 2016, at 2:29 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Durga,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; did you confuse PML and MTL ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; basically, a BTL (Byte Transport Layer ?) is used with &quot;primitive&quot;
</span><br>
<span class="quotelev1">&gt; interconnects that can only send bytes.
</span><br>
<span class="quotelev2">&gt; &gt; (e.g. if you need to transmit a tagged message, it is up to you
</span><br>
<span class="quotelev1">&gt; send/recv the tag and manually match the tag on the receiver side so you
</span><br>
<span class="quotelev1">&gt; can put the message into the right place)
</span><br>
<span class="quotelev2">&gt; &gt; on the other hand, MTL (Message Transport Layer ?) can be used with more
</span><br>
<span class="quotelev1">&gt; advanced interconnects, that can &quot;natively&quot; send/recv (tagged) messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for example, with infiniband, you can use the openib BTL, or the mxm MTL
</span><br>
<span class="quotelev2">&gt; &gt; (note the openib BTL only requires the free ibverbs libraries
</span><br>
<span class="quotelev2">&gt; &gt; and mxm MTL requires proprietary extensions provided by mellanox)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a good starting point is the video Jeff posted at
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/video/?category=internals">https://www.open-mpi.org/video/?category=internals</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/4/2016 2:20 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am trying to add support for a new (proprietary) RDMA capable fabric
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to OpenMPI and have the following question:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As I understand, some networks are implemented as a PML framework and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some are implemented as a BTL framework. It seems there is even
</span><br>
<span class="quotelev3">&gt; &gt;&gt; overlap as Myrinet seems to exist in both.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My question is: what is the difference between these two frameworks?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When adding support for a new fabric, what factors one should consider
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when choosing between one type of framework over the other?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And, with apologies for asking a summary question: is there any kind
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of documentation and/or book that explains all the internal details of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the implementation (which looks little like voodoo to a newcomer like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; me)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Durga Choudhury
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18544.php">http://www.open-mpi.org/community/lists/devel/2016/02/18544.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18545.php">http://www.open-mpi.org/community/lists/devel/2016/02/18545.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18549.php">http://www.open-mpi.org/community/lists/devel/2016/02/18549.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18554.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32"</a>
<li><strong>Previous message:</strong> <a href="18552.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>In reply to:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
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
