<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 13:38:50 2012" -->
<!-- isoreceived="20120210183850" -->
<!-- sent="Fri, 10 Feb 2012 13:38:45 -0500" -->
<!-- isosent="20120210183845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="75EB66BB-7A75-4965-AA7E-2B65C7D445CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F355B35.4010700_at_oracle.com" -->
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
<strong>Date:</strong> 2012-02-10 13:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2012, at 1:00 PM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Should we add &quot;virbr0&quot; to the default value for [btl|oob]_tcp_if_exclude?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; What happens to that value if you then set btl_tcp_if_exclude to some value on the mpirun command line?  
</span><br>
<p>It works just fine.  I.e., if you
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_exclude lo,virbr0 ...
<br>
<p>That works like a champ.
<br>
<p>But per Ralph's question, I don't know how generic that name is.  It *seems* to be specific to a virtualization interface (I assume &quot;virbr&quot; = &quot;virtual bridge&quot;), but I can't say that for sure.
<br>
<p><span class="quotelev1">&gt; So this brings me to something that has annoyed me for a bit.  It seems to me that maybe it would be nice to have a conf file that you can dump interface names to exclude but would not be interpreted as a btl_tcp_if_exclude options.  For example there were some interfaces on certain Sun machine (a long time ago) that went to the diagnostic processor and caused a similar issue as the virbr0 issue.  So we started delivering a conf file that set btl_tcp_if_exclude but then this precluded anyone from being able to set btl_tcp_if_include.  If we had a file one could specify the set of interfaces to use or exclude but allow the user to operate on the result of that set it seems that would be nice.
</span><br>
<p>I'm not sure what you're saying.  CLI always overrides config files...?
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
<li><strong>Next message:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10382.php">TERRY DONTJE: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10384.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
