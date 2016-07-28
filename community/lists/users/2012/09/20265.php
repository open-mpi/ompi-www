<?
$subject_val = "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 10:07:27 2012" -->
<!-- isoreceived="20120923140727" -->
<!-- sent="Sun, 23 Sep 2012 07:07:20 -0700" -->
<!-- isosent="20120923140720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346" -->
<!-- id="D8C34C37-B136-40B6-9063-FBF05FD2DA5D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209230938.q8N9bo1P023602_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 10:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We chose not to backport the &quot;unknown option&quot; code as it proved too big a change for a stable release series.
<br>
<p>On Sep 23, 2012, at 2:37 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.6.2rc5r27346 and it seems to work.
</span><br>
<span class="quotelev1">&gt; Unfortunately I get a misleading error message when I call &quot;mpiexec&quot;
</span><br>
<span class="quotelev1">&gt; with an unknown option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 112 mpiexec -np 2 -host sunpc0 -report-bindings -bycore \
</span><br>
<span class="quotelev1">&gt;  -bind-to-core date
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 11:28:45 CEST 2012
</span><br>
<span class="quotelev1">&gt; [sunpc0:12881] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:12881] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 11:28:45 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 113 mpiexec -np 2 -host sunpc0 -report-bindings -map-by core \
</span><br>
<span class="quotelev1">&gt;   -bind-to-core date
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: -map-by
</span><br>
<span class="quotelev1">&gt; Node: sunpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to display an error message like &quot;unknown option&quot;?
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
<li><strong>Next message:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>Previous message:</strong> <a href="20264.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>In reply to:</strong> <a href="20261.php">Siegmar Gross: "[OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
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
