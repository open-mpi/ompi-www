<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 10:07:54 2012" -->
<!-- isoreceived="20120213150754" -->
<!-- sent="Mon, 13 Feb 2012 16:07:49 +0100" -->
<!-- isosent="20120213150749" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202131607.49756.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFE9A27280.50A27645-ONC12579A3.00401479-C12579A3.004065C8_at_bull.net" -->
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
<strong>Date:</strong> 2012-02-13 10:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sylvain,
<br>
<p>thanks for the quick response!
<br>
<p>Here some results with enabled process binding. I hope I used the parameters 
<br>
correctly...
<br>
<p>bind two ranks to one socket:
<br>
$ mpirun -np 2 --bind-to-core ./all2all
<br>
$ mpirun -np 2 -mca mpi_paffinity_alone 1 ./all2all
<br>
<p>bind two ranks to two different sockets:
<br>
$ mpirun -np 2 --bind-to-socket ./all2all
<br>
<p>All three runs resulted in similar bad latencies (~1.4us).
<br>
:-(
<br>
<p><p>Matthias
<br>
<p>On Monday 13 February 2012 12:43:22 sylvain.jeaugey_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Matthias,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to play with process binding to see if your problem is
</span><br>
<span class="quotelev1">&gt; related to bad memory affinity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try to launch pingpong on two CPUs of the same socket, then on different
</span><br>
<span class="quotelev1">&gt; sockets (i.e. bind each process to a core, and try different
</span><br>
<span class="quotelev1">&gt; configurations).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date :  13/02/2012 12:12
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par :    devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad
</span><br>
<span class="quotelev1">&gt; latencies
</span><br>
<span class="quotelev1">&gt; (~1.5us) when performing 0-byte p2p communication on one single node using
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies which is
</span><br>
<span class="quotelev1">&gt; pretty good. The bandwidth results are similar for both MPI
</span><br>
<span class="quotelev1">&gt; implementations
</span><br>
<span class="quotelev1">&gt; (~3,3GB/s) - this is okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One node has 64 cores and 64Gb RAM where it doesn't matter how many ranks
</span><br>
<span class="quotelev1">&gt; allocated by the application. We get similar results with different number
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any
</span><br>
<span class="quotelev1">&gt; special
</span><br>
<span class="quotelev1">&gt; configure options except the installation prefix and the location of the
</span><br>
<span class="quotelev1">&gt; LSF
</span><br>
<span class="quotelev1">&gt; stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to use
</span><br>
<span class="quotelev1">&gt; /dev/shm instead of /tmp for the session directory, but it had no effect.
</span><br>
<span class="quotelev1">&gt; Furthermore, we tried the current release candidate 1.5.5rc1 of Open MPI
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; provides an option to use the SysV shared memory (-mca shmem sysv) - also
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; results in similar poor latencies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
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
