<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:24:34 2010" -->
<!-- isoreceived="20100602142434" -->
<!-- sent="Wed, 2 Jun 2010 10:24:21 -0400" -->
<!-- isosent="20100602142421" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager." -->
<!-- id="778672C4-EEF8-4FDA-A3FE-0D88DBCEF7D6_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A93FC8E6-1F18-43BA-9FA8-72F4E5E7B9B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager.<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>In reply to:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 9:54 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; this is the output I get on a node with ethernet and infiniband hardware.
</span><br>
<span class="quotelev2">&gt;&gt; note the Error regarding mx.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ ~/openmpi-1.4.2-bin/bin/mpirun ~/bwlat/mpi_helloworld
</span><br>
<span class="quotelev2">&gt;&gt; [bordeplage-9.bordeaux.grid5000.fr:32365] Error in mx_init (error No MX
</span><br>
<span class="quotelev2">&gt;&gt; device entry in /dev.)
</span><br>
<p>This is ompi_common_mx_initialize(). It fails since there is no MX and prints the above with:
<br>
<p>opal_output(0, &quot;Error in mx_init (error %s)\n&quot;, mx_strerror(mx_return));
<br>
return OMPI_ERR_NOT_AVAILABLE;
<br>
<p><span class="quotelev2">&gt;&gt; [bordeplage-9.bordeaux.grid5000.fr:32365] mca_btl_mx_component_init:
</span><br>
<span class="quotelev2">&gt;&gt; mx_get_info(MX_NIC_COUNT) failed with status 4(MX not initialized.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing the MX BTL is designed to be noisy when it fails, on the assumption that if MX is down, you probably want to know it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George/Myricom -- can you confirm?
</span><br>
<p>This is odd. The ompi_common_mx_initialize() above does not return OPAL_SUCCESS to mca_btl_mx_component_init(). It should return NULL and never call mx_get_info(). This too uses a opal_output(0, ...).
<br>
<p>I will let George comment on the verbosity.
<br>
<p>It looks like ompi_common_mx_initialize() is doing things that affect memory before calling mx_init() such as setting ompi_mpi_leave_pinned to 1 and setting mpool_resources.regcache_clean = mx__regcache_clean.
<br>
<p>There is a chicken-and-egg scenario. The BTL needs to set an registration cache environment variable before calling mx_init(), but the altering of mpool resources should probably wait until after the fact in case MX is not available.
<br>
<p>Does the same error happen if he tries on a MX host that does not have IB?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13206.php">John Cary: "Re: [OMPI users] 1.4.2 build problem"</a>
<li><strong>In reply to:</strong> <a href="13203.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13208.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in MPI_Finalize with	IB	hardware and memory manager."</a>
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
