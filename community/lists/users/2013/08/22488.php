<?
$subject_val = "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 13 14:42:54 2013" -->
<!-- isoreceived="20130813184254" -->
<!-- sent="Tue, 13 Aug 2013 14:42:53 -0400" -->
<!-- isosent="20130813184253" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled" -->
<!-- id="520A7E2D.4090506_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="078C814F-CB5C-4D53-BEAC-A6FEC7B29109_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-13 14:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>Thank you.
<br>
I switched back to memlock unlimited, rebooted the nodes,
<br>
and after that OpenMPI is working right with Infinband.
<br>
<p>As for why the problem happened first place,
<br>
I can only think that somehow the Infiniband kernel modules and
<br>
driver didn't like my reducing the memlock limit,
<br>
and not telling/restarting them or rebooting the nodes.
<br>
As you said, the problem may not have been
<br>
the smaller memlock limit.
<br>
Maybe Infiniband kept stale information about
<br>
the memory limits and fail.
<br>
The jobs would run right over TCP on Ethernet, with the
<br>
same memlock that made Infinband fail.
<br>
<p>I may try a less_than_unlimited memlock value later (tests are not
<br>
easy on production machines).
<br>
In any case, it is kind of hard to come up
<br>
with a sensible number
<br>
(RAM/number_of_cores? less? more? a magic value?).
<br>
Any suggestions are welcome, of course.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p>On 08/12/2013 07:43 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Seems strange that it would have something to do with IB - it seems that alloc itself is failing, and at only 512 bytes, that doesn't seem like something IB would cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you write a little program that calls alloc (no MPI), does it also fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2013, at 3:35 PM, Gus Correa&lt;gus_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry if this is more of an IB than an OMPI problem,
</span><br>
<span class="quotelev2">&gt;&gt; but my view angle shows it through the OMPI jobs failing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, indeed I was setting memlock to unlimited in limits.conf
</span><br>
<span class="quotelev2">&gt;&gt; and in the pbs_mom, restarting everything, relaunching the job.
</span><br>
<span class="quotelev2">&gt;&gt; The error message changes, but it still fails on Infiniband,
</span><br>
<span class="quotelev2">&gt;&gt; now complaining about the IB driver, but also that it cannot
</span><br>
<span class="quotelev2">&gt;&gt; allocate memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Weird because when I ssh to the node and do ibstat it
</span><br>
<span class="quotelev2">&gt;&gt; responds (see below, please).
</span><br>
<span class="quotelev2">&gt;&gt; I actually ran ibstat everywhere, and all IB host adapters seem OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *********************** the job stderr ******************************
</span><br>
<span class="quotelev2">&gt;&gt; unable to alloc 512 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; unable to realloc 1600 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'mlx4': libmlx4-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'nes': libnes-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'cxgb3': libcxgb3-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'mthca': libmthca-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'ipathverbs': libipathverbs-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'mlx4': libmlx4-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'nes': libnes-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'cxgb3': libcxgb3-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'mthca': libmthca-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't load driver 'ipathverbs': libipathverbs-rdmav2.so: failed to map segment from shared object: Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; [node15:29683] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [node15:29683] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [node15:29683] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [node15:29683] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [node15:29683] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that process rank 0 with PID 29683 on node node15.cluster exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [node15.cluster:29682] [[7785,0],0]-[[7785,1],2] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; ************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *************** ibstat on node15 *************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_node15 ~]# ibstat
</span><br>
<span class="quotelev2">&gt;&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev2">&gt;&gt; 	CA type: MT26428
</span><br>
<span class="quotelev2">&gt;&gt; 	Number of ports: 1
</span><br>
<span class="quotelev2">&gt;&gt; 	Firmware version: 2.7.700
</span><br>
<span class="quotelev2">&gt;&gt; 	Hardware version: b0
</span><br>
<span class="quotelev2">&gt;&gt; 	Node GUID: 0x002590ffff16284c
</span><br>
<span class="quotelev2">&gt;&gt; 	System image GUID: 0x002590ffff16284f
</span><br>
<span class="quotelev2">&gt;&gt; 	Port 1:
</span><br>
<span class="quotelev2">&gt;&gt; 		State: Active
</span><br>
<span class="quotelev2">&gt;&gt; 		Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt; 		Rate: 40
</span><br>
<span class="quotelev2">&gt;&gt; 		Base lid: 11
</span><br>
<span class="quotelev2">&gt;&gt; 		LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt; 		SM lid: 1
</span><br>
<span class="quotelev2">&gt;&gt; 		Capability mask: 0x02510868
</span><br>
<span class="quotelev2">&gt;&gt; 		Port GUID: 0x002590ffff16284d
</span><br>
<span class="quotelev2">&gt;&gt; 		Link layer: IB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/12/2013 05:29 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, this has nothing to do with the registration limit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For some reason, the system is refusing to create a thread -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e., it is pthread_create that is failing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no idea what would be causing that to happen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try setting it to unlimited and see if it allows the thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to start, I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 12, 2013, at 2:20 PM, Gus Correa&lt;gus_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I include more information below,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; after turning on btl_openib_verbose 30.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As you can see, OMPI tries, and fails, to load openib.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last week I reduced the memlock limit from unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to ~12GB, as part of a general attempt to reign on memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use/abuse by jobs sharing a node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No parallel job ran until today, when the problem showed up.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could the memlock limit be the root of the problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The OMPI FAQ says the memlock limit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be a &quot;large number (or better yet, unlimited)&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The next two FAQ kind of indicate that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it should be set to &quot;unlimited&quot;, but don't say it clearly:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QUESTION:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is &quot;unlimited&quot; a must, or is there any (magic) &quot;large number&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that would be OK for openib?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought a 12GB memlock limit would be OK, but maybe it is not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The nodes have 64GB RAM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *************************************************\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],0][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],1][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],4][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],3][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],2][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:   node15.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],10][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],12][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node15.cluster][[8097,1],13][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],17][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],23][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],24][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],26][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],28][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node14.cluster][[8097,1],31][../../../../../ompi/mca/btl/openib/btl_openib_component.c:562:start_async_event_thread] Failed to create async event thread
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
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 1 ([[8097,1],4]) is on host: node15.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Process 2 ([[8097,1],16]) is on host: node14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 08/12/2013 03:32 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you for the prompt help, Ralph!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, it is OMPI 1.4.3 built with openib support:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are three libraries in prefix/lib/openmpi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no mca_btl_openib library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ls $PREFIX/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libompi_dbg_msgq.a libompi_dbg_msgq.la libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, this may be just because it is an older OMPI version in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the 1.4 series.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Because those are exactly what I have in another cluster with IB,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and OMPI 1.4.3, where there isn't a problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The libraries' organization may have changed from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the 1.4 to the 1.6 series, right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I only have mca_btl_openib libraries in the 1.6 series, but it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will be a hardship to migrate this program to OMPI 1.6.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (OK, I have newer OMPI, but I need old also for some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; programs).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Why the heck it is not detecting the Infinband hardware?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [It used to detect it! :( ]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 08/12/2013 03:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Check ompi_info - was it built with openib support?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then check that the mca_btl_openib library is present in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prefix/lib/openmpi directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sounds like it isn't finding the openib plugin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 12, 2013, at 11:57 AM, Gus Correa&lt;gus_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On one of the clusters here, that has Infinband,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am getting this type of errors from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI 1.4.3 (OK, I know it is old ...):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tcl_InitNotifier: unable to start notifier thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Abort: Command not found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI communications. This means that no Open MPI device has indicated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that it can be used to communicate between these processes. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; each other. This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 1 ([[907,1],68]) is on host: node11.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process 2 ([[907,1],0]) is on host: node15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; BTLs attempted: self sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Awkward, because I have &quot;btl = ^tcp&quot; in openmpi-mca-params.conf.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The same error also happens if I force --mca btl openib,sm,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ** Why is it attempting only the self and sm BTLs, but not openib? **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't understand either the initial errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;Tcl_InitNotifier: unable to start notifier thread&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are they coming from Torque perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; As I said, the cluster has Infiniband,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is what we've been using forever, until
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; these errors started today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I divert the traffic to tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (--mca btl tcp,sm,self), the jobs run normally.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using the examples/connectivity_c.c program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to troubleshoot this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I checked a few things on the IB side.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The output of ibstat on all nodes seems OK (links up, etc),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and so are the output of ibhosts and ibchecknet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Only two connected ports had errors, as reported by ibcheckerrors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I cleared them with iblclearerrors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The IB subnet manager is running on the head node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I restarted the daemon, but nothing changed, the job continue to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail with the same errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any hints of what is going on, how to diagnose it, and how to fix it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any gentler way than reboot everything and power cycling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the IB switch? (And would this brute force method work, at least?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
<li><strong>In reply to:</strong> <a href="22487.php">Ralph Castain: "Re: [OMPI users] Error - BTLs attempted: self sm - on a cluster with IB and openib btl enabled"</a>
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
