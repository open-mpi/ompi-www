<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:12:19 2015" -->
<!-- isoreceived="20150220151219" -->
<!-- sent="Fri, 20 Feb 2015 15:12:18 +0000" -->
<!-- isosent="20150220151218" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="8E3956F4-7786-4AD3-8D22-BAB220836FDD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVzYnRb+_ZpYhx4xE40hKQgDC9oH5GdaxqB1RZ2ELbEsA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 10:12:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Previous message:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2015, at 10:01 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great. Using grep I couldn't find how this is handled anywhere in the source directory. But it seems to me that the Fortran layer is now way more complicated than I initially thought.
</span><br>
<p>Fortran is your friend.
<br>
(repeat until you believe it)
<br>
<p>FWIW, that increment has been there since the very beginning.  So this particular aspect is nothing new.
<br>
<p>But there are other aspects of the Fortran layer that are more complicated than I wish they were.  Honestly, if I could dedicate a week, I would love to re-do the Fortran layer from scratch and generate (almost) all the Fortran code based on the results of compiler tests from configure.  I.e., we already have a fixed set of the Fortran API prototypes; we already generate all the relevant Fortran header files from it.  It would be great to generate (almost) all the relevant Fortran function definitions from it, too.  That would eliminate a LOT of the complexity in our Fortran bindings implementation.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17009.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi-tests branch master updated.	dev-62-gff3dee2"</a>
<li><strong>Previous message:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17011.php">Larry Baker: "Re: [OMPI devel] Fortran issue"</a>
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
