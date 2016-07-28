<?
$subject_val = "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 22:24:08 2014" -->
<!-- isoreceived="20140111032408" -->
<!-- sent="Fri, 10 Jan 2014 19:24:05 -0800" -->
<!-- isosent="20140111032405" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11" -->
<!-- id="CAAvDA172fZ2JYBdLKeL-337-noXBqDOLho54QevHSshTPs7P8A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14FYcqazghUV5MyjTU-9m-T3SkR4rTF_c-a9euo6rU28w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 22:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: still present in tonight's trunk tarball (1.9a1r30255).
<br>
Don't know if was expected to be fixed or not.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 2:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The requested config.log was attached
</span><br>
<span class="quotelev1">&gt; as openmpi-trunk-solaris11-x64-ib-gcc452-config.log.bz2 in my recent
</span><br>
<span class="quotelev1">&gt; response to the usnic-on-solaris thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13637.php">http://www.open-mpi.org/community/lists/devel/2014/01/13637.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there were 2 successful probes for ibv_open_device() before
</span><br>
<span class="quotelev1">&gt; the failing one.
</span><br>
<span class="quotelev1">&gt; The failing one says:
</span><br>
<span class="quotelev1">&gt; configure:284324: checking for ibv_open_device in -libverbs
</span><br>
<span class="quotelev1">&gt; configure:284349: gcc -std=gnu99 -o conftest -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -I$(top_srcdir)
</span><br>
<span class="quotelev1">&gt; -I$(top_builddir) -I$(top_srcdir)/opal/include -I$(top_srcdir)/orte/include
</span><br>
<span class="quotelev1">&gt; -I$(top_srcdir)/ompi/include -I$(top_srcdir)/oshmem/include
</span><br>
<span class="quotelev1">&gt;  -I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/BLD/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -export-dynamic    conftest.c -libverbs   -lsocket -lnsl  -lm  -lsocket
</span><br>
<span class="quotelev1">&gt; -lnsl  -lm  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; ld: fatal: entry point symbol 'xport-dynamic' is undefined
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:284349: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it looks line a bogus &quot;-export-dynamic&quot; argument to gcc is at fault
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 2:05 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the config.log file from this?  It has more details in it
</span><br>
<span class="quotelev2">&gt;&gt; that will be useful (e.g., *why* ibv_open_device wasn't found in -libverbs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the issue has to do something with our handling of the legacy
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib switch...? (it's been deprecated on the trunk in favor of
</span><br>
<span class="quotelev2">&gt;&gt; --with-verbs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 8:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When trying to configure the OMPI trunk on a Solaris-11/x86-64 with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-openib, I see the following error not seen with the 1.7 branch:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; *** Compiler flags
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG -m64
</span><br>
<span class="quotelev2">&gt;&gt; -mt
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for the C compiler vendor... (cached) sun
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking if want to add padding to the openib BTL control header... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for sys/poll.h... (cached) yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; looking for library without search path
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: Verbs support requested (via --with-verbs) but not
</span><br>
<span class="quotelev2">&gt;&gt; found.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0
</span><br>
<span class="quotelev2">&gt;&gt; or v1.1), you *MUST* have both the libsysfs headers and libraries
</span><br>
<span class="quotelev2">&gt;&gt; installed.  Later versions of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure: error: Aborting.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is despite an earlier:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The error above is with the Solaris Studio compilers, but the same
</span><br>
<span class="quotelev2">&gt;&gt; happens with the GNU compilers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The (compressed) full configure output for the GNU case is attached.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is a regression relative to the current 1.7.4rc, in which the
</span><br>
<span class="quotelev2">&gt;&gt; openib btl works fine on Solaris-11/x86-64, by which I mean I can configure
</span><br>
<span class="quotelev2">&gt;&gt; with --enable-openib and the following command line works:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -host pcp-j-19,pcp-j-20 -mca btl openib,self -np 2
</span><br>
<span class="quotelev2">&gt;&gt; examples/ring_c
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My best guess is that either the libsysfs requirement itself OR its
</span><br>
<span class="quotelev2">&gt;&gt; associated test is Linux-specific.
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
<span class="quotelev3">&gt;&gt; &gt; &lt;configure.log.bz2&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13736.php">Paul Hargrove: "Re: [OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13642.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
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
