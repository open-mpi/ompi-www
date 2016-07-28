<?
$subject_val = "Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 04:13:55 2011" -->
<!-- isoreceived="20110708081355" -->
<!-- sent="Fri, 8 Jul 2011 10:13:32 +0200" -->
<!-- isosent="20110708081332" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails" -->
<!-- id="OFE7F5F20F.5D6B1433-ONC12578C7.002CC57B-C12578C7.002D1F0C_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="297F2222-71EC-4411-A975-0048D82AEC56_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix a hang in carto_base_select() if	carto_module_init() fails<br>
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Fix%20a%20hang%20in%20carto_base_select()%20if	carto_module_init()%20fails"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-08 04:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9480.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, sure! Agreed.
<br>
<p>Regards,
<br>
<pre>
--
Nadia Derbey
Phone: +33 (0)4 76 29 77 62
devel-bounces_at_[hidden] wrote on 07/08/2011 02:10:22 AM:
&gt; De : Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Date : 07/08/2011 02:10 AM
&gt; Objet : Re: [OMPI devel] Fix a hang in carto_base_select() if 
&gt; carto_module_init() fails
&gt; Envoy&#233; par : devel-bounces_at_[hidden]
&gt; 
&gt; I'd go even slightly simpler than that:
&gt; 
&gt; Index: opal/mca/carto/base/carto_base_select.c
&gt; ===================================================================
&gt; --- opal/mca/carto/base/carto_base_select.c   (revision 24842)
&gt; +++ opal/mca/carto/base/carto_base_select.c   (working copy)
&gt; @@ -64,10 +64,7 @@
&gt;  cleanup:
&gt;      /* Initialize the winner */
&gt;      if (NULL != opal_carto_base_module) {
&gt; -        if (OPAL_SUCCESS != (ret = 
&gt; opal_carto_base_module-&gt;carto_module_init()) ) {
&gt; -            exit_status = ret;
&gt; -            goto cleanup;
&gt; -        }
&gt; +        exit_status = opal_carto_base_module-&gt;carto_module_init();
&gt;      }
&gt; 
&gt;      return exit_status;
&gt; 
&gt; 
&gt; 
&gt; On Jun 28, 2011, at 3:02 AM, nadia.derbey wrote:
&gt; 
&gt; &gt; Hi,
&gt; &gt; 
&gt; &gt; When using the carto/file module with a syntactically incorrect carto
&gt; &gt; file, we get stuck into opal_carto_base_select().
&gt; &gt; 
&gt; &gt; The attached trivial patch fixes the issue.
&gt; &gt; 
&gt; &gt; Regards,
&gt; &gt; Nadia
&gt; &gt; 
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
&gt; &gt; 
&lt;carto_base_select.patch&gt;_______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9481/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9482.php">Eloi Gaudry: "Re: [OMPI devel] [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="9480.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
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
