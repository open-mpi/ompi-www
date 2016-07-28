<?
$subject_val = "Re: [OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 20:14:07 2011" -->
<!-- isoreceived="20110708001407" -->
<!-- sent="Thu, 7 Jul 2011 20:14:01 -0400" -->
<!-- isosent="20110708001401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="C2DB2F02-5F4B-4538-AC30-0316E3B8154C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1309283160.28789.YahooMailNeo_at_web121818.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 20:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16847.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2011, at 1:46 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; I have a heterogeneous network of InfiniBand-equipped hosts which are all connected to the same backbone switch, an older SDR 10 Gb/s unit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One set of nodes uses the Mellanox &quot;ib_mthca&quot; driver, while the other uses the &quot;mlx4&quot; driver.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on Linux 2.6.32, with Open MPI 1.5.3 .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run Open MPI across these node types, I get an error message of the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI detected two different OpenFabrics transport types in the same Infiniband network. 
</span><br>
<span class="quotelev1">&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local host: compute-chassis-1-node-01
</span><br>
<span class="quotelev1">&gt; Local adapter: mthca0 (vendor 0x5ad, part ID 25208) 
</span><br>
<span class="quotelev1">&gt; Local transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN 
</span><br>
<p>Wow, that's cool (&quot;UNKNOWN&quot;).  Are you using an old version of OFED or something?
<br>
<p>Mellanox -- how can this happen?
<br>
<p><span class="quotelev1">&gt; Remote host: compute-chassis-3-node-01
</span><br>
<span class="quotelev1">&gt; Remote Adapter: (vendor 0x2c9, part ID 26428) 
</span><br>
<span class="quotelev1">&gt; Remote transport type: MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Why is this occurring if both adapters have all the OpenIB software set up?  Is it because Open MPI is trying to use functionality such as ConnectX with the newer hardware, which is incompatible with older hardware, or is it something more mundane?
</span><br>
<p>It's basically a mismatch of IB capabilities -- Open MPI is trying to use more advanced features in some nodes and not in others.
<br>
<p><span class="quotelev1">&gt; 2. How can I use IB amongst these heterogeneous nodes?
</span><br>
<p>Mellanox will need to answer this question...  It might be able to be done, but I don't know how offhand.  The first issue is to figure out why you're getting TRANSPORT_UNKNOWN on the one node.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16847.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16860.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
