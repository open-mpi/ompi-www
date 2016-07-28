<?
$subject_val = "Re: [OMPI devel] Memchecker errors on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:09:31 2008" -->
<!-- isoreceived="20080407210931" -->
<!-- sent="Mon, 07 Apr 2008 23:09:14 +0200" -->
<!-- isosent="20080407210914" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker errors on trunk" -->
<!-- id="web-99708365_at_uni-stuttgart.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D677E23-C67C-4648-BE3D-7A60408738B4_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 17:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
<li><strong>Previous message:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>In reply to:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, George.
<br>
<p>I didn't get this message this afternoon, sorry.
<br>
<p><p>Shiqing
<br>
<p>On Mon, 7 Apr 2008 10:48:03 -0400
<br>
&nbsp;&nbsp;George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That's gcc being really mean !!! There was a double ; at 
</span><br>
<span class="quotelev1">&gt;the end of  the line, and apparently the second one is 
</span><br>
<span class="quotelev1">&gt;interpreted as code ...  Commit r18090 should fix the 
</span><br>
<span class="quotelev1">&gt;problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2008, at 10:27 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a problem this morning on the trunk - recent 
</span><br>
<span class="quotelev2">&gt;&gt;commits r18084-7
</span><br>
<span class="quotelev2">&gt;&gt; involving the ompi/include/ompi/memchecker.h file 
</span><br>
<span class="quotelev2">&gt;&gt;contain arithmetic
</span><br>
<span class="quotelev2">&gt;&gt; involving a void* pointer and other problems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/include/ompi/memchecker.h: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'memchecker_convertor_call':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/include/ompi/memchecker.h:46: warning: 
</span><br>
<span class="quotelev2">&gt;&gt;ISO C90  
</span><br>
<span class="quotelev2">&gt;&gt; forbids
</span><br>
<span class="quotelev2">&gt;&gt; mixed declarations and code
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/include/ompi/memchecker.h:47: warning: 
</span><br>
<span class="quotelev2">&gt;&gt;ISO C90  
</span><br>
<span class="quotelev2">&gt;&gt; forbids
</span><br>
<span class="quotelev2">&gt;&gt; mixed declarations and code
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/include/ompi/memchecker.h:56: warning: 
</span><br>
<span class="quotelev2">&gt;&gt;pointer of  
</span><br>
<span class="quotelev2">&gt;&gt; type
</span><br>
<span class="quotelev2">&gt;&gt; 'void *' used in arithmetic
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/include/ompi/memchecker.h:45: warning: 
</span><br>
<span class="quotelev2">&gt;&gt;unused  
</span><br>
<span class="quotelev2">&gt;&gt; variable
</span><br>
<span class="quotelev2">&gt;&gt; 'pStack'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing: could you please fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3680.php">Tim Prins: "[OMPI devel] mpirun return code problems"</a>
<li><strong>Previous message:</strong> <a href="3678.php">Ralph H Castain: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>In reply to:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
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
