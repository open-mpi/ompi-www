<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:48:44 2009" -->
<!-- isoreceived="20090303204844" -->
<!-- sent="Tue, 3 Mar 2009 15:48:36 -0500" -->
<!-- isosent="20090303204836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="C2442F1A-E205-45EE-B1EC-0D6E041EB687_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AD93AB.5000602_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] calling sendi earlier in the PML<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 15:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2009, at 3:31 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; First, this behavior is basically what I was proposing and what  
</span><br>
<span class="quotelev1">&gt; George didn't feel comfortable with.  It is arguably no compromise  
</span><br>
<span class="quotelev1">&gt; at all.  (Uggh, why must I be so honest?)  For eager messages, it  
</span><br>
<span class="quotelev1">&gt; favors BTLs with sendi functions, which could lead to those BTLs  
</span><br>
<span class="quotelev1">&gt; becoming overloaded.  I think favoring BTLs with sendi for short  
</span><br>
<span class="quotelev1">&gt; messages is good.  George thinks that load balancing BTLs is good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, the implementation can be simpler than you suggest:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) You don't need a separate list since testing for a sendi-enabled  
</span><br>
<span class="quotelev1">&gt; BTL is relatively cheap (I think... could verify).
</span><br>
<span class="quotelev1">&gt; *) You don't need to shuffle the list.  The mechanism used by ob1  
</span><br>
<span class="quotelev1">&gt; just resumes the BTL search from the last BTL used.  E.g., check <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h</a> 
</span><br>
<span class="quotelev1">&gt; #mca_pml_ob1_send_request_start .  You use  
</span><br>
<span class="quotelev1">&gt; mca_bml_base_btl_array_get_next(&amp;btl_eager) to roundrobin over BTLs  
</span><br>
<span class="quotelev1">&gt; in a totally fair manner (remembering where the last loop left off),  
</span><br>
<span class="quotelev1">&gt; and using mca_bml_base_btl_array_get_size(&amp;btl_eager) to make sure  
</span><br>
<span class="quotelev1">&gt; you don't loop endlessly.
</span><br>
<p>Cool / fair enough.
<br>
<p>How about an MCA parameter to switch between this mechanism (early  
<br>
sendi) and the original behavior (late sendi)?
<br>
<p>This is the usual way that we resolve &quot;I want to do X / I want to do  
<br>
Y&quot; disputes.  :-)
<br>
<p><span class="quotelev1">&gt; I've been toying with two implementations.  The one I described in  
</span><br>
<span class="quotelev1">&gt; San Jose was called FAST, so let's still call it that.  It tests for  
</span><br>
<span class="quotelev1">&gt; sendi early in the PML, calling traditional send only if no sendi is  
</span><br>
<span class="quotelev1">&gt; found for any BTL.  To preserve the BTL ordering George favors  
</span><br>
<span class="quotelev1">&gt; (always roundrobinning over BTLs, looking only secondarily for  
</span><br>
<span class="quotelev1">&gt; sendi), I tried another implementation I'll call FAIR.  It attempts  
</span><br>
<span class="quotelev1">&gt; to initialize the send request only very minimally.  One still makes  
</span><br>
<span class="quotelev1">&gt; a number of function calls and goes &quot;deep&quot; into the PML, but defers  
</span><br>
<span class="quotelev1">&gt; as much send-request initialization as late as possible.  I can't  
</span><br>
<span class="quotelev1">&gt; promise that both implementations FAST and FAIR are equally rock  
</span><br>
<span class="quotelev1">&gt; solid or optimized, but this is where I am so far.  The differences  
</span><br>
<span class="quotelev1">&gt; are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) FAST involves far fewer code changes.
</span><br>
<span class="quotelev1">&gt; *) FAST produces faster latencies.  E.g., for 0-byte OSU latencies,  
</span><br>
<span class="quotelev1">&gt; FAST is 8-10% better than OMPI while FAIR is only 1-3% (or 2-3%...  
</span><br>
<span class="quotelev1">&gt; something like that).  (The improvements I showed in San Jose for  
</span><br>
<span class="quotelev1">&gt; FAST were more dramatic than 8-10%, but that's because there were  
</span><br>
<span class="quotelev1">&gt; optimizations on the receive side and in the data convertors as  
</span><br>
<span class="quotelev1">&gt; well.  For the e-mail you're reading right now, I'm talking just  
</span><br>
<span class="quotelev1">&gt; about send-request optimizations.)
</span><br>
<span class="quotelev1">&gt; *) Theoretically, FAIR is broader reaching.  E.g., if persistent  
</span><br>
<span class="quotelev1">&gt; sends can always use a sendi path, they will all potentially  
</span><br>
<span class="quotelev1">&gt; benefit.  (This is theory.  I haven't actually observed such a speed- 
</span><br>
<span class="quotelev1">&gt; up yet and it might just end up getting lost in the noise.)
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
<li><strong>Next message:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
