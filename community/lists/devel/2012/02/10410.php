<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 07:21:04 2012" -->
<!-- isoreceived="20120214122104" -->
<!-- sent="Tue, 14 Feb 2012 13:20:59 +0100" -->
<!-- isosent="20120214122059" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202141320.59724.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DA9E3F14-CDCB-48FB-9E24-BB94740EE75A_at_cisco.com" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 07:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10405.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10432.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10432.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've built Open MPI 1.5.5rc1 (tarball from Web) with CFLAGS=-O3. 
<br>
Unfortunately, also without any effect.
<br>
<p>Here some results with enabled binding reports:
<br>
<p>$ mpirun *--bind-to-core* --report-bindings -np 2 ./all2all_ompi1.5.5
<br>
[n043:61313] [[56788,0],0] odls:default:fork binding child [[56788,1],1] to 
<br>
cpus 0002
<br>
[n043:61313] [[56788,0],0] odls:default:fork binding child [[56788,1],0] to 
<br>
cpus 0001
<br>
latency: 1.415us
<br>
<p>$ mpirun *-mca maffinity hwloc --bind-to-core* --report-bindings -np 2 
<br>
./all2all_ompi1.5.5
<br>
[n043:61469] [[49736,0],0] odls:default:fork binding child [[49736,1],1] to 
<br>
cpus 0002
<br>
[n043:61469] [[49736,0],0] odls:default:fork binding child [[49736,1],0] to 
<br>
cpus 0001
<br>
latency: 1.4us
<br>
<p>$ mpirun *-mca maffinity first_use --bind-to-core* --report-bindings -np 2 
<br>
./all2all_ompi1.5.5
<br>
[n043:61508] [[49681,0],0] odls:default:fork binding child [[49681,1],1] to 
<br>
cpus 0002
<br>
[n043:61508] [[49681,0],0] odls:default:fork binding child [[49681,1],0] to 
<br>
cpus 0001
<br>
latency: 1.4us
<br>
<p><p>$ mpirun *--bind-to-socket* --report-bindings -np 2 ./all2all_ompi1.5.5
<br>
[n043:61337] [[56780,0],0] odls:default:fork binding child [[56780,1],1] to 
<br>
socket 0 cpus 0001
<br>
[n043:61337] [[56780,0],0] odls:default:fork binding child [[56780,1],0] to 
<br>
socket 0 cpus 0001
<br>
latency: 4.0us
<br>
<p>$ mpirun *-mca maffinity hwloc --bind-to-socket* --report-bindings -np 2 
<br>
./all2all_ompi1.5.5 
<br>
[n043:61615] [[49914,0],0] odls:default:fork binding child [[49914,1],1] to 
<br>
socket 0 cpus 0001
<br>
[n043:61615] [[49914,0],0] odls:default:fork binding child [[49914,1],0] to 
<br>
socket 0 cpus 0001
<br>
latency: 4.0us
<br>
<p>$ mpirun *-mca maffinity first_use --bind-to-socket* --report-bindings -np 2 
<br>
./all2all_ompi1.5.5 
<br>
[n043:61639] [[49810,0],0] odls:default:fork binding child [[49810,1],1] to 
<br>
socket 0 cpus 0001
<br>
[n043:61639] [[49810,0],0] odls:default:fork binding child [[49810,1],0] to 
<br>
socket 0 cpus 0001
<br>
latency: 4.0us
<br>
<p><p>If socket-binding is enabled it seems that all ranks are bind to the very first 
<br>
core of one and the same socket. Is it intended? I expected that each rank 
<br>
gets its own socket (i.e. 2 ranks -&gt; 2 sockets)...
<br>
<p>Matthias
<br>
<p>On Monday 13 February 2012 22:36:50 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Also, double check that you have an optimized build, not a debugging build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SVN and HG checkouts default to debugging builds, which add in lots of
</span><br>
<span class="quotelev1">&gt; latency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2012, at 10:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Few thoughts
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. Bind to socket is broken in 1.5.4 - fixed in next release
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. Add --report-bindings to cmd line and see where it thinks the procs
</span><br>
<span class="quotelev2">&gt; &gt; are bound
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. Sounds lime memory may not be local - might be worth checking mem
</span><br>
<span class="quotelev2">&gt; &gt; binding.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 13, 2012, at 7:07 AM, Matthias Jurenz &lt;matthias.jurenz_at_tu-
</span><br>
dresden.de&gt; wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; Hi Sylvain,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks for the quick response!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here some results with enabled process binding. I hope I used the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameters correctly...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bind two ranks to one socket:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 2 --bind-to-core ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 2 -mca mpi_paffinity_alone 1 ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bind two ranks to two different sockets:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ mpirun -np 2 --bind-to-socket ./all2all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; All three runs resulted in similar bad latencies (~1.4us).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Monday 13 February 2012 12:43:22 sylvain.jeaugey_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Matthias,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You might want to play with process binding to see if your problem is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; related to bad memory affinity.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Try to launch pingpong on two CPUs of the same socket, then on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; different sockets (i.e. bind each process to a core, and try different
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configurations).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date :  13/02/2012 12:12
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Objet : [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Envoy&#233; par :    devel-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latencies
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (~1.5us) when performing 0-byte p2p communication on one single node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; using the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is pretty good. The bandwidth results are similar for both MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; implementations
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (~3,3GB/s) - this is okay.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; One node has 64 cores and 64Gb RAM where it doesn't matter how many
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ranks allocated by the application. We get similar results with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; different number of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ranks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; special
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configure options except the installation prefix and the location of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the LSF
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; use /dev/shm instead of /tmp for the session directory, but it had no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; effect. Furthermore, we tried the current release candidate 1.5.5rc1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of Open MPI which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; provides an option to use the SysV shared memory (-mca shmem sysv) -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; also this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; results in similar poor latencies.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10411.php">Rayson Ho: "[OMPI devel] MVAPICH2 vs Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="10409.php">Denis Nagorny: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10405.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10432.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10432.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
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
