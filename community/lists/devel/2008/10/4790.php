<?
$subject_val = "Re: [OMPI devel] Direct routed module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:33:44 2008" -->
<!-- isoreceived="20081022183344" -->
<!-- sent="Wed, 22 Oct 2008 14:33:32 -0400" -->
<!-- isosent="20081022183332" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Direct routed module" -->
<!-- id="3EEE232B-C358-4342-A3A4-6CE4F9F68535_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="836FC7D6-E616-42CD-83DF-424494C23126_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Direct routed module<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Youpiiiiiii!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 21, 2008, at 4:53 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on adding a new radix tree routed module and am  
</span><br>
<span class="quotelev1">&gt; simultaneously doing a little streamlining to the overall routed- 
</span><br>
<span class="quotelev1">&gt; related code for scalability. One thing that would help cleanup  
</span><br>
<span class="quotelev1">&gt; several areas of the code base would be to finally dump the &quot;direct&quot;  
</span><br>
<span class="quotelev1">&gt; routed module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you may recall, this module has been continued for historical  
</span><br>
<span class="quotelev1">&gt; purposes. It is not scalable since it requires that every process  
</span><br>
<span class="quotelev1">&gt; open a direct connection to every other process in the job. This is  
</span><br>
<span class="quotelev1">&gt; what pre-1.3 systems do. We originally left it alive for two  
</span><br>
<span class="quotelev1">&gt; reasons: (a) we wanted to have a fallback position while we  
</span><br>
<span class="quotelev1">&gt; developed the more scalable alternatives, and (b) the C/R code  
</span><br>
<span class="quotelev1">&gt; didn't support routed RML comm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latter situation was resolved some months ago, and we have had  
</span><br>
<span class="quotelev1">&gt; plenty of validation of our routed comm system. Thus, if there are  
</span><br>
<span class="quotelev1">&gt; no objections by the end of the week, I will remove this module and  
</span><br>
<span class="quotelev1">&gt; cleanup the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if this is a concern.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4790/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4791.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4789.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
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
