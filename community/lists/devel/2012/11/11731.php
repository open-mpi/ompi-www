<?
$subject_val = "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 09:11:47 2012" -->
<!-- isoreceived="20121101131147" -->
<!-- sent="Thu, 1 Nov 2012 09:11:41 -0400" -->
<!-- isosent="20121101131141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball" -->
<!-- id="999AFD3F-8D06-4097-918D-CF775851C0B1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 09:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11730.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like this was already fixed in the trunk; I'm guessing there was a forgotten CMR to the v1.6 branch somewhere along the way.
<br>
<p>I've now fixed it in the v1.6 branch; this fix will be in the nightly tarballs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/27553">https://svn.open-mpi.org/trac/ompi/changeset/27553</a>
<br>
<p>I'll CMR this to the v1.7 branch.
<br>
<p>Since this type of error comes up periodically (i.e., someone has a legitimate reason to run autogen in a distribution tarball, only to find out that there's an autogen-required file missing from the tarball), I've added &quot;run autogen&quot; to Cisco's nightly Open MPI regression testing.
<br>
<p>To anyone running MTT who also wants to test autogen on nightly tarballs, you can add
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi_autogen = 1
<br>
<p>to your MTT OMPI &quot;MPI Install&quot; section.
<br>
<p><p><p>On Oct 31, 2012, at 5:15 PM, David Shrader wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the reply! All of the autotools I am using have the same or higher versions than those specified at <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>. I referenced the specific versions at the end of my initial email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some digging on the svn branch and some help from Nathan Hjelm, I found and checked out ompi/mca/io/romio/romio/autogen.sh. If I put this file in the same location inside the tarball contents, romio is not broken by running the top-level autogen.sh. I am still using the same versions of autotools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the reminder on not needing to run autogen.sh on the tarball version. Unfortunately, we're doing some modifications to the romio Makefile.am files to add another MPI-IO type and want to test against Open MPI releases. Hence, we have to regenerate all the configure scripts and Makefile.in files by running autogen.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, thank you all for your time!
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/31/2012 02:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We've seen this before - it's caused by using autotools that are too old. Please look at the HACKING file to see the required version levels.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW: you should not be running autogen.sh on a tarball version. You should only run configure.
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
<span class="quotelev3">&gt;&gt;&gt; When using Open MPI from the 1.6.3 tarball, I have found that running the top-level autogen.sh breaks the romio component. Here are the steps to reproduce:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) download openmpi-1.6.3.tar.bz2 from <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
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
<span class="quotelev3">&gt;&gt;&gt; configure: running /bin/sh './configure'  CFLAGS=&quot;-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread&quot; CPPFLAGS=&quot; -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband&quot; FFLAGS=&quot;&quot; LDFLAGS=&quot; &quot; --enable-shared --disable-static   --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuring with args CFLAGS=-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread CPPFLAGS= -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband FFLAGS= LDFLAGS=  --enable-shared --disable-static --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
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
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 7908: `    PAC_FUNC_NEEDS_DECL(#include &lt;string.h&gt;,strdup)'
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
<span class="quotelev3">&gt;&gt;&gt; None of the MPI/IO components work, including ufs, if I continue with a 'make' and 'make install'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Judging from the output from configure and a quick perusal of romio's configure script, it looks like some macros are not being correctly expanded in the creation of romio's configure script.
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
<span class="quotelev3">&gt;&gt;&gt; I have not yet submitted this as a Trac item on svn.open-mpi.org. I wasn't sure what to put in the &quot;Version&quot; field as 1.6.3 wasn't listed there and I don't know if this is an issue in the 1.6 branch.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; SICORP, Inc
</span><br>
<span class="quotelev1">&gt; 1350 Central Ave
</span><br>
<span class="quotelev1">&gt; Suite 104
</span><br>
<span class="quotelev1">&gt; Los Alamos, NM 87544
</span><br>
<span class="quotelev1">&gt; David.Shrader_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LANL contact information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LANL #: 505-664-0996
</span><br>
<span class="quotelev1">&gt; LANL email: dshrader_at_[hidden]
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
<li><strong>Next message:</strong> <a href="11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11730.php">Kenneth A. Lloyd: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
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
