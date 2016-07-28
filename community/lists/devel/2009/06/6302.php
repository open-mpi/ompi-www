<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 12:53:04 2009" -->
<!-- isoreceived="20090622165304" -->
<!-- sent="Mon, 22 Jun 2009 12:52:57 -0400" -->
<!-- isosent="20090622165257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="72767474-25D0-444C-9778-A8EE669F91B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.1.0906221734030.686_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 12:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that I'll inevitably get the language wrong, can someone suggest  
<br>
proper verbiage for this statement in the OMPI README:
<br>
<p>- MPI_REAL16 and MPI_COMPLEX32 are only supported on platforms where a
<br>
&nbsp;&nbsp;&nbsp;portable C datatype can be found that matches the Fortran type
<br>
&nbsp;&nbsp;&nbsp;REAL*16, both in size and bit representation.  The Intel v11
<br>
&nbsp;&nbsp;&nbsp;compiler, for example, supports these types, but requires the use of
<br>
&nbsp;&nbsp;&nbsp;the &quot;_16&quot; suffix in Fortran when assigning constants to REAL*16
<br>
&nbsp;&nbsp;&nbsp;variables.
<br>
<p>Thanks!
<br>
<p><p>On Jun 22, 2009, at 12:34 PM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 22 2009, Iain Bason wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for looking into this, David.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So if I understand that correctly, it means you have to assign all
</span><br>
<span class="quotelev3">&gt; &gt;&gt; literals in your fortran program with a &quot;_16&quot; suffix. I don't  
</span><br>
<span class="quotelev1">&gt; know if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that's standard Fortran or not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Yes, it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry - no, it isn't.  It's syntactically standard, but has an  
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev1">&gt; meaning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; KIND parameters are processor dependent, and do NOT mean the size in  
</span><br>
<span class="quotelev1">&gt; bytes,
</span><br>
<span class="quotelev1">&gt; words or anything else.  On a VAX or Alpha, and potentially on IBM  
</span><br>
<span class="quotelev1">&gt; and Intel
</span><br>
<span class="quotelev1">&gt; systems in the future, you could have several different floating- 
</span><br>
<span class="quotelev1">&gt; point types
</span><br>
<span class="quotelev1">&gt; of the same length.  Currently, not all compilers use the same  
</span><br>
<span class="quotelev1">&gt; conventions,
</span><br>
<span class="quotelev1">&gt; even on the same system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The correct way to do it is to have a module that defines a suitable
</span><br>
<span class="quotelev1">&gt; parameter, include that module everywhere, and use that parameter. For
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MODULE double
</span><br>
<span class="quotelev1">&gt;     INTEGER, PARAMETER :: dp = SELECTED_REAL_KIND(12)
</span><br>
<span class="quotelev1">&gt; END MODULE double
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Include 'USE double' at the start of every procedure and module, and  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; use 1.23_DP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren,
</span><br>
<span class="quotelev1">&gt; University of Cambridge Computing Service,
</span><br>
<span class="quotelev1">&gt; New Museums Site, Pembroke Street, Cambridge CB2 3QH, England.
</span><br>
<span class="quotelev1">&gt; Email:  nmm1_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel.:  +44 1223 334761    Fax:  +44 1223 334679
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6301.php">N.M. Maclaren: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
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
