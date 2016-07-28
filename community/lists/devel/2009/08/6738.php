<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 11:13:47 2009" -->
<!-- isoreceived="20090828151347" -->
<!-- sent="Fri, 28 Aug 2009 11:13:41 -0400" -->
<!-- isosent="20090828151341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="6BB5A76B-F07B-43DD-80C8-05ADEC15DCC4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32BCC47515802A4E8AD4699506C4A48A03B42151EC81_at_EXCHMB.ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 11:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The easiest way to do this is to install all the Autotools (Autoconf,  
<br>
Automake, Libtool, m4) into a single $prefix.  That way, you don't  
<br>
have to copy *.m4 files around (I don't know what distros do by  
<br>
default -- I typically install my own/very recent Auto tools under  
<br>
$HOME/new-gnu or somesuch).
<br>
<p>I think we might have a little more detail about this in the HACKING  
<br>
file...?
<br>
<p>FWIW, you should not need to run autogen.sh on any distribution  
<br>
tarball -- nightly or otherwise.  A default build is supported out-of- 
<br>
the-box(tarball) without even requiring that any of the Auto tools are  
<br>
installed on the system at all.
<br>
<p>We do use slightly older AC/AM/LT in tarballs (there's a chart on the  
<br>
web site somewhere telling exactly what versions we use for each  
<br>
tarball series) -- Ken is absolutely correct -- so if you need new  
<br>
versions to support things like proper Lustre locking for parallel  
<br>
builds, then running autogen.sh on a tarball is fine.  Just be sure  
<br>
you have a consistent AC/AM/LT set.  The same rules for running  
<br>
autogen.sh successfully on an SVN/HG checkout apply to running  
<br>
autogen.sh successfully on a tarball.
<br>
<p>I hope that made sense!  :-)
<br>
<p><p><p>On Aug 28, 2009, at 9:18 AM, Matney Sr, Kenneth D. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim, Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, the part about not needing to run autogen.sh; if running
</span><br>
<span class="quotelev1">&gt; via a nightly/release tarball is not entirely accurate.  The tarballs
</span><br>
<span class="quotelev1">&gt; are configured to allow parallel builds (e.g., &quot;gmake -j6 ...&quot;);  
</span><br>
<span class="quotelev1">&gt; however,
</span><br>
<span class="quotelev1">&gt; when you run autogen.sh when building in an older Lustre filesystem,
</span><br>
<span class="quotelev1">&gt; locking is not fully supported and so it disables the parallel builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem here is that the automake and the libtool builds are
</span><br>
<span class="quotelev1">&gt; interdependent, in a manner of speaking.  The automake build installs
</span><br>
<span class="quotelev1">&gt; `aclocal` and your &quot;new&quot; automake references its own shared aclocal
</span><br>
<span class="quotelev1">&gt; tree.  For example, I installed a newer automake for our OMPI builds
</span><br>
<span class="quotelev1">&gt; at NCCS and we have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     kmy_at_jaguarpf-login3:/sw/xt5/automake/1.10.1/sles10.1_pgi7.2.5&gt;  
</span><br>
<span class="quotelev1">&gt; ls -dl /sw/xt5/automake/1.10.1/sles10.1_pgi7.2.5/share/aclocal-1.10
</span><br>
<span class="quotelev1">&gt;     drwxr-sr-x 2 kmy ccsstaff 8192 2009-02-04 16:20 /sw/xt5/automake/ 
</span><br>
<span class="quotelev1">&gt; 1.10.1/sles10.1_pgi7.2.5/share/aclocal-1.10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about the convoluted path, but that is another story.  The point
</span><br>
<span class="quotelev1">&gt; is that by using my `automake`, you also get the attendant `aclocal`
</span><br>
<span class="quotelev1">&gt; and this `aclocal` will reference the above &quot;.../share/aclocal-1.10&quot;
</span><br>
<span class="quotelev1">&gt; directory for its macros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the part where you get into trouble.  The libtool install puts
</span><br>
<span class="quotelev1">&gt; a couple of files into the automake/aclocal shared directory, like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [kmy_at_odie ~] rpm -ql libtool-1.5.24-17 | grep aclocal
</span><br>
<span class="quotelev1">&gt;     /usr/share/aclocal/libtool.m4
</span><br>
<span class="quotelev1">&gt;     /usr/share/aclocal/ltdl.m4
</span><br>
<span class="quotelev1">&gt;     /usr/share/libtool/libltdl/aclocal.m4
</span><br>
<span class="quotelev1">&gt;     [kmy_at_odie ~]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why your `aclocal` clutches when it hits &quot;AM_PROG_LIBTOOL&quot;.
</span><br>
<span class="quotelev1">&gt; There are other RPMs that do the same thing.  So, if you want to  
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt; a relocated automake (leave the default system automake in place),  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; building the relocated automake, you must copy the default system  
</span><br>
<span class="quotelev1">&gt; macros
</span><br>
<span class="quotelev1">&gt; into your target shared aclocal directory before the install.  For  
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # cp -p /usr/share/aclocal/*.m4 {...}/share/aclocal-1.10/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, do the automake install to update the macros that automake  
</span><br>
<span class="quotelev1">&gt; installs.
</span><br>
<span class="quotelev1">&gt; Installing a version of libtool to incorporate your version of  
</span><br>
<span class="quotelev1">&gt; automake
</span><br>
<span class="quotelev1">&gt; should work for the current issue.  However, it is not a general  
</span><br>
<span class="quotelev1">&gt; solution,
</span><br>
<span class="quotelev1">&gt; because there are other macros that may be missing.
</span><br>
<span class="quotelev1">&gt; -- Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Tim Mattox
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, August 27, 2009 10:22 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] build problem, autogen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt; That FAQ entry is correct.. except that soon we won't need a C++  
</span><br>
<span class="quotelev1">&gt; compiler :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, *IF* you want to run autogen.sh, you need recent
</span><br>
<span class="quotelev1">&gt; versions of all four gnu autotool dependencies:
</span><br>
<span class="quotelev1">&gt; m4, autoconf, automake, and libtool
</span><br>
<span class="quotelev1">&gt; as described here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if you are using a nightly tarball or a release
</span><br>
<span class="quotelev1">&gt; tarball, you should not need to (nor want to!) run autogen.sh,
</span><br>
<span class="quotelev1">&gt; and can just do the usual:
</span><br>
<span class="quotelev1">&gt; &quot;./configure --pile-of-options; make; make install&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 27, 2009 at 9:45 PM, Eugene Loh&lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Don't forget to also install a recent gnu libtool.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lemme see:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#build-tools">http://www.open-mpi.org/faq/?category=building#build-tools</a> says:  
</span><br>
<span class="quotelev1">&gt; &quot;If you are
</span><br>
<span class="quotelev2">&gt; &gt; building Open MPI from a tarball, you need a C compiler, a C++  
</span><br>
<span class="quotelev1">&gt; compiler, and
</span><br>
<span class="quotelev2">&gt; &gt; make... You do not need any special version of the GNU &quot;Auto&quot; tools
</span><br>
<span class="quotelev2">&gt; &gt; (Autoconf, Automake, Libtool).&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, that presumably means I *should* be okay.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For what it's worth, I can no longer find the places that led me  
</span><br>
<span class="quotelev1">&gt; to believe
</span><br>
<span class="quotelev2">&gt; &gt; that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *) I needed the versions of the tools (m4, autoconf, automake)  
</span><br>
<span class="quotelev1">&gt; that I picked
</span><br>
<span class="quotelev2">&gt; &gt; up.
</span><br>
<span class="quotelev2">&gt; &gt; *) I did not need libtool since OMPI had its own, hacked up version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but those were the assumptions I operated under.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Thursday, August 27, 2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Don't you need a rehash in your script to make sure it picks up  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; newly-installed autotools?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good point.  I'm a dummy about these things.  Assuming I know how  
</span><br>
<span class="quotelev1">&gt; to fix
</span><br>
<span class="quotelev2">&gt; &gt; what you're saying, I inserted a &quot;rehash&quot; in my script after &quot;make  
</span><br>
<span class="quotelev1">&gt; install&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; but still got the same problem.  That is, the relevent part of the  
</span><br>
<span class="quotelev1">&gt; script
</span><br>
<span class="quotelev2">&gt; &gt; now says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev2">&gt; &gt;  bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt;  tar xf  $PACKAGE.tar
</span><br>
<span class="quotelev2">&gt; &gt;  pushd   $PACKAGE
</span><br>
<span class="quotelev2">&gt; &gt;   ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev2">&gt; &gt;   make
</span><br>
<span class="quotelev2">&gt; &gt;   make install
</span><br>
<span class="quotelev2">&gt; &gt;  popd
</span><br>
<span class="quotelev2">&gt; &gt;  rehash
</span><br>
<span class="quotelev2">&gt; &gt; end
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; tar xf  openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev2">&gt; &gt; pushd   openmpi-1.4a1r20984
</span><br>
<span class="quotelev2">&gt; &gt;  ./autogen.sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the end of the log file still says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt; &gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev2">&gt; &gt; [Running] aclocal
</span><br>
<span class="quotelev2">&gt; &gt; configure.in:2123: warning: macro `AM_PROG_LIBTOOL' not found in  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt; &gt; configure.in:2126: error: possibly undefined macro: AM_PROG_LIBTOOL
</span><br>
<span class="quotelev2">&gt; &gt;     If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt; &gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt; &gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Error running autogen.sh -l in romio.  Aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Aug 27, 2009, at 4:48 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm having a build problem.  I want to be able to build on all  
</span><br>
<span class="quotelev1">&gt; sorts of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; different machines and don't always know that the right versions  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; various tools will be available.  So, I drag them around with  
</span><br>
<span class="quotelev1">&gt; me.  So,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; e.g., I have these tarballs:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; autoconf-2.63.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; automake-1.10.2.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; m4-1.4.13.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; After building the other tools, I start autogen on OMPI and get  
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [Running] aclocal
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://configure.in:2123">http://configure.in:2123</a>: warning: macro `AM_PROG_LIBTOOL' not  
</span><br>
<span class="quotelev1">&gt; found in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; library
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://configure.in:2126">http://configure.in:2126</a>: error: possibly undefined macro:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; AM_PROG_LIBTOOL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     If this token and others are legitimate, please use  
</span><br>
<span class="quotelev1">&gt; m4_pattern_allow.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Error running autogen.sh -l in romio.  Aborting.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What's up?  This is SuSE with GCC.  Run script and log file  
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #!/bin/csh -x
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ls
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pwd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; set INSTALLDIR = `pwd`/myopt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bunzip2 $PACKAGE.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tar xf  $PACKAGE.tar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pushd   $PACKAGE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  ./configure --prefix=$INSTALLDIR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  make
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; popd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; end
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bunzip2 openmpi-1.4a1r20984.tar.bz2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tar xf  openmpi-1.4a1r20984.tar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; pushd   openmpi-1.4a1r20984
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # ./configure                         \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #   --disable-visibility              \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #   --prefix=$INSTALLDIR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # make
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; popd
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ls
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<li><strong>In reply to:</strong> <a href="6737.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6735.php">Jeff Squyres: "Re: [OMPI devel] build problem, autogen"</a>
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
