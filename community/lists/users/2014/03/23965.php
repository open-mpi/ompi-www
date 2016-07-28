<?
$subject_val = "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:30:17 2014" -->
<!-- isoreceived="20140325143017" -->
<!-- sent="Tue, 25 Mar 2014 14:30:06 +0000" -->
<!-- isosent="20140325143006" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran" -->
<!-- id="55CCC86C-8951-4666-AD2A-5B8421632F01_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S-EuAcend9PB=s8y_5nZxWqMOfA-DpBGAJgxdw-TAgfRg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 10:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23966.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23964.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got your output -- thanks.  I'm pretty sure this is pointing to a Libtool bug.
<br>
<p>Here's the interesting part -- it looks like Libtool simply isn't issuing the command to create the library (!).  Check out this (annotated) output from &quot;make V=1&quot; on a Linux/gfortran box:
<br>
<p><pre>
----
Making all in src
make[1]: Entering directory `/home/jsquyres/git/pgi-autotool-bug/src'
# Compile the fortran_foo.f90 file
/bin/sh ../libtool  --tag=FC   --mode=compile gfortran  -g -O2 -c -o fortran_foo.lo fortran_foo.f90
libtool: compile:  gfortran -g -O2 -c fortran_foo.f90  -fPIC -o .libs/fortran_foo.o
# Compile the fortran_bar.f90 file
/bin/sh ../libtool  --tag=FC   --mode=compile gfortran  -g -O2 -c -o fortran_bar.lo fortran_bar.f90
libtool: compile:  gfortran -g -O2 -c fortran_bar.f90  -fPIC -o .libs/fortran_bar.o
# Link the two into the libfortran_stuff.so library
/bin/sh ../libtool  --tag=FC   --mode=link gfortran  -g -O2   -o libfortran_stuff.la -rpath /usr/local/lib fortran_foo.lo fortran_bar.lo  
libtool: link: gfortran -shared  -fPIC  .libs/fortran_foo.o .libs/fortran_bar.o    -O2   -Wl,-soname -Wl,libfortran_stuff.so.0 -o .libs/libfortran_stuff.so.0.0.0
# Make some handy sym links
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libfortran_stuff.so.0&quot; &amp;&amp; ln -s &quot;libfortran_stuff.so.0.0.0&quot; &quot;libfortran_stuff.so.0&quot;)
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libfortran_stuff.so&quot; &amp;&amp; ln -s &quot;libfortran_stuff.so.0.0.0&quot; &quot;libfortran_stuff.so&quot;)
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libfortran_stuff.la&quot; &amp;&amp; ln -s &quot;../libfortran_stuff.la&quot; &quot;libfortran_stuff.la&quot; )
-----
Compare this to your &quot;make V=1&quot; output:
-----
Making install in src
# Compile the fortran_foo.f90 file
/bin/sh ../libtool  --tag=FC   --mode=compile pgfortran  -m64 -c -o fortran_foo.lo fortran_foo.f90
libtool: compile:  pgfortran -m64 -c fortran_foo.f90  -o .libs/fortran_foo.o
# Compile the fortran_bar.f90 file
/bin/sh ../libtool  --tag=FC   --mode=compile pgfortran  -m64 -c -o fortran_bar.lo fortran_bar.f90
libtool: compile:  pgfortran -m64 -c fortran_bar.f90  -o .libs/fortran_bar.o
# Link the two into the libfortran_stuff.so library
/bin/sh ../libtool  --tag=FC   --mode=link pgfortran  -m64  -m64 -o libfortran_stuff.la -rpath /Users/fortran/AutomakeBug/autobug14/lib fortran_foo.lo fortran_bar.lo  
******* NOTICE THAT THERE'S NO COMMAND HERE TO MAKE THE LIBRARY!
# Make some handy sym links
libtool: link: (cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libfortran_stuff.dylib&quot; &amp;&amp; ln -s &quot;libfortran_stuff.0.dylib&quot; &quot;libfortran_stuff.dylib&quot;)
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libfortran_stuff.la&quot; &amp;&amp; ln -s &quot;../libfortran_stuff.la&quot; &quot;libfortran_stuff.la&quot; )
-----
Time to send this bug report upstream.
On Mar 24, 2014, at 7:27 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
&gt; Jeff,
&gt; 
&gt; I ran these commands:
&gt; 
&gt; $ make clean
&gt; $ make distclean
&gt; 
&gt; (wanted to be extra sure!)
&gt; 
&gt; $ ./configure CC=gcc CXX=g++ F77=pgfortran FC=pgfortran CFLAGS='-m64' CXXFLAGS='-m64' LDFLAGS='-m64' FCFLAGS='-m64' FFLAGS='-m64' --prefix=/Users/fortran/AutomakeBug/autobug14 | &amp; tee configure.log
&gt; $ make V=1 install |&amp; tee makeV1install.log
&gt; 
&gt; So find attached the config.log, configure.log, and makeV1install.log which should have all the info you asked about.
&gt; 
&gt; Matt
&gt; 
&gt; PS: I just tried configure/make/make install with Open MPI 1.7.5, but the same error occurs as expected. Hope springs eternal, you know?
&gt; 
&gt; 
&gt; On Mon, Mar 24, 2014 at 6:48 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Mar 24, 2014, at 6:34 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Sorry for the late reply. The answer is: No, 1.14.1 has not fixed the problem (and indeed, that's what my Mac is running):
&gt; &gt;
&gt; &gt; (28) $ make install | &amp; tee makeinstall.log
&gt; &gt; Making install in src
&gt; &gt;  ../config/install-sh -c -d '/Users/fortran/AutomakeBug/autobug14/lib'
&gt; &gt;  /bin/sh ../libtool   --mode=install /usr/bin/install -c   libfortran_stuff.la '/Users/fortran/AutomakeBug/autobug14/lib'
&gt; &gt; libtool: install: /usr/bin/install -c .libs/libfortran_stuff.0.dylib /Users/fortran/AutomakeBug/autobug14/lib/libfortran_stuff.0.dylib
&gt; &gt; install: .libs/libfortran_stuff.0.dylib: No such file or directory
&gt; &gt; make[2]: *** [install-libLTLIBRARIES] Error 71
&gt; &gt; make[1]: *** [install-am] Error 2
&gt; &gt; make: *** [install-recursive] Error 1
&gt; &gt;
&gt; &gt; This is the output from either the am12 or am14 test. If you have any options you'd like me to try with this, let me know. (For example, is there a way to make autotools *more* verbose? I've always tried to make it less so!)
&gt; 
&gt; Ok.  With the am14 tarball, please run:
&gt; 
&gt; make clean
&gt; 
&gt; And then run this:
&gt; 
&gt; make V=1 install
&gt; 
&gt; And then send the following:
&gt; 
&gt; - configure stdout
&gt; - config.log file
&gt; - stdout/stderr from &quot;make V=1 install&quot;
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
&gt;  get is one trick: rational thinking. But when you're good and crazy, 
&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
&gt; 
&gt; &lt;config.log&gt;&lt;configure.log&gt;&lt;makeV1install.log&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23966.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23964.php">Rob Latham: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23953.php">Matt Thompson: "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
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
