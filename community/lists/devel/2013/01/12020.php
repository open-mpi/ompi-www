<?
$subject_val = "Re: [OMPI devel] openib unloaded before last mem dereg";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:48:24 2013" -->
<!-- isoreceived="20130128174824" -->
<!-- sent="Mon, 28 Jan 2013 09:48:17 -0800" -->
<!-- isosent="20130128174817" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib unloaded before last mem dereg" -->
<!-- id="B8908652-F0FA-4C63-A7B7-5E7ADD565F3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5106B198.7060404_at_opengridcomputing.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 12:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>In reply to:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 9:12 AM, Steve Wise &lt;swise_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 1/25/2013 12:19 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm tracking an issue I see in openmpi-1.6.3.  Running this command on my chelsio iwarp/rdma setup causes a seg fault every time:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/gcc/openmpi-1.6.3-dbg/bin/mpirun --np 2 --host hpc-hn1,hpc-cn2 --mca btl openib,sm,self --mca btl_openib_ipaddr_include &quot;192.168.170.0/24&quot; /usr/mpi/gcc/openmpi-1.6.3/tests/IMB-3.2/IMB-MPI1 pingpong
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The segfault is during finalization, and I've debugged this to the point were I see a call to dereg_mem() after the openib blt is unloaded via dlclose().  dereg_mem() dereferences a function pointer to call the btl-specific dereg function, in this case it is openib_dereg_mr().  However, since that btl has already been unloaded, the deref causes a seg fault.  Happens every time with the above mpi job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now, I tried this same experiment with openmpi-1.7rc6 and I don't see the seg fault, and I don't see a call to dereg_mem() after the openib btl is unloaded.  That's all well good. :)  But I'd like to get this fix pushed into 1.6 since that is the current stable release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Question:  Can someone point me to the fix in 1.7?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that in ompi_mpi_finalize(), mca_pml_base_close() is called which unloads the openib btl.  Then further down in ompi_mpi_finalize(), mca_mpool_base_close() is called which ends up calling dereg_mem() which seg faults trying to call into the unloaded openib btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That definitely sounds like a bug
<br>
<p><span class="quotelev1">&gt; Anybody have thoughts?  Anybody care? :)
</span><br>
<p>I care! It needs to be fixed - I'll take a look. Probably something that forgot to be cmr'd.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<li><strong>Previous message:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>In reply to:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
