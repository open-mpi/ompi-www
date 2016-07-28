<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:14:32 2012" -->
<!-- isoreceived="20120210201432" -->
<!-- sent="Fri, 10 Feb 2012 12:14:20 -0800" -->
<!-- isosent="20120210201420" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="4F357A9C.9080705_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3118A607-E99F-49D0-9073-DC825B2B0390_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10385.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10385.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2012 12:03 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2012, at 1:44 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the situation described is one where the user didn't know they could/should disable xen, it is reasonable to think they ALSO don't know they need to exclude virbr0.
</span><br>
<span class="quotelev1">&gt; That's what I'm thinking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I read the question as meaning the following:
</span><br>
<span class="quotelev2">&gt;&gt;      What happens when a user who doesn't know anything about virbr0 does
</span><br>
<span class="quotelev2">&gt;&gt;           mpirun --mca btl_tcp_if_exclude lo,eth8
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand your question -- the above will exclude loopback and eth8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (where did eth8 come from?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry, if I wasn't clear.
<br>
I'll try again:
<br>
<p>+ User knows nothing about xen, and thus nothing about virbr0
<br>
+ User has a local-only interface (eth8 in my made up example)
<br>
+ User reads FAQ entry &quot;220. How do I tell Open MPI which TCP networks 
<br>
to use?&quot;
<br>
+ User follows instructions given in said FAQ, yielding my example 
<br>
command line.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Previous message:</strong> <a href="10385.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10385.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
