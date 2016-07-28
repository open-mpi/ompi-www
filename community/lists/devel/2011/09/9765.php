<?
$subject_val = "[OMPI devel] Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 14:36:47 2011" -->
<!-- isoreceived="20110927183647" -->
<!-- sent="Tue, 27 Sep 2011 14:36:42 -0400" -->
<!-- isosent="20110927183642" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI devel] Implementation of MPI_Iprobe" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F26770072C_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI devel] Implementation of MPI_Iprobe<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 14:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9764.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.4rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>As I understand, When MPI_Iprobe is called, the code that is called is the function pointed by the attribute 
<br>
<p>mca_pml_base_module_iprobe_fn_t       pml_iprobe;
<br>
<p><p>in ompi/mca/pml/pml.h
<br>
<p><p>In the file ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c (Open-MPI 1.4.3), 
<br>
ompi_crcp_bkmrk_pml_iprobe calls drain_message_find_any.
<br>
<p><p>In drain_message_find_any (in ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c), there is a loop over all MPI ranks
<br>
regardless of the peer parameter.
<br>
For instance, with 256 peers, probing for peer 255 requires 256 iterations while probing for peer 0 requires 1 iteration.
<br>
<p><p>As I understand it, the linked list ompi_crcp_bkmrk_pml_peer_refs is populated with nprocs entries where nprocs is presumably the number of MPI ranks in MPI_COMM_WORLD.
<br>
<p><p>If my understanding is right, here are some suggestions:
<br>
<p><p>1. ompi_crcp_bkmrk_pml_peer_refs should be an array so that when peer is not MPI_ANY_SOURCE, MPI_Iprobe can returns in constant time.
<br>
<p><p>2. There should be some sort of round-robin mechanism for the case where the peer is MPI_ANY_SOURCE, otherwise lower ranks will get more probed and higher ranks will
<br>
suffer from starvation. This could be done by having a current position in the peer list (or array, see point 1). Instead of starting to loop on the first, the loop would start at current position and
<br>
a maximum of nprocs iterations would take place.
<br>
<p><p>A code review is on my blog: <a href="http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html">http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html</a>
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S&#233;bastien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9764.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.4rc4 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9766.php">George Bosilca: "Re: [OMPI devel] Implementation of MPI_Iprobe"</a>
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
