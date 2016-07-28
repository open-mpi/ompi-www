<?
$subject_val = "Re: [hwloc-devel] upcoming feature removal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 09:27:29 2014" -->
<!-- isoreceived="20141104142729" -->
<!-- sent="Tue, 4 Nov 2014 14:27:27 +0000" -->
<!-- isosent="20141104142727" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming feature removal" -->
<!-- id="3C01CD05-57C9-4EE8-838C-2D96B5976FCB_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5458DE55.7070408_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming feature removal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 09:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4287.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-265-g4b56c47)"</a>
<li><strong>Previous message:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2014, at 9:10 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - pu_children
</span><br>
<span class="quotelev2">&gt;&gt; - io_children
</span><br>
<span class="quotelev2">&gt;&gt; - misc_children
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK but what does &quot;pe&quot; stand for? did you mean &quot;pu&quot; to match our PU objects?
</span><br>
<p>I said &quot;pu_children&quot;.  Really.  I didn't edit the text above and make it look like I didn't typo in the original email.  Really.  Trust me.
<br>
<p>:-)
<br>
<p>(yes, I meant &quot;pu&quot;)
<br>
<p><span class="quotelev1">&gt; Unfortunately, children are more than a single field in struct hwloc_obj :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  unsigned arity;                       /**&lt; \brief Number of children */
</span><br>
<span class="quotelev1">&gt;  struct hwloc_obj **children;          /**&lt; \brief Children, \c children[0 .. arity -1] */
</span><br>
<span class="quotelev1">&gt;  struct hwloc_obj *first_child;        /**&lt; \brief First child */
</span><br>
<span class="quotelev1">&gt;  struct hwloc_obj *last_child;         /**&lt; \brief Last child */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll review the code to see if we can easily remove first/last_child or so.
</span><br>
<p>My 2 main points:
<br>
<p>1. if we're going to have multiple lists, then we might as well call them -- and all the related data accompanying them (e.g., first/last_child) what they are.  Don't just have &quot;children&quot; and &quot;misc&quot; -- have specific names denoting what they are.
<br>
<p>2. If we know we're going to have io devices, and we're going to separate them out from (pu_)children, then we might as well have a specific list for them.
<br>
<p><span class="quotelev1">&gt; So on current x86 machines, we would have this?
</span><br>
<span class="quotelev1">&gt; * one level with L1 object with cache attribute &quot;Data&quot;
</span><br>
<span class="quotelev1">&gt; * one level with L1 object with cache attribute &quot;Instruction&quot;
</span><br>
<span class="quotelev1">&gt; * one level with L2 object with cache attribute &quot;Unified&quot;
</span><br>
<span class="quotelev1">&gt; * one level with L3 object with cache attribute &quot;Unified&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortunately, instruction caches are disabled by default (unless somebody
</span><br>
<span class="quotelev1">&gt; wants to change that?) so most application will see a single L1 level.
</span><br>
<p>To be honest, I'm not sure what the Right answer is.  It would certainly be nice to be able to have a single switch/case to be able to identify all the different types of topology items, including the differences between the different caches.
<br>
<p>Perhaps it would be sufficient to be able to combine the type and the cache type together somehow -- e.g., the cache type could be bit-shifted up above the type bits, and then you could switch/case on the combined value...?  (waving hands furiously...)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4287.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-265-g4b56c47)"</a>
<li><strong>Previous message:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
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
