<?
$subject_val = "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 01:38:20 2013" -->
<!-- isoreceived="20130211063820" -->
<!-- sent="Mon, 11 Feb 2013 07:31:12 +0100 (CET)" -->
<!-- isosent="20130211063112" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation" -->
<!-- id="201302110631.r1B6VBHS005118_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 01:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21358.php">Kranthi Kumar: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21356.php">Mark Bolstad: "[OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
<li><strong>Reply:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; #3493: Handle the case where rankfile provides the allocation
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  rhc                     |       Owner:  ompi-gk1.6
</span><br>
<span class="quotelev1">&gt;     Type:  changeset move request  |      Status:  closed
</span><br>
<span class="quotelev1">&gt; Priority:  critical                |   Milestone:  Open MPI 1.6.4
</span><br>
<span class="quotelev1">&gt;  Version:  trunk                   |  Resolution:  fixed
</span><br>
<span class="quotelev1">&gt; Keywords:                          |
</span><br>
<span class="quotelev1">&gt; -----------------------------------+-----------------------------
</span><br>
<span class="quotelev1">&gt; Changes (by jsquyres):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * status:  assigned =&gt; closed
</span><br>
<span class="quotelev1">&gt;  * resolution:   =&gt; fixed
</span><br>
<p>Excellent! The problem is solved! Thank you very much to everybody.
<br>
It even works in a mixed Linux/Solaris environment.
<br>
<p>tyr rankfiles 106 mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
<br>
[linpc1:29841] MCW rank 0 bound to socket 0[core 0-1] socket 1[core 0-1]:
<br>
&nbsp;&nbsp;[B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc1
<br>
sunpc1
<br>
[sunpc1:10829] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
sunpc1
<br>
[sunpc1:10829] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[sunpc1:10829] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
sunpc1
<br>
<p>tyr rankfiles 107 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc4r28039
<br>
<p><p>tyr rankfiles 108  cat rf_ex_sunpc_linpc
<br>
# mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
<br>
rank 0=linpc1 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p><p>Thank you very much once more
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21358.php">Kranthi Kumar: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<li><strong>Previous message:</strong> <a href="21356.php">Mark Bolstad: "[OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
<li><strong>Reply:</strong> <a href="21362.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile	provides theallocation"</a>
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
