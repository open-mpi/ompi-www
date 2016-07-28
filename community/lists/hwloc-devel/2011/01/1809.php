<?
$subject_val = "Re: [hwloc-devel] Docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 17:04:47 2011" -->
<!-- isoreceived="20110111220447" -->
<!-- sent="Tue, 11 Jan 2011 17:04:41 -0500" -->
<!-- isosent="20110111220441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs updates" -->
<!-- id="716541D6-6A92-4D7F-8F27-D07281A7442A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D263AE3.8080002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs updates<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 17:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<li><strong>Previous message:</strong> <a href="1808.php">Brice Goglin: "[hwloc-devel] distances branch"</a>
<li><strong>In reply to:</strong> <a href="1803.php">Brice Goglin: "Re: [hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2011, at 4:57 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Is HWLOC_MEMBIND_MIXED defined somewhere?
</span><br>
<p>(sorry for the latency; I got distracted by other things)
<br>
<p>Sorry -- Samuel and I talked about this one in IM.  I assumed that Samuel would be adding it.  :-)  
<br>
<p>Even though we don't currently need it anywhere, we need to provide the *possibility* for this corner case.
<br>
<p><span class="quotelev1">&gt; I am not sure about &quot;on next touch ... move and rebind&quot; in the NEXTTOUCH
</span><br>
<span class="quotelev1">&gt; description.
</span><br>
<span class="quotelev2">&gt;&gt; From what I see, on solaris, it's only supported when we bind to the
</span><br>
<span class="quotelev1">&gt; entire machine. So there's no binding, only moving there.
</span><br>
<span class="quotelev1">&gt; Linux doesn't support NEXTTOUCH yet. I think most implementations I have
</span><br>
<span class="quotelev1">&gt; seen would change the binding immediately and only move the page
</span><br>
<span class="quotelev1">&gt; (according to the binding) on next-touch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, my feeling is that it's more &quot;bind but only lazily move pages
</span><br>
<span class="quotelev1">&gt; on next touch&quot; (compared to MIGRATE = &quot;bind and move everything now&quot;,
</span><br>
<span class="quotelev1">&gt; and BIND = &quot;bind but don't move already faulted pages&quot;).
</span><br>
<p>Hmm; I thought I said that, given the &quot;On next touch of each page...&quot; phrase:
<br>
<p>&nbsp;&nbsp;HWLOC_MEMBIND_NEXTTOUCH =	5	/**&lt; \brief On next touch of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* each page in the existing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* allocated memory, migrate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* (i.e., move and re-bind) it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* to the local NUMA node of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* the thread where the memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* reference occurred.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* \hideinitializer */
<br>
<p>So how's this:
<br>
<p>As each page bound with this policy is touched, it is moved from its current location to the local NUMA node of the thread where the memory reference occurred (if it needs to be moved at all).
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
<li><strong>Next message:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<li><strong>Previous message:</strong> <a href="1808.php">Brice Goglin: "[hwloc-devel] distances branch"</a>
<li><strong>In reply to:</strong> <a href="1803.php">Brice Goglin: "Re: [hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
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
