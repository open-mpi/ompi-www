<?
$subject_val = "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 12 18:35:03 2013" -->
<!-- isoreceived="20130812223503" -->
<!-- sent="Mon, 12 Aug 2013 18:35:02 -0400" -->
<!-- isosent="20130812223502" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled" -->
<!-- id="52096316.4020403_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D5B6606-1437-43B5-A504-3BC01C598FD9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-12 18:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Sorry if this is more of an IB than an OMPI problem,
<br>
but my view angle shows it through the OMPI jobs failing.
<br>
<p>Yes, indeed I was setting memlock to unlimited in limits.conf
<br>
and in the pbs_mom, restarting everything, relaunching the job.
<br>
The error message changes, but it still fails on Infiniband,
<br>
now complaining about the IB driver, but also that it cannot
<br>
allocate memory.
<br>
<p>Weird because when I ssh to the node and do ibstat it
<br>
responds (see below, please).
<br>
I actually ran ibstat everywhere, and all IB host adapters seem OK.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p>*********************** the job stderr ******************************
<br>
unable to alloc 512 bytes
<br>
Abort: Command not found.
<br>
unable to realloc 1600 bytes
<br>
Abort: Command not found.
<br>
libibverbs: Warning: couldn't load driver 'mlx4': libmlx4-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'nes': libnes-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'cxgb3': libcxgb3-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'mthca': libmthca-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'ipathverbs': 
<br>
libipathverbs-rdmav2.so: failed to map segment from shared object: 
<br>
Cannot allocate memory
<br>
libibverbs: Warning: no userspace device-specific driver found for 
<br>
/sys/class/infiniband_verbs/uverbs0
<br>
libibverbs: Warning: couldn't load driver 'mlx4': libmlx4-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'nes': libnes-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'cxgb3': libcxgb3-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'mthca': libmthca-rdmav2.so: 
<br>
failed to map segment from shared object: Cannot allocate memory
<br>
libibverbs: Warning: couldn't load driver 'ipathverbs': 
<br>
libipathverbs-rdmav2.so: failed to map segment from shared object: 
<br>
Cannot allocate memory
<br>
[node15:29683] *** Process received signal ***
<br>
[node15:29683] Signal: Segmentation fault (11)
<br>
[node15:29683] Signal code:  (128)
<br>
[node15:29683] Failing at address: (nil)
<br>
[node15:29683] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 29683 on node 
<br>
node15.cluster exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
[node15.cluster:29682] [[7785,0],0]-[[7785,1],2] mca_oob_tcp_msg_recv: 
<br>
readv failed: Connection reset by peer (104)
<br>
************************************************************
<br>
<p>*************** ibstat on node15 *************************
<br>
<p>[root_at_node15 ~]# ibstat
<br>
CA 'mlx4_0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA type: MT26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of ports: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firmware version: 2.7.700
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware version: b0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node GUID: 0x002590ffff16284c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System image GUID: 0x002590ffff16284f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate: 40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base lid: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SM lid: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capability mask: 0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port GUID: 0x002590ffff16284d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link layer: IB
<br>
<p><p>************************************************************
<br>
<p>On 08/12/2013 05:29 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; No, this has nothing to do with the registration limit.
</span><br>
<span class="quotelev1">&gt; For some reason, the system is refusing to create a thread -
</span><br>
<span class="quotelev1">&gt; i.e., it is pthread_create that is failing.
</span><br>
<span class="quotelev1">&gt; I have no idea what would be causing that to happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try setting it to unlimited and see if it allows the thread
</span><br>
<span class="quotelev1">&gt; to start, I guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2013, at 2:20 PM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I include more information below,
</span><br>
<span class="quotelev2">&gt;&gt; after turning on btl_openib_verbose 30.
</span><br>
<span class="quotelev2">&gt;&gt; As you can see, OMPI tries, and fails, to load openib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last week I reduced the memlock limit from unlimited
</span><br>
<span class="quotelev2">&gt;&gt; to ~12GB, as part of a general attempt to reign on memory
</span><br>
<span class="quotelev2">&gt;&gt; use/abuse by jobs sharing a node.
</span><br>
<span class="quotelev2">&gt;&gt; No parallel job ran until today, when the problem showed up.
</span><br>
<span class="quotelev2">&gt;&gt; Could the memlock limit be the root of the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OMPI FAQ says the memlock limit
</span><br>
<span class="quotelev2">&gt;&gt; should be a &quot;large number (or better yet, unlimited)&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The next two FAQ kind of indicate that
</span><br>
<span class="quotelev2">&gt;&gt; it should be set to &quot;unlimited&quot;, but don't say it clearly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; QUESTION:
</span><br>
<span class="quotelev2">&gt;&gt; Is &quot;unlimited&quot; a must, or is there any (magic) &quot;large number&quot;
</span><br>
<span class="quotelev2">&gt;&gt; that would be OK for openib?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I thought a 12GB memlock limit would be OK, but maybe it is not.
</span><br>
<span class="quotelev2">&gt;&gt; The nodes have 64GB RAM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************\
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],0][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],1][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],4][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],3][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],2][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:   node15.cluster
</span><br>
<span class="quotelev2">&gt;&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],10][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],12][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster][[8097,1],13][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],17][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],23][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],24][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],26][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],28][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; [node14.cluster][[8097,1],31][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[8097,1],4]) is on host: node15.cluster
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[8097,1],16]) is on host: node14
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/12/2013 03:32 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for the prompt help, Ralph!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it is OMPI 1.4.3 built with openib support:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info | grep openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are three libraries in prefix/lib/openmpi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no mca_btl_openib library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ls $PREFIX/lib/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libompi_dbg_msgq.a libompi_dbg_msgq.la libompi_dbg_msgq.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, this may be just because it is an older OMPI version in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 1.4 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because those are exactly what I have in another cluster with IB,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and OMPI 1.4.3, where there isn't a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The libraries' organization may have changed from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 1.4 to the 1.6 series, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I only have mca_btl_openib libraries in the 1.6 series, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be a hardship to migrate this program to OMPI 1.6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OK, I have newer OMPI, but I need old also for some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why the heck it is not detecting the Infinband hardware?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [It used to detect it! :( ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/12/2013 03:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check ompi_info - was it built with openib support?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then check that the mca_btl_openib library is present in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prefix/lib/openmpi directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds like it isn't finding the openib plugin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 12, 2013, at 11:57 AM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Open MPI pros
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On one of the clusters here, that has Infinband,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am getting this type of errors from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI 1.4.3 (OK, I know it is old ...):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI communications. This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each other. This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 1 ([[907,1],68]) is on host: node11.cluster
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 2 ([[907,1],0]) is on host: node15
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTLs attempted: self sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Awkward, because I have &quot;btl = ^tcp&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The same error also happens if I force --mca btl openib,sm,self
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in mpiexec.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** Why is it attempting only the self and sm BTLs, but not openib? **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't understand either the initial errors
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Tcl_InitNotifier: unable to start notifier thread&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are they coming from Torque perhaps?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As I said, the cluster has Infiniband,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which is what we've been using forever, until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these errors started today.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I divert the traffic to tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (--mca btl tcp,sm,self), the jobs run normally.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am using the examples/connectivity_c.c program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to troubleshoot this problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I checked a few things on the IB side.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The output of ibstat on all nodes seems OK (links up, etc),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and so are the output of ibhosts and ibchecknet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Only two connected ports had errors, as reported by ibcheckerrors,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and I cleared them with iblclearerrors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The IB subnet manager is running on the head node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I restarted the daemon, but nothing changed, the job continue to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail with the same errors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any hints of what is going on, how to diagnose it, and how to fix it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any gentler way than reboot everything and power cycling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the IB switch? (And would this brute force method work, at least?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Previous message:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22485.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>Reply:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
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
