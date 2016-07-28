<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 11:09:10 2007" -->
<!-- isoreceived="20071108160910" -->
<!-- sent="Thu, 08 Nov 2007 08:09:06 -0800" -->
<!-- isosent="20071108160906" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="473334A2.2010008_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AE8A656A-E690-477D-A3A3-CC55FD09E10D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collective problems<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 11:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2589.php">Tim Mattox: "Re: [OMPI devel] Release wiki pages"</a>
<li><strong>In reply to:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">  &gt; Personally, I'd rather just not mark MPI completion until a local
</span><br>
<span class="quotelev1">&gt; completion callback from the BTL.  But others don't like that idea, so  
</span><br>
<span class="quotelev1">&gt; we came up with a way for back pressure from the BTL to say &quot;it's not  
</span><br>
<span class="quotelev1">&gt; on the wire yet&quot;.  This is more complicated than just not marking MPI  
</span><br>
<span class="quotelev1">&gt; completion early, but why would we do something that helps real apps  
</span><br>
<span class="quotelev1">&gt; at the expense of benchmarks?  That would just be silly!
</span><br>
<p>FWIW this issue is also very relevant for the UD BTL, especially with 
<br>
some new work I've done in the last week (currently having problems with 
<br>
send-side completion semantics).  I missed it, what was the reasoning 
<br>
for not marking MPI completion until a callback from the BTL?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2589.php">Tim Mattox: "Re: [OMPI devel] Release wiki pages"</a>
<li><strong>In reply to:</strong> <a href="2574.php">Brian Barrett: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2591.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
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
