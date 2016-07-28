<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 07:33:21 2012" -->
<!-- isoreceived="20120216123321" -->
<!-- sent="Thu, 16 Feb 2012 07:33:16 -0500" -->
<!-- isosent="20120216123316" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="6D6BEF70-083D-452C-840A-463B99CA3524_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201202161306.36657.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 07:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10449.php">Jeff Squyres: "[OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>Previous message:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10453.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10453.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yowza.  With inconsistent results like that, it does sound like something is going on in the hardware.  Unfortunately, I don't know much/anything about AMDs (Cisco is an Intel shop).  :-\
<br>
<p>Do you have (AMD's equivalent of) hyperthreading enabled, perchance?
<br>
<p>In the latest 1.5.5 nightly tarball, I have just upgraded the included version of hwloc to be 1.3.2.  Maybe a good step would be to download hwloc 1.3.2 and verify that lstopo is faithfully reporting the actual topology of your system.  Can you do that?
<br>
<p><p>On Feb 16, 2012, at 7:06 AM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry for the confusion - the all2all is a classic pingpong which uses 
</span><br>
<span class="quotelev1">&gt; MPI_Send/Recv with 0 byte messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing I just noticed when using NetPIPE/MPI. Platform MPI results in 
</span><br>
<span class="quotelev1">&gt; almost constant latencies for small messages (~0.89us), where I don't know 
</span><br>
<span class="quotelev1">&gt; about process-binding in Platform MPI - I just used the defaults.
</span><br>
<span class="quotelev1">&gt; When using Open MPI (regardless of core/socket-binding) the results differ from 
</span><br>
<span class="quotelev1">&gt; run to run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === FIRST RUN ===
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 1: n029
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 0: n029
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;  0:       1 bytes 100000 times --&gt;      4.66 Mbps in       1.64 usec
</span><br>
<span class="quotelev1">&gt;  1:       2 bytes 100000 times --&gt;      8.94 Mbps in       1.71 usec
</span><br>
<span class="quotelev1">&gt;  2:       3 bytes 100000 times --&gt;     13.65 Mbps in       1.68 usec
</span><br>
<span class="quotelev1">&gt;  3:       4 bytes 100000 times --&gt;     17.91 Mbps in       1.70 usec
</span><br>
<span class="quotelev1">&gt;  4:       6 bytes 100000 times --&gt;     29.04 Mbps in       1.58 usec
</span><br>
<span class="quotelev1">&gt;  5:       8 bytes 100000 times --&gt;     39.06 Mbps in       1.56 usec
</span><br>
<span class="quotelev1">&gt;  6:      12 bytes 100000 times --&gt;     57.58 Mbps in       1.59 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === SECOND RUN (~3s after the previous run) ===
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 1: n029
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 0: n029
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;  0:       1 bytes 100000 times --&gt;      5.73 Mbps in       1.33 usec
</span><br>
<span class="quotelev1">&gt;  1:       2 bytes 100000 times --&gt;     11.45 Mbps in       1.33 usec
</span><br>
<span class="quotelev1">&gt;  2:       3 bytes 100000 times --&gt;     17.13 Mbps in       1.34 usec
</span><br>
<span class="quotelev1">&gt;  3:       4 bytes 100000 times --&gt;     22.94 Mbps in       1.33 usec
</span><br>
<span class="quotelev1">&gt;  4:       6 bytes 100000 times --&gt;     34.39 Mbps in       1.33 usec
</span><br>
<span class="quotelev1">&gt;  5:       8 bytes 100000 times --&gt;     46.40 Mbps in       1.32 usec
</span><br>
<span class="quotelev1">&gt;  6:      12 bytes 100000 times --&gt;     68.92 Mbps in       1.33 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === THIRD RUN ===
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --bind-to-socket ./NPmpi_ompi1.5.5  -S -u 12 -n 100000
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 0: n029
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 1: n029
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;  0:       1 bytes 100000 times --&gt;      3.50 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt;  1:       2 bytes 100000 times --&gt;      6.99 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt;  2:       3 bytes 100000 times --&gt;     10.48 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt;  3:       4 bytes 100000 times --&gt;     14.00 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt;  4:       6 bytes 100000 times --&gt;     20.98 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt;  5:       8 bytes 100000 times --&gt;     27.84 Mbps in       2.19 usec
</span><br>
<span class="quotelev1">&gt;  6:      12 bytes 100000 times --&gt;     41.99 Mbps in       2.18 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At first appearance, I assumed that some CPU power saving feature is enabled. 
</span><br>
<span class="quotelev1">&gt; But the CPU frequency scaling is set to &quot;performance&quot; and there is only one 
</span><br>
<span class="quotelev1">&gt; available frequency (2.2GHz).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea how this can happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wednesday 15 February 2012 19:29:38 Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Something is definitely wrong -- 1.4us is way too high for a 0 or 1 byte
</span><br>
<span class="quotelev2">&gt;&gt; HRT ping pong.  What is this all2all benchmark, btw?  Is it measuring an
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ALLTOALL, or a pingpong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, on an older Nehalem machine running NetPIPE/MPI, I'm getting about
</span><br>
<span class="quotelev2">&gt;&gt; .27us latencies for short messages over sm and binding to socket.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 14, 2012, at 7:20 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've built Open MPI 1.5.5rc1 (tarball from Web) with CFLAGS=-O3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, also without any effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here some results with enabled binding reports:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *--bind-to-core* --report-bindings -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61313] [[56788,0],0] odls:default:fork binding child [[56788,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61313] [[56788,0],0] odls:default:fork binding child [[56788,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 1.415us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *-mca maffinity hwloc --bind-to-core* --report-bindings -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61469] [[49736,0],0] odls:default:fork binding child [[49736,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61469] [[49736,0],0] odls:default:fork binding child [[49736,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 1.4us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *-mca maffinity first_use --bind-to-core* --report-bindings -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61508] [[49681,0],0] odls:default:fork binding child [[49681,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61508] [[49681,0],0] odls:default:fork binding child [[49681,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 1.4us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *--bind-to-socket* --report-bindings -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61337] [[56780,0],0] odls:default:fork binding child [[56780,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61337] [[56780,0],0] odls:default:fork binding child [[56780,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *-mca maffinity hwloc --bind-to-socket* --report-bindings -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61615] [[49914,0],0] odls:default:fork binding child [[49914,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61615] [[49914,0],0] odls:default:fork binding child [[49914,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun *-mca maffinity first_use --bind-to-socket* --report-bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -np 2 ./all2all_ompi1.5.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61639] [[49810,0],0] odls:default:fork binding child [[49810,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [n043:61639] [[49810,0],0] odls:default:fork binding child [[49810,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to socket 0 cpus 0001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latency: 4.0us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If socket-binding is enabled it seems that all ranks are bind to the very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first core of one and the same socket. Is it intended? I expected that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each rank gets its own socket (i.e. 2 ranks -&gt; 2 sockets)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Monday 13 February 2012 22:36:50 Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, double check that you have an optimized build, not a debugging
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SVN and HG checkouts default to debugging builds, which add in lots of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latency.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 13, 2012, at 10:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Few thoughts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. Bind to socket is broken in 1.5.4 - fixed in next release
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. Add --report-bindings to cmd line and see where it thinks the procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are bound
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. Sounds lime memory may not be local - might be worth checking mem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; binding.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 13, 2012, at 7:07 AM, Matthias Jurenz &lt;matthias.jurenz_at_tu-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dresden.de&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Sylvain,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks for the quick response!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here some results with enabled process binding. I hope I used the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; parameters correctly...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bind two ranks to one socket:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 --bind-to-core ./all2all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 -mca mpi_paffinity_alone 1 ./all2all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bind two ranks to two different sockets:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 --bind-to-socket ./all2all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All three runs resulted in similar bad latencies (~1.4us).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; :-(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Monday 13 February 2012 12:43:22 sylvain.jeaugey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Matthias,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You might want to play with process binding to see if your problem is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; related to bad memory affinity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try to launch pingpong on two CPUs of the same socket, then on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; different sockets (i.e. bind each process to a core, and try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; different configurations).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date :  13/02/2012 12:12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Objet : [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Envoy&#233; par :    devel-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; latencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (~1.5us) when performing 0-byte p2p communication on one single node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is pretty good. The bandwidth results are similar for both MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; implementations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (~3,3GB/s) - this is okay.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; One node has 64 cores and 64Gb RAM where it doesn't matter how many
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ranks allocated by the application. We get similar results with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; different number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ranks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; special
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure options except the installation prefix and the location of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the LSF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; use /dev/shm instead of /tmp for the session directory, but it had no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; effect. Furthermore, we tried the current release candidate 1.5.5rc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of Open MPI which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; provides an option to use the SysV shared memory (-mca shmem sysv) -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; also this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; results in similar poor latencies.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10449.php">Jeff Squyres: "[OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>Previous message:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10447.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10453.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10453.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
