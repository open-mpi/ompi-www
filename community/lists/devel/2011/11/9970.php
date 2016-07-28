<?
$subject_val = "Re: [OMPI devel] VT issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 07:13:46 2011" -->
<!-- isoreceived="20111115121346" -->
<!-- sent="Tue, 15 Nov 2011 13:13:38 +0100" -->
<!-- isosent="20111115121338" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT issue" -->
<!-- id="201111151313.38774.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="080EB323-37E3-4077-9C8C-444DAE0D5817_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT issue<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 07:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll look on it asap. Thanks for the hint, George!
<br>
<p>Matthias
<br>
<p>On Monday 14 November 2011 23:39:08 George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This is supposed to be an intrinsic, automatically replaced by GCC during
</span><br>
<span class="quotelev1">&gt; the compilation process. If I do the same configure as you (on the same
</span><br>
<span class="quotelev1">&gt; machine) I have in my opal_config.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Whether C compiler supports __builtin_expect */
</span><br>
<span class="quotelev1">&gt; #define OPAL_C_HAVE_BUILTIN_EXPECT 1
</span><br>
<span class="quotelev1">&gt; /* Whether C++ compiler supports __builtin_expect */
</span><br>
<span class="quotelev1">&gt; #define OMPI_CXX_HAVE_BUILTIN_EXPECT 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that the C compiler supports __builtin_expect while the C++
</span><br>
<span class="quotelev1">&gt; compiler doesn't. I guess the VT-folks should fix their usage of the
</span><br>
<span class="quotelev1">&gt; BUILTIN_EXPECT macro &#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2011, at 12:22 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi VT-folks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm building the devel trunk on a Mac, using a vanilla configure line:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=foo. When I try to compile, I get this error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;___builtin_expect&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt; &gt;      _main.omp_fn.0 in otfprofile-otfprofile.o
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev2">&gt; &gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe this comes from your VT code. Can you take a look?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9971.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "[OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>Previous message:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9967.php">George Bosilca: "Re: [OMPI devel] VT issue"</a>
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
