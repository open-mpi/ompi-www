<?
$subject_val = "Re: [OMPI users] rankfile issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 11:04:11 2014" -->
<!-- isoreceived="20140101160411" -->
<!-- sent="Wed, 1 Jan 2014 08:02:26 -0800" -->
<!-- isosent="20140101160226" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rankfile issues" -->
<!-- id="2C068BAD-ED2C-4B72-873F-D40AC1A1EDA8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401010948.s019m734010487_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] rankfile issues<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 11:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is clearly a problem with the allocator not picking up the rankfile nodes - I'll have to take a look at it
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4043">https://svn.open-mpi.org/trac/ompi/ticket/4043</a>
<br>
<p>On Jan 1, 2014, at 1:48 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Next I tried process binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rf_linpc:
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0,1;1:0,1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rf_linpc_linpc:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=linpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=linpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rf_linpc_linpc_comma:
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=linpc0 slot=0:0,1;1:0,1
</span><br>
<span class="quotelev1">&gt; rank 1=linpc1 slot=0:0,1
</span><br>
<span class="quotelev1">&gt; rank 2=linpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=linpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 103 mpiexec -report-bindings -np 1 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc hostname
</span><br>
<span class="quotelev1">&gt; [linpc1:08461] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]], socket 1[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt;  socket 1[core 3[hwt 0]]: [B/B][B/B]
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 104 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's the output which I expected, but I don't get the expected
</span><br>
<span class="quotelev1">&gt; output for the following commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 105 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc_linpc hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 106 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 110 mpiexec -report-bindings -np 4 \
</span><br>
<span class="quotelev1">&gt;  -rf rf_linpc_linpc_comma hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots 
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi_1.7.x_or_newer 111 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
<li><strong>Previous message:</strong> <a href="23302.php">Ralph Castain: "Re: [OMPI users] Problem on big endian machines"</a>
<li><strong>In reply to:</strong> <a href="23298.php">Siegmar Gross: "[OMPI users] some problems with openmpi-1.9a1r30100"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23304.php">Ralph Castain: "Re: [OMPI users] some problems with openmpi-1.9a1r30100"</a>
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
