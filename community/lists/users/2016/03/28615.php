<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 23:25:54 2016" -->
<!-- isoreceived="20160302042554" -->
<!-- sent="Tue, 1 Mar 2016 23:25:53 -0500" -->
<!-- isosent="20160302042553" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="CAHXxYDifbwf5Q5_pG0YXneB0KGuJngTR_XiXLnqSoHtn4UBZ3w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="174E919F-A232-4712-843E-53E94330E54B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General Questions<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 23:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;quote&gt;
<br>
I don't think the Open MPI TCP BTL will pass the SDP socket type when
<br>
creating sockets -- SDP is much lower performance than native verbs/RDMA.
<br>
You should use a &quot;native&quot; interface to your RDMA network instead (which one
<br>
you use depends on which kind of network you have).
<br>
&lt;/quote&gt;
<br>
<p>I have a rather naive follow-up question along this line: why is there not
<br>
a native mode for (garden variety) Ethernet? Is it because it lacks the
<br>
end-to-end guarantees of TCP, Infiniband and the like? These days, switched
<br>
Ethernet is very reliable, isn't it? (I mean by the rate of packet drop
<br>
because of congestion). So if the application only needs data chunks of
<br>
around 8KB max, which would not need to be fragmented (using jumbo frames),
<br>
won't a native ethernet be much more efficient?
<br>
<p>Or perhaps these constraints are too limiting in practice?
<br>
<p>Thanks
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Tue, Mar 1, 2016 at 9:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 1, 2016, at 6:55 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As far as PCIe, I am looking into:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Dolphin's implementation of IPoPCIe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it provides a TCP stack and an IP interface, you should be able to use
</span><br>
<span class="quotelev1">&gt; Open MPI's TCP BTL interface over it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. SDP protocol and how it can be utilized, mapping TCP to RDMA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think the Open MPI TCP BTL will pass the SDP socket type when
</span><br>
<span class="quotelev1">&gt; creating sockets -- SDP is much lower performance than native verbs/RDMA.
</span><br>
<span class="quotelev1">&gt; You should use a &quot;native&quot; interface to your RDMA network instead (which one
</span><br>
<span class="quotelev1">&gt; you use depends on which kind of network you have).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not sure if the only answer for this is a custom stack, API/kernel
</span><br>
<span class="quotelev1">&gt; module.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any input on the above mentioned things?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday, March 1, 2016 6:42 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 29, 2016, at 6:48 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. I know OpenMPI supports ethernet, but where does it clearly state
</span><br>
<span class="quotelev1">&gt; that?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - I see on the FAQ on the web page there is a whole list of network
</span><br>
<span class="quotelev1">&gt; interconnect, but how do I relate that to Ethernet network etc.?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI actually supports multiple Ethernet-based interconnects: Cisco
</span><br>
<span class="quotelev1">&gt; usNIC, iWARP, Mellanox RoCE, and TCP sockets.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suspect the one you are asking about is TCP sockets (which technically
</span><br>
<span class="quotelev1">&gt; doesn't need to run over Ethernet, but TCP-over-Ethernet is probably its
</span><br>
<span class="quotelev1">&gt; most common use case).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. Does OpenMPI work with PCIe and PCIe switch?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - Is there any specific configuration to get it to work?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have a specific vendor device / networking stack in mind?  In
</span><br>
<span class="quotelev1">&gt; general, Open MPI will use:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - some kind of local IPC mechanism (e.g., some flavor of shared memory)
</span><br>
<span class="quotelev1">&gt; for intra-node communication
</span><br>
<span class="quotelev2">&gt; &gt; - some kind of networking API for inter-node communication
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Extending PCIe between servers blurs this line a bit -- peer MPI
</span><br>
<span class="quotelev1">&gt; processes on a remote server can make it look like they are actually
</span><br>
<span class="quotelev1">&gt; local.  So it depends on your network stack: do you have some kind of API
</span><br>
<span class="quotelev1">&gt; that effects messaging transport over PCIe?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28613.php">http://www.open-mpi.org/community/lists/users/2016/03/28613.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
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
