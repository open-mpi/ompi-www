<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 07:07:46 2016" -->
<!-- isoreceived="20160302120746" -->
<!-- sent="Wed, 2 Mar 2016 12:07:34 +0000" -->
<!-- isosent="20160302120734" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="841EB513-F69A-48CE-ABB0-CFA557710619_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDifbwf5Q5_pG0YXneB0KGuJngTR_XiXLnqSoHtn4UBZ3w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-02 07:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28617.php">Florian Lindner: "[OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2016, at 10:25 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; I don't think the Open MPI TCP BTL will pass the SDP socket type when creating sockets -- SDP is much lower performance than native verbs/RDMA.  You should use a &quot;native&quot; interface to your RDMA network instead (which one you use depends on which kind of network you have).
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a rather naive follow-up question along this line: why is there not a native mode for (garden variety) Ethernet?
</span><br>
<p>There's at least three things that Ethernet-based networks do for acceleration / low latency:
<br>
<p>1. Bypass the OS for injecting and receiving network packets
<br>
2. Use a wire protocol other than TCP
<br>
3. Include other offload functionality (e.g., RDMA, or RDMA-like capabilities)
<br>
<p>Enabling these things typically requires additional support from the NIC's drivers and/or firmware.  Hence, you typically can't just take any old Ethernet NIC and expect that the above three things work.
<br>
<p>Several Ethernet NIC vendors have enabled these kinds of things in their NICs (e.g., I am on the usNIC team at Cisco, where we enable these things on the Cisco NIC in our UCS server line).
<br>
<p>There was a project a few years ago called OpenMX that used the generic Ethernet driver in Linux to accomplish #2 for just about any Ethernet NIC, but it never really caught on, and has since bit-rotted.
<br>
<p><span class="quotelev1">&gt; Is it because it lacks the end-to-end guarantees of TCP, Infiniband and the like? These days, switched Ethernet is very reliable, isn't it? (I mean by the rate of packet drop because of congestion). So if the application only needs data chunks of around 8KB max, which would not need to be fragmented (using jumbo frames), won't a native ethernet be much more efficient?
</span><br>
<p>The Cisco usNIC stack was initially OS-bypass injection of simple L2 Ethernet frames.  It did all of its own retransmission and whatnot in Open MPI itself (*all* network types have drops and/or frame corruption, due to congestion and lots of other every day kinds of traffic management -- *some* layer in the network has to handle such drops/retransmits if you want them to look like they are reliable to a higher level in the stack).  
<br>
<p>We eventually &quot;upgraded&quot; usNIC to the UDP wire protocol because our customers told us that they want to switch usNIC traffic around L3 networks in their datacenter.  We typically use jumbo frames to get good bandwidth.  The addition of a few bytes per packet (i.e., the size comparison of a raw L2 ethernet frame vs. a UDP packet) is typically not enough to affect the bandwidth curve for large packets -- especially when using jumbo frames.  Additionally, Cisco gear switches L2 and L3 packets at exactly the same speed, so we don't lose any native fabric performance by upgrading from L2 frames to UDP packets.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28617.php">Florian Lindner: "[OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<li><strong>In reply to:</strong> <a href="28615.php">dpchoudh .: "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
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
