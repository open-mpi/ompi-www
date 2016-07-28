<?
$subject_val = "[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  2 23:30:18 2010" -->
<!-- isoreceived="20100503033018" -->
<!-- sent="Mon, 03 May 2010 13:09:37 +1000" -->
<!-- isosent="20100503030937" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Unchecked malloc()'s in OMPI 1.4.x" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4C4_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-02 23:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>Previous message:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Reply:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I've been playing around with Coccinelle, the semantic
<br>
patching system (packaged in Ubuntu 10.04) and using it
<br>
to try and detect things like unchecked malloc().  It's
<br>
not perfect, for instance it flags up calls to assert()
<br>
on the result of the malloc as bad, even though they're
<br>
not, but the rest seem real.
<br>
<p>I've done a test run on OMPI 1.4.2rc3r23065 and it's
<br>
flagged the following, I hope these are useful!
<br>
<p><p>ompi/mca/btl/openib/btl_openib_component.c
<br>
line 997 - prepare_device_for_use()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_data = malloc(sizeof(mca_btl_openib_frag_init_data_t));
<br>
<p><p>ompi/mca/btl/openib/btl_openib_component.c
<br>
line 2414 - btl_openib_component_init()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_data = malloc(sizeof(mca_btl_openib_frag_init_data_t));
<br>
<p><p>ompi/mca/btl/openib/connect/btl_openib_connect_base.c
<br>
line 104 - prepare_device_for_use()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;available = calloc(1, sizeof(all));
<br>
<p><p>ompi/mca/btl/portals/btl_portals.c
<br>
line 104 - mca_btl_portals_add_procs()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;portals_procs = malloc(nprocs * sizeof(ptl_process_id_t));
<br>
<p><p>ompi/mpi/f77/comm_spawn_multiple_f.c
<br>
line 109 - mpi_comm_spawn_multiple_f()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_info = malloc (array_size * sizeof(MPI_Info));
<br>
<p><p>opal/class/opal_hash_table.c
<br>
line 431 - opal_hash_table_set_value_ptr()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;hn_key = malloc(key_size);
<br>
<p><p>orte/mca/ras/alps/ras_alps_module.c
<br>
line 243 - orte_ras_alps_read_appinfo_file()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpBuf=malloc(szLen+1);              /* Allocate buffer 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p><p>All the best,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7868.php">Christopher Yeoh: "Re: [OMPI devel] openib btl thread safety warning"</a>
<li><strong>Previous message:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Reply:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
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
