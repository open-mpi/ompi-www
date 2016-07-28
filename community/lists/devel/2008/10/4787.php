<?
$subject_val = "Re: [OMPI devel] Direct routed module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:10:09 2008" -->
<!-- isoreceived="20081022181009" -->
<!-- sent="Wed, 22 Oct 2008 10:24:02 -0500" -->
<!-- isosent="20081022152402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Direct routed module" -->
<!-- id="CF2D895B-762F-431C-A4A0-1A7E28FB8027_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 11:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good to me.
<br>
<p>On Oct 21, 2008, at 3:53 PM, Ralph Castain wrote:
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4788.php">Ralph Castain: "Re: [OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4786.php">Eugene Loh: "[OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4790.php">George Bosilca: "Re: [OMPI devel] Direct routed module"</a>
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
