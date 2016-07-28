<?
$subject_val = "Re: [OMPI devel] Porting the underlying fabric interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 02:29:07 2016" -->
<!-- isoreceived="20160204072907" -->
<!-- sent="Thu, 4 Feb 2016 16:29:04 +0900" -->
<!-- isosent="20160204072904" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting the underlying fabric interface" -->
<!-- id="56B2FDC0.8040504_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDj1e2-6mwog2Q1vNmgpBMAaJf9kwi2eujQ42Kdn7M1A9w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 02:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>did you confuse PML and MTL ?
<br>
<p>basically, a BTL (Byte Transport Layer ?) is used with &quot;primitive&quot; 
<br>
interconnects that can only send bytes.
<br>
(e.g. if you need to transmit a tagged message, it is up to you 
<br>
send/recv the tag and manually match the tag on the receiver side so you 
<br>
can put the message into the right place)
<br>
on the other hand, MTL (Message Transport Layer ?) can be used with more 
<br>
advanced interconnects, that can &quot;natively&quot; send/recv (tagged) messages.
<br>
<p>for example, with infiniband, you can use the openib BTL, or the mxm MTL
<br>
(note the openib BTL only requires the free ibverbs libraries
<br>
and mxm MTL requires proprietary extensions provided by mellanox)
<br>
<p>a good starting point is the video Jeff posted at 
<br>
<a href="https://www.open-mpi.org/video/?category=internals">https://www.open-mpi.org/video/?category=internals</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/4/2016 2:20 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hi developers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to add support for a new (proprietary) RDMA capable fabric
</span><br>
<span class="quotelev1">&gt; to OpenMPI and have the following question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I understand, some networks are implemented as a PML framework and
</span><br>
<span class="quotelev1">&gt; some are implemented as a BTL framework. It seems there is even
</span><br>
<span class="quotelev1">&gt; overlap as Myrinet seems to exist in both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: what is the difference between these two frameworks?
</span><br>
<span class="quotelev1">&gt; When adding support for a new fabric, what factors one should consider
</span><br>
<span class="quotelev1">&gt; when choosing between one type of framework over the other?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, with apologies for asking a summary question: is there any kind
</span><br>
<span class="quotelev1">&gt; of documentation and/or book that explains all the internal details of
</span><br>
<span class="quotelev1">&gt; the implementation (which looks little like voodoo to a newcomer like
</span><br>
<span class="quotelev1">&gt; me)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga Choudhury
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18544.php">http://www.open-mpi.org/community/lists/devel/2016/02/18544.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18546.php">asavarym_at_[hidden]: "[OMPI devel] Use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18544.php">dpchoudh .: "[OMPI devel] Porting the underlying fabric interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>Reply:</strong> <a href="18549.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Porting the underlying fabric interface"</a>
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
