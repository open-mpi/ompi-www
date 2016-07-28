<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 17:57:00 2015" -->
<!-- isoreceived="20150202225700" -->
<!-- sent="Mon, 2 Feb 2015 14:56:57 -0800" -->
<!-- isosent="20150202225657" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="CAAvDA14PkVpSz+Uaw7kmxr97YVe5TVxQU0nwk=71PfvOO_321g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDD1B6A2-3F95-4C45-89B3-4A4DCF24FAD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 17:56:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16888.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16886.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Looks like you didn't hit all the un-guarded references to lt_dladvise.
<br>
Specifically you missed a struct decl:
<br>
<p>/[....]/openmpi-libltdl-linux-x86_64-gcc/openmpi-gitclone/opal/util/lt_interface.c:25:8:
<br>
error: unknown type name 'lt_dladvise'
<br>
<p>-Paul
<br>
<p><p>On Sat, Jan 31, 2015 at 4:44 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Looks like the lt_interface.c code didn't properly use the lt_dladvise
</span><br>
<span class="quotelev1">&gt; #if. How did that ever work, I wonder?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixed now.  On to your second finding...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 30, 2015, at 7:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not meeting with the greatest of success.
</span><br>
<span class="quotelev2">&gt; &gt; This is a report of just the first (of at least 2) failure modes I am
</span><br>
<span class="quotelev1">&gt; seeing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On a Scientific Linux 5.5. (RHEL-5.5 clone like CentOS) I get a build
</span><br>
<span class="quotelev1">&gt; failure described below.
</span><br>
<span class="quotelev2">&gt; &gt; At least Solaris-11 and a few other linux systems (including RHAS-4.4)
</span><br>
<span class="quotelev1">&gt; are also failing in what appears to be the same manner.
</span><br>
<span class="quotelev2">&gt; &gt; I am sure there are more, but I am aborting this round of testing at
</span><br>
<span class="quotelev1">&gt; this point.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I again await a new tarball with a less broken-by-default behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The configure output includes
</span><br>
<span class="quotelev2">&gt; &gt; checking ltdl.h usability... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking ltdl.h presence... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for ltdl.h... yes
</span><br>
<span class="quotelev2">&gt; &gt; looking for library without search path
</span><br>
<span class="quotelev2">&gt; &gt; checking for lt_dlopen in -lltdl... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for lt_dladvise_init... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: *********************************************
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Could not find lt_dladvise_init in libltdl
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: This could mean that your libltdl version
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: is old.  If you could upgrade, that would be great.
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: *********************************************
</span><br>
<span class="quotelev2">&gt; &gt; checking for lt_dladvise... no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, it looks like opal/utill/lt_interface.c is still attempting to
</span><br>
<span class="quotelev1">&gt; call lt_dladvise:
</span><br>
<span class="quotelev2">&gt; &gt; PGC-S-0040-Illegal use of symbol, lt_dladvise
</span><br>
<span class="quotelev1">&gt; (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-pgi-12.10/openmpi-gitclone/opal/util/lt_interface.c:
</span><br>
<span class="quotelev1">&gt; 25)
</span><br>
<span class="quotelev2">&gt; &gt; PGC-W-0156-Type not specified, 'int' assumed
</span><br>
<span class="quotelev1">&gt; (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-pgi-12.10/openmpi-gitclone/opal/util/lt_interface.c:
</span><br>
<span class="quotelev1">&gt; 25)
</span><br>
<span class="quotelev2">&gt; &gt; PGC/x86-64 Linux 12.10-0: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The put of &quot;libtool --version&quot; says &quot;1.5.22&quot; and we have
</span><br>
<span class="quotelev1">&gt; libltdl.so.3.1.4.
</span><br>
<span class="quotelev2">&gt; &gt; However, the rpm database is not readable, preventing me from checking a
</span><br>
<span class="quotelev1">&gt; package version associated with the libltdl.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The failing Solaris-11/x86-64 system says 1.5.22 without any ambiguity:
</span><br>
<span class="quotelev2">&gt; &gt; $ pkg info libltdl | grep Version
</span><br>
<span class="quotelev2">&gt; &gt;        Version: 1.5.22
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 30, 2015 at 3:51 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; New tarball posted (same location).  Now featuring 100% fewer &quot;make
</span><br>
<span class="quotelev1">&gt; check&quot; failures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jan 30, 2015, at 5:14 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shame on me for not running &quot;make check&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Fixing...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Jan 30, 2015, at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I ran on just one (mac OSX 10.8) system first as a &quot;smoke test&quot;.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It encountered the failure show below on &quot;make check&quot; at which point
</span><br>
<span class="quotelev1">&gt; I decided not to test 60+ platforms.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Please advise how I should proceed (best guess is wait for a new
</span><br>
<span class="quotelev1">&gt; tarball).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Making check in test
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Making check in support
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make  libsupport.a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;  CC       components.o
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; /Users/Paul/OMPI/openmpi-libltdl-macos10.8-x86-clang/openmpi-gitclone/test/support/components.c:27:10:
</span><br>
<span class="quotelev1">&gt; fatal error: 'opal/libltdl/ltdl.h' file not found
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; #include &quot;opal/libltdl/ltdl.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;         ^
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Fri, Jan 30, 2015 at 1:29 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Jan 30, 2015, at 2:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; If I had new enough autotools to autogen on this old system then I
</span><br>
<span class="quotelev1">&gt; wouldn't have asked about libltdl from libtool-1.4.  So, please *do*
</span><br>
<span class="quotelev1">&gt; generate a tarball and I will test (on *all* of my systems).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sweet, thank you.  I just posted a tarball here:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16854.php">http://www.open-mpi.org/community/lists/devel/2015/01/16854.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16855.php">http://www.open-mpi.org/community/lists/devel/2015/01/16855.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16856.php">http://www.open-mpi.org/community/lists/devel/2015/01/16856.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16857.php">http://www.open-mpi.org/community/lists/devel/2015/01/16857.php</a>
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
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16858.php">http://www.open-mpi.org/community/lists/devel/2015/01/16858.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16863.php">http://www.open-mpi.org/community/lists/devel/2015/01/16863.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16888.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16886.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16889.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
