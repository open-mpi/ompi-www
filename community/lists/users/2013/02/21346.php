<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 04:21:26 2013" -->
<!-- isoreceived="20130210092126" -->
<!-- sent="Sun, 10 Feb 2013 10:14:28 +0100 (CET)" -->
<!-- isosent="20130210091428" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]" -->
<!-- id="201302100914.r1A9ESRI022237_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]" -->
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
<strong>Subject:</strong> Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 04:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev2">&gt; &gt; You'll want to look at orte/mca/rmaps/rank_file/rmaps_rank_file.c 
</span><br>
<span class="quotelev2">&gt; &gt; - the bit map is now computed in mpirun and then sent to the daemons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I'm getting lost in this code.  Anyhow, I don't think
</span><br>
<span class="quotelev1">&gt; the problem is related to Solaris.  I think it's also on Linux. 
</span><br>
<span class="quotelev1">&gt; E.g., I can reproduce the problem with 1.9a1r28035 on Linux using 
</span><br>
<span class="quotelev1">&gt; GCC compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar: can you confirm this is a problem also on Linux?  E.g.,
</span><br>
<span class="quotelev1">&gt; with OMPI 1.9, on one of your Linux nodes (linpc0?) try
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      % cat myrankfile
</span><br>
<span class="quotelev1">&gt;      rank 0=linpc0 slot=0:1
</span><br>
<span class="quotelev1">&gt;      % mpirun --report-bindings --rankfile myrankfile numactl --show
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me, the binding I get is not 0:1 but 0,1.
</span><br>
<p>I get the following outputs for openmpi-1.6.4rc4 (without your patch)
<br>
and openmpi-1.9 (both compiled with Sun C 5.12).
<br>
<p>linpc1 rankfiles 96 cat rf_1_linux
<br>
rank 0=linpc1 slot=0:1
<br>
linpc1 rankfiles 97 mpirun --report-bindings --rankfile rf_1_linux \
<br>
&nbsp;&nbsp;numactl --show
<br>
[linpc1:15882] MCW rank 0 bound to socket 0[core 1]:
<br>
&nbsp;&nbsp;[. B][. .] (slot list 0:1)
<br>
policy: preferred
<br>
preferred node: 0
<br>
physcpubind: 1 
<br>
cpubind: 0 
<br>
nodebind: 0 
<br>
membind: 0 1 
<br>
linpc1 rankfiles 98 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc4r28022
<br>
<p><p><p>linpc1 rankfiles 96 mpirun --report-bindings --rankfile rf_1_linux \
<br>
&nbsp;&nbsp;numactl --show
<br>
[linpc1:16061] MCW rank 0 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
policy: default
<br>
preferred node: current
<br>
physcpubind: 0 1 
<br>
cpubind: 0 
<br>
nodebind: 0 
<br>
membind: 0 1 
<br>
linpc1 rankfiles 97 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r28035
<br>
<p><p>Today I will build the current versions of openmpi-1.6.4rc4 and
<br>
openmpi-1.9, so that I can test a rankfile with two machines
<br>
tomorrow.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Previous message:</strong> <a href="21345.php">Brice Goglin: "Re: [OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>Reply:</strong> <a href="21347.php">Eugene Loh: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
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
