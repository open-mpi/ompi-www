<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:06:02 2009" -->
<!-- isoreceived="20091021120602" -->
<!-- sent="Wed, 21 Oct 2009 08:05:58 -0400" -->
<!-- isosent="20091021120558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="B3B15252-8241-42AA-8703-78D070535383_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADE9C6E.2060903_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 08:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 1:30 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I named it ibverbs.h because it only works with infiniband/verbs.h
</span><br>
<span class="quotelev1">&gt; anyway. People will need the later to use it. That's why I like
</span><br>
<span class="quotelev1">&gt; ibverbs.h (or infiniband-verbs.h but it's very long). Apart from  
</span><br>
<span class="quotelev1">&gt; that, I
</span><br>
<span class="quotelev1">&gt; don't really care. At least the Infiniband name still exists, while
</span><br>
<span class="quotelev1">&gt; OpenIB/OFED/... is renamed almost every year :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hah!  It's actually InfiniBand(tm).  :-)
<br>
<p>FWIW: the name has been OpenFabrics / OFED for a few years now.  Not  
<br>
that I wholly disagree -- we're still stuck with the &quot;openib&quot; module  
<br>
name in Open MPI because we named it several years ago when it was  
<br>
called OpenIB -- but I think the &quot;OpenFabrics&quot; name is pretty stable.   
<br>
OpenIB was an informal name that existed before there was an official  
<br>
organization behind it.  OpenFabrics is the legal entity that was  
<br>
created to support all things related to this technology, so I don't  
<br>
think that name will be changing any time soon.  Indeed, there's a  
<br>
*lot* of money put into the marketing and branding with the name  
<br>
&quot;OpenFabrics&quot;.
<br>
<p>There hasn't [yet?] been discussion of renaming &lt;infiniband/verbs.h&gt;  
<br>
(or some of the other IB-centric struct/symbol names), but the whole  
<br>
package is very definitely marketed as &quot;OpenFabrics verbs&quot;, not  
<br>
&quot;InfiniBand verbs&quot; (although the IB vendors certainly don't correct  
<br>
this misconception ;-) ).
<br>
<p>So I still would like to rename this file before release.
<br>
<p><span class="quotelev1">&gt; By the way, this file actually only works for Linux so far. Unless we
</span><br>
<span class="quotelev1">&gt; are sure we could make it work for non-Linux OS one day (might need  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; #ifdef LINUX to work in public headers), we could rename it to
</span><br>
<span class="quotelev1">&gt; hwloc/linux-...verbs.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Sun is porting the OpenFabrics verbs to Solaris (to replace their DAPL  
<br>
stack).  There is also talk of porting the verbs API to MS Windows,  
<br>
although I'm not tracking that effort at all.  If all this comes to  
<br>
fruition, it'll be 3 different platforms that expose the same verbs API.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0190.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0192.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
