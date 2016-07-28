<?
$subject_val = "Re: [OMPI devel] opal_value_array";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 07:14:17 2009" -->
<!-- isoreceived="20090225121417" -->
<!-- sent="Wed, 25 Feb 2009 07:14:11 -0500" -->
<!-- isosent="20090225121411" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_value_array" -->
<!-- id="7B23CD2C-76D8-42B0-B79F-0E83101DF676_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4245EA10-397D-414D-9894-D96C714B26A3_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_value_array<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 07:14:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  We're getting into &quot;distant memory&quot; here, so I could very well  
<br>
be wrong.
<br>
<p>But I *thought* that the original array implementation would return a  
<br>
0 or a -1.  It's possible that in the value_array consolidation that  
<br>
this behavior was lost...?  I'm not sure.
<br>
<p>Other than that, I can't think of a good reason why we did it that  
<br>
way.  :-\
<br>
<p><p>On Feb 24, 2009, at 9:48 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I recently spent several days attempting to track down a bug in the  
</span><br>
<span class="quotelev1">&gt; trunk, finally finding that the root cause was linked to a rather  
</span><br>
<span class="quotelev1">&gt; strange behavior of the opal_value_array class.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you call opal_value_array_get_item and request an index that is  
</span><br>
<span class="quotelev1">&gt; beyond that of the current size of the array, this function will  
</span><br>
<span class="quotelev1">&gt; automatically increase the size of the value array, and return  
</span><br>
<span class="quotelev1">&gt; whatever garbage is sitting in the expanded memory location. There  
</span><br>
<span class="quotelev1">&gt; is no warning this has happened - no error code is returned, the  
</span><br>
<span class="quotelev1">&gt; memory is not zero'd, etc. What you get back may be  
</span><br>
<span class="quotelev1">&gt; indistinguishable from a &quot;real&quot;, albeit nonsensical, value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone explain why this behavior was considered desirable? It  
</span><br>
<span class="quotelev1">&gt; was clearly a designed response - I simply cannot see -why- we would  
</span><br>
<span class="quotelev1">&gt; want this behavior. If you request a value outside the bound of the  
</span><br>
<span class="quotelev1">&gt; array, what purpose is served by returning garbage as if it were  
</span><br>
<span class="quotelev1">&gt; &quot;valid&quot;?
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5528.php">George Bosilca: "Re: [OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="5526.php">Ralph Castain: "[OMPI devel] opal_value_array"</a>
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
