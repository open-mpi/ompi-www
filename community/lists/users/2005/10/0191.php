<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 16:57:22 2005" -->
<!-- isoreceived="20051012215722" -->
<!-- sent="Wed, 12 Oct 2005 17:57:19 -0400" -->
<!-- isosent="20051012215719" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower" -->
<!-- id="467E2442-C42A-4766-A919-AF4E5E4A4CA2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E3FD0319-4C04-4856-8EC0-11D7C4BF3F5C_at_noao.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 16:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2005, at 5:15 PM, Ken Mighell wrote:
<br>
<p><span class="quotelev1">&gt; Making all in xgrid
</span><br>
<span class="quotelev1">&gt; depbase=`echo src/pls_xgrid_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../../../../libtool --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I. -I../../../../include -I../../../../include  -I/tmp/ 
</span><br>
<span class="quotelev1">&gt; buildpackage-6060/openmpi-1.0rc3/include  -I../../../../include - 
</span><br>
<span class="quotelev1">&gt; I../../../.. -I../../../.. -I../../../../include -I../../../../opal  
</span><br>
<span class="quotelev1">&gt; -I../../../../orte -I../../../../ompi  -D_REENTRANT -F  
</span><br>
<span class="quotelev1">&gt; XGridFoundation  -MT src/pls_xgrid_component.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot; -c -o src/pls_xgrid_component.lo src/ 
</span><br>
<span class="quotelev1">&gt; pls_xgrid_component.m; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile: unable to infer tagged configuration
</span><br>
<span class="quotelev1">&gt; libtool: compile: specify a tag with `--tag'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [src/pls_xgrid_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>It looks like for some reason you set your C compiler to cc instead  
<br>
of gcc.  This causes some problems with libtool if your Objective C  
<br>
compiler is found as gcc.  Can you try making sure $CC isn't set to  
<br>
cc in your environment or in the build script and see if that helps?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>In reply to:</strong> <a href="0190.php">Ken Mighell: "[O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
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
