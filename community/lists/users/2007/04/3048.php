<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  9 17:35:24 2007" -->
<!-- isoreceived="20070409213524" -->
<!-- sent="Mon, 9 Apr 2007 15:35:01 -0600" -->
<!-- isosent="20070409213501" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Apple cluster OpenMPI build problems" -->
<!-- id="E79EB3F6-DF9C-4525-B776-BA5871319BE6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2BE7C3E2-2336-4912-A78E-96473B9C7D56_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-09 17:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>In reply to:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 9, 2007, at 12:36 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 6, 2007, at 7:22 AM, Werner Van Geit wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our lab we are installing OpenMPI onto our Apple cluster  
</span><br>
<span class="quotelev2">&gt;&gt; computer. The cluster contains a couple of PowerPC G5 nodes and  
</span><br>
<span class="quotelev2">&gt;&gt; the new Intel Xeon Xserves, all with a clean install of Mac OS X  
</span><br>
<span class="quotelev2">&gt;&gt; Server 10.4.8 , Xcode 2.4.1 and Sun Grid Engine 6 (so we're not  
</span><br>
<span class="quotelev2">&gt;&gt; using XGrid). Since we want to make it 1 big cluster, we need  
</span><br>
<span class="quotelev2">&gt;&gt; Universal Binaries of OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been using the script buildpackage.sh available from the  
</span><br>
<span class="quotelev2">&gt;&gt; contrib/dist/macosx-pkg from the openmpi-1.2.tar.gz file. If we  
</span><br>
<span class="quotelev2">&gt;&gt; run this script on an Intel machine, we get fat binaries (checked  
</span><br>
<span class="quotelev2">&gt;&gt; this with the command line &quot;file&quot; command) that run on the Intel  
</span><br>
<span class="quotelev2">&gt;&gt; machine (we used &quot;ompi_info&quot; as the test), but not on the G5  
</span><br>
<span class="quotelev2">&gt;&gt; machines. While running ompi_info) we get an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dyld: Symbol not found: _lt_libltdlc_LTX_preloaded_symbols
</span><br>
<span class="quotelev2">&gt;&gt;   Referenced from: /tmp/werner/mpi/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev2">&gt;&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trace/BPT trap
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've managed to track this down a little, and there is definitely  
</span><br>
<span class="quotelev1">&gt; something wrong with the build of libltdl when we cross-compile on  
</span><br>
<span class="quotelev1">&gt; Darwin.  I've looked a little bit, but haven't had any great  
</span><br>
<span class="quotelev1">&gt; success in determining what is going on.  I'm going to start  
</span><br>
<span class="quotelev1">&gt; working with the Libtool developers to try to sort this one out,  
</span><br>
<span class="quotelev1">&gt; but it might take some time.  In the mean time, you can build with  
</span><br>
<span class="quotelev1">&gt; either static or shared libraries, but disabling the dlopen() code  
</span><br>
<span class="quotelev1">&gt; with the argument --disable-dlopen (which you already discovered).   
</span><br>
<span class="quotelev1">&gt; Using shared libraries instead of static should still work for you,  
</span><br>
<span class="quotelev1">&gt; but make adding interconnects or rebuilding Open MPI a bit easier  
</span><br>
<span class="quotelev1">&gt; on your users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've filed a bug in Trac for the problem.  You should get updates  
</span><br>
<span class="quotelev1">&gt; on the bug via e-mail and anyone else can follow along at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/980">https://svn.open-mpi.org/trac/ompi/ticket/980</a>
</span><br>
<p>A little digging and I've found the problem.  When building for  
<br>
architectures other than the build host (which is always either ppc  
<br>
or i386), Autoconf believes that we are cross-compiling.  It really  
<br>
wants to prepend the target architecture to programs like gcc, g++,  
<br>
nm, ranlib, etc.  It will generally figure out not to do that (since  
<br>
the system gcc is always a cross-compiler to any of the four  
<br>
platforms on OS X), but it appears that's not the case with one  
<br>
libtool test for nm.  This leads to a series of mistakes on the part  
<br>
of Libtool.  The short solution is to specify NM=&quot;nm -p&quot; when cross- 
<br>
compiling on OS X.  I've updated the build script for v1.2 here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/</a> 
<br>
macosx-pkg/buildpackage.sh?rev=14276
<br>
<p>I'll make sure the updated script is part of the v1.2.1 release.  The  
<br>
updates include some fixes to be a little smarter about what binaries  
<br>
to build and workarounds for various problems we've found in our  
<br>
x86_64 support and the NM issue.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3049.php">snj78_at_[hidden]: "[OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>In reply to:</strong> <a href="3047.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
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
