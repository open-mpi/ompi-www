<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 19:56:00 2016" -->
<!-- isoreceived="20160302005600" -->
<!-- sent="Wed, 2 Mar 2016 00:55:58 +0000 (UTC)" -->
<!-- isosent="20160302005558" -->
<!-- name="Matthew Larkin" -->
<!-- email="larkym_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="1024297884.1595807.1456880158482.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D4A3639D-49EB-4EE4-A2E3-08C9B5A5A58B_at_cisco.com" -->
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
<strong>From:</strong> Matthew Larkin (<em>larkym_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 19:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as PCIe, I am looking into:&#194;&#160;
<br>
1. Dolphin's implementation of IPoPCIe&#194;&#160; 2. SDP protocol and how it can be utilized, mapping TCP to RDMA
<br>
Not sure if the only answer for this is a custom stack, API/kernel module.
<br>
Do you have any input on the above mentioned things?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On Tuesday, March 1, 2016 6:42 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
&nbsp;
<br>
<p>&nbsp;On Feb 29, 2016, at 6:48 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I know OpenMPI supports ethernet, but where does it clearly state that?
</span><br>
<span class="quotelev1">&gt; - I see on the FAQ on the web page there is a whole list of network interconnect, but how do I relate that to Ethernet network etc.?
</span><br>
<p>Open MPI actually supports multiple Ethernet-based interconnects: Cisco usNIC, iWARP, Mellanox RoCE, and TCP sockets.
<br>
<p>I suspect the one you are asking about is TCP sockets (which technically doesn't need to run over Ethernet, but TCP-over-Ethernet is probably its most common use case).
<br>
<p><span class="quotelev1">&gt; 2. Does OpenMPI work with PCIe and PCIe switch?
</span><br>
<span class="quotelev1">&gt; - Is there any specific configuration to get it to work?
</span><br>
<p>Do you have a specific vendor device / networking stack in mind?&#194;&#160; In general, Open MPI will use:
<br>
<p>- some kind of local IPC mechanism (e.g., some flavor of shared memory) for intra-node communication
<br>
- some kind of networking API for inter-node communication
<br>
<p>Extending PCIe between servers blurs this line a bit -- peer MPI processes on a remote server can make it look like they are actually local.&#194;&#160; So it depends on your network stack: do you have some kind of API that effects messaging transport over PCIe?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
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
