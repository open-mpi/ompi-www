<?
$subject_val = "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:54:19 2008" -->
<!-- isoreceived="20080506135419" -->
<!-- sent="Tue, 6 May 2008 09:54:02 -0400" -->
<!-- isosent="20080506135402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message." -->
<!-- id="0D668D96-85CE-45AD-B264-5D637A28E63C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990805010743o7dea5daex25f40ed4255a8d19_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 09:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3836.php">Lenny Verkhovsky: "[OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2008, at 10:43 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; (a) I did modify make_mpich makefile present in IMB-3.1/src folder  
</span><br>
<span class="quotelev1">&gt; giving the path for openmpi. Here I am using same mpirun as built  
</span><br>
<span class="quotelev1">&gt; from openmpi(v-1.2.5) also did mention in PATH &amp; LD_LIBRARY_PATH.
</span><br>
<p>That should be fine.
<br>
<p><span class="quotelev1">&gt; (b) What is the command on console to run any new additional file  
</span><br>
<span class="quotelev1">&gt; with MPI API contents call. Do I need to add in Makefile.base of  
</span><br>
<span class="quotelev1">&gt; IMB-3.1/src folder or mentioning in console as a command it takes  
</span><br>
<span class="quotelev1">&gt; care alongwith &quot;$mpirun IMB-MPI1&quot;
</span><br>
<p>I don't understand this question...  What exactly are you trying to  
<br>
do; modify the IMB benchmarks or write your own/new MPI application?
<br>
<p><span class="quotelev1">&gt; (c) Does IMB-3.1 need INB(Infiniband) or TCP support to complete  
</span><br>
<span class="quotelev1">&gt; it's Benchmark routine call, means do I need to configure and build  
</span><br>
<span class="quotelev1">&gt; OpnMPI with Infiniband stack too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMB is a set of benchmarks that can be run between 1 and more machines
</span><br>
<span class="quotelev1">&gt; it calls for MPI API that does all the communication
</span><br>
<span class="quotelev1">&gt; MPI decides how to run ( IB or TCP or shared memory ) according to  
</span><br>
<span class="quotelev1">&gt; priorities and all possible ways to be connected to another host.
</span><br>
<p>Lenny is right; in general Open MPI will decide what is the best  
<br>
network stack to use to communicate with a peer MPI process.  So  
<br>
whether you build Open MPI with IB support and/or TCP support is up to  
<br>
you.  Generally, you want to build Open MPI with support for your high  
<br>
speed network (e.g., IB) and let Open MPI use it for off-node  
<br>
communication (OMPI will usually use shared memory for communication  
<br>
between processes on the same node).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3836.php">Lenny Verkhovsky: "[OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
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
