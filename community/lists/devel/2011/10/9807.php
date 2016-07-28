<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 13:44:37 2011" -->
<!-- isoreceived="20111010174437" -->
<!-- sent="Mon, 10 Oct 2011 13:44:32 -0400" -->
<!-- isosent="20111010174432" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="8AB1EA78-3972-4793-AFF4-9458131B2A9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9CED47BA-0202-462E-A668-E63490E785F7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Launcher in trunk is broken?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 13:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2011, at 1:29 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; From a network point of view, there is a slight issue with the commit 25245. A direct call to exit will close all pending sockets, with a linger of 60 seconds (quite bad if you use static ports as an example). There are proper protocols to shutdown sockets in a reliable way, maybe it is time to implement one of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I miss this message somewhere? I didn't receive it.
</span><br>
<p>Sidenote on this thread -- no, you didn't miss an email.  George started his paragraph with &quot;From &quot;, which internet mail systems reserve as a special token indicating the beginning of the headers of a new mail message.  Hence, many (most? all?) outgoing mail servers, when they detect a line beginning with &quot;From &quot; in the body of a mail, will automatically insert a &quot;&gt; &quot; before the &quot;From &quot;, resulting in &quot;&gt; From &quot;.  This way, that line/paragraph won't be confused with the beginning of a new message.
<br>
<p>Unfortunately, that's just like quoting a paragraph; most mail clients (including OS X Mail) can't tell the difference.  End result: it *looks* like the &quot;From a network...&quot; paragraph is quoted from another message, but it's actually not.  It's just a quirk in how internet mail works.
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
<li><strong>Next message:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
