<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 01:56:30 2012" -->
<!-- isoreceived="20120927055630" -->
<!-- sent="Thu, 27 Sep 2012 07:56:24 +0200" -->
<!-- isosent="20120927055624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="BC0042AF-8C62-4904-9BDC-8F92B728D4F1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17GDXwDnsKyHs=p0dgEG3PCRKQo07-8xuEmrmFeu483SQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 01:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2012, at 7:30 AM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Unless I am missing something here the desired incantation is either &quot;PUBLIC&quot; to make an entire module's contents accessible, or &quot;PUBLIC :: [component]&quot; for individual control.
</span><br>
<p>I'm going to leave this to Craig to figure out.  I know enough Fortran to be dangerous, but that's about it.  :-)
<br>
<p><span class="quotelev1">&gt; PUBLIC should be a standard part of F95 (no configure probe required).
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; However, the presence of &quot;OMPI_PRIVATE&quot; suggests you already have a configure probe for the &quot;PRIVATE&quot; keyword.
</span><br>
<p>Yes, we do, because not all compilers support it (yet?).
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
<li><strong>Next message:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11530.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11532.php">Paul Hargrove: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11533.php">N.M. Maclaren: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
