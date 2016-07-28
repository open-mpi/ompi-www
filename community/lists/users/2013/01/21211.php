<?
$subject_val = "Re: [OMPI users] MXM vs OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 11:08:19 2013" -->
<!-- isoreceived="20130123160819" -->
<!-- sent="Wed, 23 Jan 2013 11:08:14 -0500" -->
<!-- isosent="20130123160814" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM vs OpenIB" -->
<!-- id="1FA3CE06-3920-4FEC-B72F-BBF8DC3E0D53_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C24C4281-B7E4-44D9-AA05-36E07BA76CD7_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM vs OpenIB<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 11:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="21210.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21202.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; You sound like our vendors, &quot;what is your app&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ;-) I used to be one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ideally OMPI should do the switch between MXM/RC/XRC internally in the transport layer. Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; we don't have such smart selection logic. Hopefully IB vendors will fix some day. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually looked in the openib-hca.ini (working from memory) to try and find what the default queues were, and I actually couldn't figure it out. The ConnectX entry doesn't have a default, and the 'default default'  also doesn't have an entry. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to dig into ompi_info, got distracted by an intel compiler bug, ADD for admin/user support folks.
</span><br>
<p>&quot;default default&quot; QP configuration is tuned for Mellanox devices. 
<br>
Therefore the openib-hca.ini file doesn't have a special configuration for Connect-X.
<br>
The proper way to check default configuration is ompi_info utility.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note most of our users run just fine with the standard Peer-Peer queues, default out the box OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The P2P queue is fine, but most like using XRC your users will observe better performance. This is not just scalability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cool thanks for all the input, I wonder why peer-to-peer is the default, I know XRC requires hardware support, 
</span><br>
<p>There is a historical reason behind this. OpenFabrics decided not to include XRC transport in default distribution. The XRC feature was only available as a part of
<br>
the Mellanox OFED distribution. I think, recently OFA community decided to include XRC, so we actually should consider to enable XRC by default.
<br>
<p>-Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="21210.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21202.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
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
