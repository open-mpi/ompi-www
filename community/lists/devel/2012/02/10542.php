<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 11:17:55 2012" -->
<!-- isoreceived="20120221161755" -->
<!-- sent="Tue, 21 Feb 2012 17:17:49 +0100" -->
<!-- isosent="20120221161749" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202211717.50131.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201202201346.55303.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2012-02-21 11:17:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some supplements:
<br>
<p>I tried several compilers for building Open MPI with enabled optimizations for 
<br>
the AMD Bulldozer architecture:
<br>
<p>* gcc 4.6.2 (-Ofast -mtune=bdver1 -march=bdver1)
<br>
* Open64 5.0 (-O3 -march=bgver1 -mtune=bdver1 -mso)
<br>
* Intel 12.1 (-O3 -msse4.2)
<br>
<p>They all result in similar latencies (~1.4us).
<br>
<p>As I mentioned in my previous mail, I get the best results if the processes 
<br>
are bound for disabling L2 sharing (i.e. --bind-to-core --cpus-per-proc 2).
<br>
Just see what happens when doing this for Platform MPI:
<br>
<p>Without process binding:
<br>
<p>$ mpirun -np 2 ./NPmpi_pcmpi -u 4 -n 100000
<br>
0: n091
<br>
1: n091
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes  10000 times --&gt;     16.89 Mbps in       0.45 usec
<br>
&nbsp;&nbsp;1:       2 bytes  10000 times --&gt;     34.11 Mbps in       0.45 usec
<br>
&nbsp;&nbsp;2:       3 bytes  10000 times --&gt;     51.01 Mbps in       0.45 usec
<br>
&nbsp;&nbsp;3:       4 bytes  10000 times --&gt;     68.13 Mbps in       0.45 usec
<br>
<p>With process binding using 'taskset':
<br>
<p>$ mpirun -np 2 taskset -c 0,2 ./NPmpi_pcmpi -u 4 -n 10000
<br>
0: n051
<br>
1: n051
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes  10000 times --&gt;     29.33 Mbps in       0.26 usec
<br>
&nbsp;&nbsp;1:       2 bytes  10000 times --&gt;     58.64 Mbps in       0.26 usec
<br>
&nbsp;&nbsp;2:       3 bytes  10000 times --&gt;     88.05 Mbps in       0.26 usec
<br>
&nbsp;&nbsp;3:       4 bytes  10000 times --&gt;    117.33 Mbps in       0.26 usec
<br>
<p>I tried to change some parameters of the SM BTL described here: 
<br>
<a href="http://www.open-mpi.org/faq/?category=sm#sm-params">http://www.open-mpi.org/faq/?category=sm#sm-params</a> - but also without success.
<br>
<p>Do you have any further ideas?
<br>
<p>Matthias
<br>
<p>On Monday 20 February 2012 13:46:54 Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; If the processes are bound for L2 sharing (i.e. using neighboring cores
</span><br>
<span class="quotelev1">&gt; pu:0 and pu:1) I get the *worst* latency results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1
</span><br>
<span class="quotelev1">&gt; hwloc-bind pu:1 ./NPmpi -S -u 4 -n 100000
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 0: n023
</span><br>
<span class="quotelev1">&gt; 1: n023
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes 100000 times --&gt;      3.54 Mbps in       2.16 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes 100000 times --&gt;      7.10 Mbps in       2.15 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes 100000 times --&gt;     10.68 Mbps in       2.14 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes 100000 times --&gt;     14.23 Mbps in       2.15 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As it should, I get the same result when using '-bind-to-core' *without*
</span><br>
<span class="quotelev1">&gt; '-- cpus-per-proc 2'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using two separate L2's (pu:0,pu:2 or '--cpus-per-proc 2') I get
</span><br>
<span class="quotelev1">&gt; better results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1
</span><br>
<span class="quotelev1">&gt; hwloc-bind pu:2 ./NPmpi -S -u 4 -n 100000
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 0: n023
</span><br>
<span class="quotelev1">&gt; Using synchronous sends
</span><br>
<span class="quotelev1">&gt; 1: n023
</span><br>
<span class="quotelev1">&gt; Now starting the main loop
</span><br>
<span class="quotelev1">&gt;   0:       1 bytes 100000 times --&gt;      5.15 Mbps in       1.48 usec
</span><br>
<span class="quotelev1">&gt;   1:       2 bytes 100000 times --&gt;     10.15 Mbps in       1.50 usec
</span><br>
<span class="quotelev1">&gt;   2:       3 bytes 100000 times --&gt;     15.26 Mbps in       1.50 usec
</span><br>
<span class="quotelev1">&gt;   3:       4 bytes 100000 times --&gt;     20.23 Mbps in       1.51 usec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it seems that the process binding within Open MPI works and retires as
</span><br>
<span class="quotelev1">&gt; reason for the bad latency :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 16 February 2012 17:51:53 Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Le 16/02/2012 17:12, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for the hint, Brice.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'll forward this bug report to our cluster vendor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could this be the reason for the bad latencies with Open MPI or does it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only affect hwloc/lstopo?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It affects binding. So it may affect the performance you observed when
</span><br>
<span class="quotelev2">&gt; &gt; using &quot;high-level&quot; binding policies that end up binding on wrong cores
</span><br>
<span class="quotelev2">&gt; &gt; because of hwloc/kernel problems. If you specify binding manually, it
</span><br>
<span class="quotelev2">&gt; &gt; shouldn't hurt.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If the best latency case is supposed to be when L2 is shared, then try:
</span><br>
<span class="quotelev2">&gt; &gt;     mpiexec -np 1 hwloc-bind pu:0 ./all2all : -np 1 hwloc-bind pu:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ./all2all
</span><br>
<span class="quotelev2">&gt; &gt; Then, we'll see if you can get the same result with one of OMPI binding
</span><br>
<span class="quotelev2">&gt; &gt; options.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thursday 16 February 2012 15:46:46 Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Le 16/02/2012 15:39, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Here the output of lstopo from a single compute node. I'm wondering
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; that the fact of L1/L2 sharing isn't visible - also not in the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; graphical output...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; That's a kernel bug. We're waiting for AMD to tell the kernel that L1i
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and L2 are shared across dual-core modules. If you have some contact
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; at AMD, please tell them to look at
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10543.php">Paul H. Hargrove: "[OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10621.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
