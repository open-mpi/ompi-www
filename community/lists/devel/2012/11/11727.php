<?
$subject_val = "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 00:03:41 2012" -->
<!-- isoreceived="20121101040341" -->
<!-- sent="Thu, 1 Nov 2012 00:03:35 -0400" -->
<!-- isosent="20121101040335" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified." -->
<!-- id="9FCD49F4-1FE0-4F1F-8194-F1753F266BF9_at_icl.utk.edu" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="75ECEB4E1B2E7844AE56D22316D43FE30AC127F5_at_G01JPEXMBYT01" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified.<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 00:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yuki,
<br>
<p>Your patch fixes the case where a NULL datatype is provided as a complement to MPI_IN_PLACE. I don't think this case is legitimate in MPI for two reasons:
<br>
<p>1) NULL is not a legitimate datatype.
<br>
<p>2) This I guess this is a matter of interpretation. The MPI standard refers to MPI_IN_PLACE as &quot;using the same buffer&quot;, which I interpret as &quot;having to provide the same pointer&quot; (there is a good rationale on why providing the same pointer in the MPI call is not the right approach, and why a special constant is necessary). As such, my understanding of the MPI_IN_PLACE is that different datatypes on the send and recv side of the collective are allowed, as long as they have the same type signature. In other terms the datatype map might be different as long as the signature is identical.
<br>
<p>Can you pinpoint me to the section/paragraph in the MPI standard that require the receive side to use the same datatype as the send side when MPI_IN_PLACE is used?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p><p>On Oct 31, 2012, at 04:55 , &quot;Matsumoto, Yuki&quot; &lt;yuki.matsumoto_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some collective communications with the possibility of terminating abnormally when MPI_IN_PLACE is specified.
</span><br>
<span class="quotelev1">&gt; (MPI_Allgather/MPI_Allgatherv/MPI_Gather/MPI_Scatter)
</span><br>
<span class="quotelev1">&gt; They refer to sdtype or rdtype (For MPI_Scatter) unconditionally by the consideration leakage of the MPI standard at MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt; It terminates abnormally when NULL is specified for a data type of the sending side or receiving side with which MPI_IN_PLACE is specifiable. 
</span><br>
<span class="quotelev1">&gt; e.g.) MPI_Allgather(MPI_IN_PLACE, scount, NULL, rbuf, rcount, recvdtype, ...);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Functions which have this MPI_IN_PLACE problem:
</span><br>
<span class="quotelev1">&gt;    Which data type: The sending side data type
</span><br>
<span class="quotelev1">&gt;    It terminates abnormally when sdtype=NULL is specified at sbuf=MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;    (sdtype must be ignored when sbuf = MPI_IN_PLACE.)
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgatherv_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt;      MPI_Gather
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_gather_intra_binomial
</span><br>
<span class="quotelev1">&gt;      MPI_Allgather
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_bruck
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_recursivedoubling
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_ring
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_neighborexchange
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgather_intra_two_procs
</span><br>
<span class="quotelev1">&gt;      MPI_Allgatherv
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgatherv_intra_bruck
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgatherv_intra_ring
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgatherv_intra_neighborexchange
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_allgatherv_intra_two_procs
</span><br>
<span class="quotelev1">&gt;    Which data type: The receiving side data type
</span><br>
<span class="quotelev1">&gt;    It terminates abnormally when rdtype=NULL is specified at rbuf=MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;    (&quot;rdtype&quot; must be ignored when rbuf = MPI_IN_PLACE.)
</span><br>
<span class="quotelev1">&gt;      MPI_Scatter
</span><br>
<span class="quotelev1">&gt;          ompi_coll_tuned_scatter_intra_binomial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We attach a patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Yuki Matsumoto,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;inplace.patch&gt;&lt;License.txt&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="11728.php">George Bosilca: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11701.php">Matsumoto, Yuki: "[OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
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
