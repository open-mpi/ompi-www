<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 21:54:55 2016" -->
<!-- isoreceived="20160302025455" -->
<!-- sent="Wed, 2 Mar 2016 02:54:53 +0000" -->
<!-- isosent="20160302025453" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="174E919F-A232-4712-843E-53E94330E54B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1024297884.1595807.1456880158482.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 21:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2016, at 6:55 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as PCIe, I am looking into: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Dolphin's implementation of IPoPCIe 
</span><br>
<p>If it provides a TCP stack and an IP interface, you should be able to use Open MPI's TCP BTL interface over it.
<br>
<p><span class="quotelev1">&gt; 2. SDP protocol and how it can be utilized, mapping TCP to RDMA
</span><br>
<p>I don't think the Open MPI TCP BTL will pass the SDP socket type when creating sockets -- SDP is much lower performance than native verbs/RDMA.  You should use a &quot;native&quot; interface to your RDMA network instead (which one you use depends on which kind of network you have).
<br>
<p><span class="quotelev1">&gt; Not sure if the only answer for this is a custom stack, API/kernel module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any input on the above mentioned things?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, March 1, 2016 6:42 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2016, at 6:48 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. I know OpenMPI supports ethernet, but where does it clearly state that?
</span><br>
<span class="quotelev2">&gt; &gt; - I see on the FAQ on the web page there is a whole list of network interconnect, but how do I relate that to Ethernet network etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI actually supports multiple Ethernet-based interconnects: Cisco usNIC, iWARP, Mellanox RoCE, and TCP sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect the one you are asking about is TCP sockets (which technically doesn't need to run over Ethernet, but TCP-over-Ethernet is probably its most common use case).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. Does OpenMPI work with PCIe and PCIe switch?
</span><br>
<span class="quotelev2">&gt; &gt; - Is there any specific configuration to get it to work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a specific vendor device / networking stack in mind?  In general, Open MPI will use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - some kind of local IPC mechanism (e.g., some flavor of shared memory) for intra-node communication
</span><br>
<span class="quotelev1">&gt; - some kind of networking API for inter-node communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Extending PCIe between servers blurs this line a bit -- peer MPI processes on a remote server can make it look like they are actually local.  So it depends on your network stack: do you have some kind of API that effects messaging transport over PCIe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28614.php">Gilles Gouaillardet: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
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
