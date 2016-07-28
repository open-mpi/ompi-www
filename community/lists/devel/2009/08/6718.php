<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 00:05:21 2009" -->
<!-- isoreceived="20090825040521" -->
<!-- sent="Mon, 24 Aug 2009 22:05:07 -0600" -->
<!-- isosent="20090825040507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="5436DD7B-E580-4C31-AC9A-C7C97458A2D4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A935963.8000000_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 00:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6719.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6716.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 9:24 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not quite that simple, Patrick. Think of things like MPI_Sendrecv,  
</span><br>
<span class="quotelev2">&gt;&gt; where the &quot;send&quot; call is below that of the user's code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have a point, Ralph. Although, that would be 8 more lines to add  
</span><br>
<span class="quotelev1">&gt; to the user MPI code to define a MPI_Sendrecv macro :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seriously, this particular proposal is not the most flaming example  
</span><br>
<span class="quotelev1">&gt; of OpenMPI doing too much or going too far.
</span><br>
<p>Agreed
<br>
<p><span class="quotelev1">&gt; I personally thought that the discussion about affinity was much  
</span><br>
<span class="quotelev1">&gt; more revealing in itself, like the part about in effect replacing  
</span><br>
<span class="quotelev1">&gt; the OS scheduler.
</span><br>
<p>Ummm...though this is a separate discussion, please note that we never  
<br>
said we would replace the OS scheduler. All we said was that OMPI  
<br>
didn't currently detect and/or obey any OS scheduler binding  
<br>
directives when binding processes.
<br>
<p>This has now been corrected in the devel trunk, though it remains to  
<br>
be fully tested.
<br>
<p>The issue of what to do in the absence of any OS scheduler binding  
<br>
directives is a topic for a separate discussion - which I believe we  
<br>
already have partially had. :-)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
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
<li><strong>Next message:</strong> <a href="6719.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6716.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
