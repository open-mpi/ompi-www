<?
$subject_val = "Re: [OMPI devel] Replacing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 18:55:46 2012" -->
<!-- isoreceived="20120317225546" -->
<!-- sent="Sun, 18 Mar 2012 00:55:27 +0200" -->
<!-- isosent="20120317225527" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Replacing poll()" -->
<!-- id="4F65165F.2070004_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9D67C247-4436-4ECC-B1FC-B1B689D890D7_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-03-17 18:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My module is close to completion (though I need to fix other issues with 
<br>
shared memory to begin testing, but that's a different thread).
<br>
I'm trying to understand how exactly are the fragments returned to the 
<br>
application once they are received.
<br>
<p>In btl_tcp.c the function mca_btl_tcp_get() seems to be unused... and 
<br>
calls mca_btl_tcp_endpoint_send().
<br>
I've stumled upon the following snippet (btl_tcp_endpoint.c:715):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_endpoint-&gt;endpoint_recv_frag = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MCA_BTL_TCP_HDR_TYPE_SEND == frag-&gt;hdr.type ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_active_message_callback_t* reg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg = mca_btl_base_active_message_trigger + 
<br>
frag-&gt;hdr.base.tag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg-&gt;cbfunc(&amp;frag-&gt;btl-&gt;super, frag-&gt;hdr.base.tag, 
<br>
&amp;frag-&gt;base, reg-&gt;cbdata);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
This calls a callback function, which I assume notifies the upper layer 
<br>
of a message, but this is only for MCA_BTL_TCP_HDR_TYPE_SEND.
<br>
What about MCA_BTL_TCP_HDR_TYPE_PUT?
<br>
<p>Thanks,
<br>
Alex
<br>
<p>On 03/04/2012 02:54 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On Mar 3, 2012, at 18:18 , Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've figured that what I really need is to write my own BTL component, rather then trying to manipulate the existing TCP one. I've started writing it using the 1.5.5rc3 tarball and some pdfs from 2006 I found on the website (anything else I can look at? TCP is much more complicated then what I'm writing). I think I'm getting the hang of it, but I still have some questions about terminology for the component implementation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The basic data structures for routing fragments are components, modules, interfaces and endpoints, right?
</span><br>
<span class="quotelev1">&gt; Are you trying to route fragments through intermediary nodes? If yes, then I might have a patch somewhere supporting routing for send/recv protocols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, If I have 3 nodes, each with 2 interfaces (each having one constant IP), and i'm running 2 processes total. I'll have... 1 component, 2 modules, 4 interfaces (2 per module) and 4 addresses?
</span><br>
<span class="quotelev2">&gt;&gt; What about &quot;links&quot; (as in &quot;num_of_links&quot; component struct member) - what does it count?
</span><br>
<span class="quotelev1">&gt; Number of socket to be opened per device. In some cases (as an example when there is a hypervisor) one single socket is not enough to use the device completely. If I remember correctly on the PS3 3 socket were needed to get the 900Mbs out of the 1Gb ethernet link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_modex_send - Is it supposed to share the addresses of all the running processes before they start? suppose I assume one NIC per machine. Can I just send an array of mca_btl_tcp_addr_t, and every process will find the one belonging to him by some index (his rank?). I saw the ompi_modex_recv() call in _proc.c and it seems that every proc instance reads the entire sent buffer anyway.
</span><br>
<span class="quotelev1">&gt; Right, the modex is used to exchange the &quot;business card&quot; of each process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for flooding you all with questions, I hope I'm not way off here. I hope I'll finish writing something by the end of next week (I'm working on this after hours, not full time), with the purpose of submitting it as a contribution to open-mpi.
</span><br>
<span class="quotelev1">&gt; Looking forward to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate your help so far,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/02/2012 09:26 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Give your btl progress function.  It'll get called quite frequently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Look at the &quot;progress&quot; section in btl.h.  Progress threads don't work yet, but the btl_progress function will get called by the PML quite frequently.  It's how BTL's like openib progress their outstanding message passing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 2, 2012, at 2:22 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 03/02/2012 04:33 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note that the OMPI 1.4.x series is about to be retired.  If you're doing new stuff, I'd advise you to be working with the Open MPI SVN trunk.  In the trunk, we've changed how we build libevent, so if you're adding to it, you probably want to be working there for max forward-compatibility.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That being said:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I know trying to replace poll() seems like I'm doing something very wrong, but I want to poll on events without a valid linux file descriptor (and existing events, specifically sockets, at the same time), and I see no other way. Obviously, my poll2 calls the linux poll in most cases.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What exactly are you trying to do?  OMPI has some internal hooks for non-fd-or-event-based progress.  Indeed, libevent is typically called with fairly low frequency (e.g., if you're running with OpenFabrics or some other high-speed/not-fd-based networking interconnect).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to create a new btl module. I've written an adapter from my library to TCP, so I've implemented socket/connect/accept/send/recv... now I've taken the TCP BTL module and cloned it - replacing the relevant calls with mine. My only problem is with poll, which is not in the MCA (at least in 1.4.x).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've implemented poll() and select() but it's not that good, because my events are not based on valid linux file descriptors, but I can poll all my events at the same time (but not in conjunction with real FDs, unfortunatly).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you give me some pointers as to where to look in the MPI (1.5?) source code to implement it properly?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10728.php">Hugo Daniel Meyer: "[OMPI devel] Problems obtaining jdata-&gt;map in the HNP."</a>
<li><strong>Previous message:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10674.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Reply:</strong> <a href="10740.php">George Bosilca: "Re: [OMPI devel] Replacing poll()"</a>
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
