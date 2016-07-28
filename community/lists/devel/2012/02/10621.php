<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 05:16:58 2012" -->
<!-- isoreceived="20120228101658" -->
<!-- sent="Tue, 28 Feb 2012 11:16:52 +0100" -->
<!-- isosent="20120228101652" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202281116.52836.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201202211717.50131.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2012-02-28 05:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>In reply to:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10455.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Minor update:
<br>
<p>I see some improvement when I set the MCA parameter mpi_yield_when_idle to 0 
<br>
to enforce the &quot;Agressive&quot; performance mode:
<br>
<p>$ mpirun -np 2 -mca mpi_yield_when_idle 0 -mca btl self,sm -bind-to-core -
<br>
cpus-per-proc 2 ./NPmpi_ompi1.5.5 -u 4 -n 100000
<br>
0: n090
<br>
1: n090
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;      6.96 Mbps in       1.10 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;     14.00 Mbps in       1.09 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     20.88 Mbps in       1.10 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     27.65 Mbps in       1.10 usec
<br>
<p>When using the default behavior (mpi_yield_when_idle=-1, Open MPI decides 
<br>
which performance mode to use), it seems that Open MPI thinks that it runs in 
<br>
an oversubscribed mode (more ranks than there are cores available) so it turns 
<br>
on the degraded performance mode (mpi_yield_when_idle=1).
<br>
<p>When using a hostfile to enforce the number of available cores
<br>
$ cat hostfile
<br>
localhost
<br>
localhost
<br>
I get similar results as when using mpi_yield_when_idle=0.
<br>
<p>Perhaps this misbehavior is due to the kernel bug (mentioned by Brice) which 
<br>
might cause that Open MPI (hwloc) sees less cores than actually available?
<br>
<p>Matthias
<br>
<p><p>On Tuesday 21 February 2012 17:17:49 Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; Some supplements:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried several compilers for building Open MPI with enabled optimizations
</span><br>
<span class="quotelev1">&gt; for the AMD Bulldozer architecture:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * gcc 4.6.2 (-Ofast -mtune=bdver1 -march=bdver1)
</span><br>
<span class="quotelev1">&gt; * Open64 5.0 (-O3 -march=bgver1 -mtune=bdver1 -mso)
</span><br>
<span class="quotelev1">&gt; * Intel 12.1 (-O3 -msse4.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They all result in similar latencies (~1.4us).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned in my previous mail, I get the best results if the processes
</span><br>
<span class="quotelev1">&gt; are bound for disabling L2 sharing (i.e. --bind-to-core --cpus-per-proc 2).
</span><br>
<span class="quotelev1">&gt; Just see what happens when doing this for Platform MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without process binding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./NPmpi_pcmpi -u 4 -n 100000
</span><br>
<span class="quotelev1">&gt; 0: n091
</span><br>
<span class="quotelev1">&gt; 1: n091
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes  10000 times --&gt;     16.89 Mbps in       0.45 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes  10000 times --&gt;     34.11 Mbps in       0.45 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes  10000 times --&gt;     51.01 Mbps in       0.45 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes  10000 times --&gt;     68.13 Mbps in       0.45 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With process binding using 'taskset':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 taskset -c 0,2 ./NPmpi_pcmpi -u 4 -n 10000
</span><br>
<span class="quotelev1">&gt; 0: n051
</span><br>
<span class="quotelev1">&gt; 1: n051
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes  10000 times --&gt;     29.33 Mbps in       0.26 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes  10000 times --&gt;     58.64 Mbps in       0.26 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes  10000 times --&gt;     88.05 Mbps in       0.26 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes  10000 times --&gt;    117.33 Mbps in       0.26 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to change some parameters of the SM BTL described here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm#sm-params">http://www.open-mpi.org/faq/?category=sm#sm-params</a> - but also without
</span><br>
<span class="quotelev1">&gt; success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any further ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday 20 February 2012 13:46:54 Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If the processes are bound for L2 sharing (i.e. using neighboring cores
</span><br>
<span class="quotelev2">&gt; &gt; pu:0 and pu:1) I get the *worst* latency results:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-bind pu:1 ./NPmpi -S -u 4 -n 100000
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 0: n023
</span><br>
<span class="quotelev2">&gt; &gt; 1: n023
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   0:       1 bytes 100000 times --&gt;      3.54 Mbps in       2.16 usec
</span><br>
<span class="quotelev2">&gt; &gt;   1:       2 bytes 100000 times --&gt;      7.10 Mbps in       2.15 usec
</span><br>
<span class="quotelev2">&gt; &gt;   2:       3 bytes 100000 times --&gt;     10.68 Mbps in       2.14 usec
</span><br>
<span class="quotelev2">&gt; &gt;   3:       4 bytes 100000 times --&gt;     14.23 Mbps in       2.15 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As it should, I get the same result when using '-bind-to-core' *without*
</span><br>
<span class="quotelev2">&gt; &gt; '-- cpus-per-proc 2'.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When using two separate L2's (pu:0,pu:2 or '--cpus-per-proc 2') I get
</span><br>
<span class="quotelev2">&gt; &gt; better results:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-bind pu:2 ./NPmpi -S -u 4 -n 100000
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 0: n023
</span><br>
<span class="quotelev2">&gt; &gt; Using synchronous sends
</span><br>
<span class="quotelev2">&gt; &gt; 1: n023
</span><br>
<span class="quotelev2">&gt; &gt; Now starting the main loop
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   0:       1 bytes 100000 times --&gt;      5.15 Mbps in       1.48 usec
</span><br>
<span class="quotelev2">&gt; &gt;   1:       2 bytes 100000 times --&gt;     10.15 Mbps in       1.50 usec
</span><br>
<span class="quotelev2">&gt; &gt;   2:       3 bytes 100000 times --&gt;     15.26 Mbps in       1.50 usec
</span><br>
<span class="quotelev2">&gt; &gt;   3:       4 bytes 100000 times --&gt;     20.23 Mbps in       1.51 usec
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So it seems that the process binding within Open MPI works and retires as
</span><br>
<span class="quotelev2">&gt; &gt; reason for the bad latency :-(
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday 16 February 2012 17:51:53 Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le 16/02/2012 17:12, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks for the hint, Brice.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'll forward this bug report to our cluster vendor.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Could this be the reason for the bad latencies with Open MPI or does
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; it only affect hwloc/lstopo?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It affects binding. So it may affect the performance you observed when
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using &quot;high-level&quot; binding policies that end up binding on wrong cores
</span><br>
<span class="quotelev3">&gt; &gt; &gt; because of hwloc/kernel problems. If you specify binding manually, it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shouldn't hurt.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If the best latency case is supposed to be when L2 is shared, then try:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     mpiexec -np 1 hwloc-bind pu:0 ./all2all : -np 1 hwloc-bind pu:1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./all2all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then, we'll see if you can get the same result with one of OMPI binding
</span><br>
<span class="quotelev3">&gt; &gt; &gt; options.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Thursday 16 February 2012 15:46:46 Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Le 16/02/2012 15:39, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; Here the output of lstopo from a single compute node. I'm wondering
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; that the fact of L1/L2 sharing isn't visible - also not in the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt;&gt;&gt; graphical output...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; That's a kernel bug. We're waiting for AMD to tell the kernel that
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; L1i and L2 are shared across dual-core modules. If you have some
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; contact at AMD, please tell them to look at
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10622.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<li><strong>Previous message:</strong> <a href="10620.php">Ralph Castain: "Re: [OMPI devel] Problem with the openmpi-default-hostfile (on the	trunk)"</a>
<li><strong>In reply to:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10455.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
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
