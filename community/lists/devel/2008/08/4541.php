<?
$subject_val = "Re: [OMPI devel] if btl-&gt;add_procs() fails...?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 17:42:38 2008" -->
<!-- isoreceived="20080804214238" -->
<!-- sent="Mon, 4 Aug 2008 17:42:31 -0400" -->
<!-- isosent="20080804214231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] if btl-&amp;gt;add_procs() fails...?" -->
<!-- id="3B9EAC5E-9880-480A-A919-D252F0242062_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3A692B5-7AC5-40BD-8CEA-A59724945861_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-04 17:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4542.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4540.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George and I talked on the phone about this.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1436#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/1436#comment:1</a>
<br>
<p><p>On Aug 4, 2008, at 9:55 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 4, 2008, at 9:52 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suppose, but that's a pain when you just want to say &quot;I don't  
</span><br>
<span class="quotelev2">&gt;&gt; support calling add_procs a second time&quot; :).  But I'm not going to  
</span><br>
<span class="quotelev2">&gt;&gt; fix all the BTLs to make that work right, so I suppose in the end I  
</span><br>
<span class="quotelev2">&gt;&gt; really don't have a strong opinion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point.  I think that if the PML/BML sees OMPI_ERR_NOT_SUPPORTED  
</span><br>
<span class="quotelev1">&gt; or OMPI_ERR_NOT_IMPLEMENTED from add_procs(), that can be non-fatal;  
</span><br>
<span class="quotelev1">&gt; the BTL can just be ignored for this round (i.e., it wouldn't affect  
</span><br>
<span class="quotelev1">&gt; any procs that were already successfully added to that BTL module).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, that means that a BTL could return NOT_SUPPORTED/ 
</span><br>
<span class="quotelev1">&gt; IMPLEMENTED during MPI_INIT, but that would be pretty dumb.  :-)
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4542.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4540.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
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
