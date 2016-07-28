<?
$subject_val = "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 17:48:58 2010" -->
<!-- isoreceived="20101220224858" -->
<!-- sent="Mon, 20 Dec 2010 17:48:46 -0500" -->
<!-- isosent="20101220224846" -->
<!-- name="William George" -->
<!-- email="wgeorge_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_File_get_size fails for files &amp;gt; 2 GB in Fortran" -->
<!-- id="4D0FDD4E.8020206_at_nist.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0FD367.9040005_at_cs.uh.edu" -->
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
<strong>From:</strong> William George (<em>wgeorge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 17:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; well, to contradict my own position from previously, this function was
</span><br>
<span class="quotelev1">&gt; part of the MPI-2 specification, and the only interfaces published for
</span><br>
<span class="quotelev1">&gt; this function were C, C++ and F90. Not sure what this means for f90
</span><br>
<span class="quotelev1">&gt; applications however.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I assume you meant &quot;Not sure what this means for f77 applications&quot;.
<br>
<p>This is why I didn't attempt a patch - the solution to this was
<br>
not immediately obvious to me due to the Fortran 77 compatibility
<br>
issue.
<br>
<p>The functions that have the MPI_Fint casts are C functions, so
<br>
at the very least, if MPI_Offset is a 64 bit int, then these functions
<br>
should not be casting them to 32-bit ints, otherwise we have
<br>
two broken interfaces (F77 and F90) instead of one (F77).
<br>
<p><pre>
-- 
Bill
&gt; On 12/20/2010 3:59 PM, N.M. Maclaren wrote:
&gt;&gt; On Dec 20 2010, George Bosilca wrote:
&gt;&gt;
&gt;&gt;&gt; There is a hint for F77 users at the bottom of the page. It suggests
&gt;&gt;&gt; to use INTEGER*MPI_OFFSET_KIND as type for the SIZE. I guess if we
&gt;&gt;&gt; cast it correctly, and the users follow the MPI specification, this
&gt;&gt;&gt; should work.
&gt;&gt; Please tell me you are joking?
&gt;&gt;
&gt;&gt; No, that will NOT work, in general.  Firstly, the xxx in INTEGER*xxx was
&gt;&gt; introduced in Fortran IV as a digit string and not a constant, and all
&gt;&gt; of the compilers I know of still do that.  Secondly, it is NOT always
&gt;&gt; aligned with the KIND values, and there is no implication in any document
&gt;&gt; I know of that it should be.
&gt;&gt;
&gt;&gt; Regards,
&gt;&gt; Nick Maclaren.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8806.php">Suraj Prabhakaran: "[OMPI devel]  Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
<li><strong>In reply to:</strong> <a href="8804.php">Edgar Gabriel: "Re: [OMPI devel] MPI_File_get_size fails for files &gt; 2 GB in Fortran"</a>
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
