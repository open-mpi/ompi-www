<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 17:38:08 2006" -->
<!-- isoreceived="20061205223808" -->
<!-- sent="Tue, 5 Dec 2006 16:37:58 -0600 (CST)" -->
<!-- isosent="20061205223758" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPE build failure" -->
<!-- id="Pine.LNX.4.58.0612051452160.20325_at_schwinn.mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2D7646C6-489F-49B6-96F3-6E806FB558A8_at_zymeworks.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 17:37:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 5 Dec 2006, Ryan Thompson wrote:
<br>
<p><span class="quotelev1">&gt; I'm attempting to build MPE without success. When I try to make it, I
</span><br>
<span class="quotelev1">&gt; recieve the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; trace_input.c:23:23: error: trace_API.h: No such file or directory
</span><br>
<p>I just built the related mpe2's subpackage, slog2sdk, on a AMD64 (Ubuntu
<br>
6.06.1) with gcc-4.0 and I don't see the strange errors that you
<br>
observed...   I put the latest mpe2 on our ftp server:
<br>
<p><a href="ftp://ftp.mcs.anl.gov/pub/mpi/mpe/beta/mpe2-1.0.5b2.tar.gz">ftp://ftp.mcs.anl.gov/pub/mpi/mpe/beta/mpe2-1.0.5b2.tar.gz</a>
<br>
<p>which contains various bugfixes over mpe2-1.0.4. I have tested
<br>
mpe2-1.0.5b2 with the openmpi-1.1.2 on an IA32 linux box, everything seems
<br>
working fine.
<br>
<p><span class="quotelev1">&gt; Where is this file supposed to come from?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my configure arguments...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; JAVA=&quot;/opt/sun-jdk-1.5.0.08&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/mpe \
</span><br>
<span class="quotelev1">&gt; --sharedstatedir=/var/mpe \
</span><br>
<span class="quotelev1">&gt; --localstatedir=/com/mpe \
</span><br>
<span class="quotelev1">&gt; --enable-misc=yes \
</span><br>
<span class="quotelev1">&gt; --enable-logging=yes \
</span><br>
<span class="quotelev1">&gt; --enable-f77=no \
</span><br>
<span class="quotelev1">&gt; --enable-wrappers=yes \
</span><br>
<span class="quotelev1">&gt; --enable-slog2=build \
</span><br>
<span class="quotelev1">&gt; --enable-collchk=no \
</span><br>
<span class="quotelev1">&gt; --enable-graphics=no \
</span><br>
<span class="quotelev1">&gt; --with-mpicc=&quot;/opt/openmpi/bin/mpicc&quot; \
</span><br>
<span class="quotelev1">&gt; --with-mpiinc=&quot;-I/opt/openmpi/include&quot; \
</span><br>
<span class="quotelev1">&gt; --with-mpilibs=&quot;-L/opt/openmpi/lib&quot; \
</span><br>
<span class="quotelev1">&gt; --includedir=$JAVA/include \
</span><br>
<span class="quotelev1">&gt; --with-java=$JAVA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>mpe2 does not use sharedstatedir and localstatedir, so you don't need
<br>
to specify --sharedstatedir and --localstatedir.  The only configure
<br>
option I see problem is --includedir=$JAVA/include which will force
<br>
mpe2 to install mpe include files to /opt/sun-jdk-1.5.0.08/include.
<br>
I believe it is a mistake.
<br>
<p>FYI: here is my configure command to build mpe2 for openmpi:
<br>
<p>mkdir &lt;build_mpe24openmpi&gt;
<br>
cd &lt;build_mpe24openmpi&gt;
<br>
&lt;mpe2-1.0.5b2&gt;/configure CC=&lt;C compiler to build openmpi&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=&lt;Fortran compiler to build openmpi&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CC=&lt;openmpi-install-dir&gt;/bin/mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_F77=&lt;openmpi-install-dir&gt;/bin/mpif90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-java=/opt/sun-jdk-1.5.0.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/opt/mpe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPERUN=&quot;&lt;openmpi-install-dir&gt;/bin/mpiexec -n 4&quot;
<br>
make
<br>
make install
<br>
make installcheck-all
<br>
<p>If you don't need fortran support, don't use F77 and MPI_F77 and add
<br>
--disable-f77.  The configure option MPERUN=&quot;...&quot; and
<br>
&quot;make installcheck-all&quot; enable a series of tests for the typical features
<br>
of MPE2.  Let me know if you see any problem.  If you do, send me the
<br>
configure output as seen on your screen (not config.log), i.e. c.txt from
<br>
the following command
<br>
<p>With csh-like shell
<br>
configure .... |&amp; tee c.txt
<br>
<p>or
<br>
<p>With bourne-like shell
<br>
configure ... | tee c.txt 2&gt;&amp;1
<br>
<p>A.Chan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2302.php">Brock Palen: "[OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2301.php">Ryan Thompson: "[OMPI users] OpenMPE build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
<li><strong>Reply:</strong> <a href="2315.php">Ryan Thompson: "Re: [OMPI users] OpenMPE build failure"</a>
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
