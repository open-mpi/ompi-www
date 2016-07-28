<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 19:03:19 2011" -->
<!-- isoreceived="20110708230319" -->
<!-- sent="Fri, 8 Jul 2011 19:03:13 -0400" -->
<!-- isosent="20110708230313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="41467B9A-4188-418D-B959-6E8194619624_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="457E24A9-1397-465C-8A15-62D6AFC19A60_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 19:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry -- I got distracted all afternoon...
<br>
<p>In addition to what Ralph said (i.e., I'm not sure if the CIDR notation stuff made it over to the v1.5 branch or not, but it is available from the nightly SVN trunk tarballs: <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>), here's a few points from other mails in this thread...
<br>
<p>1. Gus is correct that OMPI is complaining that bge1 doesn't exist on all nodes.  The MCA parameters that you pass on the command line get shipped to *all* MPI processes, and therefore generally need to work on all of them.  If you have per-host MCA parameter values, you can set them a few different ways:
<br>
<p>- have a per-host MCA param file, usually in $prefix/etc/openmpi-mca-params.conf
<br>
- have your shell startup files intelligently determine which host you're on and set the corresponding MCA environment variable as appropriate (e.g., on the head node, set the env variable OMPI_MCA_btl_tcp_if_include to bge1, and set it to bge0 on the others)
<br>
<p>Those are a little klunky, but having a heterogeneous setup like this is not common, so we haven't really optimized the ability to set different MCA params on different servers.
<br>
<p>2. I am curious to figure out why the automatic reachability computations isn't working for you.  Unfortunately, the code to compute the reachability is pretty gnarly.  :-\  The code to find the IP interfaces on your machines is in opal/util/if.c.  That *should* be working -- there's *BSD-specific code in there that has been verified by others in the past... but who knows?  Perhaps it has bit-rotted...?  The code to take these IP interfaces and figure out if a given peer is reachable is in ompi/mca/btl/tcp/btl_tcp_proc.c:mca_btl_tcp_proc_insert().  This requires a little explanation...
<br>
<p>- There is one TCP BTL &quot;component&quot;.  Think of this as the plugin that is dlopen'd into the process itself.  It contains some high-level information about the plugin itself (e.g., the version number, ...etc.).
<br>
<p>- There is one TCP BTL &quot;module&quot; per IP interface that is used for MPI communications.  So your head node will have 2 TCP BTL modules and the others will only have one TCP BTL module.  A module is a struct with a bunch of function pointers and some meta data (e.g., which IP interface it &quot;owns&quot;, etc.).
<br>
<p>- During the BTL module's initialization, btl_tcp.c:mca_btl_tcp_add_procs() is called to notify the module of all of its peers (an ompi_proc_t instance is used to describe a peer process -- note: a *process*, not any particular communications method or IP address of that process).  btl_tcp_add_procs() takes the array of ompi_proc_t instances (that correspond to all the MPI processes in MPI_COMM_WORLD) and tries to figure out if this particular TCP BTL module can &quot;reach&quot; that peer, per the algorithm described in the FAQ that I cited earlier.
<br>
<p>- mca_btl_tcp_add_procs() calls mca_btl_tcp_proc_insert() to do the reachability computation.  If _insert() succeeds, then _add_procs() assumes that this module can reach that process and proceeds accordingly.  If _insert() fails, then _add_procs() assumes that this module cannot reach that peer and proceeds accordingly.
<br>
<p>- mca_btl_tcp_proc_insert() has previously learned about all the IP addresses of all the peer MPI processes via a different mechanism called the modex (which I won't go into here).  It basically checks the one peer process in question, looks up that peer's IP addresses (aka &quot;endpoints&quot;, from that peer's TCP BTL modules), and tries to find the best quality match that it can.  It basically makes a 2D graph of weights of how &quot;good&quot; the connection is to each of the peer process' endpoints.  It then finds the best connection and uses that one.
<br>
<p>- We unfortunately do not have good debugging output in _proc_insert(), so you might need to step through this with a debugger.  :-(  I have a long-languished branch that adds lots of debugging output in this reachability computation area, but I have never finished it (it has some kind of bug in it that prevents it from working, which is why I haven't merged it into the mainline).  
<br>
<p>This was a long explanation -- I hope it helps...  Is there any chance you could dig into this to see what's going on?  The short version is that all this code *should* automatically figure out that the 10.x interface should effectively end up getting ignored because it can't be used to commuicate with any of its TCP BTL module peers in the other processes on the other servers.
<br>
<p>We unfortunately don't have access to any BSD machines to test this on, ourselves.  It works on other OS's, so I'm curious as to why it doesn't seem to work for you.  :-(
<br>
<p><p>On Jul 8, 2011, at 5:37 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We've been moving to provide support for including values as CIDR notation instead of names - e.g., 192.168.0/16 instead of bge0 or bge1 - but I don't think that has been put into the 1.4 release series. If you need it now, you might try using the developer's trunk - I know it works there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2011, at 2:49 PM, Steve Kargl wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jul 08, 2011 at 04:26:35PM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve Kargl wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jul 08, 2011 at 02:19:27PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The easiest way to fix this is likely to use the btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or btl_tcp_if_exclude MCA parameters -- i.e., tell OMPI exactly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which interfaces to use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Perhaps, I'm again misreading the output, but it appears that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.4.4rc2 does not even see the 2nd nic.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpc:kargl[317] ifconfig bge0 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bge0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ether 00:e0:81:40:48:92
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  inet 10.208.78.111 netmask 0xffffff00 broadcast 10.208.78.255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpc:kargl[318] ifconfig bge1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bge1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; metric 0 mtu 1500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  options=8009b&lt;RXCSUM,TXCSUM,VLAN_MTU,VLAN_HWTAGGING,VLAN_HWCSUM,LINKSTATE&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ether 00:e0:81:40:48:93
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  inet 192.168.0.10 netmask 0xffffff00 broadcast 192.168.0.255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; kargl[319] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 30 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpc:kargl[320] /usr/local/openmpi-1.4.4/bin/mpiexec --mca btl_base_verbose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10 --mca btl_tcp_if_include bge1 -machinefile mf1 ./z
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hpc.apl.washington.edu:12295] mca: base: components_open: Looking for btl 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org:21878] select: init of component self returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org:21878] select: initializing btl component sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org:21878] select: init of component sm returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org:21878] select: initializing btl component tcp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org][[13916,1],1][btl_tcp_component.c:468:mca_btl_tcp_component_create_instances] invalid interface &quot;bge1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node11.cimu.org:21878] select: init of component tcp returned success
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Steve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is complaining that bge1 is not valid on node11, not on node10/hpc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where you ran ifconfig.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would the names of the interfaces and the matching subnet/IP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vary from node to node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (E.g. bge0 be associated to 192.168.0.11 on node11, instead of bge1.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be possible that only on node10 bge1 is on the 192.168.0.0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subnet, but on the other nodes it is bge0 that connects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the 192.168.0.0 subnet perhaps?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node10 has bge0 = 10.208.x.y and bge1 = 192.168.0.10.
</span><br>
<span class="quotelev2">&gt;&gt; node11 through node21 use bge0 = 192.168.0.N where N = 11, ..., 21.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you're including only bge1 on your mca btl switch,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposedly all nodes are able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each other via an interface called bge1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this really the case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may want to run ifconfig on all nodes to check.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, you could exclude node10 from your host file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and try to run the job on the remaining nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and maybe not restrict the interface names with any btl switch).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Completely exclude node10 would appear to work.  Of course,
</span><br>
<span class="quotelev2">&gt;&gt; this then loses the 4 cpus and 16 GB of memory that are
</span><br>
<span class="quotelev2">&gt;&gt; in node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The question to me is why does 1.4.2 work without a
</span><br>
<span class="quotelev2">&gt;&gt; problem, and 1.4.3 and 1.4.4 have problems with a
</span><br>
<span class="quotelev2">&gt;&gt; node with 2 NICs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suppose a follow-on question is: Is there some
</span><br>
<span class="quotelev2">&gt;&gt; way to get 1.4.4 to exclusive use bge1 on node10
</span><br>
<span class="quotelev2">&gt;&gt; while using bge0 on the other nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Steve
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16871.php">Mohan, Ashwin: "Re: [OMPI users] Error using hostfile"</a>
<li><strong>In reply to:</strong> <a href="16870.php">Ralph Castain: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16873.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16896.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
