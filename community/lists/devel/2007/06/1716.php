<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 14 07:10:57 2007" -->
<!-- isoreceived="20070614111057" -->
<!-- sent="Thu, 14 Jun 2007 14:10:52 +0300" -->
<!-- isosent="20070614111052" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041" -->
<!-- id="20070614111052.GK482_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="122B12C1-0882-4005-8CBD-CE4E8ACB17AC_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-14 07:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1715.php">Jeff Squyres: "[OMPI devel] Committed jnysal stuff too soon"</a>
<li><strong>In reply to:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 13, 2007 at 09:43:03PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 1:48 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. Use a file to convey this information, because it's better suited
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to what we're trying to do (vs. MCA parameters).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Seriously, why is a file a bad thing?  The file can list interfaces
</span><br>
<span class="quotelev3">&gt; &gt;&gt; by hostname.  For example, if you have a heterogeneous setup, what's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to say that having btl_tcp_bandwidth_eth0 is not the same across all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your hosts?  That is -- the MCA parameters you're providing are not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sufficient for a true heterogeneous environment, anyway.
</span><br>
<span class="quotelev2">&gt; &gt; I don't feel strongly one way or the other. The command line approach
</span><br>
<span class="quotelev2">&gt; &gt; was much easier to implement. Is it possible to have one parser for  
</span><br>
<span class="quotelev2">&gt; &gt; all
</span><br>
<span class="quotelev2">&gt; &gt; BTLs or each one will have to implement different one?a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's take a step back and see exactly what we *want*.  Then we can  
</span><br>
<span class="quotelev1">&gt; talk about how to have an interface for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. We want to be able to specify bandwidth/latency values for BTL  
</span><br>
<span class="quotelev1">&gt; modules (and possibly other kinds of modules).
</span><br>
Not only bandwidth/latency. Others too (like number of credits, all
<br>
btl_openib_ib_* parameters, btl_openib_use_eager_rdma, and many more,
<br>
basically everything that make sense for individual BTL).
<br>
<p>Perhaps we can extend mca param stuff to handle parametrization on BTL
<br>
name. Like adding one more string parameter to
<br>
mca_base_param_lookup_int(int id, char *btl_name, int param_value);
<br>
Then if parameter &quot;btl_openib_use_eager_rdma&quot; is registered
<br>
mca_base_param_lookup_int(10, &quot;mthca0&quot;, &amp;param_value);
<br>
will automatically check for &quot;btl_openib_use_eager_rdma_mthca0&quot;
<br>
parameter. We can also extend mca_base_param_register_int() to get
<br>
additional boolean parameter to indicate that parameter is not component
<br>
global but can be specialized by individual BTL and ompi_info can mark
<br>
this kind of parameters.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1717.php">Jeff Squyres: "Re: [OMPI devel] Problem with openib on demand connection bring up."</a>
<li><strong>Previous message:</strong> <a href="1715.php">Jeff Squyres: "[OMPI devel] Committed jnysal stuff too soon"</a>
<li><strong>In reply to:</strong> <a href="1709.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15041"</a>
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
