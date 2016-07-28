<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 19:27:50 2014" -->
<!-- isoreceived="20140324232750" -->
<!-- sent="Mon, 24 Mar 2014 19:27:20 -0400" -->
<!-- isosent="20140324232720" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="CAFb48S-EuAcend9PB=s8y_5nZxWqMOfA-DpBGAJgxdw-TAgfRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CCD9A749-FD1D-450B-954F-00A028EB7700_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 19:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I ran these commands:
<br>
<p>$ make clean
<br>
$ make distclean
<br>
<p>(wanted to be extra sure!)
<br>
<p>$ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64'
<br>
CXXFLAGS='-m64' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64'
<br>
--prefix=/Users/fortran/AutomakeBug/autobug14 | &amp; tee configure.log
<br>
$ make V=1 install |&amp; tee makeV1install.log
<br>
<p>So find attached the config.log, configure.log, and makeV1install.log which
<br>
should have all the info you asked about.
<br>
<p>Matt
<br>
<p>PS: I just tried configure/make/make install with Open MPI 1.7.5, but the
<br>
same error occurs as expected. Hope springs eternal, you know?
<br>
<p><p>On Mon, Mar 24, 2014 at 6:48 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Mar 24, 2014, at 6:34 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the late reply. The answer is: No, 1.14.1 has not fixed the
</span><br>
<span class="quotelev1">&gt; problem (and indeed, that's what my Mac is running):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (28) $ make install | &amp; tee makeinstall.log
</span><br>
<span class="quotelev2">&gt; &gt; Making install in src
</span><br>
<span class="quotelev2">&gt; &gt;  ../config/install-sh -c -d '/Users/fortran/AutomakeBug/autobug14/lib'
</span><br>
<span class="quotelev2">&gt; &gt;  /bin/sh ../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libfortran_stuff.la '/Users/fortran/AutomakeBug/autobug14/lib'
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: /usr/bin/install -c .libs/libfortran_stuff.0.dylib
</span><br>
<span class="quotelev1">&gt; /Users/fortran/AutomakeBug/autobug14/lib/libfortran_stuff.0.dylib
</span><br>
<span class="quotelev2">&gt; &gt; install: .libs/libfortran_stuff.0.dylib: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [install-libLTLIBRARIES] Error 71
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the output from either the am12 or am14 test. If you have any
</span><br>
<span class="quotelev1">&gt; options you'd like me to try with this, let me know. (For example, is there
</span><br>
<span class="quotelev1">&gt; a way to make autotools *more* verbose? I've always tried to make it less
</span><br>
<span class="quotelev1">&gt; so!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok.  With the am14 tarball, please run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then run this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make V=1 install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then send the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - configure stdout
</span><br>
<span class="quotelev1">&gt; - config.log file
</span><br>
<span class="quotelev1">&gt; - stdout/stderr from &quot;make V=1 install&quot;
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
 get is one trick: rational thinking. But when you're good and crazy,
 oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23953/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23953/configure.log">configure.log</a>
</ul>
<!-- attachment="configure.log" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23953/makeV1install.log">makeV1install.log</a>
</ul>
<!-- attachment="makeV1install.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23954.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23952.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>Reply:</strong> <a href="23965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
