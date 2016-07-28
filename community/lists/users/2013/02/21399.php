<?
$subject_val = "[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 11:54:13 2013" -->
<!-- isoreceived="20130214165413" -->
<!-- sent="Thu, 14 Feb 2013 17:54:06 +0100" -->
<!-- isosent="20130214165406" -->
<!-- name="Oliver Weihe" -->
<!-- email="weihe_at_[hidden]" -->
<!-- subject="[OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?" -->
<!-- id="511D16AE.3030809_at_deltacomputer.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?<br>
<strong>From:</strong> Oliver Weihe (<em>weihe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 11:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Previous message:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Reply:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>is it possible to bind MPI processes to a NUMA node somehow on Opteron 
<br>
6xxx series CPUs (e.g. --bind-to-NUMAnode) *without* the usage of a 
<br>
rankfile?
<br>
Opteron 6xxx have two NUMA nodes per CPU(-socket) so --bind-to-socket 
<br>
doesn't work as I want.
<br>
<p>This is a 4 socket Opteron 6344 (12 CPUs per CPU(-socket)):
<br>
<p>root_at_node01:~&gt; numactl --hardware | grep cpus
<br>
node 0 cpus: 0 1 2 3 4 5
<br>
node 1 cpus: 6 7 8 9 10 11
<br>
node 2 cpus: 12 13 14 15 16 17
<br>
node 3 cpus: 18 19 20 21 22 23
<br>
node 4 cpus: 24 25 26 27 28 29
<br>
node 5 cpus: 30 31 32 33 34 35
<br>
node 6 cpus: 36 37 38 39 40 41
<br>
node 7 cpus: 42 43 44 45 46 47
<br>
<p>root_at_node01:~&gt; /opt/openmpi/1.6.3/gcc/bin/mpirun --report-bindings -np 8 
<br>
--bind-to-socket --bysocket sleep 1s
<br>
[node01.cluster:21446] MCW rank 1 bound to socket 1[core 0-11]: [. . . . 
<br>
. . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .]
<br>
[node01.cluster:21446] MCW rank 2 bound to socket 2[core 0-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B][. . . 
<br>
. . . . . . . . .]
<br>
[node01.cluster:21446] MCW rank 3 bound to socket 3[core 0-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B 
<br>
B B B B B B B B B]
<br>
[node01.cluster:21446] MCW rank 4 bound to socket 0[core 0-11]: [B B B B 
<br>
B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .]
<br>
[node01.cluster:21446] MCW rank 5 bound to socket 1[core 0-11]: [. . . . 
<br>
. . . . . . . .][B B B B B B B B B B B B][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .]
<br>
[node01.cluster:21446] MCW rank 6 bound to socket 2[core 0-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][B B B B B B B B B B B B][. . . 
<br>
. . . . . . . . .]
<br>
[node01.cluster:21446] MCW rank 7 bound to socket 3[core 0-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B 
<br>
B B B B B B B B B]
<br>
[node01.cluster:21446] MCW rank 0 bound to socket 0[core 0-11]: [B B B B 
<br>
B B B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .]
<br>
<p>So each process is bound to *two* NUMA nodes, but I wan't to bind to 
<br>
*one* NUMA node.
<br>
<p>What I want is more like this:
<br>
root_at_node01:~&gt; cat rankfile
<br>
rank 0=localhost slot=0-5
<br>
rank 1=localhost slot=6-11
<br>
rank 2=localhost slot=12-17
<br>
rank 3=localhost slot=18-23
<br>
rank 4=localhost slot=24-29
<br>
rank 5=localhost slot=30-35
<br>
rank 6=localhost slot=36-41
<br>
rank 7=localhost slot=42-47
<br>
root_at_node01:~&gt; /opt/openmpi/1.6.3/gcc/bin/mpirun --report-bindings -np 8 
<br>
--rankfile rankfile sleep 1s
<br>
[node01.cluster:21505] MCW rank 1 bound to socket 0[core 6-11]: [. . . . 
<br>
. . B B B B B B][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .] (slot list 6-11)
<br>
[node01.cluster:21505] MCW rank 2 bound to socket 1[core 0-5]: [. . . . 
<br>
. . . . . . . .][B B B B B B . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .] (slot list 12-17)
<br>
[node01.cluster:21505] MCW rank 3 bound to socket 1[core 6-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . B B B B B B][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .] (slot list 18-23)
<br>
[node01.cluster:21505] MCW rank 4 bound to socket 2[core 0-5]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][B B B B B B . . . . . .][. . . 
<br>
. . . . . . . . .] (slot list 24-29)
<br>
[node01.cluster:21505] MCW rank 5 bound to socket 2[core 6-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][. . . . . . B B B B B B][. . . 
<br>
. . . . . . . . .] (slot list 30-35)
<br>
[node01.cluster:21505] MCW rank 6 bound to socket 3[core 0-5]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][B B B 
<br>
B B B . . . . . .] (slot list 36-41)
<br>
[node01.cluster:21505] MCW rank 7 bound to socket 3[core 6-11]: [. . . . 
<br>
. . . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . B B B B B B] (slot list 42-47)
<br>
[node01.cluster:21505] MCW rank 0 bound to socket 0[core 0-5]: [B B B B 
<br>
B B . . . . . .][. . . . . . . . . . . .][. . . . . . . . . . . .][. . . 
<br>
. . . . . . . . .] (slot list 0-5)
<br>
<p><p>Actually I'm dreaming of
<br>
mpirun --bind-to-NUMAnode --bycore ...
<br>
or
<br>
mpirun --bind-to-NUMAnode --byNUMAnode ...
<br>
<p>Is there any workaround execpt rankfiles for this?
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Oliver Weihe
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Previous message:</strong> <a href="21398.php">Maxime Boissonneault: "[OMPI users] Very high latency with openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
<li><strong>Reply:</strong> <a href="21400.php">Ralph Castain: "Re: [OMPI users] process binding to NUMA node on Opteron 6xxx series CPUs?"</a>
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
