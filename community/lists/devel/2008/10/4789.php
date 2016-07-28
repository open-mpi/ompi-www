<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:28:27 2008" -->
<!-- isoreceived="20081022182827" -->
<!-- sent="Wed, 22 Oct 2008 13:28:21 -0500" -->
<!-- isosent="20081022182821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="F1951647-B68A-4981-A3A3-7C78BB813F5E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-22 14:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short answer because we're all still in Chicago...
<br>
<p>Terry tells me that you're just hacking around trying to see what  
<br>
works, etc.  So adding direct calls to the BTL in this kind of  
<br>
scenario is ok.  I'm sure you're aware that this is not good for real  
<br>
code.  :-)
<br>
<p>To directly call a BTL function, you might just want to configure OMPI  
<br>
with --enable-static; this will suck in all the plugins into libmpi,  
<br>
and therefore all symbols are directly available at link time.
<br>
<p>There's other, more elegant ways for this hackaround, but if you're  
<br>
just playing/testing, this is probably good enough.
<br>
<p><p>On Oct 22, 2008, at 1:04 PM, Eugene Loh wrote:
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
<li><strong>Next message:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<li><strong>Previous message:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>In reply to:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
