<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 16 19:03:59 2015" -->
<!-- isoreceived="20150516230359" -->
<!-- sent="Sun, 17 May 2015 09:03:52 +1000" -->
<!-- isosent="20150516230352" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="2071701.NR6mO60Bbv_at_quad" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA178Q5OSbAM=HV5wdtZKx2RXeEwNQq4yybF+JEun=+WEaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-16 19:03:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17414.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17412.php">Paul Hargrove: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17412.php">Paul Hargrove: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 16 May 2015 02:59:35 PM Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I didn't find OpenBSD or Solaris docs (&quot;grep -rl TCP_KEEP /usr/share/man&quot;
</span><br>
<span class="quotelev1">&gt; didn't find any matches).
</span><br>
<p>This seems to document it for an unspecified version of Solaris:
<br>
<p><a href="http://docs.oracle.com/cd/E19120-01/open.solaris/819-2724/fsvdg/index.html">http://docs.oracle.com/cd/E19120-01/open.solaris/819-2724/fsvdg/index.html</a>
<br>
<p>For OpenBSD this bugzilla entry for Firefox from early last year claims they 
<br>
are only available via sysctl options there, not via setsockopt():
<br>
<p><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=970550#c8">https://bugzilla.mozilla.org/show_bug.cgi?id=970550#c8</a>
<br>
<p>There is some (meagre) documentation of those options here:
<br>
<p><a href="http://nixdoc.net/man-pages/OpenBSD/sysctl.3.html">http://nixdoc.net/man-pages/OpenBSD/sysctl.3.html</a>
<br>
<p>The last (documented) change on the OpenBSD site was 3.5, saying:
<br>
<p><a href="http://www.openbsd.org/plus35.html">http://www.openbsd.org/plus35.html</a>
<br>
<p># Reset the TCP keepalive timer to tcp.keepidle (normally four hours)
<br>
# after the three-way handshake completes. (syncache sets it to
<br>
# tcp.keepinittime, normally 150 seconds).
<br>
<p>Hope that helps!
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17414.php">Jeff Squyres (jsquyres): "[OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17412.php">Paul Hargrove: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17412.php">Paul Hargrove: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
