<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:03:11 2012" -->
<!-- isoreceived="20120210200311" -->
<!-- sent="Fri, 10 Feb 2012 15:03:06 -0500" -->
<!-- isosent="20120210200306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="3118A607-E99F-49D0-9073-DC825B2B0390_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F35657A.7020201_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2012, at 1:44 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Since the situation described is one where the user didn't know they could/should disable xen, it is reasonable to think they ALSO don't know they need to exclude virbr0.  
</span><br>
<p>That's what I'm thinking.
<br>
<p><span class="quotelev1">&gt; So, I read the question as meaning the following:
</span><br>
<span class="quotelev1">&gt;     What happens when a user who doesn't know anything about virbr0 does
</span><br>
<span class="quotelev1">&gt;          mpirun --mca btl_tcp_if_exclude lo,eth8
</span><br>
<p>I'm not sure I understand your question -- the above will exclude loopback and eth8.  
<br>
<p>(where did eth8 come from?)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10386.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
