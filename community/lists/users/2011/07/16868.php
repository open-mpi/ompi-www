<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 16:26:44 2011" -->
<!-- isoreceived="20110708202644" -->
<!-- sent="Fri, 08 Jul 2011 16:26:35 -0400" -->
<!-- isosent="20110708202635" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="4E1767FB.5090403_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 16:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev2">&gt;&gt; or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly
</span><br>
<span class="quotelev2">&gt;&gt; which interfaces to use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps, I'm again misreading the output, but it appears that
</span><br>
<span class="quotelev1">&gt; 1.4.4rc2 does not even see the 2nd nic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[317] ifconfig bge0 
</span><br>
<span class="quotelev1">&gt; bge0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev1">&gt;     options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev1">&gt;     ether 00:e0:81:40:48:92
</span><br>
<span class="quotelev1">&gt;     inet 10.208.78.111 netmask 0xffffff00 broadcast 10.208.78.255
</span><br>
<span class="quotelev1">&gt;     inet6 fe80::2e0:81ff:fe40:4892%bge0 prefixlen 64 scopeid 0x3 
</span><br>
<span class="quotelev1">&gt;     nd6 options=29&lt;PERFORMNUD,IFDISABLED,AUTO_LINKLOCAL&gt;
</span><br>
<span class="quotelev1">&gt;     media: Ethernet autoselect (1000baseT &lt;full-duplex&gt;)
</span><br>
<span class="quotelev1">&gt;     status: active
</span><br>
<span class="quotelev1">&gt; hpc:kargl[318] ifconfig bge1
</span><br>
<span class="quotelev1">&gt; bge1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev1">&gt;     options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev1">&gt;     ether 00:e0:81:40:48:93
</span><br>
<span class="quotelev1">&gt;     inet 192.168.0.10 netmask 0xffffff00 broadcast 192.168.0.255
</span><br>
<span class="quotelev1">&gt;     inet6 fe80::2e0:81ff:fe40:4893%bge1 prefixlen 64 scopeid 0x4 
</span><br>
<span class="quotelev1">&gt;     nd6 options=29&lt;PERFORMNUD,IFDISABLED,AUTO_LINKLOCAL&gt;
</span><br>
<span class="quotelev1">&gt;     media: Ethernet autoselect (1000baseT &lt;full-duplex&gt;)
</span><br>
<span class="quotelev1">&gt;     status: active
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; kargl[319] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 30 \
</span><br>
<span class="quotelev1">&gt;   --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpc:kargl[320] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 10 --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [hpc.apl.washington.edu:12295] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org][[13916,1],1][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
</span><br>
<span class="quotelev1">&gt; [node11.cimu.org:21878] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hi Steve
<br>
<p>It is complaining that bge1 is not valid on node11, not on node10/hpc,
<br>
where you ran ifconfig.
<br>
<p>Would the names of the interfaces and the matching subnet/IP
<br>
vary from node to node?
<br>
(E.g. bge0 be associated to 192.168.0.11 on node11, instead of bge1.)
<br>
<p>Would it be possible that only on node10 bge1 is on the 192.168.0.0 
<br>
subnet, but on the other nodes it is bge0 that connects
<br>
to the 192.168.0.0 subnet perhaps?
<br>
<p>If you're including only bge1 on your mca btl switch,
<br>
supposedly all nodes are able to reach
<br>
each other via an interface called bge1.
<br>
Is this really the case?
<br>
You may want to run ifconfig on all nodes to check.
<br>
<p>Alternatively, you could exclude node10 from your host file
<br>
and try to run the job on the remaining nodes
<br>
(and maybe not restrict the interface names with any btl switch).
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>PS - Your next email, saying that it works with
<br>
&quot;--mca btl_tcp_if_include bge1,bge0&quot;
<br>
kind of hints that node11 and higher use bge0 for 192.168.0.0,
<br>
instead of bge1.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16867.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16866.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16869.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
