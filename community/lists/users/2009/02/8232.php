<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 05:49:24 2009" -->
<!-- isoreceived="20090227104924" -->
<!-- sent="Fri, 27 Feb 2009 10:49:50 +0000" -->
<!-- isosent="20090227104950" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="49A7C54E.5010405_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0902271129150.25366_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 05:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brett Pemberton &lt;brett_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from
</span><br>
<span class="quotelev2">&gt;&gt; tango092.vpac.org to: tango090 error polling LP CQ with status RETRY
</span><br>
<span class="quotelev2">&gt;&gt; EXCEEDED ERROR status number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've seen this error with Mellanox ConnectX cards and OFED 1.2.x with
</span><br>
<span class="quotelev1">&gt; all versions of OpenMPI that I have tried (1.2.x and pre-1.3) and some
</span><br>
<span class="quotelev1">&gt; MVAPICH versions, from which I have concluded that the problem lies in
</span><br>
<span class="quotelev1">&gt; the lower levels (OFED or IB card firmware). Indeed after the
</span><br>
<span class="quotelev1">&gt; installation of OFED 1.3.x and a possible firmware update (not sure
</span><br>
<span class="quotelev1">&gt; about the firmware as I don't admin that cluster), these errors have
</span><br>
<span class="quotelev1">&gt; disappeared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can confirm this: I had a similar problem over Christmas, for which I 
<br>
asked for help in this list. In fact the problem was not with OpenMPI, 
<br>
but with the OFED stack: an upgrade of the latter (and an upgrade of the 
<br>
firmware, although once again the OFED drivers were complaining about 
<br>
the firmware being too old) fixed the problem. We did both upgrades at 
<br>
once, so as in Brett's case I am not sure which one played the major role.
<br>
<p>Biagio
<br>
<p><pre>
-- 
=========================================================
Dr. Biagio Lucini				
Department of Physics, Swansea University
Singleton Park, SA2 8PP Swansea (UK)
Tel. +44 (0)1792 602284
=========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8231.php">Bogdan Costescu: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
