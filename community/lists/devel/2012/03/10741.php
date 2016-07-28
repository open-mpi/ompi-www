<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 15:35:24 2012" -->
<!-- isoreceived="20120319193524" -->
<!-- sent="Mon, 19 Mar 2012 21:35:16 +0200" -->
<!-- isosent="20120319193516" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="4F678A74.90303_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A9AA44DD-5422-4B2A-A998-10E3C382A852_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Replacing poll()<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 15:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've removed put and get from mosix (feels good to cut down on code 
<br>
lines...), but now the question has to be asked:
<br>
Threre are send and sendi (is sendi sufficient, or must i include send 
<br>
as well?) for the outgoing, but what about the incoming?
<br>
How does a process request input? Do I poll for incoming messages in the 
<br>
progress function and call the function in 
<br>
mca_btl_base_active_message_trigger[incoming_tag] ?
<br>
<p>Also, If I remove the async operations and left only with the blocking 
<br>
ones - can I remove the prepare_src/prepare_dst functions (and any other 
<br>
mention of the descriptors data structure) for the time being? I assume 
<br>
it'll cost me in performance, but I want to create a basic working 
<br>
prototype first and proceed to supporting async calls later on.
<br>
<p>Thanks for all your help,
<br>
Alex
<br>
<p>P.S. Sorry about the lengthy thread... I promise I'll document my 
<br>
component so it can later be used for reference for the things I didn't 
<br>
understand reading the template, btl.h and the TCP component (any other 
<br>
devel manuals to read?).
<br>
<p>On 03/19/2012 07:22 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; You don't have to implement all the protocols. The default is send protocol, and this is the minimum you have to implement. The RMA protocols (GET or PUT) are optional, and are specified by setting specific bits in your BTL flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the TCP BTL, the two RMA operations are &quot;fake&quot;, they are simply implemented on top of mca_btl_tcp_endpoint_send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2012, at 18:55 , Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My module is close to completion (though I need to fix other issues with shared memory to begin testing, but that's a different thread).
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to understand how exactly are the fragments returned to the application once they are received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In btl_tcp.c the function mca_btl_tcp_get() seems to be unused... and calls mca_btl_tcp_endpoint_send().
</span><br>
<span class="quotelev2">&gt;&gt; I've stumled upon the following snippet (btl_tcp_endpoint.c:715):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 btl_endpoint-&gt;endpoint_recv_frag = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;                 if( MCA_BTL_TCP_HDR_TYPE_SEND == frag-&gt;hdr.type ) {
</span><br>
<span class="quotelev2">&gt;&gt;                     mca_btl_active_message_callback_t* reg;
</span><br>
<span class="quotelev2">&gt;&gt;                     reg = mca_btl_base_active_message_trigger + frag-&gt;hdr.base.tag;
</span><br>
<span class="quotelev2">&gt;&gt;                     reg-&gt;cbfunc(&amp;frag-&gt;btl-&gt;super, frag-&gt;hdr.base.tag,&amp;frag-&gt;base, reg-&gt;cbdata);
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt; This calls a callback function, which I assume notifies the upper layer of a message, but this is only for MCA_BTL_TCP_HDR_TYPE_SEND.
</span><br>
<span class="quotelev2">&gt;&gt; What about MCA_BTL_TCP_HDR_TYPE_PUT?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10742.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
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
