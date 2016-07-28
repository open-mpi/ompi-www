<?
$subject_val = "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 13 01:22:16 2008" -->
<!-- isoreceived="20080613052216" -->
<!-- sent="Fri, 13 Jun 2008 07:21:50 +0200" -->
<!-- isosent="20080613052150" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??" -->
<!-- id="20080613052149.GC8796_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1AA2F558-F783-4B4D-8959-364BA87FF5E5_at_lanl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-13 01:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4129.php">Brian Barrett: "[OMPI devel] Two large patches in trunk"</a>
<li><strong>Previous message:</strong> <a href="4127.php">Tim Mattox: "[OMPI devel] Brief mail services outage today"</a>
<li><strong>In reply to:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Reply:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* David Daniel wrote on Wed, Jun 11, 2008 at 11:34:23PM CEST:
<br>
<span class="quotelev1">&gt; Building against recent heads (r18643) it appears that libdir (as set  
</span><br>
<span class="quotelev1">&gt; by ./configure --prefix=$PREFIX --libdir=$PREFIX/lib64 for example) is  
</span><br>
<span class="quotelev1">&gt; not propagated to ompi-trunk/contrib/vt/vt.
</span><br>
<p>ompi/contrib/vt/configure.m4 is responsible for this.  It seems only
<br>
selected arguments from the top-level configure are propagated.  This
<br>
looks unfortunate to me, as there are many arguments the user may change
<br>
(see configure --help).
<br>
<p><span class="quotelev1">&gt; Feature or bug?
</span><br>
<p>Somebody else will have to answer that.  FWIW, I'd regard it as a bug.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4129.php">Brian Barrett: "[OMPI devel] Two large patches in trunk"</a>
<li><strong>Previous message:</strong> <a href="4127.php">Tim Mattox: "[OMPI devel] Brief mail services outage today"</a>
<li><strong>In reply to:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Reply:</strong> <a href="4194.php">Jeff Squyres: "Re: [OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
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
