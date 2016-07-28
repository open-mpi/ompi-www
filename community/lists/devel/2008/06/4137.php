<?
$subject_val = "Re: [OMPI devel] SLES 9 compilation error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 13:51:07 2008" -->
<!-- isoreceived="20080616175107" -->
<!-- sent="Mon, 16 Jun 2008 13:50:42 -0400" -->
<!-- isosent="20080616175042" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SLES 9 compilation error" -->
<!-- id="4856A7F2.4080009_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="189A807C-A563-45CF-ABCE-6230EFDD36E2_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 13:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4138.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI / Coverity: not running?"</a>
<li><strong>Previous message:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Lenny and I fixed it in r18659 -- sorry, it's a configure change...
</span><br>
<span class="quotelev1">&gt;
</span><br>
thanks.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2008, at 10:40 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Last night's tarball failed with the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny is looking into it (I asked him about it on IM).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2008, at 8:06 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When compiling the latest trunk under SLES 9 I am seeing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../opal/mca/maffinity/libnuma/maffinity_libnuma_module.c:118: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: `MPOL_MF_MOVE' undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like SLES 9 numaif.h does not support MPOL_MF_MOVE.  Can we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow make the use of MPOL_MF_MOVE configurable?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4138.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI / Coverity: not running?"</a>
<li><strong>Previous message:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Jeff Squyres: "Re: [OMPI devel] SLES 9 compilation error"</a>
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
