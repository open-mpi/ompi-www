<?
$subject_val = "Re: [OMPI devel] heterogeneous OpenFabrics adapters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 18:44:18 2008" -->
<!-- isoreceived="20080512224418" -->
<!-- sent="Mon, 12 May 2008 18:44:08 -0400" -->
<!-- isosent="20080512224408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous OpenFabrics adapters" -->
<!-- id="7D448302-3A40-4A2C-950B-28D1BDDB09DB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="919F5573-6015-4759-98C0-D970F93662E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] heterogeneous OpenFabrics adapters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 18:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3891.php">Jeff Squyres: "[OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After looking at the code a bit, I realized that I completely forgot  
<br>
that the INI file was invented to solve at least the heterogeneous- 
<br>
adapters-in-a-host problem.
<br>
<p>So I amended the ticket to reflect that that problem is already  
<br>
solved.  The other part is not, though -- consider two MPI procs on  
<br>
different hosts, each with an iWARP NIC, but one NIC supports SRQs and  
<br>
one does not.
<br>
<p><p>On May 12, 2008, at 5:36 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think that this issue has come up before, but I filed a ticket  
</span><br>
<span class="quotelev1">&gt; about it because at least one developer (Jon) has a system with both  
</span><br>
<span class="quotelev1">&gt; IB and iWARP adapters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/1282">https://svn.open-mpi.org/trac/ompi/ticket/1282</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question: do we care about the heterogeneous adapter scenarios?   
</span><br>
<span class="quotelev1">&gt; For v1.3?  For v1.4?  For ...some version in the future?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the first issue I identified in the ticket is grunt work to  
</span><br>
<span class="quotelev1">&gt; fix (annoying and tedious, but not difficult), but the second one  
</span><br>
<span class="quotelev1">&gt; will be a little dicey -- it has scalability issues (e.g., sending  
</span><br>
<span class="quotelev1">&gt; around all info in the modex, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3891.php">Jeff Squyres: "[OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3896.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
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
