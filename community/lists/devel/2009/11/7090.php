<?
$subject_val = "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 01:17:37 2009" -->
<!-- isoreceived="20091105061737" -->
<!-- sent="Thu, 5 Nov 2009 16:42:31 +1030" -->
<!-- isosent="20091105061231" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification" -->
<!-- id="20091105164231.78497412_at_lilo" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1C01B5D9-AED4-431F-9963-31F905C7DB08_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 01:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>In reply to:</strong> <a href="7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Mon, 2 Nov 2009 21:15:15 -0500
<br>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had to go re-read that whole section on generalized requests; I  
</span><br>
<span class="quotelev1">&gt; agree with your analysis.  Could you open a ticket and submit a  
</span><br>
<span class="quotelev1">&gt; patch?  You might want to look at the back ends to MPI_TEST[_ANY]
</span><br>
<span class="quotelev1">&gt; and MPI_WAIT_ANY as well (if you haven't already).
</span><br>
<p>I had a look at MPI_WAIT_ANY and MPI_TEST_ANY and they also suffer from
<br>
the same bug. I've submitted a ticket (#2093) and attached a patch to it
<br>
for all of them.
<br>
<p>Regards,
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7091.php">Amit Sharma: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7089.php">Jeff Squyres: "[OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>In reply to:</strong> <a href="7070.php">Jeff Squyres: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
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
