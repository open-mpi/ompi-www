<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 11:29:58 2013" -->
<!-- isoreceived="20130212162958" -->
<!-- sent="Tue, 12 Feb 2013 16:29:53 +0000" -->
<!-- isosent="20130212162953" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CFB047_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CFAB52_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-12 11:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21392.php">Kranthi Kumar: "[OMPI users] Which type of collective call is called?"</a>
<li><strong>Previous message:</strong> <a href="21390.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21390.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPICH folks, who lurk on this list (gasp!), actually replied to me offlist and pointed out that they had pretty much the same problem, and pointed out a clever solution.  Thanks, MPICH guys!
<br>
<p>I committed a fix to the trunk and to v1.6 (and will CMR it to v1.7, too).  
<br>
<p>This is, admittedly a fairly obscure error case (i.e., we've not run into it before).  But the fix was easy and we might as well protect against it.
<br>
<p><p>On Feb 12, 2013, at 9:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You should definitely be able to disable fortran on the trunk.  The option changed name, though -- disable-mpi-fortran (vs. --disable-mpi-f77), because we unified f77 and f90 support (e.g., mpifort, not mpif77 or mpif90).  See this blog entry (which was written a while ago; it's now all on the trunk and in v1.7):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran-features/">http://blogs.cisco.com/performance/a-bucket-full-of-new-mpi-fortran-features/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you're having a problem disabling fortran on the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, we use a different version of libtool on trunk/v1.7 tarballs which should obviate this issue (because I think it now correctly disables the fortran libtool tag in configure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2013, at 8:40 AM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yup, gfortran was the problem. It works now. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It also explains why the trunk version worked. In the trunk you can't disable fortran at all, so I had to uninstall gfortran.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for all the help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 12, 2013 at 8:21 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I looked closer at your configure output this morning, and I think I see the issue: I think your gfortran may be borked -- here's some output in config.log:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; configure:163678: checking if gfortran supports -c -o file.o
</span><br>
<span class="quotelev2">&gt;&gt; configure:163699: gfortran -c  -o out/conftest2.o conftest.f &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; i686-apple-darwin10-gfortran-4.2.1: error trying to exec 'f951': execvp: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; configure:163703: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; configure:163725: result: no
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note the &quot;f951&quot; execvp error -- that looks to me like gfortran is trying to exec a sub-executable named f951 and failing.  I see other errors above this, too:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; configure:28218: gfortran -c  conftest.F &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; i686-apple-darwin10-gfortran-4.2.1: error trying to exec 'cc1': execvp: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; configure:28218: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I think your gfortran is borked in some cases, and it's causing configure to get confused and choose to make static libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know you supplied --disable-mpi-f77, and that turns off all of OMPI's fortran bindings.  But the version of libtool that we're using in the OMPI 1.6 series still checks for C, C++, and Fortran, even if the project doesn't use C++ or Fortran (this has been fixed in later versions of libtool).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you either uninstall your borked gfortran, install a proper/working gfortran, and/or adjust your path to not find the borked gfortran?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wow -- that's a fun failure case.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2013, at 8:00 AM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Feb 11, 2013 at 10:44 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got your tarball (no need to re-send it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm a little confused by your output from make, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you run autogen?  If so, there's no need to do that -- try expanding a fresh tarball and just running ./configure and make.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nope, just a straight configure from a clean tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did some more testing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.3 tarball (new) - No .so's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.4rc3 tarball - No .so's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn trunk (rev 28043) - Yes, works and create .so's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I'm baffled. Do you want me to pull a 1.6.3 out of subversion and try it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 11, 2013, at 10:03 PM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I packed the compile info as requested but the message is to big. Changing the compression didn't help. I can split it, or do you just want to approve it out of the hold queue?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Feb 11, 2013 at 3:03 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 11, 2013, at 2:46 PM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That's what I noticed, no .so's (actually, I noticed that the dlname in the .la file is empty. thank you, dtruss)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please send all the information listed here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've built it two different ways:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3 --disable-mpi-f77 --with-openib=no --enable-shared --disable-static
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Both give me the same errors and no .so's.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's weird -- it should make .so's in both cases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I noticed that I point to the maports libtool (/opt/local/bin/libtool) so I changed the path to find /usr/bin first to no avail. I changed the compiler from gcc to clang and that didn't work either.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure/make should be using the &quot;libtool&quot; that is internal to the expanded tarball tree, so whichever libtool your PATH points to shouldn't matter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Where do the shared objects get created in the build cycle?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All throughout the build, actually.  Generally, they're created in the */mca/*/* directories in the source tree.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21392.php">Kranthi Kumar: "[OMPI users] Which type of collective call is called?"</a>
<li><strong>Previous message:</strong> <a href="21390.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21390.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
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
