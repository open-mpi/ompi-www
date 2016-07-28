<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 16:44:02 2006" -->
<!-- isoreceived="20061206214402" -->
<!-- sent="Wed, 6 Dec 2006 13:43:23 -0800" -->
<!-- isosent="20061206214323" -->
<!-- name="Ryan Thompson" -->
<!-- email="ryan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPE build failure" -->
<!-- id="4FE68B03-A7ED-4321-98C8-D51224C15545_at_zymeworks.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0612051452160.20325_at_schwinn.mcs.anl.gov" -->
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
<strong>From:</strong> Ryan Thompson (<em>ryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 16:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Anthony,
<br>
<p>I made some progress, however, I still get the same trace_API.h  
<br>
error, although I'm not certain if it is important.
<br>
<p>It appears that the binaries are built regardless and the  
<br>
installcheck-all appears to pass on all tests.
<br>
<p>As requested, I've attached a gzip'd tarball of my configure, make,  
<br>
make install, &amp; make installcheck-all.
<br>
<p>Also, here are my configure arguments, as they appear in my 'do- 
<br>
configure' shell script...
<br>
<p># MPE do.sh
<br>
<p>JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
<br>
MPERUN=&quot;/opt/openmpi/bin/mpiexec -n 4&quot;
<br>
<p>./configure --prefix=/opt/openmpi \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-logging=yes \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-f77 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-slog2=build \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-collchk=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-graphics=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-java=$JAVA
<br>
<p>Thanks,
<br>
Ryan
<br>
<p><p>

<br><p>
<p><p><pre>
--
Ryan Thompson
HPC &amp; Systems Admin
Zymeworks, Inc.
ryan_at_[hidden]
On 5-Dec-06, at 2:37 PM, Anthony Chan wrote:
&gt;
&gt;
&gt; On Tue, 5 Dec 2006, Ryan Thompson wrote:
&gt;
&gt;&gt; I'm attempting to build MPE without success. When I try to make it, I
&gt;&gt; recieve the error:
&gt;&gt;
&gt;&gt; trace_input.c:23:23: error: trace_API.h: No such file or directory
&gt;
&gt; I just built the related mpe2's subpackage, slog2sdk, on a AMD64  
&gt; (Ubuntu
&gt; 6.06.1) with gcc-4.0 and I don't see the strange errors that you
&gt; observed...   I put the latest mpe2 on our ftp server:
&gt;
&gt; <a href="ftp://ftp.mcs.anl.gov/pub/mpi/mpe/beta/mpe2-1.0.5b2.tar.gz">ftp://ftp.mcs.anl.gov/pub/mpi/mpe/beta/mpe2-1.0.5b2.tar.gz</a>
&gt;
&gt; which contains various bugfixes over mpe2-1.0.4. I have tested
&gt; mpe2-1.0.5b2 with the openmpi-1.1.2 on an IA32 linux box,  
&gt; everything seems
&gt; working fine.
&gt;
&gt;&gt; Where is this file supposed to come from?
&gt;&gt;
&gt;&gt; Here are my configure arguments...
&gt;&gt;
&gt;&gt; JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
&gt;&gt;
&gt;&gt; ./configure --prefix=/opt/mpe \
&gt;&gt; --sharedstatedir=/var/mpe \
&gt;&gt; --localstatedir=/com/mpe \
&gt;&gt; --enable-misc=yes \
&gt;&gt; --enable-logging=yes \
&gt;&gt; --enable-f77=no \
&gt;&gt; --enable-wrappers=yes \
&gt;&gt; --enable-slog2=build \
&gt;&gt; --enable-collchk=no \
&gt;&gt; --enable-graphics=no \
&gt;&gt; --with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
&gt;&gt; --with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
&gt;&gt; --with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
&gt;&gt; --includedir=$JAVA/include \
&gt;&gt; --with-java=$JAVA
&gt;&gt;
&gt;
&gt; mpe2 does not use sharedstatedir and localstatedir, so you don't need
&gt; to specify --sharedstatedir and --localstatedir.  The only configure
&gt; option I see problem is --includedir=$JAVA/include which will force
&gt; mpe2 to install mpe include files to /opt/sun-jdk-1.5.0.08/include.
&gt; I believe it is a mistake.
&gt;
&gt; FYI: here is my configure command to build mpe2 for openmpi:
&gt;
&gt; mkdir &lt;build_mpe24openmpi&gt;
&gt; cd &lt;build_mpe24openmpi&gt;
&gt; &lt;mpe2-1.0.5b2&gt;/configure CC=&lt;C compiler to build openmpi&gt;
&gt;                          F77=&lt;Fortran compiler to build openmpi&gt;
&gt;                          MPI_CC=&lt;openmpi-install-dir&gt;/bin/mpicc
&gt;                          MPI_F77=&lt;openmpi-install-dir&gt;/bin/mpif90
&gt;                          --with-java=/opt/sun-jdk-1.5.0.08
&gt;                          --prefix=/opt/mpe
&gt;                          MPERUN=&quot;&lt;openmpi-install-dir&gt;/bin/mpiexec - 
&gt; n 4&quot;
&gt; make
&gt; make install
&gt; make installcheck-all
&gt;
&gt; If you don't need fortran support, don't use F77 and MPI_F77 and add
&gt; --disable-f77.  The configure option MPERUN=&quot;...&quot; and
&gt; &quot;make installcheck-all&quot; enable a series of tests for the typical  
&gt; features
&gt; of MPE2.  Let me know if you see any problem.  If you do, send me the
&gt; configure output as seen on your screen (not config.log), i.e.  
&gt; c.txt from
&gt; the following command
&gt;
&gt; With csh-like shell
&gt; configure .... |&amp; tee c.txt
&gt;
&gt; or
&gt;
&gt; With bourne-like shell
&gt; configure ... | tee c.txt 2&gt;&amp;1
&gt;
&gt; A.Chan
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2315/mpe_build.tgz">mpe_build.tgz</a>
</ul>
<!-- attachment="mpe_build.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Previous message:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2303.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2316.php">Anthony Chan: "Re: [OMPI users] OpenMPE build failure"</a>
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
