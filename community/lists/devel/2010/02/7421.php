<?
$subject_val = "Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 14:50:18 2010" -->
<!-- isoreceived="20100211195018" -->
<!-- sent="Thu, 11 Feb 2010 14:50:04 -0500" -->
<!-- isosent="20100211195004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL" -->
<!-- id="39616A8D-F8F0-4C4F-BFA1-5D80C5A36BA0_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e41002110906v6471d846g24070f58c527d63a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 14:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- it should be in 1.4.2 -- the CMR George filed after your mail earlier today includes both the REQUEST_NULL and WIN_*_ERRHANDLER stuff:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2257">https://svn.open-mpi.org/trac/ompi/ticket/2257</a>
<br>
<p>I just added you to the CC.  
<br>
<p>BUT: I think we should be careful with r20537; if we bring that over (and I think we should), we should *also* bring over r20616 because of a change I instigated in MPI-2.2 because of exactly this issue.
<br>
<p>All of this stuff is already in the v1.5 branch.
<br>
<p>Thanks for keeping after us!
<br>
<p><p><p>On Feb 11, 2010, at 12:06 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; I've reported this long ago (alongside other issues now fixed)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see that this is fixed in trunk and branches/v1.5, but not
</span><br>
<span class="quotelev1">&gt; backported to branches/v1.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any chance to get this for 1.4.2? Or should it wait until 1.5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7422.php">Jeff Squyres: "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
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
