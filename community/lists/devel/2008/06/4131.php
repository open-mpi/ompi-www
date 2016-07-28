<?
$subject_val = "Re: [OMPI devel] SLES 9 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 10:40:50 2008" -->
<!-- isoreceived="20080616144050" -->
<!-- sent="Mon, 16 Jun 2008 10:40:37 -0400" -->
<!-- isosent="20080616144037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SLES 9 compilation error" -->
<!-- id="0B043DEA-281C-44BD-8FA5-E6AE6F6B5F87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48565742.2090502_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SLES 9 compilation error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 10:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<li><strong>In reply to:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Last night's tarball failed with the same problem.
<br>
<p>Lenny is looking into it (I asked him about it on IM).
<br>
<p><p>On Jun 16, 2008, at 8:06 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; When compiling the latest trunk under SLES 9 I am seeing the  
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/maffinity/libnuma/maffinity_libnuma_module.c: 
</span><br>
<span class="quotelev1">&gt; 118: error: `MPOL_MF_MOVE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like SLES 9 numaif.h does not support MPOL_MF_MOVE.  Can we  
</span><br>
<span class="quotelev1">&gt; somehow make the use of MPOL_MF_MOVE configurable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<li><strong>In reply to:</strong> <a href="4130.php">Terry Dontje: "[OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
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
