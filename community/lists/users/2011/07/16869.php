<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 16:49:38 2011" -->
<!-- isoreceived="20110708204938" -->
<!-- sent="Fri, 8 Jul 2011 13:49:29 -0700" -->
<!-- isosent="20110708204929" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708204929.GA83539_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1767FB.5090403_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-07-08 16:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 08, 2011 at 04:26:35PM -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Steve Kargl wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev3">&gt; &gt;&gt;or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly
</span><br>
<span class="quotelev3">&gt; &gt;&gt;which interfaces to use:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Perhaps, I'm again misreading the output, but it appears that
</span><br>
<span class="quotelev2">&gt; &gt;1.4.4rc2 does not even see the 2nd nic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;hpc:kargl[317] ifconfig bge0 
</span><br>
<span class="quotelev2">&gt; &gt;bge0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev2">&gt; &gt;    options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ether 00:e0:81:40:48:92
</span><br>
<span class="quotelev2">&gt; &gt;    inet 10.208.78.111 netmask 0xffffff00 broadcast 10.208.78.255
</span><br>
<span class="quotelev2">&gt; &gt;hpc:kargl[318] ifconfig bge1
</span><br>
<span class="quotelev2">&gt; &gt;bge1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev2">&gt; &gt;    options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ether 00:e0:81:40:48:93
</span><br>
<span class="quotelev2">&gt; &gt;    inet 192.168.0.10 netmask 0xffffff00 broadcast 192.168.0.255
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;kargl[319] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 30 \
</span><br>
<span class="quotelev2">&gt; &gt;  --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;hpc:kargl[320] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 
</span><br>
<span class="quotelev2">&gt; &gt;10 --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev2">&gt; &gt;[hpc.apl.washington.edu:12295] mca: base: components_open: Looking for btl 
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org:21878] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org:21878] select: initializing btl component sm
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org:21878] select: init of component sm returned success
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org:21878] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org][[13916,1],1][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;[node11.cimu.org:21878] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt; &gt;MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt; &gt;that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt; &gt;an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt; &gt;each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt; &gt;specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Hi Steve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is complaining that bge1 is not valid on node11, not on node10/hpc,
</span><br>
<span class="quotelev1">&gt; where you ran ifconfig.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would the names of the interfaces and the matching subnet/IP
</span><br>
<span class="quotelev1">&gt; vary from node to node?
</span><br>
<span class="quotelev1">&gt; (E.g. bge0 be associated to 192.168.0.11 on node11, instead of bge1.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it be possible that only on node10 bge1 is on the 192.168.0.0 
</span><br>
<span class="quotelev1">&gt; subnet, but on the other nodes it is bge0 that connects
</span><br>
<span class="quotelev1">&gt; to the 192.168.0.0 subnet perhaps?
</span><br>
<p>node10 has bge0 = 10.208.x.y and bge1 = 192.168.0.10.
<br>
node11 through node21 use bge0 = 192.168.0.N where N = 11, ..., 21.
<br>
<p><span class="quotelev1">&gt; If you're including only bge1 on your mca btl switch,
</span><br>
<span class="quotelev1">&gt; supposedly all nodes are able to reach
</span><br>
<span class="quotelev1">&gt; each other via an interface called bge1.
</span><br>
<span class="quotelev1">&gt; Is this really the case?
</span><br>
<span class="quotelev1">&gt; You may want to run ifconfig on all nodes to check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, you could exclude node10 from your host file
</span><br>
<span class="quotelev1">&gt; and try to run the job on the remaining nodes
</span><br>
<span class="quotelev1">&gt; (and maybe not restrict the interface names with any btl switch).
</span><br>
<p>Completely exclude node10 would appear to work.  Of course,
<br>
this then loses the 4 cpus and 16 GB of memory that are
<br>
in node.
<br>
<p>The question to me is why does 1.4.2 work without a
<br>
problem, and 1.4.3 and 1.4.4 have problems with a
<br>
node with 2 NICs.
<br>
<p>I suppose a follow-on question is: Is there some
<br>
way to get 1.4.4 to exclusive use bge1 on node10
<br>
while using bge0 on the other nodes?
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16868.php">Gus Correa: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
