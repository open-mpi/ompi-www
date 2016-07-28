<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 14:07:59 2014" -->
<!-- isoreceived="20140113190759" -->
<!-- sent="Mon, 13 Jan 2014 11:07:56 -0800" -->
<!-- isosent="20140113190756" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="CAAvDA175HswOgowHVUj+KpW3kOGbxg3PtW7gnwKipH=nvWmAiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A2E0E37-B826-4DB8-BEBB-43CE1AC5970A_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-13 14:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A release note works for me.
<br>
<p>Probably worth a ticket for possible fix in 1.7.5 or 1.9.   You can assign
<br>
to me as the only one likely to care.
<br>
<p>-Paul [Sent from my phone]
<br>
On Jan 13, 2014 9:01 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like a release note to me.  Thanks for tracking this down!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2014, at 5:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been able to make some progress on understanding the cause of
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the generated libtool is is clearly broken, being for an
</span><br>
<span class="quotelev1">&gt; a.out system when this is an elf platform.
</span><br>
<span class="quotelev2">&gt; &gt; Comparison to the WORKING netbsd6-i386 platform revealed the difference
</span><br>
<span class="quotelev1">&gt; is the presence of g95 on the amd64 box.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Examining the configure output reveals that libtools' probes of f95
</span><br>
<span class="quotelev1">&gt; decide (incorrectly) that this is an a.out platform:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking whether the f95 linker (/usr/bin/ld) supports shared
</span><br>
<span class="quotelev1">&gt; libraries... Warning (116): Reading file &lt;stdin&gt; as free form
</span><br>
<span class="quotelev2">&gt; &gt; yes
</span><br>
<span class="quotelev2">&gt; &gt; checking dynamic linker characteristics... Warning (116): Reading file
</span><br>
<span class="quotelev1">&gt; &lt;stdin&gt; as free form
</span><br>
<span class="quotelev2">&gt; &gt; NetBSD (a.out) ld.so
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Even though probes of gcc and g++ find elf:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking whether the gcc -std=gnu99 linker (/usr/bin/ld) supports shared
</span><br>
<span class="quotelev1">&gt; libraries... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether -lc should be explicitly linked in... no
</span><br>
<span class="quotelev2">&gt; &gt; checking dynamic linker characteristics... NetBSD ld.elf_so
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; checking whether the g++ linker (/usr/bin/ld) supports shared
</span><br>
<span class="quotelev1">&gt; libraries... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking dynamic linker characteristics... NetBSD ld.elf_so
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have confirmed that installing g95 on the netbsd6-i386 platform
</span><br>
<span class="quotelev1">&gt; (indirect consequence of &quot;pkgin upgrade&quot;) causes the failure to manifest
</span><br>
<span class="quotelev1">&gt; there too.
</span><br>
<span class="quotelev2">&gt; &gt; Similarly, removing g95 on the netbsd6-amd64 system resolves the
</span><br>
<span class="quotelev1">&gt; original problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not personally interested in pursing the root cause of the
</span><br>
<span class="quotelev1">&gt; libtool+g95 problem.
</span><br>
<span class="quotelev2">&gt; &gt; However, I have attached configure's stdout and the config.log (for
</span><br>
<span class="quotelev1">&gt; 1.9a1r30255) for anybody who is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 19, 2013 at 7:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Attached is the output from &quot;make install&quot; of 1.7.4rc1 + Jeff's fix for
</span><br>
<span class="quotelev1">&gt; the symbol conflict on &quot;if_mtu&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There appear to be at least 2 issues.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) There are lots of (not fatal) messages about ldconfig not existing,
</span><br>
<span class="quotelev1">&gt; but according to he NetBSD lists that utility went away with the conversion
</span><br>
<span class="quotelev1">&gt; from a.out to ELF.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) Many warnings of the form
</span><br>
<span class="quotelev2">&gt; &gt;    *** Warning: linker path does not have real file for library
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) The final (fatal) error about .libs/mca_btl_sm.soT not existing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am going to see if I can get a better result using the system libtool
</span><br>
<span class="quotelev1">&gt; (which is 2.2.6b, thus OLDER than OMPI's 2.4.2) and will report back with
</span><br>
<span class="quotelev1">&gt; my results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;&lt;configure.stdout.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
