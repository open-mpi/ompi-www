<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  9 14:36:34 2007" -->
<!-- isoreceived="20070409183634" -->
<!-- sent="Mon, 9 Apr 2007 12:36:16 -0600" -->
<!-- isosent="20070409183616" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Apple cluster OpenMPI build problems" -->
<!-- id="2BE7C3E2-2336-4912-A78E-96473B9C7D56_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY134-DAV1734900A115F24688A9576B0640_at_phx.gbl" -->
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
<strong>Date:</strong> 2007-04-09 14:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Maybe in reply to:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Reply:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2007, at 7:22 AM, Werner Van Geit wrote:
<br>
<p><span class="quotelev1">&gt; In our lab we are installing OpenMPI onto our Apple cluster  
</span><br>
<span class="quotelev1">&gt; computer. The
</span><br>
<span class="quotelev1">&gt; cluster contains a couple of PowerPC G5 nodes and the new Intel Xeon
</span><br>
<span class="quotelev1">&gt; Xserves, all with a clean install of Mac OS X Server 10.4.8 , Xcode  
</span><br>
<span class="quotelev1">&gt; 2.4.1
</span><br>
<span class="quotelev1">&gt; and Sun Grid Engine 6 (so we're not using XGrid). Since we want to  
</span><br>
<span class="quotelev1">&gt; make it 1
</span><br>
<span class="quotelev1">&gt; big cluster, we need Universal Binaries of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been using the script buildpackage.sh available from the
</span><br>
<span class="quotelev1">&gt; contrib/dist/macosx-pkg from the openmpi-1.2.tar.gz file. If we run  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; script on an Intel machine, we get fat binaries (checked this with the
</span><br>
<span class="quotelev1">&gt; command line &quot;file&quot; command) that run on the Intel machine (we used
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info&quot; as the test), but not on the G5 machines. While running
</span><br>
<span class="quotelev1">&gt; ompi_info) we get an error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dyld: Symbol not found: _lt_libltdlc_LTX_preloaded_symbols
</span><br>
<span class="quotelev1">&gt;   Referenced from: /tmp/werner/mpi/lib/libopen-pal.0.dylib
</span><br>
<span class="quotelev1">&gt;   Expected in: flat namespace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trace/BPT trap
</span><br>
<p>I've managed to track this down a little, and there is definitely  
<br>
something wrong with the build of libltdl when we cross-compile on  
<br>
Darwin.  I've looked a little bit, but haven't had any great success  
<br>
in determining what is going on.  I'm going to start working with the  
<br>
Libtool developers to try to sort this one out, but it might take  
<br>
some time.  In the mean time, you can build with either static or  
<br>
shared libraries, but disabling the dlopen() code with the argument -- 
<br>
disable-dlopen (which you already discovered).  Using shared  
<br>
libraries instead of static should still work for you, but make  
<br>
adding interconnects or rebuilding Open MPI a bit easier on your users.
<br>
<p>I've filed a bug in Trac for the problem.  You should get updates on  
<br>
the bug via e-mail and anyone else can follow along at:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/980">https://svn.open-mpi.org/trac/ompi/ticket/980</a>
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Previous message:</strong> <a href="3046.php">Brian Powell: "Re: [OMPI users] OpenMPI 1.2 on MacOSX Intel Fails"</a>
<li><strong>Maybe in reply to:</strong> <a href="3034.php">Werner Van Geit: "[OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
<li><strong>Reply:</strong> <a href="3048.php">Brian Barrett: "Re: [OMPI users] Mixed Apple cluster OpenMPI build problems"</a>
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
