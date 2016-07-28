<?
$subject_val = "Re: [OMPI devel] MPI_Com_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:37:59 2008" -->
<!-- isoreceived="20081028143759" -->
<!-- sent="Tue, 28 Oct 2008 08:37:52 -0600" -->
<!-- isosent="20081028143752" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Com_spawn" -->
<!-- id="0194FF4C-0896-4F67-AE5B-2190069FB239_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C3A450D-0858-4417-87C2-DAD393ACF027_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-10-28 10:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, of course it does - the problem is in a sanity check I just  
<br>
installed over the weekend.
<br>
<p>Easily fixed...
<br>
<p><p>On Oct 28, 2008, at 8:33 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run in troubles with the new IO framework when I spawn a new  
</span><br>
<span class="quotelev1">&gt; process. The following error message is dumped and the job is aborted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The requested stdin target is out of range for this job - it points
</span><br>
<span class="quotelev1">&gt; to a process rank that is greater than the number of process in the
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specified target: INVALID
</span><br>
<span class="quotelev1">&gt; Number of procs: 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be caused by specifying a negative number for the stdin
</span><br>
<span class="quotelev1">&gt; target, or by mistyping the desired rank. Please correct the cmd line
</span><br>
<span class="quotelev1">&gt; and try again.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the new IO framework supposed to support MPI2 dynamics ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
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
<li><strong>Next message:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4817.php">George Bosilca: "[OMPI devel] MPI_Com_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
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
