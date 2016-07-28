<?
$subject_val = "Re: [OMPI devel] openib unloaded before last mem dereg";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 03:02:16 2013" -->
<!-- isoreceived="20130129080216" -->
<!-- sent="Tue, 29 Jan 2013 07:41:47 +0000" -->
<!-- isosent="20130129074147" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib unloaded before last mem dereg" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A016C73E9_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1DE7FA6-8E52-43AF-80FD-6DF43AD770B7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib unloaded before last mem dereg<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 02:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12058.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 status"</a>
<li><strong>Previous message:</strong> <a href="12056.php">Paul Hargrove: "[OMPI devel] trunk install failure [brbarret]"</a>
<li><strong>In reply to:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, we (Mellanox) have observed this ourselves when no suitable CPC can be found. Seems the BTL associated with this port is not destroyed and the ref count is not decreased.  Not sure why you don't see the problem in 1.7. But we have a patch that I'll CMR today. Please review our symptoms, diagnosis, and proposed change. Ralph, maybe I can list you as a reviewer of the patch? I've reviewed myself and it looks fine, but wouldn't mind having another set of eyes on it since I don't want to be responsible for breaking the OpenIB BTL.
<br>
<p>Thanks,
<br>
<p>Josh Ladd
<br>
<p><p>Reported by Yossi:
<br>
Hi,
<br>
<p>There is a bug in open mpi (openib component) when one of the active ports is Ethernet.
<br>
The fix is attached, probably needs to be reviewed and submitted to ompi
<br>
<p>Error flow:
<br>
1.	Openib component creates a btl instance for every active port (including Ethernet)
<br>
2.	Every btl holds a reference count to the device (mca_btl_openib_device_t::btls)
<br>
3.	Openib tries to create a &quot;connection module&quot; for every btl
<br>
4.	It fails to create connection module for the Ethernet port
<br>
5.	The btl for Ethernet port is not returned by openib component, in the list of btl modules
<br>
6.	The btl for Ethernet port is not destroyed during openib component finalize
<br>
7.	The device is not destroyed, because of the reference count
<br>
8.	The memory pool created by the device is not destroyed
<br>
9.	Later, rdma mpool module cleans up remaining pools during its finalize
<br>
10.	The memory pool created by openib is destroyed by rdma mpool component finalize
<br>
11.	The memory pool points to a function (openib_dereg_mr) which is already unloaded from memory (because mca_btl_openib.so was unloaded)
<br>
12.	Segfault because of a call to invalid function
<br>
<p>The fix:  If a btl module is not going to be returned from openib component init, destroy it.
<br>
<p><p><p><p>&nbsp;
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, January 28, 2013 8:35 PM
<br>
To: Steve Wise
<br>
Cc: Open MPI Developers
<br>
Subject: Re: [OMPI devel] openib unloaded before last mem dereg
<br>
<p>Out of curiosity, could you tell us how you configured OMPI?
<br>
<p><p>On Jan 28, 2013, at 12:46 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 1/28/2013 2:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2013, at 11:55 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know if the rdmacm CPC is really being used for your connection setup (vs other CPCs supported by IB)?  Cuz iwarp only supports rdmacm.  Maybe that's the difference?
</span><br>
<span class="quotelev2">&gt;&gt; Dunno for certain, but I expect it is using the OOB cm since I didn't direct it to do anything different. Like I said, I suspect the problem is that the cluster doesn't have iWARP on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Definitely, or it could be the different CPC used for IWvs IB is tickling the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/28/2013 1:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nope - still works just fine. I didn't receive that warning at all, and it ran to completion without problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect the problem is that the system I can use just isn't 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configured like yours, and so I can't trigger the problem. Afraid I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't be of help after all... :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 28, 2013, at 11:25 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 1/28/2013 12:48 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmmm...afraid I cannot replicate this using the current state of the 1.6 branch (which is the 1.6.4rcN) on the only IB-based cluster I can access.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you try it with a 1.6.4 tarball and see if you still see the problem? Could be someone already fixed it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I still hit it on 1.6.4rc2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note iWARP != IB so you may not have this issue on IB systems for various reasons.  Did you use the same mpirun line? Namely using this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca btl_openib_ipaddr_include &quot;192.168.170.0/24&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (adjusted to your network config).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Because if I don't use ipaddr_include, then I don't see this issue on my setup.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also, did you see these logged:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Right after starting the job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------- No OpenFabrics connection schemes reported that they were 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to be used on a specific port.  As such, the openib BTL 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (OpenFabrics
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Local host:           hpc-hn1.ogc.int
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Local device:         cxgb4_0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Local port:           2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At the end of the job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [hpc-hn1.ogc.int:07850] 5 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib-cpc-base.txt / no cpcs for port
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think these are benign, but prolly indicate a bug: the mpirun is restricting the job to use port 1 only, so the CPCs shouldn't be attempting port 2...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 10:03 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 1/28/2013 11:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 9:12 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 1/25/2013 12:19 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm tracking an issue I see in openmpi-1.6.3.  Running this command on my chelsio iwarp/rdma setup causes a seg fault every time:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.6.3-dbg/bin/mpirun --np 2 --host 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hpc-hn1,hpc-cn2 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_ipaddr_include &quot;192.168.170.0/24&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.6.3/tests/IMB-3.2/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The segfault is during finalization, and I've debugged this to the point were I see a call to dereg_mem() after the openib blt is unloaded via dlclose().  dereg_mem() dereferences a function pointer to call the btl-specific dereg function, in this case it is openib_dereg_mr().  However, since that btl has already been unloaded, the deref causes a seg fault.  Happens every time with the above mpi job.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now, I tried this same experiment with openmpi-1.7rc6 and I don't see the seg fault, and I don't see a call to dereg_mem() after the openib btl is unloaded.  That's all well good. :)  But I'd like to get this fix pushed into 1.6 since that is the current stable release.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Question:  Can someone point me to the fix in 1.7?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It appears that in ompi_mpi_finalize(), mca_pml_base_close() is called which unloads the openib btl.  Then further down in ompi_mpi_finalize(), mca_mpool_base_close() is called which ends up calling dereg_mem() which seg faults trying to call into the unloaded openib btl.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That definitely sounds like a bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anybody have thoughts?  Anybody care? :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I care! It needs to be fixed - I'll take a look. Probably something that forgot to be cmr'd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Great!  If you want me to try out a fix or gather more debug, just hollar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12058.php">Paul Hargrove: "[OMPI devel] Open MPI on Cray XC30 status"</a>
<li><strong>Previous message:</strong> <a href="12056.php">Paul Hargrove: "[OMPI devel] trunk install failure [brbarret]"</a>
<li><strong>In reply to:</strong> <a href="12039.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
