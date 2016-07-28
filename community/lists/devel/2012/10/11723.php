<?
$subject_val = "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 16:31:50 2012" -->
<!-- isoreceived="20121031203150" -->
<!-- sent="Wed, 31 Oct 2012 14:31:46 -0600" -->
<!-- isosent="20121031203146" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball" -->
<!-- id="50918AB2.7050402_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 16:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When using Open MPI from the 1.6.3 tarball, I have found that running 
<br>
the top-level autogen.sh breaks the romio component. Here are the steps 
<br>
to reproduce:
<br>
<p>1) download openmpi-1.6.3.tar.bz2 from 
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
2) untar openmpi-1.6.3.tar.bz2
<br>
3) cd openmpi-1.6.3
<br>
4) ./autogen.sh
<br>
5) ./configure
<br>
<p>In configure's output, the following error can be seen:
<br>
<p>...output snipped...
<br>
<p>*** Configuring ROMIO distribution
<br>
configure: OMPI configuring in ompi/mca/io/romio/romio
<br>
configure: running /bin/sh './configure'  CFLAGS=&quot;-DNDEBUG -g -O2 
<br>
-finline-functions -fno-strict-aliasing -pthread&quot; CPPFLAGS=&quot; 
<br>
-I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband 
<br>
-I/usr/include/infiniband&quot; FFLAGS=&quot;&quot; LDFLAGS=&quot; &quot; --enable-shared 
<br>
--disable-static   --with-mpi=open_mpi --disable-aio 
<br>
--cache-file=/dev/null --srcdir=. --disable-option-checking
<br>
Configuring with args CFLAGS=-DNDEBUG -g -O2 -finline-functions 
<br>
-fno-strict-aliasing -pthread CPPFLAGS= 
<br>
-I/users/dshrader/tmp/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include -I/usr/include/infiniband 
<br>
-I/usr/include/infiniband FFLAGS= LDFLAGS=  --enable-shared 
<br>
--disable-static --with-mpi=open_mpi --disable-aio 
<br>
--cache-file=/dev/null --srcdir=. --disable-option-checking
<br>
checking for Open MPI support files... in Open MPI source tree -- good
<br>
./configure: line 2805: PAC_PROG_MAKE: command not found
<br>
<p>...output snipped...
<br>
<p>./configure: line 7908: syntax error near unexpected token `newline'
<br>
./configure: line 7908: `    PAC_FUNC_NEEDS_DECL(#include 
<br>
&lt;string.h&gt;,strdup)'
<br>
configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
<br>
configure: WARNING: ROMIO distribution did not configure successfully
<br>
checking if MCA component io:romio can compile... no
<br>
<p>...remaining output snipped...
<br>
<p>None of the MPI/IO components work, including ufs, if I continue with a 
<br>
'make' and 'make install'.
<br>
<p>Judging from the output from configure and a quick perusal of romio's 
<br>
configure script, it looks like some macros are not being correctly 
<br>
expanded in the creation of romio's configure script.
<br>
<p>For reference, here are the versions of my autotools:
<br>
m4: 1.4.16
<br>
autoconf: 2.69
<br>
automake: 1.11.5
<br>
libtool: 2.4.2
<br>
<p>I have not yet submitted this as a Trac item on svn.open-mpi.org. I 
<br>
wasn't sure what to put in the &quot;Version&quot; field as 1.6.3 wasn't listed 
<br>
there and I don't know if this is an issue in the 1.6 branch.
<br>
<p>Thank you very much for your time,
<br>
David
<br>
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
<li><strong>Next message:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11722.php">Paul Kapinos: "[OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Reply:</strong> <a href="11724.php">Ralph Castain: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
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
