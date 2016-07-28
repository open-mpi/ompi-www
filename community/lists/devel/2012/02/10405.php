<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 16:36:55 2012" -->
<!-- isoreceived="20120213213655" -->
<!-- sent="Mon, 13 Feb 2012 16:36:50 -0500" -->
<!-- isosent="20120213213650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="DA9E3F14-CDCB-48FB-9E24-BB94740EE75A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D6F92504-9B32-464E-A385-2DC4EE834723_at_gmail.com" -->
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
<strong>Date:</strong> 2012-02-13 16:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Previous message:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10410.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10410.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, double check that you have an optimized build, not a debugging build.
<br>
<p>SVN and HG checkouts default to debugging builds, which add in lots of latency.
<br>
<p><p>On Feb 13, 2012, at 10:22 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Few thoughts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Bind to socket is broken in 1.5.4 - fixed in next release
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Add --report-bindings to cmd line and see where it thinks the procs are bound
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Sounds lime memory may not be local - might be worth checking mem binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2012, at 7:07 AM, Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Sylvain,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the quick response!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here some results with enabled process binding. I hope I used the parameters 
</span><br>
<span class="quotelev2">&gt;&gt; correctly...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bind two ranks to one socket:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 --bind-to-core ./all2all
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -mca mpi_paffinity_alone 1 ./all2all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bind two ranks to two different sockets:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 --bind-to-socket ./all2all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All three runs resulted in similar bad latencies (~1.4us).
</span><br>
<span class="quotelev2">&gt;&gt; :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Monday 13 February 2012 12:43:22 sylvain.jeaugey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Matthias,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to play with process binding to see if your problem is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; related to bad memory affinity.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try to launch pingpong on two CPUs of the same socket, then on different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sockets (i.e. bind each process to a core, and try different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configurations).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De :    Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date :  13/02/2012 12:12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Objet : [OMPI devel] poor btl sm latency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Envoy&#233; par :    devel-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; latencies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (~1.5us) when performing 0-byte p2p communication on one single node using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pretty good. The bandwidth results are similar for both MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (~3,3GB/s) - this is okay.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One node has 64 cores and 64Gb RAM where it doesn't matter how many ranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated by the application. We get similar results with different number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; special
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure options except the installation prefix and the location of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LSF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /dev/shm instead of /tmp for the session directory, but it had no effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Furthermore, we tried the current release candidate 1.5.5rc1 of Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provides an option to use the SysV shared memory (-mca shmem sysv) - also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results in similar poor latencies.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Previous message:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10404.php">Ralph Castain: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10410.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10410.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
