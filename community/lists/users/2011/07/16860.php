<?
$subject_val = "Re: [OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 12:59:43 2011" -->
<!-- isoreceived="20110708165943" -->
<!-- sent="Fri, 8 Jul 2011 09:59:35 -0700 (PDT)" -->
<!-- isosent="20110708165935" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="1310144375.97939.YahooMailNeo_at_web121817.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C2DB2F02-5F4B-4538-AC30-0316E3B8154C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand, different OpenFabrics transport types<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 12:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16861.php">Ralph Castain: "Re: [OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>Previous message:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, and thanks for the reply.
<br>
<p><p><p>----- Original Message -----
<br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 7, 2011 5:14 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] InfiniBand, different OpenFabrics transport types
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2011, at 1:46 PM, Bill Johnstone wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I have a heterogeneous network of InfiniBand-equipped hosts which are all 
</span><br>
<span class="quotelev1">&gt; connected to the same backbone switch, an older SDR 10 Gb/s unit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  One set of nodes uses the Mellanox &quot;ib_mthca&quot; driver, while the 
</span><br>
<span class="quotelev1">&gt; other uses the &quot;mlx4&quot; driver.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  This is on Linux 2.6.32, with Open MPI 1.5.3 .
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  When I run Open MPI across these node types, I get an error message of the 
</span><br>
<span class="quotelev1">&gt; form:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI detected two different OpenFabrics transport types in the same 
</span><br>
<span class="quotelev1">&gt; Infiniband network. 
</span><br>
<span class="quotelev2">&gt;&gt;  Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Local host: compute-chassis-1-node-01
</span><br>
<span class="quotelev2">&gt;&gt;  Local adapter: mthca0 (vendor 0x5ad, part ID 25208) 
</span><br>
<span class="quotelev2">&gt;&gt;  Local transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wow, that's cool (&quot;UNKNOWN&quot;).&#160; Are you using an old version of 
</span><br>
<span class="quotelev1">&gt; OFED or something?
</span><br>
<p>No, clean local build of OFED 1.5.3 packages, but I don't have the full huge complement of OFED packages installed, since our setup is not using IPoIB, SDP, etc.
<br>
<p>ibdiagnet, and all the usual suspects work as expected, and I'm able to do large scale Open MPI runs just fine, so long as I don't cross Mellanox HCA types.
<br>
<p><p><span class="quotelev1">&gt; Mellanox -- how can this happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Remote host: compute-chassis-3-node-01
</span><br>
<span class="quotelev2">&gt;&gt;  Remote Adapter: (vendor 0x2c9, part ID 26428) 
</span><br>
<span class="quotelev2">&gt;&gt;  Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Two questions:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  1. Why is this occurring if both adapters have all the OpenIB software set 
</span><br>
<span class="quotelev1">&gt; up?&#160; Is it because Open MPI is trying to use functionality such as ConnectX with 
</span><br>
<span class="quotelev1">&gt; the newer hardware, which is incompatible with older hardware, or is it 
</span><br>
<span class="quotelev1">&gt; something more mundane?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's basically a mismatch of IB capabilities -- Open MPI is trying to use 
</span><br>
<span class="quotelev1">&gt; more advanced features in some nodes and not in others.
</span><br>
<p>I also tried looking in the adapter-specific settings in the .ini file under /etc, but the only difference I found was in MTU, and I think that's configured on the switch.
<br>
&#160;
<br>
<span class="quotelev2">&gt;&gt;  2. How can I use IB amongst these heterogeneous nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mellanox will need to answer this question...&#160; It might be able to be done, but 
</span><br>
<span class="quotelev1">&gt; I don't know how offhand.&#160; The first issue is to figure out why you're 
</span><br>
<span class="quotelev1">&gt; getting TRANSPORT_UNKNOWN on the one node.
</span><br>
<p>OK, please let me know what other things to try or what other info I can provide.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16861.php">Ralph Castain: "Re: [OMPI users] Pinning of openmpi to certain defined cores possible"</a>
<li><strong>Previous message:</strong> <a href="16859.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
