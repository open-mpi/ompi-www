<?
$subject_val = "Re: [OMPI devel] MCA component dependency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 21:55:17 2009" -->
<!-- isoreceived="20090328015517" -->
<!-- sent="Fri, 27 Mar 2009 21:54:56 -0400" -->
<!-- isosent="20090328015456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component dependency" -->
<!-- id="D894AB7E-53F1-473A-8396-332EF7DE0CB8_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43B8587C-2C7E-4627-9B3C-FB128D0C4101_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA component dependency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 21:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5704.php">Aur&#233;lien Bouteiller: "[OMPI devel] MCA component dependency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2009, at 6:09 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to state that a particular component depends on another
</span><br>
<span class="quotelev1">&gt; that should therefore be dlopened automatically when it is loaded. I
</span><br>
<span class="quotelev1">&gt; found some code doing exactly that in
</span><br>
<span class="quotelev1">&gt; mca_base_component_find:open_component, but can't find any example of
</span><br>
<span class="quotelev1">&gt; how to actually trigger that code path. Does anybody have a clue of
</span><br>
<span class="quotelev1">&gt; what should I do to declare the list of dependencies of my component ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>What, you want documentation?  ;-)
<br>
<p>Let's say you have a BTL component named auri, which therefore  
<br>
generates btl_auri.la (etc.).  You can have a text file named  
<br>
btl_auri.ompi_info with a line in it like this:
<br>
<p>dependency = btl:jeff
<br>
<p>This will load btl_jeff.la before btl_auri.la.
<br>
<p>It looks like the parser code here was never updated to the more  
<br>
modern flex-based key=value parser.  It also looks like each  
<br>
dependency line can only take a single value (vs. say, a comma- 
<br>
delimited list).  But it looks like you can have multiple dependency  
<br>
lines.
<br>
<p>This code used to work, but it hasn't been checked in forever...   
<br>
Extra bonus points if you update to the flex parser and allow comma/ 
<br>
whitespace-delimited lists (I think we have a utility parser function  
<br>
for that somewhere in opal...?).
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
<li><strong>Next message:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5726.php">Jeff Squyres: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5704.php">Aur&#233;lien Bouteiller: "[OMPI devel] MCA component dependency"</a>
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
