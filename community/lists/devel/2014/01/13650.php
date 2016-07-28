<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 19:22:22 2014" -->
<!-- isoreceived="20140110002222" -->
<!-- sent="Thu, 9 Jan 2014 16:22:20 -0800" -->
<!-- isosent="20140110002220" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA15Qg0nArku_mHTTLPFJx9FJOK5XC6TcSvVtUTfyPTOmOg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1EDB5BC-A83B-4EE7-9708-A6C62C57DD36_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 19:22:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 9, 2014 at 4:15 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; For example, if you build and run the test like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt; ./opal_path_nfs . Makefile ~
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It'll report if ., Makefile, and ~ are on network filesystems (i.e., the
</span><br>
<span class="quotelev1">&gt; result of sending each of &quot;.&quot;, &quot;Makefile&quot;, and &quot;your_home_dir&quot; to
</span><br>
<span class="quotelev1">&gt; opal_path_nfs()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Cool.
<br>
<p>I already have NFS mounts on my Solaris systems and was able to mount
<br>
something on my OpenBSD and NetBSD systems, too.  So, I'll try to remember
<br>
to use the command-line test on those systems.  My FreeBSD systems are VMs
<br>
without any (practical) way to NFS mount anything, but I can at least check
<br>
for false positives.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13651.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13649.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13663.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
