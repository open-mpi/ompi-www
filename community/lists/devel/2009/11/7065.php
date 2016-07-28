<?
$subject_val = "[OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:22:22 2009" -->
<!-- isoreceived="20091102122222" -->
<!-- sent="Mon, 02 Nov 2009 13:22:11 +0100" -->
<!-- isosent="20091102122211" -->
<!-- name="Mondrian Nuessle" -->
<!-- email="nuessle_at_[hidden]" -->
<!-- subject="[OMPI devel] Memory corruption with mpool" -->
<!-- id="4AEECEF3.4090800_at_uni-hd.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Memory corruption with mpool<br>
<strong>From:</strong> Mondrian Nuessle (<em>nuessle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 07:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody!
<br>
<p>We are working on a new, experimental interconnection network (the EXTOLL network) and I am currently working on a MTL
<br>
component for that hardware. Actually, it works quite good :-)
<br>
<p>Recently I included the RDMA mpool component for memory registration caching into my code. Again, this works
<br>
quite nicely and provides bandwidth improvements for large messages.
<br>
<p>I observed one problem though:
<br>
<p>If I turn on mpi_leave_pinned (and thus the registration cache is actually used), I see occasional memory corruption
<br>
issues for example when I call MPI_Allreduce often.
<br>
<p>Debugging with valgrind did not lead to any clues, since OMPI refuses to run in that case. If I turn off
<br>
mpi_leave_pinned, everything seems to be fine.
<br>
<p>I tested on version 1.3.3 and 1.3.4rc1.
<br>
<p>Do you have any suggestions how to investigate this situation?
<br>
<p>Thanks,
<br>
Mondrian Nuessle
<br>
<p><pre>
-- 
 Dr. Mondrian Nuessle
 Phone: +49 621 181 2717          University of Heidelberg
 Fax:   +49 621 181 2713          Computer Architecture Group
 mailto:nuessle_at_[hidden]         <a href="http://ra.ziti.uni-heidelberg.de">http://ra.ziti.uni-heidelberg.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7064.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Adding support for RDMAoE devices."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7066.php">Christopher Yeoh: "Re: [OMPI devel] Memory corruption with mpool"</a>
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
