<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 15:42:18 2011" -->
<!-- isoreceived="20110708194218" -->
<!-- sent="Fri, 8 Jul 2011 12:42:11 -0700" -->
<!-- isosent="20110708194211" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708194211.GA83276_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110708190909.GA83150_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 15:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 08, 2011 at 12:09:09PM -0700, Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev2">&gt; &gt; or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly
</span><br>
<span class="quotelev2">&gt; &gt; which interfaces to use:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps, I'm again misreading the output, but it appears that
</span><br>
<span class="quotelev1">&gt; 1.4.4rc2 does not even see the 2nd nic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>So, now, I'm very confused!  Using '--mca btl_tcp_if_include bge1,bge0'
<br>
seems to work even though openmpi says that bge1 is invalid, and if I
<br>
reverse the interfaces to '--mca btl_tcp_if_include bge0,bge1' the 
<br>
process appears stuck. :(
<br>
<p><p>hpc:kargl[341] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 10 \
<br>
&nbsp;&nbsp;--mca btl_tcp_if_include bge1,bge0 --mca btl tcp,self -machinefile mf1 ./z
<br>
...
<br>
[node11.cimu.org][[13885,1],1][btl_tcp_component.c:468:\
<br>
mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
<br>
[node11.cimu.org:22024] select: init of component tcp returned success
<br>
0: hpc.apl.washington.edu
<br>
1: node11.cimu.org
<br>
Latency: 0.000073644
<br>
Sync Time: 0.000147468
<br>
Now starting main loop
<br>
&nbsp;&nbsp;0:         0 bytes 16384 times --&gt;    0.00 Mbps in 0.000073622 sec
<br>
&nbsp;&nbsp;1:         1 bytes 16384 times --&gt;    0.10 Mbps in 0.000073617 sec
<br>
&nbsp;&nbsp;2:         2 bytes 3395  times --&gt;    0.21 Mbps in 0.000073634 sec
<br>
&nbsp;&nbsp;3:         3 bytes 1697  times --&gt;    0.31 Mbps in 0.000073611 sec
<br>
...
<br>
126:  12582914 bytes    3  times --&gt;  720.84 Mbps in 0.133178830 sec
<br>
[hpc.apl.washington.edu:12390] mca: base: close: component self closed
<br>
[hpc.apl.washington.edu:12390] mca: base: close: unloading component self
<br>
[hpc.apl.washington.edu:12390] mca: base: close: component tcp closed
<br>
[hpc.apl.washington.edu:12390] mca: base: close: unloading component tcp
<br>
[node11.cimu.org:22024] mca: base: close: component self closed
<br>
[node11.cimu.org:22024] mca: base: close: unloading component self
<br>
[node11.cimu.org:22024] mca: base: close: component tcp closed
<br>
[node11.cimu.org:22024] mca: base: close: unloading component tcp
<br>
<p><p>hpc:kargl[342] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 10 \
<br>
--mca btl_tcp_if_include bge0,bge1 --mca btl tcp,self -machinefile mf1 ./z
<br>
...
<br>
[node11.cimu.org][[13868,1],1][btl_tcp_component.c:468:\
<br>
mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
<br>
[node11.cimu.org:22048] select: init of component tcp returned success
<br>
0: hpc.apl.washington.edu
<br>
1: node11.cimu.org
<br>
<p>and nothing!
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
