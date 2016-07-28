<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 22:00:36 2014" -->
<!-- isoreceived="20140110030036" -->
<!-- sent="Thu, 9 Jan 2014 19:00:31 -0800" -->
<!-- isosent="20140110030031" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA167BnA22YTcYprOggLQPAcw7Qt+6_-EjD3XV6XPcfK0uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ECC83A54-A36B-4BE4-BB2E-EB1745DF67B8_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-09 22:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry, but the new opal/util/pth.c in the trunk tarball (1.9a1r30215) fails
<br>
to build on NetBSD:
<br>
<p>&nbsp;&nbsp;CC       path.lo
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-i386/openmpi-1.9a1r30215/opal/util/path.c:
<br>
In function 'opal_path_nfs':
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-i386/openmpi-1.9a1r30215/opal/util/path.c:448:19:
<br>
error: storage size of 'fsbuf' isn't known
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-i386/openmpi-1.9a1r30215/opal/util/path.c:478:9:
<br>
warning: implicit declaration of function 'statfs'
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-i386/openmpi-1.9a1r30215/opal/util/path.c:
<br>
In function 'opal_path_df':
<br>
/home/phargrov/OMPI/openmpi-trunk-netbsd6-i386/openmpi-1.9a1r30215/opal/util/path.c:556:19:
<br>
error: storage size of 'buf' isn't known
<br>
*** Error code 1
<br>
<p>It seems &quot;struct statfs&quot; isn't known and function &quot;statfs&quot; isn't declared.
<br>
I was hoping it was a missing include, but it's not that simple.
<br>
<p>This system has a manpage for statvfs() but not one for statfs().
<br>
However, the generated opal_config.h shows both were detected.
<br>
<p>The full config.log is attached, but the following looks to be important:
<br>
configure:60191: checking for statfs
<br>
configure:60191: gcc -std=gnu99 -o conftest -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing   conftest.c  -lutil -lm &gt;&amp;5
<br>
/var/tmp//ccgSRuv9.o: In function `main':
<br>
conftest.c:(.text+0x4): warning: warning: reference to obsolete statfs();
<br>
use statvfs()
<br>
configure:60191: $? = 0
<br>
configure:60191: result: yes
<br>
<p>It looks like the ROMIO configure script already has logic for choosing
<br>
between statvfs() and statfs().  Perhaps there is something in there you
<br>
can crib from.
<br>
checking sys/statvfs.h usability... yes
<br>
checking sys/statvfs.h presence... yes
<br>
checking for sys/statvfs.h... yes
<br>
checking whether struct statfs properly defined... no
<br>
checking for f_fstypename member of statfs structure... no
<br>
checking for sys/stat.h... (cached) yes
<br>
checking for sys/types.h... (cached) yes
<br>
checking for unistd.h... (cached) yes
<br>
checking for stat... yes
<br>
checking for st_fstype member of stat structure... no
<br>
checking for sys/types.h... (cached) yes
<br>
checking for sys/statvfs.h... (cached) yes
<br>
checking for sys/vfs.h... (cached) no
<br>
checking for statvfs... yes
<br>
checking for f_basetype member of statvfs structure... no
<br>
<p>-Paul
<br>
<p><p><p>On Thu, Jan 9, 2014 at 1:30 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Fixed on trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/30198">https://svn.open-mpi.org/trac/ompi/changeset/30198</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't test on all the kinds of systems Paul/Marco have, though -- we'll
</span><br>
<span class="quotelev1">&gt; have to see what happens when he tries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I fully concur - just limited by my available time to fix it. Jeff has
</span><br>
<span class="quotelev1">&gt; volunteered to step in, though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 8, 2014, at 11:44 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; list of all the systems for the latter actually is intended to amount
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; please note that there are other similar cases in the same file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in &quot;bool opal_path_nfs&quot; function at row 434 and 462
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the one at 489 is a multiple if with no default case,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so the code will fail to perform for any architecture
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no reported there, like CYGWIN, and it is very hard to notice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In general this type of &quot;ifdefined&quot; around platform
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are very bad for portability or platform evolution.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adding a new platform will be a hell of work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The Autoconf approach to portability &quot;should be&quot; to test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for features, not for versions or platform.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Marco
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13663/openmpi-trunk-netbsd6-i386-config.log.bz2">openmpi-trunk-netbsd6-i386-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-trunk-netbsd6-i386-config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>Previous message:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13665.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
