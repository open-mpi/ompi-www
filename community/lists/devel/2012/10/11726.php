<?
$subject_val = "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 17:15:33 2012" -->
<!-- isoreceived="20121031211533" -->
<!-- sent="Wed, 31 Oct 2012 15:15:29 -0600" -->
<!-- isosent="20121031211529" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball" -->
<!-- id="509194F1.2070809_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="39534D43-EB9D-4EE4-96F4-68AFAAABA7BE_at_open-mpi.org" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 17:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Previous message:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thank you for the reply! All of the autotools I am using have the same 
<br>
or higher versions than those specified at 
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>. I referenced the specific 
<br>
versions at the end of my initial email.
<br>
<p>After some digging on the svn branch and some help from Nathan Hjelm, I 
<br>
found and checked out ompi/mca/io/romio/romio/autogen.sh. If I put this 
<br>
file in the same location inside the tarball contents, romio is not 
<br>
broken by running the top-level autogen.sh. I am still using the same 
<br>
versions of autotools.
<br>
<p>Thank you for the reminder on not needing to run autogen.sh on the 
<br>
tarball version. Unfortunately, we're doing some modifications to the 
<br>
romio Makefile.am files to add another MPI-IO type and want to test 
<br>
against Open MPI releases. Hence, we have to regenerate all the 
<br>
configure scripts and Makefile.in files by running autogen.sh.
<br>
<p>Again, thank you all for your time!
<br>
David
<br>
<p>On 10/31/2012 02:46 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; We've seen this before - it's caused by using autotools that are too old. Please look at the HACKING file to see the required version levels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: you should not be running autogen.sh on a tarball version. You should only run configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2012, at 1:31 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When using Open MPI from the 1.6.3 tarball, I have found that running the top-level autogen.sh breaks the romio component. Here are the steps to reproduce:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) download openmpi-1.6.3.tar.bz2 from <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 2) untar openmpi-1.6.3.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; 3) cd openmpi-1.6.3
</span><br>
<span class="quotelev2">&gt;&gt; 4) ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; 5) ./configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In configure's output, the following error can be seen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Configuring ROMIO distribution
</span><br>
<span class="quotelev2">&gt;&gt; configure: OMPI configuring in ompi/mca/io/romio/romio
</span><br>
<span class="quotelev2">&gt;&gt; configure: running /bin/sh './configure'  CFLAGS=&quot;-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread&quot; CPPFLAGS=&quot; -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband&quot; FFLAGS=&quot;&quot; LDFLAGS=&quot; &quot; --enable-shared --disable-static   --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev2">&gt;&gt; Configuring with args CFLAGS=-DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread CPPFLAGS= -I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband -I/usr/include/infiniband FFLAGS= LDFLAGS=  --enable-shared --disable-static --with-mpi=open_mpi --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev2">&gt;&gt; checking for Open MPI support files... in Open MPI source tree -- good
</span><br>
<span class="quotelev2">&gt;&gt; ./configure: line 2805: PAC_PROG_MAKE: command not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure: line 7908: syntax error near unexpected token `newline'
</span><br>
<span class="quotelev2">&gt;&gt; ./configure: line 7908: `    PAC_FUNC_NEEDS_DECL(#include &lt;string.h&gt;,strdup)'
</span><br>
<span class="quotelev2">&gt;&gt; configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev2">&gt;&gt; checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...remaining output snipped...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; None of the MPI/IO components work, including ufs, if I continue with a 'make' and 'make install'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Judging from the output from configure and a quick perusal of romio's configure script, it looks like some macros are not being correctly expanded in the creation of romio's configure script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For reference, here are the versions of my autotools:
</span><br>
<span class="quotelev2">&gt;&gt; m4: 1.4.16
</span><br>
<span class="quotelev2">&gt;&gt; autoconf: 2.69
</span><br>
<span class="quotelev2">&gt;&gt; automake: 1.11.5
</span><br>
<span class="quotelev2">&gt;&gt; libtool: 2.4.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not yet submitted this as a Trac item on svn.open-mpi.org. I wasn't sure what to put in the &quot;Version&quot; field as 1.6.3 wasn't listed there and I don't know if this is an issue in the 1.6 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your time,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt; SICORP, Inc
</span><br>
<span class="quotelev2">&gt;&gt; 1350 Central Ave
</span><br>
<span class="quotelev2">&gt;&gt; Suite 104
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos, NM 87544
</span><br>
<span class="quotelev2">&gt;&gt; David.Shrader_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LANL contact information:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LANL #: 505-664-0996
</span><br>
<span class="quotelev2">&gt;&gt; LANL email: dshrader_at_[hidden]
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
David Shrader
SICORP, Inc
1350 Central Ave
Suite 104
Los Alamos, NM 87544
David.Shrader_at_[hidden]
LANL contact information:
LANL #: 505-664-0996
LANL email: dshrader_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11727.php">George Bosilca: "Re: [OMPI devel] [patch]There are some collective communications that terminates abnormally when　MPI_IN_PLACE is specified."</a>
<li><strong>Previous message:</strong> <a href="11725.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>In reply to:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11732.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
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
