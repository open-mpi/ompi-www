<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  5 09:08:25 2016" -->
<!-- isoreceived="20160305140825" -->
<!-- sent="Sat, 5 Mar 2016 14:08:23 +0000 (UTC)" -->
<!-- isosent="20160305140823" -->
<!-- name="Matthew Larkin" -->
<!-- email="larkym_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="53103205.3152038.1457186903385.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="841EB513-F69A-48CE-ABB0-CFA557710619_at_cisco.com" -->
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
<strong>Date:</strong> 2016-03-05 09:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28638.php">Hans-J&#195;&#188;rgen Greif: "[OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; I don't think the Open MPI TCP BTL will pass the SDP socket type when creating sockets -- SDP is much lower performance than native verbs/RDMA.&#194;&#160; You should use a &quot;native&quot; interface to your RDMA network instead (which one you use depends on which kind of network you have).
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a rather naive follow-up question along this line: why is there not a native mode for (garden variety) &gt; Ethernet?
</span><br>
<p><span class="quotelev1">&gt; There's at least three things that Ethernet-based networks do for acceleration / low latency:
</span><br>
<p><span class="quotelev1">&gt; 1. Bypass the OS for injecting and receiving network packets
</span><br>
<span class="quotelev1">&gt; 2. Use a wire protocol other than TCP
</span><br>
<span class="quotelev1">&gt; 3. Include other offload functionality (e.g., RDMA, or RDMA-like capabilities)
</span><br>
<p><span class="quotelev1">&gt; Enabling these things typically requires additional support from the NIC's drivers and/or firmware.&#194;&#160; Hence, &gt; you typically can't just take any old Ethernet NIC and expect that the above three things work.
</span><br>
<p><span class="quotelev1">&gt; Several Ethernet NIC vendors have enabled these kinds of things in their NICs (e.g., I am on the usNIC&#194;&#160;&gt; team at Cisco, where we enable these things on the Cisco NIC in our UCS server line).
</span><br>
<p><span class="quotelev1">&gt; There was a project a few years ago called OpenMX that used the generic Ethernet driver in Linux to&#194;&#160;&gt; accomplish #2 for just about any Ethernet NIC, but it never really caught on, and has since bit-rotted.
</span><br>
<p><span class="quotelev1">&gt; Is it because it lacks the end-to-end guarantees of TCP, Infiniband and the like? These days, switched&#194;&#160;&gt; Ethernet is very reliable, isn't it? (I mean by the rate of packet drop because of congestion). So if the&#194;&#160;&gt; application only needs data chunks of around 8KB max, which would not need to be fragmented (using&#194;&#160;&gt; jumbo frames), won't a native ethernet be much more efficient?
</span><br>
<p><span class="quotelev1">&gt; The Cisco usNIC stack was initially OS-bypass injection of simple L2 Ethernet frames.&#194;&#160; It did all of its own &gt; retransmission and whatnot in Open MPI itself (*all* network types have drops and/or frame corruption,&#194;&#160;&gt; due to congestion and lots of other every day kinds of traffic management -- *some* layer in the network&#194;&#160;&gt; has to handle such drops/retransmits if you want them to look like they are reliable to a higher level in the &gt; stack).&#194;&#160; 
</span><br>
<p><span class="quotelev1">&gt; We eventually &quot;upgraded&quot; usNIC to the UDP wire protocol because our customers told us that they want&#194;&#160;&gt; to switch usNIC traffic around L3 networks in their datacenter.&#194;&#160; We typically use jumbo frames to get good &gt; bandwidth.&#194;&#160; The addition of a few bytes per packet (i.e., the size comparison of a raw L2 ethernet frame&#194;&#160;&gt; vs. a UDP packet) is typically not enough to affect the bandwidth curve for large packets -- especially&#194;&#160;&gt; when using jumbo frames.&#194;&#160; Additionally, Cisco gear switches L2 and L3 packets at exactly the same &gt;speed, so we don't lose any native fabric performance by upgrading from L2 frames to UDP packets.
</span><br>
I am fairly incompetent with anything other than the TCP/IP stack used in most OS, so my first instinct is to use as TCP as it is all I am familiar with. I am also working in the embedded world where a cluster/domain may only involve one type of interconnect, where Ethernet is used for one situation and PCIe for something else. Essentially native Ethernet may not be an option all the time.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28616.php">http://www.open-mpi.org/community/lists/users/2016/03/28616.php</a>
  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28638.php">Hans-J&#195;&#188;rgen Greif: "[OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
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
