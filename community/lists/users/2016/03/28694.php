<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 13:21:53 2016" -->
<!-- isoreceived="20160313172153" -->
<!-- sent="Sun, 13 Mar 2016 13:21:50 -0400" -->
<!-- isosent="20160313172150" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="27805974-58E2-4134-9AF9-9B70BB570056_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E4DDE7.1000700_at_giref.ulaval.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-13 13:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28693.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28693.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>A quick grep in Open MPI source indicates that the only 2 places where MPI_ERR_UNSUPPORTED_DATAREP is issue are deep inside the imported ROMIO code (3.14):
<br>
<p>./ompi/mca/io/romio314/romio/adio/include/adioi_errmsg.h:70:MPI_ERR_UNSUPPORTED_DATAREP
<br>
./ompi/mca/io/romio314/romio/adio/include/mpio_error.h:74:/* MPI_ERR_UNSUPPORTED_DATAREP */
<br>
./ompi/mca/io/romio314/romio/mpi-io/set_view.c:138:					  MPI_ERR_UNSUPPORTED_DATAREP,
<br>
<p>The culprit seems to be the set_view.c code, where MPI_ERR_UNSUPPORTED_DATAREP is generated for any data rep that is not extenal32. This also explains why you get a similar issue with MPICH, we both share the same ROMIO code (maybe few minor versions apart).
<br>
<p>You just hit one of these obscure MPI features that few ever use (and you&#146;re one of them!). The quickest option I can see for you at this point is either to fallback on the &#147;external32&#148; format when you generate the file (on the 64 bits architecture) to get an architecture-agnostic output, or to rely on saving External Data Representation (XDR) yourself.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; On Mar 12, 2016, at 22:26 , &#201;ric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR Returned by MPI: 51
</span><br>
<span class="quotelev1">&gt; ERROR_string Returned by MPI: MPI_ERR_UNSUPPORTED_DATAREP: data representation not supported
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is pretty similar to MPICH output...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am completely stuck into implementing a solution to read/write &quot;native&quot; 64 bits datarep files from a 32 bits architecture...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't that into the MPI-2 standard?  Does it means that no MPI implementation is standard compliant?  &gt;:)
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28695.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28693.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>In reply to:</strong> <a href="28693.php">&#195;&#137;ric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
