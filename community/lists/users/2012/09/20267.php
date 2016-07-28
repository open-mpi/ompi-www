<?
$subject_val = "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 23 13:05:33 2012" -->
<!-- isoreceived="20120923170533" -->
<!-- sent="Sun, 23 Sep 2012 10:05:25 -0700" -->
<!-- isosent="20120923170525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358" -->
<!-- id="698C6D67-8D7C-4A2A-AA27-13DC6D3C3CAD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209231020.q8NAKB8k023890_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-23 13:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.7 series has a completely different way of handling node topology than was used in the 1.6 series. It provides some enhanced features, but it does have some drawbacks in the case where the topology info isn't correct. I fear you are running into this problem (again).
<br>
<p>All the commands you show here work fine for me on a Linux x86_64 box using 1.7r27361 on a Westmere 6-core single-socket machine with hyperthreads enabled. I cannot replicate any of the reported problems, so there isn't much I can do at this point.
<br>
<p>As I've said before, the root problem here appears to be some hwloc-related issue with your setup. Until that gets resolved so we get correct topology info, I'm not sure what can be done to resolve what you are seeing. I'll raise the question of possibly providing some alternative support for setups like yours that just can't get topology info, but that would definitely be a long-term question.
<br>
<p><p>On Sep 23, 2012, at 3:20 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.7a1r27358 and it has an improved
</span><br>
<span class="quotelev1">&gt; error message compared to openmpi-1.6.2, but doesn't show process bindings
</span><br>
<span class="quotelev1">&gt; and has some other problems as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;sunpc0&quot; and &quot;linpc0&quot; are equipped with two dual-core processors running
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64 and Linux x86_64 resp. &quot;tyr&quot; is a dual-processor machine
</span><br>
<span class="quotelev1">&gt; running Solaris 10 Sparc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 105 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -map-by core -bind-to-core date
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 11:46:36 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 11:46:36 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 106 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.7_64_cc/include -mt -m64 
</span><br>
<span class="quotelev1">&gt;  -L/usr/local/openmpi-1.7_64_cc/lib64 -lmpi -lpicl -lm -lkstat -llgrp
</span><br>
<span class="quotelev1">&gt;  -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.2 shows process bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 103 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -bycore -bind-to-core date
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:09:06 CEST 2012
</span><br>
<span class="quotelev1">&gt; [sunpc0:13197] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; [sunpc0:13197] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:09:06 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 104 mpicc -showme
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.6.2_64_cc/include -mt -m64
</span><br>
<span class="quotelev1">&gt;  -L/usr/local/openmpi-1.6.2_64_cc/lib64 -lmpi -lm -lkstat -llgrp
</span><br>
<span class="quotelev1">&gt;  -lsocket -lnsl -lrt -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my Linux machine I get a warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 113 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -map-by core -bind-to-core date
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
<span class="quotelev1">&gt; Sun Sep 23 11:56:04 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 11:56:04 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works fine with openmpi-1.6.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 106 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev1">&gt;  -bycore -bind-to-core date
</span><br>
<span class="quotelev1">&gt; [linpc0:15808] MCW rank 0 bound to socket 0[core 0]: [B .][. .]
</span><br>
<span class="quotelev1">&gt; [linpc0:15808] MCW rank 1 bound to socket 0[core 1]: [. B][. .]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:11:47 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:11:47 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Om my Solaris Sparc machine I get the following errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 121 mpiexec -np 2 -report-bindings -map-by core -bind-to-core date
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 847
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 1414
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 847
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23773] [[32457,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.7a1r27358/orte/mca/odls/base/odls_base_default_fns.c at line 1414
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 122 mpiexec -np 2 -host tyr -report-bindings -map-by core -bind-to core date
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
<span class="quotelev1">&gt; Once more everything works fine with openmpi-1.6.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 109 mpiexec -np 2 -report-bindings -bycore -bind-to-core date
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23869] MCW rank 0 bound to socket 0[core 0]: [B][.]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23869] MCW rank 1 bound to socket 1[core 0]: [.][B]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:14:09 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:14:09 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 110 mpiexec -np 2 -host tyr -report-bindings -bycore -bind-to-core date
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23877] MCW rank 0 bound to socket 0[core 0]: [B][.]
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:23877] MCW rank 1 bound to socket 1[core 0]: [.][B]
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:16:05 CEST 2012
</span><br>
<span class="quotelev1">&gt; Sun Sep 23 12:16:05 CEST 2012
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
<li><strong>Next message:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20266.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20262.php">Siegmar Gross: "[OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
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
