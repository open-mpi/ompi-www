<?
$subject_val = "Re: [OMPI devel] Return status of MPI_Probe()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 22:17:10 2011" -->
<!-- isoreceived="20110322021710" -->
<!-- sent="Mon, 21 Mar 2011 22:17:04 -0400" -->
<!-- isosent="20110322021704" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Return status of MPI_Probe()" -->
<!-- id="1F5A7A63-451F-459A-AACE-56EFEE4904E7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB1B26F9-6813-4015-A110-231B354816D5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Return status of MPI_Probe()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 22:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>If we don't take in account resilience I would not expect MPI_Probe to have that many opportunities to return errors. However, in order to keep the implementation consistent (with the other MPI functions) I would abide to the following.
<br>
<p>MPI_ERROR_IN_STATUS is only for calls taking multiple requests as input, so I don't think this should be applied to the MPI_Probe. I would expect the return to be equal to status.MPI_ERROR (similar to only other function working on a single request, such as MPI_Test).
<br>
<p>It better trigger the error-handler attached to the communicator, as explicitly requested by the MPI standard (section 8.3).
<br>
<span class="quotelev1">&gt; A user can associate error handlers to three types of objects: communicators, windows, and files. The specified error handling routine will be used for any MPI exception that occurs during a call to MPI for the respective object.
</span><br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 21, 2011, at 16:50 , Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; If MPI_Probe() encounters an error causing it to exit with the 'status.MPI_ERROR' set, say:
</span><br>
<span class="quotelev1">&gt;  ret = MPI_Probe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should it return an error? So should it return:
</span><br>
<span class="quotelev1">&gt; - ret = status.MPI_ERROR
</span><br>
<span class="quotelev1">&gt; - ret = MPI_ERROR_IN_STATUS
</span><br>
<span class="quotelev1">&gt; - ret = MPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; Additionally, should it trigger the error handler on the communicator?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In Open MPI, it will always return MPI_SUCCESS (pml_ob1_iprobe.c:74), but it feels like this is wrong. I looked to the MPI standard for some insight, but could not find where it addresses the return code of MPI_Probe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone shed some light on this topic for me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9113.php">Hugo Meyer: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>Previous message:</strong> <a href="9111.php">Ralph Castain: "Re: [OMPI devel] JDATA access problem."</a>
<li><strong>In reply to:</strong> <a href="9109.php">Joshua Hursey: "[OMPI devel] Return status of MPI_Probe()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
<li><strong>Reply:</strong> <a href="9114.php">Joshua Hursey: "Re: [OMPI devel] Return status of MPI_Probe()"</a>
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
