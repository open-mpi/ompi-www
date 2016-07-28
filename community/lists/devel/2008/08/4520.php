<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:57:08 2008" -->
<!-- isoreceived="20080804135708" -->
<!-- sent="Mon, 4 Aug 2008 09:55:45 -0400" -->
<!-- isosent="20080804135545" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="C3A692B5-7AC5-40BD-8CEA-A59724945861_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7F634D0B-65FF-4CF2-A45F-18D34F99D418_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] if btl-&gt;add_procs() fails...?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4541.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4541.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 4, 2008, at 9:52 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I suppose, but that's a pain when you just want to say &quot;I don't  
</span><br>
<span class="quotelev1">&gt; support calling add_procs a second time&quot; :).  But I'm not going to  
</span><br>
<span class="quotelev1">&gt; fix all the BTLs to make that work right, so I suppose in the end I  
</span><br>
<span class="quotelev1">&gt; really don't have a strong opinion.
</span><br>
<p><p>Good point.  I think that if the PML/BML sees OMPI_ERR_NOT_SUPPORTED  
<br>
or OMPI_ERR_NOT_IMPLEMENTED from add_procs(), that can be non-fatal;  
<br>
the BTL can just be ignored for this round (i.e., it wouldn't affect  
<br>
any procs that were already successfully added to that BTL module).
<br>
<p>Of course, that means that a BTL could return NOT_SUPPORTED/ 
<br>
IMPLEMENTED during MPI_INIT, but that would be pretty dumb.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4519.php">Brian Barrett: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4541.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Reply:</strong> <a href="4541.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
