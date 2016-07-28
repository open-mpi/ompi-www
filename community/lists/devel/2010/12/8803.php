<?
$subject_val = "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 16:59:58 2010" -->
<!-- isoreceived="20101220215958" -->
<!-- sent="20 Dec 2010 21:59:54 +0000" -->
<!-- isosent="20101220215954" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="Prayer.1.3.3.1012202159540.3586_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7FC4225-EF5E-4848-98BE-0BBF5F9975EF_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 16:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8802.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8802.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20 2010, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; There is a hint for F77 users at the bottom of the page. It suggests to 
</span><br>
<span class="quotelev1">&gt; use INTEGER*MPI_OFFSET_KIND as type for the SIZE. I guess if we cast it 
</span><br>
<span class="quotelev1">&gt; correctly, and the users follow the MPI specification, this should work.
</span><br>
<p>Please tell me you are joking?
<br>
<p>No, that will NOT work, in general.  Firstly, the xxx in INTEGER*xxx was
<br>
introduced in Fortran IV as a digit string and not a constant, and all
<br>
of the compilers I know of still do that.  Secondly, it is NOT always
<br>
aligned with the KIND values, and there is no implication in any document
<br>
I know of that it should be.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8802.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8802.php">George Bosilca: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
