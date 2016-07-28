<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 17:34:17 2005" -->
<!-- isoreceived="20051012223417" -->
<!-- sent="Wed, 12 Oct 2005 15:34:07 -0700" -->
<!-- isosent="20051012223407" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="3D8E097E-E6BB-4BD9-BB3B-C0E2F88BC164_at_noao.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
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
<strong>Date:</strong> 2005-10-12 17:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe in reply to:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
<p>It must be something else because cc *is* gcc
<br>
<p>mighell% which cc
<br>
/usr/bin/cc
<br>
<p>mighell% ls -l /usr/bin/cc
<br>
lrwxr-xr-x   1 root  wheel  7 May 25 11:45 /usr/bin/cc -&gt; gcc-4.0
<br>
<p>mighell% cc --version
<br>
powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 20041026 (Apple Computer,  
<br>
Inc. build 4061)
<br>
Copyright (C) 2004 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There  
<br>
is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
<br>
PURPOSE.
<br>
<p>On Oct 12, 2005, at 5:15 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1"> &gt; Making all in xgrid
</span><br>
<span class="quotelev1"> &gt; depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|
</span><br>
<span class="quotelev1"> &gt; \.lo$||'`; \
</span><br>
<span class="quotelev1"> &gt; if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H -
</span><br>
<span class="quotelev1"> &gt; I. -I. -I../../../../include -I../../../../include -I/tmp/
</span><br>
<span class="quotelev1"> &gt; buildpackage-6060/openmpi-1.0rc3/include -I../../../../include -
</span><br>
<span class="quotelev1"> &gt; I../../../.. -I../../../.. -I../../../../include -I../../../../opal
</span><br>
<span class="quotelev1"> &gt; -I../../../../orte -I../../../../ompi -D_REENTRANT -F
</span><br>
<span class="quotelev1"> &gt; XGridFoundation -MT src/pls_xgrid_component.lo -MD -MP -MF
</span><br>
<span class="quotelev1"> &gt; &quot;$depbase.Tpo&quot; -c -o src/pls_xgrid_component.lo src/
</span><br>
<span class="quotelev1"> &gt; pls_xgrid_component.m; \
</span><br>
<span class="quotelev1"> &gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev1"> &gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1"> &gt; libtool: compile: unable to infer tagged configuration
</span><br>
<span class="quotelev1"> &gt; libtool: compile: specify a tag with `--tag'
</span><br>
<span class="quotelev1"> &gt; make[4]: *** [src/pls_xgrid_component.lo] Error 1
</span><br>
<span class="quotelev1"> &gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1"> &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1"> &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1"> &gt; make: *** [all-recursive] Error 1
</span><br>
<p>It looks like for some reason you set your C compiler to cc instead
<br>
of gcc. This causes some problems with libtool if your Objective C
<br>
compiler is found as gcc. Can you try making sure $CC isn't set to
<br>
cc in your environment or in the build script and see if that helps?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
    Brian Barrett
    Open MPI developer
    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Brian Barrett: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Maybe in reply to:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Reply:</strong> <a href="0193.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
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
