<?
$subject_val = "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 04:27:12 2013" -->
<!-- isoreceived="20130903082712" -->
<!-- sent="Tue, 3 Sep 2013 10:20:31 +0200 (CEST)" -->
<!-- isosent="20130903082031" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
<!-- id="201309030820.r838KUHs000100_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 04:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe in reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; 3) I have a problem on &quot;tyr&quot; (Solaris 10 sparc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 106 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;   -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;   Not found in file
</span><br>
<span class="quotelev1">&gt;    ../../../../../openmpi-1.9a1r29097/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev1">&gt;    at line 276
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;   Not found in file
</span><br>
<span class="quotelev1">&gt;   ../../../../openmpi-1.9a1r29097/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev1">&gt;   at line 173
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 107
</span><br>
<p>This one works now. I found a strange character in the rankfile, which
<br>
I removed.
<br>
<p>tyr rankfiles 103 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_tyr_semicolon -np 1 hostname
<br>
[tyr.informatik.hs-fulda.de:00079] MCW rank 0 bound to
<br>
&nbsp;&nbsp;socket 0[core 0[hwt 0]], socket 1[core 1[hwt 0]]: [B][B]
<br>
tyr.informatik.hs-fulda.de
<br>
<p><p><p><p><span class="quotelev1">&gt; I get the following output, if I try the rankfile from a different machine
</span><br>
<span class="quotelev1">&gt; (also Solaris 10 sparc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 rankfiles 104 mpiexec -report-bindings -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; rs0 rankfiles 105 
</span><br>
<p>No change in this case.
<br>
<p>rs0 rankfiles 102 mpiexec -report-bindings \
<br>
&nbsp;&nbsp;-rf rf_tyr_semicolon -np 1 hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I checked the other rankfiles as well and they are OK, so that
<br>
problems 1) and 2) of my previous e-mail still exist.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22591.php">George Bosilca: "Re: [OMPI users] mpi_allgatherv"</a>
<li><strong>Previous message:</strong> <a href="22589.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Maybe in reply to:</strong> <a href="22585.php">Siegmar Gross: "[OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<li><strong>Reply:</strong> <a href="22593.php">Ralph Castain: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
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
