<?
$subject_val = "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 10:09:41 2013" -->
<!-- isoreceived="20130903140941" -->
<!-- sent="Tue, 3 Sep 2013 07:09:37 -0700" -->
<!-- isosent="20130903140937" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097" -->
<!-- id="896A7C97-9BC4-48E5-B5F2-03582F75FC7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309030820.r838KUHs000100_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 10:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Previous message:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>In reply to:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heck if I know what might be wrong - it works fine for me, regardless of what machine I run it from.
<br>
<p>If this is compiled with --enable-debug, try adding &quot;--display-allocation -mca rmaps_base_verbose 5&quot; to your cmd line to see what might be going on.
<br>
<p><p>On Sep 3, 2013, at 1:20 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3) I have a problem on &quot;tyr&quot; (Solaris 10 sparc).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr rankfiles 106 mpiexec -report-bindings \
</span><br>
<span class="quotelev2">&gt;&gt;  -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt;  Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;   ../../../../../openmpi-1.9a1r29097/orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt;&gt;   at line 276
</span><br>
<span class="quotelev2">&gt;&gt; [tyr.informatik.hs-fulda.de:29849] [[53951,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev2">&gt;&gt;  Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;  ../../../../openmpi-1.9a1r29097/orte/mca/rmaps/base/rmaps_base_map_job.c
</span><br>
<span class="quotelev2">&gt;&gt;  at line 173
</span><br>
<span class="quotelev2">&gt;&gt; tyr rankfiles 107
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one works now. I found a strange character in the rankfile, which
</span><br>
<span class="quotelev1">&gt; I removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr rankfiles 103 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:00079] MCW rank 0 bound to
</span><br>
<span class="quotelev1">&gt;  socket 0[core 0[hwt 0]], socket 1[core 1[hwt 0]]: [B][B]
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the following output, if I try the rankfile from a different machine
</span><br>
<span class="quotelev2">&gt;&gt; (also Solaris 10 sparc).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rs0 rankfiles 104 mpiexec -report-bindings -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; rs0 rankfiles 105 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No change in this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rs0 rankfiles 102 mpiexec -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -rf rf_tyr_semicolon -np 1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the other rankfiles as well and they are OK, so that
</span><br>
<span class="quotelev1">&gt; problems 1) and 2) of my previous e-mail still exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22594.php">Ian Czekala: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>Previous message:</strong> <a href="22592.php">Reuti: "Re: [OMPI users] Able to run mpirun as root, but not as a user."</a>
<li><strong>In reply to:</strong> <a href="22590.php">Siegmar Gross: "Re: [OMPI users] problems with rankfile in openmpi-1.9a1r29097"</a>
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
