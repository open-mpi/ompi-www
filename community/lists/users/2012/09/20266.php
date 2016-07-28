<?
$subject_val = "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 12:43:39 2012" -->
<!-- isoreceived="20120923164339" -->
<!-- sent="Sun, 23 Sep 2012 09:43:31 -0700" -->
<!-- isosent="20120923164331" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359" -->
<!-- id="88A46AF0-4BDE-4E74-9FD6-837DF8544A51_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209231032.q8NAWZpt024046_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 12:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>In reply to:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...works fine for me on Linux x86_64
<br>
<p>[rhc_at_bend001 svn-trunk]$ mpirun -n 4 -host bend002 -report-bindings -map-by core -bind-to core date
<br>
[bend002:04730] MCW rank 3 bound to socket 1[core 2[hwt 0-1]]:[../../../BB/../..]
<br>
[bend002:04730] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:[BB/../../../../..]
<br>
[bend002:04730] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]:[../BB/../../../..]
<br>
[bend002:04730] MCW rank 2 bound to socket 0[core 2[hwt 0-1]]:[../../BB/../../..]
<br>
Sun Sep 23 10:39:46 MDT 2012
<br>
Sun Sep 23 10:39:46 MDT 2012
<br>
Sun Sep 23 10:39:46 MDT 2012
<br>
Sun Sep 23 10:39:46 MDT 2012
<br>
<p>This is with 1.9a1r27360
<br>
<p><p>On Sep 23, 2012, at 3:32 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.9a1r27359 and it doesn't report process
</span><br>
<span class="quotelev1">&gt; bindings on Solaris 10 x86_64 and Linux x86_64. As I showed in my previous
</span><br>
<span class="quotelev1">&gt; email for openmpi-1.7, it worked for openmpi-1.6.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 114 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -map-by core -bind-to core date
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:25 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:25 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 115 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -map-by core -bind-to core date
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Node:  linpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:36 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:36 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 116 mpiexec -np 2 -host tyr -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -map-by core -bind-to core date
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:24039] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B][.]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:24039] MCW rank 1 bound to socket 1[core 1[hwt 0]]: [.][B]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:48 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:29:48 CEST 2012
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
<li><strong>Next message:</strong> <a href="20267.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20265.php">Ralph Castain: "Re: [OMPI users] misleading error message in openmpi-1.6.2rc5r27346"</a>
<li><strong>In reply to:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
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
