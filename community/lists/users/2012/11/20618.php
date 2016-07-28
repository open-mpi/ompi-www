<?
$subject_val = "Re: [OMPI users] limiting tasks/ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 19:46:04 2012" -->
<!-- isoreceived="20121101234604" -->
<!-- sent="Thu, 1 Nov 2012 16:45:57 -0700" -->
<!-- isosent="20121101234557" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] limiting tasks/ranks" -->
<!-- id="1F7C5143-91A4-4851-802B-4472C654529A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50930410.2070600_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] limiting tasks/ranks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 19:45:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20619.php">huydanlin: "[OMPI users] MPI_Issend non-blocking send in Synchronous Mode"</a>
<li><strong>Previous message:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
<li><strong>In reply to:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not per se, but you could set the #slots to 12, and then add
<br>
<p>rmaps_base_no_oversubscribe = 1
<br>
<p>to your default MCA param file. That would do what you describe.
<br>
<p><p>On Nov 1, 2012, at 4:21 PM, David Turner &lt;dpturner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to limit the number of tasks started by mpirun?
</span><br>
<span class="quotelev1">&gt; For example, on our 48-core SMP, I'd like to limit MPI jobs to
</span><br>
<span class="quotelev1">&gt; a maximum of 12 tasks.  That is, &quot;mpirun -np 16 ...&quot; would
</span><br>
<span class="quotelev1">&gt; return an error.  Note that this is a strictly interactive
</span><br>
<span class="quotelev1">&gt; system; no batch environment available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've just quickly scanned the MCA parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --param all all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and couldn't find the answer to my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20619.php">huydanlin: "[OMPI users] MPI_Issend non-blocking send in Synchronous Mode"</a>
<li><strong>Previous message:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
<li><strong>In reply to:</strong> <a href="20617.php">David Turner: "[OMPI users] limiting tasks/ranks"</a>
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
