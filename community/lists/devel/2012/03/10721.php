<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 04:57:25 2012" -->
<!-- isoreceived="20120316085725" -->
<!-- sent="Fri, 16 Mar 2012 09:57:13 +0100" -->
<!-- isosent="20120316085713" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203160957.14602.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="60285FE7-630C-4CFB-951A-FC1533405E7F_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-16 04:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Unfortunately&quot; also Platform MPI benefits from disabled ASLR:
<br>
<p>shared L2/L1I caches (core 0 and 1) and
<br>
enabled ASLR:
<br>
$ mpirun -np 2 taskset -c 0,1 ./NPmpi_pcmpi -u 1 -n 1000000
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 1000000 times --&gt;     17.07 Mbps in       0.45 usec
<br>
<p>disabled ASLR:
<br>
$ mpirun -np 2 taskset -c 0,1 ./NPmpi_pcmpi -u 1 -n 1000000
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 1000000 times --&gt;     55.03 Mbps in       0.14 usec
<br>
<p>exclusive L2/L1I caches (core 0 and 2) and
<br>
enabled ASLR:
<br>
$ mpirun -np 2 taskset -c 0,2 ./NPmpi_pcmpi -u 1 -n 1000000
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 1000000 times --&gt;     30.45 Mbps in       0.27 usec
<br>
<p>disabled ASLR:
<br>
$ mpirun -np 2 taskset -c 0,2 ./NPmpi_pcmpi -u 1 -n 1000000
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes 1000000 times --&gt;     31.25 Mbps in       0.28 usec
<br>
<p>As expected, disabling the ASLR makes no difference when binding for exclusive 
<br>
caches.
<br>
<p>Matthias
<br>
<p>On Thursday 15 March 2012 17:10:33 Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 15, 2012, at 8:06 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; We made a big step forward today!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The used Kernel has a bug regarding to the shared L1 instruction cache in
</span><br>
<span class="quotelev2">&gt; &gt; AMD Bulldozer processors:
</span><br>
<span class="quotelev2">&gt; &gt; See
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commit">http://git.kernel.org/?p=linux/kernel/git/torvalds/linux-2.6.git;a=commit</a>
</span><br>
<span class="quotelev2">&gt; &gt; diff;h=dfb09f9b7ab03fd367740e541a5caf830ed56726 and
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf">http://developer.amd.com/Assets/SharedL1InstructionCacheonAMD15hCPU.pdf</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Until the Kernel is patched we disable the address-space layout
</span><br>
<span class="quotelev2">&gt; &gt; randomization
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (ASLR) as described in the above PDF:
</span><br>
<span class="quotelev2">&gt; &gt;   $ sudo /sbin/sysctl -w kernel.randomize_va_space=0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Therewith, NetPIPE results in ~0.5us latency when binding the processes
</span><br>
<span class="quotelev2">&gt; &gt; for L2/L1I cache sharing (i.e. -bind-to-core).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is good!  I love it when the bug is not our fault.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, when binding the processes for exclusive L2/L1I caches (i.e.
</span><br>
<span class="quotelev2">&gt; &gt; -cpus- per-proc 2) we still get ~1.1us latency. I don't think that the
</span><br>
<span class="quotelev2">&gt; &gt; upcoming kernel patch will help for this kind of process binding...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this kind of thing happen with Platform MPI, too?  I.e., is this
</span><br>
<span class="quotelev1">&gt; another kernel issue, or an OMPI-specific issue?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10722.php">Eugene Loh: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
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
