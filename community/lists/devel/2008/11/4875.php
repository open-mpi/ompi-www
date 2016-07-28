<?
$subject_val = "Re: [OMPI devel] Dropped message for the non-existing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 09:54:06 2008" -->
<!-- isoreceived="20081108145406" -->
<!-- sent="Sat, 08 Nov 2008 08:54:01 -0600" -->
<!-- isosent="20081108145401" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dropped message for the non-existing communicator" -->
<!-- id="4915A809.2060004_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4915A52D.1070107_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dropped message for the non-existing communicator<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-08 09:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>was this with the trunk or v1.3? If it was the trunk, was it before 
<br>
r19929 was applied? The reason I ask is because r19929 should remove all 
<br>
error messages related to 'non-existing communictors'. Hierarch btw. is 
<br>
not the cause for the error messages even before that, it just exposes 
<br>
it more frequently...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; I am seeing the message &quot;Dropped message for the non-existing 
</span><br>
<span class="quotelev1">&gt; communicator&quot; when running hpcc with np=124 against r19845.  This seems 
</span><br>
<span class="quotelev1">&gt; to be pretty reproducible at np=124.  When the job prints out the 
</span><br>
<span class="quotelev1">&gt; message above some set of processes are in an MPI_Bcast and the 15 
</span><br>
<span class="quotelev1">&gt; processes reporting the message are stuck in MPI_Barrier.
</span><br>
<span class="quotelev1">&gt; I am not sure how related this is to #1408 since I am not invoking the 
</span><br>
<span class="quotelev1">&gt; hierarchical collectives.  I just wanted to see if anyone else has tried 
</span><br>
<span class="quotelev1">&gt; to run hpcc at such an np size with any success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My next steps are to try to run this with the latest trunk and to narrow 
</span><br>
<span class="quotelev1">&gt; down the failing case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Reply:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
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
