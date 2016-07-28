<?
$subject_val = "Re: [OMPI devel] segfault in openib component on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 11:22:23 2014" -->
<!-- isoreceived="20140829152223" -->
<!-- sent="Fri, 29 Aug 2014 15:22:20 +0000" -->
<!-- isosent="20140829152220" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segfault in openib component on trunk" -->
<!-- id="3A443DE5-A256-4C90-8524-39DB2375C905_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="540035EA.8000003_at_iferc.org" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 11:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
<li><strong>Previous message:</strong> <a href="15756.php">Ralph Castain: "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15752.php">Gilles Gouaillardet: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was under impression that mca_tl_openib_tune_endpoint supposed to handle the miss-match between tunings of different devices.
<br>
Few years ago we did some &quot;extreme&quot; inter-operability testing and ompi handled all cases really well.
<br>
<p>I'm not sure if I understand correctly what is the &quot;core&quot; issue.
<br>
<p><p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 29, 2014, at 4:12 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
Ralph,
r32639 and r32642 fixes bugs that do exist in both trunk and v1.8, and they can be considered as independent of the issue that is discussed in this thread and the one you pointed.
so imho, they should land v1.8 even if they do not fix the issue we are now discussing here
Cheers,
Gilles
On 2014/08/29 16:42, Ralph Castain wrote:
This is the email thread which sparked the problem:
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15329.php">http://www.open-mpi.org/community/lists/devel/2014/07/15329.php</a>
I actually tried to apply the original CMR and couldn't get it to work in the 1.8 branch - just kept having problems, so I pushed it off to 1.8.3. I'm leery to accept either of the current CMRs for two reasons: (a) none of the preceding changes is in the 1.8 series yet, and (b) it doesn't sound like we still have a complete solution.
Anyway, I just wanted to point to the original problem that was trying to be addressed.
On Aug 28, 2014, at 10:01 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;&lt;mailto:gilles.gouaillardet_at_[hidden]&gt; wrote:
Howard and Edgar,
i fixed a few bugs (r32639 and r32642)
the bug is trivial to reproduce with any mpi hello world program
mpirun -np 2 --mca btl openib,self hello_world
after setting the mca param in the $HOME/.openmpi/mca-params.conf
$ cat ~/.openmpi/mca-params.conf
btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
good news is the program does not crash with a glory SIGSEGV any more
bad news is the program will (nicely) abort for an incorrect reason :
--------------------------------------------------------------------------
The Open MPI receive queue configuration for the OpenFabrics devices
on two nodes are incompatible, meaning that MPI processes on two
specific nodes were unable to communicate with each other.  This
generally happens when you are using OpenFabrics devices from
different vendors on the same network.  You should be able to use the
mca_btl_openib_receive_queues MCA parameter to set a uniform receive
queue configuration for all the devices in the MPI job, and therefore
be able to run successfully.
 Local host:       node0
 Local adapter:    mlx4_0 (vendor 0x2c9, part ID 4099)
 Local queues:     S,12288,128,64,32:S,65536,128,64,3
 Remote host:      node0
 Remote adapter:   (vendor 0x2c9, part ID 4099)
 Remote queues:
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
the root cause is the remote host did not send its receive_queues to the
local host
(and hence the local host believes the remote hosts uses the default value)
the logic was revamped vs v1.8, that is why v1.8 does not have such issue.
i am still thinking what should be the right fix :
- one option is to send the receive queues
- an other option would be to differenciate value overrided in
mca-params.conf (should be always ok) of value overrided in the .ini
 (might want to double check local and remote values match)
Cheers,
Gilles
On 2014/08/29 7:02, Pritchard Jr., Howard wrote:
Hi Edgar,
Could you send me your conf file?  I'll try to reproduce it.
Maybe run with --mca btl_base_verbose 20 or something to
see what the code that is parsing this field in the conf file
is finding.
Howard
-----Original Message-----
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Edgar Gabriel
Sent: Thursday, August 28, 2014 3:40 PM
To: Open MPI Developers
Subject: Re: [OMPI devel] segfault in openib component on trunk
to add another piece of information that I just found, the segfault only occurs if I have a particular mca parameter set in my mca-params.conf file, namely
btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
Has the syntax for this parameter changed, or should/can I get rid of it?
Thanks
Edgar
On 08/28/2014 04:19 PM, Edgar Gabriel wrote:
we are having recently problems running trunk with openib component
enabled on one of our clusters. The problem occurs right in the
initialization part, here is the stack right before the segfault:
---snip---
(gdb) where
#0  mca_btl_openib_tune_endpoint (openib_btl=0x762a40,
endpoint=0x7d9660) at btl_openib.c:470
#1  0x00007f1062f105c4 in mca_btl_openib_add_procs (btl=0x762a40,
nprocs=2, procs=0x759be0, peers=0x762440, reachable=0x7fff22dd16f0) at
btl_openib.c:1093
#2  0x00007f106316102c in mca_bml_r2_add_procs (nprocs=2,
procs=0x759be0, reachable=0x7fff22dd16f0) at bml_r2.c:201
#3  0x00007f10615c0dd5 in mca_pml_ob1_add_procs (procs=0x70dc00,
nprocs=2) at pml_ob1.c:334
#4  0x00007f106823ed84 in ompi_mpi_init (argc=1, argv=0x7fff22dd1da8,
requested=0, provided=0x7fff22dd184c) at runtime/ompi_mpi_init.c:790
#5  0x00007f1068273a2c in MPI_Init (argc=0x7fff22dd188c,
argv=0x7fff22dd1880) at init.c:84
#6  0x00000000004008e7 in main (argc=1, argv=0x7fff22dd1da8) at
hello_world.c:13
---snip---
in line 538 of the file containing the mca_btl_openib_tune_endpoint
routine, the strcmp operation fails, because  recv_qps is a NULL pointer.
---snip---
if(0 != strcmp(mca_btl_openib_component.receive_queues, recv_qps)) {
---snip---
Does anybody have an idea on what might be going wrong and how to
resolve it? Just to confirm, everything works perfectly with the 1.8
series on that very same  cluster
Thanks
Edgar
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post:
<a href="http://www.open-mpi.org/community/lists/devel/2014/08/15746.php">http://www.open-mpi.org/community/lists/devel/2014/08/15746.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15747.php">http://www.open-mpi.org/community/lists/devel/2014/08/15747.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15748.php">http://www.open-mpi.org/community/lists/devel/2014/08/15748.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15749.php">http://www.open-mpi.org/community/lists/devel/2014/08/15749.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15750.php">http://www.open-mpi.org/community/lists/devel/2014/08/15750.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15752.php">http://www.open-mpi.org/community/lists/devel/2014/08/15752.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
<li><strong>Previous message:</strong> <a href="15756.php">Ralph Castain: "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<li><strong>In reply to:</strong> <a href="15752.php">Gilles Gouaillardet: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15762.php">Ralph Castain: "Re: [OMPI devel] segfault in openib component on trunk"</a>
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
