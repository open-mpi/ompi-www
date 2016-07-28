<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 19:52:35 2011" -->
<!-- isoreceived="20110311005235" -->
<!-- sent="Thu, 10 Mar 2011 16:51:43 -0800" -->
<!-- isosent="20110311005143" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="4D79721F.2020703_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF6D2250-C944-4CB4-A06F-AC20A6E44A15_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 19:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9053.php">Eugene Loh: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9051.php">Ralph Castain: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9051.php">Ralph Castain: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The idea would be to hardwire support for MPI_THREAD_MULTIPLE to be off, 
<br>
just as we have done for progress threads.  Threads might still be used 
<br>
for other purposes -- e.g., ORTE, openib async thread, etc.
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;Can't speak to the MPI layer, but you definitely cannot hardwire thread support to &quot;off&quot; for ORTE.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We wanted to clean up MPI_THREAD_MULTIPLE support in the trunk and port these changes back to 1.5.x, but it's unclear to me what our expectations should be about any MPI_THREAD_MULTIPLE test succeeding.  How do we assess (test) our changes?  Or, should we just hardwire thread support to be off, as we have done with progress threads?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9053.php">Eugene Loh: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9051.php">Ralph Castain: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9051.php">Ralph Castain: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9057.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
