<?
$subject_val = "Re: [OMPI devel] 1.3.1 fails with GM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 15:27:47 2009" -->
<!-- isoreceived="20090320192747" -->
<!-- sent="Fri, 20 Mar 2009 15:27:44 -0400" -->
<!-- isosent="20090320192744" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 fails with GM" -->
<!-- id="49C3EE30.70409_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090320180809.81371u9rh143ufll_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 fails with GM<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 15:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>Previous message:</strong> <a href="5679.php">Ralph Castain: "[OMPI devel] OMPI 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5678.php">Christian Siebert: "[OMPI devel] 1.3.1 fails with GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>Reply:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christian,
<br>
<p>Christian Siebert wrote:
<br>
<span class="quotelev1">&gt; I just gave the new release 1.3.1 a go. While Ethernet and InfiniBand 
</span><br>
<span class="quotelev1">&gt; seem to work properly, I noticed that Myrinet/GM compiles fine but gives 
</span><br>
<span class="quotelev1">&gt; a segmentation violation in the first attempt to communicate (MPI_Send 
</span><br>
<span class="quotelev1">&gt; in a simple &quot;hello world&quot; application). Is GM not supported anymore or 
</span><br>
<span class="quotelev1">&gt; is it just too old so that nobody tested it?
</span><br>
<p>GM itself is supported and maintenance releases are tested (no more 
<br>
development releases), but Open-MPI/GM is not tested at the moment. GM 
<br>
does not run on Myri-10G NICs, so we have to use a smaller pool of 
<br>
machines with Myrinet 2000 NICs in them. Human usage and MTT runs for 
<br>
Open-MPI/MX have priority and MTT for Open-MPI/GM has not run for a 
<br>
while :-(
<br>
<p>We will try to resume MTT testing with Open-MPI/GM when we have the 
<br>
resources. In the meantime, we'll look into the segfault.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>Previous message:</strong> <a href="5679.php">Ralph Castain: "[OMPI devel] OMPI 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5678.php">Christian Siebert: "[OMPI devel] 1.3.1 fails with GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>Reply:</strong> <a href="5681.php">Paul H. Hargrove: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
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
