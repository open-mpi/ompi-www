<?
$subject_val = "[OMPI devel] MPI_Barrier performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 13:45:59 2008" -->
<!-- isoreceived="20080415174559" -->
<!-- sent="Tue, 15 Apr 2008 13:45:41 -0400" -->
<!-- isosent="20080415174541" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Barrier performance" -->
<!-- id="4804E9C5.7070604_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Barrier performance<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-15 13:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3710.php">Jeff Squyres: "[OMPI devel] sm performance"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>Reply:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been running the IMB performance tests and noticed some strange 
<br>
behavior.  This is running on a CentOS cluster with 16 processes per 
<br>
node and using the openib btl.  Currently, I am looking at the 
<br>
MPI_Barrier performance.  Since we make use of a recursive double 
<br>
algorithm (in the tuned collective)  I would have expected to see a 
<br>
log2(np) type performance.  However, the data is much worse than 
<br>
log2(np) with the trunk being worse than v1.2.4.   
<br>
<p>One interesting piece of data is that I replaced the tuned algorithm 
<br>
with one that is very similar (copied from Sun Clustertools 6) , but 
<br>
instead of each process doing send/recv, we have each one do a send to 
<br>
their lower partners followed by a receive with their upper partners.  
<br>
Then, everything is reversed which finished the barrier.   For reasons 
<br>
unknown, this appears to perform better even thought both algorithms 
<br>
should be log2(np).
<br>
<p>Another interesting fact is that when run on my really slow cluster over 
<br>
TCP (latency of 150 usec) the tuned barrier algorithm very closely 
<br>
follows the expected log2(np).
<br>
<p>I have mentioned this issue to a few people, but thought I would share 
<br>
with a wider audience to see if anyone else has observed MPI_Barrier 
<br>
that is not log2(np).   I have attached two pdfs.  The first one shows 
<br>
my results and the second one is a picture of the two different barrier 
<br>
algorithms.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================


</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3709/imb-barrier-ompi.pdf">imb-barrier-ompi.pdf</a>
</ul>
<!-- attachment="imb-barrier-ompi.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3709/barrier-tree.pdf">barrier-tree.pdf</a>
</ul>
<!-- attachment="barrier-tree.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3710.php">Jeff Squyres: "[OMPI devel] sm performance"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
<li><strong>Reply:</strong> <a href="3718.php">George Bosilca: "Re: [OMPI devel] MPI_Barrier performance"</a>
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
