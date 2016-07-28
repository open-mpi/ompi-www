<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 21:44:24 2009" -->
<!-- isoreceived="20090828014424" -->
<!-- sent="Thu, 27 Aug 2009 18:45:07 -0700" -->
<!-- isosent="20090828014507" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="4A9736A3.8090101_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220908271821u6db709f4y4e000d56d9ee3bcd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] build problem, autogen<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 21:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt;Don't forget to also install a recent gnu libtool.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Lemme see:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-tools">http://www.open-mpi.org/faq/?category=building#build-tools</a> says: &quot;If you 
<br>
are building Open MPI from a tarball, you need a C compiler, a C++ 
<br>
compiler, and make... You do not need any special version of the GNU 
<br>
&quot;Auto&quot; tools (Autoconf, Automake, Libtool).&quot;
<br>
<p>So, that presumably means I *should* be okay.
<br>
<p>For what it's worth, I can no longer find the places that led me to 
<br>
believe that:
<br>
<p>*) I needed the versions of the tools (m4, autoconf, automake) that I 
<br>
picked up.
<br>
*) I did not need libtool since OMPI had its own, hacked up version.
<br>
<p>but those were the assumptions I operated under.
<br>
<p><span class="quotelev1">&gt;On Thursday, August 27, 2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Don't you need a rehash in your script to make sure it picks up the newly-installed autotools?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Good point.  I'm a dummy about these things.  Assuming I know how to fix 
<br>
what you're saying, I inserted a &quot;rehash&quot; in my script after &quot;make 
<br>
install&quot;, but still got the same problem.  That is, the relevent part of 
<br>
the script now says:
<br>
<p>foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
<br>
&nbsp;&nbsp;bunzip2 $PACKAGE.tar.bz2
<br>
&nbsp;&nbsp;tar xf  $PACKAGE.tar
<br>
&nbsp;&nbsp;pushd   $PACKAGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=$INSTALLDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
&nbsp;&nbsp;popd
<br>
&nbsp;&nbsp;rehash
<br>
end
<br>
<p>bunzip2 openmpi-1.4a1r20984.tar.bz2
<br>
tar xf  openmpi-1.4a1r20984.tar
<br>
pushd   openmpi-1.4a1r20984
<br>
&nbsp;&nbsp;./autogen.sh
<br>
<p>and the end of the log file still says:
<br>
<p>*** Running GNU tools
<br>
[Running] libtoolize --automake --copy
<br>
[Running] aclocal
<br>
configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
[Running] autoheader
<br>
[Running] autoconf
<br>
configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
<p>-------------------------------------------------------------------------
<br>
It seems that the execution of &quot;autoconf&quot; has failed.  See above for
<br>
the specific error message that caused it to abort.
<br>
-------------------------------------------------------------------------
<br>
<p>Error running autogen.sh -l in romio.  Aborting.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 27, 2009, at 4:48 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'm having a build problem.  I want to be able to build on all sorts of
</span><br>
<span class="quotelev2">&gt;&gt;different machines and don't always know that the right versions of
</span><br>
<span class="quotelev2">&gt;&gt;various tools will be available.  So, I drag them around with me.  So,
</span><br>
<span class="quotelev2">&gt;&gt;e.g., I have these tarballs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;autoconf-2.63.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;automake-1.10.2.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;m4-1.4.13.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;After building the other tools, I start autogen on OMPI and get this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;*** Running GNU tools
</span><br>
<span class="quotelev2">&gt;&gt;[Running] libtoolize --automake --copy
</span><br>
<span class="quotelev2">&gt;&gt;[Running] aclocal
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://configure.in:2123">http://configure.in:2123</a>: warning: macro `AM_PROG_LIBTOOL' not found in library
</span><br>
<span class="quotelev2">&gt;&gt;[Running] autoheader
</span><br>
<span class="quotelev2">&gt;&gt;[Running] autoconf
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://configure.in:2126">http://configure.in:2126</a>: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt;&gt;      If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt;&gt;      See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt;&gt;the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt;&gt;-------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Error running autogen.sh -l in romio.  Aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What's up?  This is SuSE with GCC.  Run script and log file attached.
</span><br>
<span class="quotelev2">&gt;&gt;Thanks for any help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#!/bin/csh -x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;ls
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;pwd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;set INSTALLDIR = `pwd`/myopt
</span><br>
<span class="quotelev2">&gt;&gt;set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev2">&gt;&gt; bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; tar xf  $PACKAGE.tar
</span><br>
<span class="quotelev2">&gt;&gt; pushd   $PACKAGE
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev2">&gt;&gt;   make
</span><br>
<span class="quotelev2">&gt;&gt;   make install
</span><br>
<span class="quotelev2">&gt;&gt; popd
</span><br>
<span class="quotelev2">&gt;&gt;end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;tar xf  openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev2">&gt;&gt;pushd   openmpi-1.4a1r20984
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;# ./configure                         \
</span><br>
<span class="quotelev2">&gt;&gt;#   --disable-visibility              \
</span><br>
<span class="quotelev2">&gt;&gt;#   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;#   --prefix=$INSTALLDIR
</span><br>
<span class="quotelev2">&gt;&gt;# make
</span><br>
<span class="quotelev2">&gt;&gt;# make install
</span><br>
<span class="quotelev2">&gt;&gt;popd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;ls
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Previous message:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6728.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6730.php">Tim Mattox: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>Reply:</strong> <a href="6740.php">Nifty Tom Mitchell: "Re: [OMPI devel] build problem, autogen"</a>
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
