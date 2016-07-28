<?
$subject_val = "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 17:24:11 2014" -->
<!-- isoreceived="20140109222411" -->
<!-- sent="Thu, 9 Jan 2014 14:24:09 -0800" -->
<!-- isosent="20140109222409" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11" -->
<!-- id="CAAvDA14FYcqazghUV5MyjTU-9m-T3SkR4rTF_c-a9euo6rU28w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04B385D9-69A4-476A-B917-9A2472D0CA0F_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-09 17:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13643.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The requested config.log was attached
<br>
as openmpi-trunk-solaris11-x64-ib-gcc452-config.log.bz2 in my recent
<br>
response to the usnic-on-solaris thread:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13637.php">http://www.open-mpi.org/community/lists/devel/2014/01/13637.php</a>
<br>
<p>It looks like there were 2 successful probes for ibv_open_device() before
<br>
the failing one.
<br>
The failing one says:
<br>
configure:284324: checking for ibv_open_device in -libverbs
<br>
configure:284349: gcc -std=gnu99 -o conftest -O3 -DNDEBUG -m64
<br>
-finline-functions -fno-strict-aliasing -pthread -I$(top_srcdir)
<br>
-I$(top_builddir) -I$(top_srcdir)/opal/include -I$(top_srcdir)/orte/include
<br>
-I$(top_srcdir)/ompi/include -I$(top_srcdir)/oshmem/include
<br>
&nbsp;-I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/hwloc/hwloc172/hwloc/include
<br>
-I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/BLD/opal/mca/hwloc/hwloc172/hwloc/include
<br>
-I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/event/libevent2021/libevent
<br>
-I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/openmpi-1.9a1r30146/opal/mca/event/libevent2021/libevent/include
<br>
-I/shared/OMPI/openmpi-trunk-solaris11-x64-ib-gcc452/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-export-dynamic    conftest.c -libverbs   -lsocket -lnsl  -lm  -lsocket
<br>
-lnsl  -lm  &gt;&amp;5
<br>
ld: fatal: entry point symbol 'xport-dynamic' is undefined
<br>
collect2: ld returned 1 exit status
<br>
configure:284349: $? = 1
<br>
<p>So, it looks line a bogus &quot;-export-dynamic&quot; argument to gcc is at fault
<br>
here.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 2:05 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the config.log file from this?  It has more details in it
</span><br>
<span class="quotelev1">&gt; that will be useful (e.g., *why* ibv_open_device wasn't found in -libverbs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if the issue has to do something with our handling of the legacy
</span><br>
<span class="quotelev1">&gt; --with-openib switch...? (it's been deprecated on the trunk in favor of
</span><br>
<span class="quotelev1">&gt; --with-verbs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 8:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When trying to configure the OMPI trunk on a Solaris-11/x86-64 with
</span><br>
<span class="quotelev1">&gt; --enable-openib, I see the following error not seen with the 1.7 branch:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Compiler flags
</span><br>
<span class="quotelev2">&gt; &gt; checking which of CFLAGS are ok for debugger modules...  -DNDEBUG -m64
</span><br>
<span class="quotelev1">&gt; -mt
</span><br>
<span class="quotelev2">&gt; &gt; checking for debugger extra CFLAGS... -g
</span><br>
<span class="quotelev2">&gt; &gt; checking for the C compiler vendor... (cached) sun
</span><br>
<span class="quotelev2">&gt; &gt; checking if want to add padding to the openib BTL control header... no
</span><br>
<span class="quotelev2">&gt; &gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for sys/poll.h... (cached) yes
</span><br>
<span class="quotelev2">&gt; &gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev2">&gt; &gt; looking for library without search path
</span><br>
<span class="quotelev2">&gt; &gt; checking for ibv_open_device in -libverbs... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Verbs support requested (via --with-verbs) but not
</span><br>
<span class="quotelev1">&gt; found.
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
</span><br>
<span class="quotelev1">&gt; v1.1), you *MUST* have both the libsysfs headers and libraries installed.
</span><br>
<span class="quotelev1">&gt;  Later versions of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is despite an earlier:
</span><br>
<span class="quotelev2">&gt; &gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error above is with the Solaris Studio compilers, but the same
</span><br>
<span class="quotelev1">&gt; happens with the GNU compilers.
</span><br>
<span class="quotelev2">&gt; &gt; The (compressed) full configure output for the GNU case is attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a regression relative to the current 1.7.4rc, in which the
</span><br>
<span class="quotelev1">&gt; openib btl works fine on Solaris-11/x86-64, by which I mean I can configure
</span><br>
<span class="quotelev1">&gt; with --enable-openib and the following command line works:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -host pcp-j-19,pcp-j-20 -mca btl openib,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My best guess is that either the libsysfs requirement itself OR its
</span><br>
<span class="quotelev1">&gt; associated test is Linux-specific.
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
<span class="quotelev2">&gt; &gt; &lt;configure.log.bz2&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13643.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13641.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13737.php">Paul Hargrove: "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
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
