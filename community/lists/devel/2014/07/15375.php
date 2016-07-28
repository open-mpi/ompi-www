<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 18:50:15 2014" -->
<!-- isoreceived="20140730225015" -->
<!-- sent="Wed, 30 Jul 2014 15:50:13 -0700" -->
<!-- isosent="20140730225013" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA17mbq0rpycCrEJBy9W=m3bqDZChFJa2Vpv0T9eP6SObTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD7BFAD1-68A1-4AE0-A8FC-5E9A81B6FCAD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 18:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I am not &quot;screaming&quot; for a return of support for the PGI compilers.
<br>
I will also note that &quot;use mpi&quot; works fine; only the F2008 support is
<br>
lacking.
<br>
<p>Rather than complain I am offering to help test any solution that might be
<br>
offered.
<br>
I will also note that Nathan and Howard both have accounts at NERSC that
<br>
allow then access to Hopper, the system I have used for testing (in
<br>
addition to whatever LANL has).
<br>
<p>NEW INFO:
<br>
<p>While the 13.6 version of pgf90 failed the PROCEEDURE test, I find that
<br>
14.1 and 14.4 both *pass* (at least when attempted manually)
<br>
So, the issues I've had are DIFFERENT from the originally reported issue.
<br>
That is consistent with the mpi_f08.mod file with the same timestamp as the
<br>
others.
<br>
So, I am investigating the ORIGINAL problem once again with 14.4.
<br>
<p><p>-Paul
<br>
<p><p><p>On Wed, Jul 30, 2014 at 3:30 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jul 30, 2014, at 12:36 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, this (and
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/31588">https://svn.open-mpi.org/trac/ompi/changeset/31588</a> that followed)
</span><br>
<span class="quotelev1">&gt; represent a REGRESSION in that between 1.8.1 and 1.8.2rc2 Open MPI has lost
</span><br>
<span class="quotelev1">&gt; support for F08 with the PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, and the answer is for PGI to support more of the F2003 standard.
</span><br>
<span class="quotelev1">&gt;  Then there might be a hope for supporting the MPI F08 bindings.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Glib answer aside...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact of the matter is that Fortran compilers are a nightmare of what
</span><br>
<span class="quotelev1">&gt; specific Fortran features they support.  As part of r31587 and r31588,
</span><br>
<span class="quotelev1">&gt; there was a simplification made to the (already quite complex) F08 bindings
</span><br>
<span class="quotelev1">&gt; in OMPI to only support Fortran compilers that support PROCEDURE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think I realized that I would be cutting off PGI support with this
</span><br>
<span class="quotelev1">&gt; change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, unless someone really screams, I would greatly prefer not
</span><br>
<span class="quotelev1">&gt; to put back in the &quot;support compilers who do not support PROCEDURE&quot; code
</span><br>
<span class="quotelev1">&gt; because a) it creates the problem that we solved by taking that stuff out,
</span><br>
<span class="quotelev1">&gt; b) it adds more complexity to the F08 bindings, and c) we'll have to solve
</span><br>
<span class="quotelev1">&gt; the original problem a different way... and I don't know how to do that.
</span><br>
<span class="quotelev1">&gt;  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15374.php">http://www.open-mpi.org/community/lists/devel/2014/07/15374.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15376.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
