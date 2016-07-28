<?
$subject_val = "Re: [OMPI devel] Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 15:34:10 2011" -->
<!-- isoreceived="20110927193410" -->
<!-- sent="Tue, 27 Sep 2011 15:34:05 -0400" -->
<!-- isosent="20110927193405" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Implementation of MPI_Iprobe" -->
<!-- id="E715FB1F-0E8F-4DB4-832E-3C1C0BCED219_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F26770072C_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Implementation of MPI_Iprobe<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 15:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9765.php">S&#233;bastien Boisvert: "[OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9765.php">S&#233;bastien Boisvert: "[OMPI devel] Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sebastien,
<br>
<p>Your analysis is correct in case the checkpoint/restart approach maintained by ORNL is enabled. This is not the code path of the &quot;normal&quot; MPI processes, where the PML OB1 is used. In this generic case the function mca_pml_ob1_iprobe, defined in the file ompi/mca/pml/ob1/pml_ob1_iprobe.c is used.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 27, 2011, at 14:36 , S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand, When MPI_Iprobe is called, the code that is called is the function pointed by the attribute 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_pml_base_module_iprobe_fn_t       pml_iprobe;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in ompi/mca/pml/pml.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the file ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c (Open-MPI 1.4.3), 
</span><br>
<span class="quotelev1">&gt; ompi_crcp_bkmrk_pml_iprobe calls drain_message_find_any.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In drain_message_find_any (in ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.c), there is a loop over all MPI ranks
</span><br>
<span class="quotelev1">&gt; regardless of the peer parameter.
</span><br>
<span class="quotelev1">&gt; For instance, with 256 peers, probing for peer 255 requires 256 iterations while probing for peer 0 requires 1 iteration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand it, the linked list ompi_crcp_bkmrk_pml_peer_refs is populated with nprocs entries where nprocs is presumably the number of MPI ranks in MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If my understanding is right, here are some suggestions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. ompi_crcp_bkmrk_pml_peer_refs should be an array so that when peer is not MPI_ANY_SOURCE, MPI_Iprobe can returns in constant time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. There should be some sort of round-robin mechanism for the case where the peer is MPI_ANY_SOURCE, otherwise lower ranks will get more probed and higher ranks will
</span><br>
<span class="quotelev1">&gt; suffer from starvation. This could be done by having a current position in the peer list (or array, see point 1). Instead of starting to loop on the first, the loop would start at current position and
</span><br>
<span class="quotelev1">&gt; a maximum of nprocs iterations would take place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A code review is on my blog: <a href="http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html">http://dskernel.blogspot.com/2011/09/code-review-what-happens-in-open-mpis.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                     S&#233;bastien
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
<li><strong>Next message:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="9765.php">S&#233;bastien Boisvert: "[OMPI devel] Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9765.php">S&#233;bastien Boisvert: "[OMPI devel] Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Reply:</strong> <a href="9767.php">Sébastien Boisvert: "[OMPI devel] RE :  Implementation of MPI_Iprobe"</a>
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
