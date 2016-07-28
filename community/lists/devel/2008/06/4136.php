<?
$subject_val = "Re: [OMPI devel] SLES 9 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 13:28:18 2008" -->
<!-- isoreceived="20080616172818" -->
<!-- sent="Mon, 16 Jun 2008 13:28:01 -0400" -->
<!-- isosent="20080616172801" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SLES 9 compilation error" -->
<!-- id="189A807C-A563-45CF-ABCE-6230EFDD36E2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0B043DEA-281C-44BD-8FA5-E6AE6F6B5F87_at_cisco.com" -->
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
<strong>Date:</strong> 2008-06-16 13:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4135.php">Jeff Squyres: "Re: [OMPI devel] Vampirtrace warnings"</a>
<li><strong>In reply to:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny and I fixed it in r18659 -- sorry, it's a configure change...
<br>
<p><p>On Jun 16, 2008, at 10:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Last night's tarball failed with the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny is looking into it (I asked him about it on IM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 8:06 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When compiling the latest trunk under SLES 9 I am seeing the  
</span><br>
<span class="quotelev2">&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../opal/mca/maffinity/libnuma/ 
</span><br>
<span class="quotelev2">&gt;&gt; maffinity_libnuma_module.c:118: error: `MPOL_MF_MOVE' undeclared  
</span><br>
<span class="quotelev2">&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like SLES 9 numaif.h does not support MPOL_MF_MOVE.  Can we  
</span><br>
<span class="quotelev2">&gt;&gt; somehow make the use of MPOL_MF_MOVE configurable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Previous message:</strong> <a href="4135.php">Jeff Squyres: "Re: [OMPI devel] Vampirtrace warnings"</a>
<li><strong>In reply to:</strong> <a href="4131.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>Reply:</strong> <a href="4137.php">Terry Dontje: "Re: [OMPI devel] SLES 9 compilation error"</a>
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
