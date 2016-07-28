<?
$subject_val = "Re: [OMPI devel] Memchecker errors on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 10:48:11 2008" -->
<!-- isoreceived="20080407144811" -->
<!-- sent="Mon, 7 Apr 2008 10:48:03 -0400" -->
<!-- isosent="20080407144803" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker errors on trunk" -->
<!-- id="4D677E23-C67C-4648-BE3D-7A60408738B4_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C41F8B83.CF9F%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memchecker errors on trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 10:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<li><strong>In reply to:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3679.php">Shiqing Fan: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's gcc being really mean !!! There was a double ; at the end of  
<br>
the line, and apparently the second one is interpreted as code ...  
<br>
Commit r18090 should fix the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 7, 2008, at 10:27 AM, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a problem this morning on the trunk - recent commits r18084-7
</span><br>
<span class="quotelev1">&gt; involving the ompi/include/ompi/memchecker.h file contain arithmetic
</span><br>
<span class="quotelev1">&gt; involving a void* pointer and other problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/include/ompi/memchecker.h: In function
</span><br>
<span class="quotelev1">&gt; 'memchecker_convertor_call':
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/include/ompi/memchecker.h:46: warning: ISO C90  
</span><br>
<span class="quotelev1">&gt; forbids
</span><br>
<span class="quotelev1">&gt; mixed declarations and code
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/include/ompi/memchecker.h:47: warning: ISO C90  
</span><br>
<span class="quotelev1">&gt; forbids
</span><br>
<span class="quotelev1">&gt; mixed declarations and code
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/include/ompi/memchecker.h:56: warning: pointer of  
</span><br>
<span class="quotelev1">&gt; type
</span><br>
<span class="quotelev1">&gt; 'void *' used in arithmetic
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/include/ompi/memchecker.h:45: warning: unused  
</span><br>
<span class="quotelev1">&gt; variable
</span><br>
<span class="quotelev1">&gt; 'pStack'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing: could you please fix this?
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3677/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<li><strong>In reply to:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3679.php">Shiqing Fan: "Re: [OMPI devel] Memchecker errors on trunk"</a>
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
