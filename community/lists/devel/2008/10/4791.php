<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:48:12 2008" -->
<!-- isoreceived="20081022184812" -->
<!-- sent="Wed, 22 Oct 2008 13:48:07 -0500" -->
<!-- isosent="20081022184807" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="FBA07E53-341A-4F56-969B-F5B72E7C2FDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48FF6B3D.2020305_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George reminds me that I forgot to explain why you couldn't dlsym....
<br>
<p>We use lt_dlopen() to open the plugins (Libtool's wrapper for a  
<br>
portable dlopen).  It opens all plugins (DSOs) in a private scope.   
<br>
That private scope is kept deep in the OPAL MCA base and not exposed  
<br>
elsewhere in the code base.  So if you manually dlopen a plugin again,  
<br>
I'll bet that the linker realizes that that DSO has already been  
<br>
loaded into the process space and doesn't actually load it again (but  
<br>
doesn't fail).  So the dlsyms fail because you don't have access to  
<br>
the private scope from where Libtool originally opened the DSO.
<br>
<p>Make sense?
<br>
<p><p><p><p>On Oct 22, 2008, at 1:04 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to prototype an idea inside OMPI and am running into a  
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to add a new function to a BTL and to have the PML call this  
</span><br>
<span class="quotelev1">&gt; function.  I can't just put such a function call into the PML (not  
</span><br>
<span class="quotelev1">&gt; even for my prototype) since the PML is loaded before the BTL and so  
</span><br>
<span class="quotelev1">&gt; the PML will complain about a missing symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the PML will just have to refer to the function symbolically and  
</span><br>
<span class="quotelev1">&gt; I need to figure out the BTL function address &quot;at the appropriate  
</span><br>
<span class="quotelev1">&gt; time&quot; (after the BTL is loaded but before I need to call my function).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to dlopen the BTL (seemed successful... I got back a non- 
</span><br>
<span class="quotelev1">&gt; NULL handle), but dlsym can't seem to find any of the symbols in the  
</span><br>
<span class="quotelev1">&gt; BTL (not even ones that existed before I started any of my work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can describe other things I tried or other things I think are  
</span><br>
<span class="quotelev1">&gt; supposed to work (but that I am reluctant to try), but let's cut to  
</span><br>
<span class="quotelev1">&gt; the chase:  HELP!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that I'm a newbie OMPI developer and so I'm really  
</span><br>
<span class="quotelev1">&gt; interested in doing the simplest thing possible to try my  
</span><br>
<span class="quotelev1">&gt; prototype.  I recognize that certain things will have to be done to  
</span><br>
<span class="quotelev1">&gt; add &quot;real code&quot; back to the code base, but at this point I'd prefer  
</span><br>
<span class="quotelev1">&gt; to defer difficult work and just test the ideas of my prototype.
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
<li><strong>Next message:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Reply:</strong> <a href="4797.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
