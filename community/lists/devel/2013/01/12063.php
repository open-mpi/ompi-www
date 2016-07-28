<?
$subject_val = "Re: [OMPI devel] openib unloaded before last mem dereg";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 10:03:55 2013" -->
<!-- isoreceived="20130129150355" -->
<!-- sent="Tue, 29 Jan 2013 15:03:50 +0000" -->
<!-- isosent="20130129150350" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib unloaded before last mem dereg" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBAFF6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5107E4A6.1030501_at_opengridcomputing.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 10:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12062.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12062.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's on the ticket that I just assigned to you.  :-)
<br>
<p><p>On Jan 29, 2013, at 10:03 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Will do...once I get a patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; STeve
</span><br>
<span class="quotelev1">&gt; On 1/29/2013 7:40 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Josh.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Steve -- if you can confirm that this fixes your problem in the v1.6 series, we'll go ahead and commit the patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: the OpenFabrics startup code got a little cleanup/revamp on the trunk/v1.7 -- I suspect that's why you're not seeing the problem on trunk/v1.7 (e.g., look at the utility routines that were abstracted out to ompi/mca/common/verbs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2013, at 2:41 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, we (Mellanox) have observed this ourselves when no suitable CPC can be found. Seems the BTL associated with this port is not destroyed and the ref count is not decreased.  Not sure why you don't see the problem in 1.7. But we have a patch that I'll CMR today. Please review our symptoms, diagnosis, and proposed change. Ralph, maybe I can list you as a reviewer of the patch? I've reviewed myself and it looks fine, but wouldn't mind having another set of eyes on it since I don't want to be responsible for breaking the OpenIB BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Ladd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reported by Yossi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a bug in open mpi (openib component) when one of the active ports is Ethernet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The fix is attached, probably needs to be reviewed and submitted to ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error flow:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.	Openib component creates a btl instance for every active port (including Ethernet)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.	Every btl holds a reference count to the device (mca_btl_openib_device_t::btls)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.	Openib tries to create a &quot;connection module&quot; for every btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.	It fails to create connection module for the Ethernet port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.	The btl for Ethernet port is not returned by openib component, in the list of btl modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6.	The btl for Ethernet port is not destroyed during openib component finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7.	The device is not destroyed, because of the reference count
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8.	The memory pool created by the device is not destroyed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9.	Later, rdma mpool module cleans up remaining pools during its finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.	The memory pool created by openib is destroyed by rdma mpool component finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11.	The memory pool points to a function (openib_dereg_mr) which is already unloaded from memory (because mca_btl_openib.so was unloaded)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12.	Segfault because of a call to invalid function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The fix:  If a btl module is not going to be returned from openib component init, destroy it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, January 28, 2013 8:35 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Steve Wise
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] openib unloaded before last mem dereg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Out of curiosity, could you tell us how you configured OMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 28, 2013, at 12:46 PM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/28/2013 2:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 11:55 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you know if the rdmacm CPC is really being used for your connection setup (vs other CPCs supported by IB)?  Cuz iwarp only supports rdmacm.  Maybe that's the difference?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dunno for certain, but I expect it is using the OOB cm since I didn't direct it to do anything different. Like I said, I suspect the problem is that the cluster doesn't have iWARP on it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Definitely, or it could be the different CPC used for IWvs IB is tickling the issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 1/28/2013 1:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Nope - still works just fine. I didn't receive that warning at all, and it ran to completion without problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I suspect the problem is that the system I can use just isn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configured like yours, and so I can't trigger the problem. Afraid I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; can't be of help after all... :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 11:25 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 1/28/2013 12:48 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm...afraid I cannot replicate this using the current state of the 1.6 branch (which is the 1.6.4rcN) on the only IB-based cluster I can access.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you try it with a 1.6.4 tarball and see if you still see the problem? Could be someone already fixed it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I still hit it on 1.6.4rc2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note iWARP != IB so you may not have this issue on IB systems for various reasons.  Did you use the same mpirun line? Namely using this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --mca btl_openib_ipaddr_include &quot;192.168.170.0/24&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (adjusted to your network config).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Because if I don't use ipaddr_include, then I don't see this issue on my setup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Also, did you see these logged:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Right after starting the job:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------- No OpenFabrics connection schemes reported that they were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; able to be used on a specific port.  As such, the openib BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (OpenFabrics
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host:           hpc-hn1.ogc.int
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local device:         cxgb4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local port:           2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CPCs attempted:       oob, xoob, rdmacm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; At the end of the job:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hpc-hn1.ogc.int:07850] 5 more processes have sent help message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib-cpc-base.txt / no cpcs for port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think these are benign, but prolly indicate a bug: the mpirun is restricting the job to use port 1 only, so the CPCs shouldn't be attempting port 2...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 10:03 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 1/28/2013 11:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 28, 2013, at 9:12 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 1/25/2013 12:19 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm tracking an issue I see in openmpi-1.6.3.  Running this command on my chelsio iwarp/rdma setup causes a seg fault every time:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.6.3-dbg/bin/mpirun --np 2 --host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hpc-hn1,hpc-cn2 --mca btl openib,sm,self --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_ipaddr_include &quot;192.168.170.0/24&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/mpi/gcc/openmpi-1.6.3/tests/IMB-3.2/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The segfault is during finalization, and I've debugged this to the point were I see a call to dereg_mem() after the openib blt is unloaded via dlclose().  dereg_mem() dereferences a function pointer to call the btl-specific dereg function, in this case it is openib_dereg_mr().  However, since that btl has already been unloaded, the deref causes a seg fault.  Happens every time with the above mpi job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now, I tried this same experiment with openmpi-1.7rc6 and I don't see the seg fault, and I don't see a call to dereg_mem() after the openib btl is unloaded.  That's all well good. :)  But I'd like to get this fix pushed into 1.6 since that is the current stable release.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Question:  Can someone point me to the fix in 1.7?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It appears that in ompi_mpi_finalize(), mca_pml_base_close() is called which unloads the openib btl.  Then further down in ompi_mpi_finalize(), mca_mpool_base_close() is called which ends up calling dereg_mem() which seg faults trying to call into the unloaded openib btl.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That definitely sounds like a bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anybody have thoughts?  Anybody care? :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I care! It needs to be fixed - I'll take a look. Probably something that forgot to be cmr'd.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Great!  If you want me to try out a fix or gather more debug, just hollar.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12062.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="12062.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12064.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
