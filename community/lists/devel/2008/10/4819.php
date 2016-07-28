<?
$subject_val = "Re: [OMPI devel] MPI_Com_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:51:02 2008" -->
<!-- isoreceived="20081028145102" -->
<!-- sent="Tue, 28 Oct 2008 08:50:55 -0600" -->
<!-- isosent="20081028145055" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Com_spawn" -->
<!-- id="A93B397A-E742-4E37-A945-A7D440EAA49F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0194FF4C-0896-4F67-AE5B-2190069FB239_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Com_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 10:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done...r19820
<br>
<p>On Oct 28, 2008, at 8:37 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yes, of course it does - the problem is in a sanity check I just  
</span><br>
<span class="quotelev1">&gt; installed over the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Easily fixed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 8:33 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run in troubles with the new IO framework when I spawn a new  
</span><br>
<span class="quotelev2">&gt;&gt; process. The following error message is dumped and the job is  
</span><br>
<span class="quotelev2">&gt;&gt; aborted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev2">&gt;&gt; to a process rank that is greater than the number of process in the
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specified target: INVALID
</span><br>
<span class="quotelev2">&gt;&gt; Number of procs: 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev2">&gt;&gt; target, or by mistyping the desired rank. Please correct the cmd line
</span><br>
<span class="quotelev2">&gt;&gt; and try again.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the new IO framework supposed to support MPI2 dynamics ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4824.php">George Bosilca: "Re: [OMPI devel] MPI_Com_spawn"</a>
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
