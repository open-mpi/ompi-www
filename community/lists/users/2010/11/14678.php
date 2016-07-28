<?
$subject_val = "Re: [OMPI users] Question about collective messages implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 06:33:42 2010" -->
<!-- isoreceived="20101102103342" -->
<!-- sent="Tue, 2 Nov 2010 10:33:34 +0000" -->
<!-- isosent="20101102103334" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about collective messages implementation" -->
<!-- id="1ACCC1AC-61E6-474B-9D95-EBD4B1C87392_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20101102T110423-356_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about collective messages implementation<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 06:33:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
<li><strong>In reply to:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2 Nov 2010, at 10:21, Jerome Reybert wrote:
<br>
<span class="quotelev1">&gt;  - in my implementation, is MPI_Bcast aware that it should use shared memory
</span><br>
<span class="quotelev1">&gt; memory communication? Is data go through the network? It seems it is the case,
</span><br>
<span class="quotelev1">&gt; considering the first results.
</span><br>
<span class="quotelev1">&gt;  - is there any other methods to group task by machine, OpenMPI being aware
</span><br>
<span class="quotelev1">&gt; that it is grouping task by shared memory?
</span><br>
<span class="quotelev1">&gt;  - is it possible to assign a policy (in this case, a shared memory policy) to
</span><br>
<span class="quotelev1">&gt; a Bcast or a Barrier call?
</span><br>
<span class="quotelev1">&gt;  - do you have any better idea for this problem? :)
</span><br>
<p>Interesting stuff, two points quickly spring to mind from the above:
<br>
<p>MPI_Comm_split() is an expensive operation, sure the manual says it's low cost but it shouldn't be used inside any critical loops so be sure you are doing the Comm_Split() at startup and then re-using it as and when needed.
<br>
<p>Any blocking call into OpenMPI will poll consuming CPU cycles until the call is complete, you can mitigate against this by telling OpenMPI to aggressively call yield whilst polling which would mean that your parallel Lapack function could get the CPU resources it required.  Have a look at this FAQ entry for details of the option and what you can expect it to do.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
<li><strong>In reply to:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
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
