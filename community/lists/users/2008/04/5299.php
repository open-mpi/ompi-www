<?
$subject_val = "Re: [OMPI users] multi-rail failover with IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 03:15:35 2008" -->
<!-- isoreceived="20080403071535" -->
<!-- sent="Thu, 03 Apr 2008 10:15:24 +0300" -->
<!-- isosent="20080403071524" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-rail failover with IB" -->
<!-- id="47F4840C.9000500_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2DAAE54-1F37-42DF-8DAB-AFCB1D6320E4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-rail failover with IB<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 03:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5300.php">Korambath, Prakashan: "[OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Previous message:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; can OpenMPI also deal with one of the subnets failing?
</span><br>
<span class="quotelev2">&gt;&gt; ie. will OpenMPI automatically fall back to using the last remaining
</span><br>
<span class="quotelev2">&gt;&gt; working IB port out of a node, or even fallback to GigE if all the IB
</span><br>
<span class="quotelev2">&gt;&gt; fails?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not in the 1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 1.3 series *may* include &quot;APM&quot; support (automatic path migration  
</span><br>
<span class="quotelev1">&gt; -- a feature in IB).  It looks positive that that'll make the 1.3 cut,  
</span><br>
<span class="quotelev1">&gt; but I don't have definite information yet.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Current ompi-trunk have APM implementation. If you enable APM ompi will 
<br>
use only first port on the
<br>
HCA for data transmission and second one will be reserver for back-up. 
<br>
On network failure on the first port
<br>
all connections will migrate to second port. The APM works only on the 
<br>
HCA level - I mean that you can not migrate between
<br>
different HCAs, you can migrate only between 2 ports of the same HCA.
<br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5300.php">Korambath, Prakashan: "[OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>Previous message:</strong> <a href="5298.php">Jeff Squyres: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>In reply to:</strong> <a href="5296.php">Jeff Squyres: "Re: [OMPI users] multi-rail failover with IB"</a>
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
