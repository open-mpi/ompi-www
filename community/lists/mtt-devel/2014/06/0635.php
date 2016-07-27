<?
$subject_val = "Re: [MTT devel] MTT: let's use git tags";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 13:33:52 2014" -->
<!-- isoreceived="20140624173352" -->
<!-- sent="Tue, 24 Jun 2014 19:33:49 +0200 (CEST)" -->
<!-- isosent="20140624173349" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT: let's use git tags" -->
<!-- id="1371397605.644005.1403631229462.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E00F05B6-7535-473B-BABC-D5F4E1A91091_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT: let's use git tags<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 13:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>As an alternative idea: What about using branches to mark &quot;stable&quot; and &quot;development&quot;?
<br>
Tags are for fixed versions and so users will not receive updates unless they update their update scripts manually?!
<br>
When &quot;development&quot; is stable just merge into &quot;stable&quot;.
<br>
<p>Regards
<br>
Christoph
<br>
<p>PS: For all interested in git usage I recommend reading &quot;man gitworkflows&quot; [1]
<br>
[1] <a href="https://www.kernel.org/pub/software/scm/git/docs/gitworkflows.html">https://www.kernel.org/pub/software/scm/git/docs/gitworkflows.html</a>
<br>
<p><p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Development list for the MPI Testing Tool&quot; &lt;mtt-devel_at_[hidden]&gt;
<br>
Sent: Tuesday, June 24, 2014 5:49:34 PM
<br>
Subject: [MTT devel] MTT: let's use git tags
<br>
<p>The topic came up today that MTT sometimes has bugs, particularly w.r.t. ongoing MTT development.
<br>
<p>It seems like we should use git tags to let the OMPI/testing community know which tag they should be using (vs. HEAD).
<br>
<p>To that end, I have created a &quot;v3.0.0&quot; tag that exists before the controversial set of commits I pushed the other day -- e12386e.  Assumedly, when we fix whatever problem Mellanox is setting with commits beyond e12386e, we can call that &quot;v3.0.1&quot;, or some such, and ask everyone to move up to it.
<br>
<p>So those who need stability should stick back at tags, and those who want to help with development can be at the HEAD.
<br>
<p>How does that sound?
<br>
<p>If that sounds ok, I'll ask the OMPI test community to git checkout v3.0.0.  And in the future, we'll ask the OMPI test community to update to the next relevant tag, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
mtt-devel mailing list
mtt-devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php">http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0634.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Jeff Squyres (jsquyres): "[MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
<li><strong>Reply:</strong> <a href="0636.php">Gilles Gouaillardet: "Re: [MTT devel] MTT: let's use git tags"</a>
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
