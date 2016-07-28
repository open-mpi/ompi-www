<?
$subject_val = "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:05:28 2010" -->
<!-- isoreceived="20100503150528" -->
<!-- sent="Mon, 3 May 2010 11:05:23 -0400" -->
<!-- isosent="20100503150523" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x" -->
<!-- id="F6EE3F63-4373-440D-85D7-82346B0F6BFC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4C4_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks -- I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2401">https://svn.open-mpi.org/trac/ompi/ticket/2401</a> about this.
<br>
<p>On May 2, 2010, at 11:09 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been playing around with Coccinelle, the semantic
</span><br>
<span class="quotelev1">&gt; patching system (packaged in Ubuntu 10.04) and using it
</span><br>
<span class="quotelev1">&gt; to try and detect things like unchecked malloc().  It's
</span><br>
<span class="quotelev1">&gt; not perfect, for instance it flags up calls to assert()
</span><br>
<span class="quotelev1">&gt; on the result of the malloc as bad, even though they're
</span><br>
<span class="quotelev1">&gt; not, but the rest seem real.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've done a test run on OMPI 1.4.2rc3r23065 and it's
</span><br>
<span class="quotelev1">&gt; flagged the following, I hope these are useful!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; line 997 - prepare_device_for_use()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      init_data = malloc(sizeof(mca_btl_openib_frag_init_data_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; line 2414 - btl_openib_component_init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       init_data = malloc(sizeof(mca_btl_openib_frag_init_data_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/connect/btl_openib_connect_base.c
</span><br>
<span class="quotelev1">&gt; line 104 - prepare_device_for_use()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      available = calloc(1, sizeof(all));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/portals/btl_portals.c
</span><br>
<span class="quotelev1">&gt; line 104 - mca_btl_portals_add_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       portals_procs = malloc(nprocs * sizeof(ptl_process_id_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f77/comm_spawn_multiple_f.c
</span><br>
<span class="quotelev1">&gt; line 109 - mpi_comm_spawn_multiple_f()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      c_info = malloc (array_size * sizeof(MPI_Info));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal/class/opal_hash_table.c
</span><br>
<span class="quotelev1">&gt; line 431 - opal_hash_table_set_value_ptr()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      node-&gt;hn_key = malloc(key_size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte/mca/ras/alps/ras_alps_module.c
</span><br>
<span class="quotelev1">&gt; line 243 - orte_ras_alps_read_appinfo_file()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          cpBuf=malloc(szLen+1);              /* Allocate buffer
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computational Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7867.php">Christopher Samuel: "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
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
