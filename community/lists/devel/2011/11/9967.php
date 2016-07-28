<?
$subject_val = "Re: [OMPI devel] VT issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 17:39:12 2011" -->
<!-- isoreceived="20111114223912" -->
<!-- sent="Mon, 14 Nov 2011 17:39:08 -0500" -->
<!-- isosent="20111114223908" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT issue" -->
<!-- id="080EB323-37E3-4077-9C8C-444DAE0D5817_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="78418F17-5762-436C-8399-E0C97D9A032D_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 17:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<li><strong>In reply to:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<li><strong>Reply:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is supposed to be an intrinsic, automatically replaced by GCC during the compilation process. If I do the same configure as you (on the same machine) I have in my opal_config.h:
<br>
<p>/* Whether C compiler supports __builtin_expect */
<br>
#define OPAL_C_HAVE_BUILTIN_EXPECT 1
<br>
/* Whether C++ compiler supports __builtin_expect */
<br>
#define OMPI_CXX_HAVE_BUILTIN_EXPECT 0
<br>
<p>This means that the C compiler supports __builtin_expect while the C++ compiler doesn't. I guess the VT-folks should fix their usage of the BUILTIN_EXPECT macro &#133;
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 14, 2011, at 12:22 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi VT-folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm building the devel trunk on a Mac, using a vanilla configure line: ./configure --prefix=foo. When I try to compile, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;  &quot;___builtin_expect&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      _main.omp_fn.0 in otfprofile-otfprofile.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe this comes from your VT code. Can you take a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9968.php">Christopher Samuel: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<li><strong>In reply to:</strong> <a href="9966.php">Ralph Castain: "[OMPI devel] VT issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
<li><strong>Reply:</strong> <a href="9970.php">Matthias Jurenz: "Re: [OMPI devel] VT issue"</a>
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
