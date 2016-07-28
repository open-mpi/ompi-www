<?
$subject_val = "Re: [OMPI devel] Paul H build on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 15:27:09 2014" -->
<!-- isoreceived="20140109202709" -->
<!-- sent="Thu, 9 Jan 2014 12:27:01 -0800" -->
<!-- isosent="20140109202701" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paul H build on Solaris" -->
<!-- id="CAAvDA14_ZO495T1igX9iC-pqi8A71AyCR0LqprGbp=HYR-0DZg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23DC78A6-9400-4344-8FD2-4197ECF3EF71_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Paul H build on Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 15:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Reply:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I actually noted this in the unofficial tarball you rolled for me in
<br>
December:
<br>
On Thu, Dec 19, 2013 at 6:35 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<p><span class="quotelev1">&gt; I'm not sure why one is trying to build the usnic btl on Solaris at all.
</span><br>
<span class="quotelev1">&gt; Perhaps just because the OFED stack is present?
</span><br>
<span class="quotelev1">&gt;
</span><br>
[...]
<br>
<p>I assumed your lack of response meant Cicso had some plans for Solaris
<br>
support that you could &quot;neither confirm nor deny&quot; ;)
<br>
<p>Attached are the configure outputs and config.log from both the trunk and
<br>
1.7-latest on a 64-bit Solaris-11 system.
<br>
I can provide 32-bit if required, but the usnic BTL is built independent of
<br>
wordsize:
<br>
$ bzgrep 'usnic can compile' openmpi-*.bz2
<br>
openmpi-1.7-latest-solaris11-x64-ib-gcc452-configure.txt.bz2:checking if
<br>
MCA component btl:usnic can compile... yes
<br>
openmpi-trunk-solaris11-x64-ib-gcc452-configure.txt.bz2:checking if MCA
<br>
component btl:usnic can compile... yes
<br>
<p>-Paul
<br>
<p>On Thu, Jan 9, 2014 at 8:57 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you send the configure stdout and config.log for your 32 bit build
</span><br>
<span class="quotelev1">&gt; on Solaris?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a test in the usnic BTL that is supposed to ensure that it only
</span><br>
<span class="quotelev1">&gt; builds on Linux, but given some of the output you've sent, it looks like it
</span><br>
<span class="quotelev1">&gt; is also building on Solaris... (which means our configure test is not
</span><br>
<span class="quotelev1">&gt; filtering out Solaris).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13637/openmpi-1.7-latest-solaris11-x64-ib-gcc452-config.log.bz2">openmpi-1.7-latest-solaris11-x64-ib-gcc452-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-1.7-latest-solaris11-x64-ib-gcc452-config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13637/openmpi-1.7-latest-solaris11-x64-ib-gcc452-configure.txt.bz2">openmpi-1.7-latest-solaris11-x64-ib-gcc452-configure.txt.bz2</a>
</ul>
<!-- attachment="openmpi-1.7-latest-solaris11-x64-ib-gcc452-configure.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13637/openmpi-trunk-solaris11-x64-ib-gcc452-config.log.bz2">openmpi-trunk-solaris11-x64-ib-gcc452-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-trunk-solaris11-x64-ib-gcc452-config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13637/openmpi-trunk-solaris11-x64-ib-gcc452-configure.txt.bz2">openmpi-trunk-solaris11-x64-ib-gcc452-configure.txt.bz2</a>
</ul>
<!-- attachment="openmpi-trunk-solaris11-x64-ib-gcc452-configure.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>In reply to:</strong> <a href="13631.php">Jeff Squyres (jsquyres): "[OMPI devel] Paul H build on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
<li><strong>Reply:</strong> <a href="13638.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul H build on Solaris"</a>
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
