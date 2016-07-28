<?
$subject_val = "[OMPI users] reasons for jitter other than paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  1 04:21:27 2010" -->
<!-- isoreceived="20100601082127" -->
<!-- sent="Tue, 01 Jun 2010 10:21:42 +0200" -->
<!-- isosent="20100601082142" -->
<!-- name="Javier Fern&#225;ndez" -->
<!-- email="javier_at_[hidden]" -->
<!-- subject="[OMPI users] reasons for jitter other than paffinity" -->
<!-- id="4C04C316.8070200_at_atc.ugr.es" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] reasons for jitter other than paffinity<br>
<strong>From:</strong> Javier Fern&#225;ndez (<em>javier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-01 04:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was running the pi demo on multicores (Pentium Dual, Core i7) to see
<br>
it scale, but sometimes the time measurements return disparate results.
<br>
The FAQ suggests processor affinity as one possible reason for that. For
<br>
instance, the demo takes 3s in one core of the Pentium Dual
<br>
<span class="quotelev1">&gt; $ mpirun -h
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; $ mpirun -c 1 pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs    Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  1       2.963499        6.332712E-13
</span><br>
<p>and approx. half the time in both cores, sometimes
<br>
<span class="quotelev1">&gt; $ mpirun -c 2 pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs    Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.535394        2.291500E-13
</span><br>
<span class="quotelev1">&gt; $ mpirun -c 2 pi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  2       2.497539        2.291500E-13
</span><br>
<p>Say 6/10 times it takes 2.5s, 4/10 it takes 1.5s.
<br>
<p>So I followed FAQ remarks about paffinity
<br>
<span class="quotelev1">&gt; $ mpirun -mca mpi_paffinity_alone 1 -c 2 pi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  2       1.496346        2.291500E-13
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca mpi_paffinity_alone 1 -c 2 pi
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  2       2.527654        2.291500E-13
</span><br>
<p>Say 2/10 times it takes 2.5s. I'm not sure that's the way it's expected
<br>
to work, getting the not-bound-to-core time once in five tries.
<br>
<p>I guess I'm doing something wrong. I tried to discover if the ranks are
<br>
being effectively bound. It seems they are.
<br>
<span class="quotelev1">&gt; $ mpirun -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03233] [[51755,0],0] odls:default:fork binding child [[51755,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo0:03233] [[51755,0],0] odls:default:fork binding child [[51755,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.536590        2.291500E-13
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03236] [[51758,0],0] odls:default:fork binding child [[51758,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo0:03236] [[51758,0],0] odls:default:fork binding child [[51758,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       2.556353        2.291500E-13
</span><br>
<p>Then I thought it might be related to ompi believing the node was being
<br>
oversubscribed and thus entering Degraded Mode instead of Agressive
<br>
(altough this pi demo has only one send-recv at the end of the code, so
<br>
it's hard to believe 1s diff is due to that). Cool this -nooversubscribe
<br>
switch, to quickly make sure about it
<br>
<span class="quotelev1">&gt; i$ mpirun -nooversubscribe -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<p>If I correctly understand, slots can be only specified in a hostfile,
<br>
not in mpirun switches. Is that true?
<br>
<span class="quotelev1">&gt; $ cat hf
</span><br>
<span class="quotelev1">&gt; n0 slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; $ mpirun -hostfile hf -mca mpi_paffinity_alone 1 -report-bindings -c 3 pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 3 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -hostfile hf -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03444] [[52222,0],0] odls:default:fork binding child [[52222,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo0:03444] [[52222,0],0] odls:default:fork binding child [[52222,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; ^[[A
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.502448        2.291500E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -hostfile hf -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03447] [[52221,0],0] odls:default:fork binding child [[52221,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo0:03447] [[52221,0],0] odls:default:fork binding child [[52221,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       2.540400        2.291500E-13
</span><br>
<p>Sometimes you need 10-15 tries to get 2.5s. That's much more reliable,
<br>
but I'm not sure I'm getting it right. Is it the expected way it works?
<br>
Is it normal to get the not-bound-to-core time once in 10-15 tries? Am I
<br>
missing something else?
<br>
<p>I see there are also rankfiles, so I tried this
<br>
<span class="quotelev1">&gt; $ cat rf
</span><br>
<span class="quotelev1">&gt; rank 0=n0 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=n0 slot=0:1
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -rf rf -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03512] [[52018,0],0] odls:default:fork binding child [[52018,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [nodo0:03512] [[52018,0],0] odls:default:fork binding child [[52018,1],1] to slot_list 0:1
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       2.503292        2.291500E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -rf rf -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03515] [[52017,0],0] odls:default:fork binding child [[52017,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [nodo0:03515] [[52017,0],0] odls:default:fork binding child [[52017,1],1] to slot_list 0:1
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.546936        2.291500E-13
</span><br>
<p>I got 4/10 times 2.5s, and the same (well, 5/10) if I also include
<br>
-hostfile hf, so it seems I am still missing something. Probably that 
<br>
uncontrolled &quot;something&quot; is what the statistics 2/10 - 4/10 hang on.
<br>
<p>And editing the files to point to n1, one of the Core i7 nodes...
<br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ grep cores /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; cpu cores       : 2
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ ssh n1 grep cores /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; $ cat hf
</span><br>
<span class="quotelev1">&gt; n1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ cat rf
</span><br>
<span class="quotelev1">&gt; rank 0=n1 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=n1 slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 2=n1 slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 3=n1 slot=0:3
</span><br>
<p>The 3s sequential become 1.66s in this node
<br>
<span class="quotelev1">&gt; $ mpirun -H n1 pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  1       1.662411        6.332712E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -H n1 -mca mpi_paffinity_alone 1 -report-bindings -c 1 pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  1       1.663015        6.332712E-13
</span><br>
<p>Hmf, didn't report the bindings since there are none, as I forgot to
<br>
mention the slots...
<br>
<p><span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -H n1 -display-devel-map -mca mpi_paffinity_alone 1 -report-bindings -c 1 pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0402
</span><br>
<span class="quotelev1">&gt;         Npernode: 0     Oversubscribe allowed: TRUE     CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n1                Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 1    Num cores/socket: 2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 1
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  1       1.663060        6.332712E-13
</span><br>
<p>...I forgot to use the hostfile to mention the slots, so ompi thinks I'm
<br>
oversubscribing a 1-slot node. It also thinks this is a dual-core node,
<br>
like the one I'm typing mpirun on. I could fix the core count from
<br>
command line, but not the oversubscription (and consequently degraded
<br>
mode). 1.66s become 1.84s with 2 ranks. Hmm, now I think of it, it's 1s 
<br>
diff to the expected 0.84s...
<br>
<p><span class="quotelev1">&gt; $ mpirun -H n1 -num-cores 4 -display-devel-map -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0402
</span><br>
<span class="quotelev1">&gt;         Npernode: 0     Oversubscribe allowed: TRUE     CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n1                Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 1    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         Num slots: 1    Slots in use: 2
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.843984        2.291500E-13
</span><br>
<p>It's indeed oversubscribed
<br>
<p><span class="quotelev1">&gt; $ mpirun -H n1 -nooversubscribe -num-cores 4 -display-devel-map -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 2 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<p><p>So here goes the hostfile
<br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ cat hf
</span><br>
<span class="quotelev1">&gt; n1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -hostfile hf -nooversubscribe -num-cores 4 -display-devel-map -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0402
</span><br>
<span class="quotelev1">&gt;         Npernode: 0     Oversubscribe allowed: FALSE    CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: n1                Launch id: -1   Arch: 0 State: 0
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 1    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;         Num slots: 4    Slots in use: 2
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 4  Max slots: 4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.845798        2.291500E-13
</span><br>
<p>Ouch! Where are my bindings? This did work for node n0!!!
<br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ cat hf1
</span><br>
<span class="quotelev1">&gt; n1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ cat hf0
</span><br>
<span class="quotelev1">&gt; n0 slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -hostfile hf0 -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo0:03202] [[51720,0],0] odls:default:fork binding child [[51720,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo0:03202] [[51720,0],0] odls:default:fork binding child [[51720,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.529327        2.291500E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ mpirun -hostfile hf1 -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.842951        2.291500E-13
</span><br>
<p>Ok, I'm moving to node n1
<br>
<span class="quotelev1">&gt; cpd_at_nodo0:~/ompi$ ssh n1
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~$ cd ompi
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -mca mpi_paffinity_alone 1 -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:02772] [[8858,0],0] odls:default:fork binding child [[8858,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02772] [[8858,0],0] odls:default:fork binding child [[8858,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.841935        2.291500E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ cat hf1
</span><br>
<span class="quotelev1">&gt; n1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ grep cores /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpu cores       : 4
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun pi
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  1       1.661314        6.332712E-13
</span><br>
<p>Hmf, with 2 cores I get 1.84s 10/10 times. These results below are 
<br>
10/10, perfectly reproducible without a glitch. -bind-to-core is 
<br>
required to get -report-bindings to report something. Is it different 
<br>
from -mca mpi_paffinity_alone 1? I find it easier to use (shorter to 
<br>
type in).
<br>
<span class="quotelev1">&gt;    -bind-to-core|--bind-to-core
</span><br>
<span class="quotelev1">&gt;                          Whether to bind processes to specific cores (the
</span><br>
<span class="quotelev1">&gt;                          default)
</span><br>
<p><span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -report-bindings -c 2 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:02836] [[9050,0],0] odls:default:fork binding child [[9050,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02836] [[9050,0],0] odls:default:fork binding child [[9050,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  2       1.841275        2.291500E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -report-bindings -c 3 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:02839] [[9049,0],0] odls:default:fork binding child [[9049,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02839] [[9049,0],0] odls:default:fork binding child [[9049,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [nodo1:02839] [[9049,0],0] odls:default:fork binding child [[9049,1],2] to cpus 0004
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  3       1.571870        3.606004E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -report-bindings -c 4 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:02843] [[9045,0],0] odls:default:fork binding child [[9045,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02843] [[9045,0],0] odls:default:fork binding child [[9045,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [nodo1:02843] [[9045,0],0] odls:default:fork binding child [[9045,1],2] to cpus 0004
</span><br>
<span class="quotelev1">&gt; [nodo1:02843] [[9045,0],0] odls:default:fork binding child [[9045,1],3] to cpus 0008
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  4       1.436920        4.236611E-13
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -report-bindings -c 5 pi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 5 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<p>Hmm ,wait, I got this one on a second try (so it's really 1/20)
<br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -report-bindings -c 4 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:02934] [[9016,0],0] odls:default:fork binding child [[9016,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02934] [[9016,0],0] odls:default:fork binding child [[9016,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [nodo1:02934] [[9016,0],0] odls:default:fork binding child [[9016,1],2] to cpus 0004
</span><br>
<span class="quotelev1">&gt; [nodo1:02934] [[9016,0],0] odls:default:fork binding child [[9016,1],3] to cpus 0008
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  4       2.437651        4.236611E-13
</span><br>
Hmm, yup, I see it: again 1s diff with the expected 1.43. No clue.
<br>
<p>The full devel-map for the -c 4 run (making sure with -nooversubscribe) is
<br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -hostfile hf1 -bind-to-core -nooversubscribe -report-bindings -display-devel-map -c 4 pi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0402
</span><br>
<span class="quotelev1">&gt;         Npernode: 0     Oversubscribe allowed: FALSE    CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;         Num new daemons: 0      New daemon starting vpid INVALID
</span><br>
<span class="quotelev1">&gt;         Num nodes: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: nodo1             Launch id: -1   Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;         Num boards: 1   Num sockets/board: 1    Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;         Daemon: [[9168,0],0]    Daemon launched: True
</span><br>
<span class="quotelev1">&gt;         Num slots: 4    Slots in use: 4
</span><br>
<span class="quotelev1">&gt;         Num slots allocated: 4  Max slots: 4
</span><br>
<span class="quotelev1">&gt;         Username on node: NULL
</span><br>
<span class="quotelev1">&gt;         Num procs: 4    Next node_rank: 4
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[9168,1],0]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[9168,1],1]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 1   Node rank: 1
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[9168,1],2]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 2   Node rank: 2
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;         Data for proc: [[9168,1],3]
</span><br>
<span class="quotelev1">&gt;                 Pid: 0  Local rank: 3   Node rank: 3
</span><br>
<span class="quotelev1">&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; [nodo1:02974] [[9168,0],0] odls:default:fork binding child [[9168,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [nodo1:02974] [[9168,0],0] odls:default:fork binding child [[9168,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt; [nodo1:02974] [[9168,0],0] odls:default:fork binding child [[9168,1],2] to cpus 0004
</span><br>
<span class="quotelev1">&gt; [nodo1:02974] [[9168,0],0] odls:default:fork binding child [[9168,1],3] to cpus 0008
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  4       1.452407        4.236611E-13
</span><br>
<p>And this is using the rankfile
<br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ cat rf
</span><br>
<span class="quotelev1">&gt; rank 0=n1 slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=n1 slot=0:1
</span><br>
<span class="quotelev1">&gt; rank 2=n1 slot=0:2
</span><br>
<span class="quotelev1">&gt; rank 3=n1 slot=0:3
</span><br>
<span class="quotelev1">&gt; cpd_at_nodo1:~/ompi$ mpirun -rf rf -report-bindings -c 4 pi
</span><br>
<span class="quotelev1">&gt; [nodo1:03004] [[9202,0],0] odls:default:fork binding child [[9202,1],0] to slot_list 0:0
</span><br>
<span class="quotelev1">&gt; [nodo1:03004] [[9202,0],0] odls:default:fork binding child [[9202,1],1] to slot_list 0:1
</span><br>
<span class="quotelev1">&gt; [nodo1:03004] [[9202,0],0] odls:default:fork binding child [[9202,1],2] to slot_list 0:2
</span><br>
<span class="quotelev1">&gt; [nodo1:03004] [[9202,0],0] odls:default:fork binding child [[9202,1],3] to slot_list 0:3
</span><br>
<span class="quotelev1">&gt; # Estimation of pi is 3.141593 after 1e+08 iterations
</span><br>
<span class="quotelev1">&gt; # PCs   Time (s)        Error
</span><br>
<span class="quotelev1">&gt;  4       1.435335        4.236611E-13
</span><br>
<p>So I thought I'd better ask for help, and following mailing-list 
<br>
experience, have yet another coffee meanwhile :-)
<br>
<p>Are these results normal? Why can't I get results similar to the Pentium 
<br>
dual on the Core i7? I would have expected to see some 0.84s with -c 2 
<br>
every now and then, and very frequently if using -bind-to-core. I 
<br>
realize I don't have a clear concept of when/wheter hostfile/slots are 
<br>
required, or if -num-cores with -bind-to-core should have worked fine. 
<br>
Is there any (mpirun switch-mca parameter) I'm missing that would 
<br>
provide 10/10 results in the Pentium dual, and/or let the pi application 
<br>
scale well on the Core i7?
<br>
<p>Thanks in advance for any suggestions.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13193.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13191.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with IB	hardware and memory manager."</a>
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
