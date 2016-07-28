<?
$subject_val = "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 17:06:35 2010" -->
<!-- isoreceived="20101220220635" -->
<!-- sent="Mon, 20 Dec 2010 16:06:31 -0600" -->
<!-- isosent="20101220220631" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="4D0FD367.9040005_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Prayer.1.3.3.1012202159540.3586_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 17:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
well, to contradict my own position from previously, this function was
<br>
part of the MPI-2 specification, and the only interfaces published for
<br>
this function were C, C++ and F90. Not sure what this means for f90
<br>
applications however.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 12/20/2010 3:59 PM, N.M. Maclaren wrote:
<br>
<span class="quotelev1">&gt; On Dec 20 2010, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a hint for F77 users at the bottom of the page. It suggests
</span><br>
<span class="quotelev2">&gt;&gt; to use INTEGER*MPI_OFFSET_KIND as type for the SIZE. I guess if we
</span><br>
<span class="quotelev2">&gt;&gt; cast it correctly, and the users follow the MPI specification, this
</span><br>
<span class="quotelev2">&gt;&gt; should work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please tell me you are joking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, that will NOT work, in general.  Firstly, the xxx in INTEGER*xxx was
</span><br>
<span class="quotelev1">&gt; introduced in Fortran IV as a digit string and not a constant, and all
</span><br>
<span class="quotelev1">&gt; of the compilers I know of still do that.  Secondly, it is NOT always
</span><br>
<span class="quotelev1">&gt; aligned with the KIND values, and there is no implication in any document
</span><br>
<span class="quotelev1">&gt; I know of that it should be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8804/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Previous message:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8803.php">N.M. Maclaren: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>Reply:</strong> <a href="8805.php">William George: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
