<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 18:30:00 2014" -->
<!-- isoreceived="20140210233000" -->
<!-- sent="Tue, 11 Feb 2014 00:29:57 +0100" -->
<!-- isosent="20140210232957" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="0CC1531D-FAA1-4F29-8F18-52C947CE5EB1_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140207220125.GG97640_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 18:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14080.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14039.php">Nathan Hjelm: "[OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>While this sounds like an optimization for highly specific application behavior, it is justifiable under some usage scenarios. I have several issues with the patch. Here are the minor ones:
<br>
<p>1. It does modifications that are nor necessary to the patch itself (as an example removal of the static keyword from the mca_pml_ob1_comm_proc_t class instance).
<br>
<p>2. Moving add_fragment_to_unexpected change the meaning of the code.
<br>
<p>3. If this change get pushed in to the trunk, the only reason for the existence of last_probed disappear. Thus, the variable should disappear as well.
<br>
<p>4. The last part of the patch is not related to this topic and should be pushed separately.
<br>
<p>Now the most major one. With this change you alter the most performance critical piece of code, by adding a non negligible number of potential cache misses (looking for the number of elements, adding/removing an element from a queue). This deserve a careful evaluation and consideration, not only for the less likely usage pattern you describe but for the more mainstream uses.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 7, 2014, at 23:01 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: The current probe algorithm in ob1 is linear with respect to the
</span><br>
<span class="quotelev1">&gt; number or processes in the job. I wish to change the algorithm to be
</span><br>
<span class="quotelev1">&gt; linear in the number of processes with unexpected messages. To do this I
</span><br>
<span class="quotelev1">&gt; added an additional opal_list_t to the ob1 communicator and made the ob1
</span><br>
<span class="quotelev1">&gt; process a list_item_t. When an unexpected message comes in on a proc it
</span><br>
<span class="quotelev1">&gt; is added to that proc's unexpected message queue and the proc is added
</span><br>
<span class="quotelev1">&gt; to the communicator's list of procs with unexpected messages
</span><br>
<span class="quotelev1">&gt; (unexpected_procs) if it isn't already on that list. When matching a
</span><br>
<span class="quotelev1">&gt; probe request this list is used to determine which procs to look at to
</span><br>
<span class="quotelev1">&gt; find an unexpected message. The new list is protected by the matching
</span><br>
<span class="quotelev1">&gt; lock so no extra locking is needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: I have a benchmark that makes heavy use of MPI_Iprobe in one if its
</span><br>
<span class="quotelev1">&gt; phases. I discovered that the primary reason this benchmark was running
</span><br>
<span class="quotelev1">&gt; slow with Open MPI is the probe algorithm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: This is another simple optimization. It only affects the
</span><br>
<span class="quotelev1">&gt; unexpected message path and will speed up probe requests. This is
</span><br>
<span class="quotelev1">&gt; intended to go into 1.7.5. Setting the timeout to next Tuesday (which
</span><br>
<span class="quotelev1">&gt; gives me time to verify the improvment at scale-- 131,000 PEs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the attached patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;iprobe_patch.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14080.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>In reply to:</strong> <a href="14039.php">Nathan Hjelm: "[OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14082.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
