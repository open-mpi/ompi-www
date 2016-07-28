<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 15:59:22 2007" -->
<!-- isoreceived="20070611195922" -->
<!-- sent="Mon, 11 Jun 2007 12:59:16 -0700" -->
<!-- isosent="20070611195916" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="66bc01c7ac62$fdde3840$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="466D6952.6050200_at_cs.vu.nl" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 15:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3459.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; !         if( (status = mx_get_info( mx_btl-&gt;mx_endpoint, MX_LINE_SPEED,
</span><br>
<span class="quotelev1">&gt; !                                    &amp;nic_id, sizeof(nic_id),
</span><br>
<span class="quotelev1">&gt;                                      &amp;value, sizeof(int))) != MX_SUCCESS ) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<p>yes, a NIC ID is required for this call because a host may have multiple 
<br>
NICs with different linespeeds, e.g. a 2G card and a 10G card.
<br>
-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3461.php">Galen Shipman: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3459.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>In reply to:</strong> <a href="3452.php">Kees Verstoep: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3467.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
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
