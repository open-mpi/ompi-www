<?
$subject_val = "Re: [OMPI devel] question about pids";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 15:58:52 2010" -->
<!-- isoreceived="20100223205852" -->
<!-- sent="Tue, 23 Feb 2010 13:58:43 -0700" -->
<!-- isosent="20100223205843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about pids" -->
<!-- id="585420F8-63E0-4987-8C6B-CF72DBBD460F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA66E52F-2328-44D3-892F-0AC64DA5BF21_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question about pids<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 15:58:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see a way to currently do that - the rmaps display comes -before- process launch, so the pid will not be displayed.
<br>
<p>Do you need to see them? We'd have to add that output somewhere post-launch - perhaps when debuggers are initialized.
<br>
<p>On Feb 23, 2010, at 12:58 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice that you've got support in the XML output code to display the pids of the processes, but I can't see how to enable them. Can you give me any pointers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="7472.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>In reply to:</strong> <a href="7469.php">Greg Watson: "[OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<li><strong>Reply:</strong> <a href="7493.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
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
