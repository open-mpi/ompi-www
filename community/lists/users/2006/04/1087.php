<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 17 13:43:41 2006" -->
<!-- isoreceived="20060417174341" -->
<!-- sent="Mon, 17 Apr 2006 11:43:37 -0600 (MDT)" -->
<!-- isosent="20060417174337" -->
<!-- name="Jorge Parra" -->
<!-- email="jeparra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in configuration for crosscompiler PowerPC" -->
<!-- id="Pine.LNX.4.64.0604171137390.6292_at_rhsvr03.ece.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1119C34-AB5B-4172-9EE2-A79FF4079F6F_at_open-mpi.org" -->
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
<strong>From:</strong> Jorge Parra (<em>jeparra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-17 13:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I downloaded the nightly release version 1.0.3a1r9650 and attempted to 
<br>
configure it disabling the fortran bindings for f77 and f90. However 
<br>
it gives me a new error when checking for epoll_ctlon broken Linux 
<br>
distros:
<br>
<p>configure:error: cannot run test program while cross compiling.
<br>
<p>Any inputs will be greatly appreciated. I included the outputs of the 
<br>
configuration as an attachment.
<br>
<p>Thank you,
<br>
<p>Jorge
<br>
<p><p><p>On Fri, 14 Apr 2006, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 12, 2006, at 7:19 PM, Jorge Parra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to configure openmpi-1.0.2. However it gives me an
</span><br>
<span class="quotelev2">&gt;&gt; error while running the configuration step. It stops when
</span><br>
<span class="quotelev2">&gt;&gt; trying to determine the &quot;aligment of bool&quot;. I attached the outputs
</span><br>
<span class="quotelev2">&gt;&gt; as it is suggested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The system I am using to build openmpi is an intel P4 running
</span><br>
<span class="quotelev2">&gt;&gt; RedHat Enterprise 3. I am using it to crosscompile for a
</span><br>
<span class="quotelev2">&gt;&gt; system running a power pc 405, and montavista linux 3.1 over it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that this is an issue with our configure tests with more
</span><br>
<span class="quotelev1">&gt; recent versions of GCC and cross-compiling (the error will not occur
</span><br>
<span class="quotelev1">&gt; when not cross compiling).  Fixes have been applied for all the
</span><br>
<span class="quotelev1">&gt; upcoming releases.  You can grab a nightly release from the 1.0
</span><br>
<span class="quotelev1">&gt; branch tomorrow and it should work.  The nightly tarballs can be
</span><br>
<span class="quotelev1">&gt; downloaded from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Releases from the 1.0 series will not properly cross-compile the
</span><br>
<span class="quotelev1">&gt; Fortran bindings - they must explicitly be disabled with --disable-
</span><br>
<span class="quotelev1">&gt; mpi-f77 in order for the configure script to complete.  ROMIO on the
</span><br>
<span class="quotelev1">&gt; 1.0 series has also not been tested to make sure it properly cross-
</span><br>
<span class="quotelev1">&gt; compiles.  This has been fixed for the upcoming 1.1 release, although
</span><br>
<span class="quotelev1">&gt; you will have to run an external program on the target platform in
</span><br>
<span class="quotelev1">&gt; order to generate a seed file for some of the data we need in order
</span><br>
<span class="quotelev1">&gt; to cross-compile our Fortran bindings.  We don't have documentation
</span><br>
<span class="quotelev1">&gt; on this just yet, but I can provide you with instructions if you need
</span><br>
<span class="quotelev1">&gt; Fortran bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1087/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1088.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Previous message:</strong> <a href="1086.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Reply:</strong> <a href="1117.php">Brian Barrett: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
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
