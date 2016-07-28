<?
$subject_val = "Re: [OMPI users] General Design Question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 07:46:49 2008" -->
<!-- isoreceived="20080306124649" -->
<!-- sent="Thu, 6 Mar 2008 07:46:39 -0500" -->
<!-- isosent="20080306124639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Design Question" -->
<!-- id="43CAA4B6-774C-4483-A4E5-A37536E7A99B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1e6142750803051007g24d4b1f0u79c2dcb33c3f183_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General Design Question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 07:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5143.php">Leonardo Fialho: "Re: [OMPI users] pml_v question"</a>
<li><strong>In reply to:</strong> <a href="5139.php">Samir Faci: "[OMPI users] General Design Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2008, at 1:07 PM, Samir Faci wrote:
<br>
<p><span class="quotelev1">&gt; the search seems easy enough to parallelize, but I would need to do  
</span><br>
<span class="quotelev1">&gt; the image analysis split among processors.  Would there be any  
</span><br>
<span class="quotelev1">&gt; problems with having MPI initiated and finalized within a class?
</span><br>
<p><p>The only restriction is that you can only initialize and finalize MPI  
<br>
*once* within a process.
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
<li><strong>Next message:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5143.php">Leonardo Fialho: "Re: [OMPI users] pml_v question"</a>
<li><strong>In reply to:</strong> <a href="5139.php">Samir Faci: "[OMPI users] General Design Question"</a>
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
