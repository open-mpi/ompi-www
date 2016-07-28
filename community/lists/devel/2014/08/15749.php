<?
$subject_val = "Re: [OMPI devel] segfault in openib component on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 01:01:39 2014" -->
<!-- isoreceived="20140829050139" -->
<!-- sent="Fri, 29 Aug 2014 14:01:52 +0900" -->
<!-- isosent="20140829050152" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segfault in openib component on trunk" -->
<!-- id="54000940.9060405_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05B1ABAE_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segfault in openib component on trunk<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 01:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>In reply to:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard and Edgar,
<br>
<p>i fixed a few bugs (r32639 and r32642)
<br>
<p>the bug is trivial to reproduce with any mpi hello world program
<br>
<p>mpirun -np 2 --mca btl openib,self hello_world
<br>
<p>after setting the mca param in the $HOME/.openmpi/mca-params.conf
<br>
<p>$ cat ~/.openmpi/mca-params.conf
<br>
btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
<br>
<p>good news is the program does not crash with a glory SIGSEGV any more
<br>
bad news is the program will (nicely) abort for an incorrect reason :
<br>
<p>--------------------------------------------------------------------------
<br>
The Open MPI receive queue configuration for the OpenFabrics devices
<br>
on two nodes are incompatible, meaning that MPI processes on two
<br>
specific nodes were unable to communicate with each other.  This
<br>
generally happens when you are using OpenFabrics devices from
<br>
different vendors on the same network.  You should be able to use the
<br>
mca_btl_openib_receive_queues MCA parameter to set a uniform receive
<br>
queue configuration for all the devices in the MPI job, and therefore
<br>
be able to run successfully.
<br>
<p>&nbsp;&nbsp;Local host:       node0
<br>
&nbsp;&nbsp;Local adapter:    mlx4_0 (vendor 0x2c9, part ID 4099)
<br>
&nbsp;&nbsp;Local queues:     S,12288,128,64,32:S,65536,128,64,3
<br>
<p>&nbsp;&nbsp;Remote host:      node0
<br>
&nbsp;&nbsp;Remote adapter:   (vendor 0x2c9, part ID 4099)
<br>
&nbsp;&nbsp;Remote queues:   
<br>
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>
<p>the root cause is the remote host did not send its receive_queues to the
<br>
local host
<br>
(and hence the local host believes the remote hosts uses the default value)
<br>
<p>the logic was revamped vs v1.8, that is why v1.8 does not have such issue.
<br>
<p>i am still thinking what should be the right fix :
<br>
- one option is to send the receive queues
<br>
- an other option would be to differenciate value overrided in
<br>
mca-params.conf (should be always ok) of value overrided in the .ini
<br>
&nbsp;&nbsp;(might want to double check local and remote values match)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/29 7:02, Pritchard Jr., Howard wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you send me your conf file?  I'll try to reproduce it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe run with --mca btl_base_verbose 20 or something to
</span><br>
<span class="quotelev1">&gt; see what the code that is parsing this field in the conf file
</span><br>
<span class="quotelev1">&gt; is finding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 28, 2014 3:40 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] segfault in openib component on trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to add another piece of information that I just found, the segfault only occurs if I have a particular mca parameter set in my mca-params.conf file, namely
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has the syntax for this parameter changed, or should/can I get rid of it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/28/2014 04:19 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; we are having recently problems running trunk with openib component 
</span><br>
<span class="quotelev2">&gt;&gt; enabled on one of our clusters. The problem occurs right in the 
</span><br>
<span class="quotelev2">&gt;&gt; initialization part, here is the stack right before the segfault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---snip---
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  mca_btl_openib_tune_endpoint (openib_btl=0x762a40,
</span><br>
<span class="quotelev2">&gt;&gt; endpoint=0x7d9660) at btl_openib.c:470
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f1062f105c4 in mca_btl_openib_add_procs (btl=0x762a40, 
</span><br>
<span class="quotelev2">&gt;&gt; nprocs=2, procs=0x759be0, peers=0x762440, reachable=0x7fff22dd16f0) at
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.c:1093
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f106316102c in mca_bml_r2_add_procs (nprocs=2, 
</span><br>
<span class="quotelev2">&gt;&gt; procs=0x759be0, reachable=0x7fff22dd16f0) at bml_r2.c:201
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f10615c0dd5 in mca_pml_ob1_add_procs (procs=0x70dc00,
</span><br>
<span class="quotelev2">&gt;&gt; nprocs=2) at pml_ob1.c:334
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f106823ed84 in ompi_mpi_init (argc=1, argv=0x7fff22dd1da8, 
</span><br>
<span class="quotelev2">&gt;&gt; requested=0, provided=0x7fff22dd184c) at runtime/ompi_mpi_init.c:790
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f1068273a2c in MPI_Init (argc=0x7fff22dd188c,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7fff22dd1880) at init.c:84
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00000000004008e7 in main (argc=1, argv=0x7fff22dd1da8) at
</span><br>
<span class="quotelev2">&gt;&gt; hello_world.c:13
</span><br>
<span class="quotelev2">&gt;&gt; ---snip---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in line 538 of the file containing the mca_btl_openib_tune_endpoint 
</span><br>
<span class="quotelev2">&gt;&gt; routine, the strcmp operation fails, because  recv_qps is a NULL pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---snip---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if(0 != strcmp(mca_btl_openib_component.receive_queues, recv_qps)) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---snip---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have an idea on what might be going wrong and how to 
</span><br>
<span class="quotelev2">&gt;&gt; resolve it? Just to confirm, everything works perfectly with the 1.8 
</span><br>
<span class="quotelev2">&gt;&gt; series on that very same  cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15746.php">http://www.open-mpi.org/community/lists/devel/2014/08/15746.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15747.php">http://www.open-mpi.org/community/lists/devel/2014/08/15747.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15748.php">http://www.open-mpi.org/community/lists/devel/2014/08/15748.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>In reply to:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15750.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
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
