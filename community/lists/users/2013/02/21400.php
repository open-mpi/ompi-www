<?
$subject_val = "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 12:46:40 2013" -->
<!-- isoreceived="20130214174640" -->
<!-- sent="Thu, 14 Feb 2013 09:46:32 -0800" -->
<!-- isosent="20130214174632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?" -->
<!-- id="BC2DF69F-DB20-47C5-9BC8-1273363D0951_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="511D16AE.3030809_at_deltacomputer.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 12:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>In reply to:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure - use the 1.7 branch or the developer's trunk. We have the --bind-to numa option there.
<br>
<p><p>On Feb 14, 2013, at 8:54 AM, Oliver Weihe &lt;weihe_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it possible to bind MPI processes to a NUMA node somehow on Opteron 6xxx series CPUs (e.g. --bind-to-NUMAnode) *without* the usage of a rankfile? 
</span><br>
<span class="quotelev1">&gt; Opteron 6xxx have two NUMA nodes per CPU(-socket) so --bind-to-socket doesn't work as I want. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a 4 socket Opteron 6344 (12 CPUs per CPU(-socket)): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_node01:~&gt; numactl --hardware | grep cpus 
</span><br>
<span class="quotelev1">&gt; node 0 cpus: 0 1 2 3 4 5 
</span><br>
<span class="quotelev1">&gt; node 1 cpus: 6 7 8 9 10 11 
</span><br>
<span class="quotelev1">&gt; node 2 cpus: 12 13 14 15 16 17 
</span><br>
<span class="quotelev1">&gt; node 3 cpus: 18 19 20 21 22 23 
</span><br>
<span class="quotelev1">&gt; node 4 cpus: 24 25 26 27 28 29 
</span><br>
<span class="quotelev1">&gt; node 5 cpus: 30 31 32 33 34 35 
</span><br>
<span class="quotelev1">&gt; node 6 cpus: 36 37 38 39 40 41 
</span><br>
<span class="quotelev1">&gt; node 7 cpus: 42 43 44 45 46 47 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; root_at_node01:~&gt; /opt/openmpi/1.6.3/gcc/bin/mpirun --report-bindings -np 8 --bind-to-socket --bysocket sleep 1s 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 1 bound to socket 1[core 0-11]: [. . . . . . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 2 bound to socket 2[core 0-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 3 bound to socket 3[core 0-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 4 bound to socket 0[core 0-11]: [B B B B B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 5 bound to socket 1[core 0-11]: [. . . . . . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 6 bound to socket 2[core 0-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 7 bound to socket 3[core 0-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B] 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21446] MCW rank 0 bound to socket 0[core 0-11]: [B B B B B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So each process is bound to *two* NUMA nodes, but I wan't to bind to *one* NUMA node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I want is more like this: 
</span><br>
<span class="quotelev1">&gt; root_at_node01:~&gt; cat rankfile 
</span><br>
<span class="quotelev1">&gt; rank 0=localhost slot=0-5 
</span><br>
<span class="quotelev1">&gt; rank 1=localhost slot=6-11 
</span><br>
<span class="quotelev1">&gt; rank 2=localhost slot=12-17 
</span><br>
<span class="quotelev1">&gt; rank 3=localhost slot=18-23 
</span><br>
<span class="quotelev1">&gt; rank 4=localhost slot=24-29 
</span><br>
<span class="quotelev1">&gt; rank 5=localhost slot=30-35 
</span><br>
<span class="quotelev1">&gt; rank 6=localhost slot=36-41 
</span><br>
<span class="quotelev1">&gt; rank 7=localhost slot=42-47 
</span><br>
<span class="quotelev1">&gt; root_at_node01:~&gt; /opt/openmpi/1.6.3/gcc/bin/mpirun --report-bindings -np 8 --rankfile rankfile sleep 1s 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 1 bound to socket 0[core 6-11]: [. . . . . . B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .] (slot list 6-11) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 2 bound to socket 1[core 0-5]: [. . . . . . . . . . . .][B B B B B B . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .] (slot list 12-17) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 3 bound to socket 1[core 6-11]: [. . . . . . . . . . . .][. . . . . . B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .] (slot list 18-23) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 4 bound to socket 2[core 0-5]: [. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B . . . . . .][. . . . . . . . . . . .] (slot list 24-29) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 5 bound to socket 2[core 6-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . B B B B B B][. . . . . . . . . . . .] (slot list 30-35) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 6 bound to socket 3[core 0-5]: [. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B B B B . . . . . .] (slot list 36-41) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 7 bound to socket 3[core 6-11]: [. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . B B B B B B] (slot list 42-47) 
</span><br>
<span class="quotelev1">&gt; [node01.cluster:21505] MCW rank 0 bound to socket 0[core 0-5]: [B B B B B B . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .] (slot list 0-5) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually I'm dreaming of 
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to-NUMAnode --bycore ... 
</span><br>
<span class="quotelev1">&gt; or 
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to-NUMAnode --byNUMAnode ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any workaround execpt rankfiles for this? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt;  Oliver Weihe
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21401.php">Ralph Castain: "Re: [OMPI users] OpenMPI job launch failures"</a>
<li><strong>Previous message:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>In reply to:</strong> <a href="21399.php">Oliver Weihe: "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
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
