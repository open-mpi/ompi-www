<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 17:44:45 2008" -->
<!-- isoreceived="20081022214445" -->
<!-- sent="Wed, 22 Oct 2008 14:47:45 -0700" -->
<!-- isosent="20081022214745" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="48FF9F81.9030807_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBA07E53-341A-4F56-969B-F5B72E7C2FDA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] adding new functions to a BTL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 17:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We use lt_dlopen() to open the plugins (Libtool's wrapper for a  
</span><br>
<span class="quotelev1">&gt; portable dlopen).  It opens all plugins (DSOs) in a private scope.   
</span><br>
<span class="quotelev1">&gt; That private scope is kept deep in the OPAL MCA base and not exposed  
</span><br>
<span class="quotelev1">&gt; elsewhere in the code base.  So if you manually dlopen a plugin 
</span><br>
<span class="quotelev1">&gt; again,  I'll bet that the linker realizes that that DSO has already 
</span><br>
<span class="quotelev1">&gt; been  loaded into the process space and doesn't actually load it again 
</span><br>
<span class="quotelev1">&gt; (but  doesn't fail).  So the dlsyms fail because you don't have access 
</span><br>
<span class="quotelev1">&gt; to  the private scope from where Libtool originally opened the DSO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<p>Yes, I'm nodding my head vigorously (with a vacuous stare on my face).  
<br>
Mostly, I think you're very smart and I'm not!  I get the general 
<br>
principles, but am unfamiliar with the details.
<br>
<p>Never mind:  --enable-static is exactly the flavor of suggestion I was 
<br>
looking for.  Thanks.  I'm back in the saddle.  Onward.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4796.php">Ralph Castain: "Re: [OMPI devel] Component open"</a>
<li><strong>In reply to:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
