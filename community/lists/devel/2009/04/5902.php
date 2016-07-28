<?
$subject_val = "Re: [OMPI devel] r21096";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 10:35:35 2009" -->
<!-- isoreceived="20090429143535" -->
<!-- sent="Wed, 29 Apr 2009 10:35:28 -0400" -->
<!-- isosent="20090429143528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r21096" -->
<!-- id="1F046EA3-32C3-4BDC-966F-B4D514625C09_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0904290633u33b84fa4h23f5df2c04cfad66_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r21096<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 10:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5903.php">Brian Blank: "[OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2009, at 9:33 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; My personal opinion however is, that every header and every source  
</span><br>
<span class="quotelev2">&gt;&gt; file should
</span><br>
<span class="quotelev2">&gt;&gt; be self contained:
</span><br>
<span class="quotelev2">&gt;&gt; It should include all the headers with symbols it needs, no less, and
</span><br>
<span class="quotelev2">&gt;&gt; certainly not more ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's an unusual coding style - we could debate the relative pros  
</span><br>
<span class="quotelev1">&gt; and cons of it for quite some time. Typically, if a body of code is  
</span><br>
<span class="quotelev1">&gt; going to all require the same headers, coding efficiency would put  
</span><br>
<span class="quotelev1">&gt; those dependencies in a common .h file, not explicitly copy/paste  
</span><br>
<span class="quotelev1">&gt; them into every individual file.
</span><br>
<p>FWIW, this is the style that was used in the C bindings -- IIRC, those  
<br>
three header files were #included via ompi/c/bindings.h explicitly so  
<br>
that they would not need to be #included in every single .c file  
<br>
(partly because there are so many .c files).
<br>
<p>Hmm.  :-\
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
<li><strong>Next message:</strong> <a href="5903.php">Brian Blank: "[OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
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
