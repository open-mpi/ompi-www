<?
$subject_val = "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:33:23 2012" -->
<!-- isoreceived="20120210203323" -->
<!-- sent="Fri, 10 Feb 2012 12:32:40 -0800" -->
<!-- isosent="20120210203240" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add &amp;quot;virbr0&amp;quot; to [btl|oob]_tcp_if_exclude?" -->
<!-- id="4F357EE8.3010201_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="314C938C-686E-48A7-ABD9-1101444164FD_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-10 15:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10389.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2012 12:21 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2012, at 3:14 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + User knows nothing about xen, and thus nothing about virbr0
</span><br>
<span class="quotelev2">&gt;&gt; + User has a local-only interface (eth8 in my made up example)
</span><br>
<span class="quotelev2">&gt;&gt; + User reads FAQ entry &quot;220. How do I tell Open MPI which TCP networks to use?&quot;
</span><br>
<span class="quotelev2">&gt;&gt; + User follows instructions given in said FAQ, yielding my example command line.
</span><br>
<span class="quotelev1">&gt; Do you mean that eth8 is the only non-loopback interface on their laptop, and it's disconnected?  (e.g., sitting on a train with no wifi and no wired ethernet)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then OMPI would have disqualified that interface, anyway (because it wasn't up).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I'm missing the zen of your question... :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The point of the question isn't related to WHY eth8 is useless - just 
<br>
assume it is.
<br>
Assume it is UP, but useless for whatever reasons motivated writing FAQ 
<br>
#220.
<br>
It could be Terry's example of a port connected to the service processor.
<br>
<p>The concern is what happens in this situation when the user, following 
<br>
the advice in the FAQ, passes an explicit setting for 
<br>
btl_tcp_if_exclude, which DOES NOT include virbr0?
<br>
They don't know it was there before, or that it needs to be there (the 
<br>
FAQ states that lo MUST be included).
<br>
So, by following the FAQ they don't resolve their problem.
<br>
OMPI ceases any attempts use of eth8 (or whatever), but loss of the 
<br>
implicit virbr0 from the exclude list results in their system attempting 
<br>
to use virbr0 (and thus continue to fail).  Right?
<br>
<p>Maybe the FAQ just needs an update to address my concern.
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
<li><strong>Next message:</strong> <a href="10389.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>In reply to:</strong> <a href="10387.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
<li><strong>Reply:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add &quot;virbr0&quot; to [btl|oob]_tcp_if_exclude?"</a>
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
