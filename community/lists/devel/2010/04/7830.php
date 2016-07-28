<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 06:43:21 2010" -->
<!-- isoreceived="20100428104321" -->
<!-- sent="Wed, 28 Apr 2010 05:43:16 -0500" -->
<!-- isosent="20100428104316" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056772_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="223793.86869.qm_at_web8707.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is a MPI process launched ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 06:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7831.php">Bogdan Costescu: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand - A and B are in front of the firewall/nat, and C is behind it? And A and C are the &quot;real&quot; mpi processes, and B is just a proxy?
<br>

<br>
I'm not sure why you'd need a communication proxy to send all traffic thru; what you really need is something like a connection manager proxy on each side where initiation requests cannot (easily) flow, and maintain some kind of communication with it to the other side. For example, if you have a 1-way firewall (i.e., connection requests can flow from A to B but not from B to A), then during startup you need to establish a CM proxy on the same side as A and establish a socket to it to the B side (perhaps to an orted?). 
<br>

<br>
A can always connect to B, but if B wants to connect to B, it would initiate the sequence by sending a request to the CM. The CM would then tell A to connect to B. 
<br>

<br>
Or maybe if you can establish oob communication between all procs, the B can just OOB send to A and say &quot;hey, open a connection back to me because I can't open a connection to you.&quot;
<br>

<br>
I left out lots of details because I'm typing on my blackberry; but it gives you the flavor of the issues involved. 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt; 
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt; 
<br>
Sent: Tue Apr 27 22:38:22 2010
<br>
Subject: Re: [OMPI devel] How is a MPI process launched ? 
<br>

<br>

<br>
Hi Jeff, 
<br>

<br>
Sorry, can't use IPv6 right now but may be in the future. 
<br>

<br>
When you're talking to someone behind NAT (or any type of firewall), how do you know to whom you're actually talking?
<br>

<br>

<br>
If Machine A can talk to machine C in front of NAT and that machine can relay the data packet to the machine B behind the NAT. From Machine A perspective won't it be just like talking to machine B. May be use IPTABLES to specify the route on the port range. 
<br>

<br>

<br>
There are ways, of course, but it's quite complicated if connection initiation can effectively only flow in one direction. 
<br>

<br>
Jeff, can you tell me the most simple way. It does not have to be perfect. 
<br>

<br>

<br>
Thanks
<br>

<br>
________________________________
<br>

<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Tue, 27 April, 2010 9:12:07 PM
<br>
Subject: Re: [OMPI devel] How is a MPI process launched ?
<br>

<br>
On Apr 27, 2010, at 10:06 AM, Leo P. wrote:
<br>

<br>
<span class="quotelev1">&gt; Ralph has talked about the other parts already; so I'll ask about the BTL: what type of network are you looking to route via the BTL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am talking about two different network using a private IP and all the communication being routed through a NAT router 
</span><br>

<br>
There's a bunch of issues with this; I know that the U. Tennessee and INRIA folks have dug into at least some of them.
<br>

<br>
When you're talking to someone behind NAT (or any type of firewall), how do you know to whom you're actually talking?  There are ways, of course, but it's quite complicated if connection initiation can effectively only flow in one direction.
<br>

<br>
Can you just use IPv6?
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden] &lt;javascript:void(0)&gt; 
<br>
For corporate legal information go to:
<br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden] &lt;javascript:void(0)&gt; 
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7831.php">Bogdan Costescu: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
