<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 12:34:08 2009" -->
<!-- isoreceived="20090622163408" -->
<!-- sent="22 Jun 2009 17:34:03 +0100" -->
<!-- isosent="20090622163403" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="Prayer.1.3.1.0906221734030.686_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3FA2A1.5080906_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_REAL16<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 12:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6300.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22 2009, Iain Bason wrote:
<br>
<span class="quotelev1">&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking into this, David.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if I understand that correctly, it means you have to assign all 
</span><br>
<span class="quotelev2">&gt;&gt; literals in your fortran program with a &quot;_16&quot; suffix. I don't know if 
</span><br>
<span class="quotelev2">&gt;&gt; that's standard Fortran or not. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, it is.
</span><br>
<p>Sorry - no, it isn't.  It's syntactically standard, but has an undefined
<br>
meaning.
<br>
<p>KIND parameters are processor dependent, and do NOT mean the size in bytes,
<br>
words or anything else.  On a VAX or Alpha, and potentially on IBM and Intel
<br>
systems in the future, you could have several different floating-point types
<br>
of the same length.  Currently, not all compilers use the same conventions,
<br>
even on the same system.
<br>
<p>The correct way to do it is to have a module that defines a suitable 
<br>
parameter, include that module everywhere, and use that parameter. For 
<br>
example:
<br>
<p>MODULE double
<br>
&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, PARAMETER :: dp = SELECTED_REAL_KIND(12)
<br>
END MODULE double
<br>
<p>Include 'USE double' at the start of every procedure and module, and then
<br>
use 1.23_DP.
<br>
<p><p>Regards,
<br>
Nick Maclaren,
<br>
University of Cambridge Computing Service,
<br>
New Museums Site, Pembroke Street, Cambridge CB2 3QH, England.
<br>
Email:  nmm1_at_[hidden]
<br>
Tel.:  +44 1223 334761    Fax:  +44 1223 334679
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6300.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
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
