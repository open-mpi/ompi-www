<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 14 03:13:29 2014" -->
<!-- isoreceived="20140114081329" -->
<!-- sent="Tue, 14 Jan 2014 00:13:27 -0800" -->
<!-- isosent="20140114081327" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="CAAvDA143VPauk=bZ4r0_Xag5Z4HDgvtRBpAu=H1Q7z5dmkR+zg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14vGDmC8ugNbx9=sfMF6X=CxHniGKGu-DdE09+mmiR3aw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-14 03:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: source inspection of libtool.m4 reveals that the same problem
<br>
probably exists with g95 on OpenBSD (same flawed probe logic is used),
<br>
though I have no g95 on my OpenBSD systems to confirm or refute this.
<br>
<p>G95/f95 should be fine on other systems because {Net,Open}BSD are the only
<br>
platforms on which libtool must resort to silly tricks to determine if the
<br>
compiler's object format is a.out or elf.
<br>
<p>-Paul
<br>
<p><p>On Mon, Jan 13, 2014 at 11:44 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The new release note reads:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Building Open MPI on a NetBSD-6 AMD64 system will run into obscure
</span><br>
<span class="quotelev1">&gt;   compile-time failures if f95/g95 is found in the path.  You can work
</span><br>
<span class="quotelev1">&gt;   around such problems by removing g95 from your path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem surfaces on i386 too, and use of gfortran seems the best fix.
</span><br>
<span class="quotelev1">&gt; My recommended rewrite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - On NetBSD-6 (at least AMD64 and i386) libtool misidentifies properties of
</span><br>
<span class="quotelev1">&gt;   f95/g95, leading to obscure compile-time failures if used to build Open
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt;   You can work around this issue by either installing gfortran, removing
</span><br>
<span class="quotelev1">&gt; f95
</span><br>
<span class="quotelev1">&gt;   and g95 from your path, or by configuring Open MPI to disable the fortran
</span><br>
<span class="quotelev1">&gt;   bindings.
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
<span class="quotelev1">&gt; On Mon, Jan 13, 2014 at 9:01 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like a release note to me.  Thanks for tracking this down!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 11, 2014, at 5:56 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have been able to make some progress on understanding the cause of
</span><br>
<span class="quotelev2">&gt;&gt; this issue.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Looking at the generated libtool is is clearly broken, being for an
</span><br>
<span class="quotelev2">&gt;&gt; a.out system when this is an elf platform.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Comparison to the WORKING netbsd6-i386 platform revealed the difference
</span><br>
<span class="quotelev2">&gt;&gt; is the presence of g95 on the amd64 box.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Examining the configure output reveals that libtools' probes of f95
</span><br>
<span class="quotelev2">&gt;&gt; decide (incorrectly) that this is an a.out platform:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking whether the f95 linker (/usr/bin/ld) supports shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries... Warning (116): Reading file &lt;stdin&gt; as free form
</span><br>
<span class="quotelev3">&gt;&gt; &gt; yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking dynamic linker characteristics... Warning (116): Reading file
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdin&gt; as free form
</span><br>
<span class="quotelev3">&gt;&gt; &gt; NetBSD (a.out) ld.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Even though probes of gcc and g++ find elf:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking whether the gcc -std=gnu99 linker (/usr/bin/ld) supports
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking whether -lc should be explicitly linked in... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking dynamic linker characteristics... NetBSD ld.elf_so
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking whether the g++ linker (/usr/bin/ld) supports shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking dynamic linker characteristics... NetBSD ld.elf_so
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have confirmed that installing g95 on the netbsd6-i386 platform
</span><br>
<span class="quotelev2">&gt;&gt; (indirect consequence of &quot;pkgin upgrade&quot;) causes the failure to manifest
</span><br>
<span class="quotelev2">&gt;&gt; there too.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Similarly, removing g95 on the netbsd6-amd64 system resolves the
</span><br>
<span class="quotelev2">&gt;&gt; original problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am not personally interested in pursing the root cause of the
</span><br>
<span class="quotelev2">&gt;&gt; libtool+g95 problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, I have attached configure's stdout and the config.log (for
</span><br>
<span class="quotelev2">&gt;&gt; 1.9a1r30255) for anybody who is.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Dec 19, 2013 at 7:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Attached is the output from &quot;make install&quot; of 1.7.4rc1 + Jeff's fix for
</span><br>
<span class="quotelev2">&gt;&gt; the symbol conflict on &quot;if_mtu&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There appear to be at least 2 issues.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) There are lots of (not fatal) messages about ldconfig not existing,
</span><br>
<span class="quotelev2">&gt;&gt; but according to he NetBSD lists that utility went away with the conversion
</span><br>
<span class="quotelev2">&gt;&gt; from a.out to ELF.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) Many warnings of the form
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    *** Warning: linker path does not have real file for library
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3) The final (fatal) error about .libs/mca_btl_sm.soT not existing.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am going to see if I can get a better result using the system libtool
</span><br>
<span class="quotelev2">&gt;&gt; (which is 2.2.6b, thus OLDER than OMPI's 2.4.2) and will report back with
</span><br>
<span class="quotelev2">&gt;&gt; my results.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.bz2&gt;&lt;configure.stdout.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13772.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
