<?
$subject_val = "Re: [OMPI devel] How to return a run-time error to the PML?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 18:21:00 2008" -->
<!-- isoreceived="20080620222100" -->
<!-- sent="Fri, 20 Jun 2008 18:20:50 -0400" -->
<!-- isosent="20080620222050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to return a run-time error to the PML?" -->
<!-- id="10D99550-1E3F-4A1F-B9F2-DD0C3A8ACBB7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7369AE0-35E2-4FCA-B460-918368B227FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to return a run-time error to the PML?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 18:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Previous message:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>In reply to:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On IM, Galen pointed me to the BTL error registration callback  
<br>
function -- we stash away the pointer that OB1 passes to us  
<br>
(openib_btl-&gt;error_cb()).  So I'll use that.
<br>
<p>Thanks!
<br>
<p><p>On Jun 20, 2008, at 6:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Oh PML wizards...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the Right way to return an error to the PML indicating that  
</span><br>
<span class="quotelev1">&gt; something Bad happened?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking specifically for the connection schemes of the openib BTL  
</span><br>
<span class="quotelev1">&gt; -- if an error occurs (which, due to lazy connections, may be long  
</span><br>
<span class="quotelev1">&gt; after MPI_INIT), what's the Right way to notify the PML that a  
</span><br>
<span class="quotelev1">&gt; connection failed?
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
<li><strong>Next message:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Previous message:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>In reply to:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
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
