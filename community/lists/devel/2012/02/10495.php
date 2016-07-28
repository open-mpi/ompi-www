<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 07:47:00 2012" -->
<!-- isoreceived="20120220124700" -->
<!-- sent="Mon, 20 Feb 2012 13:46:54 +0100" -->
<!-- isosent="20120220124654" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201202201346.55303.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F3D3429.4050005_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-20 07:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the processes are bound for L2 sharing (i.e. using neighboring cores pu:0 
<br>
and pu:1) I get the *worst* latency results:
<br>
<p>$ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1 hwloc-bind 
<br>
pu:1 ./NPmpi -S -u 4 -n 100000
<br>
Using synchronous sends
<br>
Using synchronous sends
<br>
0: n023
<br>
1: n023
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;      3.54 Mbps in       2.16 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;      7.10 Mbps in       2.15 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     10.68 Mbps in       2.14 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     14.23 Mbps in       2.15 usec
<br>
<p>As it should, I get the same result when using '-bind-to-core' *without* '--
<br>
cpus-per-proc 2'.
<br>
<p>When using two separate L2's (pu:0,pu:2 or '--cpus-per-proc 2') I get better 
<br>
results:
<br>
<p>$ mpiexec -np 1 hwloc-bind pu:0 ./NPmpi -S -u 4 -n 100000 : -np 1 hwloc-bind 
<br>
pu:2 ./NPmpi -S -u 4 -n 100000
<br>
Using synchronous sends
<br>
0: n023
<br>
Using synchronous sends
<br>
1: n023
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 100000 times --&gt;      5.15 Mbps in       1.48 usec
<br>
&nbsp;&nbsp;1:       2 bytes 100000 times --&gt;     10.15 Mbps in       1.50 usec
<br>
&nbsp;&nbsp;2:       3 bytes 100000 times --&gt;     15.26 Mbps in       1.50 usec
<br>
&nbsp;&nbsp;3:       4 bytes 100000 times --&gt;     20.23 Mbps in       1.51 usec
<br>
<p>So it seems that the process binding within Open MPI works and retires as 
<br>
reason for the bad latency :-(
<br>
<p>Matthias
<br>
<p>On Thursday 16 February 2012 17:51:53 Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 16/02/2012 17:12, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the hint, Brice.
</span><br>
<span class="quotelev2">&gt; &gt; I'll forward this bug report to our cluster vendor.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could this be the reason for the bad latencies with Open MPI or does it
</span><br>
<span class="quotelev2">&gt; &gt; only affect hwloc/lstopo?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It affects binding. So it may affect the performance you observed when
</span><br>
<span class="quotelev1">&gt; using &quot;high-level&quot; binding policies that end up binding on wrong cores
</span><br>
<span class="quotelev1">&gt; because of hwloc/kernel problems. If you specify binding manually, it
</span><br>
<span class="quotelev1">&gt; shouldn't hurt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the best latency case is supposed to be when L2 is shared, then try:
</span><br>
<span class="quotelev1">&gt;     mpiexec -np 1 hwloc-bind pu:0 ./all2all : -np 1 hwloc-bind pu:1
</span><br>
<span class="quotelev1">&gt; ./all2all
</span><br>
<span class="quotelev1">&gt; Then, we'll see if you can get the same result with one of OMPI binding
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday 16 February 2012 15:46:46 Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 16/02/2012 15:39, Matthias Jurenz a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here the output of lstopo from a single compute node. I'm wondering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that the fact of L1/L2 sharing isn't visible - also not in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; graphical output...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's a kernel bug. We're waiting for AMD to tell the kernel that L1i
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and L2 are shared across dual-core modules. If you have some contact at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; AMD, please tell them to look at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://bugzilla.kernel.org/show_bug.cgi?id=42607">https://bugzilla.kernel.org/show_bug.cgi?id=42607</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
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
<li><strong>Next message:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10462.php">Brice Goglin: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10542.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
