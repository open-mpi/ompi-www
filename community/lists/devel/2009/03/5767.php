<?
$subject_val = "Re: [OMPI devel] custom btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 11:52:33 2009" -->
<!-- isoreceived="20090331155233" -->
<!-- sent="Tue, 31 Mar 2009 11:52:26 -0400" -->
<!-- isosent="20090331155226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] custom btl" -->
<!-- id="F890B52B-3CAB-448A-8232-A4D1908F3CCC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D2337C.3050005_at_roma2.infn.it" -->
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
<strong>Subject:</strong> Re: [OMPI devel] custom btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 11:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
<li><strong>In reply to:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 11:15 AM, Roberto Ammendola wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, I am developing a btl module for a custom interconnect board  
</span><br>
<span class="quotelev1">&gt; (we
</span><br>
<span class="quotelev1">&gt; call it apelink, it's an academic project), and I am porting the  
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; from 1.2 (at which it used to work) to 1.3 branch. Two issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) the use of pls_rsh_agent is said to be deprecated. How do I spawn  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; jobs using rsh, then?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The &quot;pls&quot; framework was replaced by the &quot;plm&quot; framework.  So  
<br>
&quot;plm_rsh_agent&quot; should work.  It defaults to &quot;ssh : rsh&quot; meaning that  
<br>
it'll look for ssh in your path, if it finds it, it will use it; if  
<br>
not, it'll look for rsh in your path, if it finds it, it will use it.   
<br>
If not, it'll fail.
<br>
<p><span class="quotelev1">&gt; 2) although compilation is fine, i get a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gozer1:18640] mca: base: component_find: &quot;mca_btl_apelink&quot; does not
</span><br>
<span class="quotelev1">&gt; appear to be a valid btl MCA dynamic component (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; already with an ompi_info command. Probably something changed in the  
</span><br>
<span class="quotelev1">&gt; 1.3
</span><br>
<span class="quotelev1">&gt; branch regarding DSO, which I should implement in my btl. Any hint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>This is likely due to dlopen failing with your component -- the most  
<br>
common reason for this is a missing/unresolvable symbol.  There's  
<br>
unfortunately a bug in libtool that doesn't show you the exact symbol  
<br>
that is unresolvable -- it instead may give a misleading error such as  
<br>
&quot;file not found&quot;.  :-(
<br>
<p>The way I have gotten around it before is to edit libltdl and add a  
<br>
printf.  :-(  Try this patch -- it compiles for me but I haven't  
<br>
tested it:
<br>
<p>--- opal/libltdl/loaders/dlopen.c.~1~	2009-03-27 08:06:52.000000000  
<br>
-0400
<br>
+++ opal/libltdl/loaders/dlopen.c	2009-03-31 11:50:05.000000000 -0400
<br>
@@ -195,6 +195,9 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (!module)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+        const char *error;
<br>
+        LT__GETERROR(error);
<br>
+        fprintf(stderr, &quot;Can't dlopen %s: %s\n&quot;, filename, error);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DL__SETERROR (CANNOT_OPEN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
<li><strong>In reply to:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
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
