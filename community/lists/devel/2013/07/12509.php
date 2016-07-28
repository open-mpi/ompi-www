<?
$subject_val = "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 10:41:12 2013" -->
<!-- isoreceived="20130701144112" -->
<!-- sent="Mon, 1 Jul 2013 16:41:08 +0200" -->
<!-- isosent="20130701144108" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist" -->
<!-- id="CAHYyVz4L5HS6Q-18xVvHt0ioyPXNRS2KkxYZ5dq3LtijUGobhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="656CF7E4-8CB4-4A00-A6E4-33886189A145_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 10:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12506.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Reply:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph, I believe I have run autogen.pl after a fresh full
<br>
checkout, and not yet after an update:
<br>
<p>Open MPI autogen (buckle up!)
<br>
<p>1. Checking tool versions
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for autoconf
<br>
&lt;stripped&gt;
<br>
...
<br>
- from my log
<br>
<p>How ../../config/autogen_found_items.m4:274 is supposed to find
<br>
'opal/mca/backtrace/configure.m4' if it operates in 'opal/libltdl' ?
<br>
<p>Vasiliy
<br>
<p><p>On Mon, Jul 1, 2013 at 4:07 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Or you might try rerunning autogen.pl in case you updated and didn't catch that something requiring autogen changed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 7:02 AM, &quot;Jeff Squyres (jsquyres)&quot; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you have a busted SVN checkout -- that file exists for me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svnversion .
</span><br>
<span class="quotelev2">&gt;&gt; 28688
</span><br>
<span class="quotelev2">&gt;&gt; [10:02] jsquyres-mac:~/s/ompi3 &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; svn info opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; Path: opal/mca/backtrace/configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; Name: configure.m4
</span><br>
<span class="quotelev2">&gt;&gt; Working Copy Root Path: /Users/jsquyres/dev/svn/ompi3
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configure.m4">https://svn.open-mpi.org/svn/ompi/trunk/opal/mca/backtrace/configure.m4</a>
</span><br>
<span class="quotelev2">&gt;&gt; Repository Root: <a href="https://svn.open-mpi.org/svn/ompi">https://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev2">&gt;&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev2">&gt;&gt; Revision: 28688
</span><br>
<span class="quotelev2">&gt;&gt; Node Kind: file
</span><br>
<span class="quotelev2">&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Rev: 23764
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Date: 2010-09-17 19:04:06 -0400 (Fri, 17 Sep 2010)
</span><br>
<span class="quotelev2">&gt;&gt; Text Last Updated: 2013-05-24 11:39:52 -0400 (Fri, 24 May 2013)
</span><br>
<span class="quotelev2">&gt;&gt; Checksum: a6d3741b6c9ab47daf2a6af6c812c148f91793a2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2013, at 9:58 AM, Vasiliy
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is an error while configuring OpenMPI from the svn checkout with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal not being able to find 'opal/mca/backtrace/configure.m4',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which, in fact, does exist there. What changes are needed to fix that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note: it has stepped in the 'opal/libltdl' directory just before that error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: running /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/configure'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--prefix=/usr' '--exec-prefix=/usr' '--bindir=/usr/bin'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--sbindir=/usr/sbin' '--libexecdir=/usr/lib' '--datadir=/usr/share'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--localstatedir=/var' '--sysconfdir=/etc' '--datarootdir=/usr/share'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--docdir=/usr/share/doc/openmpi' 'LDFLAGS=-Wl,--export-all-symbols
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,-no-undefined' '--disable-mca-dso' '--disable-sysv-shmem'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--without-udapl' '--enable-cxx-exceptions' '--with-threads=posix'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--without-cs-fs' '--enable-heterogeneous'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--with-mpi-param_check=always'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--enable-contrib-no-build=vt,libompitrace'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'CC=gcc' 'CFLAGS=-ggdb -march=native -mtune=native -Ofast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'LIBS=' 'CPPFLAGS=' 'CXX=g++' 'CXXFLAGS=-ggdb -march=native
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mtune=native -Ofast -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'FC=gfortran' 'FCFLAGS=-ggdb -march=native -mtune=native -Ofast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fomit-frame-pointer -pipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build=/usr/src/debug/openmpi-1.9.0-a1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fdebug-prefix-map=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0=/usr/src/debug/openmpi-1.9.0-a1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-ltdl-convenience --disable-ltdl-install --enable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-static --cache-file=/dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --srcdir=/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-option-checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Final output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking that generated files are newer than configure... done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stripped&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status: executing libtool commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/config'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/contrib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;&amp; /bin/sh /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/config/missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal-1.14 -I ../../config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal/mca/backtrace/configure.m4' does not exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:527: recipe for target
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/libltdl/aclocal.m4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/libltdl'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:2070: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:1578: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** ERROR: make failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12506.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Reply:</strong> <a href="12510.php">Ralph Castain: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
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
