<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 05:34:16 2009" -->
<!-- isoreceived="20090227103416" -->
<!-- sent="Fri, 27 Feb 2009 11:34:10 +0100 (CET)" -->
<!-- isosent="20090227103410" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="Pine.LNX.4.64.0902271129150.25366_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A7510D.8020208_at_vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 05:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8230.php">Mahmoud Payami: "[OMPI users] Threading fault(?)"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brett Pemberton &lt;brett_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from 
</span><br>
<span class="quotelev1">&gt; tango092.vpac.org to: tango090 error polling LP CQ with status RETRY 
</span><br>
<span class="quotelev1">&gt; EXCEEDED ERROR status number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<p>I've seen this error with Mellanox ConnectX cards and OFED 1.2.x with 
<br>
all versions of OpenMPI that I have tried (1.2.x and pre-1.3) and some 
<br>
MVAPICH versions, from which I have concluded that the problem lies in 
<br>
the lower levels (OFED or IB card firmware). Indeed after the 
<br>
installation of OFED 1.3.x and a possible firmware update (not sure 
<br>
about the firmware as I don't admin that cluster), these errors have 
<br>
disappeared.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8230.php">Mahmoud Payami: "[OMPI users] Threading fault(?)"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8232.php">Biagio Lucini: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
