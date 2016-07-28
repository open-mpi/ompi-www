<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 18:13:08 2005" -->
<!-- isoreceived="20051012231308" -->
<!-- sent="Wed, 12 Oct 2005 16:13:01 -0700" -->
<!-- isosent="20051012231301" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="C177976F-FB63-410C-9140-B47951D08F78_at_noao.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D8E097E-E6BB-4BD9-BB3B-C0E2F88BC164_at_noao.edu" -->
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
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 18:13:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
<p>Previously my CC environment variable was set to cc:
<br>
<p>mighell% printenv CC
<br>
cc
<br>
<p>I then set the CC environment variable to gcc:
<br>
<p>mighell% setenv CC gcc
<br>
mighell% printenv CC
<br>
gcc
<br>
<p>and then tried to build the package
<br>
<p>mighell% ./buildpackage.sh ~/pkg/openmpi/src/openmpi-1.0rc3.tar.gz ~/ 
<br>
pkg/openmpi/
<br>
--&gt; Configuration options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package Name:   openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:         /Users/mighell/pkg/openmpi/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Boot:           ssh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Config Options: --disable-f77 --without-cs-fs
<br>
--&gt; Found tarball: /Users/mighell/pkg/openmpi/src/openmpi-1.0rc3.tar.gz
<br>
--&gt; Found OMPI version: 1.0rc3
<br>
--&gt; Cleaning environment
<br>
--&gt; Making play space: /tmp/buildpackage-1930
<br>
--&gt; Copying tarball
<br>
--&gt; Untarring source: tar xzf openmpi-1.0rc3.tar.gz
<br>
--&gt; Running configure: ./configure --prefix=/Users/mighell/pkg/ 
<br>
openmpi/ --with-rsh=ssh --disable-f77 --without-cs-fs
<br>
--&gt; Building: make all
<br>
--&gt; Installing:
<br>
--&gt; Copying in special files: README /Users/mighell/pkg/openmpi/src/ 
<br>
openmpi-1.0rc3/contrib/dist/macosx-pkg/ReadMe.rtf LICENSE
<br>
touch: /disk.out: Permission denied
<br>
--&gt; Creating Package Info:
<br>
--&gt; Copying OS X-specific ReadMe into package
<br>
--&gt; Creating pax file
<br>
./buildpackage.sh: line 259: /disk.out: Permission denied
<br>
*** Failed building pax file.  Aborting!
<br>
*** Check /disk.out for information
<br>
<p>The output file disk.out apparently does not exist; I could not find  
<br>
any file called disk.out on my machine.
<br>
<p>-Ken
<br>
<p>On Oct 12, 2005, at 3:34 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It must be something else because cc *is* gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mighell% which cc
</span><br>
<span class="quotelev1">&gt; /usr/bin/cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mighell% ls -l /usr/bin/cc
</span><br>
<span class="quotelev1">&gt; lrwxr-xr-x   1 root  wheel  7 May 25 11:45 /usr/bin/cc -&gt; gcc-4.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mighell% cc --version
</span><br>
<span class="quotelev1">&gt; powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 20041026 (Apple  
</span><br>
<span class="quotelev1">&gt; Computer, Inc. build 4061)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.   
</span><br>
<span class="quotelev1">&gt; There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2005, at 5:15 PM, Ken Mighell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in xgrid
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev2">&gt; &gt; \.lo$||'`; \
</span><br>
<span class="quotelev2">&gt; &gt; if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -
</span><br>
<span class="quotelev2">&gt; &gt; I. -I. -I../../../../include -I../../../../include -I/tmp/
</span><br>
<span class="quotelev2">&gt; &gt; buildpackage-6060/openmpi-1.0rc3/include -I../../../../include -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../.. -I../../../.. -I../../../../include -I../../../../opal
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../orte -I../../../../ompi -D_REENTRANT -F
</span><br>
<span class="quotelev2">&gt; &gt; XGridFoundation -MT src/pls_xgrid_component.lo -MD -MP -MF
</span><br>
<span class="quotelev2">&gt; &gt; &quot;$depbase.Tpo&quot; -c -o src/pls_xgrid_component.lo src/
</span><br>
<span class="quotelev2">&gt; &gt; pls_xgrid_component.m; \
</span><br>
<span class="quotelev2">&gt; &gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt; &gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile: unable to infer tagged configuration
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile: specify a tag with `--tag'
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [src/pls_xgrid_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like for some reason you set your C compiler to cc instead
</span><br>
<span class="quotelev1">&gt; of gcc. This causes some problems with libtool if your Objective C
</span><br>
<span class="quotelev1">&gt; compiler is found as gcc. Can you try making sure $CC isn't set to
</span><br>
<span class="quotelev1">&gt; cc in your environment or in the build script and see if that helps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0194.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
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
