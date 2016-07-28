<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 17:56:43 2014" -->
<!-- isoreceived="20140111225643" -->
<!-- sent="Sat, 11 Jan 2014 14:56:29 -0800" -->
<!-- isosent="20140111225629" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="CAAvDA17g7eN-8TckhvdEub6MYubuzSa_uBO7d_iHTOZ3jae5_g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17JC70h4Buz_WgyWdH5Ojw3eS-SkjffSqYJc-i9E-1ZMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-11 17:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been able to make some progress on understanding the cause of this
<br>
issue.
<br>
<p>Looking at the generated libtool is is clearly broken, being for an a.out
<br>
system when this is an elf platform.
<br>
Comparison to the WORKING netbsd6-i386 platform revealed the difference is
<br>
the presence of g95 on the amd64 box.
<br>
<p>Examining the configure output reveals that libtools' probes of f95 decide
<br>
(incorrectly) that this is an a.out platform:
<br>
<p>checking whether the f95 linker (/usr/bin/ld) supports shared libraries...
<br>
Warning (116): Reading file &lt;stdin&gt; as free form
<br>
yes
<br>
checking dynamic linker characteristics... Warning (116): Reading file
<br>
&lt;stdin&gt; as free form
<br>
NetBSD (a.out) ld.so
<br>
<p>Even though probes of gcc and g++ find elf:
<br>
<p>checking whether the gcc -std=gnu99 linker (/usr/bin/ld) supports shared
<br>
libraries... yes
<br>
checking whether -lc should be explicitly linked in... no
<br>
checking dynamic linker characteristics... NetBSD ld.elf_so
<br>
<p>checking whether the g++ linker (/usr/bin/ld) supports shared libraries...
<br>
yes
<br>
checking dynamic linker characteristics... NetBSD ld.elf_so
<br>
<p><p>I have confirmed that installing g95 on the netbsd6-i386 platform (indirect
<br>
consequence of &quot;pkgin upgrade&quot;) causes the failure to manifest there too.
<br>
Similarly, removing g95 on the netbsd6-amd64 system resolves the original
<br>
problem.
<br>
<p>I am not personally interested in pursing the root cause of the libtool+g95
<br>
problem.
<br>
However, I have attached configure's stdout and the config.log (for
<br>
1.9a1r30255) for anybody who is.
<br>
<p><p>-Paul
<br>
<p><p>On Thu, Dec 19, 2013 at 7:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Attached is the output from &quot;make install&quot; of 1.7.4rc1 + Jeff's fix for
</span><br>
<span class="quotelev1">&gt; the symbol conflict on &quot;if_mtu&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There appear to be at least 2 issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) There are lots of (not fatal) messages about ldconfig not existing, but
</span><br>
<span class="quotelev1">&gt; according to he NetBSD lists that utility went away with the conversion
</span><br>
<span class="quotelev1">&gt; from a.out to ELF.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Many warnings of the form
</span><br>
<span class="quotelev1">&gt;    *** Warning: linker path does not have real file for library
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) The final (fatal) error about .libs/mca_btl_sm.soT not existing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to see if I can get a better result using the system libtool
</span><br>
<span class="quotelev1">&gt; (which is 2.2.6b, thus OLDER than OMPI's 2.4.2) and will report back with
</span><br>
<span class="quotelev1">&gt; my results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13748/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13748/configure.stdout.bz2">configure.stdout.bz2</a>
</ul>
<!-- attachment="configure.stdout.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Previous message:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
