<?
$subject_val = "Re: [OMPI users] infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 07:54:02 2008" -->
<!-- isoreceived="20080501115402" -->
<!-- sent="Thu, 01 May 2008 14:53:49 +0300" -->
<!-- isosent="20080501115349" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband" -->
<!-- id="4819AF4D.9010207_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4816CAD6.2040607_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 07:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5581.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<li><strong>Previous message:</strong> <a href="../../2008/04/5579.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="../../2008/04/5559.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another nice tools for ib monitoring.
<br>
<p>1. perfquery (part of  OFED), example of report:
<br>
<p>&nbsp;Port counters: Lid 12 port 1
<br>
PortSelect:......................1
<br>
CounterSelect:...................0x0000
<br>
SymbolErrors:....................7836
<br>
LinkRecovers:....................255
<br>
LinkDowned:......................0
<br>
RcvErrors:.......................24058
<br>
RcvRemotePhysErrors:.............6159
<br>
RcvSwRelayErrors:................0
<br>
XmtDiscards:.....................3176
<br>
XmtConstraintErrors:.............0
<br>
RcvConstraintErrors:.............0
<br>
LinkIntegrityErrors:.............0
<br>
ExcBufOverrunErrors:.............0
<br>
VL15Dropped:.....................0
<br>
XmtData:.........................1930
<br>
RcvData:.........................1708
<br>
XmtPkts:.........................114
<br>
RcvPkts:.........................114
<br>
<p>2. collectl - <a href="http://collectl.sourceforge.net/">http://collectl.sourceforge.net/</a>, example of report:
<br>
<p>#&lt;--------CPU--------&gt;&lt;-----------Memory----------&gt;&lt;----------InfiniBand----------&gt;
<br>
#cpu sys inter  ctxsw free buff cach inac slab  map   KBin  pktIn  KBOut 
<br>
pktOut Errs
<br>
&nbsp;&nbsp;&nbsp;1   0   847   1273   1G 264M   3G 594M   1G 234M      2     29      
<br>
2     29 123242
<br>
&nbsp;&nbsp;&nbsp;2   1   851   2578   1G 264M   3G 594M   1G 234M      1      5      
<br>
1      5 123391
<br>
<p><p><p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to get information about the usage of hca ports similar
</span><br>
<span class="quotelev2">&gt;&gt; to the result of the mx_endpoint_info command for Myrinet boards?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ibstat command gives information like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Port 1:
</span><br>
<span class="quotelev2">&gt;&gt; State: Active
</span><br>
<span class="quotelev2">&gt;&gt; Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but does not say whether a job is actually using an infiniband port or
</span><br>
<span class="quotelev2">&gt;&gt; comunicates through plain ethernet. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful for any advice
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; You have access to some counters in 
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband/mlx4_0/ports/1/counters/  (counters for hca - 
</span><br>
<span class="quotelev1">&gt; mlx4_0 , port 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5581.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<li><strong>Previous message:</strong> <a href="../../2008/04/5579.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="../../2008/04/5559.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband"</a>
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
