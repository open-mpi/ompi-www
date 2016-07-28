<?
$subject_val = "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 16:46:50 2012" -->
<!-- isoreceived="20121031204650" -->
<!-- sent="Wed, 31 Oct 2012 13:46:44 -0700" -->
<!-- isosent="20121031204644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball" -->
<!-- id="39534D43-EB9D-4EE4-96F4-68AFAAABA7BE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50918AB2.7050402_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 16:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've seen this before - it's caused by using autotools that are too old. Please look at the HACKING file to see the required version levels.
<br>
<p>BTW: you should not be running autogen.sh on a tarball version. You should only run configure.
<br>
<p><p>On Oct 31, 2012, at 1:31 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using Open MPI from the 1.6.3 tarball, I have found that running the top-level autogen.sh breaks the romio component. Here are the steps to reproduce:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) download openmpi-1.6.3.tar.bz2 from <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 2) untar openmpi-1.6.3.tar.bz2
</span><br>
<span class="quotelev1">&gt; 3) cd openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt; 4) ./autogen.sh
</span><br>
<span class="quotelev1">&gt; 5) ./configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In configure's output, the following error can be seen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Configuring ROMIO distribution
</span><br>
<span class="quotelev1">&gt; configure: OMPI configuring in ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt; configure: running /bin/sh './configure'  CFLAGS=&quot;-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread&quot; CPPFLAGS=&quot; -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband&quot; FFLAGS=&quot;&quot; LDFLAGS=&quot; &quot; --enable-shared --disable-static   --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev1">&gt; Configuring with args CFLAGS=-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread CPPFLAGS= -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband FFLAGS= LDFLAGS=  --enable-shared --disable-static --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev1">&gt; checking for Open MPI support files... in Open MPI source tree -- good
</span><br>
<span class="quotelev1">&gt; ./configure: line 2805: PAC_PROG_MAKE: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure: line 7908: syntax error near unexpected token `newline'
</span><br>
<span class="quotelev1">&gt; ./configure: line 7908: `    PAC_FUNC_NEEDS_DECL(#include &lt;string.h&gt;,strdup)'
</span><br>
<span class="quotelev1">&gt; configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt; configure: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev1">&gt; checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...remaining output snipped...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None of the MPI/IO components work, including ufs, if I continue with a 'make' and 'make install'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Judging from the output from configure and a quick perusal of romio's configure script, it looks like some macros are not being correctly expanded in the creation of romio's configure script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For reference, here are the versions of my autotools:
</span><br>
<span class="quotelev1">&gt; m4: 1.4.16
</span><br>
<span class="quotelev1">&gt; autoconf: 2.69
</span><br>
<span class="quotelev1">&gt; automake: 1.11.5
</span><br>
<span class="quotelev1">&gt; libtool: 2.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not yet submitted this as a Trac item on svn.open-mpi.org. I wasn't sure what to put in the &quot;Version&quot; field as 1.6.3 wasn't listed there and I don't know if this is an issue in the 1.6 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your time,
</span><br>
<span class="quotelev1">&gt; David
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11726.php">David Shrader: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
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
