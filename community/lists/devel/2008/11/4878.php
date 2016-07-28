<?
$subject_val = "Re: [OMPI devel] Dropped message for the non-existing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  8 14:13:02 2008" -->
<!-- isoreceived="20081108191302" -->
<!-- sent="Sat, 08 Nov 2008 14:12:56 -0500" -->
<!-- isosent="20081108191256" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dropped message for the non-existing communicator" -->
<!-- id="4915E4B8.60401_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10A0241F-BCDD-4FFD-BCAE-B23F631AC1C1_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-11-08 14:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I'll try this with the latest trunk.
<br>
<p>thanks,
<br>
<p>--td
<br>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Apparently it was with 19845, so before the patch that is supposed to 
</span><br>
<span class="quotelev1">&gt; fix this issue. Terry can you please test with a more recent version 
</span><br>
<span class="quotelev1">&gt; (&gt; 19929).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2008, at 9:54 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; was this with the trunk or v1.3? If it was the trunk, was it before 
</span><br>
<span class="quotelev2">&gt;&gt; r19929 was applied? The reason I ask is because r19929 should remove 
</span><br>
<span class="quotelev2">&gt;&gt; all error messages related to 'non-existing communictors'. Hierarch 
</span><br>
<span class="quotelev2">&gt;&gt; btw. is not the cause for the error messages even before that, it 
</span><br>
<span class="quotelev2">&gt;&gt; just exposes it more frequently...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am seeing the message &quot;Dropped message for the non-existing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator&quot; when running hpcc with np=124 against r19845.  This 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to be pretty reproducible at np=124.  When the job prints out 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the message above some set of processes are in an MPI_Bcast and the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 processes reporting the message are stuck in MPI_Barrier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure how related this is to #1408 since I am not invoking 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hierarchical collectives.  I just wanted to see if anyone else 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has tried to run hpcc at such an np size with any success.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My next steps are to try to run this with the latest trunk and to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; narrow down the failing case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>In reply to:</strong> <a href="4876.php">George Bosilca: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4877.php">Terry Dontje: "Re: [OMPI devel] Dropped message for the non-existing communicator"</a>
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
