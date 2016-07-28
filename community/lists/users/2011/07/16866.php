<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 15:09:13 2011" -->
<!-- isoreceived="20110708190913" -->
<!-- sent="Fri, 8 Jul 2011 12:09:09 -0700" -->
<!-- isosent="20110708190909" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708190909.GA83150_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="087DDAA3-6062-4901-8F41-D0725B45256A_at_cisco.com" -->
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
<strong>Date:</strong> 2011-07-08 15:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly
</span><br>
<span class="quotelev1">&gt; which interfaces to use:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Perhaps, I'm again misreading the output, but it appears that
<br>
1.4.4rc2 does not even see the 2nd nic.
<br>
<p>hpc:kargl[317] ifconfig bge0 
<br>
bge0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:e0:81:40:48:92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 10.208.78.111 netmask 0xffffff00 broadcast 10.208.78.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::2e0:81ff:fe40:4892%bge0 prefixlen 64 scopeid 0x3 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nd6 options=29&lt;PERFORMNUD,IFDISABLED,AUTO_LINKLOCAL&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: Ethernet autoselect (1000baseT &lt;full-duplex&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status: active
<br>
hpc:kargl[318] ifconfig bge1
<br>
bge1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ether 00:e0:81:40:48:93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.0.10 netmask 0xffffff00 broadcast 192.168.0.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::2e0:81ff:fe40:4893%bge1 prefixlen 64 scopeid 0x4 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nd6 options=29&lt;PERFORMNUD,IFDISABLED,AUTO_LINKLOCAL&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;media: Ethernet autoselect (1000baseT &lt;full-duplex&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status: active
<br>
<p>kargl[319] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 30 \
<br>
&nbsp;&nbsp;--mca btl_tcp_if_include bge1 -machinefile mf1 ./z
<br>
<p>hpc:kargl[320] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 10 --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: Looking for btl components
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: opening btl components
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component self
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component self has no register function
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component self open function successful
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component sm
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component sm has no register function
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component sm open function successful
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component tcp
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component tcp has no register function
<br>
[hpc.apl.washington.edu:12295] mca: base: components_open: component tcp open function successful
<br>
[hpc.apl.washington.edu:12295] select: initializing btl component self
<br>
[hpc.apl.washington.edu:12295] select: init of component self returned success
<br>
[hpc.apl.washington.edu:12295] select: initializing btl component sm
<br>
[hpc.apl.washington.edu:12295] select: init of component sm returned success
<br>
[hpc.apl.washington.edu:12295] select: initializing btl component tcp
<br>
[hpc.apl.washington.edu:12295] select: init of component tcp returned success
<br>
[node11.cimu.org:21878] mca: base: components_open: Looking for btl components
<br>
[node11.cimu.org:21878] mca: base: components_open: opening btl components
<br>
[node11.cimu.org:21878] mca: base: components_open: found loaded component self
<br>
[node11.cimu.org:21878] mca: base: components_open: component self has no register function
<br>
[node11.cimu.org:21878] mca: base: components_open: component self open function successful
<br>
[node11.cimu.org:21878] mca: base: components_open: found loaded component sm
<br>
[node11.cimu.org:21878] mca: base: components_open: component sm has no register function
<br>
[node11.cimu.org:21878] mca: base: components_open: component sm open function successful
<br>
[node11.cimu.org:21878] mca: base: components_open: found loaded component tcp
<br>
[node11.cimu.org:21878] mca: base: components_open: component tcp has no register function
<br>
[node11.cimu.org:21878] mca: base: components_open: component tcp open function successful
<br>
[node11.cimu.org:21878] select: initializing btl component self
<br>
[node11.cimu.org:21878] select: init of component self returned success
<br>
[node11.cimu.org:21878] select: initializing btl component sm
<br>
[node11.cimu.org:21878] select: init of component sm returned success
<br>
[node11.cimu.org:21878] select: initializing btl component tcp
<br>
[node11.cimu.org][[13916,1],1][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
<br>
[node11.cimu.org:21878] select: init of component tcp returned success
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16865.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16863.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
