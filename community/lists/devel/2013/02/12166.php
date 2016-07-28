<?
$subject_val = "Re: [OMPI devel] v1.7.0rc7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 05:30:56 2013" -->
<!-- isoreceived="20130226103056" -->
<!-- sent="Tue, 26 Feb 2013 11:24:09 +0100 (CET)" -->
<!-- isosent="20130226102409" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.0rc7" -->
<!-- id="201302261024.r1QAO9Wj025594_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] v1.7.0rc7" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.0rc7<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-26 05:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Maybe in reply to:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; This release candidate is the last one we expect to have
</span><br>
<span class="quotelev1">&gt; before release, so please test it. Can be downloaded from
</span><br>
<span class="quotelev1">&gt; the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Latest changes include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * update of the alps/lustre configure code
</span><br>
<span class="quotelev1">&gt; * fixed solaris hwloc code
</span><br>
<span class="quotelev1">&gt; * various mxm updates
</span><br>
<span class="quotelev1">&gt; * removed java bindings (delayed until later release)
</span><br>
<span class="quotelev1">&gt; * improved the --report-bindings output
</span><br>
<span class="quotelev1">&gt; * a variety of minor cleanups
</span><br>
<p><p>My rankfiles don't work.
<br>
<p>tyr rankfiles 106 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.7rc7
<br>
tyr rankfiles 107 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
tyr rankfiles 108 mpiexec -report-bindings -rf rf_ex_sunpc hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
tyr rankfiles 109 mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
tyr rankfiles 110 
<br>
<p><p><p>They work as expected for openmpi-1.6.4.
<br>
<p>tyr rankfiles 99 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.4rc4r28039
<br>
tyr rankfiles 100 mpiexec -report-bindings -rf rf_ex_linpc hostname
<br>
[linpc0:17655] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc0
<br>
linpc1
<br>
[linpc1:06707] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
linpc1
<br>
[linpc1:06707] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[linpc1:06707] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
linpc1
<br>
<p>tyr rankfiles 101 mpiexec -report-bindings -rf rf_ex_sunpc hostname
<br>
[sunpc0:22706] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
sunpc0
<br>
sunpc1
<br>
[sunpc1:25189] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
sunpc1
<br>
[sunpc1:25189] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[sunpc1:25189] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
sunpc1
<br>
<p>tyr rankfiles 102 mpiexec -report-bindings -rf rf_ex_sunpc_linpc hostname
<br>
[linpc1:06777] MCW rank 0 bound to socket 0[core 0-1]
<br>
&nbsp;&nbsp;socket 1[core 0-1]: [B B][B B] (slot list 0:0-1,1:0-1)
<br>
linpc1
<br>
sunpc1
<br>
[sunpc1:25226] MCW rank 1 bound to socket 0[core 0-1]:
<br>
&nbsp;&nbsp;[B B][. .] (slot list 0:0-1)
<br>
sunpc1
<br>
[sunpc1:25226] MCW rank 2 bound to socket 1[core 0]:
<br>
&nbsp;&nbsp;[. .][B .] (slot list 1:0)
<br>
[sunpc1:25226] MCW rank 3 bound to socket 1[core 1]:
<br>
&nbsp;&nbsp;[. .][. B] (slot list 1:1)
<br>
sunpc1
<br>
tyr rankfiles 103 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12167.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove windows support"</a>
<li><strong>Previous message:</strong> <a href="12165.php">George Bosilca: "Re: [OMPI devel] v1.7.0rc7"</a>
<li><strong>Maybe in reply to:</strong> <a href="12157.php">Ralph Castain: "[OMPI devel] v1.7.0rc7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12168.php">Eugene Loh: "Re: [OMPI devel] v1.7.0rc7"</a>
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
