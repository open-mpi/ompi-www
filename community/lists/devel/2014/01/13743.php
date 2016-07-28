<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 02:25:23 2014" -->
<!-- isoreceived="20140111072523" -->
<!-- sent="Fri, 10 Jan 2014 23:25:08 -0800" -->
<!-- isosent="20140111072508" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA15gMUJyf3V5GK4ZGT-GZwooD2BBQ0dxQefBxh5rRBvOMQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17Cfx71UBMq3J9YniJhBsi27n8Gq=U2iwjXX0RRqUfv8A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-11 02:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13744.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem configury issues"</a>
<li><strong>Previous message:</strong> <a href="13742.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pleased to add that the cmr'ed changes test out OK in the v1.7 branch
<br>
as well.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 10, 2014 at 7:28 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and I iterated a bit off-list and opal/util/path.c in tonight's trunk
</span><br>
<span class="quotelev1">&gt; tarball (1.9a1r30255) works for all of my systems.
</span><br>
<span class="quotelev1">&gt; With the help of Jeff's recently-enhanced test/util/opal_path_nfs.c I was
</span><br>
<span class="quotelev1">&gt; able to verify that NFS mounts are now correctly identified on the *BSD
</span><br>
<span class="quotelev1">&gt; systems (and still correct on Linux, Mac OSX, and Solaris).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marco,
</span><br>
<span class="quotelev1">&gt;   Can you please verify on Cygwin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 6:34 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2014, at 9:18 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It seems to indicate that even if one does find a statfs() function,
</span><br>
<span class="quotelev2">&gt;&gt; there are multiple os-dependent versions and it should therefore be
</span><br>
<span class="quotelev2">&gt;&gt; avoided.  Since statvfs() is defined by POSIX, it should be preferred.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sounds good; I'll do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gah.  The situation gets murkier.  I see in OS X Mountain Lion and
</span><br>
<span class="quotelev2">&gt;&gt; Mavericks man pages for statvfs() where they describe the fields in struct
</span><br>
<span class="quotelev2">&gt;&gt; statvfs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            f_fsid     Not meaningful in this implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the field I need out of struct statvfs to know what the file
</span><br>
<span class="quotelev2">&gt;&gt; system magic number is.  Arrgh!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll keep looking into what would be a good solution here...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13744.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem configury issues"</a>
<li><strong>Previous message:</strong> <a href="13742.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
