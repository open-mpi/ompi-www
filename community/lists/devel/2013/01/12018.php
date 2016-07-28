<?
$subject_val = "Re: [OMPI devel] openib unloaded before last mem dereg";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:13:02 2013" -->
<!-- isoreceived="20130128171302" -->
<!-- sent="Mon, 28 Jan 2013 11:12:56 -0600" -->
<!-- isosent="20130128171256" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib unloaded before last mem dereg" -->
<!-- id="5106B198.7060404_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5102CCCD.4090506_at_opengridcomputing.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 12:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>Previous message:</strong> <a href="12017.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/25/2013 12:19 PM, Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm tracking an issue I see in openmpi-1.6.3.  Running this command on 
</span><br>
<span class="quotelev1">&gt; my chelsio iwarp/rdma setup causes a seg fault every time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.6.3-dbg/bin/mpirun --np 2 --host 
</span><br>
<span class="quotelev1">&gt; hpc-hn1,hpc-cn2 --mca btl openib,sm,self --mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_ipaddr_include &quot;192.168.170.0/24&quot; 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.6.3/tests/IMB-3.2/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The segfault is during finalization, and I've debugged this to the 
</span><br>
<span class="quotelev1">&gt; point were I see a call to dereg_mem() after the openib blt is 
</span><br>
<span class="quotelev1">&gt; unloaded via dlclose().  dereg_mem() dereferences a function pointer 
</span><br>
<span class="quotelev1">&gt; to call the btl-specific dereg function, in this case it is 
</span><br>
<span class="quotelev1">&gt; openib_dereg_mr().  However, since that btl has already been unloaded, 
</span><br>
<span class="quotelev1">&gt; the deref causes a seg fault.  Happens every time with the above mpi job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I tried this same experiment with openmpi-1.7rc6 and I don't see 
</span><br>
<span class="quotelev1">&gt; the seg fault, and I don't see a call to dereg_mem() after the openib 
</span><br>
<span class="quotelev1">&gt; btl is unloaded.  That's all well good. :)  But I'd like to get this 
</span><br>
<span class="quotelev1">&gt; fix pushed into 1.6 since that is the current stable release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question:  Can someone point me to the fix in 1.7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
</span><br>
<p>It appears that in ompi_mpi_finalize(), mca_pml_base_close() is called 
<br>
which unloads the openib btl.  Then further down in ompi_mpi_finalize(), 
<br>
mca_mpool_base_close() is called which ends up calling dereg_mem() which 
<br>
seg faults trying to call into the unloaded openib btl.
<br>
<p>Anybody have thoughts?  Anybody care? :)
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12019.php">Jeremy McCaslin: "Re: [OMPI devel] Looking for a replacement call for repeated call to MPI_IPROBE"</a>
<li><strong>Previous message:</strong> <a href="12017.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12020.php">Ralph Castain: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
