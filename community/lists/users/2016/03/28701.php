<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 15:07:30 2016" -->
<!-- isoreceived="20160314190730" -->
<!-- sent="Mon, 14 Mar 2016 14:07:22 -0500" -->
<!-- isosent="20160314190722" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E70BEA.2010202_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="27805974-58E2-4134-9AF9-9B70BB570056_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-14 15:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/13/2016 12:21 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A quick grep in Open MPI source indicates that the only 2 places where
</span><br>
<span class="quotelev1">&gt; MPI_ERR_UNSUPPORTED_DATAREP is issue are deep inside the imported ROMIO
</span><br>
<span class="quotelev1">&gt; code (3.14):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/io/romio314/romio/adio/include/adioi_errmsg.h:70:MPI_ERR_UNSUPPORTED_DATAREP
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/io/romio314/romio/adio/include/mpio_error.h:74:/*
</span><br>
<span class="quotelev1">&gt; MPI_ERR_UNSUPPORTED_DATAREP */
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/io/romio314/romio/mpi-io/set_view.c:138: MPI_ERR_UNSUPPORTED_DATAREP,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The culprit seems to be the set_view.c code, where
</span><br>
<span class="quotelev1">&gt; MPI_ERR_UNSUPPORTED_DATAREP is generated for any data rep that is not
</span><br>
<span class="quotelev1">&gt; extenal32. This also explains why you get a similar issue with MPICH, we
</span><br>
<span class="quotelev1">&gt; both share the same ROMIO code (maybe few minor versions apart).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You just hit one of these obscure MPI features that few ever use (and
</span><br>
<span class="quotelev1">&gt; you&#146;re one of them!). The quickest option I can see for you at this
</span><br>
<span class="quotelev1">&gt; point is either to fallback on the &#147;external32&#148; format when you generate
</span><br>
<span class="quotelev1">&gt; the file (on the 64 bits architecture) to get an architecture-agnostic
</span><br>
<span class="quotelev1">&gt; output, or to rely on saving External Data Representation (XDR) yourself.
</span><br>
<p>On mpich's discussion list the point was made that libraries like HDF5 
<br>
and (Parallel-)NetCDF provide not only the sort of platform portability 
<br>
Eric desires, but also provide a self-describing file format.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2016, at 22:26 , &#201;ric Chamberland
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ERROR Returned by MPI: 51
</span><br>
<span class="quotelev2">&gt;&gt; ERROR_string Returned by MPI: MPI_ERR_UNSUPPORTED_DATAREP: data
</span><br>
<span class="quotelev2">&gt;&gt; representation not supported
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is pretty similar to MPICH output...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I am completely stuck into implementing a solution to read/write
</span><br>
<span class="quotelev2">&gt;&gt; &quot;native&quot; 64 bits datarep files from a 32 bits architecture...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't that into the MPI-2 standard?  Does it means that no MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation is standard compliant?  &gt;:)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28694.php">http://www.open-mpi.org/community/lists/users/2016/03/28694.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28700.php">Jeff Hammond: "Re: [OMPI users] OpenMP &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28694.php">George Bosilca: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28711.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
