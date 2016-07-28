<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 11:50:26 2007" -->
<!-- isoreceived="20070524155026" -->
<!-- sent="Thu, 24 May 2007 11:50:14 -0400" -->
<!-- isosent="20070524155014" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ethernet bonding" -->
<!-- id="E9614DE1-1B7F-4CC7-8435-0DCF325DAB02_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BF06A36E7AD424197195998D9A0B8E1BFAEC0_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 11:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Previous message:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>In reply to:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2007, at 10:38 AM, Adams, Samuel D Contr AFRL/HEDR wrote:
<br>
<p><span class="quotelev1">&gt; We recently got 33 new cluster nodes all of which have two onboard  
</span><br>
<span class="quotelev1">&gt; GigE
</span><br>
<span class="quotelev1">&gt; nics.  We also got two powerconnect 2748 48 port switches which  
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev1">&gt; IEEE 802.3ad (link aggregation).  I have configured the nodes to do
</span><br>
<span class="quotelev1">&gt; Ethernet bonding to aggregate the two nics in to one bonded device:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Now I am wondering what is the best way to configure my switches.  I
</span><br>
<span class="quotelev1">&gt; guess I could do it in two ways: use the IEEE 802.3ab on the switch,
</span><br>
<span class="quotelev1">&gt; plug both nics of a node into one switch, and have some nodes on  
</span><br>
<span class="quotelev1">&gt; either
</span><br>
<span class="quotelev1">&gt; switch, or perhaps for each node, plug one nic in one switch and the
</span><br>
<span class="quotelev1">&gt; second nic in the other switch.
</span><br>
<p>Based on the configuration of a system that we purchased and our  
<br>
experience with that system, I would say that one nic from each node  
<br>
into one switch and the other nic from each node into the other  
<br>
switch.  This assumes the two switches have more ports than you have  
<br>
nodes.
<br>
<p>I have no experience with IEEE 802.3ab, someone else would have to  
<br>
speak to that.
<br>
<p>The question also is which bonding configuration you choose and which  
<br>
choices would work and which gives the best performance.
<br>
<p>Michael
<br>
<pre>
---
&quot;Producing a system from a specification is like walking on water-- 
it's easier if it's frozen.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Previous message:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>In reply to:</strong> <a href="3314.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] ethernet bonding"</a>
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
