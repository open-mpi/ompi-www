<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 09:01:15 2009" -->
<!-- isoreceived="20090121140115" -->
<!-- sent="Wed, 21 Jan 2009 09:01:05 -0500" -->
<!-- isosent="20090121140105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="10394F6B-4EA3-4B0A-8EBD-55E60D221200_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4976BF3A.50908_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 09:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5255.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian is referring to the &quot;rdma&quot; onesided component (OMPI osd  
<br>
framework) that directly invokes the BTL functions (vs. using the PML  
<br>
send/receive functions).  The osd matching is quite different than  
<br>
pt2pt matching.
<br>
<p>His concern is that that model continues to work -- e.g., if the rdma  
<br>
osd component sends a message through a BTL that the other side not  
<br>
try to interpret and match it as a pt2pt message.  Hence, the BTL  
<br>
would need to learn some new things; e.g., that it can match some  
<br>
(pml) messages but not all (rdma/osd), or perhaps it would need to  
<br>
learn about rdma/osd matching as well, or ...(something else)...
<br>
<p>IIRC, rdma/osd is the only other non-PML component that sends directly  
<br>
through the BTLs today.  But that may change; I know that there are  
<br>
some who are working on various optimizations that may use the BTLs  
<br>
underneath (I don't want to cite them on a public list; this is  
<br>
unpublished research work at this point).
<br>
<p><p>On Jan 21, 2009, at 1:22 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I unfortunately don't have time to look in depth at the patch.  But  
</span><br>
<span class="quotelev2">&gt;&gt; my  concern is that currently (today, not at some made up time in  
</span><br>
<span class="quotelev2">&gt;&gt; the  future, maybe), we use the BTLs for more than just MPI point- 
</span><br>
<span class="quotelev2">&gt;&gt; to- point.  The rdma one-sided component (which was added for 1.3  
</span><br>
<span class="quotelev2">&gt;&gt; and  hopefully will be the default for 1.4) sends messages directly  
</span><br>
<span class="quotelev2">&gt;&gt; over  the btls.  It would be interesting to know how that is handled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand what you're saying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it help to point out that existing BTL routines don't change?   
</span><br>
<span class="quotelev1">&gt; The existing sendi is just a function that, if available, can be  
</span><br>
<span class="quotelev1">&gt; used, where appropriate, to send &quot;immediately&quot;.  Similarly for the  
</span><br>
<span class="quotelev1">&gt; proposed recvi.  No existing BTL functionality is removed.  Just  
</span><br>
<span class="quotelev1">&gt; new, optional functions added for whoever wants to (and can) use them.
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
<li><strong>Next message:</strong> <a href="5257.php">Ralph Castain: "[OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>Previous message:</strong> <a href="5255.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
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
