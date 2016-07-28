<?
$subject_val = "Re: [OMPI devel] &quot;prefix&quot; style guideline";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 13:31:12 2009" -->
<!-- isoreceived="20090709173112" -->
<!-- sent="Thu, 9 Jul 2009 13:31:06 -0400" -->
<!-- isosent="20090709173106" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;prefix&amp;quot; style guideline" -->
<!-- id="56A0343A-9EB8-4DA6-BF7A-EAB3A4BC792E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A54E2CB.7050507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;prefix&quot; style guideline<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 13:31:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2009, at 2:17 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In <a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a> , there is
</span><br>
<span class="quotelev1">&gt; mention of &quot;the prefix rule.&quot;  What is this rule?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In components, you have to prefix all public symbols with  
<br>
&quot;&lt;layer&gt;_&lt;framework&gt;_&lt;component&gt;&quot;, where &lt;layer&gt; is one of &quot;mca&quot;,  
<br>
&quot;ompi&quot;, &quot;orte&quot;, or &quot;opal&quot; (&quot;mca&quot; used to be used, but it has fallen  
<br>
out of favor; &quot;ompi&quot;, &quot;orte&quot;, and &quot;opal&quot; are a bit more common these  
<br>
days -- but still the bulk of existing code probably uses &quot;mca&quot;).
<br>
<p><span class="quotelev1">&gt; Let me ask specifically this.  If I look at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_endpoint.h">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_endpoint.h</a> 
</span><br>
<span class="quotelev1">&gt; #46
</span><br>
<span class="quotelev1">&gt; , I see a declaration for &quot;void btl_sm_add_pending&quot;.  Should that  
</span><br>
<span class="quotelev1">&gt; really
</span><br>
<span class="quotelev1">&gt; have an &quot;mca_&quot; appended to the name?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Prepended.  If it's a public symbol, yes.  If it's not public, then it  
<br>
can be named whatever you want.
<br>
<p><span class="quotelev1">&gt; Don't worry about the
</span><br>
<span class="quotelev1">&gt; particulars.  I'm about to change this code.  I'm just asking about  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; principles.  Because this function is callable from a file other than
</span><br>
<span class="quotelev1">&gt; where it is defined, should the prefix be &quot;mca_btl_sm_&quot; or does
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_&quot; suffice?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly, I see a btl_sm_pending_send_item_t type.  Should that also
</span><br>
<span class="quotelev1">&gt; have mca_ appended?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ouch, and this one:  sm_fifo_t.  (This one is my fault.)  I assume it
</span><br>
<span class="quotelev1">&gt; should be mca_btl_sm_fifo_t, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct on all counts -- when in doubt, add the prefix.  It never  
<br>
hurts to add the prefix.
<br>
<p>Most plaforms will obey the DECLSPEC stuff these days, so this is  
<br>
mostly moot for non-DECLSPEC'ed symbols.  But there probably are a  
<br>
handful of platforms/compilers out there that make symbols public even  
<br>
though we don't DECLSPEC them.  That being said, I haven't checked in  
<br>
a while to know what the status is in this regard (e.g., if only  
<br>
ancient compilers don't obey DECLSPEC, etc.).
<br>
<p><span class="quotelev1">&gt; P.S.  Shouldn't the &quot;prefix rule&quot; be explained in the &quot;coding style&quot;
</span><br>
<span class="quotelev1">&gt; twiki page?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Why?  Then we'd be *clear*...
<br>
<p>:-p
<br>
<p>I'd volunteer to add something, but I'm heading out on vacation  
<br>
tomorrow afternoon, and have a bagillion things to finish before then  
<br>
-- would you mind adding something?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
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
