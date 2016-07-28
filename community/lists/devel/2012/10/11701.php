<?
$subject_val = "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 04:55:51 2012" -->
<!-- isoreceived="20121031085551" -->
<!-- sent="Wed, 31 Oct 2012 08:55:43 +0000" -->
<!-- isosent="20121031085543" -->
<!-- name="Matsumoto, Yuki" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified." -->
<!-- id="75ECEB4E1B2E7844AE56D22316D43FE30AC127F5_at_G01JPEXMBYT01" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified.<br>
<strong>From:</strong> Matsumoto, Yuki (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 04:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>There are some collective communications with the possibility of terminating abnormally when MPI_IN_PLACE is specified.
<br>
(MPI_Allgather/MPI_Allgatherv/MPI_Gather/MPI_Scatter)
<br>
They refer to sdtype or rdtype (For MPI_Scatter) unconditionally by the consideration leakage of the MPI standard at MPI_IN_PLACE.
<br>
It terminates abnormally when NULL is specified for a data type of the sending side or receiving side with which MPI_IN_PLACE is specifiable. 
<br>
e.g.) MPI_Allgather(MPI_IN_PLACE, scount, NULL, rbuf, rcount, recvdtype, ...);
<br>
<p>- Functions which have this MPI_IN_PLACE problem:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Which data type: The sending side data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It terminates abnormally when sdtype=NULL is specified at sbuf=MPI_IN_PLACE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(sdtype must be ignored when sbuf = MPI_IN_PLACE.)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_dec_fixed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgatherv_intra_dec_fixed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Gather
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_gather_intra_binomial
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgather
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_bruck
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_recursivedoubling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_ring
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_neighborexchange
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgather_intra_two_procs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgatherv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgatherv_intra_bruck
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgatherv_intra_ring
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgatherv_intra_neighborexchange
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allgatherv_intra_two_procs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Which data type: The receiving side data type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It terminates abnormally when rdtype=NULL is specified at rbuf=MPI_IN_PLACE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(&quot;rdtype&quot; must be ignored when rbuf = MPI_IN_PLACE.)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_scatter_intra_binomial
<br>
<p>We attach a patch.
<br>
<p>Best Regards,
<br>
Yuki Matsumoto,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11701/inplace.patch">inplace.patch</a>
</ul>
<!-- attachment="inplace.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11701/License.txt">License.txt</a>
</ul>
<!-- attachment="License.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11702.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
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
