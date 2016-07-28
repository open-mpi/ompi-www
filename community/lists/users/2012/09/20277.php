<?
$subject_val = "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 10:57:50 2012" -->
<!-- isoreceived="20120924145750" -->
<!-- sent="Mon, 24 Sep 2012 07:57:42 -0700" -->
<!-- isosent="20120924145742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359" -->
<!-- id="74B32E91-FA56-4A7D-844D-6A60BA81E187_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209241204.q8OC4okb029216_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-24 10:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe in reply to:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warning is telling you that we don't see libnuma on that machine, and therefore we cannot bind memory to your local process. You can turn the warning off by adding
<br>
<p>-mca hwloc_base_mem_bind_failure_action silent
<br>
<p>As for why you get different outputs, I honestly don't know - I can't replicate that behavior (and I've now tried on multiple installations), which makes me suspicious that it has something to do with your setup. One thing you could check is that your path and ld_library_path on linpc1 is pointing to the right version of OMPI when remotely invoked - i.e., that the orted being started on linpc1 when you execute mpirun on tyr is in fact the orted from the desired version of OMPI. It looks to me like maybe that isn't correct.
<br>
<p><p>On Sep 24, 2012, at 5:04 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...works fine for me on Linux x86_64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc_at_bend001 svn-trunk]$ mpirun -n 4 -host bend002 -report-bindings -map-by core -bind-to core date
</span><br>
<span class="quotelev2">&gt;&gt; [bend002:04730] MCW rank 3 bound to socket 1[core 2[hwt 0-1]]:[../../../BB/../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend002:04730] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:[BB/../../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend002:04730] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]:[../BB/../../../..]
</span><br>
<span class="quotelev2">&gt;&gt; [bend002:04730] MCW rank 2 bound to socket 0[core 2[hwt 0-1]]:[../../BB/../../..]
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 23 10:39:46 MDT 2012
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 23 10:39:46 MDT 2012
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 23 10:39:46 MDT 2012
</span><br>
<span class="quotelev2">&gt;&gt; Sun Sep 23 10:39:46 MDT 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is with 1.9a1r27360
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a warning on my Linux machine (Sun Ultra 40, 2 dual-core AMD
</span><br>
<span class="quotelev1">&gt; Opteron 280 processors, openSuSE Linux 12.1) and the output depends
</span><br>
<span class="quotelev1">&gt; on the location where I run the command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 149 ssh linpc1 mpicc -showme:version
</span><br>
<span class="quotelev1">&gt; mpicc: Open MPI 1.9a1r27361 (Language: C)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 150 mpirun -np 4 -host linpc1 -report-bindings -map-by core -bind-to core date 
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
<span class="quotelev1">&gt;  Node:  linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:52:18 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:52:18 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:52:18 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:52:18 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 151 ssh linpc1
</span><br>
<span class="quotelev1">&gt; linpc1 fd1026 96 mpirun -np 4 -host linpc1 -report-bindings -map-by core -bind-to core date 
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
<span class="quotelev1">&gt;  Node:  linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:53:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:53:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:53:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; [linpc1:21580] MCW rank 2 bound to socket 1[core 0[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [linpc1:21580] MCW rank 3 bound to socket 1[core 1[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev1">&gt; [linpc1:21580] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/.][./.]
</span><br>
<span class="quotelev1">&gt; [linpc1:21580] MCW rank 1 bound to socket 0[core 1[hwt 0]]: [./B][./.]
</span><br>
<span class="quotelev1">&gt; Mon Sep 24 13:53:30 CEST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions why I get a warning and why I get different outputs?
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance. Hopefully I'm not annoying
</span><br>
<span class="quotelev1">&gt; you with all my emails. Please let me know if it is too much.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 23, 2012, at 3:32 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yesterday I installed openmpi-1.9a1r27359 and it doesn't report process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bindings on Solaris 10 x86_64 and Linux x86_64. As I showed in my previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email for openmpi-1.7, it worked for openmpi-1.6.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 114 mpiexec -np 2 -host sunpc0 -report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -map-by core -bind-to core date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:25 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:25 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 115 mpiexec -np 2 -host linpc0 -report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -map-by core -bind-to core date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node:  linpc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be degraded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:36 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:36 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr fd1026 116 mpiexec -np 2 -host tyr -report-bindings \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -map-by core -bind-to core date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:24039] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B][.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tyr.informatik.hs-fulda.de:24039] MCW rank 1 bound to socket 1[core 1[hwt 0]]: [.][B]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:48 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun Sep 23 12:29:48 CEST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20276.php">Ralph Castain: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Maybe in reply to:</strong> <a href="20263.php">Siegmar Gross: "[OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
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
