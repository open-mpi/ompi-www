<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 09:22:08 2007" -->
<!-- isoreceived="20070709132208" -->
<!-- sent="Mon, 9 Jul 2007 09:21:52 -0400" -->
<!-- isosent="20070709132152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_output_verbose usage guidelines" -->
<!-- id="5BFA4D95-99DD-4BF3-847B-3ECFC3931C0B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="468EB238.7060501_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 09:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1808.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>In reply to:</strong> <a href="1800.php">Don Kerr: "[OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2007, at 5:20 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Are there any guidelines about the use of opal_output_verbose?
</span><br>
<p>Not so much.
<br>
<p><span class="quotelev1">&gt;         - Are there hidden meanings for a given verbose level? e.g. 0
</span><br>
<span class="quotelev1">&gt; reserved for PML, or 50-100 for BTL and so on
</span><br>
<p>Nope.  The output was designed to use the values with &gt;= kinds of  
<br>
checking; i.e., the higher the verbose value the user gives, the more  
<br>
output they see.  I.e., the values are not used in a &quot;bit flag&quot; sense  
<br>
(i.e., each bit enables/disables a specific set of output).
<br>
<p><span class="quotelev1">&gt;         - Maybe the base component output_id is ok to use in situation
</span><br>
<span class="quotelev1">&gt; XYZ but a component specific output_id should be used in situation  
</span><br>
<span class="quotelev1">&gt; ABC?
</span><br>
<span class="quotelev1">&gt; Or should never be used for component specific output?
</span><br>
<p>I've typically used the base component output_id whenever possible.   
<br>
I usually started off having an output ID for a specific component,  
<br>
but usually that was for debugging (and therefore having oodles and  
<br>
oodles of output).  By the time I was done, I usually had only a few  
<br>
output statements and therefore used the base ID.
<br>
<p>I guess my suggestion would be: if you're going to have a LOT of  
<br>
output, then make it a component-specific ID.  If it's a &quot;reasonable&quot;  
<br>
amount, then just use the base ID.  Definitions of those terms are  
<br>
subjective and intentionally fuzzy.  :-)
<br>
<p><span class="quotelev1">&gt; Why I ask.  I want to report a warning to the user when &quot;--enable- 
</span><br>
<span class="quotelev1">&gt; debug&quot;
</span><br>
<span class="quotelev1">&gt; is not configured. I also do not want the error to show up all the  
</span><br>
<span class="quotelev1">&gt; time,
</span><br>
<span class="quotelev1">&gt; only when for example --mca btl_base_debug is set to some value. I am
</span><br>
<span class="quotelev1">&gt; thinking I will just use opal_output_verbose but wanted to see if  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; were any guidelines about its use? Or if I should be thinking about  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; other option all together.
</span><br>
<p>You want a warning to show when:
<br>
<p>1. the udapl btl is used
<br>
2. --enable-debug was not configured
<br>
3. the user specifies btl_*_verbose (or btl_*_debug) &gt;= some_value
<br>
<p>Is that right?  If so, is the intent to warn that somen checks are  
<br>
not being performed that one would otherwise assume are being  
<br>
performed (because of #3)?
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
<li><strong>Next message:</strong> <a href="1808.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<li><strong>Previous message:</strong> <a href="1806.php">Tim Prins: "Re: [OMPI devel] Ob1 segfault"</a>
<li><strong>In reply to:</strong> <a href="1800.php">Don Kerr: "[OMPI devel] opal_output_verbose usage guidelines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
<li><strong>Reply:</strong> <a href="1810.php">Don Kerr: "Re: [OMPI devel] opal_output_verbose usage guidelines"</a>
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
