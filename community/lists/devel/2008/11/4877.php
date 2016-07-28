<?
$subject_val = "Re: [OMPI devel] Dropped message for the non-existing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 14:11:36 2008" -->
<!-- isoreceived="20081108191136" -->
<!-- sent="Sat, 08 Nov 2008 14:11:30 -0500" -->
<!-- isosent="20081108191130" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dropped message for the non-existing communicator" -->
<!-- id="4915E462.90208_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4915A809.2060004_at_cs.uh.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-08 14:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4878.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was on v1.3 r19845.
<br>
<p>--td
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; was this with the trunk or v1.3? If it was the trunk, was it before 
</span><br>
<span class="quotelev1">&gt; r19929 was applied? The reason I ask is because r19929 should remove 
</span><br>
<span class="quotelev1">&gt; all error messages related to 'non-existing communictors'. Hierarch 
</span><br>
<span class="quotelev1">&gt; btw. is not the cause for the error messages even before that, it just 
</span><br>
<span class="quotelev1">&gt; exposes it more frequently...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing the message &quot;Dropped message for the non-existing 
</span><br>
<span class="quotelev2">&gt;&gt; communicator&quot; when running hpcc with np=124 against r19845.  This 
</span><br>
<span class="quotelev2">&gt;&gt; seems to be pretty reproducible at np=124.  When the job prints out 
</span><br>
<span class="quotelev2">&gt;&gt; the message above some set of processes are in an MPI_Bcast and the 
</span><br>
<span class="quotelev2">&gt;&gt; 15 processes reporting the message are stuck in MPI_Barrier.
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure how related this is to #1408 since I am not invoking 
</span><br>
<span class="quotelev2">&gt;&gt; the hierarchical collectives.  I just wanted to see if anyone else 
</span><br>
<span class="quotelev2">&gt;&gt; has tried to run hpcc at such an np size with any success.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My next steps are to try to run this with the latest trunk and to 
</span><br>
<span class="quotelev2">&gt;&gt; narrow down the failing case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4878.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4875.php">Edgar Gabriel: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
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
