<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 10:06:04 2012" -->
<!-- isoreceived="20121101140604" -->
<!-- sent="Thu, 1 Nov 2012 14:05:33 +0000" -->
<!-- isosent="20121101140533" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239DCF8D_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="509194F1.2070809_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 10:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David -
<br>
<p>Thanks for the bug report; the missing file will be in the tarball of the
<br>
next release.
<br>
<p>Brian
<br>
<p>On 10/31/12 3:15 PM, &quot;David Shrader&quot; &lt;dshrader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you for the reply! All of the autotools I am using have the same
</span><br>
<span class="quotelev1">&gt;or higher versions than those specified at
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>. I referenced the specific
</span><br>
<span class="quotelev1">&gt;versions at the end of my initial email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After some digging on the svn branch and some help from Nathan Hjelm, I
</span><br>
<span class="quotelev1">&gt;found and checked out ompi/mca/io/romio/romio/autogen.sh. If I put this
</span><br>
<span class="quotelev1">&gt;file in the same location inside the tarball contents, romio is not
</span><br>
<span class="quotelev1">&gt;broken by running the top-level autogen.sh. I am still using the same
</span><br>
<span class="quotelev1">&gt;versions of autotools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you for the reminder on not needing to run autogen.sh on the
</span><br>
<span class="quotelev1">&gt;tarball version. Unfortunately, we're doing some modifications to the
</span><br>
<span class="quotelev1">&gt;romio Makefile.am files to add another MPI-IO type and want to test
</span><br>
<span class="quotelev1">&gt;against Open MPI releases. Hence, we have to regenerate all the
</span><br>
<span class="quotelev1">&gt;configure scripts and Makefile.in files by running autogen.sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Again, thank you all for your time!
</span><br>
<span class="quotelev1">&gt;David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 10/31/2012 02:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We've seen this before - it's caused by using autotools that are too
</span><br>
<span class="quotelev2">&gt;&gt;old. Please look at the HACKING file to see the required version levels.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW: you should not be running autogen.sh on a tarball version. You
</span><br>
<span class="quotelev2">&gt;&gt;should only run configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2012, at 1:31 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using Open MPI from the 1.6.3 tarball, I have found that running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the top-level autogen.sh breaks the romio component. Here are the steps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to reproduce:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) download openmpi-1.6.3.tar.bz2 from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) untar openmpi-1.6.3.tar.bz2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) cd openmpi-1.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In configure's output, the following error can be seen:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Configuring ROMIO distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: OMPI configuring in ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: running /bin/sh './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-finline-functions -fno-strict-aliasing -pthread&quot; CPPFLAGS=&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/includ
</span><br>
<span class="quotelev3">&gt;&gt;&gt;e -I/usr/include/infiniband -I/usr/include/infiniband&quot; FFLAGS=&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;LDFLAGS=&quot; &quot; --enable-shared --disable-static   --with-mpi=open_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--disable-aio --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--disable-option-checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuring with args CFLAGS=-DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-fno-strict-aliasing -pthread CPPFLAGS=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/includ
</span><br>
<span class="quotelev3">&gt;&gt;&gt;e -I/usr/include/infiniband -I/usr/include/infiniband FFLAGS= LDFLAGS=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--enable-shared --disable-static --with-mpi=open_mpi --disable-aio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for Open MPI support files... in Open MPI source tree -- good
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 2805: PAC_PROG_MAKE: command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 7908: syntax error near unexpected token `newline'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 7908: `    PAC_FUNC_NEEDS_DECL(#include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&lt;string.h&gt;,strdup)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...remaining output snipped...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None of the MPI/IO components work, including ufs, if I continue with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a 'make' and 'make install'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Judging from the output from configure and a quick perusal of romio's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;configure script, it looks like some macros are not being correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;expanded in the creation of romio's configure script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For reference, here are the versions of my autotools:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4: 1.4.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoconf: 2.69
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automake: 1.11.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: 2.4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have not yet submitted this as a Trac item on svn.open-mpi.org. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;wasn't sure what to put in the &quot;Version&quot; field as 1.6.3 wasn't listed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;there and I don't know if this is an issue in the 1.6 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for your time,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Shrader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SICORP, Inc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1350 Central Ave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Suite 104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos, NM 87544
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David.Shrader_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LANL contact information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LANL #: 505-664-0996
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LANL email: dshrader_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;David Shrader
</span><br>
<span class="quotelev1">&gt;SICORP, Inc
</span><br>
<span class="quotelev1">&gt;1350 Central Ave
</span><br>
<span class="quotelev1">&gt;Suite 104
</span><br>
<span class="quotelev1">&gt;Los Alamos, NM 87544
</span><br>
<span class="quotelev1">&gt;David.Shrader_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;LANL contact information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;LANL #: 505-664-0996
</span><br>
<span class="quotelev1">&gt;LANL email: dshrader_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11733.php">David Shrader: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
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
