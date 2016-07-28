<?
$subject_val = "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 08:28:56 2008" -->
<!-- isoreceived="20080621122856" -->
<!-- sent="Sat, 21 Jun 2008 08:28:44 -0400" -->
<!-- isosent="20080621122844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??" -->
<!-- id="5BCD2BC7-D5C7-4462-960D-B41B9702EB98_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080613052149.GC8796_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 08:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4195.php">Jeff Squyres: "[OMPI devel] Fwd: Create success (r1.3a1r18704)"</a>
<li><strong>Previous message:</strong> <a href="4193.php">Jeff Squyres: "Re: [OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>In reply to:</strong> <a href="4128.php">Ralf Wildenhues: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Uck; this is complicated.  The majority of top-level args are  
<br>
irrelevant to the contrib packages, but all the standard AC flags  
<br>
(e.g., --libdir) certainly can be relevant.
<br>
<p>VT guys -- can you look into this?
<br>
<p><p>On Jun 13, 2008, at 1:21 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * David Daniel wrote on Wed, Jun 11, 2008 at 11:34:23PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; Building against recent heads (r18643) it appears that libdir (as set
</span><br>
<span class="quotelev2">&gt;&gt; by ./configure --prefix=$PREFIX --libdir=$PREFIX/lib64 for example)  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; not propagated to ompi-trunk/contrib/vt/vt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/configure.m4 is responsible for this.  It seems only
</span><br>
<span class="quotelev1">&gt; selected arguments from the top-level configure are propagated.  This
</span><br>
<span class="quotelev1">&gt; looks unfortunate to me, as there are many arguments the user may  
</span><br>
<span class="quotelev1">&gt; change
</span><br>
<span class="quotelev1">&gt; (see configure --help).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Feature or bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody else will have to answer that.  FWIW, I'd regard it as a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="4195.php">Jeff Squyres: "[OMPI devel] Fwd: Create success (r1.3a1r18704)"</a>
<li><strong>Previous message:</strong> <a href="4193.php">Jeff Squyres: "Re: [OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>In reply to:</strong> <a href="4128.php">Ralf Wildenhues: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
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
